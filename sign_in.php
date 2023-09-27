<?php
    include('db.php');
?>
<?php
$email='';
$password='';
 if (isset($_POST['submit'])) {
  if (empty($_POST["password"])){
    echo "<script> alert('Empty password')</script>";
  }else if(empty($_POST["email"])){
    echo "<script> alert('Empty email')</script>";
  }
  else {
    $email= $_POST['email'];
    $password =$_POST['password'];
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result); 
    if($count == 1){
      header("Location: /latest/dashboard.php");
}else{
  echo "<script> alert('wrong password')</script>";
}
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interconnected Learning Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/latest/css/ILP.css">
    
  </head>
  <body>
    
    
</head>

<body>
    <div class="navbar">
        <div class="container">
            <a class="logo" href="#">stuck!!<span>solver</span></a>

            <img id="mobile-cta" class="mobile-menu" src="images/menu.svg" alt="Open Navigation">

            <nav>
                <img id="mobile-exit" class="mobile-menu-exit" src="images/exit.svg" alt="Close Navigation">
                
                <ul class="primary-nav">
                    <li class="current"><a href="/latest/index.php">Home</a></li>
                    <li><a href="/latest/Category.php">Programme</a></li>
                    <li><a href="/latest/expart.php">Expart</a></li>
                </ul>
                
                <ul class="secondary-nav">
                    <input type="text" placeholder="Search..">
                    <li><a href="#">Contact</a></li>
                    <li class="go-premium-cta" style="min-width: 75px"><a href="/latest/post_form.php">Post</a></li>
                    <li class="go-premium-cta" style="min-width: 100px"><a href="/latest/user_registration.php">Sign Up</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container">
        <div class="registration" >
            <h2>Sign In</h2>
            <br>
            <form action='/latest/sign_in.php' method='POST'>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name='password' class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <br>
                <button type="submit" name='submit' class="btn btn-primary m-0">Sign In</button>
                
              </form>
             
            
        </div>

    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="ILP.js"></script>
</body>
</html>