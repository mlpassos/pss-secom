<div class="container ajaxload">
<?php if ($this->session->userdata('logado')==true) { ?>
<div class="row">
	<!-- <div class="col-lg-4"></div> -->
	<div class="col-lg-12 col-md-12">
		<div class="well">
			<p class="projetos-sucesso bg-success">
				O projeto <strong><?php echo $projeto['titulo']; ?></strong> foi criado com sucesso.
			</p>
		</div>
		<a href="<?php echo base_url() . 'tarefa/adicionar/' . $codigo_projeto; ?>" class="btn btn-primary btn-medium" role="button">Adicionar tarefas ao projeto</a>
	</div>
	<!-- <div class="col-lg-4"></div> -->
</div>
<?php } ?>
</div><!-- /.container -->