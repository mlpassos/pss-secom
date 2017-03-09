(function ($) {
    "use strict";
    var fn = {
        // Funcionalidades
        Iniciar: function () {
        	fn.ValidarCPF();
          fn.PesquisarCEP();
        },
        ValidarCPF: function() {
            jQuery('.validar').cpfcnpj({
                mask: true,
                validate: 'cpf',
                event: 'focusout',
                handler: '.validar',
                ifValid: function  (input) { input.css('background-color', 'white'); },
                ifInvalid: function (input) { 
                    //alert('CPF InvÃ¡lido, favor corrigir.');
                    input.css('background-color', 'rgba(240,0,0,.3)');
                    jQuery('.validar').focus(); 
                }
            });
            jQuery('.mask-celular').mask('(00) 00000-0000');
            jQuery('.mask-cep').mask('00.000-000');
        },
        PesquisarCEP: function() {
          jQuery('body').on('blur', '.validarCEP', function() {
            let _this = this;
            if (_this.value) {
                let cep = _this.value.replace(/([^a-z0-9]+)/gi, '');
                let url = 'https://viacep.com.br/ws/' + cep + '/json/';
                var jqxhr = jQuery.get(url, function (response) {
                    console.log(response);
                    jQuery('input[name=cidade]').val(response.localidade);
                    jQuery('select[name=estado]').val(response.uf);
                    jQuery('input[name=logradouro]').val(response.logradouro);
                    jQuery('input[name=bairro]').val(response.bairro);
                }).done(function () {
                    // fim, carregou
                }).fail(function () {
                    alert("Oops, ocorreu algum problema. Tente novamente, por favor?");
                    // jQuery('.cep-loader').hide();
                });
            }
          });
        }
	  }
    $(document).ready(function () {
        fn.Iniciar();
    });
})(jQuery);