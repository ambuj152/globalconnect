
<style>
    .navbar {
    width: 300px;
    padding: 1rem;
    position: relative;
    height: 100vh;
    overflow: hidden;
    transition: all 0.3s;
    box-shadow: 10px 10px 10px rgba(227, 215, 215, 0.434);
}
@media(max-width:600px){
    .navbar{
        width: 300px;
    padding-right:180px;
    position: relative;
    height: 100vh;
    overflow: hidden;
    transition: all 0.3s;
    box-shadow: 10px 10px 10px rgba(227, 215, 215, 0.434);
    }
}

.navbar.active {
    width: 0px;
    padding: 0;
}

.navbar img {
    margin-left: 10px;
    width: 150px;
    margin-bottom: 20px;
}

.center-nav{
    width:200px;
}
.botton-nav{
    width:300px
}
.center-nav,
.bottom-nav {
    list-style: none;
}

.center-nav a,
.bottom-nav a {
    color: #000;
    text-decoration: none;
    margin-left: 5px;
}

.center-nav li,
.bottom-nav li {
    padding: 5px 20px;
    margin: 5px 0;
    transition: all 0.3s;
}

.center-nav li:hover,
.bottom-nav li:hover {
    color: purple;
    transform: translateX(4px);
}

.bottom-nav li a:hover , .center-nav li a:hover {    
    color: purple;
}

hr {
    margin-left: 20px;
    height: 1.5px;
    display: block;
    margin-bottom: 5px;
    width: 150px;
    background-color: #2f2c2c1d;
    outline: none;
    border: none;
}

.bottom-nav {
    position: absolute;
    bottom: 30px;
}


</style><div class="navbar" id="navigation">
            <img src="images/mainlogo.jpg" alt="">
            <ul class="center-nav">
                <li><i class="fa-solid fa-house"></i><a href="dashboard.php"> Dashboard </a></li>
                <li><i class="fa-solid fa-sliders"></i><a href="dashboard.php"> Slider </a></li>
                <li><i class="fa  fa-address-card"></i><a href="dashboard-enquiry.php"> Contact </a></li>

                <li><i class="fa fa-question-circle"></i><a href="enq-form.php"> Enquiry </a></li>
               
               
            </ul>
            <ul class="bottom-nav">
                <hr>
                <li><i class="fa-solid fa-gear"></i><a href="dashboard-passwordchange.php"> Change Password </a></li>
                <li><i class="fa-solid fa-power-off"></i><a href="logout.php"> Logout </a></li>
            </ul>
        </div>