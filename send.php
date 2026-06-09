<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

$to = "kubek36@wp.pl";

$subject = "Podsumowanie pracy kręgu - kwestionariusz";

$message =

"1. Przygotowanie spotkań:\n\n".$_POST['p1']."\n\n\n".

"2. Modlitwa:\n\n".$_POST['p2']."\n\n\n".

"3. Sprawozdania:\n\n".$_POST['p3']."\n\n\n".

"4. Dzielenie się życiem:\n\n".$_POST['p4']."\n\n\n".

"5. Temat studyjny:\n\n".$_POST['p5']."\n\n\n".

"6. Udział w życiu Ruchu i Kościoła:\n\n".$_POST['p6'];

$headers =
"From: formularz@dkkv.pl\r\n".
"Content-Type: text/plain; charset=UTF-8\r\n";

$mail = mail($to,$subject,$message,$headers);

?>

<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>Wysłano</title>

<style>

body{
background:#f4eadc;
font-family:'Cormorant Garamond',serif;
color:#5c3b24;
text-align:center;
padding-top:100px;
}

h1{
font-size:3rem;
}

a{
color:#5c3b24;
font-size:1.5rem;
}

</style>

</head>
<body>

<?php if($mail){ ?>

<h1>Dziękujemy!</h1>
<p>Formularz został wysłany.</p>

<?php } else { ?>

<h1>Błąd wysyłki</h1>
<p>Nie udało się wysłać formularza.</p>

<?php } ?>

<br><br>

<a href="index.html">Powrót</a>

</body>
</html>

<?php } ?>
