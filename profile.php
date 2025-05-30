<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="BookingStyle2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=menu">
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
        <div class="profilecontainer">
            <h1 id="profileheader">Welcome <!--echo "$user"--></h1>
            <div class="profilecontainer2">
                <div class="profilepic">
                    <img src="#" alt="Profile Picture">
                </div>
                <div class="aboutuser">
                    Sample Username $fname . $lname
                    <!--echo "<h2>$fname . $lname</h2>";-->
                    <!--echo "<h2>$email</h2>";-->
                    <!--echo "<h2>$phone</h2>";-->
                    <!--echo "<h2>$id</h2>";-->
                    <!--echo "<h2>$role</h2>";-->
                </div>
            </div>
                <h1 id="profileheader">Account Settings</h1>
            <div class="profilecontainer2">
                <div class="accountsettings">
                    <i>Submitting this form will apply changes to your user information</i>
                    <form>
                        <label for="fname">First Name:</label>
                        <input type="text" id="fname" name="fname">
                        <br>
                        <label for="lname">Last Name:</label>
                        <input type="text" id="lname" name="lname">
                        <br>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email">
                        <br>
                        <label for="phone">Phone Number:</label>
                        <input type="text" id="phone" name="phone">
                        <br>
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password">
                        <br>
                        <button type="submit" name="submit" class="button-81" role="button">Submit Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>