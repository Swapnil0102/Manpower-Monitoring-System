<?php
 include_once('connection.php');
 error_reporting(0);
 ?>
 
 <?php

if($_SESSION['designation']== "Director" || $_SESSION['designation']== "Controlling Office"){
  if ($_SESSION['designation']== "Controlling Office") {
    $office_department = $_SESSION['department'];
     #print($office_department);
  }
} else {
  $_SESSION['status']= false;
  header("Location: index.php");
  exit();
}

?>
<?php
    if (isset($_POST['logout'])){
        session_unset();
        session_destroy();
        header("Location: index.php");
    }
?>

 <?php
// if($_SESSION['loggedin']){
// } else {
//   header("Location: login.php");
//   exit();
// }
?>

<?php 
if (isset( $_POST['no_of_jobs'])){ 
  $_SESSION['index']= $_POST['no_of_jobs'];
  $_SESSION['staff_name']= $_POST['staff_name'];
  $job_assigner_name= $_SESSION['job_assigner_name'];
      header('Location: form-2A_1_submit.php');
      exit();
}
?>

<?php 
    if (isset( $_SESSION['index'])){ 
        $no_of_jobs = $_SESSION['index'];
    }else {
        echo "no";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->


    <!-- form1 previous build forms css source bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

    <!-- features  css -->

    <!-- head -->

    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

    <!-- fontawesome -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


    <!-- Custom styles for this template -->
    <link href="features.css" rel="stylesheet">


    <title>MPMS-NITTTR KOLKATA</title>
</head>

<body>

   <!-- navigation bar testing okay! -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-3 pb-3">
    <img src="/mpms-nitttr-kolkata/images/nitttr-logo.png" height="55px" width="55px" alt="">
        <div class="container-fluid">
        <h1>
        <a class="navbar-brand" href="">Manpower Monitoring System</a></a>
        </h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
          <!--  <a class="nav-link active" aria-current="page" href="director.php">Director</a>
            <!-- <a class="nav-link" href="login.php">Home</a> -->
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
           <!-- <a class="nav-link active" aria-current="page" href="contrlling_office.php">Controlling Office</a>
            <!-- <a class="nav-link" href="admin.php">Admin</a> -->
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
           <!-- <a class="nav-link active" href="staff.php">Staff</a>-->
            </div>
        </div>
          
<form class="d-flex" form action= "form-2A_1_submit.php" method="POST">
          <input type="submit" class="btn btn-danger" name="logout" value="Logout" >
        </form>
  </nav>





    <!-- Webpage Sidebar (Dashboard ) -->
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <h1><a href="" class="logo"></a></h1>
            <ul class="list-unstyled components mb-5">
            	 <?php
     if($_SESSION['designation']== "Controlling Office"){
                ?>
               <li><a href="\mpms-nitttr-kolkata\controlling_office.php"><span class=""></span> Home</a></li>
               <?php
      } 
?>
               <?php
     if($_SESSION['designation']== "Director"){
?>
               <li><a href="\mpms-nitttr-kolkata\director.php"><span class=""></span> Home</a></li>
               <?php
      } 
?>
        <li class="active">
          <a href="/mpms-nitttr-kolkata/form-2A_1.php"><span class=""></span> Job Assign</a>
        </li>
        <li>
          <a href="/mpms-nitttr-kolkata/form-2A_2.php"><span class=""></span> View & Check Assigned Jobs</a>
         <!-- <a href="Pending.php"><span class="fa fa-shopping-cart mr-3"></span> Staff</a>-->
        </li>
        <?php
     if($_SESSION['designation']== "Controlling Office"){
                ?>
               <li><a href="\mpms-nitttr-kolkata\form-2B_3.php"><span class=""></span> View Staff Performance</a></li>
               <?php
      } 
?>
<?php
     if($_SESSION['designation']== "Controlling Office"){
                ?>
               <li><a href="\mpms-nitttr-kolkata\form-2C_1.php"><span class=""></span> Pending Jobs</a></li>
               <?php
      } 
?>
<?php
     if($_SESSION['designation']== "Controlling Office"){
                ?>
               <li><a href="\mpms-nitttr-kolkata\form-2C_2.php"><span class=""></span> Completed Jobs</a></li>
               <?php
      } 
?>
<?php
     if($_SESSION['designation']== "Director"){
                ?>
               <li><a href="\mpms-nitttr-kolkata\form-2A_3.php"><span class=""></span> View All Assigned Jobs</a></li>
               <?php
      } 
?>
<?php
     if($_SESSION['designation']== "Director"){
                ?>
               <li><a href="\mpms-nitttr-kolkata\form-2A_4.php"><span class=""></span> View All Staff Performance</a></li>
               <?php
      } 
?>
      
      </ul>
            </ul>
        </nav>

        <!-- Page Content  -->

        <div class="container my-4 "><br><br>
        	<div class="container mx-4">
<?php
     if($_SESSION['designation']== "Director"){
?>
        <h4> 
            <ull>
            	<a href="director.php">  Director  </a> >
                 <lii><a href="form-2A_1.php"> Job Assign </a></lii>
            </ull>
        </h4>
<?php
      }
?>
<?php
     if($_SESSION['designation']== "Controlling Office"){
?>
    <h4> 
        <ull>
          <a href="controlling_office.php">  Controlling Office  </a> >
              <lii><a href="form-2A_1.php"> Job Assign </a></lii>
        </ull>
    </h4>
<?php
      } 
?>
        
        
    	</div>
    
            <center>
                <h1>Job Assign</h1>
            </center>
            <hr>
            <br>
            <form action="/mpms-nitttr-kolkata/form-2A_1.php" method="post" id="form">
                <!-- <span class="border border-secondary"></span> -->
                <div class="card">
                    <div class="card-body">
                        <div class="div my-3">
                            <div class="row mt-5">
                                <div class="col-3 text-center">
                                    <h3>
                                        Select Staff :
                                    </h3>
                                </div>
                                <div class="col-3">
                                    <div class="input-group mb-3" name="remarks">
<select class="custom-select" name="staff_name" id="staff_name">
                                     <option disabled selected> Choose</option>
                                    <!-- <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option> -->

                                    <?php
  $sql="SELECT name, designation,department FROM login";
  $result = mysqli_query($mysqli, $sql);
   
        while($data = mysqli_fetch_array($result))
        {
          $department = $data['department'];
          $designation = $data['designation'];
          if ($_SESSION['designation']== "Director" ) {
          
if (($designation == "Controlling Office") || ($designation == "Staff")){


            echo "<option value='". $data['name'] ."'>" .$data['name'] ."</option>"; } // displaying data in option menu
        }
        elseif ($_SESSION['designation']== "Controlling Office") {
          if ($department == $office_department) {
          
if ($designation == "Staff"){


            echo "<option value='". $data['name'] ."'>" .$data['name'] ."</option>"; } } // displaying data in option menu
        } 
        }

         
    ?>  

                                  </select>
                                    </div>
                                </div>
                                <div class="col-3 text-center">
                                    <h3>
                                        No of Jobs :
                                    </h3>
                                </div>
                                <div class="col-3">
                                    <div class="input-group mb-3" name="remarks" id="1">
                                    <select id="no_of_jobs" class="custom-select" name="no_of_jobs" >
                                    <option disabled selected> Choose</option>
                                    <option id="1" value="1">1</option>
                                    <option id="2" value="2">2</option>
                                    <option id="3" value="3">3</option>
                                    <option id="4" value="4">4</option>
                                  </select>
                                    </div>
                                </div>
                                <div class="col-12 ">
                        <div class="col-12 mt-5">
                                <div class="text-center">
                                <!-- <button class="btn btn-primary btn-lg" type="button">Button</button> -->
                                <!-- <button id="1" class="btn btn-primary" onclick="getId(this)" >Submit</button> -->
                                <input type="submit" class="btn btn-primary btn-lg"  action="/mpms-nitttr-kolkata/form-2A_1.php" formvalue="Submit" value="Enter"/>                
                                </div>
                              </div>
                            </div>
                        </div>
                            <!-- row end -->
                        </div>
                    </div>
                </div>
            </form>



        <form action="/mpms-nitttr-kolkata/form-2A_1_submit.php" method="post">
            <div class="card mt-5">
                <div class="card-body">
                    <!-- <div class="div bg-light border"> -->
                    <div class="div my-3">
                        <div class="row mt-5 gy-5">

                            <div class="col-3 text-center">
                                <!-- <span class="border border-primary"> -->
                                <h3>
                                    Name of the  :
                                </h3>
                            </div>
                            <div class="col-9">
                                <!-- <span class="border border-primary"> -->
                                <?php
                                    echo "<b style='font-size: 18px;'>".$_SESSION['staff_name']."</b>";
                                ?>
                                <!-- </span> -->
                            </div>


                    <?php 
                        if(isset($no_of_jobs)){
                    
        for($i = 1; $i<=$no_of_jobs; $i++){
                            // echo $i;
                    ?>
                    <h3>Job -
                    <?php echo $i;?></h2>
                            <div class="row mb-5 mt-5">

                                <div class="col-3  text-center">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3>
                                                Job Type 
                                                
                                            </h3>

                                            <div class="input-group mb-3 mt-5" name="job_type<?php echo $i;?>">
                                                <select class="custom-select" name="job_type<?php echo $i;?>"
                                                    id="job_type">
                                                    <option disabled selected> Choose</option>
                                                    <option value="Short Type">Short Type</option>
                                                    <option value="Medium Type">Medium Type</option>
                                                    <option value="Long Type">Long Type</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 text-center">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3>
                                                Job Description <h6>(Within 100 Character)</h6>
                                                
                                            </h3>
                                            <div class="mb-3 mt-5">
                                                <textarea class="form-control" maxlength="100" required=""id="exampleFormControlTextarea1" rows="3"
                                                    name="job_description<?php echo $i;?>"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3 text-center">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3>
                                                Target Date
                                            </h3>
                                            <div class="mb-3 mt-5">
                                                <!-- <button class="btn btn-primary btn-lg" type="button">Button</button> -->
                                                <input type="date" class="form-control" placeholder="Username"
                                                    aria-label="Username" aria-describedby="basic-addon1"
                                                    name="target_date<?php echo $i;?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
        <?php  
                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                //Reference Number Generation
                // echo $i;

                    $job_assigner_name= $_SESSION['job_assigner_name'];
                    $staff_name= $_SESSION['staff_name'];
                
                        $str1 = "job_type".$i;
                        $job_type = $_POST[$str1];
                        // echo $job_type;
                        // $item .=$count;
                        $str2 = "job_description".$i;
                        $job_description = $_POST[$str2];
                        // echo $job_description;
                        $str3 = "target_date".$i;
                        $orgDate = $_POST[$str3]; 
                        $target_date = date("d-m-Y", strtotime($orgDate));
                        // echo $target_date;

                        // for_generating_job_ID
                        $sql2= "SELECT * FROM `job_details` ORDER BY sno DESC LIMIT 1";
                        $result1 = mysqli_query($mysqli, $sql2);
                        $row = mysqli_fetch_assoc($result1);
                        $last_si_no= $row["sno"];
                        $sno = $last_si_no + 1;
                        $number= strlen((string) $sno);
                        if ($number==1){
                            $file_ID = "JID-00000".$sno;
                        } else if ($number==2){
                            $file_ID = "JID-0000".$sno;
                        } else if($number==3){
                            $file_ID = "JID-000".$sno;
                        } else if($number==4){
                            $file_ID = "JID-00".$sno;
                        } else if($number > 4) {
                            $file_ID = "JID-0".$sno;
                        }
                        $job_status= "Pending";
                        $finish_date= "Pending";
                        $remarks = "Pending";
                        $approve = "Pending";
                        $extension = "0";
                        $job_assigner_name= $_SESSION['name'];
                        // echo $job_assigner_name;
                        $sql="INSERT INTO `job_details`(`job_assigner_name`, `staff_name`,  `job_type`, `job_description`, `target_date`, `job_id`, `job_status`, `designation`, `finish_date`, `remarks`, `approve`, `extension` ) 
                        VALUES ('$job_assigner_name', '$staff_name', '$job_type', '$job_description', '$target_date', '$file_ID', '$job_status', '$designation', '$finish_date', '$remarks', '$approve', '$extension')";
                        // Sql query to be executed
                        $result = mysqli_query($mysqli, $sql);
                        if($result){ 
                            $insert= true;
                            echo "Succesfully Inserted";
                            $insert= true;
                            $_SESSION['insert'] = 1;
                            header('Location: form-2A_1.php');
                            }
                            else{
                            echo "The record was not inserted successfully because of this error ---> ". mysqli_error($mysqli);
                        }
                    }
            
            
            }
            } else {
            echo "fail";

            }            
        ?>
                            </div>
                            <div class="col-12 mt-5">
                                <div class="d-grid gap-2 col-3 mx-auto">
                                    <!-- <button class="btn btn-primary btn-lg" type="button">Button</button> -->
                                    <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>


    </div>
    </div>
    </div>
    

    <!-- footer -->
    <footer class="bg-dark text-center text-white" style="background-color: rgba(8, 2, 94, 0.2);">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/NITTTR.Kolkata/"
                    role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/nitttr_kolkata"
                    role="button"><i class="fab fa-twitter"></i></a>

                <!-- YouTube -->
                <a class="btn btn-outline-light btn-floating m-1"
                    href="https://www.youtube.com/channel/UCBIhZiRV7b9fzWdDLUlW3yg" role="button"><i
                        class="fab fa-youtube"></i></a>



                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1"
                    href="https://www.linkedin.com/in/nitttr-kolkata-520769211/" role="button"><i
                        class="fab fa-linkedin-in"></i></a>

            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(8, 2, 94, 0.2); height: 70px;
      width: 100%;">
            Website Designed at NITTTR, Kolkata and All Rights Reserved
            <a class="text-white" href="www.nitttrkol.ac.in"> </a>
        </div>
        <!-- Copyright -->
    </footer>





    <span class="border border-dark"></span>
    <!-- javascript source of sidebar -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    </script>

    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <!-- kscks -->


</body>

</html>