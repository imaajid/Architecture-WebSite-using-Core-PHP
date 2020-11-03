<?php
include_once("config.php");

?>

<?php
$id = $_GET['id'];
$records = mysqli_query($conn,"SELECT * FROM services where id = '$id'");

$data = mysqli_fetch_array($records);



if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $services_name = $_POST['services_name'];

    $edit = mysqli_query($conn," UPDATE services set id ='$id', services_name ='$services_name' where id='$id'");

    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:services_list.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }
}


include("Header.php");
?>





<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">ID</label>
                    <input class="form-control" type="text" name="id" value="<?php echo "$data[id]"?>" id="example-text-input">
                </div>
                <div class="form-group">
                    <label for="example-search-input" class="col-form-label">SERVICES NAME</label>
                    <input class="form-control" type="text" name="services_name" value="<?php echo "$data[services_name]"?>" id="example-search-input">
                </div>
                <button class="btn btn-primary" name="submit" type="submit">Edit form</button>
            </form>
        </div>
    </div>
</div>

</div>

<?php include("Footer.php"); ?>

