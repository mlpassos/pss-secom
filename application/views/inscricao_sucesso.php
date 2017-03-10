<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container ajaxload">
<div class="row">
  <!-- <div class="col-lg-4"></div> -->
  <div class="col-lg-12 col-md-12">
    <div class="well bg-success">
      O usuário <strong><?php echo $nome; ?></strong> foi adicionado com sucesso.

      <?php 
        // if ($email_confirmacao) {
        //   echo "Verifique sua caixa postal para confirmar sua inscrição.";
        // } else {
        //   echo "Erro ao enviar e-mail de confirmação, entre em contato com a SECOM-PA para confirmar sua inscrição.";
        // }
      ?>

      <h3>Seu documentos foram enviados com sucesso!</h3>

      <ul>
      <?php 
      // echo "<pre>";
      //       var_dump($upload_data);
      //     echo "</pre>";
      foreach ($upload_data as $item => $value):?>
        <li><?php echo $item;?>: <?php //$value['file_name'] . ' enviado com sucesso.';?>
      <?php
        // echo "<pre>";
        //   var_dump($value);
        // echo "</pre>";
        foreach ($value as $it => $val):
          // echo "<pre>";
          //   var_dump($it);
          // echo "</pre>";
          if ($it == "image_type") {
            echo $val . ' enviado com sucesso<br>';  
          } //else {
          //   echo "Erro ao enviar arquivo. Tente novamente.";
          // }
          
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