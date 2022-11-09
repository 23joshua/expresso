<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/Logo-trans.webp" type="image/png">
    <link href="https://file.myfontastic.com/UuzaHAs8H8DwrS8SY8hPt9/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Expresso Carga & Serviços</title>
</head>

<body>
    <!-- início do preloader -->
    <div class="preloader">
        <img src="assets/img/preloader.gif" alt="">
    </div>
    <header class="header container">
        <div class="logo">
            <a href="./">
                <img src="assets/img/logo.webp" class="logo-blue" alt="">
                <img src="assets/img/logo-white.webp" class="logo-white" alt="">
            </a>
        </div>
        <div class="bars-toggle">
            <span class="toggle icon-bars"></span>
        </div>
        <div class="h-cont-soc">
            <div class="h-contact">
                <p class="h-spanCont"><span class="icon icon-phone"></span> (+258) 82 12 25 892</p>
                <p class=" h-spanEmail"><span class="icon icon-envelope-o"></span> geral@ecs.co.mz</p>
                <p class="h-spanHours"><span class="icon icon-clock-o"></span> Aberto das 08 : 00 às 17 : 30</p>
            </div>
            <div class="social">
                <a class="icon icon-earth btn_lang">
                    <select onchange="doGTranslate(this);">
                        <option value="pt|en">
                            <a href="#" onclick="doGTranslate('pt|en');return false;" title="English"
                                class="gflag nturl" style="background-position:-0px -0px;">
                                <img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="English" />
                            </a>
                        </option>
                        <option value="pt|pt">Pt</option>
                    </select>
                    <div id="google_translate_element2"></div>
                </a>
                <a href="https://www.facebook.com/" title="Expresso Carga & Serviços Facebook" target="_blank"
                    class="icon icon-facebook-alt"></a>
                <a href="" title="instagram" target="_blank" class="icon icon-instagram"></a>
                <a href="" title="linkedin" target="_blank" class="icon icon-linkedin-square"></a>
            </div>
        </div>
        <nav class="nav">
            <a href="./" title="home" class="a-nav">inicio</a>
            <a href="?file=about" title="sobre nós" class="a-nav">sobre nós</a>
            <a href="?file=services" title="serviços" class="a-nav">serviços</a>
            <a href="?file=blog" title="blog" class="a-nav">blog</a>
            <a href="?file=contacte" title="contactos" class="a-nav">contactos</a>
        </nav>
    </header>

    <main class=" main">
        <?php

        $file = filter_input(INPUT_GET, "file", FILTER_SANITIZE_SPECIAL_CHARS);

        if (empty("$file")) {
            require __DIR__ . "/views/home.php";
        } elseif ($file && file_exists(__DIR__ . "/views/{$file}.php")) {
            require __DIR__ . "/views/{$file}.php";
        } else {
            require __DIR__ . "/views/404.php";
        }

        require __DIR__ . "/views/newsletter.php";
        require __DIR__ . "/views/client.php";
        ?>
    </main>

    <footer class="footer">
        <div class="footer-content container">
            <div class="footerLogo">
                <a href="./"><img src="assets/img/Logo-trans.png" alt=""></a>
                <div class="social">
                    <a href="" title="Facebook" target="_blank" class="icon icon-facebook-square"></a>
                    <a href="" title="instagram" target="_blank" class="icon icon-instagram"></a>
                    <a href="" title="linkedin" target="_blank" class="icon icon-linkedin-square"></a>
                </div>
            </div>
            <ul class="footer-menu">
                <h3>menu</h3>
                <li><a href="./" title="home">home</a></li>
                <li><a href="?file=about" title="about">about</a></li>
                <li><a href="?file=services" title="services">services</a></li>
                <li><a href="?file=blog" title="blog">blog</a></li>
                <li><a href="?file=contacte" title="contacte">contact</a></li>
            </ul>
            <ul class="footer-terms">
                <h3>termos</h3>
                <li><a href="?file=terms" title="_blank">Termos & condições</a></li>
                <li><a href="" title="_blank">Perguntas frequentes</a></li>
                <li><a href="" title="_blank">política de privacidade</a></li>
            </ul>
            <ul class="footer-services">
                <h3>localize-nos através</h3>
                <li><a href="#" class="icon icon-phone"></a>
                    <p>(+258) 82 12 25 892 / (+258) 21 46 76 44</p>
                </li>
                <li>
                    <a href="#" class="icon icon-envelope-o"></a>
                    <p>geral@ecs.co.mz</p>
                </li>
            </ul>
            <div class="footer-copyRight">
                <p class="copy">todos direitos reservado || &copy expresso carga & serviços 2022</p>
            </div>
        </div>
    </footer>
    <script type="text/javascript"
        src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
    <script src="assets/js/main.js"> </script>

</body>

</html>