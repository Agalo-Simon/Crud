<?php
session_start();
?>
<?php include("includes/header.php"); ?>

<div class="container my-5">
  <?php include('message.php'); ?>

  <div class="card-header">
    <h2>New Client
      <a href="index.php" class="btn btn-danger float-end">Back</a>
    </h2>
  </div>
  <form action="code.php" method="POST">
    <div class="mb-3">
      <label for="firstname">Firstname</label>
      <input type="text" name="fname" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="lastname">Lastname</label>
      <input type="text" name="lname" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="gendar">Gendar</label>
      <input type="radio" name="gendar" value="Male" required>Male
      <input type="radio" name="gendar" value="Female" required>Female
    </div>
    <div class="mb-3">
      <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </div>
  </form>
</div>
<?php include("includes/footer.php"); ?>