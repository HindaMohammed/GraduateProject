<?php include 'header.php'; ?>
<?php
if(isset($_GET['del'])) {
  $id = $_GET['del'];
  $sql = "DELETE FROM users WHERE id = $id";
  if(mysqli_query($con, $sql)) {
    header('location: all-users.php');
  }
}

?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">All Users</h1>
      </div>
      <a href="new-user.php" class="btn btn-success mb-4">Add new User</a>

      <table class="table table-bordered table-striped table-hover">
          <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Type</th>
              <th>Actions</th>
          </tr>

          <?php 
            $sql = "SELECT * FROM users ORDER BY id DESC";
            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($result)):
            ?>
          <tr>
              <td><?= $row['id'] ?></td>
              <td><?= $row['name'] ?></td>
              <td><?= $row['email'] ?></td>
              <td><?= $row['type'] == 'admin' ? '<span class="badge bg-success">Admin</span>' : '<span class="badge bg-info">User</span>' ?></td>
              <td>
                <a href="edit-user.php?id=<?= $row['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                <a onclick="return confirm('Are you sure?!')" href="?del=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
              </td>
          </tr>
          <?php endwhile; ?>
      </table>
      
      
    </main>
<?php include 'footer.php'; ?>