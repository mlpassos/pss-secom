<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscricao_model extends CI_Model {

        public $codigo;
        public $data_criado;
        public $nome;
        public $email;
        public $celular;
        public $cpf;
        public $identidade;
        public $data_nascimento;
        public $escolaridade;
        public $cep;
        public $logradouro;
        public $complemento;
        public $bairro;
        public $cidade;
        public $estado;
        public $documento_identidade;

        public function __construct() {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function inserir($inscricao) {
                
                
                // hack pra converter data do input html5 no formato mysql
                $ano = date("Y",strtotime($inscricao['data_nascimento']));
                $mes = date("m",strtotime($inscricao['data_nascimento']));
                $dia = date("d",strtotime($inscricao['data_nascimento']));
                // instancia o objeto
                $this->codigo = NULL;
                $this->data_criado = date('Y-m-d', time());
                $this->nome = $inscricao['nome'];
                $this->email = $inscricao['email'];
                $this->celular = $inscricao['celular'];
                $this->cpf = $inscricao['cpf'];
                $this->identidade = $inscricao['identidade'];
                $this->data_nascimento = $ano . '-' . $mes . '-' . $dia;
                $this->escolaridade = $inscricao['escolaridade'];
                
                $this->cep = $inscricao['cep'];
                $this->logradouro = $inscricao['logradouro'];
                $this->complemento = $inscricao['complemento'];
                $this->bairro = $inscricao['bairro'];
                $this->cidade = $inscricao['cidade'];
                $this->estado = $inscricao['estado'];
               
                $this->documento_identidade = $inscricao['documento_identidade'];
                
                // $this->codigo_funcao = (int) $usuario['codigo_funcao'];
                // $this->codigo_perfil = (int) $usuario['codigo_perfil'];
                // $this->codigo_status = 1;
                // echo "<pre>";
                //   var_dump($this);
                // echo "</pre>";

                if ($this->db->insert('inscricao', $this)) {
                  $inserido = $this->db->insert_id();
                  return true;//<br>Código: " . $inserido;
                } else {
                  return false;      
                }
        }

        // public function alterar($codigo) {
        //         $this->title    = $_POST['title']; // please read the below note
        //         $this->content  = $_POST['content'];
        //         $this->date     = time();

        //         $this->db->insert('entries', $this);
        // }

        // public function excluir($codigo) {
        //         $this->db->where('codigo', $codigo);
        //         return $this->db->delete('tb_livro');
        // }
        // public function listar() {
        //         $this->db->select('*');
        //         $this->db->from('usuario');
        //         $this->db->join('usuario_funcao', 'usuario_funcao.codigo = usuario.codigo_funcao');
        //         $query = $this->db->get();
        //         return $query->result_array();
        // }
        // public function listarPorCodigo($codigo_usuario) {
        //         $this->db->select('u.codigo as codigo, u.nome as nome, u.sobrenome as sobrenome, u.arquivo_avatar as arquivo_avatar, u.email as email');
        //         $this->db->from('usuario as u');
        //         $this->db->join('usuario_funcao as uf', 'uf.codigo = u.codigo_funcao');
        //         $this->db->where('u.codigo', $codigo_usuario);
        //         $query = $this->db->get();
        //         return $query->result_array();
        // }
        // public function listarPorCodigos($codigos) {
        //         // $this->db->select('*');
        //         $this->db->select('u.codigo as codigo, u.nome as nome, u.sobrenome as sobrenome, u.arquivo_avatar as arquivo_avatar, u.email as email');
        //         $this->db->from('usuario as u');
        //         $this->db->join('usuario_funcao as uf', 'uf.codigo = u.codigo_funcao');
        //         $this->db->where_in('u.codigo', $codigos);
        //         $query = $this->db->get();
        //         return $query->result_array();
        // }
        // public function listarAux() {
        //         $this->db->select('codigo, nome, sobrenome, arquivo_avatar');
        //         $this->db->from('usuario');
        //         $query = $this->db->get();
        //         return $query->result_array();
        // }
        // public function listarPorUsuarioSenha($usuario,$senha) {
        //         $senha = MD5($senha);
        //         $this->db->where('login', $usuario);
        //         $this->db->where('senha', $senha);
        //         $query = $this->db->get('usuario');
        //         return $query->result_array();              
        // }
        // public function listarPorUsuario($usuario) {
        //         $this->db->where('login', $usuario);
        //         $query = $this->db->get('usuario');
        //         return $query->result_array();              
        // }

}