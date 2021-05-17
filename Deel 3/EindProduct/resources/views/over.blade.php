<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }} ">
    <title>Over - Shoebox</title>
</head>
<body>
    <!-- Big screen menu -->
    @include('includes.menu')
    
    <div id="content-wrapper">
        <div class="content">
            <div class="container">
                @include('includes.mobilemenu')
                <div class="row">
                    <!-- Content -->
                    <div class="col-md-12">
                        <h1>Over Shoebox</h1>
                        <h3>"Uw schoenen onze box."</h3>
                        <p class="overtext">Shoebox is een vrij nieuwe webshop en is recentelijk dus opgezet. Deze webshop van Shoebox is gebaseerd op een subscriptie. U kunt zichzelf abonneren op één of meerdere producten van Shoebox. <br><br>

                        Zodra u zichzelf abonneert betaald u voor een termijn van 30 dagen. Na dit termijn kunt u zichzelf afvragen of u tevreden bent met de producten van Shoebox. Zodra dit het geval is kunt u zichzelf opnieuw abonneren en ons systeem zal dit registreren. Hierna word er een incasso gemachtigd van uw rekening die iedere 30 dagen terugkeert voor het bedrag van de gekozen Shoebox. U kunt op ieder moment uw abonnement opzeggen of wijzigen bij de klantenservice van Shoebox te bereiken via onderstaand mail adres. <br><br>

                        Heeft u nog vragen over een Shoebox of over onze website?
                        Mail dan naar info@shoebox.nl of bel ons op 06-12345678
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ URL::asset('js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ URL::asset('js/script.js') }} "></script>
</body>
</html>