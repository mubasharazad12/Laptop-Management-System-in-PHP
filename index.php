<?php
include ("includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include ("includes/meta-tags.php");
    ?>
    <title>index</title>
</head>
<body>
<?php
include("includes/header.php");
?>
<section>
    <img class="index-img" src="graphics/index.jpg" alt="image"/>

    <h2>FEATURED PRODUCTS</h2>
    <div class="products">
        <a href="subpages/lenovo.php">  <img src="graphics/lenovo.jpg" alt="image"> </a>
    </div>
    <div class="products" >
        <a href="subpages/dell.php">    <img src="graphics/dell.png" alt="image"> </a>
    </div>
    <div class="products products-setting">
        <a href="subpages/acer.php">   <img src="graphics/lenovo2.png" alt="image"> </a>
    </div>
</section>

<?php
include("includes/footer.php");
?>
</body>
</html>