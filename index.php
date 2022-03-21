<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>The Royal Touch</title>
        <style>
            .call {
                position: fixed;
                bottom: 18px;
                padding: 5px;
                margin-left: 20px;
                color: #25d366;
                transform: translate3d(0, 0, 0);
                backface-visibility: hidden;
                animation-name: shakeMe;
                animation-duration: 3s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }
            
            
            @keyframes shakeMe {
                2%, 18% {
                    transform: translate3d(-5px, 0, 0);
                }
                
                4%, 16% {
                    transform: translate3d(5px, 0, 0);
                }
                
                6%, 10%, 14% {
                    transform: translate3d(-5px, 0, 0);
                }
                
                8%, 12% {
                    transform: translate3d(5px, 0, 0);
                }
                
                18.1% {
                    transform: translate3d(0px, 0, 0);
                }
            }
            
            .call:hover{
                position: fixed;
                bottom: 18px;
                padding: 5px;
                margin-left: 20px;
                color: #25d366;
                animation: shake 0.7s;
                animation-iteration-count: infinite;
            }
            
            @keyframes shake {
                0% { transform: translate(1px, 1px) rotate(0deg); }
                10% { transform: translate(-1px, -2px) rotate(-1deg); }
                20% { transform: translate(-3px, 0px) rotate(1deg); }
                30% { transform: translate(3px, 2px) rotate(0deg); }
                40% { transform: translate(1px, -1px) rotate(1deg); }
                50% { transform: translate(-1px, 2px) rotate(-1deg); }
                60% { transform: translate(-3px, 1px) rotate(0deg); }
                70% { transform: translate(3px, 1px) rotate(-1deg); }
                80% { transform: translate(-1px, -1px) rotate(1deg); }
                90% { transform: translate(1px, 2px) rotate(0deg); }
                100% { transform: translate(1px, -2px) rotate(-1deg); }
            }
            
            .whatsapp_float {
                position: fixed;
                width: 60px;
                height: 60px;
                bottom: 40px;
                right: 40px;
                background-color: #25d366;
                color: #fff;
                border-radius: 50px;
                text-align: center;
                font-size: 30px;
            }
            
            .whatsapp-icon {
                margin-top: 16px;
            }
            /* for mobile */
            @media screen and (max-width: 767px) {
                .whatsapp-icon {
                    margin-top: 10px;
                }
                .whatsapp_float {
                    width: 40px;
                    height: 40px;
                    bottom: 20px;
                    right: 10px;
                    font-size: 22px;
                }
            }
            
            /* Pre Loading page */
            /* .no-js #loader { display: none;  }
            .js #loader { display: block; position: absolute; left: 100px; top: 0; }
            .se-pre-con {
                position: fixed;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background: url('assets/letterR-removebg-preview.png') center no-repeat #fff;
            } */
            </style>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    </head>
    <body>  <!-- id="page-top" -->
        <!-- Pre Loading -->
        <!-- <div class="se-pre-con"></div> class="se-pre-con" -->
        

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/portfolio/letterRNoBg2.png" style="width: 38px; height: 40px;" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Our Works</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="aboutUs.php">About Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <div >

            <header class="masthead">
                <div class="container">
                    <div class="masthead-subheading">-Welcome To-</div>
                    <div class="masthead-heading text-uppercase animate__animated animate__backInLeft">Royal Touch <br> <h2>Pleated Mosquito Net</h2></div>
                    <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
                </div>
            </header>
            <!-- Services-->
            <section class="page-section" id="services">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Services</h2>
                        <h3 class="section-subheading text-muted">Why Choose Us?</h3>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-4">
                            <span class="fas fa-award fa-4x" style="color: #ffc800;">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="my-3">Best Quality Products</h4>
                        </div>
                        <div class="col-md-4">
                            <span class="fas fa-tools fa-4x" style="color: #ffc800;">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="my-3">Perfect Installation</h4>
                        </div>
                        <div class="col-md-4">
                            <span class="fas fa-hammer fa-4x" style="color: #ffc800;">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="my-3">Long-Lasting Durability</h4>
                        </div>
                        <div class="col-md-4">
                            <span class="fas fa-hand-holding-usd fa-4x" style="color: #ffc800;">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="my-3">Good Value for Money</h4>
                        </div>
                        <div class="col-md-4">
                            <span class="fas fa-hands-wash fa-4x" style="color: #ffc800;">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="my-3">Easy care & Cleaning</h4>
                        </div>
                        <div class="col-md-4">
                            <span class="fas fa-headset fa-4x" style="color: #ffc800;">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="my-3">Support 24x7</h4>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Portfolio Grid-->
            <section class="page-section bg-light" id="portfolio">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Products</h2>
                        <h3 class="section-subheading text-muted"></h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <!-- Portfolio item 1-->
                            <div class="portfolio-item">
                                <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="assets/img/portfolio/Pleated.jpg" alt="..." />
                                </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading" >Pleated Fibre Mosquito Net Screen Window</div>
                                    <div class="portfolio-caption-subheading text-muted"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <!-- Portfolio item 2-->
                            <div class="portfolio-item">
                                <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="assets/img/portfolio/invisiblegrill.jpg" alt="..." />
                                </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Invisible Grill SS Balcony</div>
                                    <div class="portfolio-caption-subheading text-muted" style="visibility: hidden;">.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <!-- Portfolio item 3-->
                            <div class="portfolio-item">
                                <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="assets/img/portfolio/pigeon (1).jpg" alt="..." />
                                </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Garware Pigeon Net Balcony & Grill</div>
                                    <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/velcro (1).jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Velcro Fibre Mosquito Net Window</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5 -->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/cable-railing.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">1/8 Cable Railing 316 Stainless Steel Kit 36 in.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6"> 
                        <!-- Portfolio item 6 -->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/pleatedfibreglassmesh.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Pleated Fibre Glass Mesh</div>
                                <!-- <div class="portfolio-caption-subheading text-muted">Photography</div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Works</h2>
                    <h3 class="section-subheading text-muted"><i>-Watch videos-</i></h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <p style="visibility: hidden;">.</p>
                                <h5 style="color: rgb(61, 61, 61);">Pleated Mosquito Net screen window  fiberglass Arkade Earth kanjur East </h5>
                                <!-- <h6 class="subheading" style="color: rgb(92, 92, 92);">screen window  fiberglass Arkade Earth kanjur East</h6> -->
                            </div>
                            <!-- <div class="timeline-body"><p class="text-muted"><a href="https://youtu.be/Gdycsdco0fU" target="_blank" style="text-decoration: none;">Pleated Mosquito Net</a></p></div> -->
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <p style="visibility: hidden;">.</p>
                                <h5 style="color: rgb(61, 61, 61);">Balcony pleated mosquito net screen Window Lodha Xperia Thane West</h5>
                                <!-- <h4 class="subheading">An Agency is Born</h4> -->
                            </div>
                            <!-- <div class="timeline-body"><p class="text-muted"><a href="https://youtu.be/DsXCJqpNCeM" target="_blank" style="text-decoration: none;">Aluminium Pleated Mosquito Net</a></p></div> -->
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <p style="visibility: hidden;">.</p>
                                <h5 style="color: rgb(61, 61, 61);">Pleated mosquito net screen window Arkade Earth kanjur East</h5>
                                <!-- <h4 class="subheading" style="color: white; visibility: hidden;">Transition to Full Service</h4> -->
                            </div>
                            <!-- <div class="timeline-body"><p class="text-muted"><a href="https://youtu.be/S1s8UVkg58Y" target="_blank" style="text-decoration: none;">Invisible Grill</a></p></div> -->
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <p style="visibility: hidden;">.</p>
                                <h5 style="color: rgb(61, 61, 61);">Pleated mosquito net screen window Raheja garden Mulund</h5 >
                                    <!-- <h4 class="subheading" style="color: white; visibility: hidden;">Phase Two Expansion</h4> -->
                                </div>
                                <!-- <div class="timeline-body"><p class="text-muted"><a href="https://youtu.be/ny8P2nezkzg" target="_blank" style="text-decoration: none;">Roller Mosquito Net</a></p></div> -->
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image" style="background-color: white;">
                                <h4>
                                    <a href="https://www.youtube.com/channel/UCfBobnmps-KTpBoCJgYiulA" target="_blank" style="color: red;">
                                        <i class="fab fa-youtube fa-4x"></i>
                                    </a>
                                </h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            
            <!-- Contact-->
            <section class="page-section" id="contact">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Contact Us</h2>
                        <h3 class="section-subheading text-muted"></h3>
                    </div>
                    
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            <!-- To activate this form, sign up at -->
                            <br />
                            <!-- <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a> -->
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start"><strong> Copyright &copy; Royal Touch 2021</strong></div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/theroyaltouchmosquito_net?r=nametag"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-whatsapp"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <strong>
                            <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                            <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                        </strong>
                    </div>
                </div><br>
                <address>
                    <strong>
                        1/2 Behind Vitram Glass, <br>
                        Opposite to Cipla Company,<br>
                        Surya Nagar, <br>
                        Vikhroli (West), <br>
                        Mumbai: 400083.
                    </strong>
                </address>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Pleated Mosquito Net</h2>
                                    <p class="item-intro text-muted">-By Royal Touch-</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/Pleated.jpg" alt="..." />
                                    <p>Pleated Mosquito Net screen is a cost-effective insect protection system for windows and doors. The bottom track of the screen is shaped like a caterpillar and they are retracted into a sliding bar along with the pleated net. The barrier-free specification allows any persons to pass through without any difficulties, making it an ideal choice for screening all types of openings.</p>
                                    <!-- <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul> -->
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Invisible Grill</h2>
                                    <p class="item-intro text-muted">-By Royal Touch-</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/invisiblegrill.jpg" alt="..." />
                                    <p>Invisible window grilles offer an attractive option for maintaining safety while also maintaining luxury. Two options for window grilles that can provide these offers are aluminum and steel grilles. Here are the details on each type of grille to ensure that you select the best option for your home.</p>
                                    <!-- <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Explore
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Graphic Design
                                        </li>
                                    </ul> -->
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Pigeon Net</h2>
                                    <p class="item-intro text-muted">-By Royal Touch-</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/pigeon (1).jpg" alt="..." />
                                    <p>Pigeons make the very air you breathe highly toxic with bacteria and spores. Doctors say that pigeon droppings, loose feathers and the dust they shake when fluttering their wings are the cause of an alarming spread of Asthma and upper respiratory illnesses. Our netting is very fine & is hardly visible. Our netting doesn’t harm birds it just acts as a barrier for them from entering.</p>
                                    <!-- <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Finish
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Identity
                                        </li>
                                    </ul> -->
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Velcro Fibre Mosquito Net</h2>
                                    <p class="item-intro text-muted">-By Royal Touch-</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/velcro (1).jpg" alt="..." />
                                    <p>Velcro type mosquito net are widely used mosquito nets for windows and doors. Here Fiber-Glass mesh is used as insect net with velcro tape to attach / detach from the windows. The Fiber-Glass mesh will be cut as per the measurements of the required windows/ventilators and fixed with velcro tape for easy daily use.</p>
                                    <!-- <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Lines
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Branding
                                        </li>
                                    </ul> -->
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">1/8 Cable Railing 316 Stainless Steel Kit 36 in.</h2>
                                    <p class="item-intro text-muted">-By Royal Touch-</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/cable-railing.jpg" alt="..." />
                                    <p>Marine application and cable deck railing.B52 Railing System 36″, Stainless Steel 316 L Polished Cable 1/8 1*19 100 ft, Tensioner Quick Installation Stainless Steel 316 10-Pack, Welded Fork Swageless 10-Pack, Eye Terminal With Wood Screw 20-Pack, 1 Cable Cutter 8″. Wire rope with an ultra smooth and bright finish.</p>
                                    <!-- <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Website Design
                                        </li>
                                    </ul> -->
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Pleated fibreglass mesh</h2>
                                    <p class="item-intro text-muted">-By Royal Touch-</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/pleatedfibreglassmesh.jpg" alt="..." />
                                    <p>Pleated Mesh is a replacement to traditional mosquito screen system, this door and window insect screens not only protect from mosquitoes, insects, etc– it acts as a decorative product with printed screen options.</p>
                                    <!-- <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Window
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Photography
                                        </li>
                                    </ul> -->
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        
        <!-- floating call whatsapp starts here -->
        <a href="tel:+91-882-855-7626" class="call" target="_blank">
            <i class="fas fa-phone-alt fa-3x"></i>
        </a>
        
        <a href="https://wa.me/917039289362" class="whatsapp_float" target="_blank">
            <i class="fab fa-whatsapp whatsapp-icon"></i>
        </a>
        <!-- floating call ends here -->
    </div>
        
        <!-- Pre loading JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
        <script>
            $(window).load(function() {
                // Animate loader off screen
                $(".se-pre-con").fadeOut("slow");;
            });
            </script>
    </body>
    </html>
    