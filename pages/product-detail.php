<?php include 'header.php' ?>

<section class="py-5" style="background-color: lightcyan;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/img/<?php echo $singelProduct['image'];?>" alt="" height="300" class="w-75">
            </div>
            <div class="col-md-6 ">
                <h1><?php echo $singelProduct['name'];?></h1>
                <h4>TK. <?php echo $singelProduct['price'];?></h4>
                <p><?php echo $singelProduct['description'];?> </p>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php' ?>
