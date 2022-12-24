<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Teacher & Student</title>
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="cards.css">
    <link rel="stylesheet" href="navbar.css">
    <script src="navbar.js"></script>
</head>
<style>
  body {
	font-family: 'Press Start 2P', cursive;
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
}

/* 1 */
.btn-1 {
  background: rgb(6,14,131);
  background: linear-gradient(0deg, rgba(6,14,131,1) 0%, rgba(12,25,180,1) 100%);
  border: none;
}
.btn-1:hover {
   background: rgb(0,3,255);
background: linear-gradient(0deg, rgba(0,3,255,1) 0%, rgba(2,126,251,1) 100%);
}

  </style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Heritage Institute Of Technology</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse menubar"
            id="navbarSupportedContent"
          >
            <ul class="navbar-nav ms-auto">
              <li class="nav-item active">
                <a
                  class="nav-link d-flex align-items-center flex-column"
                  href="#"
                >
                  <span class="thumb"
                    ><ion-icon name="home-outline"></ion-icon
                  ></span>
                  <span class="menuteks">Home</span>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link d-flex align-items-center flex-column"
                  href="#"
                >

              <li class="nav-item">
                <a
                  class="nav-link d-flex align-items-center flex-column"
                  href="logout.php"
                >
                  <span class="thumb"
                    ><ion-icon name="log-out-outline"></ion-icon></span>
                  <span href="logout.php" class="menuteks">Log-Out</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<body>
<?php
    include 'config.php';
    if(isset($_POST['submit1'])){
    $t_userid=$_POST['t_userid'];
    $t_name=$_POST['t_name'];
    $t_email=$_POST['t_email'];
    $phone=$_POST['phone'];
    $t_course=$_POST['t_course'];
    $sql="insert into teacher(t_userid,t_name,t_email,phone,t_course) values('{$t_userid}','{$t_name}','{$t_email}','{$phone}','{$t_course}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Teacher Added Successfully!!!');
                               window.location='addclass.php';
                     </script>";
                    
    }
  }
?>

<section class="vh-150 gradient-custom">
  <div class="container py-5 h-50">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h2 class="mb-4 pb-0 pb-md-1 mb-md-5">Add a Teacher</h2>
            <form method="post">
            <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="userid" class="form-control form-control-sm" name="t_userid" placeholder="User ID" required />
                  </div>
            </div>
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-sm" name="t_name" placeholder="Name" required />
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="emailAddress" class="form-control form-control-sm"  name="t_email" placeholder="Email Address" />
              
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" class="form-control form-control-sm" name="phone" placeholder="Ph No." />
                  </div>
                </div>
              </div>

              <div class="row mt-0">
                <div class="col-12">

                  <select class="select form-control-sm" name="t_course">
                  <option selected>Choose Course</option>
                  <option value="BCA">BCA</option>  
                  <option value="BBA">BBA</option>  
                  <option value="B.Tech">B.Tech</option>  
                  <option value="MBA">MBA</option>  
                  <option value="MCA">MCA</option>  
                  <option value="M.Tech">M.Tech</option> 
                  </select>

                </div>
              </div>
              <div class="frame">
              <div class="mt-4 pt-2">
              <button class="custom-btn btn-1" type="submit" name="submit1" value="Add">Add</button>
                <!-- <input class="btn btn-dark btn-lg" type="submit" name="submit1" value="Add" /> -->
              </div>
</div>
            </form>
           
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>

  <?php
    if(isset($_POST['submit2'])){
    $s_userid=$_POST['s_userid'];
    $s_name=$_POST['s_name'];
    $s_email=$_POST['s_email'];
    $year=$_POST['year'];
    $s_course=$_POST['s_course'];
    $roll=$_POST['roll'];
    $sem=$_POST['sem'];
    $batch_id=$_POST['batch_id'];
    $sql="insert into student(s_userid,s_name,s_email,year,s_course,roll,sem,batch_id) values('{$s_userid}','{$s_name}','{$s_email}','{$year}','{$s_course}','{$roll}','{$sem}','{$batch_id}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Student Added Successfully');
                               window.location='addclass.php';
                     </script>";
                    
    }
  }
?>

  <div class="container py-2 h-50">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h2 class="mb-4 pb-0 pb-md-1 mb-md-5">Add a Student</h2>
            <form method="post">
            <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="userid" class="form-control form-control-sm" name="s_userid" placeholder="User ID" required />
                  </div>
            </div>
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-sm" name="s_name" placeholder="Name" required />
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="emailAddress" class="form-control form-control-sm" name="s_email" placeholder="Email Address" />
              
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="number" id="year" class="form-control form-control-sm" min="2010" max="2022" name="year" placeholder="Year" required/>
                  </div>
                </div>
              </div>

              <div class="row mt-0">
                <div class="col-12">

                  <select class="select form-control-sm" name="s_course">
                  <option selected>Choose Course</option>
                  <option value="BCA">BCA</option>  
                  <option value="BBA">BBA</option>  
                  <option value="B.Tech">B.Tech</option>  
                  <option value="MBA">MBA</option>  
                  <option value="MCA">MCA</option>  
                  <option value="M.Tech">M.Tech</option> 
                  </select>

                

                  <select class="select form-control-sm" name="sem">
                  <option selected>Choose Semester</option>
                  <option value=1>1st</option>  
                  <option value=2>2nd</option>  
                  <option value=3>3rd</option>  
                  <option value=4>4th</option>  
                  <option value=5>5th</option>  
                  <option value=6>6th</option> 
                  <option value=7>7th</option>
                  <option value=8>8th</option>

                  </select>

                </div>

              </div>
              <div class="row mt-4">
              <div class="col-md-4 mb-4 pb-2">
                  <input type="number" id="roll" class="form-control form-control-sm" name="roll" placeholder="Roll No." required/>
              </div>
              <div class="col-md-4 mb-4 pb-2">
                  <input type="text" id="batch" class="form-control form-control-sm" name="batch_id" placeholder="Batch ID" required/>
              </div>
              </div>
              <div class="frame">
              <div class="mt-0 pt-2">
              <button class="custom-btn btn-1" type="submit" name="submit2" value="Add">Add</button>
                <!-- <input class="btn btn-dark btn-lg" type="submit" name="submit2" value="Add" /> -->
              </div>
</div>
            </form>
          </div>

          </div>
        </div>
      </div>
    </div>
  </div>


</section>

<footer class="bg-dark bg-gradient text-center text-white ">

  <!-- Copyright -->
  <div class="text-center p-3 " style="background-color: rgba(0, 0, 0, 0.1);">
    © 2022 MCA MINOR PROJECT : Guided By Prof.Palash Ghosh :
    <a class="text-white text-decoration-none"> Sounak Pal-2182007, Subhasish Bagchi-2182008, Basudeb Basak-2182058, Labani Mukherjee-2182012</a>
  </div>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>