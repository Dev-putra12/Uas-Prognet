<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<!DOCTYPE html>

<body class="login-section">
    <div>
        <form name="form" action="/signup" method="POST" class="base login-form"  onsubmit="valAlert()">
        @csrf
            <div id="title">
                <br><center><h1><strong>SIGN UP</strong></h1></center>
            </div>
            <fieldset class="boxborder">
                <p class="label">
                    Name
                    <input class="login-bg acc-text" type="text" name="name" id="name" placeholder="Enter Name"
                    required/>
                    <center><div class="underborder"></div></center>
                    <span class="error visHide" id="error1">
                        *min. 3 characters and no symbols
                    </span>
                </p>
                <p class="label">
                    Username
                    <input class="login-bg acc-text" type="text" name="username" id="username" placeholder="Enter Username"
                    required/>
                    <center><div class="underborder"></div></center>
                    <span class="error visHide" id="error1">
                        *min. 3 characters and no symbols
                    </span>
                </p>
                <p class="label">
                    Email
                    <input class="login-bg acc-text" type="text" name="email" id="email" placeholder="Enter Email"
                    required/>
                    <center><div class="underborder"></div></center>
                    <span class="error visHide" id="error2">
                        *email invalid
                    </span>
                </p>
                <p class="label">
                    Password
                    <input class="login-bg acc-text" type="password" name="password" id="password" placeholder="Enter Password"
                    required/>
                    <center><div class="underborder"></div></center>
                    <span class="error visHide" id="error3">
                        *password min. 8 digit
                    </span>
                </p>

            <div class="pos">
                <input type="reset" value="Reset" class="oth-btn">
                <button class="acc-btn" data-hover="Sign Up" type="submit" name="signup" id="signup">

                    <div>Done?</div>
                </button>
            </div>

            <p class="no-acc">Have an Account?
                <a href="login" class="oth-btn">Log In</a>
            </p>

            </fieldset>
        </form>
    </div>

    <script src="js/validate.js"></script>
</body>
</html>
