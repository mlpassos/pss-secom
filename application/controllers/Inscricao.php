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

		$this->load->view('header',$data_header);
		$this->load->view('content');
		$this->load->view('footer',$data_footer);	
	}
}
