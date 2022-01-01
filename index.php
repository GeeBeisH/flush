<?php
include_once 'includes/header.php';
?>

<body>
    <div class="container" id="masterView">
        <?php
        include_once 'includes/nav.php';
        ?>
        <div class="row">
            <div class="col" id="menu">
                <?php
                    include 'includes/menu.php';
                 ?>
            </div>
            <div class="col" id="displayRoom">
                <?php
                    include 'displays/invoices.php'; 
                ?>
            </div>
            
        </div>
    </div>

    <?php
    include_once 'includes/footer.php';
    ?>