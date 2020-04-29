<?php
# Get data to input

DEFINE ('DB_USER', 'userweb');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_PASSWORD', 'baza99');
class Registru
{

    public $nume;
    public $email;
    public $parola;
    public $judet;

    # Create a timestamp for now
    public $create_at;
    public $update_at;
    private static $conexiune_bd = NULL;

    public function obtine_conexiune(){
        if (is_null(self::$conexiune_bd))
        {
            self::$conexiune_bd = new PDO('mysql:host=localhost;dbname=autentificare', DB_USER, DB_PASSWORD);
          //  echo 'connected to database\n';
        }
        return self::$conexiune_bd;

    }

    public function aduga()
    {
        $nume = filter_input(INPUT_POST, "Nume");
        $email = filter_input(INPUT_POST, "E-mail");
        $parola = filter_input(INPUT_POST, "Parola");
        $judet = filter_input(INPUT_POST, "Judet");
        $create_at = date('Y-m-d H:i:s');
        $update_at = date('Y-m-d H:i:s');
        # Verify that eveything has been entered
        /*if ($this->nume == null || $this->email == null ||$this->parola == null || $this->judet == null) {
            # Print an error if values aren't entered
            $err_msg = "All Values Not Entered<br>";
            //include('db_error.php');
            //echo 'model';
            # Validate Data with Regular Expressions

        } elseif (!preg_match("/[a-zA-Z]{3,100}$/", $this->nume)) {
            $err_msg = "Name Not Valid<br>";
           // include('db_error.php');
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $err_msg = "Email Not Valid<br>";
            //include('db_error.php');
        } else {*/
           // echo 'execut insert\n';
            //require_once __DIR__ . '/../' . 'config.php';
            # Create your query using : to add parameters to the statement
            $query = 'INSERT INTO registru (nume, adresa_email, parola, judet, create_at, update_at) VALUES
               (:nume, :adresa_email, :parola, :judet, :create_at, :update_at)';
             //$cerere = $this->obtine_conexiune()->prepare($sql);
            # Create a PDOStatement object
            //$stm = $db->prepare($query);
            $stm = $this->obtine_conexiune()->prepare($query);
            # Bind values to parameters in the prepared statement

            $stm->bindValue(':nume', $nume); //echo 'nume';
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
               // echo '    !';
                print_r($stm->errorInfo()[2]);
            }
        //}
    }
}
