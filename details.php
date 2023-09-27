<?php
    include('db.php');
?>
<?php
if (isset($_GET['Sr-no'])) {
  $serial = $_GET['Sr-no'];
  $sql = "SELECT * FROM problem WHERE Sr_no='$serial'";
  $result = mysqli_query($db, $sql);
  $data = mysqli_fetch_assoc($result);
  

  $serial = $data['Sr_no'];
  $date = $data['date'];
  $image = $data['image'];
  $title = $data['title'];
  $description = $data['description'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interconnected Learning Platform</title>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"style = "max-width:150px;max-height:120px"></script>
<link ref="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<link ref="stylesheet" href="css/blog.css">
<link rel="stylesheet" href="css/ILP.css">
</head>

<body>
    <div class="navbar">
        <div class="container">
            <a class="logo" href="#">Stuck!!<span>Solver</span></a>

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
                    <li class="go-premium-cta" style="min-width: 100px"><a href="/latest/sign_in.php">Sign In</a></li>
                </ul>
            </nav>
        </div>
    </div>

   
    <br>
        <main role="main" class="container">
            <div class="row">
              <div class="col-md-8 blog-main">
               
      
                <div class="blog-post">
                  <img src="<?php  echo ($image); ?>" alt="" style="max-width:700px; max-height:500px">
                  <h2 class="blog-post-title"><?php echo ($title) ?></h2>
                  <p class="blog-post-meta"><?php echo ($date); ?> <a href="#">User Name</a></p>
                  <p><?php echo ($description);?></P>

                  <form>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Comment</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                  <div class="card offset-1" style="background:#F2F2F2" >
                    <div class="card-body">
                      <h5 class="card-title">Expart</h5>
                      <h6 class="card-subtitle mb-2 text-muted">14-06-2022 11:06</h6>
                      <p class="card-text">This problem is very much common. You should use 'la - hospitals' to differentiate that equation.</p>
                      <a href="#" class="card-link">Reply</a>
                      <a href="#" class="card-link">Delete</a>
                    </div>
                  </div>
                </div><!-- /.blog-post -->
        
      
               
      
            
      
            </div><!-- /.row -->
      
          </main><!-- /.container -->
      
   
    <script src="ILP.js"></script>
</body>
</html>