<!DOCTPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
</head>
<body>
    <form action="action.php" method="post">
        <h2>Регистрация</h2>
        
        <div>
            <label for="name">Имя:</label>
            <input type="text" id="name" name="name" placeholder="Введите имя" required>
        </div>
        
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Введите email" required>
        </div>
        
        <div>
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" placeholder="Введите пароль" required>
        </div>
        
        <div>
            <label for="gender">Пол:</label>
            <select id="gender" name="gender" required>
                <option value="">Выберите пол</option>
                <option value="male">Мужской</option>
                <option value="female">Женский</option>
                <option value="other">Другой</option>
            </select>
        </div>
        
        <button type="submit">Зарегистрироваться</button>
    </form>
</body>
</html>
