<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Portfolio</title>
</head>

<body>
    <header>

        <div id="hamburger">
            <img src="medias/menu-hamburger.png" alt="menu-hamburger">
        </div>

        <div class="logo">
            <img src="medias/logoprojetportfolio.png" alt="Logo">
        </div>


        <div id="myNav" class="overlay">


            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

            <div class="overlay-content">

                <ul id="home" class="navbar">
                    <li class="navbar__list"><a class="navbar__list-link" href="#">Accueil</a></li>
                    <li class="navbar__list"><a class="navbar__list-link" href="#about-me">Présentation</a></li>
                    <li class="navbar__list"><a class="navbar__list-link" href="#skills">Compétences</a></li>
                    <li class="navbar__list"><a class="navbar__list-link" href="#my-project">Projets</a></li>
                    <li class="navbar__list"><a class="navbar__list-link" href="#form">Contact</a></li>
                </ul>
            </div>

        </div>

        <div onclick="openNav()" id="hamburger">
            <img src="medias/menu-hamburger.png" alt="menu-hamburger">
        </div>



    </header>

    <main>

    <div class="btn">
        <img src="medias/scroll-top.png" class="icon">
    </div>

        <section class="section-home">

            <div class="div-background-host">
                <div class="div-background-host__text">
                    <h1 class="div-background-host__text-name">Matisse Blasco</h1>
                    <h2 class="div-background-host__text-job">Développeur web et mobile</h2>
                </div>
            </div>

        </section>


        <section id="about-me" class="section-about-me">

            <h3>à propos de moi</h3>

            <div class="section-about-me__div">
                <div>
                    <img src="medias/logoprojetportfolio.png" alt="logo">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis laboriosam dignissimos quo voluptate? Eius necessitatibus tempora architecto laboriosam. Illum, numquam! Dicta numquam porro obcaecati et iure vitae modi doloribus laboriosam sint ea veniam, voluptates optio maiores pariatur saepe eos totam deserunt inventore distinctio. Mollitia reiciendis voluptate, commodi sint sit incidunt possimus unde eum, minus maiores est numquam eius, iure doloribus!</p>
            </div>

        </section>


        <section id="skills" class="section-my-skill">

            <h3>mes compétences</h3>

            <div class="section-my-skill__div">
                <img src="medias/logohtml.svg" alt="Logo HTML5">
                <img src="medias/logocss.svg" alt="Logo CSS3">
                <img src="medias/logojavascript.svg" alt="Logo javascript">
                <img src="medias/logophp.svg" alt="Logo PHP">
                <img src="medias/logophotoshop.svg" alt="Logo Adobe Photoshop">
                <img src="medias/logoillustrator.svg" alt="Logo Adobe Illustrator">
                <img src="medias/logo-github.svg" alt="Logo Github">
                <img src="medias/logosass.svg" alt="Logo SASS">
            </div>

        </section>


        <section id="my-project" class="section-my-project">

            <h3>mes projets</h3>

            <div class="section-my-project__list">
                <img class="section-my-project__list-img" src="medias/maquetteutilisateur.jpg" alt="Maquette site de réservation gite">
            </div>

        </section>

        
        <h3 class="section-form__title">contact</h3>
        
        <section class="section-form">

            <div class="section-form__div">

                <form  action="#form" method="POST" class="section-form__div-form">

                    <div>
                        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Nom" id="name" autocomplete="off" />
                    </div>

                    <div id="form">
                        <input name="email" type="email" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" autocomplete="off" />
                    </div>

                    <div class="text">
                        <textarea name="message" class="validate[required,length[6,300]] feedback-input" id="message" placeholder="Message" autocomplete="off"></textarea>
                    </div>

                    <div class="submit">
                        <input name="submit" type="submit" value="ENVOYER" id="button-blue" />
                        <div class="ease"></div>
                    </div>

                    <div class="img">
                        <a href="https://www.linkedin.com/in/matisse-blasco-9975b7186/"><img src="medias/logo-linkedin.png" alt="Logo Linkedin"></a>
                        <a href="https://github.com/MatisseBlasco"><img src="medias/logo-github.svg" alt="Logo Github"></a>
                    </div>

                    <?php
                    if (isset($_POST['submit']) && !empty($_POST['message'])) {

                        $dest = "matisseblascotest@gmail.com";
                        $mail = $_POST['email'];
                        $subject = 'Portfolio';
                        $name = $_POST['name'];
                        $message = $_POST['message'];
                        $header = "From: $mail";

                        $mail = mail($dest, $subject, $message, $header);
                        if ($mail) {
                            echo '<div id="modal">
                        <p>Votre email à bien été envoyé.</p>
                        </div>';
                        }
                    }
                    ?>

                </form>
            </div>

        </section>

    </main>

    <div>
        <footer>&copy;Copyright 2021 Matisse Blasco - Tous droits réservés.</footer>
    </div>

    <script src="main.js"></script>
</body>

</html>