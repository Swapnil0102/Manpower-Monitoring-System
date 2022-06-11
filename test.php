<?php 

include_once('connection.php');
?>


<?php
if(isset($_POST['submit'])){
    // echo "helllooo";
if(isset($_POST['check']))
{

        foreach ($_POST['check'] as  $job_id) {
            
            $score_post= "score".$job_id;
            $score = $_POST[$score_post];
            $approve_post= "approve".$job_id;
            $approve = $_POST[$approve_post];
            $remarks_post= "remarks".$job_id;
            $remarks = $_POST[$remarks_post];
            // echo $score ;
            // echo $approve ;
            // echo $remarks ;
            $job_status= "Completed";
        $sql1 = "UPDATE `job_details` SET `score`= '$score', `approve`= '$approve', `remarks`= '$remarks', , `job_status`= '$job_status'  WHERE `job_details`.`job_id` = '$job_id'";
        $result = mysqli_query($mysqli, $sql1);
        if($result){
        } else{
          echo "not okay";
          }
        
        }
    }
}
?>

<?php
// echo "ok";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset( $_POST['new_finish_dateEdit'])){
        $current_finish_date =  $_POST['current_finish_date'];
        $new_finish_dateEdit = $_POST['new_finish_dateEdit'];
        $new_finish_dateEdit = date("d-m-Y", strtotime($new_finish_dateEdit));
        $job_id_take = $_POST['job_id_take'];
        $extension = (int) $_POST['extension_take'];
        // $extension = number_format('$extension');
        $extension = $extension + 1;
        $sql = "UPDATE `job_details` SET `target_date` = '$new_finish_dateEdit', `extension` = '$extension'  WHERE `job_details`.`job_id` = '$job_id_take'";
        $result = mysqli_query($mysqli, $sql);
        if($result){ 
        //   $update= true;
        //   echo "hello";
          }
          else{
           echo "Successfully Updated ---> ". mysqli_error($mysqli);
          }
          
    }
}
// if(isset($_POST['new_finish_date']))
//     {
//         echo "good";
//         header("Location: index.php");
//     }

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
<style>
   #sidebar.active .custom-menu {
    margin-left: -250px;
}
</style>

    <title>MPMS-NITTTR KOLKATA</title>
</head>

<body>

   <!-- navigation bar testing okay! -->
	   <nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-3 pb-3">
    <img src="/mpms-nitttr-kolkata/images/logo.jpg" height="55px" width="55px" alt="">
        <div class="container-fluid">
        <h1>
        <a class="navbar-brand" href="">Manpower Monitoring System</a>
        </h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="director.php">Director</a>
            <!-- <a class="nav-link" href="login.php">Home</a> -->
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="contrlling_office.php">Controlling Office</a>
            <!-- <a class="nav-link" href="admin.php">Admin</a> -->
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
            <a class="nav-link active" href="staff.php">Staff</a>
            </div>
        </div>
          
        <form class="d-flex" form action= "director.php" method="POST">
                <input type="submit" class="btn btn-danger" name="logout" value="Logout" >
                </form>
  </nav>




  <!-- Webpage Sidebar (Dashboard ) -->
  <!-- <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
          <i class="fa fa-bars"></i>
          <span class="sr-only">Toggle Menu</span>
        </button>
      </div>
      <h1><a href="" class="logo"></a></h1>
      <ul class="list-unstyled components mb-5">
        <li class="active">
          <a href="index.php"><span class="fa fa-home mr-3"></span> Director</a>
        </li>
        <li>
          <a href="form_2A.php"><span class="fa fa-user mr-3"></span> Controlling Officer</a>
          <a href="Pending.php"><span class="fa fa-shopping-cart mr-3"></span> Staff</a>
        </li>
      
      </ul>
    </nav> -->
<!-- .............................................................................. -->
<!-- Modal -->
<div class="modal fade" id="descriptionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Job Description</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
        
<!-- ................................................................. -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Extend Target Date</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/mpms-nitttr-kolkata/form-2A_2.php" method="post">
      <input type="hidden" name="snoEdit" id="snoEdit">
      <input type="hidden" name="job_id_take" id="job_idEdit">
      <input type="hidden" name="extension_take" id="extensionEdit">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Current Finish Date:</label>
            <div style="width: 80%" >
            <input type="text" class="form-control" style="width: 80%" id="current_finish_dateEdit" name= "current_finish_date">
            </div>
            
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">New Finish Date:</label>
            <div style="width: 80%" >
                <input class="form-control" type="date" id="message-text" style="width: 85%;" id="new_finish_dateEdit" name="new_finish_dateEdit">
            </div>
          </div>
        
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> -->
        <button type="submit" class="btn btn-primary">Save Changes</button>
      </div>
    </div>
  </div>
</div>
</form>

        <!-- Page Content  -->

        <div class="container my-4" style="min-height: 720px; " ><br>

            <br>
            <center>
                <h1>View Assigned Jobs</h1>
            </center>
            <hr>

            <form action="/mpms-nitttr-kolkata/form-2A_2.php" method="post" id="form">

            <div class="container my-4">
                <div class="container">

                    <table class="table" id="myTable">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" style="width: 1px;">S.No</th>
                                <th scope="col">Staff Name</th>
                                <th scope="col">Job ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th scope="col">Job Type</th>
                                <th scope="col">Job Description</th>
                                <th scope="col" style="width: 9%;">Target Date</th>
                                <th scope="col"> </th>
                                <th scope="col" style="width: 66.425px;">Finish Date</th>
                                <th scope="col">Exten sion</th>
                                <th scope="col"  style="width: 5%;">Score</th>
                                <th scope="col" style="width: 60.525px;">Approve</th>
                                <th scope="col" style="width: 60.525px;">Remarks</th>
                                <th scope="col"><i class="fa fa-check" aria-hidden="true"></i></th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $job_status1= "Complete";
                            $job_status2= "Pending";
                            $job_status= "Completed";
                            $job_assigner_name= $_SESSION['name'];
                            // echo $job_assigner_name;
                            // $sql = "SELECT * FROM `job_details` WHERE `job_details`.`job_assigner_name` = '$job_assigner_name' && `job_details`.`job_status` != '$job_status1' "; // Classifying the job assigner name
                            $sql = "SELECT * FROM `job_details` WHERE `job_details`.`job_assigner_name` = '$job_assigner_name' && `job_details`.`job_status` != '$job_status' ";
                            $result = mysqli_query($mysqli, $sql);
                            $sno = 0;

                            while($row = mysqli_fetch_assoc($result)){
                                // $_SESSION['job_id'] = $row["job_id"];
                                // $check[]=$row["job_id"];
                            $sno = $sno + 1;

                            echo "<tr>
                            <th scope='row'>". $sno . "</th>
                            <td>".$row["staff_name"]."</td><td>".$row["job_id"]."</td>
                            <td>".$row["job_type"]."</td>";
                            ?>
                            <td>
<!-- Button trigger modal -->
<center>
 
<button type="button" class="edit_button btn btn-primary" style="width: 66%; height: 38px;" data-toggle="modal" data-target="#descriptionModal" ?>
  View
</button>
<?php 
    $array = $row["job_description"];
?>
 </center>
</td>
                            <?php
                            echo "
                            <td>".$row["target_date"]."</td>";
                            ?>
                             
                            <td>
                            <button type="button" class="edit btn btn-primary"  id="<?php echo $row['job_id']; ?>" data-toggle="modal" data-target="#editModal" data-whatever="@mdo">Edit</button>
                            </td>
                            <td>
                                <?php echo $row["finish_date"] ?>
                            </td>
<?php
                           echo "<td>".$row["extension"]."</td>";
?>
                            <td>
                                <div class="input-group mb-0" >
                                    <input type="text" class="form-control" name="score<?php echo $row["job_id"];?>" >
                                </div>
                            </td>

                            <td>
                            <div class="input-group mb-3" >
                            <select class="custom-select" name="approve<?php echo $row["job_id"];?>" id="approve">
                                <option selected>Choose...</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                            </div>
                            </td>

                         

                            <td>
                            <div class="input-group mb-3" name="remarks" >
                            <select class="custom-select" name="remarks<?php echo $row["job_id"];?>" id="remarks">
                                <option selected>Choose...</option>
                                <option value="Done">Done</option>
                                <option value="Partialy Done">Partialy Done</option>
                                <option value="Not Done">Not Done</option>
                                <option value="Cancel">Cancel</option>

                            </select>
                            </div>
                            </td>
                            <td>
                                <div class="container my-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="check[]" 
                                        value ="<?php echo $row["job_id"];?>">
                                         
                                    </div>
                                </div>
                            </td>

                            </tr>
                            <?php }  ?>

                            <?php
              

            ?>
                      
                        </tbody>
                    </table>

                </div>

            </div>
            
            <div class="container my-4">
                <center>
                    <div>
                        <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Enter" />
                    </div>
                </center>
            </div>

            
      
 
 <div class="container my-5 ">
 <hr><br>
 <h2>List of Previous Assigned Jobs</h2>
    <br>
        <table class="table" id="myTables">
            <thead class="table-dark">
                <tr>
                <th scope="col" style="width: 1px;">S.No</th>
                <th scope="col">Staff Name</th>
                <th scope="col">Job ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th scope="col">Job Type</th>
                <th scope="col">Job Description</th>
                <th scope="col" style="width: 9%;">Target Date</th>
                <th scope="col">Finish Date</th>
                <th scope="col" style="width: 18.5875px;">Exten sion</th>
                <th scope="col">Score</th>
                <th scope="col">Approve</th>
                <th scope="col" >Remarks</th>
                <th scope="col">Job Status</th>
                </tr>
            </thead>
                    
        <tbody>
        <?php
                $job_status_comp= "Completed";
                $sql = "SELECT * FROM `job_details` WHERE `job_details`.`job_assigner_name` = '$job_assigner_name' && `job_details`.`job_status` = '$job_status_comp' "; // WHERE job_status = 'Completed'
                $result = mysqli_query($mysqli, $sql);
                $sno = 0;

                while($row = mysqli_fetch_assoc($result)){
                $sno = $sno + 1;

                echo "<tr>
                <th scope='row'>". $sno . "</th>
                <td>".$row["staff_name"]."</td><td>".$row["job_id"]."</td>
                <td>".$row["job_type"]."</td>
                <td>".$row["job_description"]."</td>
                <td>".$row["target_date"]."</td>
                <td>".$row["finish_date"]."</td>
                <td>".$row["extension"]."</td>
                <td>".$row["score"]."</td>
                <td>".$row["approve"]."</td>
                <td>".$row["remarks"]."</td>
                <td>".$row["job_status"]."</td>";


                }
            ?>
        </tbody>
    </table>
</div>

    <div class="div my-5">
    </div>

</div>

</div>
</form>
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
            $(document).ready( function () {
            $('#myTables').DataTable();
            } );
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
            crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
        <!-- kscks -->

        <script>
            edits = document.getElementsByClassName('edit');
            Array.from(edits).forEach((element) => {
                element.addEventListener("click", (e) => {
                console.log("edit ", e.target.parentNode.parentNode);
                tr = e.target.parentNode.parentNode;
                target_date = tr.getElementsByTagName("td")[4].innerText;
                job_id = tr.getElementsByTagName("td")[1].innerText;
                extension = tr.getElementsByTagName("td")[7].innerText;
            
                console.log(target_date, job_id, extension);
                current_finish_dateEdit.value = target_date;
                job_idEdit.value = job_id;
                extensionEdit.value = extension;
            
                snoEdit.value = e.target.id;
                console.log(e.target.id)
                $('#editModal').modal('toggle');
                })
            })

        

    </script>

</body>

</html>