<?php
include_once("config.php");

?>

<?php
$id = $_GET['id'];
$records = mysqli_query($conn,"SELECT * FROM quote where id = '$id'");

$data = mysqli_fetch_array($records);



if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $services = $_POST['services'];

    $edit = mysqli_query($conn," UPDATE quote set id ='$id', first_name ='$first_name', last_name='$last_name',phone='$phone',message='$message',services='$services' where id='$id'");

    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:list_quote.php"); // redirects to all records page
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
                    <label for="example-search-input" class="col-form-label">FIRST NAME</label>
                    <input class="form-control" type="text" name="first_name" value="<?php echo "$data[first_name]"?>" id="example-search-input">
                </div>
                <div class="form-group">
                    <label for="example-search-input" class="col-form-label">LAST NAME</label>
                    <input class="form-control" type="text" name="last_name" value="<?php echo "$data[last_name]"?>" id="example-search-input">
                </div>
                <div class="form-group">
                    <label for="example-search-input" class="col-form-label">PHONE</label>
                    <input class="form-control" type="text" name="phone" value="<?php echo "$data[phone]"?>" id="example-search-input">
                </div>
                <div class="form-group">
                    <label for="example-search-input" class="col-form-label">MESSAGE</label>
                    <input class="form-control" type="text" name="message" value="<?php echo "$data[message]"?>" id="example-search-input">
                </div>
                <div class="form-group">
                    <label for="example-search-input" class="col-form-label">SERVICES</label>
                    <input class="form-control" type="text" name="services" value="<?php echo "$data[services]"?>" id="example-search-input">
                </div>
                <button class="btn btn-primary" name="submit" type="submit">Edit form</button>
            </form>
        </div>
    </div>
</div>

</div>

<?php include("Footer.php"); ?>


