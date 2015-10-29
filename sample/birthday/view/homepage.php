<!DOCTYPE html>
<html>
    <head>
             <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <title>Birthday</title>
            

            <h1 align = "center">Birthday Manager</h1>
   </head>
   <body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Register.php"><span class="glyphicon glyphicon-user"></span> ADD</a></li>
        
      </ul>
    </div>
  </div>
</nav>
       	<form method="POST" action="Register.php"  onsubmit = "return register()" >
        <table align="right" cellpadding = "10">
        
   <select name="upcoming">
				<option> - select - </option>
				<option value="upcoming">Upcoming birthday</option>
				<option value="arrangeAsc">Arrange by ascending</option>
				<option value="arrangeDes">Arrange by Descending</option>
  </select>

</body>
</html>
