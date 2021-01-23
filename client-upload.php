<?php
include ("includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include ("includes/meta-tags.php");
    ?>

    <title>upload</title>
</head>
<body>
<?php
include("includes/header.php");
?>
<section>
    <h2> Client Area</h2>
    <form class="form-style" action="client.php" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label>
                    <?php
                    $selectedFile="../graphics/uploadfiles/lenovo.jpg";
                    $selectedFile="../graphics/uploadfiles/dell.jpg";
                    $selectedFile="../graphics/uploadfiles/acer.jpg";
                    $email=$_POST["email"];
                    $password=$_POST["pass"];
                    $services=$_POST["product"];
                    $authorized=false;

                    if($services=="lenovo")$selectedFile="lenovo.jpg";
                    if($services=="dell")$selectedFile="dell.jpg";
                    if($services=="acer")$selectedFile="acer.jpg";
                    if(($email==$clientEmail) && ($password==$clientPass ) ){
                        $authorized=true;
                        $fileSize= 5 * 1024 * 1024;
                        if ((   ($_FILES["file"]["type"] == "image/jpeg") ||
                                ($_FILES["file"]["type"] == "image/png") ||
                                ($_FILES["file"]["type"] == "application/pdf") ||
                                ($_FILES["file"]["type"] == "image/jpg,")) &&
                            ($_FILES["file"]["size"] < $fileSize))

                        {
                            if ($_FILES["file"]["error"] > 0) {
                                echo "Return Code:" . $_FILES["file"]["error"] . "<br/>";

                            }
                            else {
                                move_uploaded_file($_FILES["file"]["tmp_name"],"graphics/uploadfiles/" . $selectedFile);

                                if ($authorized) {

                                    echo "Your cover image of product page is sucessfully changed! ";
                                }
                            }
                        }
                        else {
                            echo "Invalid file";
                        }
                    }
                    if (!$authorized)
                    {
                        echo "Please enter a valid email or password!";
                    }
                    ?>
                </label>
            </li>
            <li>
                <input type="submit" value="Back" />
            </li>
        </ul>
    </form>
<div class="space-div">


</div>
</section>
<?php
include("includes/footer.php");
?>
</body>
</html>

