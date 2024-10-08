<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Style.css">
</head>

<body>
    <!-- header design    -->
    <header class="header">
        <a href="#" class="logo">Portfolio</a>
        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <!-- home section design -->
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, It's Me</h3>
            <h1>Akrati Mishra</h1>
            <!-- <h3>And I'm a<span> Frontend Developer</span></h3> -->
              <!-- for animation multi text -->
            <h3>And I'm a <span class="multi-text"></span></h3>
            <p>Developed many pages by writing lines of code using HTML,CSS,Javascript and languages.
                Provided website development using Html,Css PHP with MYSQL and  other editing software.

            </p>
            <div class="social-media">
                <!-- <a href="https://www.facebook.com/profile.php?id=100009477756943&mibextid=ZbWKwL"><i class='bx bxl-facebook'></i></a> -->
                <a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a>
                <a href="https://www.linkedin.com/in/"><i class='bx bxl-linkedin'></i></a>
                <a href="https://wa.me/qr/"><i class='bx bxl-whatsapp'></i></a>
            </div>
            <a href="./Documents/Akrati's Resume-hackerresume (1).pdf" download="CV" class="btn">Download CV</a>
        </div>
        <div class="home-img">
            <div class="glowing-circle">
                <!-- <img src="images/edited1.jpg" alt=""> -->
                <span></span>
                <div class="image">
                    <img src="./images/WhatsApp Image 2024-09-22 at 21.39.40_cb687b4a.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- about section design -->
    <section class="about" id="about">
        <!-- <div class="about-img">
            <img src="images/edited1.jpg" alt="">
        </div> -->

        <div class="home-img">
            <div class="glowing-circle2">
                <!-- <img src="images/edited1.jpg" alt=""> -->
                <span></span>
                <div class="image">
                    <img src="./images/WhatsApp Image 2024-09-22 at 21.39.40_cb687b4a.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>Web Developer!</h3>
            <p>Hi! I am Akrati Mishra <br>
                Currently Parusing Graduation in Computer Science And Engineering <br>
                from
                Noida Institute of Engineering and Technology <br>
                Greater Nodia, Uttar Pradesh<br>
                and passed Diploma in Computer Science And Engineering<br>
                from Km.Mayawati Gov. Girls Polytechnic<br>
                Badalpur Gautam BuddhaNagar, Uttar Pradesh.<br>
                and my skill is HTML,CSS,Javascript,SQL,Java.                
            </p>
            <a href="#" class="btn">Read More</a>
        </div>
    </section>
    <!-- service section design -->
    <section class="services" id="services">
        <h2 class="heading">Our<span> Services</span></h2>
        <div class="services-container">
            <div class="services-box">
                <i class='bx bx-code-alt'></i>
                <h3>Web Development</h3>
                <p>Build CMS website using HTML,CSS, Javascript, <br>Bootstrap,
                    Tailwind CSS, PHp
                    Jquery and other editing software.
                </p>
                <a href="" class="btn">Read More</a>
            </div>

            <div class="services-box">
                <i class='bx bx-code-alt'></i>
                <h3>Web Development</h3>
                <p>Build  Timesheet website using HTML,CSS, SQL,<br> 
                </p>
                <a href="" class="btn">Read More</a>
            </div>

            <div class="services-box">
                <i class='bx bx-code-alt'></i>
                <h3>Web Development</h3>
                <p>Build  OurPhoneMD website using HTML,CSS, <br> Javascript,
                    SQL,PhP.
                </p>
                <a href="" class="btn">Read More</a>
            </div>
        </div>
    </section>

    <!-- portfolio section design -->
    <section class="portfolio" id="portfolio">
        <h2 class="heading">Latest <span>Project</span></h2>
        <div class="portfolio-container">
            <div class="portfolio-box">
                <img src="./images/pf1.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    
					<p>Build CMS website using HTML,CSS, Javascript,Bootstrap,
                    Tailwind CSS, PHP,
                    Jquery and other editing software.
                </p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="./images/timesheet.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                   <p>Build  Timesheet website using HTML,CSS, SQL,
                </p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="./images/ourphonemd.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Build  OurPhoneMD website using HTML,CSS,  Javascript,
                    SQL,PHP etc.
                </p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
			
			    <div class="portfolio-box">
                <img src="./images/school.webp" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>
                        Build school website using HTML,CSS, Javascript, 
                        Bootstrap,Tailwind CSS, Jquery and other editing software.

                    </p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="./images/pf4.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>
                        Build  ghost website using HTML,CSS, Javascript, 
                        Bootstrap,Tailwind CSS, PHP,Jquery and other editing software.

                    </p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
		        <div class="portfolio-box">
                <img src="./images/pf6.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>
                        Build  templets website using HTML,CSS, Javascript,
                         Bootstrap,Tailwind CSS, Jquery,PHP and other editing software.

                    </p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
        </div>
    </section>

 <!-- contact section design -->
 <section class="contact" id="contact">
    <h2 class="heading">Contact <span>Me!</span></h2>

    <form method="POST" action="protfolio.php">
        <div class="input-box">
            <input type="text" placeholder="Full Name" name="user">
            <input type="email" placeholder="Email Address" name="email" id="mail-id" onkeyup="validateMail()">
            <span id="mail-error"></span>
        </div>
        <div class="input-box">
            <input type="tel" placeholder="Mobile Number" name="number" id="phone-id" onkeyup="validatePhone()">
            <span id="phone-error"></span>
            <input type="text" placeholder="Email Subject" name="subject">
            <textarea name="message" id="sms-id" cols="30" rows="10" placeholder="Your Message" onkeyup="validateSms()"></textarea>
            <span id="sms-error"></span>
        </div>
        <input id="btnform"  type="submit" onclick="abcd()" value="Send Message" class="btn">
        <!-- <input type="submit" value="Send Message" class="btn" onclick="return validateForm()"> -->
        <div class="submiterror">
        <span id="submit-error"></span>
    </div>
    </form>
</section>

    <!-- footer design -->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2023 by Akrati Mishra| All Rights Reserved.|</p>
        </div>
        <div class="footer-iconTop">
            <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
        </div>
    </footer>


    <!-- Scroll Reveal -->

    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- <script>

        function abcd(){
          
            window.location = "https://translate.google.com/";
           alert("Thankyou.")
        }
    </script> -->

    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/typed.js@2.0.14/dist/typed.umd.js"></script>
    <!-- Javascript -->

    <script src="script.js"></script>
</body>

</html>