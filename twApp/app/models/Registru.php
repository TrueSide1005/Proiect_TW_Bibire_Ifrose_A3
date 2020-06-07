<?php

class Registru
{
    function __construct()
    {
        global $conn;
        $nume = filter_input(INPUT_POST, "Nume");
        $email = filter_input(INPUT_POST, "E-mail");
        $parola = filter_input(INPUT_POST, "Parola");
        $judet = filter_input(INPUT_POST, "Judet");
        $create_at = date('Y-m-d H:i:s');
        $update_at = date('Y-m-d H:i:s');
        # Verify that eveything has been entered
        if ($nume == null || $email == null || $parola == null || $judet == null) {
            $err_msg = "All Values Not Entered";
            require __DIR__ . '/../db_error.php';

            # Validate Data with Regular Expressions

        } elseif (!preg_match("/[a-zA-Z]{0,9}$/", $nume)) {
            $err_msg = "Name Not Valid";
            require __DIR__ . '/../db_error.php';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $err_msg = "Email Not Valid";
            require __DIR__ . '/../db_error.php';
        } else {
            // connect to database
            require __DIR__ . '/../config.php';
            $stmt = $conn->prepare("SELECT id FROM registru WHERE nume = ?");
            $stmt->bind_param("s", $nume);
            $stmt->execute();
            $stmt->bind_result($id);
            $stmt->fetch();
            $stmt->close();
            $stmt1 = $conn->prepare("SELECT id FROM registru WHERE adresa_email = ?");
            $stmt1->bind_param("s", $email);
            $stmt1->execute();
            $stmt1->bind_result($id1);
            $stmt1->fetch();
            $stmt1->close();
            
            //verify the unicity of name and email adress
            if (is_numeric($id)) {
                $err_msg = "Name already in use";
                require __DIR__ . '/../db_error.php';
            } elseif (is_numeric($id1)) {
                $err_msg = "Email already in use";
                require __DIR__ . '/../db_error.php';
            } else {
                # Create query using : to add parameters to the statement
                $query = 'INSERT INTO registru (nume, adresa_email, parola, judet, create_at, update_at) VALUES
               (?, ? , ?, ?, ?, ?)';

                $stm = $conn->prepare($query);
                $parola=password_hash($parola, PASSWORD_BCRYPT);
                # Bind values to parameters in the prepared statement
                $stm->bind_param("ssssss", $nume, $email, $parola, $judet, $create_at, $update_at);
                $stm->execute();
                $stm->close();
                header('Location: http://localhost/twApp/');
            }
        }
    }
}
