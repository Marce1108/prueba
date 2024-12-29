<?php
include 'Conect.php';
if(isset($_POST['BtnAgregar'])){
    $Afiliacion = $Conecta->real_escape_string($_POST['Afiliacion']);
    $Titular = $Conecta->real_escape_string($_POST['Titular']);
    $Vigencia = $Conecta->real_escape_string($_POST['Vigencia']);
    $Ben1 = $Conecta->real_escape_string($_POST['Ben1']);
    $Ben2 = $Conecta->real_escape_string($_POST['Ben2']);
    $Ben3 = $Conecta->real_escape_string($_POST['Ben3']);
    $Ben4 = $Conecta->real_escape_string($_POST['Ben4']);
    $Ben5 = $Conecta->real_escape_string($_POST['Ben5']);
    $Ben6 = $Conecta->real_escape_string($_POST['Ben6']);
    $Ben7 = $Conecta->real_escape_string($_POST['Ben7']);
    $Ben8 = $Conecta->real_escape_string($_POST['Ben8']);
    $Ben9 = $Conecta->real_escape_string($_POST['Ben9']);
    $Ben10 = $Conecta->real_escape_string($_POST['Ben10']);
    $Insert ="INSERT INTO titular(Id_Tit,Nombre,Vigencia,BenefUno,BenefDos,BenefTres,BenefCuatro,BenefCinco,BenefSeis,BenefSiete,BenefOcho,BenefNueve,BenefDiez)
    VALUES('$Afiliacion','$Titular','$Vigencia','$Ben1','$Ben2','$Ben3','$Ben4','$Ben5','$Ben6','$Ben7','$Ben8','$Ben9','$Ben10');";
    $Ejecuta = $Conecta->query($Insert);
    if($Ejecuta > 0){
        echo "Registro Exitoso";
    }
    else{
        echo "Error al registrar";
    }
}

?>