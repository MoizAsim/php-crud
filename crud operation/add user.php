<!doctype html>
<html lang="en">
  <head>
    <?php
        include 'links.php';
    ?>
    <title> Movie </title>
  </head>
  <body>
  <div class="container my-5">
    <form method="POST">
        <!-- Name input -->
        <div class="mb-3">
            <label for="name" class="form-label">title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <!-- Email input -->
        <div class="mb-3">
            <label for="email" class="form-label">genra</label>
            <input type="text" class="form-control"  name="genra">
        </div>
        <!-- Name input -->
        <div class="mb-3">
            <label for="phone" class="form-label">stock</label>
            <input type="text" class="form-control" name="stock">
        </div>
        <!-- Password Input -->
        <div class="mb-3">
            <label for="password" class="form-label">rating</label>
            <input type="text" class="form-control" name="rating">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>

  </body>
</html>


<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $genra = $_POST['genra'];
    $stock = $_POST['stock'];
    $rating = $_POST['rating'];

    $insert_query = " insert into add_user(title,genra,stock,raiting)
    values ('$title', '$genra', $stock,$rating )";
    $result = mysqli_query($connection, $insert_query);
    if($result){
        echo 'Data inserted';
    }else{
        ?>
        <script>
            alert('data does not insert succesfully')
            </scirpt>
            <?php
    }
}
?>
