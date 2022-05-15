<!DOCTYPE html>
<html lang="fr">
   <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custome CSS -->
    <link href="css/register.css" rel="stylesheet">
  </head>

 <body id="particles-js"></body>
<div class="animated bounceInDown">
  <div class="container">
    <span class="error animated tada" id="msg"></span>
    <form name="form1" action="login.php" method="post" class="box" onsubmit="return checkStuff()">
      <h4>Geo<span>World</span></h4>
      <h5>Sign in to your account.</h5>
        <input type="text" name="email" placeholder="Email" autocomplete="off">
        <i class="typcn typcn-eye" id="eye"></i>
        <input type="password" name="pwd" placeholder="Passsword" id="pwd" autocomplete="off">
        <label>
          <input type="checkbox">
          <span></span>
          <small class="rmb">Remember me</small>
        </label>
        <a href="#" class="forgetpass">Forget Password?</a>
        <input type="submit" value="Connexion" class="btn1">
      </form>
        <a href="#" class="dnthave">Don’t have an account? Sign up</a>
  </div> 
       <div class="footer">
      <span>By<i class="fa fa-heart pulse"></i> <a href="https://github.com/AmirAK777/GeoWorld_AK_NT">Amir&Nathanael</a></span>
    </div>
</div>
  <script src='https://cldup.com/S6Ptkwu_qA.js'></script><script  src="js/script.js"></script>
</body>
</html>