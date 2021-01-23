<?php
include ("includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include ("includes/meta-tags.php");
    ?>
    <title>client</title>
</head>
<body>
<?php
include("includes/header.php");
?>

<section>
    <img class="index-img" src="graphics/client.jpg" alt="image"/>
    <h2> Client Area </h2>

    <form class="form-style" action="client-upload.php" method="post" enctype="multipart/form-data">
        <ul>
        <li>
            <label >Email address:</label>
            <input class="field-style field-half" type="email" name="email" />
        </li>
        <li>
            <label >Full Password:</label>
            <input class="field-style field-half"  type="password" name="pass" />
        </li>
        <li>
            <label >Product Name:</label>
            <select class="field-style field-half" name="product">
                <option value="acer">Acer</option>
                <option value="dell">Dell</option>
                <option value="lenovo">Lenovo</option>
            </select>
        </li>
        <li>
            <label >File Name:</label>
            <input   type="file" name="file" />
        </li>
        <li>
        <input type="submit" name="submit" value="Upload" />
        </li>
        </ul>
    </form>

</section>

<?php
include("includes/footer.php");
?>
</body>
</html>
