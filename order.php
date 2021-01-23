<?php
include ("includes/config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include ("includes/meta-tags.php");
    ?>

    <title>order</title>
</head>
<body>
<?php
include("includes/header.php");
?>
<section>
    <img class="index-img" src="graphics/order.jpg" alt="image"/>
    <h2> Order Your Product </h2>
    <form class="form-style" method="post" action="order-done.php">
        <ul>
            <li>
                <input type="text" name="name" class="field-style field-half"  required placeholder="Full Name" />
                <input type="email" name="email" class="field-style field-half align-right" required  placeholder="Email" />
            </li>
            <li>
                <input type="number" name="phone" class="field-style field-half " required  placeholder="Phone" />
                <input type="text" name="city" class="field-style field-half align-right" required  placeholder="City" />
            </li>
            <li>
                <input type="text" name="address" class="field-style field-full" required  placeholder="Address" />
            </li>
            <li>
                <input type="number" name="code" class="field-style field-half " required  placeholder="Postal / Zip Code" />
                <input type="text" name="state" class="field-style field-half align-right" required  placeholder="State" />
            </li>
            <li>
                <input type="text" id="abc" name="price" class="field-style field-half" required  placeholder="Product Price" />
            </li>
            <li>
                <input type="text" name="subject" class="field-style field-full" required  placeholder="Subject" />
            </li>
            <li>
                <label >Product  : </label>
                <select  name="product" class="field-style field-half">
                    <option value="acer">Acer</option>
                    <option value="dell">Dell</option>
                    <option value="lenovo">Lenovo</option>
                </select>
            </li>
            <li>
                <label >Country :</label>
                <select name="country" class="field-style field-half">
                    <option value="pak">Pakistan</option>
                    <option value="china">China</option>
                    <option value="uae">UAE</option>
                </select>
            </li>
            <li>
                <textarea name="msg" class="field-style" placeholder="Message"></textarea>
            </li>
            <li>
                <input type="submit" value="Check Out" />
            </li>
        </ul>
    </form>

</section>
<?php
include("includes/footer.php");
?>
</body>
</html>
