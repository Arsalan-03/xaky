<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Управление меню</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="menu-container">
    <h2>Меню</h2>

    <div class="menu-section">
        <h3>Раздел меню: <input type="text" id="sectionName" placeholder="Название раздела"></h3>
        <button onclick="addSection()">Добавить раздел</button>

        <ul id="menuItems">
        </ul>
    </div>

    <div class="add-item-form">
        <h3>Добавить блюдо</h3>
        <input type="text" id="itemName" placeholder="Название блюда">
        <textarea id="itemDescription" placeholder="Описание"></textarea>
        <input type="number" id="itemPrice" placeholder="Цена">
        <button onclick="addItem()">Добавить блюдо</button>
    </div>

</div>

<script>
    let menuItems = document.getElementById('menuItems');

    function addSection() {
        let sectionName = document.getElementById('sectionName').value;
        if (sectionName) {
            let newSection = document.createElement('li');
            newSection.className = 'menu-section';
            newSection.innerHTML = `
          <h3>${sectionName}</h3>
          <ul class="section-items"></ul>
        `;
            menuItems.appendChild(newSection);
            document.getElementById('sectionName').value = '';
        }
    }

    function addItem() {
        let itemName = document.getElementById('itemName').value;
        let itemDescription = document.getElementById('itemDescription').value;
        let itemPrice = document.getElementById('itemPrice').value;

        if (itemName && itemDescription && itemPrice) {
            let lastSection = menuItems.lastElementChild;
            let newMenuItem = document.createElement('li');
            newMenuItem.innerHTML = `
          <h4>${itemName}</h4>
          <p>${itemDescription}</p>
          <p>Цена: ${itemPrice} руб.</p>
          <button onclick="deleteItem(this)">Удалить</button>
        `;
            lastSection.querySelector('.section-items').appendChild(newMenuItem);
            document.getElementById('itemName').value = '';
            document.getElementById('itemDescription').value = '';
            document.getElementById('itemPrice').value = '';
        }
    }

    function deleteItem(button) {
        let item = button.parentNode;
        item.remove();
    }
</script>

</body>
</html>

<style>
    .menu-container {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .menu-section {
        margin-bottom: 20px;
    }

    .menu-section h3 {
        margin-bottom: 10px;
    }

    .section-items {
        list-style: none;
        padding: 0;
    }

    .section-items li {
        background-color: #f9f9f9;
        padding: 10px;
        border-bottom: 1px solid #eee;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .add-item-form input,
    .add-item-form textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .add-item-form button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .add-item-form button:hover {
        background-color: #45a049;
    }

    .section-items li button {
        background-color: #f44336;
        color: white;
        padding: 8px 16px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .section-items li button:hover {
        background-color: #d32f2f;
    }
</style>
