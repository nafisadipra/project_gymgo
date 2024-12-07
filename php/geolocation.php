<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/gymmap.css">
    <link rel="stylesheet" href="../css/geolocation.css">
    <link rel="stylesheet" href="../css/leaflet.css">
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
                        <a class="nav-item" href="./index.php">HOME</a>
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
                    <a href="./login.html"><input class="top-button1"   type="button" value="Log In"></a>
                </div>
            </div>
        </div>
    </header>
    <main id="main-section" style="padding: 0vw 1.5vw;">
        <div class="Container2">
            <div class="top-container">
               <p class="slogan">Find Your Fit, Manage With Ease</p>
            </div>
        </div>
        <div class="container3">
            <p class="find">Find Your GYM<p>
            <div class="search">
                <form action="#">
                    <input type="text" placeholder="Search by address, postal code,etc..." name="search" id="areaInput" class="form-control" autocomplete="off">
                    <button class="sb">
                        <img src="../Images/search-svgrepo-com.svg" width="28vw" height="33vw">
                    </button>
                    <button class="filb">
                        <img src="../Images/menu-list-dropdown-svgrepo-com.svg" width="40vw" height="28vw" > Filter
                    </button>
                </form>
            </div>
            <ul id="suggestions" class="list-group"></ul>
        </div>
        <div class="container4">
            <div class="sec1">
            </div>
            <div class="sec2">
                <div id="map"></div>
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
                <a class="f1"href="#">About</a><br>
                <a class="f1"href="#">Services</a><br>
                <a class="f1"href="#">Team</a><br>
                <a class="f1"href="#">Contact</a>
            </p>
            
        </div>
        <div class="sub9">
            <p class="sub91"><b>Support</b></p>
            <p class="sub92">
                <a class="f1"href="#">Terms & Conditions</a><br>
                <a class="f1"href="#">Privacy Policy</a><br>
                <a class="f1"href="#">Support</a><br>
                <a class="f1"href="#">FAQ</a>
            </p>
            
        </div>
        <div class="sub9">
            <p class="sub91"><b>Get in Touch</b></p>
            <p class="sub92">
                <a class="f1"href="#"><img class="fc"src="./image/headset-svgrepo-com.svg" > Support@megakit.com</a><br>
                <a class="f1"href="#"><img class="fc" src="./image/phone-rotary-svgrepo-com.svg"> +23-456-6588</a><br>
            </p>
        </div>
    </footer>
    <script src="../js/leaflet.js"></script>
    <script src="../js/gymmap.js"></script>
</body>    