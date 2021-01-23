<?php
include ("../includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include ("../includes/meta-tags.php");
    ?>
    <title>acer</title>
</head>
<body>
<?php
include("../includes/header.php");
?>
<section>
    <img class="index-img" src="../graphics/uploadfiles/acer.jpg" alt="image"/>
    <div class="line"></div>

    <form class="form-style" action="../order.php" method="post" enctype="multipart/form-data">
        <div class="product-img">
            <img  src="../graphics/lenovo2.png" alt="image">
        </div>
        <ul>
            <li>
                <h1>Specifications</h1>
            </li>
            <li>
                <label >• Acer Nitro 5 </label>
            </li>
            <li>
                <label >• CPU: 2.3GHz Intel Core i5-8300H </label>
            </li>
            <li>
                <label >• GPU: Nvidia GeForce GTX 1050 ( 4GB VRAM) </label>
            </li>
            <li>
                <label >• RAM: 8GB SDRAM (DDR4) </label>
            </li>
            <li>
                <label >• Screen: 15.6-inch FHD (1,920 x 1,080) </label>
            </li>
            <li>
                <label >• Storage: 1TB HDD </label>
            </li>
            <li>
                <label >• Connectivity: 802.11ac Wi-Fi, Gigabit LAN</label>
            </li>
            <li>
                <label >• Battery: 45Wh, 6-cell </label>
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
