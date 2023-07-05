<?php
include('../admin/server.php');
if(isset($_POST)){
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['cpassword'];
$email = $_POST['email'];
$sql = "INSERT INTO userlists(username,password,confirm_password,email)
VALUES ('$username','$password','$confirm_password','$email')";



if ($conn->query($sql) === TRUE) {
  echo "<span class='check'>Registered successfully</span>";
  $url = base_url.'index.php';
  header("location:".$url);
} 

else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 

$URL = "http://nalvazhiorganic.com";
echo("<script>
    window.setTimeout(function(){

    location.href='$URL'

 }, 5000);
</script>"); 
}

$conn->close();

?>