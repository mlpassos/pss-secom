<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container ajaxload">
<div class="row">
  <!-- <div class="col-lg-4"></div> -->
  <div class="col-lg-12 col-md-12">
    <div class="well bg-success">
      O usuário <strong><?php echo $nome; ?></strong> foi adicionado com sucesso.
      <br>
      <?php 
        if ($email_confirmacao) {
          echo "Verifique sua caixa postal para confirmar sua inscrição.";
        } else {
          echo "Erro ao enviar e-mail de confirmação, entre em contato com a SECOM-PA para confirmar sua inscrição.";
        }
      ?>
      <?php 
      foreach ($upload_data as $item => $value):?>
        <li><?php echo $item;?>: <?php //$value['file_name'] . ' enviado com sucesso.';?>
      <?php
        foreach ($value as $it => $val):
          if ($it == "error") {
            echo "Deu bug ao enviar o arquivo.";
          } else {
            echo $val['file_name'] . ' enviado com sucesso<br>';    
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