<?php
include ("../includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include ("../includes/meta-tags.php");
    ?>
    <title>lenovo</title>
</head>
<body>
<?php
include("../includes/header.php");
?>
<section>

    <img class="index-img" src="../graphics/uploadfiles/lenovo.jpg" alt="image"/>
    <div class="line"></div>
    <form class="form-style" action="../order.php" method="post" enctype="multipart/form-data">
        <div class="product-img">
            <img  src="../graphics/lenovo.jpg" alt="image">
        </div>
        <ul>
            <li>
                <h1>Specifications</h1>
            </li>
            <li>
                <label >• Lenovo Ideapad L340 Gaming </label>
            </li>
            <li>
                <label >• CPU: Intel Core i7-9750H </label>
            </li>
            <li>
                <label >• GPU: NVIDIA GeForce GTX 1650 (Laptop)  </label>
            </li>
            <li>
                <label >• Display: 15.6”, Full HD (1920 x 1080), IPS </label>
            </li>
            <li>
                <label >• Storage: 256GB SSD + 1000GB HDD  </label>
            </li>
            <li>
                <label >• RAM: 8GB DDR4 </label>
            </li>
            <li>
                <label >• Weight: 2.19 kg (4.8 lbs)</label>
            </li>
            <li>
                <label >• Battery: 45Wh, 3-cell </label>
            </li>

            <li>
                <input type="submit" value="Order Now" />
            </li>
        </ul>
    </form>

</section>

<?php
include("../includes/footer.php");
?>
</body>
</html>
