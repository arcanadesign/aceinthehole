<!DOCTYPE html>
<!--
File Name: header.php
Date: 08/30/18
Programmer: Misti D.
-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ace Multisport Events</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald|Raleway|Roboto" rel="stylesheet">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/generic.css" rel="stylesheet" type="text/css">
    <link href="css/grid.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">


    <script src="https://use.fontawesome.com/3047166c2e.js"></script>

</head>

<!-- top section -->

<body>
    <div id="container">
        
        <header>

            <!-- Logo -->

             <a href="index.php"><img src="images/acelogo.png" id="logo" alt="Ace in the Hole Logo"></a>


            <!-- Responsive Navigation -->

            <nav class="topnav" id="myTopnav">

                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="about.php">About</a></li>
                    <li>
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()"><img src="images/nav.png" class="navicon" alt="navigation icon"></a>
                    </li>
                </ul>
            </nav>

            <!-- Mobile Nav Hamburger Menu Script -->

            <script>
                function myFunction() {
                    var x = document.getElementById("myTopnav");
                    if (x.className === "topnav") {
                        x.className += " responsive";
                    } else {
                        x.className = "topnav";
                    }
                }

            </script>

        </header>
