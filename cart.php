<?php
session_start();
var_dump($_SESSION);
if (isset($_SESSION['loginname'])) {
require 'inc/head.php';
?>
<section class="cookies container-fluid">
    <div class="row">
      TODO : Display shopping cart items from $_SESSION here.
    </div>
</section>
<?php require 'inc/foot.php';
} else {
        header("location:../login.php");
}

?>
