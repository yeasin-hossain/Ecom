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