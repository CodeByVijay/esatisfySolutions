<?php
require_once('./config.php');
error_reporting(1);
if (isset($_POST['contact_us_btn'])) {
    $name = mysqli_real_escape_string($conn, $_POST['form_name']);
    $email = mysqli_real_escape_string($conn, $_POST['form_email']);
    $phone = mysqli_real_escape_string($conn, $_POST['form_phone']);
    $subject = mysqli_real_escape_string($conn, $_POST['form_subject']);
    $message = mysqli_real_escape_string($conn, $_POST['form_message']);

    // mysqli_real_escape_string($conn, );

    $query = "INSERT INTO `contact_us` (name, email, phone, subject, message) VALUES('$name', '$email','$phone','$subject','$message')";

    $result = mysqli_query($conn, $query);
    if ($result) {
?>
        <script>
            alert("Your Message Successfully Send.")
            window.location.href = './contact.php';
        </script>
        <?php

    }
}

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $user = "SELECT * FROM `admin` WHERE `username`='" . $username . "'";
    $result = mysqli_query($conn, $user);
    if (mysqli_num_rows($result) == 1) {
        $userData = mysqli_fetch_assoc($result);
        if (md5($password) === $userData['password']) {
            $_SESSION['login_user'] = $userData['username'];
            header("location: admin/dashboard.php");
        } else {
        ?>
            <script>
                alert("Password Wrong.")
                window.location.href = './login.php';
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            alert("Unauthorize Access.")
            window.location.href = './login.php';
        </script>
<?php
    }
}
?>