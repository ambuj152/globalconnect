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
            <?php
            include("dashboard-menu.php");
            ?>

            <!-- User Activity Starts from Here -->
            <div class="activity">
                <h2 class="heading"> Recent Activity </h2>
                <div class="activities">
                    
                    
                    
    <style>
                        
    

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    th, td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    .no-data {
        text-align: center;
        padding: 20px;
        font-weight: bold;
    }
    .delete-btn {
    display: inline-block;
    padding: 5px 10px;
    margin-right: 5px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 3px;
}
.update{
    display: inline-block;
    padding: 5px 10px;
    margin-right: 5px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 3px;
    background-color:bluet;
}



.delete-btn {
    background-color: #dc3545;
}

                    </style>

                <table border="1">
                    <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Alternate</th>
                    <th>Enquiry</th>
                    <th>Operation</th>

                </tr>
                    </thead>
                    <tbody>
                    <?php
                    include("connection.php");
                    $sql="SELECT * FROM `enquiry`";
                    $result=mysqli_query($conn,$sql);

                    if(mysqli_num_rows($result)> 0)
                    {
                        while($row=mysqli_fetch_array($result))
                        {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['mobile'] . "</td>";
                            echo "<td>" . $row['Alternate'] . "</td>";
                            echo "<td>" . $row['textarea'] . "</td>";?>
                            <td><a href='?id=<?php echo $row['id']?>'> <button class="delete-btn">Delete</button> </a> &nbsp;
                     <!-- <a href="?UDTId=<?php echo $row['id'] ?>"><button class="update">Update</button></a> -->
                     </td> 
                    <?php                         
                           echo "</tr>";

                         }
                    }
                else {
                    echo "<tr><td colspan='3'>No data found</td></tr>";
                     }
            
                    ?>
                    </tbody>
                    </table>
                          
                </div>
                <?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="DELETE FROM `enquiry` WHERE `id`='$id'";
        $result=mysqli_query($conn,$sql);
        if($result>0)
        {
            echo "
            <script>
           alert('deleted the Record Successfully');
           window.location.href='dashboard.php';
            </script>
            ";
        }
        else{
            echo "Fail  ";
        }
    }


    if(isset($_GET['UDTId']))
    {
        $id=$_GET['UDTId'];
        $sql="SELECT * FROM `enquiry` WHERE `id`='$id'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result); ?>
<style>
        /* Form container */
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        /* Form fields */
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        
        .form-group input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        /* Submit button */
        .submit-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="form-container">
    <form action="#" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>"/>
        </div>
       
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>"/>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="<?php echo $row['phone']; ?>"/>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <input type="text" id="message" name="message" value="<?php echo $row['message']; ?>"/>
        </div>
        <button type="submit" class="submit-btn" name="updatebutton">Submit</button>
    </form>
</div>


<?php
    }
    if(isset($_POST['updatebutton'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $EMAIL=$_POST['email'];
        $phone=$_POST['phone'];
        $message=$_POST['message'];
        $update="UPDATE `contact` SET `NAME`='$name', `EMAIL`='$EMAIL', `PHONE`='$phone', `MESSAGE`='$message' WHERE `id`='$id'";
        $result=mysqli_query($conn,$update);
         
        if($result>0)
        {
            echo "
            <script>
           alert('Record Updated successfully');
           window.location.href='dashboard.php';
            </script>
            ";
        }
        else{
            echo "Fail  ";
        }
    }
    ?>
            
            </div>
        </div>
    </section>

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
