<!-- Main Navigation -->
<div class="main-wrapper">

<?php 
        include_once APPROOT . '/views/inc/topBar.php'; 
        //include_once APPROOT . '/views/inc/sideBar.php';
         if (Role::isConnected()) {

                include_once APPROOT . '/views/inc/topBar.php'; 
                include_once APPROOT . '/views/inc/sideBar.php';
        }
?>
   
<!-- Main Navigation -->