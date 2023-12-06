<link href="../../assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5" rel="stylesheet" />

<?php
session_start();
//check if the submit button was clicked or not

if (isset($_POST['submit'])) {
    //echo "Clicked";
    //connect to the database

    require "conn.php";
    //collect data from the form

    $username = $_POST['username'];
    $password = $_POST['password'];


    //check if the fields are empty
    if ($_POST['username'] == "") {
        $errorMessage = "Please enter a username.";
        echo "<script>alert('$errorMessage');</script>";
    } elseif ($_POST['password'] == "") {
        $errorMessage = "Please enter a password.";
        echo "<script>alert('$errorMessage');</script>";
    } else if (strlen($password) < 3) {
        echo "<script>alert('your password must contain atleat 3 character')</script>";
    }

    //check if the password provided matches what we have in the database
    $sql = "SELECT * FROM users WHERE username =?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "<script>alert('Invalid Password .Try Again');</script>";


        $error = true;
        if ($error) {
            // Errors occurred, stop further execution
            echo "<script>window.history.back();</script>"; // Go back one step in history
            exit(); // Terminate the script
        }
    } else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);


        if ($row = mysqli_fetch_assoc($result)) {
            $passCheck = password_verify($password, $row['password']);
            if ($passCheck == false) {
                echo "<script>alert('Invalid Password .Try Again');</script>";


                $error = true;
                if ($error) {
                    // Errors occurred, stop further execution
                    echo "<script>window.history.back();</script>"; // Go back one step in history
                    exit(); // Terminate the script
                }
            } elseif ($passCheck == true) {
                $_SESSION['sessionId'] = $row['id'];
                $_SESSION['sessionUsername'] = $row['username'];
                $_SESSION['sessionEmail'] = $row['email'];

                $_SESSION['success'] = "<div class=' alert-success'> 
                        You have been logged in Successifuly</div>";
                header("Location: ../dashboard.php?success=Loggedin");
            }
        } else {


            echo "<script>alert('Invalid Password OR Invalid Username .Try Again');</script>";
            $error = true;
            if ($error) {
                // Errors occurred, stop further execution
                echo "<script>window.history.back();</script>"; // Go back one step in history
                exit(); // Terminate the script
            }
        }
    }
} else {
    echo "<script>alert('Invalid Password OR Invalid Username.Try Again');</script>";
    $error = true;
    if ($error) {
        // Errors occurred, stop further execution
        echo "<script>window.history.back();</script>"; // Go back one step in history
        exit(); // Terminate the script
    }
}

?>