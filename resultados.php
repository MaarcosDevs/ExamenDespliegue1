<?php
session_start();

if (isset($_SESSION['won']) && $_SESSION['won'] == true) {
    echo "Has ganado";
    ?><body style="background-color: green;"><?php
} else {
    echo "Has Perdido";
    ?><body style="background-color: red;"><?php
}
?>

<br>
<a href="index.php?reset=1">Volver a jugar</a>
<body style="background-color: pink;">