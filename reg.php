<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width-device-width, initial-scale1.0">

  <title>Регестрация на сайте</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <!-- #header -->
  <div class="navbar navbar-default">
    <div class='container-fluid'>
      <ul class='nav navbar-nav navbar-right'>
      <li> <a href=reg.php class='navbar-brand'>Зарегестрироваться</a> <li>
          <li> <a href=reg.php class='navbar-brand'>Войти</a> <li>
      </ul>
      <div class="navbar-brand">"Онлайн-школа"</div>
      <ul class = 'nav navbar-nav navbar-left' style="margin-left:50px">
        <li><a href="index.php">На главную</a></li>
        <li><a href="#">Курсы</a></li>
        <li><a href="#">Контакты</a></li>

      </ul>
</div>
    </div>
    <!-- #header -->
<center><h1 style="margin-top:80px">Регестрация</h1></center>
<div class='container' style="margin-top:80px;" >
<div class='row'>
  <div class='col-lg-4 col-lg-offset-4' style="background-color:rgb(51,51,51);" style="margin:10px;" >
  <form>
    <div class="form-group">
      <label for="username">-</label>
      <input type="text" class="form-control" required placeholder="Имя пользователя" id="username">
    </div>
   <div class="form-group">
     <label for="email">-</label>
     <input type="email" class="form-control" required placeholder="Email" id="email">
   </div>
   <div class="form-group">
     <label for="pwd">-</label>
     <input type="password" class="form-control" required placeholder="Пароль" id="pwd">
   </div>
   <div class="form-group">
     <label for="pwdconf">-</label>
     <input type="password" class="form-control" required placeholder="Подтверждение пароля" id="pwdconf">
   </div>
   <div class="checkbox">
     <label style="color:#FFFFFF;"><input type="checkbox"> Я согласен с правилами пользования</label>
   </div>
   <button type="submit" name="button" class="btn btn-default">Подтвердить</button>
 </form>
</div>
</div>
</div>


    <!-- #footer -->
     <div class="navbar navbar-inverse navbar-fixed-bottom">
       <div class='container-fluid'>
         <p>Polyakov Daniel</p>
         <p>2017</p>
       </div>

     </div>
    <!-- #footer -->
<body>
