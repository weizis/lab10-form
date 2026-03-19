<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
</head>
<body>
    <div class="calculator">
        <h2>Калькулятор</h2>
        
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
    </div>
</body>
</html>
