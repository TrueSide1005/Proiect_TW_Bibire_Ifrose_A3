<?php
# Get data to input

$email = filter_input(INPUT_POST, "E-mail");
$parola = filter_input(INPUT_POST, "Parola");
$judet = filter_input(INPUT_POST, "Judet");

# Create a timestamp for now
$create_at = date('Y-m-d H:i:s');
$update_at = date('Y-m-d H:i:s');

# Verify that eveything has been entered
if ($email == null || $parola == null || $judet == null) {
    # Print an error if values aren't entered
    $err_msg = "All Values Not Entered<br>";
    include('db_error.php');

    # Validate Data with Regular Expressions
    # Regular Expressions are codes used to match patterns
    # Check if first name contains only characters with a max of 30

} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $err_msg = "Email Not Valid<br>";
    include('db_error.php');
} else {
    require_once('db_connect.php');
    # Create your query using : to add parameters to the statement
    $query = 'INSERT INTO registru (adresa_email, parola, judet, create_at, update_at) VALUES
    ( :adresa_email, :parola, :judet, :create_at, :update_at)';

    # Create a PDOStatement object
    $stm = $db->prepare($query);
    # Bind values to parameters in the prepared statement

    $stm->bindValue(':adresa_email', $email);
    $stm->bindValue(':parola', $parola);
    $stm->bindValue(':judet', $judet);
    $stm->bindValue(':create_at', $create_at);
    $stm->bindValue(':update_at', $update_at);


    # Execute the query and store true or false based on success
    $execute_success = $stm->execute();
    $stm->closeCursor();

    # If an error occurred print the error
    if (!$execute_success) {
        print_r($stm->errorInfo()[2]);
    }
}


