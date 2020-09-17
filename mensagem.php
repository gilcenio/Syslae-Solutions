<?php
session_start();
if(isset($_SESSION['mensagem'])):


$teste = $_SESSION['mensagem'];

endif;
session_unset();
?>