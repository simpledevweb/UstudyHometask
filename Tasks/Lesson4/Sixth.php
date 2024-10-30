<?php
$password = "happyyear31";

if (strlen($password) > 8 && preg_match('/\d/', $password)) {
    echo "Parol qabillandi";
} else {
    echo "Parol qabillanbadi";
}