<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ-панель ресторана</title>
<body>
<header>
    <h1>Админ-панель</h1>
    <nav>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Меню</a></li>
            <li><a href="#">Заказы</a></li>
            <li><a href="#">Клиенты</a></li>
            <li><a href="#">Аналитика</a></li>
            <li><a href="#">Настройки</a></li>
            <li><a href="#">Выход</a></li>
        </ul>
    </nav>
</header>

<main>
    <section class="dashboard">
        <h2>Dashboard</h2>
        <div class="key-indicators">
            <div class="indicator">
                <h3>Количество заказов</h3>
                <p>125</p>
            </div>
            <div class="indicator">
                <h3>Выручка</h3>
                <p>150 000 руб.</p>
            </div>
            <div class="indicator">
                <h3>Популярные блюда</h3>
                <ul>
                    <li>Пицца Маргарита</li>
                    <li>Цезарь салат</li>
                    <li>Тирамису</li>
                </ul>
            </div>
        </div>
        <div class="charts">
            <!-- Графики и диаграммы -->
        </div>
    </section>

</main>

<footer>
    <p>&copy; 2023 Ресторан "Название"</p>
</footer>
<script src="script.js"></script>
</body>
</html>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    header {
        background-color: #333;
        color: #fff;
        padding: 1em 0;
        text-align: center;
    }

    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    nav ul li {
        display: inline;
        margin: 0 1em;
    }

    nav ul li a {
        text-decoration: none;
        color: #fff;
    }

    main {
        padding: 2em;
    }

    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 1em 0;
        position: fixed;
        bottom: 0;
        width: 100%;
    }

    /* Стили Dashboard */
    .dashboard {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        grid-gap: 2em;
    }

    .key-indicators {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        grid-gap: 1em;
    }

    .indicator {
        background-color: #fff;
        padding: 1em;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .charts {
        background-color: #fff;
        padding: 1em;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    /* Стили для таблиц, форм и других элементов */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1em;
    }

    th, td {
        text-align: left;
        padding: 0.5em;
        border: 1px solid #ddd;
    }

    th {
        background-color: #f0f0f0;
    }

    form {
        margin-top: 1em;
    }

    label {
        display: block;
        margin-bottom: 0.5em;
    }

    input[type="text"], input[type="email"], textarea {
        width: 100%;
        padding: 0.5em;
        border: 1px solid #ddd;
        border-radius: 3px;
        margin-bottom: 1em;
    }

    button {
        background-color: #5cb85c;
        color: #fff;
        padding: 0.5em 1em;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    button:hover {
        background-color: #4cae4c;
    }
</style>
