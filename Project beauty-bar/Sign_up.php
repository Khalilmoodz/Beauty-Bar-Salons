<?php





?>
<html>
<head>   
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .forms{
        margin-left:250px;
        margin-top:50px;
        display:block;
        font-family
        

    }
    .input{
        width:50px;
    }
</style>    
</head>
<title></title>
<body><h1><centre>Sign-up</centre> </h1>
<form action="" method="POST">
<div class="forms">   
    
    
    <div class="form-floating mb-3">
     <input type="email" name="email" class="form-control" placeholder="name@example.com" id="floatingInput" style=" width:750px;"><label for="floatingInput">Email</label><br>
    </div>
    
    <div class="form-floating mb-3">
    <input type="text" name="firstname"  class="form-control" placeholder="Firstname" id="floatingname" style=" width:750px;"><label for="floatingname">Firstname</label ><br>
    </div>
    
    <div class="form-floating mb-3">
    <input type="text" name="Lastname"  class="form-control" placeholder="Lastname" id="floatingLastname" style=" width:750px;"><label for="floatingLastname">Lastname</label><br>
    </div> 
    
    <div class="rows">
            <div class="cols-sm-4">
                <label for="radio">Male<label>
                <input type="radio" size="500px" value="Male" name="Gender"  class="form-check-input" style="margin-left: 30px;"> 
            
                <label style="margin-left: 10px;">Female</label>
                <input type="radio" size="400px" value="female" name="Gender"  class="form-check-input" style="margin-left: 35px;">
            </div>
    </div>
    
    <br></br>

    <div class="form-floating mb-3">
    <input type="password" name="password"  class="form-control" placeholder="Password" id="floatingPassword" style=" width:750px;"><label for="floatingPassword">Password</label><br>
    </div> 

    <div class="form-floating mb-3">
    <input type="password" name="password2"  class="form-control" placeholder="confirm_password" id="floating_pass" style=" width:750px; height:;" ><label for="floating_pass" >confirm password</label><br>
    </div>
    
    <input type="submit" name="submit" style="margin-left:300px;" value="Sign-up" class="btn btn-danger">


<div>
</form>  
</body>


</html>