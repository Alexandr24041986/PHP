<?php
session_start();
$var_from_tst = "Var_tst";

if (isset($_SESSION['auth'])) {
    echo "Hello";
}
