<?php
session_start();

if (isset($_SESSION['won']) && $_SESSION['won'] == true) {
    echo "Has ganado";
} else {
    echo "Has Perdido";
}
?>

<br>
<a href="index.php?reset=1">Volver a jugar</a>