<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscricao extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		// nada aqui
	}
	public function adicionar() {
		$this->output->enable_profiler(TRUE);
		$data_header['meta']=array(
			array(
			"name" => "title",
			"content" => "PSS SECOM-PA"
			),
			array(
			"name" => "description",
			"content" => "Sistema para inscrição no Processo Seletivo Secom"
			),
			array(
			"name" => "keywords",
			"content" => "sistema, inscrição, pss, secom, belém, pará"
			)
		);
		// MENU
		$data_header['menu']=array(
			array(
				"name" => "Inscrição",
				"link" => base_url() . 'inscricao',
				"class" => ""
				)
		);
		// CSS
		$data_header['css']=array(
			array('file' => 'estilos-principal.css')
		); 
		// JS
		$data_footer['js']=array(
			array('file' =>  base_url() . 'assets/js/global.js')
		);


		$this->load->library('form_validation');

		// page rendering

		$this->load->view('header',$data_header);

		if ($this->form_validation->run() == FALSE) {
			// se não é válido o formulário, recarrega página com mensagens de erro.
			$this->load->view('content', $data_header);
		}
		else {
			// $this->load->view('inscricao_sucesso', $data);
			$inscricao = $this->input->post();

			$up = $this->do_upload();
			$data['upload_data'] = $this->upload->data();
			$inscricao['documento_identidade'] = $this->upload->data('file_name');

			// scale image to thumbnail size 120x120
			// $config['image_library'] = 'gd2';
			// $config['source_image']	= './uploads/' . $this->upload->data('file_name');
			// $config['create_thumb'] = FALSE;
			// $config['maintain_ratio'] = TRUE;
			// // $config['width']	= 120;
			// // $config['height']	= 120;

			// $this->load->library('image_lib', $config); 
			// $this->image_lib->resize();

			// add user to database
			$this->load->model('inscricao_model');
			if ($this->inscricao_model->inserir($inscricao)) {

				$data['nome'] = $inscricao['nome'];
				$this->load->view('inscricao_sucesso', $data);
			} else {
				echo "Oops, deu bug. Tente novamente? =]";
			}
		}

		$this->load->view('footer',$data_footer);	
	}
	function check_default($element) {
		// var_dump($element);
    	if($element == 'Escolher') {   
    		echo 'igual';
      		return FALSE;
    	} else { 
    		return true;
    	}
	}
	function file_selected_test() {

    	if (empty($_FILES['documento_identidade']['name'])) {
            return false;
        }else{
            return true;
        }
	}
	function do_upload() {
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '0';
		$config['max_width']  = '0';
		$config['max_height']  = '0';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			return $error;
			// $this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			return $data;
			// $this->load->view('upload_success', $data);
		}
	}
	// function checar_email($email) {
	// 	//$usuario = "mpassos";
	// 	$this->load->model('inscricao_model');
	// 	$inscricao = $this->usuario_model->listarPorEmail($email);

	// 	if (sizeof($inscricao)==1)
	// 	{
	// 		$this->form_validation->set_message('checar_email', 'O %s já existe, escolha outro.');
	// 		return FALSE;
	// 	}
	// 	else
	// 	{
	// 		return TRUE;
	// 	}
	// }
}
