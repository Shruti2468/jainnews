<?php

session_start();

    include("connections.php");
    include("functions.php");

    $user_data= check_login($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/9b8ab6e128.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style_index.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JGI BULLETIN</title>
    <style>
        .slider {
            margin-top: 150px;
            position: relative;
            width: 200px;
            height: 200px;
            transform-style: preserve-3d;
            animation: rotate 30s linear infinite;


        }

        @keyframes rotate {
            0% {
                transform: perspective(1000px) rotataeY(0deg);


            }

            100% {
                transform: perspective(1000px) rotateY(360deg);
            }

        }

        .slider span {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100;
            transform-origin: center;
            transform-origin: center;
            transform-style: preserve-3d;
            transform: rotateY(calc(var(--i)*45deg)) translateZ(350px);
        }

        .slider span imh {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 100px;
            object-fit: cover;
            transition: 2s;
        }

        .slider span:hover img {
            transform: translateY(-50px) sclae(1.2);
        }

        .krishika {
            width: 60%;

        }
.secGallery{
    background-color: #f9eaf9;
    height: 130vh;
}
        .sections {
            
            display: flex;
            align-items: center;
            flex-direction: column;
        }
    </style>

</head>

<body>
    <!-- NAVIGATION BAR -->
    <navbar class="navbar">

        <!-- LOGO & HEADING -->
        <div class="navLeft">
            <img src="https://source.unsplash.com/900x900/?happy,javascript" alt="JGI" class="jgi_logo">
            <h1 class="heading1">JGI Bulletin</h1>
        </div>

        <!-- HOME, GALLERY, ABOUT, SEARCH -->
        <div class="navCenter">

            <ul class="navList">
                <li><a href="#home" class="button">Home</a></li>
                <li><a href="#gallery" class="button">Gallery</a></li>
                <li>
                    <!--  <select name="about"> -->
                    <a href="#about" class="button">About</a>
                    <!-- <option value="about" id="about">About</option>
                        <option value="college" id="college">College</option>
                        <option value="developers" id="developers">Developers</option>
                        <option value="faqs" id="faqs">FAQs</option> -->

                    <!-- </select> -->
                    <!-- <ul class="dropdown">
                        <li><a href="#aboutCollege" class="button">About College</a>
                            </li>
                        <li><a href="#aboutus" class="button">About Us</a></li>
                        <li><a href="#aboutfaq" class="button">FAQs</a></li>
                        <li><a href="#aboutfaq" class="button">Others</a></li>
                    </ul>
                </li>
                <li><i class="fa-solid fa-angle-down conIcon aboutIcon"></i></li> -->
                <li> <a href="#"><i class="fa fa-search w3-hover-opacity searchIcon"></i></a></li>
            </ul>
        </div>

        <!-- SIGN UP -->
        <div class="navRight">
            <a href="http://localhost/login/signup.php"><button class="btn btnSmall">Sign Up</button></a>
        </div>

    </navbar>

    <!-- HOME PAGE -->
    <section class="secHome" id="home">

        <!-- ANIMATION -->
        <div class="secLeft">
            <img src="https://source.unsplash.com/900x900/?nature,education,forest,html" alt="animation">
        </div>


        <!-- OFFICIAL BUTTON-->
        <div class="secRight">
            <div class="official homeButton">
                <a href="http://localhost/login/login.php">News Flash</a>

            </div>

            <!-- UNOFFICIAL BUTTON -->
            <div class="unofficial homeButton">
                <a href="">Buzz Zone</a>
            </div>
        </div>
    </section>
    <!-- GALLERY PAGE -->
    <section class="secGallery" id="gallery">
        <div class="sections">
            <div class="slider">
                <span style="--i:1;"><img src="https://source.unsplash.com/900x900/?nature,education,forest,html" class="krishika"></span>
                <span style="--i:2;"><img src="https://source.unsplash.com/900x900/?nature,education,forest,html" class="krishika"></span>
                <span style="--i:3;"><img src="https://source.unsplash.com/900x900/?nature,education,forest,html" class="krishika"></span>
                <span style="--i:4;"><img src="https://source.unsplash.com/900x900/?nature,education,forest,html" class="krishika"></span>
                <span style="--i:5;"><img src="https://source.unsplash.com/900x900/?nature,education,forest,html" class="krishika"></span>
                <span style="--i:6;"><img src="https://source.unsplash.com/900x900/?nature,education,forest,html" class="krishika"></span>
                <span style="--i:7;"><img src="https://source.unsplash.com/900x900/?nature,education,forest,html" class="krishika"></span>
                <span style="--i:8;"><img src="https://source.unsplash.com/900x900/?nature,education,forest,html" class="krishika"></span>
            </div>
            <div class="slider">
                <span style="--i:9;"><img src="https://source.unsplash.com/900x900/?nature,education,forest,html" class="krishika"></span>
                <span style="--i:10;"><img src="https://source.unsplash.com/900x900/?nature,education,forest,html" class="krishika"></span>
                <span style="--i:11;"><img src="https://source.unsplash.com/900x900/?nature,education,forest,html" class="krishika"></span>
                <span style="--i:12;"><img src="https://source.unsplash.com/900x900/?nature,education,forest,html" class="krishika"></span>
                <span style="--i:13;"><img src="https://source.unsplash.com/900x900/?nature,education,forest,html" class="krishika"></span>
                <span style="--i:14;"><img src="https://source.unsplash.com/900x900/?nature,education,forest,html" class="krishika"></span>
                <span style="--i:15;"><img src="https://source.unsplash.com/900x900/?nature,education,forest,html" class="krishika"></span>
                <span style="--i:16;"><img src="https://source.unsplash.com/900x900/?nature,education,forest,html" class="krishika"></span>
            </div>
        </div>
    
    </section>
    <!-- ABOUT PAGE -->
    <section class="secAbout" id="about">

        <!-- ABOUT COLLEGE -->
        <div class="college">
            <h2 class="heading2 aboutHeading">About College</h2>

            <div class="sec1">
                <div class="para">
                    <h3 class="heading3">The end of search is here</h3>
                    <p class="paras">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam totam excepturi,
                        blanditiis ipsam culpa deserunt placeat. Cupiditate animi magnam cumque earum velit. Esse
                        deleniti officiis vel recusandae minima saepe vero est architecto, earum commodi. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Vel a culpa earum magnam velit incidunt. Corrupti
                        fuga iusto doloremque. Aliquid est ut enim at placeat.</p>
                </div>
                <div class="thumbnail">
                    <img src="https://source.unsplash.com/900x900/?coding,apple" alt="Laptop Image" class="imgFluid">
                </div>

            </div>
            <div class="sec2">
                <div class="para para-reverse">
                    <h3 class="heading3">Transforming Education in India</h3>
                    <p class="paras paras-reverse">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                        totam excepturi,
                        blanditiis ipsam culpa deserunt placeat. Cupiditate animi magnam cumque earum velit. Esse
                        deleniti officiis vel recusandae minima saepe vero est architecto, earum commodi. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Itaque laborum, numquam in odit fugiat facere culpa
                        porro aspernatur minus fugit, repudiandae dolorum incidunt omnis non?</p>
                </div>
                <div class="thumbnail thumbnail-reverse">
                    <img src="https://source.unsplash.com/900x900/?coding,apple,html" alt="Laptop Image"
                        class="imgFluid">
                </div>

            </div>
            <div class="sec3">
                <div class="para">
                    <h3 class="heading3">The end of search is here</h3>
                    <p class="paras">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam totam excepturi,
                        blanditiis ipsam culpa deserunt placeat. Cupiditate animi magnam cumque earum velit. Esse
                        deleniti officiis vel recusandae minima saepe vero est architecto, earum commodi. Lorem ipsum
                        dolor sit, amet consectetur adipisicing elit. Porro neque dolore tempora omnis atque veniam
                        tenetur adipisci blanditiis? Iste voluptatem accusamus similique, excepturi facere
                        reprehenderit.</p>
                </div>

                <div class="thumbnail">
                    <img src="https://source.unsplash.com/900x900/?coding,apple,javascript" alt="Laptop Image"
                        class="imgFluid">
                </div>

            </div>

        </div>

        <!-- ABOUT DEVELOPERS -->
        <div class="developers">
            <h2 class="heading2">About Us</h2>
            <div class="devHeading">
                <p class="paras">The Developers of The Website</p>
                <h3 class="heading3">Our Team</h3>
            </div>

                <div class="row2">
                    <div class="column">
                        <div class="card">

                            <div class="container">
                                <h3 class="heading3">Aakriti Choudhary </h3>
                                <p class="title">Front-end Developer</p>
                                <p class="paras">The brains of the operation</p>
                                <p class="paras">ak@example.com</p>
                                <p><a href="https://github.com/aakritichoudhary" target="_blank"><button class="btn btnMedium">Contact</button></a></p>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <div class="container">
                                <h3 class="heading3">Raji Kaur</h3>
                                <p class="title">UI/UX Desginer</p>
                                <p class="paras">The lead desginer </p>
                                <p class="paras">rk@example.com</p>
                                <p><a href="https://github.com/rajibabrah" target="_blank"><button class="btn btnMedium">Contact</button></a></p>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="row1">
                    <div class="column">
                        <div class="card">
                            <div class="container">
                                <h3 class="heading3">Shruti Suresh</h3>
                                <p class="title">Back-end Developer</p>
                                <p class="paras">Responsible for the data </p>
                                <p class="paras">ss@example.com</p>
                                <p><a href="https://github.com/shruti2468" target="_blank"><button class="btn btnMedium">Contact</button></a></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="column">
                        <div class="card">
                            <div class="container">
                                <h3 class="heading3">Rathod Krishika</h2>
                                    <p class="title">Front-end Developer</p>
                                    <p class="paras">Maintains the website</p>
                                    <p class="paras">rk@example.com</p>
                                    <p><a href="https://github.com/krishikarathod" target="_blank"><button class="btn btnMedium">Contact</button></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- FAQs -->
        <div class="faqs">
            <h2 class="heading2">FAQs</h2>
            <div class="faqSec">
            <h3 class="heading3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quisquam.</h3>
            <p class="paras">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus commodi maxime vitae officia
                a. Culpa dolorem voluptatem excepturi. Autem voluptatibus voluptates unde quis quidem harum accusamus
                iusto officia repellat suscipit!Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus commodi maxime vitae officia
                a. Culpa dolorem voluptatem excepturi. Autem voluptatibus voluptates unde quis quidem harum accusamus
                iusto officia repellat suscipit!</p>
            </div>
            <div class="faqSec">
            <h3 class="heading3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quisquam.</h3>
            <p class="paras">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus commodi maxime vitae officia
                a. Culpa dolorem voluptatem excepturi. Autem voluptatibus voluptates unde quis quidem harum accusamus
                iusto officia repellat suscipit!Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus commodi maxime vitae officia
                a. Culpa dolorem voluptatem excepturi. Autem voluptatibus voluptates unde quis quidem harum accusamus
                iusto officia repellat suscipit!</p>
            </div>
            <div class="faqSec">
            <h3 class="heading3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quisquam.</h3>
            <p class="paras">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus commodi maxime vitae officia
                a. Culpa dolorem voluptatem excepturi. Autem voluptatibus voluptates unde quis quidem harum accusamus
                iusto officia repellat suscipit!Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus commodi maxime vitae officia
                a. Culpa dolorem voluptatem excepturi. Autem voluptatibus voluptates unde quis quidem harum accusamus
                iusto officia repellat suscipit!</p>
            </div>
            <div class="faqSec">
                <h3 class="heading3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quisquam.</h3>
                <p class="paras">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus commodi maxime vitae officia
                    a. Culpa dolorem voluptatem excepturi. Autem voluptatibus voluptates unde quis quidem harum accusamus
                    iusto officia repellat suscipit!Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus commodi maxime vitae officia
                    a. Culpa dolorem voluptatem excepturi. Autem voluptatibus voluptates unde quis quidem harum accusamus
                    iusto officia repellat suscipit!</p>
                </div>
                <div class="faqSec">
                    <h3 class="heading3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quisquam.</h3>
                    <p class="paras">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus commodi maxime vitae officia
                        a. Culpa dolorem voluptatem excepturi. Autem voluptatibus voluptates unde quis quidem harum accusamus
                        iusto officia repellat suscipit!Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus commodi maxime vitae officia
                        a. Culpa dolorem voluptatem excepturi. Autem voluptatibus voluptates unde quis quidem harum accusamus
                        iusto officia repellat suscipit!</p>
                    </div>
            </div>
        </div>
    </section>


    <!-- FOLLOW US ON SOCIAL MEDIA -->
    <section class="socialMedia">


        <h2 class="heading2">
            Follow Us On Social Media</h2>
        <ul class="socialIcons">
            <li class="facebook"><a href="https://www.facebook.com/Jainuniversitydistance" target="_blank"><i class="fa fa-facebook"></i></a></li>
           
            <li class="youtube"><a href="https://youtube.com/c/JainDeemedtobeUniversity" target="_blank"><i class="fa fa-youtube"></i></a></li>

            <li class="instagram"><a href="https://instagram.com/jainuniversityofficial?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fa fa-instagram"></i></a></li>
        
            <li class="twitter"><a href="https://twitter.com/jaindeemedtbunv?s=11&t=rHNxdWRbJdALJOR4MGeedg" target="_blank" ><i class="fa fa-twitter"></i></a></li>

            <li class="linkedin"><a href="https://www.linkedin.com/school/jaindeemedtobeuniversity/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            <li class="discord"><a href="" target="_blank"><i class="fa-brands fa-discord"></i></a></li>


        </ul>

    </section>

    <!-- FOOTER -->

    <section class="footer">

        <!-- CONTACT US -->
        <section class="contact">
            <h2 class="heading2">Contact Us</h2>
            <div class="phoneNumber">
                <i class="fa-solid fa-phone conIcon"></i>
                <p class="paras">+91-123456789</p>
                <p class="paras">+91-987654321</p>
            </div>
            <div class="emailAddress">
                <i class="fa-solid fa-envelope conIcon"></i>
                <p class="paras">jgibulletin@gmail.com</p>
                <p class="paras">jgiuniversity@gmail.com</p>
            </div>
            <div class="address">
                <i class="fa-solid fa-location-dot conIcon"></i>
                <p class="paras">
                    #44/4, District Fund Road,
                    Jayanagar 9th Block,
                    Bangalore, Karnataka,
                    India - 560069</p>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15555.352291370014!2d77.5918946!3d12.9181269!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1597cd6fe0a5%3A0x36097fc10e521aef!2sJain%20(Deemed-to-be%20University)!5e0!3m2!1sen!2sin!4v1667667029680!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>


        </section>
<!-- MESSAGE US -->
        <section class="message">
            <h2 class="heading2">Write to Us</h2>
            <form class="messageForm" action="#" method="POST">
                <div class="field">
                   
                        <input type="text" class=" formInput name" placeholder="Name">
                   
                  
                        <input type="text" class="formInput email" placeholder="Email ID">
                  
                   
                        <input type="text" class="formInput phone" placeholder="Phone">
                 
                   
                        <textarea class="formInput writeHere" cols="30" rows="10" placeholder="Write Here"></textarea>
                  
                  
                        <button class=" btn btnSmall" type="submit" name="send">Send message</button>
                  
                </div>
            </form>
        </section>
    </section>
    <!-- COPYRIGHT -->
    <div class="foot">
        Copyright &copy; 2027 JGIBulletin.com - All rights reserved 
    </div>

</body>

</html>