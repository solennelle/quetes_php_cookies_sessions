<?php
session_start();
if (isset($_SESSION['loginname'])) {
    $productNames = $_SESSION['productname'];
    $productImages = $_SESSION['productimage'];
    require 'inc/head.php';
    ?>
    <section class="cookies container-fluid">
        <div class="row">
            <table class="table table-responsive">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                </tr>
                </thead>
                <tbody>
                <?php for ($i = 0; $i < count($productImages); $i++) { ?>
                    <tr>
                        <td> <img src="<?=$productImages[$i]?>" class="img-cart"> </td>
                        <td><?=$productNames[$i]?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
    <?php
    require 'inc/foot.php';
} else {
    header("location:../login.php");
}

?>
