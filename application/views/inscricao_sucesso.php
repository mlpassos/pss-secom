<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container ajaxload">
<div class="row">
  <!-- <div class="col-lg-4"></div> -->
  <div class="col-lg-12 col-md-12">
    <div class="well bg-success">
      O usuário <strong><?php echo $nome; ?></strong> foi adicionado com sucesso.

      <h3>Seu documentos foram enviados com sucesso!</h3>

      <ul>
      <?php foreach ($upload_data as $item => $value):?>
      <li><?php echo $item;?>: <?php echo $value;?></li>
      <?php endforeach; ?>
      </ul>
      
    </div>
  </div>
  <!-- <div class="col-lg-4"></div> -->
</div>
</div><!-- /.container -->