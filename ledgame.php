<!DOCTYPE html>
<html>
  <head>
    <title>LED Game</title>
    <link href="ledgame.css" rel="stylesheet" type="text/css" />
  </head>


  <body>

    <script src="ledgame.js"></script>

    <h1>LED Game</h1>

    <table>
      <tr>
        <td><button class="button button1" onClick="button("0", 'yellow')"></button></td>
        <td><button class="button button2" onClick="button("1", 'red')"></button></td>
      </tr>
      <tr>
        <td><button class="button button3" onClick="button("2", 'blue')"></button></td>
        <td><button class="button button4" onClick="button("3", 'green')"></button></td>
      </tr>
    </table>

    <p id="color">color</p>

    <?php
       // define variables and set to empty values
       $arg1 = $output = $retc = "";

       if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $arg1 = test_input($_POST["arg1"]);
         exec("/usr/lib/cgi-bin/student3/main " . $arg1, $output, $retc);
       }

       function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
       }
    ?>

    <?php
       echo "<h2>Your Input:</h2>";
       echo $arg1;
       echo "<br>";

       echo "<h2>C Program Output (an array):</h2>";
       foreach ($output as $line) {
         echo $line;
         echo "<br>";
       //output determines what buttons are shown: start, game, end
       }

       echo "<h2>C Program Return Code:</h2>";
       echo $retc;

     ?>

  </body>
</html>
