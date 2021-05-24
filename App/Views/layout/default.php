<!doctype html>
<html lang="en">

<head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="<?= $description ?>">
    <meta name="author" content="ANYARONKE Daré Samuel">

    <!--MY STYLE CSS-->
    <link rel="stylesheet" href="public/assets/css/main.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--GOOGLE FONT-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <!--FONTAWESOME-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="public/images/..........." />
    <!--faire gaff animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title><?= $title ?></title>
</head>

<body>
    <header id="nav--header" class="animate__animated animate__backInLeft">
        <div class="navbar--custom d-flex align-items-center justify-content-end">
            <nav class="nav flex-column">
                <a class="nav-link" href="#home">Acceuil</a>
                <a class="nav-link" href="#profil">À Propos</a>
                <a class="nav-link" href="#portfolio">Mes Réalisation</a>
                <a class="nav-link" href="#contact">Contact</a>
            </nav>
        </div>
    </header>
    <div class="main">
        <?= $contents ?>
        <footer style="height: 100px;font-size:11px" class="bg-dark py-5 text-white d-flex align-items-center justify-content-center">
            <span>© 2021 Daré Samuel ANYARONKE, Tous droits réservés.</span>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js "></script>
    <script src="public/assets/js/main.js "></script>
    <script src="public/assets/js/contactForm.js "></script>


</body>

</html>