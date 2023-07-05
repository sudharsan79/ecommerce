<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nalvazhi Organic</title>
    	<!-- favicon -->
	<link rel="shortcut icon" type="image/icon" href="assets/img/favicon.ico">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">

	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <?php  
        include('../admin/server.php');
    ?> 

<style>
    .check{
    position: absolute;
    transform: translateY(50%);
    left: 50%;
    top: 50%;
    z-index: 99999;
    color: #fff;
    font-size: 20px;
     transition: opacity 500 ease-in-out;

}
        body{
            padding:0;
    
    background-image:url("");
    background-attachment: fixed;
    margin:0;
    font-family: 'Poppins', sans-serif; 
}

#form{
    width:500px;
    margin:10vh auto 0 auto;
    background-color: whitesmoke;
    border-radius: 5px;
    padding:30px;
    position:absolute;
    left:10px;
    z-index:9;
}

h1{
    text-align: center;
    color:#3cbd6a;
}

#form button{
    background-color: #3cbd6a;
    color:white;
    border: 1px solid #3cbd6a;
    border-radius: 5px;
    padding:10px;
    margin:20px 0px;
    cursor:pointer;
    font-size:20px;
    width:100%;
}

.input-group{
    display:flex;
    flex-direction: column;
    margin-bottom: 15px;
}

.input-group input{
    border-radius: 5px;
    font-size:20px;
    margin-top:5px;
    padding:10px;
    border:1px solid rgb(34,193,195) ;
}

.input-group input:focus{
    outline:0;
}

.input-group .error{
    color:rgb(242, 18, 18);
    font-size:16px;
    margin-top: 5px;
}

.input-group.success input{
    border-color: #0cc477;
}

.input-group.error input{
    border-color:rgb(206, 67, 67);
}
    </style>
</head>
    <body>
        <div class="container p-0 m-0">
            <form action="<?php echo base_url ?>user/saveUser.php" method="post">
                <h1>Register</h1>
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username">
                    <div class="error"></div>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" >
                    <div class="error"></div>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                    <div class="error"></div>
                </div>
                <div class="input-group">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" id="cpassword" name="cpassword">
                    <div class="error"></div>
                </div>
                <button type="submit">Register</button>
            </form>
        </div>
        <div class="col-9" style="background: url(assets/img/hero-bg.jpg);
    background-size: cover;);height:100vh;max-width:100%">
</div>


 
<script>          
const form = document.querySelector('#form');
const username = document.querySelector('#username');
const email = document.querySelector('#email');
const password = document.querySelector('#password');
const cpassword = document.querySelector('#cpassword');

form.addEventListener('submit',(e)=>{    
    if(!validateInputs()){
        e.preventDefault();
    }
});

function validateInputs(){
    const usernameVal = username.value.trim()
    const emailVal = email.value.trim();
    const passwordVal = password.value.trim();
    const cpasswordVal = cpassword.value.trim();
    let success = true

    if(usernameVal===''){
        success=false;
        setError(username,'Username is required')
    }
    else{
        setSuccess(username)
    }

    if(emailVal===''){
        success = false;
        setError(email,'Email is required')
    }
    else if(!validateEmail(emailVal)){
        success = false;
        setError(email,'Please enter a valid email')
    }
    else{
        setSuccess(email)
    }

    if(passwordVal === ''){
        success= false;
        setError(password,'Password is required')
    }
    else if(passwordVal.length<8){
        success = false;
        setError(password,'Password must be atleast 8 characters long')
    }
    else{
        setSuccess(password)
    }

    if(cpasswordVal === ''){
        success = false;
        setError(cpassword,'Confirm password is required')
    }
    else if(cpasswordVal!==passwordVal){
        success = false;
        setError(cpassword,'Password does not match')
    }
    else{
        setSuccess(cpassword)
    }

    return success;

}
//element - password, msg- pwd is reqd
function setError(element,message){
    const inputGroup = element.parentElement;
    const errorElement = inputGroup.querySelector('.error')

    errorElement.innerText = message;
    inputGroup.classList.add('error')
    inputGroup.classList.remove('success')
}

function setSuccess(element){
    const inputGroup = element.parentElement;
    const errorElement = inputGroup.querySelector('.error')

    errorElement.innerText = '';
    inputGroup.classList.add('success')
    inputGroup.classList.remove('error')
}

const validateEmail = (email) => {
    return String(email)
      .toLowerCase()
      .match(
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      );
  };
 
    </script>
</body>
</html>