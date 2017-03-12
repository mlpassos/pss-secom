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
            if ($(this).val().length < 10) {
                if ($(this).parent().hasClass('has-success')) {
                    $(this).parent().removeClass('has-success');
                }
                if (!$(this).parent().hasClass('has-error')) {
                    $(this).parent().addClass('has-error');
                    
                    if ($(this).next('.help-block').hasClass('hidden')) {
                        $(this).next('.help-block').removeClass('hidden');
                    }
                }
                // se campos endereço habilitados, desabilitar
                jQuery('input[name=cidade]').val('');
                jQuery('select[name=estado]').val('Escolher');
                jQuery('input[name=logradouro]').val('');
                jQuery('input[name=bairro]').val('');
            }
          });
          jQuery('body').on('keyup', '.validarCEP', function() {
            let _this = this;
            if ($(this).val().length === 10) {
                console.log('enviando cep2...');
                $(this).next().next('.cep-spinner').removeClass('hidden');
                if (_this.value) {
                    let cep = _this.value.replace(/([^a-z0-9]+)/gi, '');
                    let url = 'https://viacep.com.br/ws/' + cep + '/json/';
                    var jqxhr = jQuery.get(url, function (response) {
                        console.log(response.erro);
                        if (response.erro === true) {
                            // icone erro
                            $(_this).next().next('.cep-spinner').addClass('hidden');
                            $(_this).next().next().next('.cep-check').addClass('hidden');
                            $(_this).next().next().next().next('.cep-error').removeClass('hidden');
                            if ($(_this).parent().hasClass('has-success')) {
                               $(_this).parent().removeClass('has-success');
                            }
                            if (!$(_this).parent().hasClass('has-error')) {
                                $(_this).parent().addClass('has-error');
                                $(_this).next('.help-block').removeClass('hidden');
                            }
                            jQuery('input[name=cidade]').val('');
                            jQuery('select[name=estado]').val('Escolher');
                            jQuery('input[name=logradouro]').val('');
                            jQuery('input[name=bairro]').val('');
                            // desabilitar campos endereço
                        } else {
                            // icone sucesso
                            $(_this).next().next('.cep-spinner').addClass('hidden');
                            $(_this).next().next().next('.cep-check').removeClass('hidden');
                            $(_this).next().next().next().next('.cep-error').addClass('hidden');
                            if ($(_this).parent().hasClass('has-error')) {
                               $(_this).parent().removeClass('has-error');
                               $(_this).next('.help-block').addClass('hidden');
                            }
                            if (!$(_this).parent().hasClass('has-success')) {
                               $(_this).parent().addClass('has-success');
                            }
                            // se campos endereço desabilitados, habilita
                            jQuery('input[name=cidade]').val(response.localidade);
                            jQuery('select[name=estado]').val(response.uf);
                            jQuery('input[name=logradouro]').val(response.logradouro);
                            jQuery('input[name=bairro]').val(response.bairro);
                        }
                    }).done(function () {
                        // fim, carregou
                    }).fail(function () {
                        alert("Oops, ocorreu algum problema. Tente novamente, por favor?");
                        // jQuery('.cep-loader').hide();
                    });
                }
            } else {
                // jQuery('input[name=cidade]').val('');
                // jQuery('select[name=estado]').val('');
                // jQuery('input[name=logradouro]').val('');
                // jQuery('input[name=bairro]').val('');
            }
          });
        }
	  }
    $(document).ready(function () {
        fn.Iniciar();
    });
})(jQuery);