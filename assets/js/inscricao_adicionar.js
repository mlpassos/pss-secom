(function ($) {
    "use strict";
    var fn = {
        // Funcionalidades
        Iniciar: function () {
            fn.App();
        },
        App : function () {
          alert('oi');
            // $('#frmInscricao').submit(function (e) {
            //   e.preventDefault();
            //   alert('aqui');
            //   $('fieldset').attr('disabled', true);
            // });

            // PREVIEW DA IMAGEM DO avatar
            var inputElements = $('.imagem_documentos'); //document.getElementsByClassName("imagem_documentos");
            inputElements.on('change', function(item) {
              console.log('item', this);
              var fileList = this.files;
              console.log('files', fileList);
              mostrarPreview(fileList, this);
            });
            // inputElements.addEventListener("change", function(){
            //   var fileList = this.files;
            //   console.log('files', fileList);
            //   mostrarPreview(fileList);
            // }, false);

            function mostrarPreview(files, el) {
              var files = files;
              // console.log(".preview_imagem." + el.name);
              var $el = $(".preview_imagem." + el.name).parent().find('.preview_imagem');
              console.log($el);
              // $el.parent().find('.preview_imagem').remove();
              $el.fadeOut('slow', function(){
                // $(".imagens_avatar > img").remove();
                var $this = $(this);
                console.log($this);
                $this.children('img').remove();
                for (var i = 0; i < files.length; i++) {
                  var file = files[i];
                  var imageType = /^image\//;
                  if (!imageType.test(file.type)) {
                    continue;
                  }
                  var img = document.createElement("img");
                   img.classList.add("obj");
                   img.classList.add("img-circle");
                   img.setAttribute("width", "80px");
                   img.setAttribute("height", "80px");
                   img.file = file;
                  
                  var tamanho = file.size;
                   var sTamanho = tamanho + " bytes";
                   // optional code for multiples approximation
                   for (var aMultiples = ["KiB", "MiB", "GiB", "TiB", "PiB", "EiB", "ZiB", "YiB"], nMultiple = 0, nApprox = tamanho / 1024; nApprox > 1; nApprox /= 1024, nMultiple++) {
                     sTamanho = nApprox.toFixed(3) + " " + aMultiples[nMultiple] + " (" + tamanho + " bytes)";
                   }
                   $this.next(".avatar .help-block").text('Tamanho: ' + sTamanho);
                  //var preview = $this;// document.getElementById("imagens_avatar");
                   $this.append(img); // Assuming that "preview" is the div output where the content will be displayed.
                  var reader = new FileReader();
                   reader.onload = (function(aImg) { return function(e) { aImg.src = e.target.result; }; })(img);
                   reader.readAsDataURL(file);
                } 
                $el.fadeIn('slow');
              });
            }
        }
        // ,
        // AjaxSubmit: function () {
        //   function showMensagem(el, data, elbox) {
        //     var classe = (data.status == "sucesso") ? "alert alert-success" : "alert alert-danger";
        //     var mensagemHTML = $.parseHTML(data.mensagem);
        //     el.addClass('alert ' + classe +  ' animated-alt-med fadeInUp').html(mensagemHTML).one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
        //           var isso = $(this);
        //           setTimeout(function(){
        //                 isso.removeClass('animated-alt-med fadeInUp').addClass('animated-alt-med fadeOutDown').one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
        //                       isso.removeClass('animated-alt-med fadeOutDown ' + classe).html('');
        //                 });
        //                 if (elbox!=="") {
        //                       setTimeout(function(){
        //                             elbox.hide('slow');
        //                       },1000);
        //                 }
        //           },500);
                  
        //     });
        //   }
        //   $('body').delegate('#frmInscricao', 'submit', function(e) {
        //       e.preventDefault();
        //       // var data = $(this).serialize();
        //       // var location = 'http://' + window.location.hostname + "/demandou-git";
        //       var form = $(this);
        //       var nome = form.find("input[name='nome']").val();
        //       var email = form.find("input[name='email']").val();
        //       var celular = form.find("input[name='celular']").val();
        //       var cpf = form.find("input[name='cpf']").val();
        //       var identidade = form.find("input[name='identidade']").val();
        //       var data_nascimento = form.find("input[name='data_nascimento']").val();
        //       var escolaridade = form.find('sellogradouroect[name="data_nascimento"] option:selected').text();
              
        //       var cep = form.find("input[name='cep']").val();
        //       var logradouro = form.find("input[name='logradouro']").val();
        //       var complemento = form.find("input[name='complemento']").val();
        //       var bairro = form.find("input[name='bairro']").val();
        //       var cidade = form.find("input[name='cidade']").val();
        //       var estado = form.find('sellogradouroect[name="estado"] option:selected').text();




        //       var prioridade = null;
                  
        //           form.find("input[name='prioridade']").each(function(){
        //                 if ($(this).is(':checked')) {
        //                       prioridade = $(this).val();
        //                 }
        //           });
        //           var data_inicio = form.find("#data_inicio").val();
        //           var data_prazo = form.find("#data_prazo").val();
        //           var lider = form.find('#lider').val();
        //           var codigo_status = "";
        //           form.find('#codigo_status').each(function(){
        //                 if ($(this).is(':checked')) {
        //                       codigo_status = $(this).val();
        //                 } else {
        //                       codigo_status = '0';
        //                 }
        //           });
        //           var data = {criado_por, codigo_projeto,titulo,descricao,prioridade,data_inicio,data_prazo,lider,codigo_status};
        //           //alert(data_inicio);
        //           console.log(data);
        //           var el = form.find('.form-message');
        //           el.html('<img src="http://cdn2.rode.com/images/common/ajax-loader-black.gif" alt="imagem mostra que sistema está trabalhando">');//text('Atualizando dados e notificando líder.')
        //           $.ajax({
        //                   url: location,
        //                   type: "POST",
        //                   data: {
        //                       codigo_projeto : codigo_projeto,
        //                       criado_por : criado_por,
        //                       titulo : titulo,
        //                       descricao : descricao,
        //                       prioridade : prioridade,
        //                       data_inicio : data_inicio,
        //                       data_prazo : data_prazo,
        //                       lider : lider,
        //                       codigo_status
        //                   },
        //                   dataType: 'json',
        //                   success: function(data) {
        //                       // checar por erro de validação
        //                       el.html('');
        //                       console.log(data);
        //                       showMensagem(el, data);
        //                       if (data.status !== "erro") {
        //                         var data_p = new Date(data_prazo);
        //                         data_p.setDate(data_p.getDate() + 1);
        //                         var dia = (data_p.getDate().toString().length < 2) ? '0' + data_p.getDate() : data_p.getDate();

        //                         var month = new Array();
        //                         month[0] = "Jan";
        //                         month[1] = "Fev";
        //                         month[2] = "Mar";
        //                         month[3] = "Abr";
        //                         month[4] = "Mai";
        //                         month[5] = "Jun";
        //                         month[6] = "Jul";
        //                         month[7] = "Ago";
        //                         month[8] = "Set";
        //                         month[9] = "Out";
        //                         month[10] = "Nov";
        //                         month[11] = "Dez";
        //                         var mes = month[data_p.getMonth()];
        //                         switch(prioridade) {
        //                             case "3":
        //                                 var prioridadec = 'prioridade-alta';
        //                                 break;
        //                             case "2":
        //                                 var prioridadec = 'prioridade-media';
        //                                 break;
        //                             case "1":
        //                                 var prioridadec = 'prioridade-baixa';
        //                                 break;
        //                             default:
        //                                 // nada
        //                         }
        //                         // setTimeout(function(){
        //                         //   window.location = location;
        //                         // },1000);
        //                         //$('.tarefas-added-box').load(location+'/'+codigo_projeto + ' .tarefas-added-box')
        //                         $('.tarefas-added-box').append('<div class="tarefas-added-box-postit media">'
        //                           + '<div class="media-left">'
        //                           + '<p class="tarefa-dia">'
        //                           + dia
        //                           + '</p>'
        //                           + '<p class="tarefa-mes">'
        //                           + mes + '|' + data_p.getFullYear()
        //                           + '</p>'
        //                           + '</div>'
        //                           + '<div class="media-body">'
        //                           + '<h4 class="media-heading ' + prioridadec + '">' + titulo + '</h4>'
        //                           + '<p>'
        //                           + limitWords(descricao,10)
        //                           + '</p>'
        //                           + '<img class="tarefas-box-lider-img lider-thumbs img-circle" src="http://secom.pa.gov.br/demandou/uploads/' + createdbypicture + '" alt="imagem do avatar do líder da tarefa">'
        //                           + '</div>'
        //                           + '</div>');
        //                         }
        //                   },
        //                   error: function(stc,error){
        //                       console.log(error);
        //                       console.log(stc)
        //                   }
        //              }).done(function(data){
        //                 form.trigger("reset");
        //                 $("#lider").each(function(){
        //                   $(this).select2('val','');
        //                 });
        //                 console.log('fim alteração');
        //              });
        //   });
        // }
    }
    $(document).ready(function () {
        fn.Iniciar();
    });
})(jQuery);