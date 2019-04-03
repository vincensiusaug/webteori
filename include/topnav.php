<?php
    require "header.php";
?>
<header>
    <nav class="nav-header-main">
        <a href="#"><?php echo APP_NAME; ?></a>
        <div class="header-account">
            <div class="header-profile">
                <?php echo $_SESSION['UID'] ?>
            </div>
            <form action="../logout.php" method="post">
                <button type="submit" name="logout">Logout</button>
            </form>
        </div>
    </nav>
</header>