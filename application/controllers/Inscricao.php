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
				"link" => base_url(),
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
			$inscricao = $this->input->post();
			$upload_data = array(
				"documento_identidade"=>$this->multiUpload('documento_identidade'),
				"documento_cpf"=>$this->multiUpload('documento_cpf'),
				"documento_certidao_nascimento_casamento"=>$this->multiUpload('documento_certidao_nascimento_casamento'),
				"documento_titulo_eleitoral"=>$this->multiUpload('documento_titulo_eleitoral'),
				"documento_comprovante_residencia"=>$this->multiUpload('documento_comprovante_residencia')
			);
			$erro = false;
			foreach ($upload_data as $key => $value) {
				if (array_key_exists('error', $value)) {
					$erro = $value['error'];
				} else {
					$inscricaoTemp = $upload_data[$key];
					$inscricao[$key]=$inscricaoTemp['upload_data']['file_name'];
				}
			}
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
					$message .= "<p>Confira seus dados:</p>";
					$message .= "<ul>";
					foreach ($inscricao as $key => $value) {
						$message .= '<li>' . $key . ': ' . $value . '</li>';
					}
					$message .= "</ul>";
					$message .= "<p><small>* Caso exista algum erro/problema, entre em contato com a SECOM-PA.</small></p>";
					$to = $inscricao['email'];
					
					$data['email_confirmacao'] = $this->sendMail($to, $nome, $message);
					$data['erro_tipo'] = 'noerror';
					$this->load->view('inscricao_sucesso', $data);
				} else {
					// ERRO: BANCO DE DADOS
					$data['erro_tipo'] = 'db';
					$this->load->view('inscricao_erro', $data);
				}
			} else {
				// ERRO: ARQUIVOS
				$data['erro_tipo'] = 'arquivos';
				echo "<pre>";
					// var_dump($data['upload_data']);
				echo "</pre>";
				// apaga arquivos enviados e que nao deram erro pra nao gerar lixo
				$this->load->helper('file');
				foreach ($data['upload_data'] as $key => $value) {
					if (array_key_exists('upload_data', $value)) {
						// acha arquivo e apaga
						if (read_file('./uploads/' . $value['upload_data']['file_name'])) {
							if (unlink('./uploads/' . $value['upload_data']['file_name'])) {
								echo 'Arquivo ' . $value['upload_data']['file_name'] . ' excluido com sucesso.<br>';
							} else {
								echo 'Erro ao excluir arquivo.';
							}
						}
						// echo $value['upload_data']['file_name'] . "<br>";	

					}
				}
				$this->load->view('inscricao_erro', $data);
			}
		}

		$this->load->view('footer',$data_footer);	
	}
	function multiUpload($field_name) {
		return $this->do_upload($field_name);
	}
	function check_default($element) {
    	if($element == 'Escolher') {   
      		return FALSE;
    	} else { 
    		return true;
    	}
	}
	function documento_identidade_selected() {
	
		if (empty($_FILES['documento_identidade']['name'])) {
            // echo 'aqui nao';
            return false;
        }else{
        	// echo 'aqui tem';
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
	function documento_certidao_nascimento_casamento_selected() {
		if (empty($_FILES['documento_certidao_nascimento_casamento']['name'])) {
	        return false;
	    }else{
	        return true;
	    }
	}
	function documento_titulo_eleitoral_selected($value) {
		if (empty($_FILES['documento_titulo_eleitoral']['name'])) {
            return false;
        }else{
            return true;
        }
	}
	function documento_comprovante_residencia_selected($value) {
		if (empty($_FILES['documento_comprovante_residencia']['name'])) {
            return false;
        }else{
            return true;
        }
	}
	
	function do_upload($field_name) {
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '5120';
		$config['max_width']  = '0';
		$config['max_height']  = '0';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload($field_name))
		{
			$error = array('error' => $this->upload->display_errors());
			return $error;
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			return $data;
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
