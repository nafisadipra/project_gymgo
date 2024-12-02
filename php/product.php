<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/product.css">
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet"/>

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
                    <a href="./login.html"><input class="top-button1"   type="button" value="Log In"></a>
                </div>
            </div>
        </div>
    </header>
    <main id="main-section" style="padding: 0vw 1.5vw;">

        <div class="container1 ">
    
            <div class="swiper default-carousel swiper-container">
            <div class="swiper-wrapper">
             <div class="swiper-slide">
               <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
                 <span class="text-3xl font-semibold text-indigo-1000"><img src="../Images/ambitious-studio-rick-barrett-edaNcXqtxIw-unsplash.jpg" height="450vw"width="800vw"> </span>
               </div>
             </div>
             <div class="swiper-slide">
               <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
                 <span class="text-3xl font-semibold text-indigo-1000"><img src="../Images/victor-freitas-JbI04nYfaJk-unsplash.jpg" height="450vw" width="800vw"> </span>
               </div>
             </div>
             <div class="swiper-slide">
               <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
                 <span class="text-3xl font-semibold text-indigo-1000"><img src="../Images/ambitious-studio-rick-barrett-yNFuKkGYCxo-unsplash.jpg" height="450vw" weight="800vw"> </span>
               </div>
             </div>
             <div class="swiper-slide">
                <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
                  <span class="text-3xl font-semibold text-indigo-1000"><img src="../Images/yaw-afari-fXTa2ZH_BF8-unsplash.jpg" height="450vw" weight="800vw"> </span>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-5 lg:justify-start justify-center">
             <button id="slider-button-left" class="swiper-button-prev group !p-2 flex justify-center items-center border border-solid border-indigo-600 !w-12 !h-12 transition-all duration-500 rounded-full !top-2/4 !-translate-y-8 !left-5 hover:bg-indigo-600 " data-carousel-prev>
               <svg class="h-5 w-5 text-indigo-1000 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 10 0" fill="none">
                 <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
               </svg>
             </button>
             <button id="slider-button-right" class="swiper-button-next group !p-2 flex justify-center items-center border border-solid border-indigo-600 !w-12 !h-12 transition-all duration-500 rounded-full !top-2/4 !-translate-y-8  !right-5 hover:bg-indigo-600" data-carousel-next>
               <svg class="h-5 w-5 text-indigo-600 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                 <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
               </svg>
             </button>
            </div>
            <div class="swiper-pagination"></div>
            </div>
            </div>
            <div class="product">
                <div class="list" data-name="p-1">
                    <img class="pro" src="../Images/CAST_IRON_KETTLEBELLS_jpg.webp">
                    <h4>Body Solid KBX24KG <br> Premium Training <br> Kettlebell - 28 kg</h4>
        
        
                </div>
                <div class="list" data-name="p-2">
                    <img class="pro" src="../Images/2_0be82beb-20b4-4746-b84b-c3dbc987b205_640x.webp">
                    <h4>Weight Bench</h4>
                    
                </div>
                <div class="list" data-name="p-3">
                    <img class="pro" src="../Images/17-170693_weights-exercise-equipment-barbell-free-weight-equipment-physical.png">
                    <h4>Gym Steel Barbell</h4>
                    
                </div>
                <!-- <div class="list">
                    <img class="pro" src="./Images/dumb.jpeg">
        
                    
                </div> -->
        
        
            </div>
            <div class="product">
                <div class="list" data-name="p-4">
                    <img class="pro" src="../Images/M810_11.webp">
                    <h4>Altas Strength <br>Smith Machine </h4>
        
                </div>
                <div class="list" data-name="p-5">
                    <img class="pro" src="../Images/Okpro-Free-Weights-Gym-Equipment-Fitness-Exercise-Urethane-PU-Round-Dumbbell-Set.jpeg">
                    <h4>Okpro Free Weights Gym <br> Equipment Fitness Exercise <br> Urethane PU Round <br>Dumbbell Set Full Set-15Kg</h4>
                    
                </div>
                <div class="list" data-name="p-6">
                    <img class="pro" src="../Images/PL7340Ahomegym3.webp">
                    <h4>4 Station Home Gym</h4>
                    
                </div>
                <!-- <div class="list">
                    <img class="pro" src="./Images/single-stack-multi-gym.jpg">
        
                    
                </div> -->
        
        
            </div>
            <div class="product">
                <div class="list" data-name="p-7">
                    <img class="pro" src="../Images/Half-Rack-3Q-View_VN.png">
                    <h4>Precor Discovery <br>Series Half Rack</h4>
        
                </div>
                <div class="list" data-name="p-8">
                    <img class="pro" src="../Images/vinyl-dumbbell-1-kg.png">
                    <h4>Vinyl Dumbbell Set 3Kg</h4>
        
                    
                </div>
                <div class="list" data-name="p-9">
                    <img class="pro" src="../Images/IMG_5598.png">
                    <h4>High Tredmill</h4>
                    
                </div>
                <!-- <div class="list">
                    <img class="pro" src="./Images/37_000.png">
                    
                    
                </div> -->
         
        
            </div>
            <div class="product-preview ">
                <div class="preview active" data-target="p-1">
                    <i class="fas fa-time"></i>
                    <img class="pro" src="../Images/CAST_IRON_KETTLEBELLS_jpg.webp">
                    <h4>Body Solid KBX24KG <br> Premium Training <br> Kettlebell - 28 kg</h4>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>(250)</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum atque consequatur voluptatem nostrum at nobis eius doloremque. Magnam, deserunt beatae consequuntur ea possimus doloremque accusantium eaque, libero nostrum omnis deleniti!</p>
                    <div class="price">8000/-</div>
                    <div class="button">
                        <a href="#" class="buy">Buy now</a>
                        <a href="#" class="cart">Add to cart</a>
                    </div>
                </div>
        
                <div class="preview" data-target="p-2">
                    <i class="fas fa-times"></i>
                    <img class="pro" src="../Images/2_0be82beb-20b4-4746-b84b-c3dbc987b205_640x.webp">
                    <h4>Body Solid KBX24KG <br> Premium Training <br> Kettlebell - 28 kg</h4>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>(250)</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum atque consequatur voluptatem nostrum at nobis eius doloremque. Magnam, deserunt beatae consequuntur ea possimus doloremque accusantium eaque, libero nostrum omnis deleniti!</p>
                    <div class="price">8000/-</div>
                    <div class="button">
                        <a href="#" class="buy">Buy now</a>
                        <a href="#" class="cart">Add to cart</a>
                    </div>
                </div>
        
                <div class="preview " data-target="p-3">
                    <i class="fas fa-times"></i>
                    <img src="../Images/17-170693_weights-exercise-equipment-barbell-free-weight-equipment-physical.png">
                    <h4>Body Solid KBX24KG <br> Premium Training <br> Kettlebell - 28 kg</h4>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>(250)</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum atque consequatur voluptatem nostrum at nobis eius doloremque. Magnam, deserunt beatae consequuntur ea possimus doloremque accusantium eaque, libero nostrum omnis deleniti!</p>
                    <div class="price">8000/-</div>
                    <div class="button">
                        <a href="#" class="buy">Buy now</a>
                        <a href="#" class="cart">Add to cart</a>
                    </div>
                </div>
        
                <div class="preview " data-target="p-4">
                    <i class="fas fa-times"></i>
                    <img src="../Images/M810_11.webp">
                    <h4>Body Solid KBX24KG <br> Premium Training <br> Kettlebell - 28 kg</h4>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>(250)</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum atque consequatur voluptatem nostrum at nobis eius doloremque. Magnam, deserunt beatae consequuntur ea possimus doloremque accusantium eaque, libero nostrum omnis deleniti!</p>
                    <div class="price">8000/-</div>
                    <div class="button">
                        <a href="#" class="buy">Buy now</a>
                        <a href="#" class="cart">Add to cart</a>
                    </div>
                </div>
        
                <div class="preview " data-target="p-5">
                    <i class="fas fa-times"></i>
                    <img src="../Images/Okpro-Free-Weights-Gym-Equipment-Fitness-Exercise-Urethane-PU-Round-Dumbbell-Set.jpeg">
                    <h4>Body Solid KBX24KG <br> Premium Training <br> Kettlebell - 28 kg</h4>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>(250)</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum atque consequatur voluptatem nostrum at nobis eius doloremque. Magnam, deserunt beatae consequuntur ea possimus doloremque accusantium eaque, libero nostrum omnis deleniti!</p>
                    <div class="price">8000/-</div>
                    <div class="button">
                        <a href="#" class="buy">Buy now</a>
                        <a href="#" class="cart">Add to cart</a>
                    </div>
                </div>
        
                <div class="preview " data-target="p-6">
                    <i class="fas fa-times"></i>
                    <img src="../Images/PL7340Ahomegym3.webp">
                    <h4>Body Solid KBX24KG <br> Premium Training <br> Kettlebell - 28 kg</h4>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>(250)</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum atque consequatur voluptatem nostrum at nobis eius doloremque. Magnam, deserunt beatae consequuntur ea possimus doloremque accusantium eaque, libero nostrum omnis deleniti!</p>
                    <div class="price">8000/-</div>
                    <div class="button">
                        <a href="#" class="buy">Buy now</a>
                        <a href="#" class="cart">Add to cart</a>
                    </div>
                </div>
        
                <div class="preview " data-target="p-7">
                    <i class="fas fa-times"></i>
                    <img src="../Images/Half-Rack-3Q-View_VN.png">
                    <h4>Body Solid KBX24KG <br> Premium Training <br> Kettlebell - 28 kg</h4>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>(250)</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum atque consequatur voluptatem nostrum at nobis eius doloremque. Magnam, deserunt beatae consequuntur ea possimus doloremque accusantium eaque, libero nostrum omnis deleniti!</p>
                    <div class="price">8000/-</div>
                    <div class="button">
                        <a href="#" class="buy">Buy now</a>
                        <a href="#" class="cart">Add to cart</a>
                    </div>
                </div>
        
                <div class="preview " data-target="p-8">
                    <i class="fas fa-times"></i>
                    <img src="../Images/vinyl-dumbbell-1-kg.png">
                    <h4>Body Solid KBX24KG <br> Premium Training <br> Kettlebell - 28 kg</h4>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>(250)</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum atque consequatur voluptatem nostrum at nobis eius doloremque. Magnam, deserunt beatae consequuntur ea possimus doloremque accusantium eaque, libero nostrum omnis deleniti!</p>
                    <div class="price">8000/-</div>
                    <div class="button">
                        <a href="#" class="buy">Buy now</a>
                        <a href="#" class="cart">Add to cart</a>
                    </div>
                </div>
        
                <div class="preview " data-target="p-9">
                    <i class="fas fa-times"></i>
                    <img src="../Images/IMG_5598.png">
                    <h4>Body Solid KBX24KG <br> Premium Training <br> Kettlebell - 28 kg</h4>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>(250)</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum atque consequatur voluptatem nostrum at nobis eius doloremque. Magnam, deserunt beatae consequuntur ea possimus doloremque accusantium eaque, libero nostrum omnis deleniti!</p>
                    <div class="price">8000/-</div>
                    <div class="button">
                        <a href="#" class="buy">Buy now</a>
                        <a href="#" class="cart">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="container2">
                <input class="next" type="button" value="Next">
            </div>
        <!-- Code Here -->
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
                <a class="f1"href="#"><img class="fc"src="../image/headset-svgrepo-com.svg" > Support@megakit.com</a><br>
                <a class="f1"href="#"><img class="fc" src="../image/phone-rotary-svgrepo-com.svg"> +23-456-6588</a><br>
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js/product.js" defer></script>

    <script>
        var swiper = new Swiper(".default-carousel", {
        loop: true,
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
        },
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
        });
        </script>
</body>    