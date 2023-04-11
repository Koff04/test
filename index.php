<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test php</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<?php require "blocks/header.php"?> <!--Подключение шапки на все странички с помощью одного файла и пхп-->
    
        <div class="container mt-5 d-flex flex-wrap">

        <div class="card mb-5 rounded-3 shadow-sm ">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Турция</h4>
                        </div>
                        <div class="card-body">
                            <img src="img/1.png" class="img-thumbnail">
                            
                            <ul class="list-unstyled mt-3 mb-4">
                            <li>Увлекательная поездка в турцию</li>
                            <li>Хороший Гид</li>
                            <li>Отличные варианты отелей</li>
                            <li>От 120,000 Руб.</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
                        </div>
                </div>

        <div class="card mb-5 rounded-3 shadow-sm ">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Китай</h4>
                        </div>
                        <div class="card-body">
                            <img src="img/2.png" class="img-thumbnail">
                            
                            <ul class="list-unstyled mt-3 mb-4">
                            <li>Мягкий климат и богатая культура.</li>
                            <li>Вот что вас ждет в этой поездке</li>
                            <li>от 90,000 руб.</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
                        </div>
                </div>

        <div class="card mb-5 rounded-3 shadow-sm ">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Япония</h4>
                        </div>
                        <div class="card-body">
                            <img src="img/3.png" class="img-thumbnail">
                            
                            <ul class="list-unstyled mt-3 mb-4">
                            <li>Япония прорадитель аниме культуры</li>
                            <li>Тут вас ждут фестивали и тематические парады</li>
                            <li>И очень приятный климат</li>
                            <li>от 220,000 руб.</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
                        </div>
                </div>

        <div class="card mb-5 rounded-3 shadow-sm ">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">ОАЭ</h4>
                        </div>
                        <div class="card-body">
                            <img src="img/4.png" class="img-thumbnail">
                            
                            <ul class="list-unstyled mt-3 mb-4">
                            <li>ОАЭ страна шейхов</li>
                            <li>Тут вас ждут увлекательные развлечения</li>
                            <li>Такие как гонки по песчанным дюнам на багги и еще много чего</li>
                            <li>От 800,000 руб.</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
                        </div>
                </div>

        <div class="card mb-5 rounded-3 shadow-sm ">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">США: Нью-Йорк</h4>
                        </div>
                        <div class="card-body">
                            <img src="img/5.png" class="img-thumbnail">
                            
                            <ul class="list-unstyled mt-3 mb-4">
                            <li>Город свободы</li>
                            <li>Но будте аккуратнее, в этом городе большой процент преступности </li>
                            <li></li>
                            <li>От 300,000 руб.</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
                        </div>
                </div>

                <div class="card mb-5 rounded-3 shadow-sm ">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Куба</h4>
                        </div>
                        <div class="card-body">
                            <img src="img/6.jpg" class="img-thumbnail">
                            
                            <ul class="list-unstyled mt-3 mb-4">
                            <li>Камунизм</li>
                            <li>У</li>
                            <li>Берегов</li>
                            <li>Америки</li>
                            <li>От 200,000 руб.</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
                        </div>
                </div>
        </div>

<?php require "blocks/footer.php"?>

</body>
</html>