<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>

    <link rel="stylesheet" href="style.css">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"> -->

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="index.html" class="nav__logo">UNISHARE</a>
            <ul class="nav__items">
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
                <!-- <li><a href="signin.html">Sign In</a></li> -->
                <li class="nav__profile">
                    <div class="avator">
                        <img src="./images/avatar1.jpg" alt="">
                    </div>
                    <ul>
                        <li><a href="dashboard.html">Dashboard</a></li>
                        <li><a href="logout.html">Dashboard</a></li>
                    </ul>
                </li>
            </ul>

            <button id="open___nav-button"><i class="uil uil-bars"></i></button>
            <button id="close___nav-button"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>

    <!--=================Navbar-end====================-->


    <section class="singlepost">
        <div class="container singlepost__container">
            <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis, qui.</h2>

            <div class="post__author">
                <div class="post__author-avator">
                    <img src="./images/avatar4.jpg" alt="">
                </div>
                <div class="post__author-info">
                    <h5>By: John Mills</h5>
                    <small>April 13, 2023 - 10:34</small>
                </div>
            </div>

            <div class="singlepost__thumbnail">
                <img src="./images/blog95.jpg" alt="">
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas eos sapiente repellat provident esse vel,
                eius ratione non repellendus, quod sit itaque distinctio qui! Quis perspiciatis ullam debitis illum voluptatum porro, 
                optio rerum quibusdam id quae eveniet recusandae, praesentium excepturi?
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas eos sapiente repellat provident esse vel,
                eius ratione non repellendus, quod sit itaque distinctio qui! Quis perspiciatis ullam debitis illum voluptatum porro, 
                optio rerum quibusdam id quae eveniet recusandae, praesentium excepturi?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas eos sapiente repellat provident esse vel,
                eius ratione non repellendus, quod sit itaque distinctio qui! Quis perspiciatis ullam debitis illum voluptatum porro, 
                optio rerum quibusdam id quae eveniet recusandae, praesentium excepturi?
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas eos sapiente repellat provident esse vel,
                eius ratione non repellendus, quod sit itaque distinctio qui! Quis perspiciatis ullam debitis illum voluptatum porro, 
                optio rerum quibusdam id quae eveniet recusandae, praesentium excepturi?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas eos sapiente repellat provident esse vel,
                eius ratione non repellendus, quod sit itaque distinctio qui! Quis perspiciatis ullam debitis illum voluptatum porro, 
                optio rerum quibusdam id quae eveniet recusandae, praesentium excepturi?
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas eos sapiente repellat provident esse vel,
                eius ratione non repellendus, quod sit itaque distinctio qui! Quis perspiciatis ullam debitis illum voluptatum porro, 
                optio rerum quibusdam id quae eveniet recusandae, praesentium excepturi?
            </p>
        </div>
    </section>

    <!-- =================End of Single Post================== -->


    <footer>
        <div class="footer__socials">
            <a href="#youtube" target="_blank"><i class="uil uil-youtube"></i></a>
            <a href="#facebook" target="_blank"><i class="uil uil-facebook"></i></a>
            <a href="#Intagram" target="_blank"><i class="uil uil-instagram-alt"></i></a>
            <a href="#LinkedIn" target="_blank"><i class="uil uil-linkedin"></i></a>
            <a href="#Twitter" target="_blank"><i class="uil uil-twitter"></i></a>
        </div>

        <div class="container footer__container">
            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="">Art</a></li>
                    <li><a href="">Wild</a></li>
                    <li><a href="">Travel</a></li>
                    <li><a href="">Music</a></li>
                    <li><a href="">Science & Technology</a></li>
                    <li><a href="">Food</a></li>
                </ul>
            </article>
            <article>
                <h4>Support</h4>
                <ul>
                    <li><a href="">Online Support</a></li>
                    <li><a href="">Call Numbers</a></li>
                    <li><a href="">Emails</a></li>
                    <li><a href="">Social Support</a></li>
                    <li><a href="">Location</a></li>
                </ul>
            </article>
            <article>
                <h4>Blog</h4>
                <ul>
                    <li><a href="">Safety</a></li>
                    <li><a href="">Repair</a></li>
                    <li><a href="">Recent</a></li>
                    <li><a href="">Popular</a></li>
                    <li><a href="">Categories</a></li>
                </ul>
            </article>
            <article>
                <h4>Permalinks</h4>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </article>
        </div>
        <div class="footer__copyright">
            <small>All reserved to UNISHARE</small>
        </div>
    </footer>


    <!-- =================JS file=============== -->
    <script src="main.js"></script>

</body>
</html>