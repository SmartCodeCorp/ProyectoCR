<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf_Productos extends CI_Controller {

        public function index(){
                $this->load->view('BackEnd/Template/header');
        }





         function datos_bd(){
                $this->load->model('Mdl_PdfProductos');
              $this->load->library('mydompdf');

                $data['productos'] = $this->Mdl_PdfProductos->getUsuarios();
                $html= $this->load->view('PDF/datos_bd', $data, true);
              $this->mydompdf->load_html($html);
              $this->mydompdf->render();
                $this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
              $this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
         }

}
