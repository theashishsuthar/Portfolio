<?php include "includes/admin_header.php"; ?>

<?php if (!$session->is_signed_in()) {redirect("login.php");}?>

    <div id="wrapper">

   
        <!-- Navigation -->
        
        <?php include "includes/admin_navigation.php"; ?>
        
        <div id="page-wrapper">

            <?php include "includes/admin_content.php"; ?>
            <!-- /.container-fluid -->

        </div>
<?php include "includes/admin_footer.php"; ?>