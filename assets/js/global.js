(function ($) {
    "use strict";
    var fn = {
        // Funcionalidades
        Iniciar: function () {
          fn.ValidarCPF();
          fn.PesquisarCEP();
          fn.App();
        },
        App: function() {
            $("input[name='data_nascimento']").datepicker({
                changeMonth: true,
                changeYear: true,
                yearRange: '1920:2009',
                dateFormat : 'dd/mm/yy',
                defaultDate: new Date('01/01/2009'),
                dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
                dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
                nextText: 'Próximo',
                prevText: 'Anterior'
            });
            $('#btnSubmitFrmInscricao').click(function (e) {
              // $(this).attr('disabled', true);
            });
            $('#frmInscricao.submit-once').submit(function(e){
                if( $('#btnSubmitFrmInscricao').attr('disabled') === true ){
                    alert('apressado, te acalma...');
                    e.preventDefault();
                    return;
                }
                $('#btnSubmitFrmInscricao > .loading').removeClass('hidden');
                $('#btnSubmitFrmInscricao').attr('disabled', true);
                $('#btnSubmitFrmInscricao > span.message').text('Gravando..');
                // $('input, select').attr('disabled', true);
            });
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