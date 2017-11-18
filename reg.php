<head>
  <title>Registration page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <!-- #header -->
  <div class="navbar navbar-default">
    <div class='container-fluid'>
      <ul class='nav navbar-nav navbar-right'>
      <li> <a href=reg.php class='navbar-brand'>Sign-up</a> <li>
          <li> <a href=reg.php class='navbar-brand'>Sign-in</a> <li>
      </ul>
      <div class="navbar-brand">OSchool</div>
      <ul class = 'nav navbar-nav navbar-left' style="margin-left:50px">
        <li><a href="index.php">Main Page</a></li>
        <li><a href="#">Courses</a></li>
        <li><a href="#">Contacts</a></li>

      </ul>
</div>
    </div>
    <!-- #header -->

<div class='container-fluid'>
<div class='row'>
  <div class='col-lg-6 col-lg-offset-3' style="background-color:#e0dedc;" style="margin:10px;">
  <form>
    <div class="form-group">
      <label for="username">Your name:</label>
      <input type="text" class="form-control" id="username">
    </div>
   <div class="form-group">
     <label for="email">Email address:</label>
     <input type="email" class="form-control" id="email">
   </div>
   <div class="form-group">
     <label for="pwd">Password:</label>
     <input type="password" class="form-control" id="pwd">
   </div>
   <div class="form-group">
     <label for="pwdconf">Confirm your password:</label>
     <input type="password" class="form-control" id="pwdconf">
   </div>
   <div class="checkbox">
     <label><input type="checkbox"> Im agree with rules</label>
   </div>
   <button type="submit" class="btn btn-default">Submit</button>
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
