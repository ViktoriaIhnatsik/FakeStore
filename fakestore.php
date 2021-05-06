<?php include_once "App_fakestore.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>FakeStore</title>

</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="main.php">FakeStore</a>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container mt-5">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">FakeStore</h1>
        <div class="list-group list-group-flush">
          <?php
          echo
          "<a href='?category=men clothing' class='list-group-item list-group-item-action '> Men clothing</a>
          <a href='?category=women clothing' class='list-group-item list-group-item-action  '> Women clothing</a>
          <a href='?category=jewelery' class='list-group-item list-group-item-action '> Jewelery</a>";
          ?>
        </div>

      </div>
      <!-- /.col-lg-3 -->


      <div class="col-lg-9 mt-5">

        <?php App::main();  ?>

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->




  <footer class="py-4 bg-dark mt-auto">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; 2021</p>
    </div>
  </footer>


</body>

</html>