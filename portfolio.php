<?php
require_once "contact.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/0b1009deec.js" crossorigin="anonymous"></script>
    <script src="menuBurger.js" async></script>
    <script src="affichDiplomes.js" async></script>
    <script src="cv.js" async></script>
    <script src="affichLexique.js" async></script>
    <title>portfolio</title>
</head>

<body>
    <header>
        <div class="titre">
            <h1>Portfolio</h1>
            <h3>Maylis Gaillard</h3>
        </div>
        <nav>
            <a href="#Qui_suis_je">Qui suis-je ?</a>
            <a href="#Mes_diplomes">Mes diplômes</a>
            <a href="#Mon_experience">Mon expérience</a>
            <a href="#Mes_realisations">Mes réalisations</a>
            <a href="#Me_contacter">Me contacter</a>
        </nav>
        <div class="menuBurger">
            <button id="afficherMenu"><i class="fas fa-bars"></i></button>
        </div>
    </header>
    <main>
        <section class="presentation">
            <h2 id="Qui_suis_je">Qui suis-je ?</h2>
            <p>Je suis Maylis Gaillard Développeuse Web Junior. J'ai une appétence pour l'informatique et les
                animaux
            </p>
            <p>Pour en savoir plus sur mon parcours et expérience professionnelle cliquez sur mon cv</p>
            <img src="img/Cv_Maylis_Gaillard.png" alt="Cv_Maylis_Gaillard" id="cv">
        </section>
        <div id="modale" class="cacher">
            <button id="fermerCv"><i class="far fa-times-circle"></i></button>
            <object data="cv/Cv_Maylis_Gaillard.pdf" type="application/pdf"></object>
        </div>
        <div>
            <h2 id="Mes_diplomes">Mes diplômes</h2>
            <div class="diplomes" id="contenus-diplomes">
                <figure>
                    <img src="img/Certificat-professionnel-Techniques-de-développement-Web-_RS1448_-R93618XAP1638961899.jpg" alt="Certificat professionnel Techniques developpement web" class="img-diplomes">
                    <figcaption>
                        2021-Certificat professionnel
                        Techniques de développements web
                        Webforce3
                    </figcaption>
                </figure>
                <figure>
                    <img src="img/Certificat-professionnel-Techniques-d’intégration-Web-_RS1447_-E79497XAP1638961897.jpg" alt="Certificat professionnel Techniques integration web" class="img-diplomes">
                    <figcaption>
                        2021-Certificat professionnel
                        Techniques d'intégration web
                        Webforce3
                    </figcaption>
                </figure>
                <figure>
                    <img src="img/Attestation_Succes_19042021151417_343570.jpg" alt="Module de java" class="img-diplomes">
                    <figcaption>
                        2020-Module de Java
                        CNAM
                    </figcaption>
                </figure>
                <figure>
                    <img src="img/Bac pro.jpeg" alt="Bac pro animalerie" class="img-diplomes">
                    <figcaption>
                        2016-Bac pro
                        Technitien conseil vente en animalerie
                        Maison Familiale Rurale
                    </figcaption>
                </figure>
            </div>

        </div>
        <div>
            <h2 id="Mon_experience">Mon expérience</h2>
            <article class="Artcolombbus">
                <h3>Colombbus</h3>
                <article>
                    <p>
                        Cette association aide à l'insertion des demandeurs d'emplois en les formant dans le domaine
                        du
                        web
                    </p>
                </article>
            </article>
            <article>
                <h3>Mes missions</h3>
                <div class="contenus_missions">
                    <article class="ArtMissions">
                        <h4>Refonte du site ASEA</h4>
                        <p>
                            J'ai réalisé dans le cadre de mes fonctions une refonte de site web avec le CMS* Wordpresse
                            via
                            le
                            thème Divi*.
                        </p>
                    </article>
                    <article class="ArtMissions">
                        <h4>Stage chez Boîte à histoire</h4>
                        <p>
                            J'ai pu maintenir un site web via Wordpress et
                            mettre en place le projet La Junior Parfumée dans le cadre de ma formation.
                        </p>
                    </article>
                    <article class="ArtMissions">
                        <h4>Création du site Kaoline porcelaine</h4>
                        <p>
                            Conception d'un site web avec le framework* Symfony 5 pour une micro
                            entreprise dans le cadre de ma soutenance pour obtenir mes deux certificats professionnels.
                        </p>
                    </article>
                </div>

            </article>
            <article class="Lexique">
                <h5 id="titre-lexique">Lexique</h5>
                <div id="contenus-lexique">
                    <p>
                        *CMS: C'est un logiciel qui permet de créer de A à Z un site web grâce à des thèmes proposé par
                        celui-ci.
                    </p>
                    <p>
                        *Divi: C'est un éditeur de site web qui permet de créer et modifier un site web sans utiliser de
                        codage informatique, ni de connaissances en programmation web.
                    </p>
                    <p>
                        *Framework: C'est un outil de développement qui permet de faciliter la création d'un site web.
                        Il
                        permet d'uniformiser le codage des développeurs, il faut avoir des connaissances en codage pour
                        son
                        utilisation.
                    </p>
                </div>
            </article>
        </div>
        <div>
            <h2 id="Mes_realisations">Mes réalisations</h2>
            <div class="realisations">
                <figure>
                    <img src="img/photo_projet.png" alt="Kaoline porcelaine">
                    <figcaption>
                        Kaoline porcelaine
                    </figcaption>
                </figure>
                <figure>
                    <img src="img/photo_projet.png" alt="AniMangaQuiz">
                    <figcaption>
                        AniMangaQuiz
                    </figcaption>
                </figure>
                <figure>
                    <img src="img/photo_projet.png" alt="Infopets">
                    <figcaption>
                        Infopets
                    </figcaption>
                </figure>
            </div>
            <section class="github">
                <p>Vous pouvez aussi les trouver sur mon compte github</p>
                <a href="https://github.com/Gaillard05" class="lien-github"><img src="img/github.png" alt="github"></a>
            </section>
        </div>
        <div class="conteneurForm">
            <section>
                <h2 id="Me_contacter">Me contacter</h2>
                <p>Un projet, une question n'hésitez pas à me contacter.
                    Je vous répondrai dans les meilleurs délais</p>
                <p id="valideEnvoi"><?php if (!empty($_POST)) {
                                        echo "Votre demande à bien été envoyée";
                                    } else {
                                        echo "Veuillez renseigner vos champs";
                                    } ?></p>
            </section>
            <form action="portfolio.php#Me_contacter" method="post" id="form">
                <div class="champs">
                    <input type="text" name="nom" placeholder="nom" id="nom" minlength="2" maxlength="25">
                </div>
                <div class="champs">
                    <input type="tel" name="num" placeholder="numéro de téléphone">
                </div>
                <div class="champs">
                    <input type="email" name="mail" placeholder="adresse mail">
                </div>
                <div class="champs">
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="motif de votre demande"></textarea>
                </div>
                <div class="btnContact">
                    <input type="submit" value="Envoyer" id="btnEnvoyer">
                </div>
            </form>
        </div>
        <div class="scroll-top">
            <a href="#" id="btn-scroll"><i class="fas fa-chevron-circle-up"></i></a>
        </div>
    </main>
</body>
<script src="controleFormContact.js"></script>

</html>