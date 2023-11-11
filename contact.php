<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="./IMAGES/ulogo.PNG" type="image/x-icon">
    <script src="https://kit.fontawesome.com/1cfb698203.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./CSS/contact.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U.T| CONTACT US</title>
</head>

<body>
    <section id="header"> <a href="index.html"> <img src="./IMAGES/ulogo.PNG" class="logo" alt="" width="60px"> </a>
        <div>
            <ul id="navbar">
                <li><a href="home.html">HOME</a></li>
                <li><a href="shop.html">SHOP</a></li>
                <li><a href="blog.html">BLOG</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a class="active" href="contact.html">CONTACT</a></li>
                <a href="#" id="close"><img src="./IMAGES/tinga.png" alt="" width="15px"></a>
            </ul>
        </div>

        <div id="mobile">
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <h2>Visit our Head Office</h2>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>Utawala, mihang'o</p>
                </li>

                <li>
                    <i class="far fa-envelope"></i>
                    <p>aleko@gmail.com</p>
                </li>

                <li>
                    <i class="fas fa-phone-alt"></i>
                    <p>+2547 24 572 997</p>
                </li>

                <li>
                    <i class="far fa-clock"></i>
                    <p>Mon-Sat: 8am - 6:30pm</p>
                </li>
            </div>
        </div>

        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.822135457046!2d36.961775014854645!3d-1.2803835359811473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f6ca8bc774695%3A0xe822c3eebd1fc561!2sUtawala%20Complex%2C%20Eastern%20Bypass%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1663223147962!5m2!1sen!2ske"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-down<?php include_once 'header.php'; ?>grade"></iframe>
        </div>
    </section>


    <section id="form-details">
        <?php
        session_start();
         if(isset($_SESSION['success'])){
             echo '<p class="success">'.$_SESSION['success'].'</p>';
             unset($_SESSION['success']);
         }
            if(isset($_SESSION['error'])){
                echo '<p class="error">'.$_SESSION['error'].'</p>';
                unset($_SESSION['error']);
            }
        ?>
        <form action="./PHP/csave.php" method="post">
            <span>Leave a message</span>
            <h2>We'd love to hear from you!!</h2>

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Your name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="E-mail" required>

            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject" placeholder="Subject" required>

            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message" required></textarea>

            <button type="submit">Send</button>
        </form>

        <div class="people">
            <div>
                <img src="./IMAGES/mzae.jpg" alt="" width="100px">
                <p><span>Mr </span> <br>
                    Phone: +254123456789 <br>
                    Gmail:gnat01@gmail.com</p>
            </div>

            <div>
                <img src="./IMAGES/aleko.jpg" alt="" width="100px">
                <p><span>Mr</span> <br>
                    Phone: +254722234567 <br>
                    Gmail:@gmail.com</p>
            </div>
        </div>

    </section>


    <div class="container my-5">
        <footer class="text-center text-lg-start text-white" style="background-color: grey">
            <div class="container p-4 pb-0">
                <section class="">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">
                                Urban Tyres
                            </h6>
                            <p>
                                Mazee if you need brand new tyres all sizes reach us
                            </p>
                        </div>


                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Links</h6>
                            <p>
                                <a class="text-white" href="./shop.html">Shop</a>
                            </p>
                            <p>
                                <a class="text-white" href="./contact.php">Contact</a>
                            </p>
                            <p>
                                <a class="text-white" href="./home.html">Home</a>
                            </p>
                            <p>
                                <a class="text-white" href="./blog.html">Blog</a>
                            </p>
                            <p>
                                <a class="text-white" href="./about.html">About</a>
                            </p>
                        </div>

                        <hr class="w-100 clearfix d-md-none" />

                        <hr class="w-100 clearfix d-md-none" />

                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                            <p><i class="fas fa-home mr-3"></i>Kenya, Nairobi - Utawala</p>
                            <p><i class="fas fa-envelope mr-3"></i> aleko@gmail.com</p>
                            <p><i class="fas fa-phone mr-3"></i> + 2547 24572997</p>
                            <p><i class="fas fa-print mr-3"></i> + 2547 24572997</p>
                        </div>

                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

                            <!-- Facebook -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!"
                                role="button"><i class="fab fa-facebook-f"></i></a>

                            <!-- Twitter -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!"
                                role="button"><i class="fab fa-twitter"></i></a>

                            <!-- Google -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!"
                                role="button"><i class="fab fa-google"></i></a>

                            <!-- Instagram -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!"
                                role="button"><i class="fab fa-instagram"></i></a>

                            <!-- Linkedin -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!"
                                role="button"><i class="fab fa-linkedin-in"></i></a>

                            <a class="btn btn-primary btn-floating m-1" style="background-color: #00FF00" href="#!"
                                role="button"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </section>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                &copy;2022, Daniel Mukenya.
            </div>
        </footer>
    </div>
</body>

</html>
