<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
</head>
<!DOCTYPE html>

<body class="login-section">
    <div class="row justify-content-center">
        <div class="col-md-3">
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
              </div>
              @endif
        </div>
    </div>
    <div>
        <form name="form" action="/login" method="POST" class="base login-form" onsubmit="valAlert()">
            <div id="title">
                <br><center><h1><strong>LOG IN</strong></h1></center>
            </div>
            <fieldset class="boxborder">
                <p class="label">
                    Username or Email
                    <input class="login-bg acc-text" type="text" name="username" id="username" placeholder="Enter username or email"
                    required/>
                    <center><div class="underborder"></div></center>
                </p>
                <p class="label">
                    Password
                    <input class="login-bg acc-text" type="password" name="password" id="password" placeholder="Enter Password"
                    required/>
                    <center><div class="underborder"></div></center>

                    <a href="#" class="forgot-pass">Forgot Password?</a>
                </p>

            <div class="pos">
                <button class="acc-btn" data-hover="Log In" type="submit" name="login" id="login">
                    <div>Done?</div>
                </button>
            </div>

            <p class="no-acc">No Account?
                <a href="/signup" class="oth-btn">Sign Up</a>
            </p>

            </fieldset>
        </form>
    </div>

    <script type="text/javascript" src="login.js"></script>
</body>
</html>
