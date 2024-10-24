<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shows extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('show_model');
    }

    public function index() {
        $shows = $this->show_model->get_all_shows();

        $data = [
            'current_page' => 'shows',
            'shows' => $shows
        ];

        $this->load->view('componentes/navbar', $data);

        if($this->session->userdata('esAdmin')) {
            $this->load->view('admin/inicioAdmin', $data);
        } else {
            $this->load->view('shows/shows', $data);
        }     

    }

    // muestra el detalle de un solo show
    public function show($id)
    {
        $show = $this->show_model->get_show_by_id($id);

        if($show == null) {
            show_404();
        }

        $data = [
            'current_page' => 'detalleShow',
            'show' => $show,
            'errormsg' => ''
        ];
    
        $this->load->view('componentes/navbar', $data);
        $this->load->view('shows/detalleShow', $data);
    }

    public function validarSesion($idShow){
        if($this->session->has_userdata('nombre')){
            $this->compraExitosa($idShow);
        }else{
            $this->faltaIniciarSesion($idShow);
        }
    }

    public function create() {
        $this->load->view('componentes/navbar');
        $this->load->view('shows/create');
    }

    public function delete($id) {
        $this->load->model('CompraM');
        $this->CompraM->delete_compras_by_espectaculo($id);
        $this->show_model->delete_show_by_id($id);
        redirect('shows');
    }

    public function store() {
        // Configuración para la subida de archivos
        $config['upload_path'] = './assets/imagenes/shows/'; // Ruta del servidor donde se guardan los ficheros
        $config['allowed_types'] = 'gif|jpg|png'; // Tipos de archivos permitidos
        $config['max_size'] = 2048; // Tamaño máximo (en KB)
    
        // Cargar la librería de subida
        $this->load->library('upload', $config);
    
        // Verificar si el archivo se subió correctamente
        if ($this->upload->do_upload('imagenShow')) {
            // Obtener los datos del archivo subido
            $upload_data = $this->upload->data();
            $image_path = 'assets/imagenes/shows/' . $upload_data['file_name']; // Ruta de la imagen para almacenar en la BD
        } else {
            // Mostrar error en caso de que la subida falle
            $error = $this->upload->display_errors();
            // Podrías manejar el error aquí, por ejemplo redireccionar o mostrar un mensaje
            echo $error;
            return;
        }
    
        // Preparar los datos para guardar en la base de datos
        $show_data = [
            'nombre' => $this->input->post('nombreShow'),
            'fecha' => $this->input->post('fechaShow'),
            'imagen' => $image_path, // Guardar la ruta de la imagen
            'cant_entradas_disponibles' => $this->input->post('cantEntradasShow'),
            'precio_entradas' => $this->input->post('precioEntradasShow'),
            'descripcion' => $this->input->post('descripcionShow')
        ];
    
        // Guardar los datos en la base de datos utilizando el modelo
        $this->show_model->add_new_show($show_data);
    
        // Redirigir a la página de listado de shows
        redirect('shows');
    }
    

    public function compraExitosa($idShow){
        $data['current_page'] = 'compra_exitosa';
        $data['errormsg'] = '';
        $cantEntradas = filter_input(INPUT_POST, 'cantidad', FILTER_SANITIZE_SPECIAL_CHARS);
        
        $this->load->model('CompraM');
        $this->load->model('Show_model');

        if($this->CompraM->insert_compra($this->session->userdata('email'), $idShow, $cantEntradas) == 0){
            $this->Show_model->restar_entradas($idShow, $cantEntradas);
            $showComprado = $this->Show_model->get_show_by_id($idShow);
            $this->email->from('unlaarena@gmail.com', 'UNLA ARENA');
            $this->email->to($this->session->userdata('email'));

            $this->email->subject('Detalles de tu compra');
            $emailMessage = "Estimado, le enviamos los detalles de su compra: " . "<br />\n";
            $emailMessage .= "Nombre del show: ". $showComprado->nombre. "<br />\n";
            $emailMessage .= "Usuario: ". $this->session->userdata('nombre') . "<br />\n";
            $emailMessage .= "Cantidad de entradas compradas: ". $cantEntradas;
            $this->email->message($emailMessage);

            if($this->email->send()){
                $data['emailEnviado'] = '';
            }else{
                $data['emailEnviado'] = 'NO SE ENVIO :(';
                show_error($this->email->print_debugger());             
                
            }

            $this->load->view('componentes/navbar', $data);
            $this->load->view('shows/compra_exitosa', $data);
        }else{
            $data['current_page'] = 'detalle_show';
            $data['errormsg'] = 'Hubo un error en la compra';

            $this->load->view('componentes/navbar', $data);
            $this->load->view('shows/detalleShow', $data);
        }
        
    }

    public function faltaIniciarSesion($id)
    {
        $show = $this->show_model->get_show_by_id($id);

        if($show == null) {
            show_404();
        }

        $data = [
            'current_page' => 'detalleShow',
            'show' => $show,
            'errormsg' => 'Debe iniciar sesión para realizar la compra'
        ];
        
        $this->load->view('componentes/navbar', $data);
        $this->load->view('shows/detalleShow', $data);
    }
}