<?php include('headder.php'); ?>

<!-- Page Title -->
<section class="page-title" style="background-image:url(images/background/bg-13.jpg)">
    <div class="auto-container">
        <div class="content-box">
            <h1>Login</h1>
            <!-- <ul class="bread-crumb">
                    <li><a class="home" href="index-2.html"><span class="fa fa-home"></span></a></li>
                    <li>Products</li>
                </ul> -->
        </div>
    </div>
</section>

<!--Login Register Section-->
<section class="login-register-area">
    <div class="container mt-5 mb-5 w-75">
        <form action="main.php" method="post">
            <div class="form-group">
                <label for="">Username</label>
                <input type="email" name="username" class="form-control" placeholder="Username">
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="btn w-100">
                <button type="submit" class="btn btn-primary" name="login">Login</button>
            </div>
        </form>
    </div>

</section>
<?php include('footer.php'); ?>