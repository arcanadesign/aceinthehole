<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Ace in the Hole Multisports Events</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald|Niconne" rel="stylesheet">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/generic.css" rel="stylesheet" type="text/css">
    <link href="css/grid.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    
    <script src="http://lesscss.googlecode.com/files/less-1.0.30.min.js"></script>
    <script src="https://use.fontawesome.com/3047166c2e.js"></script>

</head>

<!-- top section -->

<body>
    <div id="container">
        <header>

            <!-- Logo -->

            <img src="images/placeholder.jpg" id="logo" alt="Ace in the Hole Logo">

            <!-- Responsive Navigation -->

            <div class="topnav" id="myTopnav">

                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">About</a></li>
                    <li>
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()"><img src="images/nav.png" class="navicon"></a>
                    </li>
                </ul>
            </div>

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
