<?php include 'header.php'; ?>
<?php

if($_GET['id']) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM news WHERE id = $id";
  $result = mysqli_query($con, $sql);
  $data = mysqli_fetch_assoc($result);
}

if(isset($_POST['edit'])) {
  $title = $_POST['title'];
  $image = $_FILES['image'];
  $description = $_POST['description'];

  $new_name = $data['image'];
  if(!empty($image['name'])) {
    $new_name = rand().$image['name'];
    move_uploaded_file($image['tmp_name'], 'images/'.$new_name);
  }
  
  $sql = "UPDATE news SET title = '$title', image = '$new_name',	description = '$description' WHERE id = $id";
  if(mysqli_query($con, $sql)) {
    header("location: all-news.php");
  }
}

?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit News</h1>
      </div>
      	
      <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="mb-3">
          <lable>Title</lable>
          <input type="text" name="title" value="<?= $data['title'] ?>" class="form-control" />
        </div>

        <div class="mb-3">
          <lable>Image</lable>
          <input type="file" name="image" class="form-control" />
          <img width="120" src="images/<?= $data['image'] ?>" alt="">
        </div>

        <div class="mb-3">
          <lable>description</lable>
          <textarea name="description" class="form-control" rows="5"><?= $data['description'] ?></textarea>
        </div>

        <button class="btn btn-success" name="edit">Edit</button>
      </form>
      
      
    </main>
<?php include 'footer.php'; ?>
