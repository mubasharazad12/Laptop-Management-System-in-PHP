<?php
include ("includes/config.php");
$name = $email=$phone=$address=$postalcode=$state=$product=$country = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = input($_POST["name"]);
    $email = input($_POST["email"]);
    $phone = input($_POST["phone"]);
    $address = input($_POST["address"]);
    $postalcode = input($_POST["code"]);
    $state = input($_POST["state"]);
    $product = input($_POST["product"]);
    $country = input($_POST["country"]);

}
function input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include ("includes/meta-tags.php");
    ?>
    <title>order-done</title>
</head>
<body>
<?php
include("includes/header.php");
?>
<section>
    <h2>
        Thanks for shopping with us online!
    </h2>
    <form class="form-style" action="order.php" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label >Name :<?php echo "$name"?> </label>
            </li>
            <li>
                <label >Email address: <?php echo "$email"?> </label>
            </li>
            <li>
                <label >Phone Number: <?php echo "$phone"?> </label>
            </li>
            <li>
                <label >Billing Address: <?php echo "$address"?> </label>
            </li>
            <li>
                <label >Country: <?php echo "$country"?> </label>
            </li>
            <li>
                <label >State: <?php echo "$state"?> </label>
            </li>
            <li>
                <label >Postal Code: <?php echo "$postalcode"?> </label>
            </li>
            <li>
                <label class='highlight' >Product: <?php echo "$product"?> </label>
            </li>
            <li>
                <?php
                $price= "500$ ";
                $price2= "400$ ";
                $price3= "600$ ";
                if ($product=="acer") {
                 echo "<label class='highlight' >Product Price: $price  </label>";
                }
                elseif($product=="dell") {
                    echo "<label class='highlight'>Product Price:$price2 </label>";
                }
                else{
                    echo "<label class='highlight'  >Product Price:$price3 </label>";
                }
                ?>
            </li>
            <li>
                <h2>
                    Your order has been successfully processed against order id is #1036578
                </h2>
            </li>
            <li>
                <input type="submit" value="Back" />
            </li>
        </ul>
    </form>
</section>

<?php
include("includes/footer.php");
?>
</body>
</html>
