<?php

global $conn;
require __DIR__ . '/../../config.php';
// Always start this first


if (!empty($_POST)) {
    if (isset($_POST['Nume']) && isset($_POST['Parola'])) {
        // Getting submitted user data from database
        //$con = new mysqli($CONFIG["servername"], $CONFIG["username"], $CONFIG["password"], $CONFIG["db"]);
        $stmt = $conn->prepare("SELECT * FROM registru WHERE nume = ?");
        $stmt->bind_param('s', $_POST['Nume']);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_object();

        // Verify user password and set $_SESSION
        if ($_POST['Parola'] == $user->parola && $_POST['Nume'] == $user->nume) {
            session_start();
            $_SESSION['user_id'] = $user->id;
            header('Location: http://localhost/twApp/');
        } else {
            echo 'Invalid UserName or Password';
        }
    }
}


/*if(isset($_POST['Login']))   // it checks whether the user clicked login button or not 
{
     $user = $_POST['user'];
     $pass = $_POST['pass'];

     $query = "SELECT Judet, NumarTotal  FROM ratamartie2020";

//execute query
$result = mysqli_query($conn, $query);
      if($user == "Ank" && $pass == "1234")  // username is  set to "Ank"  and Password   
         {                                   // is 1234 by default     

          $_SESSION['use']=$user;


         echo '<script type="text/javascript"> window.open("home.php","_self");</script>';            //  On Successful Login redirects to home.php

        }

        else
        {
            echo "invalid UserName or Password";        
        }
}
 ?>*/



?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/twApp/public/css/menu.css" />
    <script language="javascript" type="text/javascript" src="/twApp/public/js/pass.js"></script>
    <link rel="stylesheet" type="text/css" href="/twApp/public/css/auth.css" />
</head>

<body>
    <header>
        <div class="barmenu">
            <a href="/twApp/home">
                <img class="logo" src="/twApp/public/images/s.png" alt="Sigla" style="height:3em">
            </a>
            <div class="sign">

                <a href="register"> <button class="log" type="button">
                        Sign in
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
                    <br><input type="password" id="pass" name="Parola" placeholder="Parola..."><input type="checkbox" onclick="myFunction()">Show Password
                </p>

                <p>
                    <input type="submit" name="submit" value="Login" formtarget="_self">
                </p>
            </form>
        </div>
    </div>
    </div>
</body>

</html>