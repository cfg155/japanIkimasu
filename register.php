<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/register.css">
</head>
<body>
    <!-- Connecting -->
    <?php 
    // session_start();
    include 'process/connector.php';

    if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
        $cache = $_SESSION['username'];
        echo "<p id='status' class='testLog'>logged</p>";
     }else{
        echo "<p id='status' class='testLog'>not logged</p>";
     }

    ?>

    <!-- Connecting -->
    <?php 
    session_start();
    include 'process/connector.php';

    if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
        $cache = $_SESSION['username'];
        echo "<p id='status' class='testLog'>logged</p>";
     }else{
        echo "<p id='status' class='testLog'>not logged</p>";
     }

    ?>

    <!-- Header -->
    <div class="header">
        <div class="header-top">
            <div class="logo"> 
                <a href="index.php">JapanIkimasu!</a>
            </div>
    
            <div class="login">
                <div class="notLogged">
                    <p><a href="login.php">Login</a><br>
                    Don't have account yet? <a href="register.php">Register Now</a></p>
                </div>

                <form action="logout.php" method="POST">
                    <div class="logged">
                        <p>Hi,<?php echo $cache; ?></p><br><a href="logout.php">Log Out</a> 
                    </div>
                </form>

            </div>
        </div>

        <div class="header-bottom">
            <div class="menu-link">
                <ul>
                    <li class="link-item li-sizing"><a href="index.php" class="link-item a-sizing">Home</a></li>
                    <li class="link-item li-sizing"><a href="feedback.php" class="link-item a-sizing">Feedback</a></li>
                    <li class="link-item li-sizing"><a href="forum.php" class="link-item a-sizing">Forum</a></li>
                </ul>
            </div>
        </div>

<!-- test 2 -->

    </div>
    <!-- Header End -->
    <div class="content">
            <div class="input">
                <h1 style="text-align: center;margin:20px 0;">Registration</h1>

                <input type="text" placeholder="Fullname (Max 30)" name="fn" id="fullname"><p id="fnMsg" class="msg"></p>

                <input type="text" placeholder="Username (Max 20)" name="un" id="un"><p id="unMsg" class="msg"></p>

                <input type="password" placeholder="Password" name="pw" id="password"><p id="pwMsg" class="msg"></p>

                <input type="text" placeholder="Email" name="email" id="email"><p id="emailMsg" class="msg"></p>

                <table>
                    <tr>
                        <td>Gender</td>
                        <td>
                            <input type="radio" name="gender" name="gender" value="Male" id="male">Male
                            <input type="radio" name="gender" name="gender" value="Female" id="female">Female
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><p id="genderMsg" class="msg"></p></td>
                    </tr>

                    <tr>
                        <td>Birthdate</td>
                        <td><input type="date" name="dob" id="dob"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><p id="dobMsg" class="msg"></p></td>
                    </tr>
                </table>
                <button onclick="validation()" id="chk" class="chkBtn">Check</button>
            </div>

    </div>

    <!-- Pop Up -->
    <div class="bg">
            <div class="pop-upContent">
                <div class="close">+</div>
                <form method="POST" action="registrationProcess.php">
                    <input type="text" name='fn' id='lcName' hidden> 
                    <input type="text" name='un' id='lcUn' hidden> 
                    <input type="text" name='pw' id='lcPass' hidden> 
                    <input type="text" name='email' id='lcEmail' hidden> 
                    <input type="text" name='gender' id='lcGen' hidden> 
                    <input type="text" name='dob' id='lcDob' hidden> 

                    <div class="contentDalam">
                        <h1>Confirmation Account</h1>
                        <table>
                            <tr>
                                <td>Fullname</td>
                                <td class="check" id="checkfullname"></td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td class="check" id="checkusername"></td>
                            </tr>
                            <tr style="display:none">
                                <td>Email</td>
                                <td class="check" id="checkemail"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td class="check" id="checkradio"></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td class="check" id="checkgender"></td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td class="check" id="checkdob"></td>
                            </tr>
                        </table>
                        <button type="submit" name="registerBtn" class="submitBtn">Submit</button>
                    </div>
                </form>


            </div>
    </div>  <!-- end of pop up -->


    <!-- Footer -->
    <div class="footer-container">
        <div class="footer">
            <div class="footer-left">
                <div class="logo">
                    <a href="index.php">JapanIkimasu!</a>
                </div>
                <p>address</p>
                <p>Call</p>
            </div>

            <div class="footer-center">
                <ul class="footer-center">
                    <li class="footer-link-item"><a href="index.php" class="footer-link-item">Home</a></li>
                    <li class="footer-link-item"><a href="feedback.php" class="footer-link-item">Feedback</a></li>
                    <li class="footer-link-item"><a href="forum.php" class="footer-link-item">Forum</a></li>
                </ul>
            </div>

            <div class="footer-right">
                <h4>Follow Us!</h4>
                <div class="sosmed">
                    <a href="#"><img src="assets/logo.png" alt="Facebook"></a>
                    <a href="#"><img src="assets/logo.png" alt="Instagram"></a>
                    <a href="#"><img src="assets/logo.png" alt="Twitter"></a>
                    <a href="#"><img src="assets/logo.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

</body>
</html>

<script>
    const validation = ()=>{
        var chk = document.querySelector(".chkBtn");
        var submitBtn = document.querySelector(".submitBtn");

        //validation
        var statusFn = false;
        var statusUn = false;
        var statusPw = false;
        var statusEm = false;
        var statusGen = false;
        var statusDob = false;

        //Fullname
        var fn = document.getElementById('fullname').value;
        chkFn = {filled:false,alphabet:false,size:false};

            //Fullname Must be filled
            if(fn.length == 0){
                chkFn.filled = false;
                document.getElementById('fnMsg').innerHTML = "Must be filled";
            }else{
                chkFn.filled = true;
            }

            //Fullname Alphabet only
            var alphabet = /^[a-zA-Z ]*$/;;
            if(fn.match(alphabet)){
                chkFn.alphabet = true;
            }else{
                chkFn.alphabet = false;
                document.getElementById('fnMsg').innerHTML = "Must be Alphabet";
            }

            //Fullname tidak lebih dari 30 huruf
            if(fn.length<30){
                chkFn.size = true;
            }else{
                chkFn.size = false;
                document.getElementById('fnMsg').innerHTML = "Not more than 30 ";
            }
        
        // here
        // Validation Prototype with Object
        if(chkFn.filled == true && chkFn.alphabet == true && chkFn.size == true){
            console.log(chkFn);
            chkFn.filled = false;
            chkFn.alphabet = false;
            chkFn.size = false;

            document.getElementById('fnMsg').innerHTML = "";
            statusFn = true;
        }else{
            console.log(chkFn);
            chkFn.filled = false;
            chkFn.alphabet = false;
            chkFn.size = false;
        }

    //Username
        var username = document.getElementById('un').value;
        var chkUn = {filled:false,size:false,nospace:false};
    
            //Username must be filled
            if(username.length==0){
                chkUn.filled = false;
                document.getElementById('unMsg').innerHTML = "Must be filled";
            }else{
                chkUn.filled = true;
            }

            //Username < 20
            if(username.length<20){
                chkUn.size = true;
            }else{
                chkUn.size = false;
                document.getElementById('unMsg').innerHTML = "Not more than 20";
            }

            //username tidak ada spasi
            if(username.includes(' ')){
                chkUn.nospace = false;
                document.getElementById('unMsg').innerHTML = "Musn't contain space";
            }else{
                chkUn.nospace = true;
            }

        // here
        // Validation Prototype with Object
        if(chkUn.filled == true && chkUn.size == true && chkUn.nospace == true){
            console.log(chkUn);
            chkUn.filled = false;
            chkUn.size = false;
            chkUn.nospace = false;

            document.getElementById('unMsg').innerHTML = "";
            statusUn = true;
        }else{
            console.log(chkUn);
            chkUn.filled = false;
            chkUn.size = false;
            chkUn.nospace = false;
        }

    //Pw
        var pw = document.getElementById('password').value;
        var chkPw = {filled:false};

            //Password must be filled
            if(pw.length==0){
                chkPw.filled = false;
                document.getElementById('pwMsg').innerHTML = "Must be filled";
            }else{
                chkPw.filled = true;
            }

        //here
        // Validation Prototype with Object
        if(chkPw.filled == true){
            console.log(chkPw);
            chkPw.filled = false;

            document.getElementById('pwMsg').innerHTML = "";
            statusPw = true;
        }else{
            console.log(chkPw);
            chkPw.filled = false;
        }

    //Email
        var email = document.getElementById('email').value;
        var chkEm = {filled:false,incsymbol:false,nosymbol:false};

            //must be filled
            if(email.length==0){
                chkEm.filled = false;
                document.getElementById('emailMsg').innerHTML = "Must be filled";
            }else{
                chkEm.filled = true;
            }

            //incorrect symbol
            if(email.includes('@.')){
                chkEm.incsymbol = false;
                document.getElementById('emailMsg').innerHTML = "Incorrect email type";
            }else{
                chkEm.incsymbol = true;
            }
            
            //nosymbol
            if(!email.includes('@') || !email.includes('.com')){
                chkEm.nosymbol = false;
                document.getElementById('emailMsg').innerHTML = "Must container either @ and .com";
            }else{
                chkEm.nosymbol = true;
            }

        //here
        // Validation Prototype with Object
        if(chkEm.filled == true && chkEm.incsymbol == true && chkEm.nosymbol == true){
            console.log(chkEm);
            chkUn.filled = false;
            chkUn.size = false;
            chkUn.nospace = false;

            document.getElementById('emailMsg').innerHTML = "";
            statusEm = true;
        }else{
            console.log(chkEm);
            chkUn.filled = false;
            chkUn.size = false;
            chkUn.nospace = false;
        }

    //Gender
        var male = document.getElementById('male');
        var female = document.getElementById('female');
        var chkGen = {checked:false};
        var finalGen

        if(male.checked || female.checked){
            chkGen.checked = true;
            if(male.checked){
                finalGen = "Male"
            }else{
                finalGen = "Female";
            }
        }else{
            chkGen.checked = false;
            document.getElementById('genderMsg').innerHTML = "Must be Checked";
        }

        // Validation Prototype with Object
        if(chkGen.checked == true){
            console.log(chkGen);
            chkGen.checked = false;

            document.getElementById('genderMsg').innerHTML = "";
            statusGen = true;
        }else{
            console.log(chkGen);
            chkGen.checked = false;
        }

    //Date
        var date = document.getElementById('dob').value;
        var chkDate = {filled:false};

        //must be filled
        if(date==""){
            chkDate.filled = false;
            document.getElementById('dobMsg').innerHTML = "Must be filled";
        }else{
            chkDate.filled = true;
        }

        // Validation Prototype with Object
            if(chkDate.filled == true){
                console.log(chkDate);
                chkDate.filled = false;

                document.getElementById('dobMsg').innerHTML = "";
                statusDob = true;
            }else{
                console.log(chkDate);
                chkDate.filled = false;
            }

            if(statusFn == true && statusUn == true && statusPw == true && statusEm == true && statusGen == true && statusDob == true){
                 statusFn = false;
                 statusUn = false;
                 statusPw = false;
                 statusEm = false;
                 statusGen = false;
                 statusDob = false;

                document.getElementById('lcName').value = document.getElementById('fullname').value;
                document.getElementById('lcUn').value = document.getElementById('un').value;
                document.getElementById('lcPass').value = document.getElementById('password').value;
                document.getElementById('lcEmail').value = document.getElementById('email').value;
                document.getElementById('lcGen').value = finalGen;
                document.getElementById('lcDob').value = document.getElementById('dob').value;

                document.getElementById('checkfullname').innerHTML = document.getElementById('fullname').value;
                document.getElementById('checkusername').innerHTML = document.getElementById('un').value;
                document.getElementById('checkemail').innerHTML = document.getElementById('password').value;
                document.getElementById('checkradio').innerHTML = document.getElementById('email').value;
                document.getElementById('checkgender').innerHTML = finalGen;
                document.getElementById('checkdob').innerHTML = document.getElementById('dob').value;

                document.querySelector('.bg').style.display = 'flex';
                document.querySelector('.close').addEventListener("click",()=>{
                    document.querySelector('.bg').style.display = 'none';
                });
            }
    }
</script>
<script src="process/loginJs.js"></script>