<?php include("Header.php");

include_once("config.php");



if (isset($_POST["submit"])) {

    $sql = "INSERT INTO quote(first_name,last_name,services,phone,message )VALUES ('" . $_POST["fname"] . "','" . $_POST["lname"] . "','" . $_POST["user_type"] . "','" . $_POST["phone"] . "','" . $_POST["message"] . "')";

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
                        <label for="example-search-input" class="col-form-label">FIRST NAME</label>
                        <input class="form-control" type="text" name="fname" id="example-search-input">
                    </div>
                    <div class="form-group">
                        <label for="example-tel-input" class="col-form-label">LAST NAME</label>
                        <input class="form-control" type="text" name="lname" id="example-tel-input">
                    </div>

                           <?php

                           $sql = 'SELECT * FROM services';
                           $result = mysqli_query($conn, $sql);
                           if (mysqli_num_rows($result) > 0)
                            {
                                ?>

                    <form method="post">
                        <div class="form-gp">

                            <select class="custom-select" style="border: 1px solid #e6e6e6;" name="user_type">
                                <option selected="selected">Open this select menu</option>

                                <?php
                                while($row = mysqli_fetch_assoc($result))
                                    {
                                        ?>

                                        <option > <?php echo $row["services_name"];?></option>

                                        <?php
                                    }

                                }
                                else {
                                    echo "0 results";
                                }
                                ?>
                            </select>


                        </div>
<!---->


<!--                    <div class="form-group">-->
<!--                        <label for="example-email-input" class="col-form-label">SERVICES NAME</label>-->
<!--                        <input class="form-control" type="text" name="services" id="example-email-input">-->
<!--                    </div>-->
                        <div class="form-group">
                            <label for="example-email-input" class="col-form-label">PHONE #</label>
                            <input class="form-control" type="number" name="phone" id="example-email-input">
                        </div>
                        <div class="form-group">
                            <label for="example-email-input" class="col-form-label">MESSAGE</label>
                            <input class="form-control" type="text" name="message" id="example-email-input">
                        </div>
                        <button class="btn btn-primary" name="submit" type="submit">Submit form</button>

                </form>
            </div>
        </div>
    </div>


    </div>
<?php include("Footer.php"); ?>