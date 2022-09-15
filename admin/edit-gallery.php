<?php include 'header.php'; ?>
<?php

if($_GET['id']) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM gallery WHERE id = $id";
  $result = mysqli_query($con, $sql);
  $data = mysqli_fetch_assoc($result);
}

if(isset($_POST['edit'])) {
  $image = $_FILES['image'];

  $new_name = $data['image'];
  if(!empty($image['name'])) {
    $new_name = rand().$image['name'];
    move_uploaded_file($image['tmp_name'], 'images/'.$new_name);
  }
  
  $sql = "UPDATE gallery SET image = '$new_name' WHERE id = $id";
  if(mysqli_query($con, $sql)) {
    header("location: all-gallery.php");
  }
}

?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Cause</h1>
      </div>
      	
      <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $id ?>">

        <div class="mb-3">
          <lable>Image</lable>
          <input type="file" name="image" class="form-control" />
          <img width="120" src="images/<?= $data['image'] ?>" alt="">
        </div>

        <button class="btn btn-success" name="edit">Edit</button>
      </form>
      
      
    </main>
<?php include 'footer.php'; ?>
