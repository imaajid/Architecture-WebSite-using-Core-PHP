<?php include("Header.php");
include_once("config.php");

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}



if (isset($_POST["submit"])) {

    $targetDir = "upload/";
    $fileName = basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    $fileName=generateRandomString();
    $fileName=$fileName.".".$imageFileType;
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);

    $sql = "INSERT INTO our_project(name,image,services_id )VALUES ('" . $_POST["name"] . "','" . $fileName . "','" . $_POST["user_type"] . "')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    $conn->close();
}

?>


<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="example-search-input" class="col-form-label">NAME</label>
                    <input class="form-control" type="text" name="name" id="example-search-input">
                </div>

                <div class="form-group">
                    <label for="example-email-input" class="col-form-label">IMAGES</label>
                    <input class="form-control" type="file" name="image" id="example-email-input">
                </div>
                <?php

                $sql = 'SELECT * FROM services';
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0)
                {
                ?>

                <div class="form-group">
                    <select class="custom-select" style="border: 1px solid #e6e6e6;" name="user_type">
                        <option selected="selected">Open this select menu</option>
                        <?php
                        while($row = mysqli_fetch_assoc($result))
                        {
                            ?>

                            <option><?php echo $row["services_name"];?></option>

                            <?php
                        }

                        }
                        else {
                            echo "0 results";
                        }
                        ?>
                    </select>

                </div>

                <button class="btn btn-primary" name="submit" type="submit">Submit form</button>

            </form>
        </div>
    </div>
</div>


</div>
<?php include("Footer.php"); ?>
