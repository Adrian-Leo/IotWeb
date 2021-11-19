<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="styles/contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/891b41940f.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <title>ProperLanding</title>
</head>

<body>
    
    <section class="sub-header">
        
        <nav>
            <a href="properLanding.html"><img src="Vector.png" alt="home"></a>
            <div class="nav-links" id="navLinks">
                <i class="fas fa-times" onclick="hideMenu()"></i>
                
                <ul>
                    <li><a href="properLanding.html">HOME</a></li>
                    <li><a href="service.html">SERVICE</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="contact.html">CONTACT US</a></li>

                </ul>
            </div>
            <i class="fas fa-bars" onclick="showMenu()"></i>
        </nav>

       <h1>Contact Us</h1>
      

    </section>

    <!------------Contact Us Content -------->
    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5528.233170381592!2d106.71678016981502!3d-6.275620196796503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb0eb2f75b49%3A0xa2082906900e6f57!2sTrans%20Snow%20World%20Bintaro!5e0!3m2!1sen!2sid!4v1624610199711!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </section>

    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fas fa-home"></i>
                    <span>
                        <h5>Boulevard Road, Special Building </h5>
                        <p>Jakarta, Pondok Aren ,IN</p>
                    </span>
                </div>
                <div>
                    <i class="fas fa-phone"></i>
                    <span>
                        <h5>+62 216362636 </h5>
                        <p>Monday to saturday, 10AM to 6PM</p>
                    </span>
                </div>
                <div>
                    <i class="fas fa-envelope"></i>
                    <span>
                        <h5>info@special.com </h5>
                        <p>Email us your question</p>
                    </span>
                </div>
            </div>

            <div class="contact-col">
                <form action="form-handler.php" method="POST">
                    <input type="text" name="name" placeholder="Enter your name" required>
                    <input type="email" name="visitor_email" placeholder="Enter your email" required>
                    <input type="text" name="package" placeholder="Enter your package" required>
                    <textarea  rows="8" name="message" placeholder="Message" required></textarea>
                    <button type="submit"  class="hero-btn red-btn">SEND MESSAGE</button>
                </form>
            </div>

        </div>
    </section>

    <!-- ---------FOOTER----------- -->

    <section class="footer">
        <h4>About Us</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci dolor iusto quisquam quas veritatis expedita fugit, <br> nesciunt vero at illum veniam consectetur similique quis repellendus repudiandae itaque ullam iure error.</p>
        <div class="icons">
            <i class= "fab fa-facebook"></i>
            <i class= "fab fa-twitter"></i>
            <i class= "fab fa-instagram"></i>
            <i class= "fab fa-linkedin"></i>
        </div>
        <p>Made with <i class= "fa fa-heart-o"></i> by Adrian Leo</p>
    </section>
<!-------------JavaScript------------------------->
    <script>
        var  navLinks =document.getElementById("navLinks");

        function showMenu(){
            navLinks.style.right="0";

        }
        function hideMenu(){
            navLinks.style.right="-200px";
        }
    </script>


    

</body>
</html>