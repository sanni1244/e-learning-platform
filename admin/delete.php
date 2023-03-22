<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $index = $_POST["index"];
  $objects = json_decode(file_get_contents("objects.json"), true);
  array_splice($objects, $index, 1);
  file_put_contents("../personal/elist.json", json_encode($objects));
}
?>
