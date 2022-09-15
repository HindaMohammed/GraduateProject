<?php include 'header.php'; ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Result</h1>
      </div>

      <table class="table table-bordered table-striped table-hover">
          <tr>
              <th>#</th>
              <th>Title</th>
          </tr>

          <?php 
            $q = $_GET['q'] ?? '';
            $sql = "(SELECT title FROM causes WHERE title LIKE '%" . $q . "%') 
            UNION
           (SELECT title FROM events WHERE title LIKE '%" . $q ."%') 
           UNION
           (SELECT title FROM news WHERE title LIKE '%" . $q ."%')
           UNION
           (SELECT name as title FROM users WHERE name LIKE '%" . $q ."%')";

            $result = mysqli_query($con, $sql);
            $i = 1;
            if(mysqli_num_rows($result) >= 1):
            while($row = mysqli_fetch_assoc($result)):
            ?>
          <tr>
              <td><?= $i ?></td>
              <td><?= $row['title'] ?></td>
          </tr>
          <?php $i++; endwhile; ?>
          <?php else: ?>
            <tr>
              <td colspan="2">No Data Found</td>
            </tr>
          <?php endif; ?>
      </table>
      
      
    </main>
<?php include 'footer.php'; ?>