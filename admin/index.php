<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <title>Home</title>
        <link rel="shortcut icon" href=".png" type="image/x-icon">
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="../css/style.css">

        <link rel="stylesheet" href="./css/media-style.css">
        <link rel="stylesheet" href="../css/media-style.css">
        <script src="../app.js/home.js" defer></script>
    </head>
</head>
<body>

    <?php
        include "./menu.php"
    ?>
    <main>
        <section class="main-section-container">
            <div class="main-section">
                <div class="section-content-container grid place-items-center w-full">
                    <div class="section-content grid place-items-center text-center">
                        <h3 class="font-extrabold tracking-widest uppercase">Get in fit in 2 weeks</h3>
                        <h1 class="font-black tracking-wider uppercase">Start your program today</h1>
                        <p class="font-semibold tracking-wider leading-loosed">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="explore_more font-bold tracking-wider uppercase rounded-lg">explore more</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-main-section-container">
            <div class="sec-main-section">
                <div class="sec-section-content-container w-full">
                    <div class="sec-section-content flex justify-space-evenly items-center ">
                        <div class="sec-content flex flex-col justify-end items-start">
                            <h1 class="font-semibold ">Best In Melbourne</h1>
                            <a href="#" class="border-2 block ">Explore More</a>
                        </div>
                        <div class="sec-content flex flex-col justify-end items-start">
                            <h1 class="font-semibold ">Professional Instructor</h1>
                            <a href="#" class="border-2 block ">Explore More</a>
                        </div>
                        <div class="sec-content flex flex-col justify-end items-start">
                            <h1 class="font-semibold ">High Technology</h1>
                            <a href="#" class="border-2 block ">Explore More</a>
                        </div>
                        <div class="sec-content flex flex-col justify-end items-start">
                            <h1 class="font-semibold ">Happy Customer</h1>
                            <a href="#" class="border-2 block ">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="flex-main-section">
            <div class="flex-main-content-container">
                <div class="flex-content-container">
                    <div class="flex-content flex justify-between items-start">
                        <div class="flex-left-content-container">
                            <div class="flex-left-content">
                                <h1 class="font-black uppercase">opening hours!</h1>
                                <h1 class="font-black uppercase">check our class here</h1>
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#" class="tracking-wider uppercase font-bold text-white inline-block rounded-md">about us</a>
                            </div>
                        </div>
                        <div class="flex-right-content-container">
                            <div class="flex-right-content">
                                <h3 class="font-black uppercase">Where</h3>
                                <p class="text-white" >121 King Street Melbourne, 3000, Australia</p>
                                <h3 class="font-black uppercase">When</h3>
                                <p class="text-white">Weekday : 10:00 am to 17:00 pm</p>
                                <p class="text-white">Friday : Close</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="flex-main-section">
            <div class="flex-main-content-container">
                <div class="flex-content-container">
                    <div class="content-heading-container text-center">
                        <h1 class="font-extrabold tracking-wider">MEET OUR STRONGEST TEAM</h1>
                        <p class="text-white">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    <div class="flex-content-items-container flex justify-center items-start gap-y-12">

                        <?php
                        include "config.php";
                        $sql = ("SELECT * FROM trainers");
                        $result = mysqli_query($conn , $sql) or die("connection fail");
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <div class="team-contents-container text-center">
                            <div class="team-contents w-full h-full">
                                <div class="team-img-container rounded-full">
                                    <a href="#" class="img-link w-full h-full relative"><img src="../img/<?php echo $row['image']; ?>" class="rounded-full w-full h-full relative person-img" alt="team-01-1.jpg"></a> 
                                </div>
                                <a href="#" class="team-person-name font-semibold"><?php echo $row["firstname"] ." " . $row["lastname"]; ?></a>
                                <p class="font-semibold tracking-widest"><?php echo $row["type"]; ?></p>
                                <div class="team-content-link-group">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        }

                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="flex-main-section">
            <div class="flex-main-content-container">
                <div class="flex-content-container">
                    <div class="flex-content flex justify-between items-start">
                        <div class="flex-left-content-container">
                            <div class="flex-left-content">
                                <div class="gym-img-container w-full h-full">
                                    <div class="gym-img relative w-full h-full">
                                        <img src="../img/home1.jpg" class="gym-img-main" width="100%" height="100%" alt="home1" title="home 1">
                                        <img src="../img/bg_image/circle-1-min.png" class="gym-img-back-bg absolute " alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-right-content-container">
                            <div class="flex-right-content">
                                <h1 class="font-black uppercase">BUILT TO BRING BEST RESULTS​</h1>
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#" class="tracking-wider uppercase font-bold text-white inline-block rounded-md">explore more</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex-content flex justify-between items-start">
                        <div class="flex-left-content-container">
                            <div class="flex-left-content">
                                <h1 class="font-black uppercase">PUSH YOUR LIMITS FORWARD​</h1>
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#" class="tracking-wider uppercase font-bold text-white inline-block rounded-md">explore more</a>
                            </div>
                        </div>
                        <div class="flex-right-content-container">
                            <div class="flex-right-content">
                                <div class="gym-img-container w-full h-full">
                                    <div class="gym-img relative w-full h-full">
                                        <img src="../img/home2.jpg" class="gym-img-main" width="100%" height="100%" alt="home1" title="home 2">
                                        <img src="../img/bg_image/circle-1-min.png" class="gym-img-back-bg absolute " alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="flex-main-section">
            <div class="flex-main-content-container">
                <div class="flex-content-container">
                    <div class="sponsor-flex-content flex justify-between items-start">
                        <div class="sponsor-company-main-container flex">
                            <div class="sponsor-company-container grid place-items-center ">
                                <img src="../img/h3-client-2.png" width="100%" height="100%" alt="h3-client-2">
                            </div>
                            <div class="sponsor-company-container grid place-items-center ">
                                <img src="../img/h3-client-3.png" width="100%" height="100%" alt="h3-client-2">
                            </div>
                            <div class="sponsor-company-container grid place-items-center ">
                                <img src="../img/h3-client-4.png" width="100%" height="100%" alt="h3-client-2">
                            </div>
                            <div class="sponsor-company-container grid place-items-center ">
                                <img src="../img/h3-client-5.png" width="100%" height="100%" alt="h3-client-2">
                            </div>
                            <div class="sponsor-company-container grid place-items-center ">
                                <img src="../img/h3-client-1.png" width="100%" height="100%" alt="h3-client-2">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="flex-main-section">
            <div class="flex-main-content-container">
                <div class="flex-content-container">
                    <div class="content-heading-container text-center">
                        <h1 class="font-extrabold tracking-wider">CHOOSE YOUR PRICING PLAN</h1>
                        <p class="text-white">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    <div class="flex-content-items-container pricing-flex-content-items-container flex justify-center items-start gap-x-5 gap-y-12">
                        <div class=" pricing-contents-container text-center">
                            <div class="pricing-contents w-full h-full">
                                <h2>CLASS DROP-IN</h2>
                                <?php
                                    include "config.php";
                                    $sql = ("SELECT * FROM pricings WHERE id = 1");
                                    $result = mysqli_query($conn , $sql) or die("connection fail");
                                        if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_assoc($result)){
                                                ?>
                                                <h1>$ <?php echo $row["price"]; ?></h1>
                                                <?php
                                            }
                                        };
                                ?>
                                
                                <p class="text-white">Health & Fitness Tips</p>
                                <p>Diet Plan Included</p>
                                <p>Membership Card</p>
                                <a href="#" class="uppercase tracking-widest rounded-md">Contact Us</a>
                            </div>
                        </div>
                        <div class=" pricing-contents-container text-center">
                            <div class="pricing-contents w-full h-full">
                                <h2>12 MONTH UNLIMITED</h2>
                                <?php
                                    include "config.php";
                                    $sql = ("SELECT * FROM pricings WHERE id = 2");
                                    $result = mysqli_query($conn , $sql) or die("connection fail");
                                        if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_assoc($result)){
                                                ?>
                                                <h1>$ <?php echo $row["price"]; ?></h1>
                                                <?php
                                            }
                                        };
                                ?>
                                <p class="text-white">Health & Fitness Tips</p>
                                <p class="text-white">Diet Plan Included</p>
                                <p>Membership Card</p>
                                <a href="#" class="uppercase tracking-widest rounded-md">Contact Us</a>
                            </div>
                        </div>
                        <div class=" pricing-contents-container text-center">
                            <div class="pricing-contents w-full h-full">
                                <h2>6 MONTH UNLIMITED</h2>
                                <?php
                                    include "config.php";
                                    $sql = ("SELECT * FROM pricings WHERE id = 3");
                                    $result = mysqli_query($conn , $sql) or die("connection fail");
                                        if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_assoc($result)){
                                                ?>
                                                <h1>$ <?php echo $row["price"]; ?></h1>
                                                <?php
                                            }
                                        };
                                ?>
                                <p class="text-white">Health & Fitness Tips</p>
                                <p class="text-white">Diet Plan Included</p>
                                <p class="text-white">Membership Card</p>
                                <a href="#" class="uppercase tracking-widest rounded-md">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="map-container w-full">
            <div class="map w-full h-full">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6303.775768417408!2d144.956877!3d-37.816095!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2sus!4v1669093714462!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="enable" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-container">
            <div class="footer-content-container flex justify-space-evenly items-start gap-y-12">
                <div class="footer-content">
                    <div class="footer-cotent-header">
                        <div class="footer-img-container">
                            <div class="logo-img">
                                <img src="../img/logo02.png" alt="">
                            </div>
                        </div>
                    </div>
                    <span><i class="fas fa-map-marker-alt"></i><a href="#"> Street, 11000 Helsinki, Finland</a></span>
                    <span><i class="fas fa-phone-alt"></i><a href="#">(+123)11 123 4567</a></span>
                    <span><i class="fas fa-envelope"></i><a href="#">office@example.com</a></span>
                    <div class="content-link-container flex w-full">
                        <span class="rounded-full"><a href="#"><i class="fab fa-facebook"></i></a></span>
                        <span class="rounded-full"><a href="#"><i class="fab fa-twitter"></i></a></span>
                        <span class="rounded-full"><a href="#"><i class="fab fa-youtube"></i></a></span>
                    </div>
                </div>
                <div class="footer-content">
                    <div class="footer-cotent-header">
                        <h1>Links</h1>
                    </div>
                    <span><a href="#">Home</a></span>
                    <span><a href="#">About Us</a></span>
                    <span><a href="#">Our Training</a></span>
                    <span><a href="#">Services</a></span>
                    <span><a href="#">Pricing Table</a></span>
                </div>
                <div class="footer-content">
                    <div class="footer-cotent-header">
                        <h1>Our Classes</h1>
                    </div>
                    <span><a href="#">Aerobic Classes</a></span>
                    <span><a href="#">Body Classes</a></span>
                    <span><a href="#">Weight Classes</a></span>
                    <span><a href="#">Yoga Classes</a></span>
                    <span><a href="#">Judo Classes</a></span>
                </div>
                <div class="footer-content">
                    <div class="footer-cotent-header">
                        <h1>Contact Us</h1>
                    </div>
                    <span><a href="#">Subscribe to our e-mail list and stay up-to-date with all our news.</a></span>
                    <input type="email" name="contactUs" id="contactUs" class="contactUs rounded-md" placeholder="Email"><br>
                    <input type="submit" name="submit" class="submit rounded-md" value="Submit">
                </div>
            </div>
        </div>
    </footer>

</body>
</html>