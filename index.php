<?php
session_start();
include "config.php";
?>
<?php include("includes/header.php"); ?>

<div class="container my-5">
  <?php include('message.php'); ?>

  <div class="card-header">
    <h2>Client Details
      <a class="btn btn-primary float-end" href="create.php">Add Client</a>
      </h2>
  </div>
  <table class="table table-bodered table-striped">
  <thead>
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Firstname</th>
    <th scope="col">Lastname</th>
    <th scope="col">Email</th>
    <th scope="col">Gendar</th>
    <th scope="col" class="float-end">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $query = "SELECT * FROM users";
    $query_run = mysqli_query($conn, $query);
    if (mysqli_num_rows($query_run) > 0) {
      foreach ($query_run as $users) {
        // echo $users['firstname']." ".$users['lastname'];
    ?>
    <tr>
      <td><?=$users['id'] ; ?></td>
      <td><?= $users['fname']; ?></td>
      <td><?= $users['lname']; ?></td>
      <td><?= $users['email']; ?></td>
      <td><?= $users['gendar']; ?></td>
      <td>
        <a class="btn btn-info btn-sm float-end " style="margin-left: 4px; margin-top: 4px;" href="view.php?id=<?= $users['id']; ?>">View</a>
        <a class="btn btn-success btn-sm float-end" style="margin-left: 4px; margin-top: 4px;" href="update.php?id=<?= $users['id']; ?>">Edit</a>
        <form action="code.php" method="POST" class="d-inline ">
          <button type="submit" name="delete" class="btn btn-danger btn-sm float-end"style="margin-top: 4px;"  value="<?= $users['id']; ?>">Delete</button>
        </form>
      </td>
     
    </tr>
    <?php
        }
      } else {
        echo "<h5>No Record Fdound</h5>";
      }

      ?>
  </tbody>
</table>
</div>
<?php include("includes/footer.php"); ?>