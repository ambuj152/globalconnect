<?php
 session_start();
//  echo $_SESSION['id'];
 if(isset($_SESSION['id'])) {
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
         <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
          -->
      <!-- Latest compiled and minified CSS -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->


        <style>
          * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

.warning {
    display: none;
}

section {
    display: flex;
}


/* ======= Main Content Styling ======= */
.bars {
    cursor: pointer;
}

.main-content {
    padding: 10px;
    width: 100%;
}

.main-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px;
    margin: 10px 0;
}

.bar {
    margin: 3px 0;
    width: 20px;
    height: 4px;
    border-radius: 4px;
    background-color: #000;
}

.input {
    width: 100%;
    text-align: center;
}

.input input {
    width: 90%;
    outline: none;
    border: none;
    border: 1px solid rgb(153, 132, 132);
    padding: 10px;
    border-radius: 10px;
}

.user {
    width: 40px;
    position: relative;
    transform: scaleX(-1);
}

.user img {
    width: 100%;
}

/* ======== Styling Dashboard ======== */
.dashboard {
    padding: 10px;
}

.heading {
    margin: 10px 0;
}

.color-box {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.box {
    display: flex;
    height: 120px;
    flex-direction: column;
    width: 180px;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    margin: 10px 5px;
}

.box i {
    font-size: 1.3rem;
    margin-bottom: 5px;
    color: #000000;
}




.box p {
    line-height: 30px;
}

.skyblue {
    background-color: rgb(135, 220, 253);
}

.yellow {
    background-color: rgb(231, 251, 151);
}

.purple {
    background-color: rgb(243, 178, 255);
}

.red {
    background-color: rgb(255, 178, 178);
}

/* ======== Styling Recent Activity ======== */
.activity {
    padding: 10px;
    margin: 10px 0;
}

.activity table {
    width: 100%;
}

tr {
    row-gap: 0px;
}

th {
    line-height: 40px;
    text-align: left;
}

td {
    line-height: 28px;
}

td,
th {
    margin: 0;
}

@media screen and (max-width:630px) {
    section {
        /* display: none; */
    }

    .warning {
        padding: 5rem;
        text-align: center;
        line-height: 35px;
        background-color: rgb(185, 72, 72);
        display: flex;
        color: #e1cdcd;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100vh;
    }
}
        </style>
</head>
<body>

    <!-- <div class="warning">
        <h2> Sorry, this page doesn't support your device, Please use large screen device to see this page </h2>
    </div> -->

    <section>
        <!-- User Sidebar Starts from Here -->
       <?php
       include("dashboard-side-menu.php");
       ?>

        <!-- User Top Naviagation Starts from Here -->
        <div class="main-content">
            <div class="main-top">
                <div class="bars" id="menu">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <div class="input">
                    <input type="text" placeholder="Search here...">
                </div>
                <div class="user">
                    <img src="./user.png" alt="">
                </div>
            </div>

            <!-- User Dashboard Starts from Here -->
           <?php
           include("dashboard-menu.php");
           ?>

            <!-- User Activity Starts from Here -->
            <style>
        
        .mainDiv {
    display: flex;
    min-height: 100%;
    align-items: center;
    justify-content: center;
    background-color: #f9f9f9;
    font-family: 'Open Sans', sans-serif;
  }
 .cardStyle {
    width: 500px;
    border-color: white;
    background: #fff;
    padding: 36px 0;
    border-radius: 4px;
    margin: 30px 0;
    box-shadow: 0px 0 2px 0 rgba(0,0,0,0.25);
  }
#signupLogo {
  max-height: 100px;
  margin: auto;
  display: flex;
  flex-direction: column;
}
.formTitle{
  font-weight: 600;
  margin-top: 20px;
  color: #2F2D3B;
  text-align: center;
}
.inputLabel {
  font-size: 12px;
  color: #555;
  margin-bottom: 6px;
  margin-top: 24px;
}
  .inputDiv {
    width: 70%;
    display: flex;
    flex-direction: column;
    margin: auto;
  }
input {
  height: 40px;
  font-size: 16px;
  border-radius: 4px;
  border: none;
  border: solid 1px #ccc;
  padding: 0 11px;
}
input:disabled {
  cursor: not-allowed;
  border: solid 1px #eee;
}
.buttonWrapper {
  margin-top: 40px;
}
  .submitButton {
    width: 70%;
    height: 40px;
    margin: auto;
    display: block;
    color: #fff;
    background-color: #065492;
    border-color: #065492;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 0 rgba(0, 0, 0, 0.035);
    border-radius: 4px;
    font-size: 14px;
    cursor: pointer;
  }
.submitButton:disabled,
button[disabled] {
  border: 1px solid #cccccc;
  background-color: #cccccc;
  color: #666666;
}


    </style>
  
    <center><div class="col-sm-9">
    <div class="mainDiv">
  <div class="cardStyle">
    <form action="" method="post" name="signupForm" id="signupForm">
      
<!--       <img src="" id="signupLogo"/> -->
      
      <h2 class="formTitle">
        Change the Password
      </h2>
      
       <div class="inputDiv">
      <label class="inputLabel" for="oldpasword">Old Password</label>
      <input type="password" id="oldpassword" name="oldpassword">
    </div>
      
      
    <div class="inputDiv">
      <label class="inputLabel" for="password">New Password</label>
      <input type="password" id="password" name="password" required>
    </div>
      
    <input type="hidden" name="id"  value="<?php echo $_SESSION['id'];?>" >

 <!--mandatary to pass id along with the form-->
    <div class="inputDiv">
      <label class="inputLabel" for="confirmPassword">Confirm Password</label>
      <input type="password" id="confirmPassword" name="confirmPassword">
    </div>
    
    <div class="buttonWrapper">
      <button type="submit" name="submit" id="submitButton" onclick="validateSignupForm()" class="submitButton pure-button pure-button-primary">
        <span>Continue</span>
        <span id="loader"></span>
      </button>
    </div>
      
  </form>
  </div>
</div>      
</div></center>
  </div>
</div>

</body>
</html>

<?php
	include("connection.php");
  
  echo '.<br>';
	if(isset($_POST["submit"])){

		$oldpassword=$_POST['oldpassword'];
		$newpassword=$_POST['confirmPassword'];
        $id=$_POST["id"];

	    $sql= "SELECT * FROM `gloabalconn` WHERE `id`='$id' AND `password`='$oldpassword'";
		$result=mysqli_query($conn,$sql);  
    

		if(mysqli_num_rows($result)>0)
		{ 
        $sqll = "UPDATE `gloabalconn` SET password = '$newpassword' WHERE id = 1";
        echo"";

      if (mysqli_query($conn, $sqll)) {
  
          echo "<script>alert('Password updated successfully');</script>";
      } else {
          echo "Error updating password: " . mysqli_error($conn);
      }
		}
		else{ 
      echo" <script>alert('old password is not matched');</script>";
    		}
    echo '.<br>';
   
	}
	?>
    </section>


<!--modal code-->
<!-- Modal -->
    


<!---->





<!--/modal close-->


</body>

<script>
    const hamburger = document.getElementById('menu');
    const navigation = document.getElementById('navigation');
    hamburger.addEventListener('click', function () {
        navigation.classList.toggle('active')
        console.log('clicked');
    })
</script>

</html>
<?php
}
 else{
  echo "please login to Continue";
  header("Location:admin.php");
 }
?>


