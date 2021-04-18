<!DOCTYPE html>
<html>
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN</title>
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
     <!-- CUSTOM CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">
     <!-- GT WALSHEIM FONT -->
     <link rel="stylesheet" type="text/css" href="addon-font-GT_Walsheim/walsheim_stylesheet.css">
     <!-- SLIDE IN ANIMATION -->
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>

     <!-- NAVBAR -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <div class="navbar-header">
       <a class="navbar-brand" href="#">
          <img alt="Brand" src="images/gt_logo2.png" class="navbar_brand">
       </a>
       <div class="overlay">
            <div class="text"></div>
       </div>
     </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#">Insights</a>
                </li>
                <li class="nav-item">
                <div class="dropdown">
                 <button class="btn btn-secondary dropdown-toggle" type="button"  aria-haspopup="true" aria-expanded="false">
                   Services
                 </button>
                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                   <a class="dropdown-item" href="#">Action</a>
                   <a class="dropdown-item" href="#">Another action</a>
                   <a class="dropdown-item" href="#">Something else here</a>
                 </div>
               </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                   <button class="btn btn-secondary dropdown-toggle" type="button"  aria-haspopup="true" aria-expanded="false">
                   Industries
                 </button>
                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                   <a class="dropdown-item" href="#">Action</a>
                   <a class="dropdown-item" href="#">Another action</a>
                   <a class="dropdown-item" href="#">Something else here</a>
                 </div>
               </div>
            </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Meet Our People</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Careers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Connect</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">...</a>
                </li>
              </ul>
            </div>
     </nav>

     <!-- LOGIN FORM -->
     <section>
          <div class="container-fluid">
               <div class="container">
                    <form action="login.php" method="post">
                    	<h2 class="login_title">LOGIN</h2>
                    	<?php if (isset($_GET['error'])) { ?>
                    		<p class="error"><?php echo $_GET['error']; ?></p>
                    	<?php } ?>
                    	<label>User Name</label>
                    	<input type="text" name="uname" placeholder="User Name"><br>

                    	<label>User Name</label>
                    	<input type="password" name="password" placeholder="Password"><br>

                    	<button type="submit" class="submit_button button_slide slide_right">Login</button>
                    </form>
               </div>
          </div>
     </section>
</body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
         $('.dropdown-toggle').dropdown()
    </script>
</html>