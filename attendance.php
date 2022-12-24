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
              <a href="student.php" class="nav-link">Student Login</a>
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
    echo "Welcome, Prof. ".$_SESSION['name'];
    ?>
    </h1>

    </div>
  </div>
</div>

    <?php
    include('config.php');
    try{
      
    if(isset($_POST['att'])){

      $stat_id = $_POST['stat_id'];
      $st_status = $_POST['st_status'];
      for ($x=0;$x<$_SESSION['i'];$x++) {
        $dp = date('Y-m-d');
        $sql = "INSERT into attendance(stat_id,s_course,t_subject,st_status,stat_date) values('{$stat_id[$x]}','{$_SESSION['course']}','{$_SESSION['subject']}','{$st_status[$x]}','{$dp}')";
        $stat = mysqli_query($conn,$sql);

        $att_msg ="Attendance Recorded.";
      }

    }
  }
  catch(Execption $e){
    $error_msg = $e->$getMessage();
  }
 ?>


<div class="content text-center" >
    <h3>Attendance of <?php echo date('d-m-Y'); ?></h3>
    <br> 
    <center><p><?php if(isset($att_msg)) echo $att_msg; if(isset($error_msg)) echo $error_msg; ?></p></center> 
</div>
<center>


<div class="container mt-5">
    <form action="" class="row g-3" method="post">
      <div class="col-md-6">
      <select class="form-select" name="t_course" aria-label="Default select example">
              <option selected>Choose Course</option>
             <option value="BCA">BCA</option>  
             <option value="BBA">BBA</option>  
             <option value="B.Tech">B.Tech</option>  
             <option value="MBA">MBA</option>  
             <option value="MCA">MCA</option>  
             <option value="M.Tech">M.Tech</option> 
      </select>
      </div>
      <div class="col-md-6">
      <select class="form-select" name="t_subject" aria-label="Default select subject">
              <option selected>Choose Subject</option>  
             <option value="JAVA">JAVA</option>  
             <option value="PYTHON">PYTHON</option>  
             <option value="NETWORKING">NETWORKING</option>  
             <option value="DSA">DSA</option>  
             <option value="OPERATING SYSTEM">OPERATING SYSTEM</option>  
             <option value="DBMS">DBMS</option>  
      </select>
      </div>

      <div class="col-md-12">
          <button type="submit" class="btn btn-dark" name="batch">Show</button>
      </div>
        
    </form>

  </div>

  <form class="app-form" method="post">
    <table class="table table-stripped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Department</th>
          <th scope="col">Roll</th>
          <th scope="col">Semester</th>
          <th scope="col">Email</th>
          <th scope="col">Subject</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
   <?php

    if(isset($_POST['batch'])){

     $_SESSION['i']=0;
     $radio = 0;
     $_SESSION['course'] = $_POST['t_course'];
     $_SESSION['subject'] = $_POST['t_subject'];
     $sql = "SELECT * from student where s_course='{$_SESSION['course']}' order by roll asc";
     $results = mysqli_query($conn,$sql);

     while ($data = mysqli_fetch_array($results)) {
       $_SESSION['i']++;
     ?>
  <body>
     <tr>
       <td><?php echo $data['s_userid']; ?> <input type="hidden" name="stat_id[]" value="<?php echo $data['s_userid']; ?>"> </td>
       <td><?php echo $data['s_name']; ?></td>
       <td><?php echo $data['s_course']; ?></td>
       <td><?php echo $data['roll']; ?></td>
       <td><?php echo $data['sem']; ?></td>
       <td><?php echo $data['s_email']; ?></td>
       <td><?php echo $_SESSION['subject']; ?></td>
       <td>
         <label>Present</label>
         <input type="radio" name="st_status[<?php echo $radio; ?>]" value="Present" checked>
         <label>Absent </label>
         <input type="radio" name="st_status[<?php echo $radio; ?>]" value="Absent">
       </td>
     </tr>
  </body>

     <?php

        $radio++;
      } 
}
      ?>
    </table>

    <center>
    <button type="submit" class="btn btn-info btn-lg" name="att">Save</button>
  </center>

  </div>

</div>
</form>

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

