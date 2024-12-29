<?php
include 'Conect.php';
$Afiliacion = $Conecta->real_escape_string($_POST['Afiliacion']);
$Consulta = "SELECT * FROM titular WHERE Id_Tit == '$Afiliacion';";

?>