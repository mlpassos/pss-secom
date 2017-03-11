<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container ajaxload">
<div class="row">
  <!-- <div class="col-lg-4"></div> -->
  <div class="col-lg-12 col-md-12">
    <div class="well">
      <p class="alert alert-success">
        <strong><?php echo $nome; ?></strong>, sua inscrição foi enviada.
      </p>
      <h3>Documentos anexados</h3>
      <ul class="fa-ul">
        <?php
        foreach ($upload_data as $item => $value):?>
          <li><?php // echo $item;?> <?php //$value['file_name'] . ' enviado com sucesso.';?>
        <?php
          foreach ($value as $it => $val):
            // echo '<p>';
            echo '<i class="fa-li fa fa-check-square"></i>' . '<b>' . $val['file_name'] . '</b> enviado com sucesso';
            // echo '</p>';
        ?>
          </li>
        <?php 
          endforeach; 
        endforeach;
        ?>
      </ul>
      <p>
      <?php 
        if ($email_confirmacao) {
          echo '<small>* Verifique sua caixa postal para confirmar seus dados.</small>';
        } else {
          echo '<small>* Erro ao enviar e-mail de confirmação, entre em contato com a SECOM-PA para confirmar sua inscrição.</small>';
        }
      ?>
      </p>
      
    </div>
  </div>
  <!-- <div class="col-lg-4"></div> -->
</div>
</div><!-- /.container -->