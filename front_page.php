<?php require_once('header.php');
      require_once('./php/front_page.php');
?>

<nav class="navbar navbar-dark bg-dark ">
    <div class="container home-nav">
  <ul>
      <li><a href="">Home</a></li>
      <li><a href="">Profile</a></li>
      <li><a href="">Cart</a></li>
      <li><a href="">Track</a></li>
        <form action="<?php __DIR__ ?>front_page.php" method="POST">
            <button class="btn btn-info" name="product_search">Search</button>
            <input type="text" class="form-control" name="product_name" placeholder="Egg,Dim,Anda">
        </form>
  </ul>
  </div>
</nav>
<?php if(isset($_SESSION['msg_wrn'])):?>
<div class="msg">
		<!-- this h1 for condition in sweetalert if h1 result 11 then sweealert play -->
		<h1 id="condition" class="d-none">11</h1>
		<p id="msg" class="d-none">
			<?php echo $_SESSION['msg_wrn'];
			unset($_SESSION['msg_wrn']);?>
		</p>
</div>
<?php endif ?>

<!-- Product Search iteam -->
<?php if($product_search): ?>
    
<div class="product">
<?php while($data =$result->fetch_assoc()):?>
    <div class="card" style="width: 18rem;">
        <img src="<?php __DIR__ ?>./style/images/productiteam.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $data['product_name'];?></h5>
            <h6>Price:- <?= $data['price'];?> TK</h6>
            <p>Qunatity:- <?= $data['quantity'];?> Available</p>
            <a href="#" class="btn btn-primary">Add to Cart</a>
        </div>
    </div>
    <?php endwhile;?>
</div>

<?php else: ?>

    <div class="product">
    <div class="card" style="width: 18rem;">
        <img src="<?php __dir__ ?>./style/images/demoshop.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Al Modina</h5>
            <h6>Address</h6>
            <p>Contact</p>
            <a href="#" class="btn btn-primary">Visit Inside</a>
        </div>
    </div>
</div>

<?php endif; ?>
<?php require_once('footer.php'); ?>


