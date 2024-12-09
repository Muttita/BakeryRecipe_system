<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baking list</title>
    <link rel="icon" type="image/png"
        href="https://th.bing.com/th/id/R.26d49584bc03f16b3c5fa748db768349?rik=Zl3hzoN%2fQyGgWw&riu=http%3a%2f%2fwww.clipartbest.com%2fcliparts%2f9ip%2f6rR%2f9ip6rRepT.png&ehk=tKa%2fEG8Lp4M0Ucz3N5S4iOs7jHriCOnmYss6jkpUsDs%3d&risl=&pid=ImgRaw&r=0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" type="text/css" href="./bakinglist.css">
    <link rel="stylesheet" type="text/css" href="./navbar.css">
</head>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Poller+One&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Croissant+One&family=Nova+Square&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }
        body{
            background-color: #FBF7F4;
            font-family: 'Poppins', sans-serif;
        }

        .navbar{
            border-bottom: 1px solid #000;
        }
        .topbar{
            /* background-color: #666; */
            display: flex;  /* Make Flex container */
            justify-content: center; /* Center horizontally */
        }
        .topbar ul{
            list-style-type: none;
            margin: 10px;
            padding: 0;
            font-size: 20px;
        }
        .topbar li{
            display: inline-block;
            /* float: left; */
        }
        a{
            text-decoration: none;
        }
        a:link, a:visited{
            color: #000;
        }
        .topbar a{
            padding: 15px 20px;
            text-decoration: none;
            display: inline-block;
            color: #000;
        }
        .topbar a:hover{
            color: #A2673B;
            transition: .3s;
        }
        .active{
            font-weight: bold;
        }

        .sweetmade{
            /* float: left; */
            position: absolute;
            margin: 20px 40px;
            font-family: "Poller One", serif;
            font-size: 35px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .leftbar{
            /* position: absolute; */
            float: right;
            margin: -60px 40px;
        }

        .bx{
            font-size: 50px;
            cursor: pointer;
        }
        
        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }
        
        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        
        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        
        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {background-color: lightgrey;}
        
        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            transition: .5s;
            display: block;
            right: 5%;
        }

        .breadcrumb{
            margin: 2% 0 0 5%;
        }

        /* Style the list */
        ul.breadcrumb {
            padding: 10px 16px;
            list-style: none;
        }
        
        /* Display list items side by side */
        ul.breadcrumb li {
            display: inline;
            font-size: 18px;
        }
        
        /* Add a slash symbol (/) before/behind each list item */
        ul.breadcrumb li+li:before {
            padding: 8px;
            color: #000;
            content: "\003E";
        }
        
        /* Add a color to all links inside the list */
        ul.breadcrumb li a {
            color: #000;
            text-decoration: none;
        }
        
        /* Add a color on mouse-over */
        ul.breadcrumb li a:hover {
            color: #E89A8E;
            transition: .3s;
        }

        footer{
            height: 100px;
        }
            
        .title-text{
            margin: 50px;
        }
        h2{
            font-family: "Poller One", serif;
            font-size: 30px;
        }
        .title-text h2{
            margin: 0 0 0 25px;
        }

        .text2 h3{
            font-size: 20px;
            padding: 15px 0 0 15px;
        }

        p{
            font-size: 16px;
            margin-left: 15px;
        }

        .text1{
            font-size: 16px;
            margin-left: 15px;
            margin-top: 45px;
        
        }

        img{
            border-radius: 20px;
            width: 130px;
            height: 130px;
            object-fit: cover;
            margin: 10px;
            margin-left: 900px;
        }
        .container{
            display: flex;
            justify-content: space-between;
        }

        .container-1{
            background-color: #f0d3cf;
            height: 150px;
            margin: auto;
            width: 90%;
            border-radius: 20px;
            display: flex;
            justify-content: space-between;
        }

        .addBakingListButton {
            background-color: #a2683bb6;
            /* width: fit-content; */
            height: fit-content;
            border-radius: 20px;
            display: flex;
            align-items: center;
            /* padding: 5px; */
            margin: 50px 80px 10px 70px;
            cursor: pointer;
        }

        .add-bakinglist{
            font-size: 20px;
            margin: 0 15px 0 0;
        }

        .popup {
            box-shadow: 0 0 10px rgba(181, 181, 181, 0.7);
            position: absolute;
            background-color: #FBF7F4;
            display: none;
            position: absolute;
            /* Not rocket science here */
            top: 25%;
            left: 25%;
            width: 50%;
            height: 40%;
            padding: 10px;
            border: 1px solid #000;
            border-radius: 20px;
            z-index:20010;
            overflow: auto;
            /* color: pink; */
        
            /* Animation */
            -webkit-transition: all .5s ease-in-out;
            -moz-transition: all .5s ease-in-out;
            -o-transition: all .5s ease-in-out;
            -ms-transition: all .5s ease-in-out;
            transition: all .5s ease-in-out;
            opacity: 1;

        /* Phone number */
        .popup-text {
            margin: 6% 5%;
            color: #000;
            /* text-align: center; */
        }
        }

        /* Close button */
        .popup-close {
            text-align: right;
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 1.0em;
        }

        a:hover{
            transition: .5s;
        }
        .bakinglistname{
            background-color: #f0d3cfbf;
            font-size: 16px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            width: 350px;
            height: 50px;
            padding: 0 15px;
        }
        .add{
            font-size: 20px;
            display: block;
            margin: auto;
            padding: 10px 30px;
            border: none;
            border-radius: 5px;
            background-color: #a2683bb6;
            cursor: pointer;
        }
        .link {
        display: flex;
        }

        .delete {
            font-size: 20px;
            /* display: block; */
            /* margin: auto; */
            padding: 63px 15px;
            border: none;
            border-radius: 5px;
            background-color: red;
            cursor: pointer;
        }
</style>
<body>
<nav class="navbar">
        <a href="./home.html" class="sweetmade">Sweetmade</a>
        <div class="topbar">
            <ul>
                <li><a href="./home.php">Home</a></li>
                <li><a href="./recipes.php">Recipes</a></li>
                <li><a href="./community.php">Community</a></li>
                <li><a href="./aboutus.php">About Us</a></li>
            </ul>
        </div>
        <div class="leftbar">
            <a href="./bakinglist.php">
                <i class='bx bxs-heart-circle'></i>
            </a>
            <div class="dropdown">
                <i class='bx bxs-user-circle'></i>
                <div class="dropdown-content">
                    <a href="./profile.php">Profile</a>
                    <a href="./index.php">Sign Out</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="title-text">
            <h2>Baking List</h2>
        </div>
        <div class="addBakingListButton">
            <i class='bx bx-plus-circle'></i>
            <div class="add-bakinglist">
                <p>Add Bakinglist</p>
            </div>
        </div>
    </div>
    
    <div class="popup">
        <div class='popup-text'>
        <form action="test2.php" method='post'>
            <h3 style="text-align: center; margin-bottom: 15px;">Bakinglist Name</h3>
            <input type="text" name = "list" class="bakinglistname" style="display: block; margin: 10px auto;">
        <form>
            <!-- <button class="add">ADD</button> -->
        </div>
        <form action="test2.php" method='post'>
        <button type = "submit" class="add" name = "addlist">ADD</button>
        <form>
        <a class='popup-close' href="#"><i class='bx bx-x'></i></a>
    
    </div>

<?php

include("DatabaseConnect.php");
$userid = $_SESSION['UserId'];
        $sql = "SELECT * FROM favoritelist WHERE UserId = '$userid'";
        $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        $listname = $row['FavLisName'];
        $listid = urlencode($row['FavId']);
        $sql = "select count(BakeryId) as n from bakeryfavorite where FavId =". $row['FavId']."";
        $respone = $conn->query($sql);
        $data = $respone->fetch_assoc();
        echo "<br>
        <div class = \"container-1\">   
            <a href = \"./Bakinglist_detail.php?FavLisName=" . urlencode($row['FavLisName']) . "&FavId= " .urlencode($row['FavId']). "\">
                <div class= \"link\">
                    <div class = \"text2\">
                        <h3>" . $row['FavLisName'] . "</h3>
                        <p>".$data['n']." recipes</p>
                        <div class = \"text1\">
                            Created on " . $row['DateCreate'] . "
                        </div>
                    </div>
                
                </div>
            </a>
            <form action= \"test2.php\" method='post'>
                <input type = \"hidden\" name = \"FavId\" value=\"" . $row['FavId'] . "\">
                <input type = \"hidden\" name = \"deleteClicked\" value= \"true\">
                <button class= \"delete\" name=\"delete\" onClick = \"return delOperation()\">X</button>
            </form>
        </div>";

    }
    ?>    


    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="script-bakinglist.js"></script>
    <script language="javascript">
        $(document).ready(function() {
            $('.addBakingListButton').click(function() {
                $('.popup').css('opacity', 1);
                $('body').css('opacity', 0.8);
                $('.popup').css('display', 'block');
                $('.overlay').css('display', 'block');
            });

            // close popup
            $('.popup-close').click(function() {
                $('.popup').css('opacity', 0);
                // $('.container-1').css('opacity', 0);
                setTimeout(function() {
                    $('.popup').css('display', 'none');
                    // $('.container-1').css('display', 'none'); 
                }, 1000);
            });

        });

        var deleteClicked = false;

        function delOperation() {
            var confirmation = confirm("Are you sure to delete?");
            if (confirmation) {
                deleteClicked = true;
                alert("Already Delete!");
            } else {
                deleteClicked = false;
                alert("Cancel Delete!");
            }
            return deleteClicked;
        }

        // var deleteClicked = false;
        // function delOperation()
        // {
        //     if(confirm("Are you sure to delete?"))
        //         alert("Already Delete!");
        //         // deleteClicked = true;

        //     else
        //         alert("Cancel Delete!");
        //         // deleteClicked = false;
        // }
        </script>


</body>
</html>

<?php

?>