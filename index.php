<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Taylor Satterfield is a Computer Science student at the University of Nebraska-Lincoln looking for oppurtunities for building websites and jobs">

    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="resources/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="resources/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="resources/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="resources/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="resources/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="resources/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="resources/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="resources/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="resources/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="resources/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="resources/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="resources/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="resources/icons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>Taylor Satterfield's Portfolio</title>
</head>

<body>

    <!-- HEADER -->
    <header>

        <!-- NAVBAR -->
        <nav>
            <div class="row navbar-row">
                <h3 class="name-brand">Taylor Satterfield</h3>
                <div class="main-nav js--main-nav">

                    <ul class="nav-list">
                        <li class="nav-item"><a href="#about">About</a></li>
                        <li class="nav-item"><a href="#projects">Projects</a></li>
                        <li class="nav-item"><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <ion-icon class="mobile-nav js--nav-icon" name="menu-outline"></ion-icon>
            </div>
        </nav>

        <!-- LANDING SCREEN -->
        <div class="hero-text-box">
            <h1>Hi, I'm Taylor.<br><span>Devloper, Programmer, Student</span></h1>
            <div class="buttons">
                <a href="#" class="btn js--scroll-to-about">About myself</a>
                <a href="#" class="btn btn-ghost js--scroll-to-contact">Let's build something together</a>
            </div>
        </div>
    </header>

    <!-- ABOUT -->
    <section class="about-section js--about" id="about">
        <div class="row">
            <h2 class="about-me">About myself</h2>
            <p class="description">I'm an aspiring student devevolper passionate about writing clean code and simple user interfaces that are both easy to navigate and look good. I'm located in Lincoln, Nebraska and am attending the University of Nebraska-Lincoln pursing a
                degree in Computer Science. I'm always looking for oppurtunities. Here's some of my skills:
            </p>
        </div>

        <div class="row js--wp-1">
            <div class="talents">

                <div class="talent">
                    <div class="talent-header">
                        <h3>Static/Responsive Websites</h3>
                        <ion-icon class="talent-icon" name="laptop-outline"></ion-icon>
                    </div>
                    <p class="talent-description">I design and create beautiful static websites using HTML, CSS, and Javascript. I also can use jQuery to add smooth transitions throughout the page. I also focus on making these pages responsive to any screen size, so that they look
                        beautiuful on any device. </p>
                </div>

                <div class="talent">
                    <div class="talent-header">
                        <h3>Front-End Development</h3>
                        <ion-icon class="talent-icon" name="logo-angular"></ion-icon>
                    </div>
                    <p class="talent-description">I build front-end applications using Angular. These applications can reach out to various APIs to get valuable and relevant information to display to users. </p>
                </div>

                <div class="talent">
                    <div class="talent-header">
                        <h3>Programming</h3>
                        <ion-icon class="talent-icon" name="code-slash-outline"></ion-icon>
                    </div>
                    <p class="talent-description"> I've studied with various programming languages to create efficient programs. I'm proficient in Python and Java; two of the most popular languages used today.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="lets-connect">
                <h3>Interested in hiring me for a job or a project?</h3>
                <a href="#" class="btn js--scroll-to-contact">Let's talk!</a>
            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section class="project-section " id="projects">
        <div class="row">
            <h2>My Work</h2>
        </div>

        <div class="row js--wp-2">

            <div class="project-row">

                <div class="group">

                    <label for="portfolio">Personal Portfolio<br>Tools: HTML, CSS, JavaScript, jQuery</label>

                    <figure class="project" id="portfolio">
                        <a href="#" class="js--scroll-to-top"> <img class="project-img" src="resources/img/1.png" alt="test 1"></a>
                    </figure>
                </div>
                <div class="group">

                    <label for="food-finder">Nearby Food Finder<br>Tools: HTML, CSS, TypeScript, Angular</label>
                    <figure class="project" id="food-finder">
                        <a href="#" class="js--no-link"><img class="project-img" src="resources/img/2.jpg" alt="test 2"></a>
                    </figure>
                </div>
            </div>
        </div>
    </section>


    <!-- CONTACT -->
    <section class="contact-section js--contact" id="contact">
        <div class="form" id="form">
            <div class="row">
                <h2>Contact me</h2>
            </div>
        </div>

        <div class="row  js--wp-3">
            <form method="post" action="mailer.php" class="contact-form">



                <?php

                if($_GET['success'] == 1) {
                  echo "<div class=\"success form-messages\">
                        Thank you! Your message has been sent.
                    </div>";
                }

                if($_GET['success'] == -1) {
                    echo "<div class=\"error form-messages\">
                        An error has occured. Please check the required fields.
                    </div>";
                }

                ?>

                <div class="row line">
                    <div class="col span-1-of-3">
                        <label for="name"><span>*</span>Name: </label>
                    </div>
                    <div class="col span-2-of-3">
                        <input name="name" id="name" type="text" required>
                    </div>
                </div>

                <div class="row line">
                    <div class="col span-1-of-3">
                        <label for="email"><span>*</span>Email: </label>
                    </div>
                    <div class="col span-2-of-3">
                        <input name="email" id="email" type="email" required>
                    </div>
                </div>

                <div class="row line">
                    <div class="col span-1-of-3">
                        <label for="company">Company name: </label>
                    </div>
                    <div class="col span-2-of-3">
                        <input name="company" id="company" type="text">
                    </div>
                </div>

                <div class="row line">
                    <div class="col span-1-of-3">
                        <label for="choice">Inquery: </label>
                    </div>
                    <div class="col span-2-of-3">
                        <select name="choice" id="choice">
                            <option disabled selected value> -- Select an Inquery -- </option>
                            <option value="Job oppurtunity">Job oppurtunity</option>
                            <option value="Help uild me a website">Help build me a website</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>

                <div class="row line">
                    <div class="col span-1-of-3">
                        <label for="message"><span>*</span>Message: </label>
                    </div>
                    <div class="col span-2-of-3">
                        <textarea name="message" id="message"></textarea>
                    </div>
                </div>

                <div class="row line">
                    <div class="col span-1-of-3">
                        &nbsp;
                    </div>
                    <div class="col span-2-of-3">
                        <input type="submit" class="submit btn" value="Send">
                    </div>
                </div>
            </form>
        </div>
    </section>


    <!-- FOOTER -->
    <footer>
        <div class="footer-nav">
            <div class="footer-list">
                <ul class="footer-links">
                    <li><a href="#" class="js--scroll-to-about">About</a></li>
                    <li><a href="#" class="js--scroll-to-top">Top</a></li>
                </ul>
            </div>

            <div class="footer-icons">
                <ul class="footer-icon-links">
                    <li>
                        <a target="_blank" href="https://github.com/tsatterfield2">
                            <ion-icon class="github" name="logo-github"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.linkedin.com/in/taylor-satterfield/">
                            <ion-icon class="linkedin" name="logo-linkedin"></ion-icon>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <p class="copyright">
                Copyright &copy;2020 Taylor Satterfield.
            </p>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.1.0/dist/ionicons.js"></script>
    <script src="resources/js/script.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-167829668-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-167829668-1');
    </script>

</body>

</html>