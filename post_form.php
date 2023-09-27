<?php
    include('db.php');
    $image_host = "http://localhost/latest/images/";
?>
<?php
$serial='';
$title='';
$category='';
$description='';
$image='';
 if (isset($_POST['submit'])) {
  if (empty($_POST["title"]) || empty($_POST['category']) || empty($_POST['description'])){
    echo "<script> alert('Please fill properly.')</script>";
  }
  else {
    $title= $_POST['title'];
    $category =$_POST['category'];
    $descrioption =$_POST['description'];
      
    $target_dir = ROOT_PATH . "\images\\"; // folder to place your images
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    $uploadOk = 1;

    if($check !== false) {
      $uploadOk = 1;
    } else {
      $uploadOk = 0;
    }

    if (file_exists($target_file)) {
    echo "<script>alert('Sorry, file already exists.')</script>";
    $uploadOk = 0;
    }

    if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $image = $image_host . $_FILES['image']['name'];
        echo ($image);
      $sql = "insert into problem (title,category,description,image) values ('$title','$category','$description','$image')";
      mysqli_query($db, $sql) or die(mysqli_error());
      header('Location: /latest/dashboard.php');
    }
    }
  
 }
}
?>
<?php 
// EDIT
if (isset($_GET['edit_id'])) {
  $edit_id = $_GET['edit_id'];
  $sql = "SELECT * FROM problem WHERE Sr_no='$edit_id'";

  $result = mysqli_query($db, $sql);
  $data = mysqli_fetch_assoc($result);

  $serial = $data['Sr_no'];
  $title = $data['title'];
  $category = $data['category'];
  $description = $data['description'];
  $image= $data['image'];
}

  if (isset($_POST['update'])) {
    unset($_POST['update']);
    echo ("hello");

    $Sr_no = $_POST['Sr_no'];
    $title= $_POST['title'];
    $category =$_POST['category'];
    $description =$_POST['description'];
      
    $target_dir = ROOT_PATH . "\images\\"; // folder to place your images
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    $uploadOk = 1;

    if($check !== false) {
      $uploadOk = 1;
    } else {
      $uploadOk = 0;
    }

    if (file_exists($target_file)) {
    echo "<script>alert('Sorry, file already exists.')</script>";
    $uploadOk = 0;
    }

    if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $image = $image_host . $_FILES['image']['name'];
        echo ($image);
        $sql = "UPDATE problem SET title='$title', category='$category', image='$image', description='$description' WHERE Sr_no='$Sr_no'";
      mysqli_query($db, $sql) or die(mysqli_error());
      header('Location: /latest/dashboard.php');
    }
    }
    $sql = "UPDATE problem SET title='$title', category='$category', image='$image', description='$description' WHERE Sr_no='$Sr_no'";
      mysqli_query($db, $sql) or die(mysqli_error());
      header('Location: /latest/dashboard.php');
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<link ref="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<link ref="stylesheet" href="css/form-validation.css">
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

    <div class="container">
        <div class="py-5 text-center">
          <img class="d-block mx-auto mb-4" src="https://thumbs.dreamstime.com/b/question-mark-6906191.jpg" alt="" width="100" height="100">
          <h2>Problem Form</h2>
          <p class="lead">Please state your problem with proper title and category below in the form to grab the attension of our excellent exparts.</p>
        </div>
    </div>

   
    

    <section class="testimonials-section" style="background: rgb(225, 218, 218)">
      
            <div class="col-md-8 order-md-1">
              <h4 class="mb-3"></h4>
              <form action='/latest/post_form.php' method='POST' enctype="multipart/form-data" class="needs-validation" novalidate >
              <input type="text" name="Sr_no" value="<?php echo($serial);?>" hidden>
                <div class="row">
                  <div class="col-12 mb-3">
                    <label for="title">Title</label>
                    <input type="text" value="<?php echo($title);?>" class="form-control" id="title" name="title" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Valid first name is required.
                    </div>
                  </div>
                  
                </div>
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="image">Image <span class="text-muted">(Optional)</span></label>
                        <input type="file" class="form-control" id="image" name="image" placeholder="" value="" >
                    </div>
                </div>

                <div class="row">
                  <div class="col-md-5 mb-3">
                    <label for="country">Category</label>
                    <select class="custom-select d-block w-100" id="country" name="category" required >
                      <option value="">Choose...</option>
                      <option value='chemistry'>Chemistry</option>
                      <option value='physiscs'>Physics</option>
                      <option value='engineering'>Engineering</option>
                      <option value='medical'>Medical</option>
                      <option value='accounting'>Accounting</option>
                      <option value='mathematics'>Mathematics</option>
                      <option value='finance'>Finance</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select your problem categoty.
                    </div>
                  </div>
                 
                </div>
                <div class="mb-3">
                    <label for="description">Description </label>
                    
                  <textarea class="form-control" name="description" id="description" ><?php echo(htmlspecialchars($description));?>
                  </textarea>
                </div>
               
                <?php if (isset($_GET['edit_id'])): ?>
                    <button class="btn btn-primary btn-lg " name='update' type="submit"><i class="fa-solid fa-circle-check"></i>Update</button>
                <?php else: ?>
                    <button class="btn btn-primary btn-lg " name='submit' type="submit"><i class="fa-solid fa-circle-check"></i>Post</button>
                <?php endif; ?>
              </form>
            </div>
          </div>



    </section>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2022 stuck!!solver</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>



    <script src="ILP.js"></script>
    <script>
        ClassicEditor
                .create( document.querySelector( '#description' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
   </script>
</body>
</html>