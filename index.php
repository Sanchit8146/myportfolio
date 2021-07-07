<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sanchit's Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/preloader.min.css" rel="stylesheet">
    <link href="css/circle.css" rel="stylesheet">
    <link href="css/fm.revealator.jquery.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="./img/favicon_io/favicon.ico?v=2" />
    <!-- CSS Skin File -->
    <link href="css/skins/goldenrod.css" rel="stylesheet">

    <!-- Live Style Switcher -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="css/skins/blue.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="css/skins/yellow.css" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="css/skins/blueviolet.css" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="css/skins/goldenrod.css" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="css/skins/magenta.css" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="css/skins/purple.css" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="css/skins/red.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="css/skins/lightgreen.css" />
    <link rel="stylesheet" type="text/css" href="css/styleswitcher.css" />

    <!-- Modernizr JS File -->
    <script src="js/modernizr.custom.js"></script>
</head>

<body>
    <!-- Live Style Switcher Starts-->
    <div id="switcher" class="">
        <div class="content-switcher">
            <h4>STYLE SWITCHER</h4>
            <ul>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color"><img
                            src="img/styleswitcher/purple.png" alt="purple" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color"><img
                            src="img/styleswitcher/red.png" alt="red" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet" class="color"><img
                            src="img/styleswitcher/blueviolet.png" alt="blueviolet" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color"><img
                            src="img/styleswitcher/blue.png" alt="blue" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color"><img
                            src="img/styleswitcher/goldenrod.png" alt="goldenrod" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color"><img
                            src="img/styleswitcher/magenta.png" alt="magenta" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('lightgreen');" title="lightgreen" class="color"><img
                            src="img/styleswitcher/lightgreen.png" alt="lightgreen" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color"><img
                            src="img/styleswitcher/orange.png" alt="orange" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color"><img
                            src="img/styleswitcher/green.png" alt="green" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color"><img
                            src="img/styleswitcher/yellow.png" alt="yellow" /></a>
                </li>
            </ul>
            <div id="hideSwitcher">&times;</div>
        </div>
    </div>
    <div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
    <!-- Live Style Switcher Ends -->

    <!-- Header Starts -->
    <header class="header" id="navbar-collapse-toggle">
        <!-- Fixed Navigation Starts -->
        <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
            <li class="icon-box">
                <i class="fa fa-home"></i>
                <a class="navs" href="#home">
                    <h2>Home</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-user"></i>
                <a class="navs" href="#about">
                    <h2>About</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-laptop"></i>
                <a class="navs" href="#skills">
                    <h2>Skills</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-book"></i>
                <a class="navs" href="#education">
                    <h2>Education</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-folder-open"></i>
                <a class="navs" href="#projects">
                    <h2>Projects</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-envelope-open"></i>
                <a class="navs" href="#contact">
                    <h2>Contact</h2>
                </a>
            </li>
        </ul>
        <!-- Fixed Navigation Ends -->
        <!-- Mobile Menu Starts -->
        <nav role="navigation" class="d-block d-lg-none">
            <div id="menuToggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                <ul class="list-unstyled" id="menu">
                    <li><a href="#home"><i class="fa fa-home"></i><span>Home</span></a></li>
                    <li><a href="#about"><i class="fa fa-user"></i><span>About</span></a></li>
                    <li><a href="#skills"><i class="fa fa-laptop"></i><span>Skills</span></a></li>
                    <li><a href="#education"><i class="fa fa-book"></i><span>Education</span></a></li>
                    <li><a href="#projects"><i class="fa fa-folder-open"></i><span>Projects</span></a></li>
                    <li><a href="#contact"><i class="fa fa-envelope-open"></i><span>Contact Me</span></a></li>
                </ul>
            </div>
        </nav>
        <!-- Mobile Menu Ends -->
    </header>
    <!-- Header Ends -->
    <!-- Main Content Starts -->
    <section id="home"
        class="home container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
        <div class="color-block d-none d-lg-block"></div>
        <div class="row home-details-container align-items-center">
            <div class="col-lg-4 bg d-none d-lg-block"></div>
            <div class="col-lg-8 home-details text-left text-sm-center text-lg-left">
                <div>
                    <div class="animate-typing text-center animatetext" data-animate-loop="true" data-type-speed="200"
                        data-type-delay="200" data-remove-speed="50" data-remove-delay="500" data-cursor-speed="200">
                        < Welcome Fellas />|
                        < To My World />
                    </div>
                    <img src="img/sanchit-mobile.jpg" class="img-fluid main-img-mobile d-sm-block d-lg-none"
                        alt="my picture" />
                    <h1 class="text-uppercase poppins-font">I'm sanchit gupta.<span>web developer</span></h1>
                    <p class="open-sans-font text-justify">I'm a web designer & full‑stack developer focused on
                        crafting clean & user‑friendly experiences, I am passionate about building excellent
                        software
                        that improves the lives of those around me.</p>
                    <a class="button" href="#about">
                        <span class="button-text">more about me</span>
                        <span class="button-icon fa fa-arrow-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="about" id="about">
        <main class="title-section text-center revealator-slideup revealator-once revealator-delay1">
            <h1>ABOUT <span>ME</span></h1>
            <span class="title-bg">Resume</span>
        </main>
        <main class="main-content revealator-slideup revealator-once revealator-delay1">
            <div class="container">
                <div class="row">
                    <!-- Personal Info Starts -->
                    <div class="col-12 col-lg-5 col-xl-6">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="text-uppercase custom-title mb-0 ft-wt-600 text-center">personal info
                                </h3>
                            </div>
                            <div class="col-12 d-block d-sm-none">
                                <img src="img/sanchit-mobile.jpg" class="img-fluid main-img-mobile" alt="my picture" />
                            </div>
                            <div class="col-6">
                                <ul class="about-list list-unstyled open-sans-font">
                                    <li> <span class="title">first name :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Sanchit</span>
                                    </li>
                                    <li> <span class="title">last name :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Gupta</span>
                                    </li>
                                    <li> <span class="title">Age :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">22
                                            Years</span> </li>

                                    <li> <span class="title">Freelance :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Available</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="about-list list-unstyled open-sans-font">

                                    <li> <span class="title">phone :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block"><a
                                                class="call" href="tel:+918146090777">+91-8146090777</a></span>
                                    </li>
                                    <li> <span class="title">Email :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block"><a
                                                class="mail"
                                                href="mailto:sanchitg51@gmail.com">sanchitg51@gmail.com</a></span>
                                    </li>
                                    <li> <span class="title">Skype :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block"><a
                                                class="skype" href="https://join.skype.com/invite/uiN6vPTWX4Jk"
                                                target="_blank">sanchitgupta.1234</a></span>
                                    </li>
                                    <li> <span class="title">langages :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">English,
                                            Hindi, Punjabi</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-lg-12 mt-3">
                                <a class="button download" href="./cv/CV(Sanchit_Gupta).pdf" download>
                                    <span class="button-text">Download CV</span>
                                    <span class="button-icon fa fa-download"></span>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-12 mt-3">
                                <a class="button" href="#skills">
                                    <span class="button-text">Skills</span>
                                    <span class="button-icon fa fa-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Personal Info Ends -->
                    <!-- Boxes Starts -->
                    <div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0">
                        <div class="row">
                            <div class="col-6">
                                <div class="box-stats with-margin">
                                    <h3 class="poppins-font position-relative">6</h3>
                                    <p class="open-sans-font m-0 position-relative text-uppercase">months of <span
                                            class="d-block">experience</span></p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="box-stats with-margin">
                                    <h3 class="poppins-font position-relative">10</h3>
                                    <p class="open-sans-font m-0 position-relative text-uppercase">completed <span
                                            class="d-block">projects</span></p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="box-stats">
                                    <h3 class="poppins-font position-relative">8</h3>
                                    <p class="open-sans-font m-0 position-relative text-uppercase">Happy<span
                                            class="d-block">customers</span></p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="box-stats">
                                    <h3 class="poppins-font position-relative">3</h3>
                                    <p class="open-sans-font m-0 position-relative text-uppercase">awards <span
                                            class="d-block">won</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Boxes Ends -->
                </div>
            </div>
        </main>
    </section>

    <!-- Skills Starts -->
    <section class="about" id="skills">
        <main class="title-section text-center revealator-slideup revealator-once revealator-delay1">
            <h1>MY <span>SKILLS</span></h1>
            <span class="title-bg">Skills</span>
        </main>
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3 mb-3 mb-sm-5 text-center">
                    <div>
                        <img src="img/html.png" height="100" width="100">
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">html</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5 text-center">
                    <img src="img/js.png" height="100" width="100">
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">javascript</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5 text-center">
                    <img src="img/css.png" height="100" width="100">
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">css</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5 text-center">
                    <img src="img/php.png" height="100" width="100">
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">php</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5 text-center">
                    <img src="img/mdb.png" height="100" width="100">
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">MongoDB</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5 text-center">
                    <img src="img/ex.png" height="100" width="100">
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Express.JS</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5 text-center">
                    <img src="img/ang.png" height="100" width="100">
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">angular</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5 text-center">
                    <img src="img/njs.png" height="100" width="100">
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Node JS</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- Skills Ends -->

    <!-- Education Starts -->
    <section class="about" id="education">
        <main class="title-section text-center revealator-slideup revealator-once revealator-delay1">
            <h1>Education & <span>Experience</span></h1>
            <span class="title-bg">Study</span>
        </main>
        <div class="container">
            <div class="row extra">
                <div class="col-lg-6 m-15px-tb">
                    <div class="resume-box">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-laptop-house"></i>
                                </div>
                                <span class="time open-sans-font text-uppercase">2020</span>
                                <h5 class="poppins-font text-uppercase">Web Developer<span
                                        class="place open-sans-font">The Marketing Doctorz</span></h5>
                                <p class="open-sans-font">Worked for different clients with them for a short period
                                    of
                                    time.</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-laptop-code"></i>
                                </div>
                                <span class="time open-sans-font text-uppercase">2018 - 2019</span>
                                <h5 class="poppins-font text-uppercase">Freelancer <span
                                        class="place open-sans-font">Sakaar Microsolutions</span></h5>
                                <p class="open-sans-font">Learnt web development under their guidance and worked on
                                    more
                                    than 8 projects with them.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 m-15px-tb">
                    <div class="resume-box">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <span class="time open-sans-font text-uppercase">2021 - Present</span>
                                <h5 class="poppins-font text-uppercase">Bachelor's Degree <span
                                        class="place open-sans-font">DAV Institute Of Engineering &
                                        Technology</span>
                                </h5>
                                <p class="open-sans-font">Studied basic engineering subjects alongwith learnt
                                    different
                                    web technologies during this course.</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-university"></i>
                                </div>
                                <span class="time open-sans-font text-uppercase">2017</span>
                                <h5 class="poppins-font text-uppercase">Higher Secondary Education <span
                                        class="place open-sans-font">Innoncent Hearts School</span></h5>
                                <p class="open-sans-font">Studied under the Non-Medical Branch and scored above 90%
                                    in
                                    my boards.</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-book-open"></i>
                                </div>
                                <span class="time open-sans-font text-uppercase">2015</span>
                                <h5 class="poppins-font text-uppercase">Matriculation <span
                                        class="place open-sans-font">S.D. Model School</span></h5>
                                <p class="open-sans-font">Completed my matriculation with flying colours and scoring
                                    above 85% above in my boards.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Education Ends -->

    <!-- Projects Starts -->
    <section id="projects" class="project">
        <main class="title-section text-center revealator-slideup revealator-once revealator-delay1">
            <h1>my <span>projects</span></h1>
            <span class="title-bg">works</span>
        </main>
        <!-- Page Title Ends -->
        <!-- Main Content Starts -->
        <main class="main-content text-center revealator-slideup revealator-once revealator-delay1">
            <div id="grid-gallery" class="container grid-gallery">
                <!-- Project Grid Starts -->
                <main class="grid-wrap">
                    <ul class="row grid">
                        <!-- Project Item Starts -->
                        <li class="tilt">
                            <figure>
                                <img src="img/projects/proj1.png" alt="Project 1" />
                                <div><span>AtoZ Store</span></div>
                            </figure>
                        </li>
                        <!-- Project Item Ends -->

                        <!-- Project Item Starts -->
                        <li class="tilt">
                            <figure>
                                <img src="img/projects/proj2.png" alt="Project 2" />
                                <div><span>Eduspace</span></div>
                            </figure>
                        </li>
                        <!-- Project Item Ends -->

                        <!-- Project Item Starts -->
                        <li class="tilt">
                            <figure>
                                <img src="img/projects/proj3.png" alt="Project 3" />
                                <div><span>Lespencer</span></div>
                            </figure>
                        </li>
                        <!-- Project Item Ends -->

                        <!-- Project Item Starts -->
                        <li class="tilt">
                            <figure>
                                <img src="img/projects/proj4.png" alt="Project 4" />
                                <div><span>Davathon</span></div>
                            </figure>
                        </li>
                        <!-- Project Item Ends -->

                        <!-- Project Item Starts -->
                        <li class="tilt">
                            <figure>
                                <img src="img/projects/proj5.png" alt="Project 5" />
                                <div><span>Usha Boutique</span></div>
                            </figure>
                        </li>
                        <!-- Project Item Ends -->

                        <!-- Project Item Starts -->
                        <li class="tilt">
                            <figure>
                                <img src="img/projects/proj6.png" alt="Project 6" />
                                <div><span>Balwinder Creations</span></div>
                            </figure>
                        </li>
                        <!-- Project Item Ends -->
                    </ul>
                </main>
                <!-- Project Grid Ends -->

                <!-- Project Details Starts -->
                <main class="slideshow">
                    <ul>
                        <!-- Project Item Detail Starts -->
                        <li>
                            <figure>
                                <!-- Project Details Starts -->
                                <figcaption>
                                    <h3>AtoZ Store</h3>
                                    <div class="row open-sans-font">
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project
                                            </span>:
                                            <span class="ft-wt-600 uppercase">Web Application</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fas fa-sticky-note pr-2"></i><span class="project-label">Category
                                            </span>: <span class="ft-wt-600 uppercase">E-Commerce</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-code pr-2"></i><span class="project-label">Langages
                                            </span>: <span class="ft-wt-600 uppercase">Angular, NodeJS, Express.JS,
                                                MongoDB</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview
                                            </span>:
                                            <span class="ft-wt-600 uppercase stop"><a class="weblink"
                                                    href="https://atozstore.herokuapp.com/" target="_blank">Website
                                                    Link</a></span>
                                        </div>
                                    </div>
                                </figcaption>
                                <!-- Project Details Ends -->
                                <!-- Main Project Content Starts -->
                                <video id="video" class="responsive-video" controls muted
                                    poster="img/projects/proj1.png">
                                    <source src="img/projects/proj1.m4v" type="video/mp4">
                                </video>
                                <!-- Main Project Content Ends -->
                            </figure>
                        </li>
                        <!-- Project Item Detail Ends -->

                        <!-- Project Item Detail Starts -->
                        <li>
                            <figure>
                                <!-- Project Details Starts -->
                                <figcaption>
                                    <h3>Eduspace</h3>
                                    <div class="row open-sans-font">
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project
                                            </span>:
                                            <span class="ft-wt-600 uppercase">Web Application</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fas fa-sticky-note pr-2"></i><span class="project-label">Category
                                            </span>: <span class="ft-wt-600 uppercase">Education</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-code pr-2"></i><span class="project-label">Langages
                                            </span>: <span class="ft-wt-600 uppercase">HTML, CSS, Javascript, PHP,
                                                Mysql</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview
                                            </span>:
                                            <span class="ft-wt-600 uppercase stop"><a class="weblink"
                                                    href="https://staticprojects.000webhostapp.com/eduspace/"
                                                    target="_blank">Website
                                                    Link</a></span>
                                        </div>
                                    </div>
                                </figcaption>
                                <!-- Project Details Ends -->
                                <!-- Main Project Content Starts -->
                                <video id="video" class="responsive-video" controls muted
                                    poster="img/projects/proj2.png">
                                    <source src="img/projects/proj2.m4v" type="video/mp4">
                                </video>
                                <!-- Main Project Content Ends -->
                            </figure>
                        </li>
                        <!-- Project Item Detail Ends -->

                        <!-- Project Item Detail Starts -->
                        <li>
                            <figure>
                                <!-- Project Details Starts -->
                                <figcaption>
                                    <h3>Lespencer</h3>
                                    <div class="row open-sans-font">
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project
                                            </span>:
                                            <span class="ft-wt-600 uppercase">Website</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fas fa-sticky-note pr-2"></i><span class="project-label">Category
                                            </span>: <span class="ft-wt-600 uppercase">Business(Static)</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-code pr-2"></i><span class="project-label">Langages
                                            </span>: <span class="ft-wt-600 uppercase">HTML, CSS, Bootstrap,
                                                Javascript</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview
                                            </span>:
                                            <span class="ft-wt-600 uppercase stop"><a class="weblink"
                                                    href="http://lespencer.com/" target="_blank">Website
                                                    Link</a></span>
                                        </div>
                                    </div>
                                </figcaption>
                                <!-- Project Details Ends -->
                                <!-- Main Project Content Starts -->
                                <video id="video" class="responsive-video" controls muted
                                    poster="img/projects/proj3.png">
                                    <source src="img/projects/proj3.m4v" type="video/mp4">
                                </video>
                                <!-- Main Project Content Ends -->
                            </figure>
                        </li>
                        <!-- Project Item Detail Ends -->

                        <!-- Project Item Detail Starts -->
                        <li>
                            <figure>
                                <!-- Project Details Starts -->
                                <figcaption>
                                    <h3>Davathon</h3>
                                    <div class="row open-sans-font">
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project
                                            </span>:
                                            <span class="ft-wt-600 uppercase">Website</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fas fa-sticky-note pr-2"></i><span class="project-label">Category
                                            </span>: <span class="ft-wt-600 uppercase">Event(Static)</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-code pr-2"></i><span class="project-label">Langages
                                            </span>: <span class="ft-wt-600 uppercase">HTML, CSS, Bootstrap,
                                                Javascript, Jquery</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview
                                            </span>:
                                            <span class="ft-wt-600 uppercase stop"><a class="weblink"
                                                    href="https://staticprojects.000webhostapp.com/davathon/"
                                                    target="_blank">Website
                                                    Link</a></span>
                                        </div>
                                    </div>
                                </figcaption>
                                <!-- Project Details Ends -->
                                <!-- Main Project Content Starts -->
                                <video id="video" class="responsive-video" controls muted
                                    poster="img/projects/proj4.png">
                                    <source src="img/projects/proj4.m4v" type="video/mp4">
                                </video>
                                <!-- Main Project Content Ends -->
                            </figure>
                        </li>
                        <!-- Project Item Detail Ends -->

                        <!-- Project Item Detail Starts -->
                        <li>
                            <figure>
                                <!-- Project Details Starts -->
                                <figcaption>
                                    <h3>Usha Boutique</h3>
                                    <div class="row open-sans-font">
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project
                                            </span>:
                                            <span class="ft-wt-600 uppercase">Web Application</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fas fa-sticky-note pr-2"></i><span class="project-label">Category
                                            </span>: <span class="ft-wt-600 uppercase">E-Commerce</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-code pr-2"></i><span class="project-label">Langages
                                            </span>: <span class="ft-wt-600 uppercase">HTML, CSS, Javascript, Jquery,
                                                PHP,
                                                Mysql</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview
                                            </span>:
                                            <span class="ft-wt-600 uppercase stop"><a class="weblink"
                                                    href="http://staticprojects.000webhostapp.com/ushaboutique/"
                                                    target="_blank">Website
                                                    Link</a></span>
                                        </div>
                                    </div>
                                </figcaption>
                                <!-- Project Details Ends -->
                                <!-- Main Project Content Starts -->
                                <video id="video" class="responsive-video" controls muted
                                    poster="img/projects/proj5.png">
                                    <source src="img/projects/proj5.m4v" type="video/mp4">
                                </video>
                                <!-- Main Project Content Ends -->
                            </figure>
                        </li>
                        <!-- Project Item Detail Ends -->

                        <!-- Project Item Detail Starts -->
                        <li>
                            <figure>
                                <!-- Project Details Starts -->
                                <figcaption>
                                    <h3>Balwinder Creations</h3>
                                    <div class="row open-sans-font">
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project
                                            </span>:
                                            <span class="ft-wt-600 uppercase">Website</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fas fa-sticky-note pr-2"></i><span class="project-label">Category
                                            </span>: <span class="ft-wt-600 uppercase">Business(Static)</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-code pr-2"></i><span class="project-label">Langages
                                            </span>: <span class="ft-wt-600 uppercase">HTML, CSS, Javascript,
                                                Bootstrap</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview
                                            </span>:
                                            <span class="ft-wt-600 uppercase stop"><a class="weblink"
                                                    href="http://staticprojects.000webhostapp.com/balwindercreations/"
                                                    target="_blank">Website
                                                    Link</a></span>
                                        </div>
                                    </div>
                                </figcaption>
                                <!-- Project Details Ends -->
                                <!-- Main Project Content Starts -->
                                <video id="video" class="responsive-video" controls muted
                                    poster="img/projects/proj6.png">
                                    <source src="img/projects/proj6.m4v" type="video/mp4">
                                </video>
                                <!-- Main Project Content Ends -->
                            </figure>
                        </li>
                        <!-- Project Item Detail Ends -->
                    </ul>

                    <!-- Project Navigation Starts -->
                    <nav>
                        <span class="icon nav-prev"><img src="img/projects/navigation/left-arrow.png"
                                alt="previous"></span>
                        <span class="icon nav-next"><img src="img/projects/navigation/right-arrow.png"
                                alt="next"></span>
                        <span class="nav-close"><img src="img/projects/navigation/close-button.png" alt="close">
                        </span>
                    </nav>
                    <!-- Project Navigation Ends -->
                </main>
            </div>
        </main>
    </section>
    <!-- Projects Ends -->

    <!-- Contact Starts -->
    <section class="contact" id="contact">
        <!-- Page Title Starts -->
        <main class="title-section text-center revealator-slideup revealator-once revealator-delay1">
            <h1>get in <span>touch</span></h1>
            <span class="title-bg">contact</span>
        </main>
        <!-- Page Title Ends -->
        <!-- Main Content Starts -->
        <main class="main-content revealator-slideup revealator-once revealator-delay1">
            <div class="container">
                <div class="row">
                    <!-- Left Side Starts -->
                    <div class="col-12 col-lg-4">
                        <h3 class="text-uppercase text-center custom-title mb-0 ft-wt-600 pb-3">Don't be shy !</h3>
                        <p class="open-sans-font mb-3 text-justify">Feel free to get in touch with me. I am always
                            open
                            to discussing
                            new
                            projects, creative ideas or opportunities to be part of your visions.</p>
                        <p class="open-sans-font custom-span-contact position-relative">
                            <span class="d-block">mail me<i class="fa fa-envelope-open"></span></i><a class="mail"
                                href="mailto:sanchitgupta0144@gmail.com">sanchitgupta0144@gmail.com</a>
                        </p>
                        <p class="open-sans-font custom-span-contact position-relative">
                            <span class="d-block">call me<i class="fa fa-phone-square"></i></span> <a class="call"
                                href="tel:+918146090777">+91-8146090777</a>
                        </p>
                        <ul class="social list-unstyled pt-1 mb-5">
                            <li><a class="fb" title="Facebook" target="_blank"
                                    href="https://www.facebook.com/sanchitgupta.2031"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a class="tw" title="Twitter" target="_blank" href="https://twitter.com/sanchit_8146"><i
                                        class="fa fa-twitter"></i></a>
                            </li>
                            <li><a class="insta" title="Instagram" target="_blank"
                                    href="https://www.instagram.com/sanchit_8146/"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a class="link" title="LinkedIn" target="_blank"
                                    href="https://www.linkedin.com/in/sanchit-gupta-267122123/"><i
                                        class="fa fa-linkedin-square"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- Left Side Ends -->
                    <!-- Contact Form Starts -->
                    <div class="col-12 col-lg-8">
                        <form class="contactform" method="POST" action="send.php">
                            <div class="contactform">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <input type="text" name="name" placeholder="YOUR NAME" required>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <input type="email" name="email" placeholder="YOUR EMAIL" required>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <input type="tel" name="number" placeholder="YOUR NUMBER" required>
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" placeholder="YOUR MESSAGE" required></textarea>
                                        <button type="submit" class="button send">
                                            <span class="button-text">Send Message</span>
                                            <span class="button-icon fa fa-send"></span>
                                        </button>
                                    </div>
                                    <div class="col-12 form-message">
                                        <span class="output_message text-center font-weight-600 text-uppercase"></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact Form Ends -->
                </div>
            </div>
        </main>
    </section>
    <!-- Contact Ends -->
    <!-- Main Content Ends -->

    <!-- Footer Starts -->
    <footer class="row">
        <div class="col-md-12">
            <h4 class="text-center">Made with <i class="fas fa-heart"></i> By <span>Sanchit Gupta</span></h4>
        </div>
    </footer>
    <!-- Footer Ends -->
    <a id="toTop" class="far fa-arrow-alt-circle-up"></a>

    <!-- Template JS Files -->
    <script src="js/jquery-3.5.0.min.js"></script>
    <script src="js/fontawesome.min.js"></script>
    <script src="js/jquery.animateTyping.js"></script>
    <script src="js/styleswitcher.js"></script>
    <script src="js/preloader.min.js"></script>
    <script src="js/fm.revealator.jquery.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpGridGallery.js"></script>
    <script src="js/jquery.hoverdir.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/back2top.min.js"></script>
    <script src="js/tilt.js"></script>
    <script src="js/index.js"></script>
</body>


</html>