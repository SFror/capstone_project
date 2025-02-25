<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>

    @import url("https://fonts.google.com/specimen/Poppins?query=poppins");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
        user-select: none;
    }

    body {
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #e3f2fd;
    }

    .container-form {
        background-color: #fff;
        backdrop-filter: blur(12px);
        border-radius: 8px;
        max-width: 400px;
        width: 100%;
        margin: 20px;
        padding: 20px;
        display: grid;
        align-items: center;
        justify-content: center;
        grid-template-columns: 1fr;
        gap: 5px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
    }

    .container-form form {
        display: flex;
        flex-direction: column;
    }

    .container-form label {
        font-weight: 500;
        font-size: 14px;
    }

    .container-form h2 {
        margin-top: 5px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        letter-spacing: 1.5px;
        padding: 0px 20px;
        color: #000;
        text-transform: uppercase;
    }

    .container-form h3 {
        margin-top: 5px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        letter-spacing: 1.5px;
        padding: 0px 20px;
        color: #000;
        text-transform: uppercase;
    }

    .myForm {
        display: grid;
        gap: 1px;
        margin-top: 10px;
    }

    ::placeholder {
        font-weight: 550;
        letter-spacing: 0.6px;
    }

    .myForm input[type="text"],
    .myForm input[type="password"] {
        margin-top: 2px;
        padding: 4px 5px;
        font-size: 14px;
        height: 40px;
        flex: 1;
        border: none;
        outline: none;
        background-color: #bae8e8;
        border-bottom: px solid #000;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .submit-button {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .submit-button button {
        width: 80%;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        letter-spacing: 0.7px;
        font-weight: 600;
        background-color:rgb(61, 106, 252);
        color: white;
        padding: 10px 20px;
        margin: 25px 0px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .submit-button button:hover {
        background-color: #02386E;
    }

    @media screen and (max-width: 768px) {
        body {
            width: 100%;
            padding: 20px;
        }
        .container-form {
            max-width: 100%;
        }
        .container-form h2 {
            width: 100%;
            text-align: center;
        }
        .container-form h3 {
            width: 100%;
            text-align: center;
        }
        .myForm input[type="text"],
        .myForm input[type="password"] {
            width: 100%;
        }
        .submit-button button {
            width: 100%;
        }
        .form-g input, label {
            font-size: 15px;
        }
    }

    .anchor {
        font-size: 14px;
        font-weight: 300;
        margin-left: px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
    }

    .anchor a {
        text-decoration: none;
        font-weight: 370;
    }

    .anchor a:hover {
        text-decoration: underline;
    }

    .anchor p {
        color: #000;
        font-weight: 500;
    }

    .form-g {
        font-weight: bold;
        color: black;
        margin-top: 20px;
        cursor: pointer;
    }

    .form-g input, label {
        cursor: pointer;
    }

    #signup {
        display: none;
    }

</style>
<body>
    <div class="container-form" id="login">
        <h2 class="fw-bold fs-4">Warehouse Login</h2>
        <form method="POST" action="forms.php"> <!-- Form submits to the same page (forms.php) -->
            <div class="myForm"> 
                <label class="fw-semibold" for="email">Email*</label>
                <input type="text" id="email" name="email" placeholder="Email" required> 
            </div>
            <div class="myForm">
                <label class="fw-semibold" for="pass">Password*</label>
                <input type="password" id="pass" name="password" placeholder="Password" required> 
            </div>
            <div class="form-g">
                <input type="checkbox" id="showPass" name="checkbox" onclick="toShow()"> 
                <label for="showPass">Show password</label>
            </div>
            <div class="submit-button">
                <button type="submit" id="loginButton">Login</button> 
            </div>
            <div class="anchor">
                <a href="#"">Forgot password?</a>
        </form>
     </div>
<script>
    function toShow() {
      let showPass = document.getElementById('showPass');
      let pass = document.getElementById('pass');

      if (showPass.checked) {
          pass.type = "text";
      } else {
          pass.type = "password";
      }
    }

    // Show password for signup form
    function toView() {
      let showSignupPass = document.getElementById('showSignupPass');
      let signupPass = document.getElementById('signupPass');

      if (showSignupPass.checked) {
          signupPass.type = "text";
      }
      else {
          signupPass.type = "password";
      }
    }
 </script>
 <script src="js/bootstrap.bundle.js"></script>
</body>
</html>