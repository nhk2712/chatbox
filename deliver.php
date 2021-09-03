<?php
$mess = $_POST['mess'];
$file = fopen('content.html', 'a');

session_start();

if ($_POST['user']!=""){
    $named=$_POST['user'];
    $_SESSION['name'] = $named;
}

$name = $_SESSION['name'];

if ($_POST['mess']!="") fwrite($file, "<p> <b>".$name.": </b>".$mess."</p>");
fclose($file);

$_POST['mess']= "";
$mess = "";

echo "<script>location.href='chat.php'</script>";
?>