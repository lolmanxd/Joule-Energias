<?php 

if(isset($_POST['enviar']) ){

if(($_POST['email'] != '' && $_POST['consumoMensal'] != '') ){
$email = ($_POST['email']);
$consumoMensal = ($_POST['consumoMensal']);
    
$arquivo= "<style type='text/css'>
  body {
  margin:0px;
  font-family:Verdane;
  font-size:12px;
  color: #666666;
  }
  a{
  color: #666666;
  text-decoration: none;
  }
  a:hover {
  color: #FF0000;
  text-decoration: none;
  }
  </style>
  
  <html>
        <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
            <tr>
              <td>
  <tr>
                 <td width='500'>Consumo Mensal: $consumoMensal </td>
                </tr>
                <tr>
                  <td width='320'>E-mail: $email <b></b></td>
     </tr>
        </table>   
  </html>
  ";

$emailEnviar = "fabiio.mariiano@gmail.com";
$destino = $emailEnviar;
$assunto = "Orçamento Site Joule Energias";

$headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";

$enviarEmail = mail($destino, $assunto, $arquivo, $headers);
}
else{ ?>
<script>
    alert("Preencha os dados corretamente");
</script>
<?php }
}
?>