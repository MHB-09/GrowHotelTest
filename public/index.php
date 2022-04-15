<?php
ob_start();
    session_start();
    require_once "../app/bootstrap.php";
    require APPROOT . '/views/inc/header.php';
    include_once APPROOT . '/views/inc/navigation.php';
?>

<!-- Main layout -->

<div class="content-body">
    <div class="container-fluid">

        <?php Render::body(); ?>

    </div>
</div>


<!-- Main layout -->


<?php 
   
        require APPROOT . '/views/inc/footer.php';
    
ob_end_flush();
?>