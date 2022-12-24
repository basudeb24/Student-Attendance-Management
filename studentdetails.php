<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="pos.css">

</head>
<body>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark bg-gradient">
        <div class="container">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="admin.php" class="nav-link">Admin Login</a>
            </li>
            <li class="nav-item">
              <a href="teacher.php" class="nav-link">Teacher Login</a>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link">Log Out</a>
            </li>
          </ul>
        </div>
      </nav>

   <br> 

<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
    <h1 class="animate-charcter">
    <?php
     include 'config.php';
    echo "Welcome,".$_SESSION['name'];
    ?>
    </h1>

    </div>
  </div>
</div>

<h3 class="content text-center">View your attendance record here</h3>

<center>
<div class="container mt-5 justify-content-center">
    <form action="" class="row g-3" method="post">
    <center>
      <div class="col-md-4">
      <select class="form-select" name="subject" aria-label="Default select subject">
              <option selected>Choose Subject</option>  
             <option value="JAVA">JAVA</option>  
             <option value="PYTHON">PYTHON</option>  
             <option value="NETWORKING">NETWORKING</option>  
             <option value="DSA">DSA</option>  
             <option value="OPERATING SYSTEM">OPERATING SYSTEM</option>  
             <option value="DBMS">DBMS</option>  
      </select>
      </div>

      <div class="col-md-12 mt-4">
          <button type="submit" class="btn btn-dark" name="batch">View</button>
      </div>
        
    </form>


  </div>

    <table class="table table-stripped">
      <thead>
        <tr>
          <th scope="col">Department</th>
          <th scope="col">Subject</th>
          <th scope="col">Status</th>
          <th scope="col">Date</th>
        </tr>
      </thead>
      <?php
    
    if(isset($_POST['batch'])){

     $radio = 0;
     $sub=$_POST['subject'];
     $s_userid = $_SESSION['userid'];
     $sql = "SELECT * from attendance where t_subject='{$sub}' and stat_id='{$s_userid}'";
     $results = mysqli_query($conn,$sql);

     while ($data = mysqli_fetch_array($results)) {
     ?>
  <body>
     <tr>
       <td><?php echo $data['s_course']; ?></td>
       <td><?php echo $data['t_subject']; ?></td>
       <td><?php echo $data['st_status']; ?></td>
       <td><?php echo $data['stat_date']; ?></td>
     </tr>
  </body>

     <?php

      } 
}
      ?>
    </table>

    <br><br><br>

<footer class="bg-dark bg-gradient text-center text-white fixed-bottom ">

  <!-- Copyright -->
  <div class="text-center p-3 " style="background-color: rgba(0, 0, 0, 0.1);">
  © 2022 MCA MINOR PROJECT : 
    <a class="text-white text-decoration-none">Guided By Prof.Palash Ghosh : Sounak Pal-2182007, Subhasish Bagchi-2182008, Basudeb Basak-2182058, Labani Mukherjee-2182012</a>
  </div>
  <!-- Copyright -->
</footer>

   
</body>
</html>

