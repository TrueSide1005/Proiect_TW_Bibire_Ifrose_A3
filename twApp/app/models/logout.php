<?php
session_start();
//daca este setat id-ul user-ului, acesta este conectat si se poate deloga 
if (session_status() == 2 && isset($_SESSION['user_id'])) {
    session_unset();
    session_destroy();
    echo "V-ati delogat!";
} else { //altfel nu este logat
    echo "Nu sunteti logat!";
}
