<?php 
     require_once '../include/instructor/updateAccount.inc.php';
     require_once '../dbConnection/db.php';
     $user = $_SESSION['current_user'];

        $sql="Select * from instructors where username = '$user'";
        $result=mysqli_query($conn, $sql);
        if ($result === false) {
        die(mysqli_error($conn));
        }
        $row = mysqli_fetch_assoc($result);
            $FIRSTNAME=$row['FIRSTNAME'];    
            $MI=$row['MI'];
            $LASTNAME=$row['LASTNAME'];
            $USERNAME=$row['USERNAME'];
            $AGE=$row['AGE'];
            $GENDER=$row['GENDER'];
            $JOB_TITLE=$row['JOB_TITLE'];
            $ADDRESS=$row['ADDRESS'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../stylesheet/acc.css">
     <link rel="stylesheet" href="../modal/stylesheet/update_accountMod.css">
     <link rel="stylesheet" href="../modal/stylesheet/delete_accountModal.css">
     <link rel="stylesheet" href="../stylesheet/nav.css">
     <link rel="stylesheet" href="../stylesheet/footer.css">
     <title>Account</title>
</head>
<body>
     <?php include_once '../templates/nav.php';?>
     <div class="info_wrapper">
          <div class="infos">
               <div class="nav">
                    <div class="btn_wrapper">
                         <div class="icon">
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                              </svg>
                              <label for="">User</label>
                         </div>
                         <div class="btn">
                              <a href="home.php" class="btn_can">
                                   <div class="btn_icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/> <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/> </svg>
                                   </div>                                   
                                   <p>Home</p>
                              </a>
                         </div>
                         <div class="btn">
                              <a href="account.php" class="btn_can active_btn">
                                   <div class="btn_icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16"> <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/> <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/> </svg>
                                   </div>                                   
                                   <p>Account</p>
                              </a>
                         </div>
                         <div class="btn">
                              <a href="#" class="btn_can">
                                   <div class="btn_icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16"> <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/> <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/> </svg>
                                   </div>                                   
                                   <p>About</p>
                              </a>
                         </div>
                         <div class="btn">
                              <a href="#" class="btn_can">
                                   <div class="btn_icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/> <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/> </svg>
                                   </div>                                   
                                   <p>Logout</p>
                              </a>
                         </div>
                    </div>     
               </div>
               <div class="can">
                    <div class="card_wrapper">
                    <!---->
                         <div class="profile_wrap">
                              <div class="profile">
                                   <div class="profile_icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16"> <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/> <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/> </svg>
                                   </div>
                              </div>  
                              <div class="info">
                                   <div class="information">
                                        <div class="info_con acc_title_con">
                                             <label class="details acc_title"><?php echo $JOB_TITLE   ;?></label>
                                        </div>
                                        <div class="info_con">
                                             <label class="details name"><?php echo $FIRSTNAME;?></label>
                                             <label class="details name"><?php echo $MI;?></label>
                                             <label class="details name"><?php echo $LASTNAME   ;?></label>
                                        </div>
                                        <div class="info_con">
                                             <label class="details"><?php echo $AGE   ;?></label>
                                        </div>
                                        <div class="info_con">
                                             <label class="details"><?php echo $GENDER   ;?></label>
                                        </div>
                                        <div class="info_con">
                                             <label class="details"><?php echo $JOB_TITLE   ;?></label>
                                        </div>
                                        <div class="info_con">
                                             <label class="details"><?php echo $ADDRESS   ;?></label>
                                        </div>
                                   </div> 
                                   <div class="acc_btn">
                                        <button id="openModal_edit" class="acc_btn_edit">Edit Account</button>
                                        <?php include_once '../modal/html/update_popup.php'; ?>
                                        <button id="openModal_delete" class="acc_btn_delete">Delete accoount</button>
                                        <?php include_once '../modal/html/delete_popup.php'; ?>

                                   </div>         
                              </div>    
                              
                         </div>


                    <!---->      
                    
                    <!---->
                    </div>
               </div>
          </div>
     </div>
<?php require_once '../templates/footer.php';?>
<script src="../modal/javascript/update_account_modal.js"></script>
<script src="../modal/javascript/delete_account_modal.js"></script>