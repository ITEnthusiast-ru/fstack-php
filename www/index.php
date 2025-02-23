<?php 
include "./src/header.php";
echo "<br>";
$docker_commands = file_get_contents('text.txt');
echo $docker_commands;
echo "<br>";
include "./src/footer.php";

?>
