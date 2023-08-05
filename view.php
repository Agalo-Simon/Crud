<?php
session_start();
include 'config.php';
?>
<?php include("includes/header.php"); ?>

  <div class="container my-5">

    <div class="card-header">
      <h2>Client View Details
      <a href="index.php" class="btn btn-danger float-end">Back</a>
      </h2>
    </div>
    <div class="card-body">
      <?php
        if(isset($_GET['id'])){
          $users_id = mysqli_real_escape_string($conn, $_GET['id']);
          $query= "SELECT * FROM users WHERE id='$users_id' ";
          $query_run = mysqli_query($conn, $query);

          if(mysqli_num_rows($query_run)>0){
            $users = mysqli_fetch_array($query_run);
            ?>
                <div class="mb-3">
                  <label for="firstname">Firstname</label>
                    <p  class="form-control">
                      <?=$users['fname']; ?>
                    </p>
                </div>
                <div class="mb-3">
                  <label for="lastname">Lastname</label>
                  <p  class="form-control">
                      <?=$users['lname']; ?>
                    </p>
                </div>
                <div class="mb-3">
                  <label for="email">Email</label>
                  <p  class="form-control">
                      <?=$users['email']; ?>
                    </p>
                </div>
                <div class="mb-3">
                  <label for="password">Password</label>
                  <p  class="form-control">
                      <?=$users['password']; ?>
                    </p>
                </div>
                <div class="mb-3">
                  <label for="gendar">Gendar</label>
                  <input type="radio" name="gendar" value="Male"  require>Male
                  <input type="radio" name="gendar" value="Female"  require>Female
                </div>
            <?php
           
          }
          else{
            "<h2>No Such Id Found</h2>";
          }
        }
      ?>
    </div>
  </div>
<?php include("includes/footer.php"); ?>