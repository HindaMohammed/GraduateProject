<?php include 'header.php'; ?>
<?php

if(isset($_POST['add'])) {
  $image = $_FILES['image'];

  $new_name = rand().$image['name'];
  move_uploaded_file($image['tmp_name'], 'images/'.$new_name);

  $sql = "INSERT INTO gallery (image) VALUES ('$new_name')";

  if(mysqli_query($con, $sql)) {
    header("location: all-gallery.php");
  }
}

?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add new Gallery</h1>
      </div>
      	
      <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <lable>Image</lable>
          <input type="file" name="image" class="form-control" />
        </div>

        <button class="btn btn-success" name="add">Add</button>
      </form>
      
      
    </main>
<?php include 'footer.php'; ?>
