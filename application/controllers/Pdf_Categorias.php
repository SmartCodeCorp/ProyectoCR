<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf_Categorias extends CI_Controller {

        public function index(){
                $this->load->view('BackEnd/Template/header');
        }





         function datos_bd(){
                $this->load->model('Mdl_PdfCategorias');
              $this->load->library('mydompdf');

              $data['categorias'] = $this->Mdl_PdfCategorias->getCategorias();
              $html= $this->load->view('PDF/vw_PdfCat', $data, true);
              $this->mydompdf->load_html($html);
              $this->mydompdf->render();
              $this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
              $this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
         }

}
