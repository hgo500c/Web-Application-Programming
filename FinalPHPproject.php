<!DOCTYPE HTML>
<!--Name: CE ZHANG -->
<html lang = "en">
  <head>
    <meta charset="utf-8">
    <title>php</title>
  <meta name="viewport" content="width=device-width, initial-scale=3.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body > 
 <?php  

        function test($name) {              
       return  $_SERVER[name];
    }

function run() {
    $elementName = array("PHP_SELF", 
                        "SERVER_ADDR",
                         "REQUEST_TIME", 
                         "GATEWAY_INTERFACE",
                         "SERVER_NAME", 
                         "SERVER_SOFTWARE",
                         "SERVER_PROTOCOL", 
                          "REQUEST_METHOD", 
                          "HTTP_ACCEPT",
                         "HTTP_HOST",
                         "HTTP_REFERER",
                          "REMOTE_ADDR",
                         "REMOTE_PORT",
                         "SCRIPT_FILENAME",
                         "SERVER_ADMIN",
                          "SERVER_PORT", 
                         'SERVER_SIGNATURE', 
                          'SCRIPT_NAME');
          echo "<h2 class = 'text-center'>CSE 383 final project</h2><h2 class = 'text-center'>CE ZHANG</h2>";
          echo "<div  class='.col-md-'><table class='table'><tbody>";
          for ($i = 0; $i < count($elementName ); $i++) {
              if ($i %2 == "0") {
              echo "<tr style = 'background-color:#b679bd'>"; 
              } else {
              echo "<tr style = 'background-color:#99bf95'>";
               echo "<tr class = 'info'>";
              }
                echo  "<td>".$elementName[$i]."</td><td>".$_SERVER[$elementName[$i] ]."</td>";
              echo "</tr>";
          }
          echo " </tobdy></table></div>";

}
  
?>	

          <?php run(); ?>

      </body>
</html>