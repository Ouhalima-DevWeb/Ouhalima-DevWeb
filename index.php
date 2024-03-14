
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>PortFolio</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> 

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="51">
    
        
        <!-- Navbar Start -->
        <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 display-5"><span class="text-primary">Port</span>Folio</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="#home" class="nav-item nav-link active">Accueil</a>
                    <a href="#about" class="nav-item nav-link">À propos</a>
                    <a href="#qualification" class="nav-item nav-link">Qualité</a>
                    <a href="#skill" class="nav-item nav-link">Compétences</a>
                    <a href="#service" class="nav-item nav-link">Service</a>
                    <a href="#portfolio" class="nav-item nav-link">Portfolio</a>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
                <a href="" class="btn btn-menu d-none d-lg-block" style="background-color:#457efa; color: #ffffff;">Embauchez-moi</a>
            </div>
        </nav>
        <!-- Navbar End -->

    

        <!-- Header Start -->
        <div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
            <div class="container">
                <div class="row align-items-center">
                
                    <div class="col-lg-7 text-center text-lg-left">
                        <h3 class="text-white font-weight-normal mb-3">Bonjour, je m'appelle</h3>
                        <h1 class="display-3 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 4px #ffffff;">ouhalima sofiane</h1>
                        <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                        <div class="typed-text d-none">Développeur Web, Développeur Front-End, Développeur Back-End, Développeur d'Applications</div>
                        <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                            <a href="Ouhalima Sofiane.pdf" class="btn btn-white mr-4" download>Télécharger le CV</a>
                            <a href="" class="btn btn-blue d-none d-sm-block">Lire la vidéo</a>
                        </div>
                    </div>
                    <div class="col-lg-6 px-8 pl-lg-0 pb-5 pb-lg-4 about-img">
                        <img class="img-fluid w-100 rounded-circle shadow-sm" src="img/profile.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
        <?php
            function calculateExperience($startDate) {
                    // Create DateTime objects for start date and current date
                    $startDateTime = new DateTime($startDate);
                    $currentDateTime = new DateTime();
                    $interval = $startDateTime->diff($currentDateTime);
                    $years = $interval->y;
                    return $years;
            }
            $startDate = "2019-10-19";
            $yearsOfExperience = calculateExperience($startDate);
        ?>
        <!-- About Starte -->
        <div class="container-fluid py-5" id="about">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">À propos</h1>
                    <h1 class="position-absolute text-uppercase text-primary">À propos de moi</h1>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5 pb-4 pb-lg-0">
                        <img class="img-fluid rounded w-100" src="img/about.jpg" alt="">
                    </div>
                    <div class="col-lg-7">
                        <h3 class="mb-4">Développeur Web</h3>
                        <p>Bonjour,  je m'appelle Ouhalima Sofiane. Je suis un développeur full-stack, diplômé de la faculté d'informatique Bac +5. J'ai une très bonne connaissance de Bootstrap, JS , React.js, PHP et Mysql donc je me considère maintenant prêt à m'engager dans des projets majeurs avec des membres d'équipe expérimentés et collaboratifs.</p>
                        <div class="row mb-3">
                            <div class="col-sm-6 py-2"><h6>Nom et Prénom: <span class="text-secondary">Ouhalima Sofiane</span></h6></div>
                            <div class="col-sm-6 py-2"><h6>Diplôme: <span class="text-secondary text-nowrap">Master spécialité système<br/> d'information, optimisation et désision.</span></h6></div>
                            <div class="col-sm-6 py-2"><h6>Experience: <span class="text-secondary"><?php echo $yearsOfExperience.' Années'; ?></span></h6></div>
                            <div class="col-sm-6 py-2"><h6>Téléphone: <span class="text-secondary">+213 676562577</span></h6></div>
                            <div class="col-sm-6 py-2"><h6>Email: <span class="text-secondary">sofianeou93@gmail.com</span></h6></div>
                            <div class="col-sm-6 py-2"><h6>Addresse: <span class="text-secondary">Wilaya de Tipaza,Koléa</span></h6></div>
                            <div class="col-sm-6 py-2"><h6>Freelance: <span class="text-secondary">Disponible</span></h6></div>
                        </div>
                        <!-- <a href="" class="btn btn-outline-primary">Consulter plus</a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->  
        <!-- Qualification Start -->
        <div class="container-fluid py-5" id="qualification">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">QUALITÉ</h1>
                    <h1 class="position-absolute text-uppercase text-primary">Formation et expérience</h1>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h3 class="mb-4">EDUCATION</h3>
                        <div class="border-left border-primary pt-2 pl-4 ml-2">
                            <div class="position-relative ex-me mb-4">
                                <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -35px; font-size: 22px;"></i>
                                <h5 class="font-weight-bold mb-1">Baccalauréat en mathémathiques</h5>
                                <p class="mb-2"><strong>Lycée mekki meeni</strong> | <small>2013 - 2014</small></p>
                            </div>
                            <div class="position-relative ex-me mb-4">
                                <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -35px;  font-size: 22px;"></i>
                                <h5 class="font-weight-bold mb-1">Licence informatique générale</h5>
                                <p class="mb-2"><strong>Université mohamed khider-Algérie</strong> | <small>2014 - 2017</small></p>
                            </div>
                            <div class="position-relative ex-me mb-4">
                                <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -35px;  font-size: 22px;"></i>
                                <h5 class="font-weight-bold mb-1">Master informatique</h5>
                                <p class="mb-2"><strong>Spécialité système d'information, optimisation et désision (L-M-D)</strong> | <small>2017 - 2019</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="mb-4">Expérience</h3>
                    
                        <div class="border-left border-primary pt-2 pl-4 ml-2">
                            <div class="position-relative ex-me mb-4">
                                <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px;left: -35px;  font-size: 22px;"></i>
                                <h5 class="font-weight-bold mb-1">Développement Web</h5> 
                                <p class="mb-2"><strong>BNEDER</strong> | <small> Développeur full stack</small></p> <br/><br/><br/><br/><br/><br/><br/><br/>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Qualification End -->
        <!-- Skill Start -->
        <div class="container-fluid py-5" id="skill">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Compétences</h1>
                    <h1 class="position-absolute text-uppercase text-primary">Mes compétences</h1>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">HTML</h6>
                                <h6 class="font-weight-bold">90%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">CSS</h6>
                                <h6 class="font-weight-bold">75%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">PHP</h6>
                                <h6 class="font-weight-bold">90%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">Javascript</h6>
                                <h6 class="font-weight-bold">90%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">React JS</h6>
                                <h6 class="font-weight-bold">70%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">jQuery</h6>
                                <h6 class="font-weight-bold">90%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Skill End -->
        <!-- Services Start -->
        <div class="container-fluid pt-5" id="service">
            <div class="container">
                <div class="service-h4 position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Service</h1>
                    <h1 class="position-absolute text-uppercase text-primary">Mon Service</h1>
                </div>
                <div class="row pb-3">
                <div class="service-box col-lg-5 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <i class="fa fa-2x fa-database service-icon bg-primary text-white mr-3"></i>
                            <h4 class="font-weight-bold m-0">Administrateur de base de données</h4>
                        </div>
                    </div>
                    <div class="service-box col-lg-5 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <i class="fa fa-2x fa-laptop-code service-icon bg-primary text-white mr-3"></i>
                            <h4 class="font-weight-bold m-0">Développement Web</h4>
                        </div>
                    </div>
                    <div class="service-box col-lg-5 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <i class="fa fa-2x fa-laptop service-icon bg-primary text-white mr-3"></i>
                            <h4 class="font-weight-bold m-0">Web Designer</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->
        <!-- Portfolio Start -->
        <div class="container-fluid pt-5 pb-3" id="portfolio">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Galerie</h1>
                    <h1 class="position-absolute text-uppercase text-primary">Mon portfolio</h1>
                </div>
                <div class="row">
                    <div class="col-12 text-center mb-2">
                        <ul class="list-inline mb-4" id="portfolio-flters">
                            <!-- <li class="btn btn-sm btn-outline-primary m-1 active"  data-filter="*">All</li> -->
                            <li class="btn btn-sm btn-outline-primary m-1" data-filter=".first">Conception</li>
                            <li class="btn btn-sm btn-outline-primary m-1" data-filter=".second">Développement</li>
                            <li class="btn btn-sm btn-outline-primary m-1" data-filter=".third">Marketing</li>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container">
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="img/portfolio-1.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="img/portfolio-1.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="img/portfolio-2.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="img/portfolio-2.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="img/portfolio-6.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="img/portfolio-6.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Start -->
        <div class="container-fluid py-5" id="contact">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Contact</h1>
                    <h1 class="position-absolute text-uppercase text-primary">Me contacter</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-form text-center">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="form-row">
                                    <div class="control-group col-sm-6">
                                        <input type="text" class="form-control p-4 input" id="name" placeholder="Nom"
                                            required="required" data-validation-required-message="Veuillez entrer votre nom" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group col-sm-6">
                                        <input type="email" class="form-control p-4 input" id="email" placeholder="Email"
                                            required="required" data-validation-required-message="Veuillez entrer votre email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control p-4 input" id="subject" placeholder="Sujet"
                                        required="required" data-validation-required-message="Veuillez entrer Votre sujet" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control py-3 px-4 input" rows="5" id="message" placeholder="Message"
                                        required="required"
                                        data-validation-required-message="Veuillez entrer votre message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Envoyer un message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-white mt-5 py-1 px-sm-1 px-md-5">
            <div class="container text-center py-5">
                <div class="d-flex justify-content-center mb-4">
                    <a class="btn btn-light btn-social mr-2" href="https://www.facebook.com/sofiane.ouhalima"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-light btn-social mr-2" href="https://www.linkedin.com/in/sofiane-ouhalima-673298265"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <a class="text-white" href="#"></a>
                    <span class="px-3"></span>
                    <a class="text-white" href="#"></a>
                    <span class="px-3"></span>
                    <a class="text-white" href="#"></a>
                    <span class="px-3"></span>
                    <a class="text-white" href="#"></a>
                </div>
                <p class="m-0">&copy; <a class="text-white font-weight-bold" href="#">PortFolio</a>.Tous les droits sont réservés. Développé par <a class="text-white font-weight-bold" href="#">OU-HALIMA SOFIANE</a>
                </p>
            </div>
        </div>
        <!-- Footer End -->
        <!-- Scroll to Bottom -->
        <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>
        <!-- Back to Top -->
        <a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>
        <!-- JavaScript Libraries -->
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/typed/typed.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <script>
        const myForm = document.getElementById("contactForm"); 
        const formElements = myForm.elements; 
        const formData = {};
            for (let i = 0; i < formElements.length; i++) {
            const element = formElements[i];
            if (element.type !== "submit") {
                formData[element.name] = element.value;
            }
            }
            console.log(formData);
        </script>

</body>
</html>