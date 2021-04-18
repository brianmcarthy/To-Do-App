<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
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
    <!-- FONT AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

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
     <h1 class="fade_in">Hello, <?php echo $_SESSION['name']; ?></h1>
     
     <div class="wrapper">
		<h2 class="title">Todo List App</h2>
		<div class="inputFields">
			<input type="text" id="taskValue" placeholder="Enter a task.">
			<button type="submit" id="addBtn" class="btn"><i class="fa fa-plus"></i></button>
		</div>
		<div class="content">
			<ul id="tasks">
			</ul>
		</div>
	</div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
         $('.dropdown-toggle').dropdown()
    </script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script>
		$(document).ready(function() {
			// Show Tasks
			function loadTasks() {
				$.ajax({
					url: "show-tasks.php",
					type: "POST",
					success: function(data) {
						$("#tasks").html(data);
					}
				});
			}

			loadTasks();

			// Add Task
			$("#addBtn").on("click", function(e) {
				e.preventDefault();

				var task = $("#taskValue").val();

				$.ajax({
					url: "add-task.php",
					type: "POST",
					data: {task: task},
					success: function(data) {
						loadTasks();
						$("#taskValue").val('');
						if (data == 0) {
							alert("Something wrong went. Please try again.");
						}
					}
				});
			});

			// Remove Task
			$(document).on("click", "#removeBtn", function(e) {
				e.preventDefault();
				var id = $(this).data('id');
				
				$.ajax({
					url: "remove-task.php",
					type: "POST",
					data: {id: id},
					success: function(data) {
						loadTasks();
						if (data == 0) {
							alert("Something wrong went. Please try again.");
						}
					}
				});
			});
		});
	</script>
	<div class="row logout_button">
		<button type="submit" class="submit_button button_slide slide_right logout_button">
			<a class="logout_text" href="logout.php">Logout</a>
		</button>
	</div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>