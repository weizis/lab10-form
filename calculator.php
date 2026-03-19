k<?php
session_start();

$userName = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'Гость';
$userEmail = isset($_SESSION['user_email']) ? $_SESSION['user_email'] : '';
$userGender = isset($_SESSION['user_gender']) ? $_SESSION['user_gender'] : '';

$greeting = 'Добро пожаловать';
if ($userGender === 'male') {
    $greeting = 'Добро пожаловать';
} elseif ($userGender === 'female') {
    $greeting = 'Добро пожаловать';
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Калькулятор</title>
</head>
<body>
    <div class="calculator">
        <h2>Калькулятор</h2>
        
        <?php if ($userName !== 'Гость'): ?>
            <div class="welcome-card">
                <div class="welcome-message">
                    <?php echo $greeting; ?>, <strong><?php echo htmlspecialchars($userName); ?></strong>!
                </div>
                <div class="user-info">
                    <div class="info-item">
                        <span class="info-label">Ваш email:</span>
                        <span class="info-value"><?php echo htmlspecialchars($userEmail); ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Ваш пол:</span>
                        <span class="info-value">
                            <?php 
                            if ($userGender === 'male') echo 'Мужской';
                            elseif ($userGender === 'female') echo 'Женский';
                            elseif ($userGender === 'other') echo 'Другой';
                            ?>
                        </span>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        
        <form method="post">
            <input type="number" name="num1" step="any" placeholder="Введите первое число" required>
            <input type="number" name="num2" step="any" placeholder="Введите второе число" required>
            
            <div class="buttons">
                <button type="submit" name="operation" value="add">+</button>
                <button type="submit" name="operation" value="subtract">-</button>
                <button type="submit" name="operation" value="multiply">×</button>
                <button type="submit" name="operation" value="divide">÷</button>
            </div>
        </form>
        
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['operation'])) {
            $num1 = floatval($_POST['num1']);
            $num2 = floatval($_POST['num2']);
            $operation = $_POST['operation'];
            $result = '';
            
            switch ($operation) {
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                case 'divide':
                    if ($num2 == 0) {
                        $result = 'Ошибка: деление на ноль!';
                    } else {
                        $result = $num1 / $num2;
                    }
                    break;
            }
            
            echo "<div class='result'>Результат: $result</div>";
        }
        ?>
        
        <div class="nav">
            <a href="index.php">Выйти и вернуться к регистрации</a>
        </div>
    </div>
</body>
</html>
