<?php
session_start();
if (isset($_POST['productname']) && isset ($_SESSION['loginname'])) {
$_SESSION['productname'][]  = $_POST['productname'];
$_SESSION['productimage'][] = $_POST['productimage'];
}
require 'inc/head.php';
?>
<section class="cookies container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>
            <form method="POST">
                <input id="productimage" name="productimage" type="hidden" value="assets/img/product-46.jpg">
                <input id="productname" name="productname" type="hidden" value="Pecan nuts">
                <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                </button>
            </form>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
            <form method="POST">
                <input id="productimage" name="productimage" type="hidden" value="assets/img/product-36.jpg">
                <input id="productname" name="productname" type="hidden" value="Chocolate chips">
                <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                </button>
            </form>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
            <form method="POST">
                <input id="productimage" name="productimage" type="hidden" value="assets/img/product-58.jpg">
                <input id="productname" name="productname" type="hidden" value="Chocolate cookie">
                <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                </button>
            </form>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies chocolate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
            <form method="POST">
                <input id="productimage" name="productimage" type="hidden" value="assets/img/product-32.jpg">
                <input id="productname" name="productname" type="hidden" value="M&M's&copy; cookies">
                <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                </button>
            </form>
        </figcaption>
      </figure>
    </div>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
