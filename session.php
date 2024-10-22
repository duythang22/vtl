<?php
    session_start();
    if (isset($_SESSION["ID_admin"])){
        header('Location: ./QL_KH.php');
    ?>

<?php }
    else{ ?>
        <div style="text-align: center;"><p>Vui lòng đăng nhập</p></div>
        <div style="text-align: center;"><button><a href="./Login.php">Đăng nhập</a></button></div>
    <?php }
    ?>