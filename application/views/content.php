<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 form-inscricao-box">
			<?php echo form_open_multipart('inscricao/adicionar', ["id" => "frmInscricao", "class" => "frm-inscricao", "role" => "form"]); ?>
				<div class="col-lg-8 col-md-8">
				  <div class="form-group">
				    <label for="nome">Nome*</label>
				    <?php echo form_error('nome'); ?>
				    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo set_value('nome'); ?>" placeholder="Nome">
				  </div>
				  <div class="form-group">
				    <label for="email">E-mail*</label>
				    <?php echo form_error('email'); ?>
				    <input type="email" class="form-control" value="<?php echo set_value('email'); ?>" id="email" name="email" placeholder="Email">
				  </div>
				  <div class="form-group">
				    <label for="celular">Tel. Celular*</label>
				    <?php echo form_error('sobrenome'); ?>
				    <input type="text" class="form-control mask-celular" value="<?php echo set_value('celular'); ?>" id="celular" name="celular" placeholder="Celular">
				  </div>
				  <div class="form-group">
				    <label for="cpf">CPF*</label>
				    <?php echo form_error('cpf'); ?>
				    <input type="text" class="form-control validar" value="<?php echo set_value('cpf'); ?>" id="cpf" name="cpf" placeholder="CPF">
				  </div>
				  <div class="form-group">
				    <label for="identidade">Identidade*</label>
				    <?php echo form_error('cpf'); ?>
				    <input type="text" class="form-control" value="<?php echo set_value('identidade'); ?>" id="identidade" name="identidade" placeholder="Identidade">
				  </div>
				  <div class="form-group">
				    <label for="data_nascimento">Data de nascimento</label>
				    <?php echo form_error('data_nascimento'); ?>
				    <input type="date" class="form-control" value="<?php echo set_value('data_nascimento'); ?>" id="data_nascimento" name="data_nascimento">
				  </div>
				  <div class="form-group">
					    <label for="escolaridade">Escolaridade</label>
					    <?php echo form_error('escolaridade'); ?>
					    <?php 
					    $arrRes = array(
					    	"Escolher"=>"Escolher",
					    	"Primeiro Grau completo"=>"Primeiro Grau completo",
					    	"Segundo Grau completo"=>"Segundo Grau completo",
					    	"Ensino Superior completo"=>"Ensino Superior completo",
					    	"Pós-graduação"=>"Pós-graduação",
					    	"Mestrado"=>"Mestrado",
					    	"Doutorado"=>"Doutorado",
					    	"Pós-doutorado"=>"Pós-doutorado"
					    );
					    echo form_dropdown('escolaridade', $arrRes, set_value('escolaridade'), array('id'=>'escolaridade','class'=>'form-control')); 
					    ?>
				  </div>
				  <div class="form-group">
				    <label for="cep">CEP*</label>
				    <?php echo form_error('cep'); ?>
				    <input type="text" class="form-control validarCEP mask-cep" value="<?php echo set_value('cep'); ?>"  id="cep" name="cep" placeholder="CEP">
				  </div>
				  <div class="form-group">
				    <label for="logradouro">Logradouro*</label>
				    <?php echo form_error('logradouro'); ?>
				    <input type="text" class="form-control" id="logradouro" value="<?php echo set_value('logradouro'); ?>" name="logradouro" placeholder="Logradouro">
				  </div>
				  <div class="form-group">
				    <label for="complemento">Complemento</label>
				    <?php echo form_error('complemento'); ?>
				    <input type="text" class="form-control" value="<?php echo set_value('complemento'); ?>" id="complemento" name="complemento" placeholder="Complemento">
				  </div>
				  <div class="form-group">
				    <label for="bairro">Bairro*</label>
				    <?php echo form_error('bairro'); ?>
				    <input type="text" class="form-control" value="<?php echo set_value('bairro'); ?>"  id="bairro" name="bairro" placeholder="Bairro">
				  </div>
				  <div class="form-group">
				    <label for="cidade">Cidade*</label>
				    <?php echo form_error('cidade'); ?>
				    <input type="text" class="form-control" value="<?php echo set_value('cidade'); ?>"  id="cidade" name="cidade" placeholder="Cidade">
				  </div>
				  <div class="form-group">
					    <label for="estado">Estado</label>
					    <?php echo form_error('estado'); ?>
					    <?php 
					    $estadosBrasileiros = array(
					    	'Escolher'=>'Escolher',
							'AC'=>'Acre',
							'AL'=>'Alagoas',
							'AP'=>'Amapá',
							'AM'=>'Amazonas',
							'BA'=>'Bahia',
							'CE'=>'Ceará',
							'DF'=>'Distrito Federal',
							'ES'=>'Espírito Santo',
							'GO'=>'Goiás',
							'MA'=>'Maranhão',
							'MT'=>'Mato Grosso',
							'MS'=>'Mato Grosso do Sul',
							'MG'=>'Minas Gerais',
							'PA'=>'Pará',
							'PB'=>'Paraíba',
							'PR'=>'Paraná',
							'PE'=>'Pernambuco',
							'PI'=>'Piauí',
							'RJ'=>'Rio de Janeiro',
							'RN'=>'Rio Grande do Norte',
							'RS'=>'Rio Grande do Sul',
							'RO'=>'Rondônia',
							'RR'=>'Roraima',
							'SC'=>'Santa Catarina',
							'SP'=>'São Paulo',
							'SE'=>'Sergipe',
							'TO'=>'Tocantins'
						);
					    echo form_dropdown('estado', $estadosBrasileiros, set_value('estado'), array('id'=>'estado','class'=>'form-control')); 
					    ?>
				  </div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
				  		<h3>Documentos anexados</h3>
				  	</div>
					<div class="form-group avatar">
				  		<label for="documento_identidade">Identidade*</label>
				  		<?php echo form_error('documento_identidade'); ?>
				  		<div class="preview_imagem documento_identidade">
				  			<img src="http://placehold.it/80x80" alt="Preview da imagem do documento de identidade" class="imagem_avatar img-circle">
					    </div>
					    <p class="help-block">Escolha seu arquivo. Tipos de imagem permitidos: png, jpg, gif. Tamanho máximo: 5MB.</p>
					    <?php 
						    echo form_upload(array(
						    	"id" => "documento_identidade",
						    	"class" => "imagem_documentos",
						    	"name" => "documento_identidade",
						    	"value" => set_value('documento_identidade')
						    )); 
					    ?>
				    </div>
				    <div class="form-group avatar">
				  		<label for="documento_cpf">CPF*</label>
				  		<?php echo form_error('documento_cpf'); ?>
				  		<div class="preview_imagem documento_cpf">
				  			<img src="http://placehold.it/80x80" alt="Preview da imagem do documento CPF" class="imagem_avatar img-circle">
					    </div>
					    <p class="help-block">Escolha seu arquivo. Tipos de imagem permitidos: png, jpg, gif. Tamanho máximo: 5MB.</p>
					    <?php 
						    echo form_upload(array(
						    	"id" => "documento_cpf",
						    	"class" => "imagem_documentos",
						    	"name" => "documento_cpf",
						    	"value" => set_value('documento_cpf')
						    )); 
					    ?>
				    </div>
				</div>
				<div class="col-lg-12">
					<button type="submit" class="btn btn-default">
						Gravar
					</button>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div><!-- /.row -->
</div><!-- /.container -->