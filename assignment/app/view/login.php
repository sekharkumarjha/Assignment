<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="loginForm">
            <div class="logo">
                <img src="<?=ASSETS?>Images/logo.svg">
                <h3>Access charitable giving account</h3>
            </div>
            <form method="post" action="<?=ROOT?>login/authenticate">
                <label for="username">User Id</label>
                <input type="text" id="username" name="username" placeholder="Enter the User Id">
                <br />
                <label for="password">Password</label>
                <input type="text" id="password" name="password" placeholder="Enter the Password">
                <br />
                    <button type="submit" name="submit">Login</button>
                        <br />
                        <span class="errorfield">
                        <?php check_message() ?>
                        </span>
                
            </form>
            <hr>
            <div class="signup">
            <h3>Don’t have access to your account yet?</h3>
            <button class = "Register-btn"><a href = "<?=ROOT?>register">Register</a></button>
            </div>
        </div>
        
    </div>
    <style>
        body{
            background-image: url("{{asset('uploads/Images/login-background.png')}}");
            background-repeat: no-repeat;
            background-size: 100vw 50vh;
        }
        .container {
            width: 100%;
            height: 100%;
        }

        .errorfield {
            color: red;
        }


        .loginForm {
            background-color: #ffffff;
            margin: auto;
            width: 28%;
            height: 95vh;
            padding: 10px;
            border: 1px solid black;

        }
        .loginForm .logo{
            text-align: center;
        }


        .h3 {
            font-family: 'BerkeleyStd-Book';
            text-align: center;
            color: #0e2739;
            font-size: 24px;
            font-weight: 300;
            letter-spacing: .33px;
            width: 100%;
        }

        input[type=text] {
            width: 100%;
            padding: 12px 10px;
            margin: 18px 0px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #006778;
            color: white;
            padding: 14px 20px;
            margin: 25px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .signup{
            text-align: center;
        }
        button{
            width: 100%;
            background-color: #006778;
            color: white;
            padding: 14px 20px;
            margin: 25px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        a{
            text-decoration: none;
            color:#ffffff;
        }
    </style>
</body>

</html>