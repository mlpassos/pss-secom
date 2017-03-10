
<?php 

$config = array(
        'inscricao/adicionar' => array(
                array(
                        'field' => 'nome',
                        'label' => 'Nome',
                        'rules' => 'trim|required', 
                        'errors' => array(
                                "required" => "O campo %s é necessário."
                        )
                ),
                array(
                        'field' => 'email',
                        'label' => 'E-mail',
                        'rules' => 'trim|required|valid_email|is_unique[inscricao.email]',
                        'errors' => array(
                                "required" => "O campo %s é necessário.",
                                "valid_mail" => "O campo %s deve conter um endereço válido.",
                                "is_unique" => "O %s já está associado a outra inscrição."
                                )
                ),
                array(
                        'field' => 'celular',
                        'label' => 'Celular',
                        'rules' => 'trim|required', 
                        'errors' => array(
                                "required" => "O campo %s é necessário."
                        )
                ),
                array(
                        'field' => 'cpf',
                        'label' => 'CPF',
                        'rules' => 'trim|required|max_length[14]', 
                        'errors' => array(
                                "required" => "O campo %s é necessário."
                        )
                ),
                array(
                        'field' => 'identidade',
                        'label' => 'Identidade',
                        'rules' => 'trim|required', 
                        'errors' => array(
                                "required" => "O campo %s é necessário."
                        )
                ),
                array(
                        'field' => 'data_nascimento',
                        'label' => 'Data de nascimento',
                        'rules' => 'trim|required', 
                        'errors' => array(
                                "required" => "O campo %s é necessário."
                        )
                ),
                array(
                        'field' => 'escolaridade',
                        'label' => 'Escolaridade',
                        'rules' => 'required|callback_check_default', 
                        'errors' => array(
                                "required" => "O campo %s é necessário.",
                                "check_default"=>"O campo precisa ser diferente de Escolher"
                        )
                ),
                array(
                        'field' => 'cep',
                        'label' => 'CEP',
                        'rules' => 'trim|required|max_length[10]', 
                        'errors' => array(
                                "required" => "O campo %s é necessário."
                        )
                ),
                array(
                        'field' => 'logradouro',
                        'label' => 'Logradouro',
                        'rules' => 'trim|required', 
                        'errors' => array(
                                "required" => "O campo %s é necessário."
                        )
                ),
                array(
                        'field' => 'complemento',
                        'label' => 'Complemento',
                        'rules' => 'trim', 
                        'errors' => array(
                                "required" => "O campo %s é necessário."
                        )
                ),
                array(
                        'field' => 'bairro',
                        'label' => 'Bairro',
                        'rules' => 'trim|required', 
                        'errors' => array(
                                "required" => "O campo %s é necessário."
                        )
                ),
                array(
                        'field' => 'cidade',
                        'label' => 'Cidade',
                        'rules' => 'trim|required', 
                        'errors' => array(
                                "required" => "O campo %s é necessário."
                        )
                ),
                array(
                        'field' => 'estado',
                        'label' => 'Estado',
                        'rules' => 'required|callback_check_default', 
                        'errors' => array(
                                "required" => "O campo %s é necessário.",
                                "check_default"=>"O campo precisa ser diferente de Escolher"
                        )
                ),
                array(
                        'field' => 'documento_identidade',
                        'label' => 'Identidade',
                        'rules' => 'callback_documento_identidade_selected', 
                        'errors' => array(
                                "documento_identidade_selected" => "O arquivo %s é necessário."
                        )
                ),
                array(
                        'field' => 'documento_cpf',
                        'label' => 'CPF',
                        'rules' => 'callback_documento_cpf_selected', 
                        'errors' => array(
                                "documento_cpf_selected" => "O arquivo %s é necessário."
                        )
                )
        )
);

$config['error_prefix'] = '<div class="alert alert-danger"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&nbsp;<span class="sr-only">Error:</span>';
$config['error_suffix'] = '</div>';