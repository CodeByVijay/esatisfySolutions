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
            $_SESSION['userName'] = $userData['name'];
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

if (isset($_REQUEST['feedback-delete'])) {
    $id = $_GET['feedback-delete'];
    $feedback = "DELETE FROM `contact_us` WHERE `id`=" . $id;
    $result = mysqli_query($conn, $feedback);
    ?>
    <script>
        alert("Feedback Delete Successfully.")
        window.location.href = './admin/feedback.php?page=feedback';
    </script>
    <?php

}

if (isset($_REQUEST['save_job'])) {
    $job_title = $_POST['job_title'];
    $qualification = $_POST['qualification'];
    $location = $_POST['location'];
    $experience = $_POST['experience'];
    $salary = $_POST['salary'];
    $job_type = $_POST['job_type'];
    $job_desc = $_POST['job_desc'];
    $create_at = date('Y-m-d');

    $query = "INSERT INTO `jobs` (job_title, qualification, location, experience, salary,job_type, job_desc, create_at) VALUES('$job_title', '$qualification','$location','$experience','$salary',$job_type, '$job_desc','$create_at')";
    $result = mysqli_query($conn, $query);
    if ($result) {
    ?>
        <script>
            alert("Job Successfully Created.")
            window.location.href = './admin/jobs.php';
        </script>
<?php

    }
}
?>