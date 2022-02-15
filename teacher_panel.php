<?php include('head.php');?>
<?php include('header2.php');?>

<?php include('teacher_sidebar.php');?>   
<?php
 date_default_timezone_set('Asia/Kolkata');
 $current_date = date('Y-m-d');

 $sql_currency = "select * from manage_website"; 
             $result_currency = $conn->query($sql_currency);
             $row_currency = mysqli_fetch_array($result_currency);
?>    
      
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            
            <div class="container-fluid">                    
               <div class="card">
                            <div class="card-body">

                                <a href="calendar/3-calendar.php"><button class="btn btn-primary">Schedule</button></a>

                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Exam Name</th>
                                                 <th>Room Name</th>
                                                 <th>Subject Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                    <?php 
                                    include 'connect.php';
                                  /*$sql1 = "SELECT * FROM  `allot_student` WHERE teacher_id='".$_SESSION['id']."' and exam_date='".date('Y-m-d')."' GROUP BY room_id";
                                   $result1 = $conn->query($sql1);
                                   while($row = $result1->fetch_assoc()) {
                                   $s1 = "SELECT * FROM `exam` WHERE id='".$row['exam_id']."'";
                                    $sr = $conn->query($s1);
                                    $sres = mysqli_fetch_array($sr); 

                                    $s2 = "SELECT * FROM `room` WHERE id='".$row['room_id']."'";
                                    $sr1 = $conn->query($s2);
                                    $sres1 = mysqli_fetch_array($sr1); 
                                      ?>
                                            <tr>
                                                <td><?php echo $sres['name']; ?></td>
                                                <td><?php echo $row['start_time'].'-'.$row['end_time']; ?></td>
                                                <td><?php echo $sres1['name']; ?></td>


                                            </tr>*/
                                  $sql1 = "SELECT * FROM  `allot_student` WHERE teacher_id='".$_SESSION['id']."' GROUP BY room_id";
                                   $result1 = $conn->query($sql1);
                                   while($row = $result1->fetch_assoc()) {

                                    
                                   $s1 = "SELECT * FROM `exam` WHERE id='".$row['exam_id']."'";
                                    $sr = $conn->query($s1);
                                    $sres = mysqli_fetch_array($sr);

                                    $s2 = "SELECT * FROM `room` WHERE id='".$row['room_id']."'";
                                    $sr1 = $conn->query($s2);
                                    $sres1 = mysqli_fetch_array($sr1); 

                                   

                                    $sql = "SELECT * FROM `tbl_teacher` WHERE id='".$row['teacher_id']."'";
                                                                       
                                     $result = $conn->query($sql);

                                   while($row = $result->fetch_assoc()) 
                                   

                                        $s3 = "SELECT * FROM `tbl_subject` WHERE id='".$row['subjectname']."'";
                                    $sr2 = $conn->query($s3);
                                   $sres2 = mysqli_fetch_array($sr2); 



                                      ?>
                                            <tr>
                                     <td><?php echo $sres['name']; ?></td>

                                     
                                                <td><?php echo $sres1['name']; ?></td>
                                               
                                            <td><?php echo $sres2['subjectname']; ?></td>
                                         
                                                

                                        


                                            </tr>

                                               <?php } ?>

                                          
                                        </tbody>
                                    </table>
                                    </a>
                                </div>
                            </div>
                        </div> 
        </div>
            
            <?php include('footer.php');?>