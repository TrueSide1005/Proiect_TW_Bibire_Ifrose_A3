<!DOCTYPE html>
<html lang="ro">

<head>
    <title>Login Page</title>
    <meta name="description" content="This is my page">
    <link rel="shortcut icon" type="image/x-icon" href="/public/images/flag.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/public/css/menu.css" />
    <script async language="javascript" type="text/javascript" src="/public/js/pass.js"></script>
    <link rel="stylesheet" type="text/css" href="/public/css/auth.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php session_start();
    require_once  __DIR__ . '/../../components/header.php' ?>
    <div class="image-div">
        <div class="center">
            <b>
                <h2>Log in! :)</h2>
            </b>
            <form class="form" action="" method="post" id="add_student_form">
                <p>
                    <label for="username"><B>Nume:</B></label>
                    <br><input type="text" id="username" name="Nume" placeholder="Numele de utilizator...">
                </p>
                <p>
                    <label for="pass"><b>Parola:</b></label>
                    <br><input type="password" id="pass" name="Parola" placeholder="Parola...">
                    <input type="checkbox" id="show" onclick="myFunction()">
                    <label for="show">Show Password</label>
                </p>
                <?php
                global $conn;
                require __DIR__ . '/../../config.php';
                // Always start this first
                if (session_status() == 2 && isset($_SESSION['user_id'])) {
                    echo "<div id=\"alert\">
                        <span id=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
                        <strong>Log in esuat!</strong> Sunteti deja conectat!
                      </div>";
                } else {
                    if (!empty($_POST)) {
                        if (isset($_POST['Nume']) && isset($_POST['Parola'])) {
                            // Getting submitted user data from database
                            //$con = new mysqli($CONFIG["servername"], $CONFIG["username"], $CONFIG["password"], $CONFIG["db"]);
                            $stmt = $conn->prepare("SELECT parola FROM registru WHERE nume = ?");
                            $stmt->bind_param("s", $_POST['Nume']);
                            $stmt->execute();
                            $stmt->bind_result($pass);
                            $stmt->fetch();
                            $stmt->close();
                            // Verify user password and set $_SESSION
                            if (is_string($pass)) {
                                if (password_verify($_POST['Parola'], $pass)) {
                                    $stmt = $conn->prepare("SELECT id FROM registru WHERE nume = ? AND parola = ?");
                                    $stmt->bind_param("ss", $_POST['Nume'], $pass);
                                    $stmt->execute();
                                    $stmt->bind_result($id);
                                    $stmt->fetch();
                                    $stmt->close();
                                    $_SESSION['user_id'] = $id;
                                    $s = session_status();
                                    if ($s == 2) {
                                        //daca parola e corecta se seteaza $_SESSION si se afiseaza mesaj de logare
                                        if (is_numeric($_SESSION['user_id'])) {
                                            header('Location:/');
                                        }
                                    }
                                } else { //daca parola e incorecta se afiseaza un mesaj de eroare la logare
                                    echo "<div id=\"alert\">
                                    <span id=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
                                    <strong>Log in esuat!</strong> Username sau parola incorecte!
                                    </div>";
                                }
                            } else { //daca nu au fost introduse toate datele se afiseaza un mesaj de eroare
                                echo "<div id=\"alert\">
                                <span id=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
                                <strong>Log in esuat!</strong> Username sau parola incorecte!
                                </div>";
                            }
                        }
                    }
                } ?>
                <p>
                    <input id="submit" type="submit" name="submit" value="Login" formtarget="_self">
                    <label for="submit" class="invisible">S</label>
                </p>
            </form>

        </div>
    </div>
</body>
<script async src="/public/js/menu.js"></script>
</html>