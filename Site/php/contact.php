<!DOCTYPE html>
<html lang="en">
<head>
    <title>VrijheidVoorIeder.</title>
    <link rel="stylesheet" href="../css/style-contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="grid">
            <div class="header-left">
                <a class="header" href="../php/wie-zijn-wij.php">Wie zijn wij?</a>
                <a class="header" href="../php/onzevisie.php">Onze visie.</a>
                <a class="header" href="../php/agenda.php">Agenda.</a>
            </div>
            <div class="logo">
                <a class="header" href="../php/index.php"><img src="../../logo/logo_small_icon_only.png"></a>
            </div>
            <div class="header-right">
                <a class="header" href="../php/loginregister.php">Log In/Register.</a>
                <a class="header" href="../php/contact.php">Contact.</a>
            </div>
        </div>
    </header>
    <main>
        <div class="contactform">
            <div class="gridcontact">
                <div>
                    <div class="contactformtxt">
                        <p>NEEM CONTACT MET ONS OP!</p>
                        <H3>Heeft u vragen of een opmerking? Neem dan hier contact met ons op!</H3>
                    </div>
                    <div class="form">
                        <form id="contact-form" method="post" action="">
                            <input name="name" type="text" class="form-control" placeholder="Voornaam." required>
                            <br>
                            <input name="achternaam" type="text" class="form-control" placeholder="Achternaam.">
                            <br>
                            <input name="email" type="text" class="form-control" placeholder="E-mail." required>
                            <br>
                            <textarea name="message" class="form-control" placeholder="Typ hier uw bericht." rows="5" required></textarea>
                            <br>
                            <input type="submit" class="form-control2"  value="Verstuur uw bericht.">
                        </form>
                    </div>
                </div>
                <div class="imgcontact">
                    <img src="../../logo/logo_large.png">
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>

<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'dusjelmer@gmail.com';
    $email_subject = 'Mail Burgerschap site';
    $email_body = 'Gebruikersnaam: $name.\n'.
                    'Gebruikers E-mail: $visitor_email.\n'.
                        'Bericht; $message.\n';

    $to = 'dusjelmer@gmail.com';
    $headers = 'From: $email_from \r\n';
    $headers = 'Reply-To: $visitor_email \r\n';

    mail($to,$email_subject,$email_body,$headers);
?>