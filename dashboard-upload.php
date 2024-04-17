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
            <div class="dashboard">
                <h2 class="heading"> Dashboard </h2>
              
                <div class="color-box">
                <a href=""  style="text-decoration:none;color:black;"> <div class="box skyblue">
                        <p> <i class="fa-solid fa-thumbs-up"></i> </p>
                        <!-- <p> Total Likes </p> -->
                        <h3 style="color:green"> Banner Update </h3>
                    </div></a>
                    <a href=""  style="text-decoration:none;color:black;"><div class="box yellow">
                        <p><i class="fa-solid fa-comment"></i></p>
                        <!-- <p> Total Comments </p> -->
                        <h3> Enquiry Form</h3>
                    </div></a>
                    <a href=""  style="text-decoration:none;color:black;"><div class="box purple">
                        <p> <i class="fa-solid fa-share"></i> </p>
                        <!-- <p> Total Share </p> -->
                        <h3> Booking </h3>
                    </div></a>
                    <a href=""  style="text-decoration:none;color:black;">  <div class="box red">
                        <p> <i class="fa-sharp fa-solid fa-floppy-disk"></i> </p>
                        <p> Total Saves </p>
                        <h3> 20,129 </h3>
                    </div></a>
                </div>
            </div>

            <!-- User Activity Starts from Here -->
            <div class="activity">
                <h2 class="heading">upload File</h2>
                <div class="activities">
                           
        <?php
include("connection.php");

if(isset($_GET['imgid'])) {
$id=$_GET['imgid'];
$sqll="SELECT * FROM `slider` WHERE `id`='$id'";
$result= mysqli_query($conn,$sqll); 

$fetch= mysqli_fetch_assoc($result);

?>

<div class="card-body">
<style>
    #content {
    margin: 20px auto;
    max-width: 400px;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 20px;
}

.form-control {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: none;
    border: none;
    border-radius: 4px;
    background-color: #007bff;
    color: #fff;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #0056b3;
}

    </style>




<form method="POST" action="" enctype="multipart/form-data">
    <div class="form-group">
        <img src="<?php echo $fetch['filepath'] ?>" alt="" width="40px"><br>
        <br><input class="form-control" type="file" name="uploadfile" id="uploadfile" />
        <input type="hidden" name="id" value="<?php echo $fetch['id']; ?>">
        <input type="hidden" value="<?php echo $fetch['filepath']; ?>" name="old_image">
    </div>
   <div class="form-group">
        <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
   </div>
</form>
</div>
<?php

if(isset($_POST['upload'])){
$id=$_POST['id'];
$target_file=$_POST['old_image'];

if(!empty($_FILES['uploadfile']['name'])){
$target_dir = "slider-img/";
echo $target_file = $target_dir . basename($_FILES["uploadfile"]["name"]);

move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $target_file);



}
echo $query = "UPDATE `slider` SET `filepath`='$target_file' WHERE `id`= '$id'";

if(mysqli_query($conn,$query)) {

   echo "The file ". htmlspecialchars($filename). " has been uploaded.";

  
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
}
// header("Location:uploads.php");
} 

?>
     
                    
                    
  

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
