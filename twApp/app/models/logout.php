<?php
session_start();
if (session_status() == 2 && isset($_SESSION['user_id'])) {
    session_unset();
    session_destroy();
    echo "V-ati delogat!";
} else {
    echo "Nu sunteti logat!";
}