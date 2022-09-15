<?php include 'header.php'; ?>
<?php

if(isset($_POST['add'])) {
  $name     = $_POST['name'];
  $email    = $_POST['email'];
  $password = md5($_POST['password']);
  $type     = $_POST['type'];

  $sql = "INSERT INTO users (name, email, password, type) VALUES ('$name', '$email', '$password', '$type')";

  if(mysqli_query($con, $sql)) {
    header("location: all-users.php");
  }
}

?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add new User</h1>
      </div>
      	
      <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <lable>Name</lable>
          <input type="text" name="name" class="form-control" />
        </div>

        <div class="mb-3">
          <lable>Email</lable>
          <input type="email" name="email" class="form-control" />
        </div>

        <div class="mb-3">
          <lable>Password</lable>
          <input type="password" name="password" class="form-control" />
        </div>

        <div class="mb-3">
          <lable>Type</lable>
          <select name="type" class="form-select">
            <option value="user">User</option>
            <option value="admin">Admin</option>
          </select>
        </div>

        <button class="btn btn-success" name="add">Add</button>
      </form>
      
      
    </main>
<?php include 'footer.php'; ?>
