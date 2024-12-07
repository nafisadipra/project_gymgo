<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/feedback.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <style>
    
        .slick-carousel {
            max-width: 80%;
            margin: 2rem auto;
            border: 2px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        
        .slick-carousel img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

   
        .slick-dots {
            bottom: -30px;
        }

        .slick-dots li button:before {
            font-size: 12px;
            color: #999;
        }

        .slick-dots li.slick-active button:before {
            color: #555;
        }


        .slick-prev,
        .slick-next {
            font-size: 0;
            background-color: #333;
            color: #fff;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }

        .slick-prev:hover,
        .slick-next:hover {
            background-color: #555;
        }

        .slick-prev:before,
        .slick-next:before {
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
        }

        .slick-prev:before {
            content: "\f104"; 
        }

        .slick-next:before {
            content: "\f105"; 
        }
    </style>
    <title>GYM GO</title>
</head>
<body>
    <header>
        <div class="head-container">
            <div>
                <img src="../img/GymGo.png" width="190vw" style="padding-left: 2vw;">
            </div>
            <div class="nav-content">
                <nav class="navbar">
                    <ul>
                        <a class="nav-item" href="./index.html">HOME</a>
                        <a class="nav-item" href="./feedback.html">FEEDBACK</a>
                        <a class="nav-item" href="./product.html">PRODUCTS</a>
                        <a class="nav-item" href="./dashboard.html">DASHBOARD</a>
                        <a class="nav-item" href="./trainer.html">TRAINER</a>
                    </ul>
                </nav>
            </div>
            <div style="display: flex; padding: 1.5vw 0vw;">
                <div class="nav-button">
                    <input class="top-button" type="button" value=" Sign Up">
                </div>
                <div class="nav-button">
                    <a href="./login.html"><input class="top-button1" type="button" value="Log In"></a>
                </div>
            </div>
        </div>
    </header>
    <main id="main-section" style="padding: 0vw 1.5vw;">
        <div class="container1">
            <div class="log">
                <p class="in">Feedback</p>
                <p class="txt">If you had any issues or you liked our product and service, please share with us!</p>
                <p class="txt"><b>Email</b></p>
                <input class="enter" type="text" placeholder="Enter your email">
                <p class="txt"><b>Message</b></p>
                <input class="enter1" type="text">
                <input class="logb" type="button" value="Send">
            </div>
        </div>
        <div class="boot1">
            <div class="slick-carousel">
                <img class="profile-pic" src="../Images/1075432_7556.jpg" alt="Image 1">
                <img class="profile-pic" src="../Images/SL-120921-47200-13.jpg" alt="Image 2">
                <img class="profile-pic" src="../Images/1075432_7556.jpg" alt="Image 3">
                <img class="profile-pic" src="../Images/SL-120921-47200-13.jpg" alt="Image 4">
            </div>
        </div>
    </main>
    <footer class="foot">
        <div class="sub9">
            <p class="sub91"><b>Orbitor</b></p>
            <p class="sub92">Tempora dolorem voluptatum nam vero<br> assumenda voluptate, facilis ad eos<br> obcaecati tenetur veritatis eveniet<br> distinctio.</p>
        </div>
        <div class="sub9">
            <p class="sub91"><b>Company</b></p>
            <p class="sub92">
                <a class="f1" href="#">About</a><br>
                <a class="f1" href="#">Services</a><br>
                <a class="f1" href="#">Team</a><br>
                <a class="f1" href="#">Contact</a>
            </p>
        </div>
        <div class="sub9">
            <p class="sub91"><b>Support</b></p>
            <p class="sub92">
                <a class="f1" href="#">Terms & Conditions</a><br>
                <a class="f1" href="#">Privacy Policy</a><br>
                <a class="f1" href="#">Support</a><br>
                <a class="f1" href="#">FAQ</a>
            </p>
        </div>
        <div class="sub9">
            <p class="sub91"><b>Get in Touch</b></p>
            <p class="sub92">
                <a class="f1" href="#"><img class="fc" src="./image/headset-svgrepo-com.svg"> Support@megakit.com</a><br>
                <a class="f1" href="#"><img class="fc" src="./image/phone-rotary-svgrepo-com.svg"> +23-456-6588</a><br>
            </p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.slick-carousel').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>
</body>
</html>
