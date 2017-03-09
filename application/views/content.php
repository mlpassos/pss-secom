<div class="container ajaxload">
<div class="row">
	<div class="col-lg-12 col-md-12">
		<?php echo form_open_multipart('inscricao/adicionar', ["id" => "frmInscricao", "class" => "frm-inscricao", "role" => "form"]); ?>
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
		  <div class="form-group">
		  	<h3>Documentos anexados</h3>
		  </div>
		  <div class="form-group avatar">
		  		<label for="documento_identidade">Identidade*</label>
		  		<?php echo form_error('documento_identidade'); ?>
		  		<!-- <div id="imagens_avatar" class="imagens_avatar">
		  			<img src="<?php //echo base_url(); ?>assets/images/avatar.gif" alt="avatar do usuário" class="img-circle" id="imagem_avatar">
			    </div> -->
			    <!-- <input type="file" id="exampleInputFile"> -->
			    <?php 
				    echo form_upload(array(
				    	"id" => "documento_identidade",
				    	"name" => "documento_identidade",
				    	"value" => set_value('documento_identidade')
				    )); 
			    ?>
		  </div>
		  
		  <button type="submit" class="btn btn-default">Gravar</button>
		<?php echo form_close(); ?>
	</div>
	<!-- <div class="col-lg-4"></div> -->
</div>
</div><!-- /.container -->