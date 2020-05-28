<?php

$CONFIG = [
    'servername' => "localhost",
    'username' => "userweb",
    'password' => 'baza99',
    'db' => 'autentificare'
];
// Always start this first
session_start();

if (!empty($_POST)) {
    if (isset($_POST['Nume']) && isset($_POST['Parola'])) {
        // Getting submitted user data from database
        $con = new mysqli($CONFIG["servername"], $CONFIG["username"], $CONFIG["password"], $CONFIG["db"]);
        $stmt = $con->prepare("SELECT * FROM registru WHERE nume = ?");
        $stmt->bind_param('s', $_POST['Nume']);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_object();

        // Verify user password and set $_SESSION
        if (password_verify($_POST['Parola'], $user->parola)) {
            $_SESSION['user_id'] = $user->id;
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/twApp/public/css/menu.css" />
    <link rel="stylesheet" type="text/css" href="/twApp/public/css/auth.css" />
    <script language="javascript" type="text/javascript" src="/twApp/public/js/pass.js"></script>
</head>

<body>
    <header>
        <div class="barmenu">
            <a href="/twApp/home">
                <img class="logo" src="/twApp/public/images/s.png" alt="Sigla" style="height:3em">
            </a>
            <div class="sign">

                <a href="register"> <button class="log" type="button">
                        Sign up
                    </button> </a>
                <a href="login"><button class="log" type="button">
                        Log in
                    </button> </a>
            </div>

        </div>
    </header>

    <div class="image-div">
        <div class="center">
            <b>
                <h2>Log in! :)</h2>
            </b>
            <form action="" method="post" id="add_student_form">
                <p>
                    <label for="name"><B>Nume:</B></label>
                    <br><input type="text" id="username" name="Nume" placeholder="Numele de utilizator...">
                </p>
                <p>
                    <label for="pass"><b>Parola:</b></label>
                    <br><input type="password" id="pass" name="Parola" placeholder="Parola..."> <input type="checkbox" onclick="myFunction()"> Show Password
                </p>

                <p>
                    <input type="submit" name="submit" value="Login" formtarget="_self">
                </p>
            </form>
        </div>
    </div>
    </div>
</body>
<script src="/twApp/public/js/pass.js"></script>

</html>