<?php
  session_start();
?>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $_SESSION['userid']=$_POST['userid'];
    $password=$_POST['password'];
    $sql="SELECT s_userid,s_name FROM `student` where s_userid='{$_SESSION['userid']}'";
    $result=mysqli_query($conn,$sql);
    if($result){
        if($password=='student')
        {
          $rows=mysqli_fetch_row($result);
          $_SESSION['name']=$rows[1];     
          echo "<script> alert('Login Successful');
                               window.location='studentdetails.php';
                     </script>";
                    
        }
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sign In</title>

    <link rel="stylesheet"  href="button.css">
  </head>
  <body>
  <div class="Container">
    <style>
      @import url(https://fonts.googleapis.com/css?family=Sigmar+One);
      .rainbow_text {
  display: inline-block;
  font-size: 35px;
  font-family: 'Sigmar One';
  background: black;
  background: linear-gradient(to right, red, orange , yellow, green, blue, indigo, violet);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}

.rainbow_text.animated {
      animation: rainbow_animation 5s ease-in-out infinite;
      background-size: 400%;
}

@keyframes rainbow_animation {
    0%,100% {
        background-position: 0
    }

    50% {
        background-position: 100%
    }
}
      </style>
  <style>
    html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

.title {
  margin: 0 auto;
  color: white; 
  font-family: 'Lato', sans-serif;
  font-size: 3rem;
}

.Container {
  width: 100%;
  height: 100%;  
  display: flex;
  align-items: center;
  text-align: center;
  animation: changeBackgroundColor 7s infinite;
}

@keyframes changeBackgroundColor {
  10% {
    background-color:  #b6d1c4;
    /* background-color: #001F3F; */
  }
  45% {
    /* background-color: #001F3F; */
    background-color: #7c8783;
  }
  80% {
    background-color: #1d1f1e;
  }
  100% {
    background-color: #b6d1c4;
  }
}


.frame {
  width: 90%;
  margin: 40px auto;
  text-align: center;
}
button {
  margin: 20px;
}
.custom-btn {
  width: 130px;
  height: 40px;
  color: #fff;
  border-radius: 5px;
  padding: 10px 25px;
  font-family: 'Lato', sans-serif;
  font-weight: 500;
  background: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
   box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  outline: none;
}.btn-12{
  position: relative;
  right: 20px;
  bottom: 20px;
  border:none;
  box-shadow: none;
  width: 130px;
  height: 40px;
  line-height: 42px;
  -webkit-perspective: 230px;
  perspective: 230px;
}
.btn-12 span {
  background: rgb(0,172,238);
background: linear-gradient(0deg, rgba(0,172,238,1) 0%, rgba(2,126,251,1) 100%);
  display: block;
  position: absolute;
  width: 130px;
  height: 40px;
  box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  border-radius: 5px;
  margin:0;
  text-align: center;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all .3s;
  transition: all .3s;
}
.btn-12 span:nth-child(1) {
  box-shadow:
   -7px -7px 20px 0px #fff9,
   -4px -4px 5px 0px #fff9,
   7px 7px 20px 0px #0002,
   4px 4px 5px 0px #0001;
  -webkit-transform: rotateX(90deg);
  -moz-transform: rotateX(90deg);
  transform: rotateX(90deg);
  -webkit-transform-origin: 50% 50% -20px;
  -moz-transform-origin: 50% 50% -20px;
  transform-origin: 50% 50% -20px;
}
.btn-12 span:nth-child(2) {
  -webkit-transform: rotateX(0deg);
  -moz-transform: rotateX(0deg);
  transform: rotateX(0deg);
  -webkit-transform-origin: 50% 50% -20px;
  -moz-transform-origin: 50% 50% -20px;
  transform-origin: 50% 50% -20px;
}
.btn-12:hover span:nth-child(1) {
  box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  -webkit-transform: rotateX(0deg);
  -moz-transform: rotateX(0deg);
  transform: rotateX(0deg);
}
.btn-12:hover span:nth-child(2) {
  box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
 color: transparent;
  -webkit-transform: rotateX(-90deg);
  -moz-transform: rotateX(-90deg);
  transform: rotateX(-90deg);
}


  </style>
  
  
  <div class="container ">
    <div class="row">
      <div class="col-md-6 offset-md-3">
      <h1 class='rainbow_text'>!!! HEY STUDENT !!!</h1>
      <br>
        <h1 class='rainbow_text animated'>Please Sign in</h1>
        <div class="card my-auto">

          <form method="post" class="card-body">

            <div class="text-center">
              <img src="https://www.seekpng.com/png/detail/74-745868_medical-student-exam-revision-bundles-student-logo-transparent.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" name="userid" class="form-control" id="Username" aria-describedby="emailHelp"
                placeholder="User Name" required>
            </div>
            <div class="mb-3">
              <input type="password" name="password" class="form-control" id="password" placeholder="password"required>
            </div>
            <div class="frame"><button class="custom-btn btn-12" value="Login" name="submit"><span>Click!</span><span>LOGIN</span></button></div>
            <!-- <div class="text-center"><button type="submit"  class="btn btn-color px-5 m-5 w-80" value="Login" name="submit">Login</button></div> -->

          </form>
        </div>

      </div>
    </div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>