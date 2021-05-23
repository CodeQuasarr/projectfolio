
<script>
$(document).ready(function(){
    $('#alertMessage').modal('show')
})
</script>
<!-- Modal -->
<?php if (isset($_SESSION["alert"])): ?>
<div class="modal fade" id="alertMessage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-upercase text-success">
                <?=$_SESSION["alert"]['message'] ?>
            </div>
        </div>
    </div>
</div>
<?php unset($_SESSION["alert"]); endif; ?>

<div class="open--nav fixed-top px-3">
    <img height="80" src="public/images/logo/A.Dare_portfolio.png" alt="">
    <p class="text-danger display-6"><i class="fas fa-bars"></i></p>
</div>
<!--presentation d'en tete 
        -->
<div id="home" class="container-fluid p-0 m-0">

    <video autoplay muted loop>
        <source src="public/assets/video/dev1.mp4">
    </video>
    <!--presentation cv-->
    <div class="presentation--card d-flex flex-wrap align-items-center justify-content-around">
        <!--title-->
        <div class="text-white col-11 col-md-8 col-lg-7 presentation--card_content">
            <div class="presentation--card_content_text">
                <h1>Conception <br> développement, <br> FAIRE DE VOS RÊVES UNE RÉALITÉ </h1>
            </div>
            <div class="separator"></div>
            <div class=" presentation--card_content_label">
                <span>Objectif ?</span>
                <span>Apporter un plus à votre entreprise.</span>
                <span>Ma patience, ma curiosité, mon sens d'adaptation et du timing, des atouts essentiels <br> pour le bien de votre entreprise et aussi amener à bien tout type de mission que vous allez me confier.</span>
            </div>
        </div>
        <!--end title-->
        <!--cv-->
        <div class="d-flex align-items-center justify-content-center col-11 col-md-4">
            <div class="cv mt-3 ">
                <a class="rounded rounded-circle d-flex align-items-center justify-content-center" href="#">CV</a>
            </div>
        </div>
        <!--end cv-->
        <div class="container">
            <hr class="text-danger py-1">
            <div class=" pt-3">
                <div class="col-12 rightLeft d-flex align-items-center justify-content-center flex-wrap">
                    <span class="text-white rightLeft-1 mx-5 display-5"><i class="fab fa-cuttlefish"></i></span>
                    <span class="text-white rightLeft-2 mx-5 display-5"><i class="fab fa-php"></i></span>
                    <span class="text-white rightLeft-3 mx-5 display-5"><i class="fab fa-html5"></i></span>
                    <span class="text-white rightLeft-4 mx-5 display-5"><i class="fab fa-css3-alt"></i></span>
                    <span class="text-white rightLeft-5 mx-5 display-5"><i class="fab fa-js-square"></i></span>
                    <span class="text-white rightLeft-6 mx-5 display-5"><i class="fab fa-bootstrap"></i></span>
                    <span class="text-white rightLeft-7 mx-5 display-5"><i class="fab fa-symfony"></i></span>
                </div>
            </div>
        </div>
    </div>
    <!--end presentation cv-->

</div>

<!--OTHER OF THE PORTFOLIO-->
<div id="profil" style="min-height:100vh" class=" container-fluid bg-light d-flex align-items-center py-5">
    <div class="container mx-auto show">
        <h3>À propos de Moi</h3>
        <div class="row d-flex align-items-center justify-content-center mt-5">
            <div class="col-lg-5 show-9 mx-auto about-me">
                <div class="text-center my-5">
                    <img class="img-fluid rounded rounded-circle " width="150" src="public/images/portfolio/man.jpg"
                        alt="">
                </div>
                <p>Je suis ANYARONKE Samuel, étudiant en licence 3 Informatique.J'ai commencer le web en 2020; J'ai
                    appris et je continu à apprendre le développement web en autodidacte, spécialisé dans le PHP et le
                    framework Symfony (je debute le
                    symfony). Je suis aussi parfaitement à l’aise avec le HTML / CSS / JavaScript. J'aime le sport
                    surtout le basket-ball (joueur en club), me tenir informé des dernières nouveautés et suivre la NBA.
                </p>
            </div>
            <!--techno-->
            <div class="col-lg-6 mx-auto mb-5">
                <div class="col-12">
                    <h4>Back - Front</h4>
                    <div class="row techno justify-content-around">
                        
                    
                        <div class="col-sm-6 col-lg-6 show-10 mt-2  p-1">
                            <div class="d-flex justify-content-between bg-white py-2 about-techno">
                                <div class="col-3 d-flex align-items-center text-center justify-content-center">
                                    <span class="text-techno text-center display-5"><i class="fab fa-php"></i></span>
                                </div>
                                <div class="col-8">
                                    <div style="height: 70px;" class="col-12 techno-description d-flex flex-column align-items-start justify-content-around">
                                        <span>PHP/POO/PDO/MySQL </span>
                                        <span>Design pattern MVC </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-6 show-9 mt-2  p-1">
                            <div class="d-flex justify-content-between bg-white py-2 about-techno">
                                <div class="col-3 d-flex align-items-center text-center justify-content-center">
                                    <span class="text-techno text-center display-5"><i class="fab fa-python"></i></span>
                                </div>
                                <div class="col-8">
                                    <div style="height: 70px;" class="col-12 techno-description d-flex flex-column align-items-start justify-content-around">
                                        <span>Cadre de mes études</span>
                                        <span>Créer des sockets</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-6 show-8 mt-2 p-1">
                            <div class="d-flex justify-content-between bg-white py-2 about-techno">
                                <div class="col-3 d-flex align-items-center text-center justify-content-center">
                                    <span class="text-techno text-center display-5"><i class="fab fa-cuttlefish"></i></span>
                                </div>
                                <div class="col-8">
                                    <div style="height: 70px;" class="col-12 techno-description d-flex flex-column align-items-start justify-content-around">
                                        <span>Language C</span>
                                        <span>Cadre de mes études</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-6 show-7 mt-2 p-1">
                            <div class="d-flex justify-content-between bg-white py-2 about-techno">
                                <div class="col-5 d-flex align-items-center text-center justify-content-center">
                                    <span class="text-techno mx-3 display-5"><i class="fab fa-html5"></i></span>
                                    <span class="text-techno mx-3 display-5"><i class="fab fa-css3-alt"></i></span>
                                </div>
                                <div class="col-7">
                                    <div style="height: 70px;" class="col-12 techno-description d-flex flex-column align-items-start justify-content-around">
                                        <span>La base </span>
                                        <span>Liens hypertextes et apparence de vos sites</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6 show-6 mt-2 p-1">
                            <div class="d-flex justify-content-between bg-white py-2 about-techno">
                                <div class="col-3 d-flex align-items-center text-center justify-content-center">
                                    <span class="text-techno mx-3 display-5"><i class="fab fa-bootstrap"></i></span> 
                                </div>
                                <div class="col-8">
                                    <div style="height: 70px;" class="col-12 techno-description d-flex flex-column align-items-start justify-content-around">
                                        <span>Bootstrap </span>
                                        <span>Pour Styliser vos pages web</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6 show-5 mt-2 p-1">
                            <div class="d-flex justify-content-between bg-white py-2 about-techno">
                                <div class="col-3 d-flex align-items-center text-center justify-content-center">
                                    <span class="text-techno text-center display-5"><i class="fab fa-js-square"></i></span>
                                </div>
                                <div class="col-8">
                                    <div style="height: 70px;" class="col-12 techno-description d-flex flex-column align-items-start justify-content-around">
                                        <span>Javascript / jquery </span>
                                        <span>Pour animer vos pages web</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4>Outils</h4>
                    <div class="row techno justify-content-around">
                        
                    
                        <div class="col-sm-6 col-lg-6 show-4  p-1">
                            <div class="d-flex justify-content-between bg-white py-2 about-techno">
                                <div class="col-3 d-flex align-items-center text-center justify-content-center">
                                    <span class="text-techno text-center display-5"><i class="fab fa-git-square"></i></span>
                                </div>
                                <div class="col-8">
                                    <div style="height: 70px;" class="col-12 techno-description d-flex flex-column align-items-start justify-content-around">
                                        <span>Git</span>
                                        <span>Le travail en équipe</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-6 show-3  p-1">
                            <div class="d-flex justify-content-between bg-white py-2 about-techno">
                                <div class="col-3 d-flex align-items-center text-center justify-content-center">
                                    <span class="text-techno text-center display-5"><i class="fas fa-code"></i></span>
                                </div>
                                <div class="col-8">
                                    <div style="height: 70px;" class="col-12 techno-description d-flex flex-column align-items-start justify-content-around">
                                        <span>Vs Code</span>
                                        <span>Mon quotidien</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h4>Système d'exploitation</h4>
                    <div class="row techno justify-content-around">
                        
                    
                        <div class="col-sm-6 col-lg-6 show-3  p-1">
                            <div class="d-flex justify-content-between bg-white py-2 about-techno">
                                <div class="col-3 d-flex align-items-center text-center justify-content-center">
                                    <span class="text-techno text-center display-5"><i class="fab fa-windows"></i></span>
                                </div>
                                <div class="col-8">
                                    <div style="height: 70px;" class="col-12 techno-description d-flex flex-column align-items-start justify-content-around">
                                        <span>Windows</span>
                                        <span>Mon quotidien</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-6 show-3  p-1">
                            <div class="d-flex justify-content-between bg-white py-2 about-techno">
                                <div class="col-3 d-flex align-items-center text-center justify-content-center">
                                    <span class="text-techno text-center display-5"><i class="fab fa-linux"></i></span>
                                </div>
                                <div class="col-8">
                                    <div style="height: 70px;" class="col-12 techno-description d-flex flex-column align-items-start justify-content-around">
                                        <span>Linux</span>
                                        <span>Dans le cadre de mes études</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--portfolio-->
<!--OTHER OF THE PORTFOLIO-->
<div id="portfolio" style="min-height:100vh" class="container-fluid portfolio d-flex align-items-center py-4">
    <div class="col-12 col-md-11 mx-auto rightLeft">
        <h3>Mes Projets Personnels</h3>
        <div class="row d-flex align-items-center justify-content-center mt-5">
            <!--projet-->
            <div class="col-sm-6 col-md-4 card rightLeft-10  bg-dark text-white p-0">
                <img src="public/images/portfolio/barber.png" class="card-img" alt="...">
                <div class="d-none card-img-overlay d-flex flex-column align-items-center  justify-content-around">
                    <p class="card-text">Démo d'un site pour coiffeur</p>
                    <p class="card-text">PHP - JS</p>
                    <a class="btn btn-light" target="_blank" href="http://daresamuel.byethost13.com/">VISITER</a>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 card rightLeft-9 bg-dark text-white p-0">
                <img src="public/images/portfolio/portfolio2.png" class="card-img" alt="...">
                <div class="d-none card-img-overlay d-flex flex-column align-items-center  justify-content-around">
                    <p class="card-text">Démo d'un site pour un club de basket</p>
                    <p class="card-text">PHP/PDO/MySQL - JS</p>
                    <a class="btn btn-light" target="_blank" href="http://projecbaskettest.byethost3.com/">Voir le site</a>
                    <a class="btn btn-secondary" target="_blank" style="text-decoration: none" href="https://github.com/Sanyaronke/newBBB"><i class="fab fa-git-square"></i>Voir le Git</a> 
                </div>
            </div>

            <div class="col-sm-6 col-md-4 card rightLeft-8 bg-dark text-white p-0">
                <img src="public/images/portfolio/portfolio.png" class="card-img" alt="...">
                <div class="d-none card-img-overlay d-flex flex-column align-items-center  justify-content-around">
                    <p class="card-text">Vous êtes ici</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--form-->
<div style="min-height:100vh" class="container-fluid bg-light d-flex align-items-center ">
    <div class="col-md-10 col-lg-6 mx-auto show">
        <h3 class="text-center text-secondary">Démarrons l'aventure ensemble, n’hésitez pas à me contacter</h3>
        <div class="row d-flex align-items-center justify-content-center mt-5">

            <!--contact-->
            <form id="myform" method="post" action="send-mail" class="show-10 form-floating col-11">

                <div class="form-floating mb-3 ">
                    <input type="text" class="form-control px-4 rounded-pill" id="name" name="name"
                        placeholder="Votre nom">
                    <label class="px-4" for="floatingInput">Nom Complet</label>
                    <span id="error_name" class="px-4 text-danger">Vous Devez entrer un nom et un prenom</span>
                </div>

                <div class="mb-3 row ">
                    <div class="form-floating mb-3 col-12 col-md-6 ">
                        <input type="email" class="form-control px-4 rounded-pill" id="email" name="email"
                            placeholder="Votre email">
                        <label class="px-4" for="floatingInput">Email</label>
                        <span id="error_email" class="px-4 text-danger">Vous devez entrer votre adresse email</span>
                    </div>

                    <div class="form-floating mb-3 col-12 col-md-6 ">
                        <input type="text" class="form-control px-4 rounded-pill" id="phone" name="phone"
                            placeholder="Votre numero de telephone">
                        <label class="px-4" for="floatingInput">Téléphone</label>
                        <span id="error_phone" class="px-4 text-danger">Numéro de téléphone invalide</span>
                    </div>
                </div>

                <div class="form-floating mb-2">
                    <textarea class="form-control px-4" placeholder="Leave a comment here" id="message" name="message"
                        style="height: 200px"></textarea>
                    <label for="floatingTextarea2">Taper Votre message ici</label>
                </div>
                <div class="form-floating mb-3 col-12 col-md-6 ">
                    <img width="200" height="100" class="text-center" src="public/images/logo/captcha.png"
                        alt="...">
                    <label for="floatingTextarea2">Entrez le texte suivant</label>
                    <input type="text" class="form-control my-3 px-2" id="capchat" name="capchat"
                        placeholder="Entrez le texte suivant">
                </div>

                <button type="submit " class="col-12 py-3 btn btn-secondary rounded-pill">Me Contacter</button>
            </form>

            <div id="instruction">

            </div>
        </div>
    </div>
</div>


<?php

        // echo password_hash("motdepasseinncorect", PASSWORD_DEFAULT); ?>