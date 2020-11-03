<?php include("Header.php");


?>
<?php
include_once("config.php");

if (isset($_POST["submit"])) {

    $sql = "INSERT INTO services(services_name)VALUES ('" . $_POST["services"] . "')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    $conn->close();
}


?>
<div class="main-content-inner">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <form action="services.php" method="post">
                    <div class="form-group">

                        <label for="example-search-input" class="col-form-label">SERVICES NAME</label>

                        <input class="form-control" type="text" name="services" id="example-search-input">
                    </div>
                    <button class="btn btn-primary" name="submit" type="submit">Submit form</button>

                </form>
            </div>
        </div>
    </div>
</div>
<?php include("Footer.php"); ?>
