<html>
  <body>
    <?php
      for ($i = 0; $i < 5; $i++) {
        echo "<button onclick='echoValue(" . $i . ")'>Button " . $i . "</button>";
      }
    ?>
    <script>
      function echoValue(value) {
        console.log(value);
      }
    </script>
  </body>
</html>