
<!DOCTYPE html>
<html lang=" ='en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X=UA-Complatible" content="IE=edge">
    <meta name="viewport" constent="width=device-width,
        initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="sign.up.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Popins:wght@300;400;500;600;700;800;900E&display=swap");
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Popins", sans-serif;
    }

    .sign-up {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-image: url("./RecipeSystem/img/background-login.jpg");
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    .wrapper {
        width: 420px;
        background: transparent;
        border: 2px solid rgba(255, 255, 255, .2);
        box-shadow: 0 0 10px rgba(0, 0, 0, .2);
        color: #ffffff;
        border-radius: 10px;
        padding: 20px 40px;
        background-color: #F0D3CF;
    }

    .wrapper h1 {
        color: #000000;
        font-size: 36px;
        text-align: center;
        /* -webkit-text-stroke-width: 1px;
        -webkit-text-stroke-color: #525150; */
    }

    .wrapper .input-box {
        position: relative;
        width: 100%;
        height: 50px;
        margin: 30px 0;
        background: rgba(247, 198, 192, 0.883);
        border-radius: 40px;
        border: 1px solid #A2673b;
    }

    .input-box input {
        width: 100%;
        height: 100%;
        background: transparent;
        border: none;
        outline: none;
        border: 2px solid rgba(255, 255, 255, .2);
        border-radius: 40px;
        font-size: 16px;
        color: #000000;
        padding: 20px 45px 20px 20px;
    }

    .input-box input::placeholder {
        color: #FBF7F4;
    }

    .input-box i {
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 20px;
    }

    .wrapper .btn {
        width: 100%;
        height: 45px;
        background: #fff;
        border: none;
        outline: none;
        border-radius: 40px;
        box-shadow: 0 0 10px rgba(0, 0, 0, .1);
        cursor: pointer;
        font-size: 16px;
        color: #333;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .wrapper .sign-up-link {
        font-size: 14.5px;
        text-align: center;
    }

    .sign-up-link p a {
        color: #fff;
        text-decoration: none;
        font-weight: 600;
    }

    .sign-up-link p a:hover {
        text-decoration: underline;
    }

</style>

<body>
    <div class="sign-up">
        <div class="wrapper">         
            <h1>Sign up</h1>
                <form action="SignUpRount.php" method="post">
                    <div class="input-box">
                        <input type="text" name="fname" placeholder="First name" required>
                        <i class='bx bxs-user-detail' ></i>
                    </div>
                    
                    <div class="input-box">
                        <input type="text" placeholder="Last name" name="lname" required>
                        <i class='bx bxs-user-detail' ></i>
                    </div>
                    
                    <div class="input-box">
                        <input type="email" placeholder="Email" name="email"  required>
                        <i class='bx bxs-envelope' ></i>
                    </div>

                    <div class="input-box">
                        <input type="" placeholder="Phone" name="phone" required>
                        <i class='bx bxs-phone'></i>
                    </div>

                    <div class="input-box">
                        <input type="text" placeholder="Username" name="username" required>
                        <i class='bx bxs-user'></i>
                    </div>

                    <div class="input-box">
                        <input type="password" placeholder="Password" name="pass" required>
                        <i class='bx bxs-lock-alt'></i>
                    </div>

                    <div class="input-box">
                        <input type="password" placeholder="Confirm password" name="cfpass" required>
                        <i class='bx bxs-lock-alt'></i>
                    </div>
                    <a href="Home.php"><button type="submit" name="signup" class="btn">Sign up </button> </a>
                </form>

                <div class="sign-up-link">
                    <p>Already have an account? <a href="index.php">Sign in</a></p>
                </div> 
        </div>
    </div>
</body>

</html>





