<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interconnected Learning Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/ILP.css">
    
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
                    <li class="go-premium-cta" style="min-width: 100px"><a href="/latest/sign_in.php">Sign In</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container">
        <div class="registration" >
            <h2>Sign Up</h2>
            <p>It's simple and easy.</p>
            <form action="/action_page.php">
                <div>
                   <label for="fname">First Name</label>
                   <input type="text" id="fname" name="firstname" placeholder="Your name..">
            
                   <label for="lname">Last Name</label>
                   <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                   <label for="email">Email</label>
                   <input type="email" id="email" name="email" placeholder="Your email..">
                
                   <label for="phone">Phone Number</label>
                   <input type="number" id="phone" name="phone" placeholder="Your cell no.">
                   <div class="col-6" >
                        <div  style="display:inline">
                          <label for="city">City</label>
                          <input type="text" id="city" name="city" placeholder="Your city..">
                        </div>
                        <div style="display:inline">
                        <label for="country">Country</label>
                        <select  id="country" name="country">
                    
                            <option value="australia">Australia</option>
                            <option value="canada">Canada</option>
                            <option value="usa">USA</option>
                        </select>
                   
                        </div>
                    
                    </div>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                
                
                <div>
                    <input class="submit" type="submit" value="Submit">
                </div>
                </div>
            </form> 
             
            
        </div>

    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="ILP.js"></script>
</body>
</html>