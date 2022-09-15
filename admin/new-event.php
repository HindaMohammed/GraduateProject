<?php include 'header.php'; ?>
<?php

if(isset($_POST['add'])) {
  $title = $_POST['title'];
  $image = $_FILES['image'];
  $description = $_POST['description'];
  $date = $_POST['date'];
  $category = $_POST['category'];

  $new_name = rand().$image['name'];
  move_uploaded_file($image['tmp_name'], 'images/'.$new_name);

  $sql = "INSERT INTO events (title, image,	description, date, category) VALUES ('$title', '$new_name', '$description', '$date', '$category')";
  echo $sql;
  if(mysqli_query($con, $sql)) {
    header("location: all-events.php");
  }
}

?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add new Event</h1>
      </div>
      	
      <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <lable>Title</lable>
          <input type="text" name="title" class="form-control" />
        </div>

        <div class="mb-3">
          <lable>Image</lable>
          <input type="file" name="image" class="form-control" />
        </div>

        <div class="mb-3">
          <lable>description</lable>
          <textarea name="description" class="form-control" rows="5"></textarea>
        </div>

        <div class="mb-3">
          <lable>Date</lable>
          <input type="date" name="date" class="form-control" />
        </div>

        <div class="mb-3">
          <lable>Category</lable>
          <input type="text" name="category" class="form-control" />
        </div>

        

        <button class="btn btn-success" name="add">Add</button>
      </form>
      
      
    </main>
<?php include 'footer.php'; ?>
