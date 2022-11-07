<?php include "header.php"; ?>
<section class="py-5 " style="background-color: lightcyan">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card ">
                        <img src="assets/img/<?php echo $product['image'] ?>" alt="" class="card-img" height="300" />
                        <div class="card-body mt-2" style="background-color: lightgreen;">
                            <h3><?php echo $product['name'] ?></h3>
                            <h4>TK. <?php echo $product['price'] ?></h4>
                            <a href="action.php?page=product-detail&&id=<?php echo $product['id'];?>" class="btn btn-outline-primary ">Details </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
