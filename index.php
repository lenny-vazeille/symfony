<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rammetto+One&display=swap" >
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Goblin+One&display=swap" >
        <link rel="stylesheet" href="./css/index.css">
        <link rel="stylesheet" href="./librairy/animsition/dist/css/animsition.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="./librairy/animsition/dist/js/animsition.min.js"></script>    
    </head>
    
    <body>
        <header>
            <h1 class="title">Symf <strong class="title_o"> o </strong>  ny Blog</h1>            
            <a class="icon" href="https://github.com/lenny-vazeille">
                <img class="icon_github" src="./assets/icon/github.png" alt="GitHub icon de redirection vers le site.">
            </a>
        </header>

        <section class="animsition">
            <a  class="hidden animsition-link colored-txt" href="./php/sign_up.php">
                <h2 class="letter_move">S'inscrire</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, minima veniam animi vero ut eaque voluptatum, expedita distinctio odit tempora consequuntur. Ad consectetur qui at! Consequuntur maxime magnam quae aperiam!</p>
            </a>
            <a class="hidden animsition-link" href="./php/login.php">
                <h3 class="letter_move">Se connecter</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, minima veniam animi vero ut eaque voluptatum, expedita distinctio odit tempora consequuntur. Ad consectetur qui at! Consequuntur maxime magnam quae aperiam!</p>
            </a>
            <a class="hidden animsition-link" href="./php/contact.php">
                <h1 class="letter_move">Contact</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, minima veniam animi vero ut eaque voluptatum, expedita distinctio odit tempora consequuntur. Ad consectetur qui at! Consequuntur maxime magnam quae aperiam!</p>
            </a>
            <a class="hidden animsition-link" href="./php/about.php"> 
                <h4 class="letter_move">About</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, minima veniam animi vero ut eaque voluptatum, expedita distinctio odit tempora consequuntur. Ad consectetur qui at! Consequuntur maxime magnam quae aperiam!</p>
            </a>
        </section>

        <script type="text/javascript">
            $(document).ready(function() {
                $(".animsition").animsition({
                    inClass: 'zoom-in-lg',
                    outClass: 'zoom-out-lg',
                    inDuration: 1500,
                    outDuration: 800,
                    linkElement: '.animsition-link',
                    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
                    loading: true,
                    loadingParentElement: 'body', //animsition wrapper element
                    loadingClass: 'animsition-loading',
                    loadingInner: '', // e.g '<img src="loading.svg" />'
                    timeout: false,
                    timeoutCountdown: 5000,
                    onLoadEvent: true,
                    browser: [ 'animation-duration', '-webkit-animation-duration'],
                    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
                    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
                    overlay : false,
                    overlayClass : 'animsition-overlay-slide',
                    overlayParentElement : 'body',
                    transition: function(url){ window.location.href = url; }
                });
            });
        </script>

    </body>
</html>