<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <header class="d-flex justify-content-between my-4">
        <h1>Users List</h1>
        <div><a href="creat.php" class="btn btn-primary">Add new book</a></div>
    </header>
    <table class="table table-bordered">
      <thead>
        <tr >
            <th>first name</th>
            <th>last name</th>
            <th>age</th>
            <th>pet</th>
            <th>update</th>
            <th>delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include("conect.php");
        $sql= "SELECT * FROM ppl";
        $result=mysqli_query($conn, $sql);
        while( $row=mysqli_fetch_array($result))
        {?>
        <tr>
          <td><?php echo $row["fname"];?></td>
          <td><?php echo $row["lname"];?></td>
          <td><?php echo $row["age"];?></td>
          <td><?php echo $row["pet"];?></td>
          <td><a href="edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning">edit</td>
          <td><a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning">delete</td>
        </tr>
        <?php
        }
        print_r($row);
        ?>
      </tbody>
    </table>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>