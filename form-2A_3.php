<?php 

include_once('connection.php');
?>
<?php
    if (isset($_POST['logout'])){
        session_unset();
        session_destroy();
        header("Location: index.php");
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
        <a class="navbar-brand" href="">Manpower Management System</a>
        </h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
           <!-- <a class="nav-link active" aria-current="page" href="director.php">Director</a>-->
            <!-- <a class="nav-link" href="login.php">Home</a> -->
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
           <!-- <a class="nav-link active" aria-current="page" href="controlling_office.php">Controlling Office</a>-->
            <!-- <a class="nav-link" href="admin.php">Admin</a> -->
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
          <!--  <a class="nav-link active" href="staff.php">Staff</a>-->
            </div>
        </div>
          
        <form class="d-flex" form action= "form-2A_3.php" method="POST">
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
                
                      
        
        <li>
        <a href="\mpms-nitttr-kolkata\director.php"><span class=""></span> Home</a>
         <a href="\mpms-nitttr-kolkata\form-2A_1.php"><span class=""></span> Job Assign</a>
          <a href="\mpms-nitttr-kolkata\form-2A_2.php"><span class=""></span> View & Check Assign Jobs </a>
         <li class="active"> <a href="\mpms-nitttr-kolkata\form-2A_3.php"><span class=""></span> View All Assign Jobs</a></li>
          <li><a href="\mpms-nitttr-kolkata\form-2A_4.php"><span class=""></span> <p>View All Staff Performance</p></a>
        </li>

            </ul>
        </nav>

        <!-- Page Content  -->

        <div class="container my-4" style="min-height: 720px; " ><br>
 <div class="container mx-4">
<?php
     if($_SESSION['designation']== "Director"){
?>
        <h4> 
            <ull>
                <a href="director.php">  Director  </a> >
                 <lii><a href="form-2A_3.php"> View All Assigned Jobs </a></lii>
            </ull>
        </h4>
<?php
      }
?>
</div>
            <br>
            <center>
                <h1>View All Assigned Jobs</h1>
            </center>
            <hr>

            <form action="/mpms-nitttr-kolkata/form-2A_2.php" method="post" id="form">

            <div class="container my-4">
                <div class="container">

                    <table class="table" id="myTable">
                        <thead class="table-dark">
                            <tr>
                        <th scope="col">Sl.No</th>
                        <th scope="col">Controlling Officer/FIC</th>
                            <th scope="col">Staff Name</th>
                            <th scope="col">Job ID</th>
                            <th scope="col">Job Type</th>
                            <th scope="col">Job Description</th>
                            <th scope="col">Target Date</th>
                            <th scope="col">Finish Date</th>
                            <th scope="col">Extension</th>
                            <th scope="col">Approved</th>
                            <th scope="col">Remarks</th>
                            <th scope="col">Job Status</th>
                            <th scope="col">Score</th>
                            
                        </tr>
                        </thead>
                        <tbody>

                    <?php
                        $job_status_comp= "Completed";
                        $sql = "SELECT * FROM `job_details`"; // WHERE job_status = 'Completed'
                        $result = mysqli_query($mysqli, $sql);
                        $sno = 0;

                        while($row = mysqli_fetch_assoc($result)){
                        $sno = $sno + 1;

                        echo "<tr>
                        <th scope='row'>". $sno . "</th>
                        <td>".$row["job_assigner_name"]."</td>
                        <td>".$row["staff_name"]."</td>
                        <td>".$row["job_id"]."</td>
                        <td>".$row["job_type"]."</td>
                        <td>".$row["job_description"]."</td>
                        <td>".$row["target_date"]."</td>
                        <td>".$row["finish_date"]."</td>
                        <td>".$row["extension"]."</td>
                        <td>".$row["approve"]."</td>
                        <td>".$row["remarks"]."</td>
                        <td>".$row["job_status"]."</td>
                        <td>".$row["score"]."</td>";
                        

                        }

                    ?>
                      
                        </tbody>
                    </table>

                </div>

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