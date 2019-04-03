<?php
    require "include/header.php";
?>
<body>
    <div class="login-container">
        <div class="login-title">
            <?php echo APP_NAME; ?>
        </div>
        <div class="alert">
            <?php
                if (!empty($_SESSION['LOGIN_FAILED'])){
                    echo $_SESSION['LOGIN_FAILED'];
                    unset($_SESSION['LOGIN_FAILED']);
                }
            ?>
        </div>
        <form action="include/verify.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="login">Login</button>
        </form>
        <div class="login-extra-container">
            <p>Don't have an account? <a href="register.php">Click here.</a></p>
        </div>
    </div>
</body>
</html>