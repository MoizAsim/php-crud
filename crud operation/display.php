<!doctype html>
<html lang="en">

<head>
    <?php
    include 'links.php'
    ?>
    <title>Display user</title>
</head>

<body>
    <div class="container my-5">
        <button class="btn btn-primary mb-5">
            <a href="add_user.php" style="text-decoration: none;" class="text-light">Add User</a>
        </button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S #</th>
                    <th scope="col">title</th>
                    <th scope="col">genre</th>
                    <th scope="col">stock</th>
                    <th scope="col">rating</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
            <?php
    include 'connection.php';

    $select_query = "select * from add_user";
    $result = mysqli_query($connection,$select_query);

    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $title = $row['title'];
            $genre = $row['genra'];
            $stock = $row['stock'];
            $rating = $row['raiting'];

            echo "
            <tr>
            <th scope='row'>$id</th>
            <td>$title</td>
            <td>$genre</td>
            <td>$stock</td>
            <td>$rating</td>
            <td>
                <button class='btn btn-primary btn-sm'>
                    <a 
                        class='text-light'
                        style='text-decoration: none;'
                        href='update.php?updateid=$id'>Update
                    </a>
                </button>
                <button class='btn btn-danger btn-sm'>
                    <a 
                        class='text-light' 
                        style='text-decoration: none;' 
                        href='delete.php?deleteid=$id'>Delete
                    </a>
                </button>
            </td>
        </tr>
            ";
        }
    }
?>
            </tbody>
        </table>
    </div>
</body>
</html>