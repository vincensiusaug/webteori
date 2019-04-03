<?php
    require "include/topnav.php";
?>

<main>

    <?php
        if (empty($_SESSION['UID'])){
            header("Location: ../login.php");
        } else {
        }
    ?>

</main>

<?php
    require "include/footer.php";
?>