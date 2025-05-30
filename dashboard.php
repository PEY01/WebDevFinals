<?php 
    require_once "config.php";
    session_start();

    if (!isset($_SESSION["username"])) {
        header("location: signin.php");
        exit;
    }

    $username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="BookingStyle2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=menu" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>
<body>
    <nav>
        <div class="navcontainer">
            <div class="logocontainer">
                <ul>
                    <li id="Logo">
                        BookingName
                    </li>
                </ul>
            </div>
                <div class="linkcontainer">
                    <ul id="links">
                        <li id="link">
                            <a href="dashboard.php">Home</a>
                        </li>
                        <li id="link">
                            <a href="booking.php">Booking</a>
                        </li>
                        <li id="link">
                            <a href="mybookings.php">MyBookings</a>
                        </li>
                        <li id="link">
                            <a href="profile.php">Profile</a>
                        </li>
                        <!--echo "<li id="link><a href="admin.php>Admin</a></li>"-->
                        <li id="link">
                            <a href="logout.php">Log Out</a>
                        </li>
                    </ul>
                </div>
            <div class="dropdowncontainer">
                <p class="dropdown">
                    <span class="material-symbols-outlined">
                        menu
                    </span>
                </p>
                <div class="sidelink">
                    <ul id="links">
                        <li id="sidelink">
                            <a href="dashboard.php">Home</a>
                        </li>
                        <li id="sidelink">
                            <a href="booking.php">Booking</a>
                        </li>
                        <li id="sidelink">
                            <a href="mybookings.php">MyBookings</a>
                        </li>
                        <li id="sidelink">
                            <a href="profile.php">Profile</a>
                        </li>
                        <!--echo "<li id="sidelink><a href="admin.php>Admin</a></li>"-->
                        <li id="sidelink">
                            <a href="logout.php">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <div class="dashcontainer">
            <div class="homeimg"></div>
                <div class="content">
                    <h1>
                        BookingName
                    </h1>
                    <h2>
                        Book, Choose, Pickup, Drop
                    </h2>
                    <h1>
                        Book A Ride Anywhere
                    </h1>
                </div>
                <div class="services">
                    <h1>Available Services</h1>
                    <div class="subservices">
                        <div class="iconservice">
                            <h3><i class="fa fa-car"></i></h3>
                            <p>Any 4 wheel Vehicle</p>
                            <p>Sedan, Hatchback, Van, Etc...</p>
                        </div>
                        <div class="iconservice">
                            <h3><img src="Sidecar.png"></h3>
                            <p>3 wheel Vehicle</p>
                            <p>Any Motorcycle with a Side car or what you call a "Trike"</p>
                        </div>
                        <div class="iconservice">
                            <h3>
                                <svg data-v-f6279e27="" xmlns="http://www.w3.org/2000/svg"
                                    width="25"
                                    height="25"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-bike-icon lucide-bike lucide-icon">
                                    <circle cx="18.5" cy="17.5" r="3.5"></circle>
                                    <circle cx="5.5" cy="17.5" r="3.5"></circle>
                                    <circle cx="15" cy="5" r="1"></circle>
                                    <path d="M12 17.5V14l-3-3 4-3 2 3h2"></path>
                                </svg>
                            </h3>
                            <p>2 wheel Vehicle</p>
                            <p>A Motorcycle...</p>
                        </div>
                    </div>
                </div>
                <h1 id="black">How to</h1>
                <div class="how">
                    <div class="steps">
                        <h3>1</h3>
                        <h4>Go to Booking</h4>
                    </div>
                    <div class="steps">
                        <h3>2</h3>
                        <h4>Fill up the form</h4>
                    </div>
                    <div class="steps">
                        <h3>3</h3>
                        <h4>Wait for your request to be approved</h4>
                    </div>
                    <div class="steps">
                        <h3>4</h3>
                        <h4>If approved, wait for rider to pick you up</h4>
                    </div>
                </div>
            </div>
    </main>
</body>
</html>