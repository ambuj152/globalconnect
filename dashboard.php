<?php
// session_start();
// echo $_SESSION['id'];
// if(isset($_SESSION['id'])) {
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
            <div class="dashboard">
                <h2 class="heading"> Dashboard </h2>
              
                <div class="color-box">
                <a href=""  style="text-decoration:none;color:black;"> <div class="box skyblue">
                        <p> <i class="fa-solid fa-thumbs-up"></i> </p>
                        <!-- <p> Total Likes </p> -->
                        <h3> Banner Update </h3>
                    </div></a>
                    <a href="dashboard-enquiry.php"  style="text-decoration:none;color:black;"><div class="box yellow">
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
            <div class="card-header" style="text-align: center; background-color: lightgray;">
    <h2 style="color: blue; margin-bottom: 10px;">Update the Gallery</h2>
    <div class="card-body" style="padding: 20px;">

        <table style="width: 100%; border-collapse: collapse; border: 1px solid black;">
            <thead>
                <tr style="background-color: gray; color: white;">
                    <th style="padding: 10px; border: 1px solid black;">Serial No</th>
                    <th style="padding: 10px; border: 1px solid black;">Image-name</th>
                    <th style="padding: 10px; border: 1px solid black;">Image</th>
                    <th style="padding: 10px; border: 1px solid black;">Operation</th>
                </tr>
            </thead>
            <tbody>
            <?php
                        include("connection.php");
                        $query = "SELECT * FROM `slider`";
                        $result = mysqli_query($conn, $query);
                        foreach ($result as $row) {
                        ?>
                <tr style="background-color: lightgray;">
                    <th scope="row" style="padding: 10px; border: 1px solid black;">1</th>
                    <td style="padding: 10px; border: 1px solid black;">Image-1</td>
                    
                    <td style="padding: 10px; border: 1px solid black; width: 30%;">
                        
                            <img style="border-radius: 10px; margin:1px; width: 100%;" src="<?php echo $row['filepath']; ?>" alt="Image">
                        
                    </td>

                    <td style="padding: 10px; border: 1px solid black;">
                        
                        <a href="dashboard-upload.php?imgid=<?php echo $row['id']; ?>">
                        <button type="button" style="padding: 10px 10px; background: blue; color: white; border: none; border-radius: 5px; cursor: pointer;">Update</button></a>
                        <button type="button" style="padding: 10px 10px; background-color: red; color: white; border: none; border-radius: 5px; cursor: pointer;">Delete</button>
                    </td>
                   
                </tr>
                 <?php } ?>
            </tbody>
        </table>
    </div>
</div>

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
// }
// else{
//   echo "please login to Continue";
// //    header("Location:admin.php");
// }
?>


