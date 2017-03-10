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
		// $this->output->enable_profiler(TRUE);
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
			// ,
			// array('file' =>  base_url() . 'assets/js/inscricao_adicionar.js')
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

			

			$upload_data = array(
				"documento_identidade"=>$this->multiUpload('documento_identidade'),
				"documento_cpf"=>$this->multiUpload('documento_cpf')
			);
			$erro = '';
			foreach ($upload_data as $key => $value) {
				if (array_key_exists('error', $value)) {
					// echo "<pre>";
					// 	var_dump($value);
					// echo "</pre>";	
					// echo $value['error'];
					//echo $erro = true;
					$erro = $value['error'];
				} else {
					// passou todos os uploads com sucesso, escreve no banco agora
					// var_dump($upload_data[$key]);
					// echo "<pre>";
					// 	var_dump($key);
					// echo "</pre>";	
					$inscricaoTemp = $upload_data[$key];
					// $inscricao[$key]['upload_data']['file_name'];
					// echo "<pre>";
					// 	var_dump($inscricaoTemp['upload_data']['file_name']);
					// echo "</pre>";
					$inscricao[$key]=$inscricaoTemp['upload_data']['file_name'];
				}
			}
			// echo "<pre>";
			// 	var_dump($inscricao);
			// echo "</pre>";	
			// $inscricao['documento_identidade'] = $upload_data['documento_identidade'];
			// $inscricao['documento_cpf'] = $upload_data['documento_cpf'];
			$data['upload_data'] = $upload_data;

			// scale image to thumbnail size 120x120
			// $config['image_library'] = 'gd2';
			// $config['source_image']	= './uploads/' . $this->upload->data('file_name');
			// $config['create_thumb'] = FALSE;
			// $config['maintain_ratio'] = TRUE;
			// // $config['width']	= 120;
			// // $config['height']	= 120;

			// $this->load->library('image_lib', $config); 
			// $this->image_lib->resize();

			// adiciona a inscrição caso não tenha erros
			if (!$erro) {
				$this->load->model('inscricao_model');
				if ($this->inscricao_model->inserir($inscricao)) {
					// SUCESSO TOTAL
					$nome = $inscricao['nome'];
					$data['nome'] = $nome;

					$message = "<b>" . $nome . "</b>, sua inscrição no PSS-SECOM foi confirmada.";
					$to = $inscricao['email'];
					
					$data['email_confirmacao'] = $this->sendMail($to, $nome, $message);
					
					$this->load->view('inscricao_sucesso', $data);
				} else {
					// ERRO: BANCO DE DADOS
					$this->load->view('inscricao_erro', $data);
				}
			} else {
				// ERRO: ARQUIVOS
				$this->load->view('inscricao_erro', $data);
			}
		}

		$this->load->view('footer',$data_footer);	
	}
	function multiUpload($field_name) {
		return $this->do_upload($field_name);
		// $out = $this->upload->data();
		// var_dump($out);
		// return $out;
	}
	function check_default($element) {
		// var_dump($element);
    	if($element == 'Escolher') {   
    		// echo 'igual';
      		return FALSE;
    	} else { 
    		return true;
    	}
	}
	function documento_identidade_selected() {
		if (empty($_FILES['documento_identidade']['name'])) {
            return false;
        }else{
            return true;
        }
	}
	function documento_cpf_selected() {
		if (empty($_FILES['documento_cpf']['name'])) {
            return false;
        }else{
            return true;
        }
	}
	function do_upload($field_name) {
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '3072';
		$config['max_width']  = '0';
		$config['max_height']  = '0';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload($field_name))
		{
			$error = array('error' => $this->upload->display_errors());
			// var_dump($error);
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
	function sendMail($to, $name, $message) {
		$this->load->library('email', $this->config->load('email'));
		$this->email->set_newline("\r\n");
	    $this->email->from('marciopassosbel@gmail.com');
	    $this->email->to($to);
	    $this->email->subject($name . ', confirmação de inscrição no PSS SECOM-PA');
	    $this->email->message($message);
	    return $this->email->send();
	}
}
