<html>
<head>
<link rel="stylesheet" href="sign.css" type="text/css">
<style>
body{
 background-repeat:no-repeat;
background-size:100% 100%;
}
form{
background-color: transparent;
}
.topnav { 
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
.image1{ border-radius:50%;
                height:7%;
                width:15%;}
input#submit1{
  width:130px;
   height: 40px;
  padding: 1px;
  font-size: 16px;
  font-family: sans-serif;
  font-weight: 600;
  border-radius: 3px;
  background-color: green;
 } 
</style>
</head>
<body background="pro2.jpg">
<div class="topnav">
  <a class="active" href="home.php"><img src="home.png" class="image1">Home</a>
  <a href="about.php"><img src="about.png" class="image1">About Us</a>
</div>
<div class="main">
       <div class="register">
           <h2>Login</h2>
 <form id="register" method="post" action="loginsession.php">
<label>User Name</lable><br>
<input type="text" name="username" id="name" placeholder="Enter your name" required><br><br>
<label>Password</lable><br>
<input type="password" name="password" maxlength="8" id="name" placeholder="Enter your Password" required><br><br>
<pre><input type="submit" value="submit" name="submit" id="submit1">    <input type="reset" value="reset" name="submit" id="submit1"><br><br></pre></form>
</div>
</body>