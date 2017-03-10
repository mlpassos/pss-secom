<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container ajaxload">
<div class="row">
  <!-- <div class="col-lg-4"></div> -->
  <div class="col-lg-12 col-md-12">
    <div class="well">
      <?php if (isset($nome)) { ?>
        <p class="alert alert-success">
          O usuário <strong><?php echo $nome; ?></strong> foi adicionado com sucesso.
        </p>
      <?php } else { ?>

        <p class="alert alert-danger">
        Não foi possível completar sua inscrição. Por favor, tente novamente.
        <br>
        Caso o problema continue, entre em contato com a SECOM-PA e informe o erro: "Problema ao gravar no banco de dados."
        </p>
      <?php } ?>
      <h3>Documentos anexados</h3>
      <ul>
      <?php 
      foreach ($upload_data as $item => $value):?>
        <li><?php echo $item;?>:
      <?php
        foreach ($value as $it => $val):
          if ($it == "error") {
            echo '<br><br>';
            echo '<p class="alert alert-danger">';
            echo "<b>Erro</b> ao enviar arquivo.<br>Por favor, tente novamente. Caso o problema continue, entre em contato com a SECOM-PA e informe o erro: 'Problema ao gravar o arquivo.'";
            echo '</p>';
          } else {
            echo "<br>" . $val['file_name'] . ' enviado com sucesso<br>';    
          }
      ?>
        </li>
      <?php 
        endforeach; 
      endforeach;
      ?>
      </ul>
      
    </div>
  </div>
  <!-- <div class="col-lg-4"></div> -->
</div>
</div><!-- /.container -->