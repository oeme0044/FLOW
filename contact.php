<?php ?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <link rel="shortcut icon" type="image/png" href="images/blueLogo.svg">
    <title>Kontakt Os</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/contact.css" rel="stylesheet" type="text/css">


    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php include 'header.php'; ?>

<div class="px-5 py-5 text-left herobillede">
    <div class="herosek">
        <h1 class="imgover">Kontakt</h1>
    </div>
</div>

<div class="koncon container-fluid">
    <div class="row">

        <div class="sektion1 col-sm-12 col-md-12 col-lg-8">
            <div class="contact-section">
                <p class="ksekover">Kontakt mig herunder</p>
                <div class="line1"></div>


                <p class="ksektekst">Brug venligst kontaktformularen herunder for at kontakte mig med diverse spørgsmål.
                    Jeg vender tilbage med svar hurtigst muligt.
                    Du er også velkommen til at ringe eller sende en sms.</p>

                <form class="contact-form" action="#" method="post">
                    <input type="text" class="contact-form-text" aria-label="" placeholder="Dit navn">
                    <input type="email" class="contact-form-text"  aria-label="" placeholder="Email">
                    <input type="text" class="contact-form-text"  aria-label="" placeholder="Telefon nr.">
                    <textarea class="contact-form-text"  aria-label="" placeholder="Besked"></textarea>
                    <input type="submit" class="contact-form-btn" value="SEND">
                </form>
            </div>


        </div>
        <div class="sektion2 col-sm-12 col-md-12 col-lg-4">
            <div class="kontaktinfo">
                <p class="infoover">Kontakt information</p>
                <div class="line2"></div>
                <p class="infotekst">+45 11 22 33 44</p>
                <p class="infotekst2">Hestemøllestræde 2 1461 København K</p>
                <a href="#" class="infoteks3"><p>tekbas425@gmail.com</p></a>
            </div>
            <p class="åbenover">Åbningstider</p>
            <div class="line3"></div>
            <p class="åbentekst">Mandag: 10.00 - 22.00</p>
            <p class="åbentekst">Tirsdag: 10.00 - 18.00</p>
            <p class="åbentekst">Onsdag: 10.00 - 18.00</p>
            <p class="åbentekst">Torsdag: 10.00 - 18.00</p>
            <p class="åbentekst">Fredag: 10.00 - 18.00</p>
            <p class="åbentekst">Fredag: 10.00 - 18.00</p>
            <p class="åbentekst">Søndag: Lukket</p>

        </div>
    </div>
</div>

<div class = "map">

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#001d3d" fill-opacity="1" d="M0,96L48,90.7C96,85,192,75,288,58.7C384,43,480,21,576,32C672,43,768,85,864,117.3C960,149,1056,171,1152,165.3C1248,160,1344,128,1392,112L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2301.4304010624314!2d11.862641615892674!3d54.77240088030257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ad31f19a1442b7%3A0x356ec3633d2a36d8!2sBusiness%20Lolland-Falster!5e0!3m2!1sda!2sdk!4v1634195768387!5m2!1sda!2sdk" width="100%" height="1000" style="border:0;" allowfullscreen="" loading="lazy" class="googlemap"></iframe>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#001d3d" fill-opacity="1" d="M0,96L48,90.7C96,85,192,75,288,58.7C384,43,480,21,576,32C672,43,768,85,864,117.3C960,149,1056,171,1152,165.3C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z" class="bølgeunder"></path></svg>

</div>


<?php include "footer.php" ?>

</body>
</html>

