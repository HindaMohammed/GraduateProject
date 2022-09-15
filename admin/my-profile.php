<?php include 'header.php'; ?>
<?php

if($_SESSION['id']) {
  $id = $_SESSION['id'];
  $sql = "SELECT * FROM users WHERE id = $id";
  $result = mysqli_query($con, $sql);
  $data = mysqli_fetch_assoc($result);
}

?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Profile</h1>
      </div>
      	
      <?php 
if(isset($_POST['edit'])) {
  $name     = $_POST['name'];
  $email    = $_POST['email'];
  $password = empty($_POST['password']) ? $data['password'] : md5($_POST['password']);

  
  $sql = "UPDATE users SET name = '$name', email = '$email',	password = '$password' WHERE id = $id";
  
  if(mysqli_query($con, $sql)) {
    echo "<div class='alert alert-success'>Profile updated successfully</div>";
  }

  $id = $_SESSION['id'];
  $sql = "SELECT * FROM users WHERE id = $id";
  $result = mysqli_query($con, $sql);
  $data = mysqli_fetch_assoc($result);
}
      ?>
      <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="mb-3">
          <lable>Name</lable>
          <input type="text" name="name" class="form-control" value="<?= $data['name'] ?>" />
        </div>

        <div class="mb-3">
          <lable>Email</lable>
          <input type="email" name="email" class="form-control" value="<?= $data['email'] ?>" />
        </div>

        <div class="mb-3">
          <lable>Password</lable>
          <input type="password" name="password" class="form-control" />
        </div>

        <button class="btn btn-success" name="edit">Update</button>
      </form>
      
      
    </main>
<?php include 'footer.php'; ?>
