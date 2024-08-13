<?php
session_start();
$l=mysqli_connect("localhost","root","");
mysqli_select_db($l,'agrocenter');
$username=$_POST['username'];
$password=$_POST['password'];
$res=mysqli_query($l,"select * from `registeration` where
`username`='".$username."'and `password`='".$password."'");
if(mysqli_num_rows($res)>0)
{
 header("location:home2.php"); 
exit();
}
else
{
?>
<script>alert("Enter Valid Use Credential");
window.location="login.php";
</script>
<?php
}
?>