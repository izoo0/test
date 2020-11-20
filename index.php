<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="script.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">INVOICE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#invoice">Invoice</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    </form>
  </div>
</nav>
<div class="hero">
      
      </div>
<div class="container" id="invoice">
 <form method="post">
        <div class="head">
            <h2 class="">INVOICE</h2>
        </div>
     <div class="grid-item">
        <label for="">Item No</label>
        <input type="text" class="form-control" name="item" required>
     </div>
     <div class="grid-item">
        <label for="">item Qty</label>
        <input type="text" class="form-control" id="a" name="qty" required>
     </div>
     <div class="grid-item">
        <label for="">price</label>
        <input type="text" class="form-control" id="b" name="price" required>
     </div>
     <div class="grid-item">
        <label for="">Total</label>
        <input type="text" class="form-control" id="sum" name="sum">
        <label class="name" for="">VAT</label>
        <input type="text" class="form-control mb-3" id="vat" name="vat" >
     </div>
        <button type="submit" name="save" class="btn btn-primary mb-5">save</button>
  </form>
  
        <?php 
          include 'connect.php';
                if(isset($_post['save'])){
                    $item = $_POST['item'];
                    $qty = $_POST['qty'];
                    $price = $_POST['price'];
                    $sum = $_POST['sum'];
                    $vat = $_POST['vat'];

                    $con->query("INSERT INTO test(item,qty,price,sum,vat) VALUES('$item','$qty','$price','$sum','$vat')") or die("failed to query table");
                
                ?>
                <script>
                    alert('Data Saved succesfully');
                </script>
                <?php
                 }
                
                ?>
<button onclick="calculate()" class="btn btn-success mb-5">calculate</button><br>
  </div>
</body>
<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</html>