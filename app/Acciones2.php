<?php
include 'Conect.php'; 


if(isset($_POST['BtnBuscar'])){
    $Id_Tit = $_GET['Id_Tit'];

    $query = "SELECT * FROM titular WHERE Id_Tit = ?";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param('i', $Id_Tit);
    $stmt->execute();
    $resultado = $stmt->get_result();
    
    if ($resultado->num_rows > 0) {
        $registro = $resultado->fetch_assoc();
        echo "<h3>Resultado de la búsqueda:</h3>";
        echo "<p><strong>NúmeroDeAfiliacion:</strong> " . $registro['Id_Tit'] . "</p>";
        echo "<p><strong>NombreDelTitular:</strong> " . $registro['Nombre'] . "</p>";
        echo "<p><strong>Vigencia:</strong> " . $registro['Vigencia'] . "</p>";
        echo "<p><strong>Beneficiarios:</strong> </p>";
        echo "<p><strong>1.</strong> " . $registro['BenefUno'] . "</p>";
        echo "<p><strong>2.</strong> " . $registro['BenefDos'] . "</p>";
        echo "<p><strong>3.</strong> " . $registro['BenefTres'] . "</p>";
        echo "<p><strong>4.</strong> " . $registro['BenefCuatro'] . "</p>";
        echo "<p><strong>5.</strong> " . $registro['BenefCinco'] . "</p>";
        echo "<p><strong>6.</strong> " . $registro['BenefSeis'] . "</p>";
        echo "<p><strong>7.</strong> " . $registro['BenefSiete'] . "</p>";
        echo "<p><strong>8.</strong> " . $registro['BenefOcho'] . "</p>";
        echo "<p><strong>9.</strong> " . $registro['BenefNueve'] . "</p>";
        echo "<p><strong>10.</strong> " . $registro['BenefDiez'] . "</p>";
    } else {
        echo "<p>No se encontró el afiliado con el Número de Afiliación proporcionado.</p>";
    }
}
    /*$Afiliacion = $_POST['Afiliacion'];
    $Titular = $_POST['Titular']);
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
    */



?>