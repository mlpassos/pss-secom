<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container ajaxload">
<div class="row">
  <!-- <div class="col-lg-4"></div> -->
  <div class="col-lg-12 col-md-12">
    <div class="well">
      <?php if ($erro_tipo == 'db') { ?>
        <p class="alert alert-danger">
          <i class='fa fa-exclamation-circle'></i> Não foi possível realizar sua inscrição. Por favor, tente novamente. Caso o problema continue, entre em contato com a SECOM-PA e informe o erro: "Problema ao gravar no banco de dados."
        </p>
      <?php } else { ?>
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
            echo "<i class='fa fa-exclamation-circle'></i> <b>Inscrição não realizada</b>, por favor tente novamente.</p>";
            echo "<p><small> * Caso o problema persista, entre em contato com a SECOM-PA e informe o erro: <em>" . strtolower(strip_tags($val)) . "</em></small></p>";
            break 2;
          } 
          else {
            echo '<ul class="fa-ul"><li><i class="fa fa-check-square"></i> ' . '<b>' . $val['file_name'] . '</b> enviado com sucesso</li></ul>';
          }
        ?>
          </li>
        <?php 
          endforeach;
        endforeach;
      }
        ?>
        </ul>
      
    </div>
  </div>
  <!-- <div class="col-lg-4"></div> -->
</div>
</div><!-- /.container -->