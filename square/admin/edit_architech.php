<?php


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

$id = $_GET['id'];
$records = mysqli_query($conn,"SELECT * FROM architect where id = '$id'");

$data = mysqli_fetch_array($records);



if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $social_fb = $_POST['social_fb'];
    $social_in = $_POST['social_in'];
    $social_twitter = $_POST['social_twitter'];
    $social_insta = $_POST['social_insta'];


    if(isset($_FILES["image"]))
    {

        $targetDir = "upload/";
        $fileName = basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $fileName=generateRandomString();
        $fileName=$fileName.".".$imageFileType;



        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
        $edit = mysqli_query($conn," UPDATE architect set id ='$id', name ='$name', designation='$designation',image='$fileName',social_fb='$social_fb',social_in='$social_in',social_twitter='$social_twitter',social_insta='$social_insta' where id='$id'");


    }
    else{

        $edit = mysqli_query($conn," UPDATE architect set id ='$id', name ='$name', designation='$designation',social_fb='$social_fb',social_in='$social_in',social_twitter='$social_twitter',social_insta='$social_insta' where id='$id'");
    }







    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:list_architech.php"); // redirects to all records page
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
            <form action="" method="post" enctype='multipart/form-data'>
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">ID</label>
                    <input class="form-control" type="text" name="id" value="<?php echo "$data[id]"?>" id="example-text-input">
                </div>
                <div class="form-group">
                    <label for="example-search-input" class="col-form-label">NAME</label>
                    <input class="form-control" type="text" name="name" value="<?php echo "$data[name]"?>" id="example-search-input">
                </div>
                <div class="form-group">
                    <label for="example-search-input" class="col-form-label">designation</label>
                    <input class="form-control" type="text" name="designation" value="<?php echo "$data[designation]"?>" id="example-search-input">
                </div>
                <div class="form-group">
                    <label for="example-search-input" class="col-form-label">image</label>
                    <input class="form-control" type="file" name="image" id="example-email-input">
                </div>
                <div class="form-group">
                    <label for="example-search-input" class="col-form-label">social_fb</label>
                    <input class="form-control" type="text" name="social_fb" value="<?php echo "$data[social_fb]"?>" id="example-search-input">
                </div>
                <div class="form-group">
                    <label for="example-search-input" class="col-form-label">social_in</label>
                    <input class="form-control" type="text" name="social_in" value="<?php echo "$data[social_in]"?>" id="example-search-input">
                </div>
                <div class="form-group">
                    <label for="example-search-input" class="col-form-label">social_twitter</label>
                    <input class="form-control" type="text" name="social_twitter" value="<?php echo "$data[social_twitter]"?>" id="example-search-input">
                </div>
                <div class="form-group">
                    <label for="example-search-input" class="col-form-label">social_insta</label>
                    <input class="form-control" type="text" name="social_insta" value="<?php echo "$data[social_insta]"?>" id="example-search-input">
                </div>
                <button class="btn btn-primary" name="submit" type="submit">Edit form</button>
            </form>
        </div>
    </div>
</div>

</div>

<?php include("Footer.php"); ?>



