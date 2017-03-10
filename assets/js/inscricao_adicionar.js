(function ($) {
    "use strict";
    var fn = {
        // Funcionalidades
        Iniciar: function () {
            fn.App();
        },
        App : function () {
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
    }
    $(document).ready(function () {
        fn.Iniciar();
    });
})(jQuery);