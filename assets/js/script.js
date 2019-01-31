$(function(){
//formatando campos com mascara do jquery mask
//mascara de preço
         $('.dinheiro').mask("#.##0,00", {reverse:true});


         var options = {
            onKeyPress: function (cpf, ev, el, op) {
               var masks = ['000.000.000-000', '00.000.000/0000-00'];
               $('#cpf_cnpj').mask((cpf.length > 14) ? masks[1] : masks[0], op);
            }
      }
      
      $('#cpf_cnpj').length > 11 ? $('#cpf_cnpj').mask('00.000.000/0000-00', options) : $('#cpf_cnpj').mask('000.000.000-00#', options);
      

      $("#contato").mask("(99)99999-9999");
      $("#contato2").mask("(99)99999-9999");
      $("#numero_chip").mask("(99)99999-9999");

      $("#placa").mask("AAA-9999");
      $("#cep").mask("99999-999");
});