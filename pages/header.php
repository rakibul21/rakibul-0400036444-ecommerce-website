<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/all.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>
<nav class="navbar navbar-expand-md bg-primary navbar-dark  shadow" >
    <div class="container">
        <a href="" class="navbar-brand">Ecommerce Base Website</a>
        <ul class="navbar-nav">
            <li><a href="action.php?page=home" class="nav-link">Home</a></li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product Category</a>
                <ul class="dropdown-menu " style="background-color: #0dcaf0;">
                    <?php foreach ($categories as $category) { ?>
                        <li><a href="action.php?page=category-product&&category_id=<?php echo $category['id'] ?>" class="dropdown-item"> <?php echo $category['name']; ?> </a></li>
                    <?php } ?>
                </ul>
            </li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Brand</a>
                <ul class="dropdown-menu" style="background-color: darkgrey;">
                    <?php foreach ($brands as $brand)  { ?>
                    <li><a href="action.php?page=brand&&brand_id=<?php echo $brand['id'] ?>" class="dropdown-item">  <?php echo $brand['name']; ?></a></li>
                    <?php } ?>
                </ul>
            </li>
        </ul>
    </div>
</nav>
