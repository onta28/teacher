<?php
 $page_title="ການຂາຍ";
 require_once "../utils/MainHeard.php";
 ?>
    <div class="">
        <?php
        include("nav.php"); ?>
        <div class="row">
            <?php include_once("sidbar.php"); ?>
            <main class="col-lg-10 p-1">
                <?php include("../pages/showSummary.php");?>
            </main>
        </div>
    </div>
    <?php 
    require_once "../utils/Mainfooter.php";
    ?>