<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5a46d1bff8.js" crossorigin="anonymous"></script>
    <title>Xaky</title>
</head>
<body>

                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/main">Хаку</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 top-menu">

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Роллы и Суши &blacktriangledown;
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="/products.branded">Фирменные роллы</a></li>
                                        <li><a class="dropdown-item" href="/products.baked">Запечённые роллы</a></li>
                                        <li><a class="dropdown-item" href="/products.cold">Холодные роллы</a></li>
                                        <li><a class="dropdown-item" href="/products.tempura">Темпурные роллы</a></li>
                                        <li><a class="dropdown-item" href="/products.classic">Классические роллы</a></li>
                                        <li><a class="dropdown-item" href="/products.sushi">Суши</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/products.combo">Комбо Наборы</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/products.pizza">Пицца</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/products.sets">Сеты</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/products.udon">Удон</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/products.burgers">Бургеры</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Ещё &blacktriangledown;
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="/products.beverages">Напитки</a></li>
                                        <li><a class="dropdown-item" href="/products.snacks">Закуски</a></li>
                                        <li><a class="dropdown-item" href="/products.additional">Дополнительное</a></li>
                                    </ul>
                                </li>
                            </ul>


                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-user"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Регистрация</a></li>
                                        <li><a class="dropdown-item" href="#">Авторизация</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">

                                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modal-cart">
                                        <span class="position-absolute top-2 start-99 translate-middle badge rounded-pill bg-danger card-number">
                                            2
                                        </span>
                                        <i class="fa-solid fa-cart-shopping b"></i>
                                    </a>

                                    <div class="modal fade" id="modal-cart" tabindex="-1" aria-labelledby="modal-cartLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header bg-secondary text-white">
                                                    <h5 class="modal-title" id="exampleModalLabel">Корзина</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <table class="table">
                                                        <tbody>
                                                        <tr>
                                                            <td><img src="https://sun9-61.userapi.com/impg/YiYH4U6iAuYKiDqagSCMkhUfCX7lmDecoAaX5A/OHKBvKGYdBk.jpg?size=600x600&quality=95&sign=dc8c8cc9febdef08509c1922288057a7&type=album" alt=""></td>
                                                            <td><a href="#">Каноха</a></td>
                                                            <td>$420</td>
                                                            <td>1</td>
                                                        </tr>

                                                        <tr>
                                                            <td><img src="https://sun9-50.userapi.com/impg/1kMobRuBM4gOLa6L2H5MZExmDGnIQK9hYrMQEA/lWTyZ_bi5bA.jpg?size=584x389&quality=95&sign=d2a589eca9aecd40999f6afb3510c866&type=album" alt=""></td>
                                                            <td><a href="#">Сяке темпура</a></td>
                                                            <td>$400</td>
                                                            <td>3</td>
                                                        </tr>

                                                        <tr>
                                                            <td><img src="https://sun9-63.userapi.com/impg/sf83C5oc4Or8QfKlwmJI0cbEbmXy25W6Ef4rtw/ZKvuY6emObU.jpg?size=970x642&quality=95&sign=f4be901cf330c759f4f430a3bf3beb8e&type=album" alt=""></td>
                                                            <td><a href="#">Самурай</a></td>
                                                            <td>$440</td>
                                                            <td>5</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary">Оформить заказ</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>


                <div class="container-fluid my-carousel">
                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel"
                         data-bs-interval="5000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://cdn.assets.zenky.io/uploads/96848146-dbfa-4964-b9db-ad1bd47f75f0/conversions/15-samovyvoz-hd_webp.webp" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://cdn.assets.zenky.io/uploads/9a15e333-371c-4993-b8d2-2234782c4cf5/conversions/roll-v-podarok-1-hd_webp.webp" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://cdn.assets.zenky.io/uploads/9c29f2b9-317f-41ff-bf2c-7efde9d206f6/conversions/biznes-lanci-hd_webp.webp" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <section class="main-content">
                    <div class="container">
                        <div class="title pb-3">
                            <h2>Рекомендуем</h2>
                        </div>
                        <div class="row">

                            <div class="col-lg-3 col-sm-6 mb-3">
                                <div class="product-card">
                                    <div class="product-thump">
                                        <a href="#"><img src="https://sun9-63.userapi.com/impg/sf83C5oc4Or8QfKlwmJI0cbEbmXy25W6Ef4rtw/ZKvuY6emObU.jpg?size=970x642&quality=95&sign=f4be901cf330c759f4f430a3bf3beb8e&type=album" alt=""></a>
                                    </div>
                                    <div class="product-details">
                                        <h4><a href="#">Самурай</a></h4>
                                        <p>Состав: Пицца 4 сыра 1/2+ Пицца Чесночная 1/2 35 см, Пицца Пепперони 1/2+ Гавайская 1/2 35 см., Киото 300гр., Филадельфия 280гр., Тори кранч 310гр</p>

                                        <div class="product-bottom-details d-flex justify-content-between">
                                            <div class="product-price">$440</div>
                                            <div class="product-links">
                                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 mb-3">
                                <div class="product-card">
                                    <div class="product-thump">
                                        <a href="#"><img src="https://sun9-63.userapi.com/impg/sf83C5oc4Or8QfKlwmJI0cbEbmXy25W6Ef4rtw/ZKvuY6emObU.jpg?size=970x642&quality=95&sign=f4be901cf330c759f4f430a3bf3beb8e&type=album" alt=""></a>
                                    </div>
                                    <div class="product-details">
                                        <h4><a href="#">Самурай</a></h4>
                                        <p>Творожный сыр, курица, огурец, унаги</p>

                                        <div class="product-bottom-details d-flex justify-content-between">
                                            <div class="product-price">$440</div>
                                            <div class="product-links">
                                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 mb-3">
                                <div class="product-card">
                                    <div class="product-thump">
                                        <a href="#"><img src="https://sun9-63.userapi.com/impg/sf83C5oc4Or8QfKlwmJI0cbEbmXy25W6Ef4rtw/ZKvuY6emObU.jpg?size=970x642&quality=95&sign=f4be901cf330c759f4f430a3bf3beb8e&type=album" alt=""></a>
                                    </div>
                                    <div class="product-details">
                                        <h4><a href="#">Самурай</a></h4>
                                        <p>Творожный сыр, курица, огурец, унаги</p>

                                        <div class="product-bottom-details d-flex justify-content-between">
                                            <div class="product-price">$440</div>
                                            <div class="product-links">
                                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 mb-3">
                                <div class="product-card">
                                    <div class="product-thump">
                                        <a href="#"><img src="https://sun9-63.userapi.com/impg/sf83C5oc4Or8QfKlwmJI0cbEbmXy25W6Ef4rtw/ZKvuY6emObU.jpg?size=970x642&quality=95&sign=f4be901cf330c759f4f430a3bf3beb8e&type=album" alt=""></a>
                                    </div>
                                    <div class="product-details">
                                        <h4><a href="#">Самурай</a></h4>
                                        <p>Творожный сыр, курица, огурец, унаги</p>

                                        <div class="product-bottom-details d-flex justify-content-between">
                                            <div class="product-price">$440</div>
                                            <div class="product-links">
                                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 mb-3">
                                <div class="product-card">
                                    <div class="product-thump">
                                        <a href="#"><img src="https://sun9-63.userapi.com/impg/sf83C5oc4Or8QfKlwmJI0cbEbmXy25W6Ef4rtw/ZKvuY6emObU.jpg?size=970x642&quality=95&sign=f4be901cf330c759f4f430a3bf3beb8e&type=album" alt=""></a>
                                    </div>
                                    <div class="product-details">
                                        <h4><a href="#">Самурай</a></h4>
                                        <p>Творожный сыр, курица, огурец, унаги</p>

                                        <div class="product-bottom-details d-flex justify-content-between">
                                            <div class="product-price">$440</div>
                                            <div class="product-links">
                                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 mb-3">
                                <div class="product-card">
                                    <div class="product-thump">
                                        <a href="#"><img src="https://sun9-63.userapi.com/impg/sf83C5oc4Or8QfKlwmJI0cbEbmXy25W6Ef4rtw/ZKvuY6emObU.jpg?size=970x642&quality=95&sign=f4be901cf330c759f4f430a3bf3beb8e&type=album" alt=""></a>
                                    </div>
                                    <div class="product-details">
                                        <h4><a href="#">Самурай</a></h4>
                                        <p>Творожный сыр, курица, огурец, унаги</p>

                                        <div class="product-bottom-details d-flex justify-content-between">
                                            <div class="product-price">$440</div>
                                            <div class="product-links">
                                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 mb-3">
                                <div class="product-card">
                                    <div class="product-thump">
                                        <a href="#"><img src="https://sun9-63.userapi.com/impg/sf83C5oc4Or8QfKlwmJI0cbEbmXy25W6Ef4rtw/ZKvuY6emObU.jpg?size=970x642&quality=95&sign=f4be901cf330c759f4f430a3bf3beb8e&type=album" alt=""></a>
                                    </div>
                                    <div class="product-details">
                                        <h4><a href="#">Самурай</a></h4>
                                        <p>Творожный сыр, курица, огурец, унаги</p>

                                        <div class="product-bottom-details d-flex justify-content-between">
                                            <div class="product-price">$440</div>
                                            <div class="product-links">
                                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <footer>
                    <section class="footer">
                        <div class="container">
                            <div class="row">

                                <div class="col-md-3 col-6">
                                    <h4> Информация </h4>
                                    <ul class="list-unstyled">
                                        <li><a href="#"> Главная </a></li>
                                        <li><a href="#"> О ресторане </a></li>
                                        <li><a href="#"> Доставка и акции </a></li>
                                        <li><a href="#"> Контакты </a></li>
                                    </ul>
                                </div>

                                <div class="col-md-3 col-6">
                                    <h4> Время работы </h4>
                                    <ul class="list-unstyled">
                                        <li>Пгт. Дульдурга, ул. Лесная, 29</li>
                                        <li>пн-вс: 11:00 - 21:00</li>
                                        <li>Без перерыва</li>
                                    </ul>
                                </div>

                                <div class="col-md-3 col-6">
                                    <h4>Контакты</h4>
                                    <ul class="list-unstyled">
                                        <li><a href="tel: +7-924-507-88-51">Дульдурга: +7-924-507-88-51 </a></li>
                                        <li><a href="tel: 50-00-90">Новокручининск: 50-00-90</a></li>
                                    </ul>
                                </div>


                                <div class="col-md-3 col-6">
                                    <h4>Мы в сети</h4>
                                    <div class="footer-icons">
                                        <a href="#">Группа Дульдурга: <i class="fa-brands fa-viber"></i></a> <br>
                                        <a href="#">Группа Новокручининск: <i class="fa-brands fa-viber"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                </footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

<style>

    html {
        font-size: 18px;
    }

    body {
        font-family: "Roboto", sans-serif;
        font-size: 18px;
        font-weight: 400;
        color: #000000;
        background-color: #ffffff;
        min-width: 320px;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    section {
        padding: 50px 0;
    }

    a {
        color: #111;
    }

    a:hover {
        color: #555;
    }

    /* Header */
    .navbar-dark .navbar-nav .nav-link {
        font-weight: 500;
        text-transform: uppercase;
    }

    .navbar-nav .dropdown-menu {
        right: 0;
        left: auto;
    }

    .top-menu li a::after {
        content: '';
        display: block;
        width: 100%;
        background-color: #ffffff;
        height: 1px;
        transition: all .3s;
        transform: scale(0);
    }

    .top-menu li a:hover::after {
        transform: scale(1);
    }

    .modal-body img{
        max-width: 100px;
        max-height: 80px;
    }
    /* Header */

    /*Carousel*/

    .my-carousel {
        padding: 0;
    }

    .my-carousel .carousel-item {
        display: flex;
        max-height: 600px;
    }

    .my-carousel .carousel-item img {
        object-fit: cover;
    }
    /*Carousel*/

    /*Product cart*/

    .product-card {
        box-shadow: 0 2px 5px 0 rgba(0,0,0,0.06);
        transition: all .3s;
    }

    .product-card:hover {
        box-shadow: 0 14px 30px -15px rgba(0,0,0,0.75);
    }

    .product-thump a {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 200px;
        padding: 20px;
    }

    .product-thump img {
        max-width: 100%;
        max-height: 100%;
    }

    .product-details {
        padding: 20px;
    }

    .product-details h4 a {
        font-weight: 500;
        display: block;
        height: 60px;
        overflow: hidden;
        text-decoration: none;
    }

     .product-details p {
         font-size: 15px;
         margin-bottom: 5px;
         color: #999;
         height: 44px;
         overflow: hidden;
     }

     .product-bottom-details {
         overflow: hidden;
         border-top: 1px solid #eee;
         padding-top: 20px;
     }

     .product-price {
         font-size: 18px;
         color: #ee6e73;
         font-weight: 600;
     }

     .product-links a {
         font-size: 20px;
         margin-left: 10px;
     }

     .title {
         font-family: sans-serif;
     }
    /*Product cart*/

    /*Footer*/
    .footer {
        background-color: #343434;
    }

    .footer h4 {
        color: #ccc;
        text-transform: uppercase;
        font-size: 16px;
        border-bottom: 1px solid #666;
        padding-bottom: 3px;
    }

    footer a {
        text-decoration: none;
        transition: all .3s;

    }

    footer a:hover {
        color: #fff;
        text-decoration: underline;
        transition: all .3s;
    }

    footer a, .footer li {
        color: #c8c8c8;
    }

    .footer li a {
        display: block;
    }

    .footer-icons a {
        display: inline-block;
        margin-right: 15px;
        font-size: 20px;
    }
    /*Footer*/
</style>
