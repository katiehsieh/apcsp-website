<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>LED Game</title>
    <link href="index.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <script src="index.js"></script>

    <h1>LED Game!!!</h1>

    <!-- start screen -->
    <button id="start1" class="play start" onClick="callStart()">Start</button>
    <p id="start2">Instructions: Click on the button that matches the color of the lit-up LED.</p>


    <!-- game screen -->
    <p id="text"></p>

    <div class="center">
      <!-- yellow -->
      <button id="game1" class="button button1" onClick="color('0')"></button>
      <!-- red -->
      <button id="game2" class="button button2" onClick="color('1')"></button>
    </div>

    <div class="center">
      <!-- blue -->
      <button id="game3" class="button button3" onClick="color('2')"></button>
      <!-- green -->
      <button id="game4" class="button button4" onClick="color('3')"></button>
    </div>

    <button id="quit" class="play end" onClick="callEnd()">Quit</button>


    <!-- end screen -->
    <h2 id="end1" class="end">Game Over!</h2>
    <p id="end2" class="end">Score:</p>
    <button id="end3" class="play end" onClick="start()">Play Again</button>

    <p id="color"></p> <!-- REMOVE LATER -->


    <?php
      // define variables and set to empty values
      $arg1 = "";
      $output = $retc = "";

      if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Check if we have parameter w1 passed to the script through the URL

       if (isset($_GET["w1"])) {
          $arg1 = $_GET["w1"];
          $arg1 = strval($arg1);
          echo "$arg1";
          echo "/usr/lib/cgi-bin/student3/main " . $arg1;
//          system("/usr/lib/cgi-bin/student3/test2");
//          system("/usr/lib/cgi-bin/student3/main 4");
          exec("/usr/lib/cgi-bin/student3/main " . $arg1, $output, $retc);

          foreach ($output as $line) {
            echo $line;
            echo "<br>";
          }
          echo "return code: " . $retc;

          // check, score

          if ($output[0] == "start") {
            echo "<script type='text/javascript'>game($output[1]);</script>";
          }

          if ($output[0] == "end") {
            echo "<script type='text/javascript'>end($output[1]);</script>";
          }

         }
      }

    ?>

  </body>
</html>
