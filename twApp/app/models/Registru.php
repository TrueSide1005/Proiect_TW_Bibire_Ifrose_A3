<?php

function aduga()
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
        $err_msg = "All Values Not Entered<br>";

        require __DIR__ . '/../db_error.php';

        # Validate Data with Regular Expressions

    } elseif (!preg_match("/[a-zA-Z]{3,100}$/", $nume)) {
        $err_msg = "Name Not Valid<br>";
        require __DIR__ . '/../db_error.php';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $err_msg = "Email Not Valid<br>";
        require __DIR__ . '/../db_error.php';
    } else {
        // connect to database
        require __DIR__ . '/../config.php';
        echo $nume;
        # Create your query using : to add parameters to the statement
        $query = 'INSERT INTO registru (nume, adresa_email, parola, judet, create_at, update_at) VALUES
               (?, ? , ?, ?, ?, ?)';
      
        $stm = $conn->prepare($query);

        # Bind values to parameters in the prepared statement
        $stm->bind_param("ssssss", $nume, $email, $parola, $judet, $create_at, $update_at);
        $stm->execute();
        $stm->close();
    
    }
}
