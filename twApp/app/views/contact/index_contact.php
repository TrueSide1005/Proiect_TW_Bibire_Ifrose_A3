<!DOCTYPE html>
<html>

<head>
    <title>Contact</title>
    <meta name="description" content="This is my page">
    <link rel="shortcut icon" type="image/x-icon" href="/public/images/flag.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/public/css/menu.css" />
    <link rel="stylesheet" type="text/css" href="/public/css/contact.css" />
</head>

<body>
    <?php session_start();
    require_once  __DIR__ . '/../../components/header.php' ?>
    <div class="center">
        <b>
            <h2>Contact</h2>
        </b>
        <form class="form" action="" method="post" id="add_student_form">

            <p>
                <label for="username"><B>Adresa de email:</B></label>
                <br><input type="text" id="email" name="E-mail" placeholder="Adresa de email ...">
            </p>

            <p>
                <label for="username"><B>Problema:</B></label>

                <br><textarea id="problem" name="Semnalare" placeholder="Problema..." style="height:200px"></textarea>

            </p>

            <?php
            global $conn;

            // Always start this first


            if (!isset($_SESSION['user_id'])) {
                echo "<div id=\"alert\">
                        <span id=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
                        <strong>Conectațivă pentru a semnala problema!</strong>
                      </div>";
            } else {
                $prob = filter_input(INPUT_POST, "Semnalare");
                $email = filter_input(INPUT_POST, "E-mail");

                if (isset($_POST['E-mail']) && isset($_POST['Semnalare'])) {
                    require __DIR__ . '/../../config.php';
                    // Getting submitted user data from database
                    //$con = new mysqli($CONFIG["servername"], $CONFIG["username"], $CONFIG["password"], $CONFIG["db"]);
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $stmt = $conn->prepare("SELECT adresa_email FROM registru WHERE id = ?");
                        $stmt->bind_param("s", $_SESSION['user_id']);
                        $stmt->execute();
                        $stmt->bind_result($adr);
                        $stmt->fetch();
                        $stmt->close();
                        if ($email === $adr) {
                            $query = 'INSERT INTO contact (adresa_email, problema) VALUES (?, ?)';
                            $stm = $conn->prepare($query);
                            $stm->bind_param("ss", $email, $prob);
                            $stm->execute();
                            $stm->close();
                            echo "<div id=\"good\">
                                            <span id=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
                                            <strong>Va multumim pentru feedback!</strong>
                                            </div>";
                        } else { //daca parola e incorecta se afiseaza un mesaj de eroare la logare
                            echo "<div id=\"alert\">
                                            <span id=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
                                            <strong>Adresa de email incorecta!</strong>
                                            </div>";
                        }
                    } else {
                        echo "<div id=\"alert\">
                            <span id=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
                            <strong>Completati toate campurile!</strong>
                            </div>";
                    }
                }
            }
            ?>
            <p>
                <input id="submit" type="submit" name="submit" value="Semnaleaza" formtarget="_self">
                <label for="submit" class="invisible">S</label>
            </p>
        </form>
    </div>
</body>

</html>