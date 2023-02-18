<?php
$remitente = $_POST['email'];
$destinatario = "contacto@christiancortijo.es"; // en esta línea va el mail del destinatario.
$asunto = $_POST['asunto']; // acá se puede modificar el asunto del mail
if (!$_POST){
?>

<?php
}else{
	 
    $nombre = "Nombre: " . $_POST["nombre"] . "\r\n";
    $telefono = "telefono: " . $_POST["telefono"] . "\r\n";
    $email = "email: " . $_POST["email"] . "\r\n";
    $asunto = "asunto: " . $_POST["asunto"] . "\r\n";
    $cuerpo = "mensaje: " . $_POST["mensaje"] . "\r\n";
    
    
	//las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
	// Si se agrega un campo al formulario, hay que agregarlo acá.

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']." \" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    include 'send.html'; //se debe crear un html que confirma el envío
}
?>