<?php
$sql="select proId,proName,proPrice,proImg from product where proType='Watch';";
$wat=mysqli_query($con,$sql);
?>
<section id="smart-watches" class="product-store padding-large position-relative">
      <div class="container">
        <div class="row">
          <div class="display-header d-flex justify-content-between pb-3">
            <h2 class="display-7 text-dark text-uppercase">Smart Watches</h2>
            <!-- <div class="btn-right">
              <a href="shop.html" class="btn btn-medium btn-normal text-uppercase">Go to Shop</a>
            </div> -->
          </div>
          <div class="swiper product-watch-swiper">
            <div class="swiper-wrapper">
            <?php while($row= mysqli_fetch_assoc($wat)){?>
              <div class="swiper-slide">
                <input type="hidden" id="id" value="<?= $row["proId"]?>">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="<?= $row["proImg"]?>" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                    <form action="payment.php" method="post">
                      <button href="" name="buy" value="<?= $row["proId"]?>" class="btn btn-medium btn-black">Buy<svg class="cart-outline"><use xlink:href="#cart-outline"></use></svg></button>
                      </form>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#"><?= $row["proName"]?></a>
                    </h3>
                    <span class="item-price text-primary">$<?= $row["proPrice"]?></span>
                  </div>
                </div>
              </div>
            <?php } ?>
           
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination position-absolute text-center"></div>
    </section>
    