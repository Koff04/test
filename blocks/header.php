<nav class="py-2 bg-light border-bottom">
    <div class="container d-flex flex-wrap">
      <ul class="nav me-auto">
        <li class="nav-item"><a href="index.php" class="nav-link link-dark px-2 active" aria-current="page">Главная</a></li>
        <li class="nav-item"><a href="about.php" class="nav-link link-dark px-2">Контакты</a></li>
      </ul>
      <ul class="nav">
        
        <?php 
            if($_COOKIE['user'] == 'true'): //Если печеньки соотвествуют user, то выведится кнопка Кабинет
        ?>
        <li class="nav-item"><a href="/auth.php" class="nav-link link-dark px-2">Кабинет</a></li>  
        <?php 
            else: //Если нет, то кнопка Войти
        ?> 

        <li class="nav-item"><a href="/auth.php" class="nav-link link-dark px-2">Войти</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>