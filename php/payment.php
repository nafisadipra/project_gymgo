<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/payment.css">
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
        <div class="container">
            <form action="#">
                <div class="bill">
                    <h3>Billing Amount: 4000/- </h3>
                </div>
                <div class="row">
                    <div class="col">
                    <h3 class="title">
                        Billing Address
                    </h3>

                    <div class="inputBox">
                        <label for="name">
                              Full Name:
                          </label>
                        <input type="text" id="name" 
                               placeholder="Enter your full name" 
                               required>
                    </div>

                    <div class="inputBox">
                        <label for="email">
                              Email:
                          </label>
                        <input type="text" id="email" 
                               placeholder="Enter email address" 
                               required>
                    </div>

                    <div class="inputBox">
                        <label for="address">
                              Address:
                          </label>
                        <input type="text" id="address" 
                               placeholder="Enter address" 
                               required>
                    </div>

                    <div class="inputBox">
                        <label for="city">
                              City:
                          </label>
                        <input type="text" id="city" 
                               placeholder="Enter city" 
                               required>
                    </div>

                    <div class="flex">

                        <div class="inputBox">
                            <label for="state">
                                  State:
                              </label>
                            <input type="text" id="state" 
                                   placeholder="Enter state" 
                                   required>
                        </div>

                        <div class="inputBox">
                            <label for="zip">
                                  Zip Code:
                              </label>
                            <input type="number" id="zip" 
                                   placeholder="123 456" 
                                   required>
                        </div>

                    </div>


                </div>
                <div class="col">
                    <h3 class="title">Payment</h3>

                    <div class="inputBox">
                        <label for="name">
                              Card Accepted:
                          </label>
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20240715140014/Online-Payment-Project.webp" 
                             alt="credit/debit card image">
                    </div>

                    <div class="inputBox">
                        <label for="cardName">
                              Name On Card:
                          </label>
                        <input type="text" id="cardName" 
                               placeholder="Enter card name" 
                               required>
                    </div>

                    <div class="inputBox">
                        <label for="cardNum">
                              Credit Card Number:
                          </label>
                        <input type="text" id="cardNum" 
                               placeholder="1111-2222-3333-4444" 
                               maxlength="19" required>
                    </div>

                    <div class="inputBox">
                        <label for="">Exp Month:</label>
                        <select name="" id="">
                            <option value="">Choose month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                    </div>


                    <div class="flex">
                        <div class="inputBox">
                            <label for="">Exp Year:</label>
                            <select name="" id="">
                                <option value="">Choose Year</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                            </select>
                        </div>

                        <div class="inputBox">
                            <label for="cvv">CVV</label>
                            <input type="number" id="cvv" 
                                   placeholder="1234" required>
                        </div>
                    </div>

                </div>

            </div>
            <div class="banking">
                <button>
                    <img class="bpic" src="../Images/bkash.png">
                </button>
                <button>
                    <img class="bpic" src="../Images/nagad.png">
                </button>
            </div>
            <input type="submit" value="Proceed to Checkout" 
                   class="submit_btn">

        </form>

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
    <script type="text/javascript" src="index.js">

            let cardNumInput = 
            document.querySelector('#cardNum')
            cardNumInput.addEventListener('keyup', () => {
            let cNumber = cardNumInput.value
            cNumber = cNumber.replace(/\s/g, "")

            if (Number(cNumber)) {
            cNumber = cNumber.match(/.{1,4}/g)
            cNumber = cNumber.join(" ")
            cardNumInput.value = cNumber
            }
            })
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const bankingButtons = document.querySelectorAll('.banking button');
    const colDivs = document.querySelectorAll('.col');
    const cardPaymentSection = colDivs[1]; // The second .col div contains payment info

    bankingButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent form submission
            
            // Toggle payment section
            cardPaymentSection.classList.add('disabled-payment');
            
            // Remove disabled state from other banking buttons
            bankingButtons.forEach(btn => {
                btn.classList.remove('selected-payment');
            });
            
            // Add selected state to clicked button
            this.classList.add('selected-payment');
            
            // Disable all inputs in the card payment section
            const inputs = cardPaymentSection.querySelectorAll('input, select');
            inputs.forEach(input => {
                input.disabled = true;
            });
        });
    });

    // Add a way to revert back to card payment if needed
    cardPaymentSection.addEventListener('click', function() {
        if (this.classList.contains('disabled-payment')) {
            this.classList.remove('disabled-payment');
            
            // Re-enable all inputs
            const inputs = this.querySelectorAll('input, select');
            inputs.forEach(input => {
                input.disabled = false;
            });
            
            // Remove selected state from banking buttons
            bankingButtons.forEach(btn => {
                btn.classList.remove('selected-payment');
            });
        }
    });
});
    </script>
        <div class="overlay" id="overlay"></div>
    <div class="popup" id="confirmationPopup">
        <div class="popup-content">
            <h2>Success!</h2>
            <p>Your payment has been confirmed.</p>
        </div>
        <button class="popup-button" onclick="closePopup()">OK</button>
    </div>

    <script>
        document.querySelector('.submit_btn').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('overlay').classList.add('show');
            document.getElementById('confirmationPopup').classList.add('show');
        });

        function closePopup() {
            document.getElementById('overlay').classList.remove('show');
            document.getElementById('confirmationPopup').classList.remove('show');
        }
    </script>
</body>    