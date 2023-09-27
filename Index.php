<?php
    include('db.php');
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interconnected learning platform|Home</title>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"

style = "max-width:150px;max-height:120px"></script>
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
                    <li><a href="/latest/index.php#contact">Contact</a></li>
                    <li class="go-premium-cta" style="min-width: 100px"><a href="/latest/sign_in.php">Sign In</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <section class="hero">
        <div class="container">
            <div class="left-col">
                <p class="subhead">It's Nitty &amp; Gritty</p>
                <h1>An app That remove your assignment headache </h1>

                <div class="hero-cta">
                    <a href="#" class="primary-cta">Try for free</a>
                    <a href="#" class="watch-video-cta">
                        <img src="https://assets.codepen.io/2621168/watch.svg" alt="Watch a video">Watch a video
                    </a>
                </div>
            </div>

            <img src="https://assets.codepen.io/2621168/illustration.svg" class="hero-img" alt="Illustration">
        </div>
    </section>

    <section class="features-section">
      
    </section>

    <section class="testimonials-section">
    <?php
    $result = selectAll();
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

    for($i = 0; $i < mysqli_num_rows($result); $i++) { 
    ?>
        <div class="col-md-12">
          
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary"><?php echo($row[$i]['category']); ?></strong>
                <h3 class="mb-0">
                  <a class="text-dark" href="/latest/details.php"><?php echo($row[$i]['title']); ?></a>
                </h3>
                <div class="mb-1 text-muted">Nov 12</div>
                <p class="card-text mb-auto"><?php echo($row[$i]['description']); ?></p>
                <a href="/latest/details.php?Sr-no=<?php echo($row[$i]['Sr_no']);?>">Continue reading</a>
              </div>
              <img class="card-img-right flex-auto d-none d-md-block" src="<?php echo($row[$i]['image']); ?>" style = "max-width:250px;max-height:200px" alt="Card image cap">
            </div>
        </div>
        <?php } ?>   
        </div> 

    </section>

    <section class="contact-section" id="contact">
        <div class="container">
            <div class="contact-left">
                <h2>Contact</h2>

                <form action="">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name">

                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>

                    <input type="submit" class="send-message-cta" value="Send message">
                </form>
            </div>
            <div class="contact-right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26430.393553120906!2d-118.43209796322542!3d34.10028430183922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bc35fbd217ef%3A0xcf1ef9352700d95c!2sBeverly%20Hills%2C%20CA%2090210!5e0!3m2!1sen!2sus!4v1611702818717!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

        </div>
    </section>

    
    
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2022 stuck!!solver</p>
        
        <p class="mb-1"> stuck.solver@gmail.com</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
      

    <script src="ILP.js"></script>
</body>
</html>