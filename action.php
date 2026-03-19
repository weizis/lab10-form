<?php
if (!empty($_POST)) {
    
    $hasErrors = false;
    
    if (!isset($_POST['email']) || $_POST['email'] === '') {
        echo "Поле email не передано или пустое<br>";
        $hasErrors = true;
    }
    
    if (!isset($_POST['password']) || $_POST['password'] === '') {
        echo "Поле password не передано или пустое<br>";
        $hasErrors = true;
    }
    
    if (!$hasErrors) {
        echo "Имя: " . $_POST['name'] . "<br>";
        echo "Email: " . $_POST['email'] . "<br>";
    }
} else {
    echo "Форма не была отправлена";
}
?>
