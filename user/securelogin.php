<?php   
  include('../admin/server.php');

  if(isset($_POST)){
    //print_r($_POST);exit;
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select id,username,email from userlists where email ='$email' and password='$password' ";

    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result); 
        $_SESSION['username'] = $row['username']; 
        $_SESSION['email'] = $row['email']; 
        $_SESSION['id'] = $row['id'];
        $_SESSION['status'] = 'successfully logged in';
        $url = base_url.'index.php';;
        header("Location:".$url);
     }
     else{
        echo $error = '<div class="alert-box warning">Invalid, No Users Found, Kindly Register</div>';
       $_SESSION['status'] = $error; 
     }    
    } 
?>