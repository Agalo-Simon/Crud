<?php
session_start();
include 'config.php';
?>
<?php include("includes/header.php"); ?>

<div class="container my-5">
  <?php include('message.php'); ?>

  <div class="card-header">
    <h2>Client Update
      <a href="index.php" class="btn btn-danger float-end">Back</a>
    </h2>
  </div>
  <div class="card-body">
    <?php
    if (isset($_GET['id'])) {
      $users_id = mysqli_real_escape_string($conn, $_GET['id']);
      $query = "SELECT * FROM users WHERE id='$users_id' ";
      $query_run = mysqli_query($conn, $query);

      if (mysqli_num_rows($query_run) > 0) {
        $users = mysqli_fetch_array($query_run);
    ?>
        <form action="code.php" method="POST">
          <input type="hidden" name="users_id" value="<?= $users['id']; ?>">
          <div class="mb-3">
            <label for="firstname">Firstname</label>
            <input type="text" name="fname" value="<?= $users['fname']; ?>" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="lastname">Lastname</label>
            <input type="text" name="lname" value="<?= $users['lname']; ?>" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" value="<?= $users['email']; ?>" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="gendar">Gendar</label>
            <input type="radio" name="gendar" value="Male" required>Male
            <input type="radio" name="gendar" value="Female" required>Female
          </div>
          <div class="mb-3">
            <input type="submit" class="btn btn-primary" name="update" value="Update">
          </div>
        </form>
    <?php

      } else {
        "<h2>No Such Id Found</h2>";
      }
    }
    ?>
  </div>
</div>
<?php include("includes/footer.php"); ?>