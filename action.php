<?php
session_start();

if (!empty($_POST)) {
    
    $hasErrors = false;
    $errorMessages = [];
    
    if (!isset($_POST['email']) || $_POST['email'] === '') {
        $errorMessages[] = "Поле email не передано или пустое";
        $hasErrors = true;
    }
    
    if (!isset($_POST['password']) || $_POST['password'] === '') {
        $errorMessages[] = "Поле password не передано или пустое";
        $hasErrors = true;
    }
    
    if (!isset($_POST['name']) || $_POST['name'] === '') {
        $errorMessages[] = "Поле name не передано или пустое";
        $hasErrors = true;
    }
    
    if (!isset($_POST['gender']) || $_POST['gender'] === '') {
        $errorMessages[] = "Поле gender не передано или пустое";
        $hasErrors = true;
    }
    
    if ($hasErrors) {
        ?>
        <!DOCTYPE html>
        <html lang="ru">
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="style.css">
            <title>Ошибка регистрации</title>
        </head>
        <body>
            <div class="error-container">
                <h2>Ошибки валидации:</h2>
                <div class="error-messages">
                    <?php foreach ($errorMessages as $error): ?>
                        <div class="error-message"><?php echo $error; ?></div>
                    <?php endforeach; ?>
                </div>
                <div class="nav">
                    <a href="index.php">Вернуться к регистрации</a>
                </div>
            </div>
        </body>
        </html>
        <?php
    } else {
        $_SESSION['user_name'] = $_POST['name'];
        $_SESSION['user_email'] = $_POST['email'];
        $_SESSION['user_gender'] = $_POST['gender'];
        
        header('Location: calculator.php');
        exit;
    }
    
} else {
    header('Location: index.php');
    exit;
}
?>
