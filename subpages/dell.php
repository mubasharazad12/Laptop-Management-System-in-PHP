<?php
include ("../includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include ("../includes/meta-tags.php");
    ?>
    <title>dell</title>
</head>
<body>
<?php
include("../includes/header.php");
?>
<section>
    <div>
    <img class="index-img" src="../graphics/uploadfiles/dell.jpg" alt="image"/>
    </div>
    <div class="line"></div>
    <form class="form-style" action="../order.php" method="post" enctype="multipart/form-data">
        <div class="product-img">
            <img  src="../graphics/dell.png" alt="image">
        </div>
        <ul>
            <li>
                <h1>Specifications</h1>
            </li>
            <li>
                <label >• Lenovo Ideapad L340 Gaming </label>
            </li>
            <li>
                <label >• CPU: Intel Core i5-9400T </label>
            </li>
            <li>
                <label >• GPU:Nvidia GeForce GTX 1050 Ti </label>
            </li>
            <li>
                <label >• RAM: 8GB DDR4 (2,666MHz)</label>
            </li>
            <li>
                <label >• Storage: 128GB SSD: 1TB HDD @ 5,400RPM </label>
            </li>
            <li>
                <label >• Battery: 56 Whr, 4-cell Battery </label>
            </li>
            <li>
                <label >• Connectivity: Intel Wireless 9462AC card </label>
            </li>
            <li>
                <label >• Battery: 50Wh, 9-cell </label>
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
