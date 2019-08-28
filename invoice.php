<?php
    include('db.php');
    
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_POST['select'])){
                $customer = $_POST['customer'];
                $currency = $_POST['currency'];
                $date     = $_POST['date'];
                $item_code = $_POST['item_code'];
                $description = $_POST['description'];
                $quntity = $_POST['quntity'];
                $unite_price = $_POST['unite_price'];
                $discount = $_POST['discount'];
                $total = $_POST['total'];
                
                $sql="INSERT INTO invoice_item (customer, currency, date,item_code,description,quntity,unite_price,discount,total) VALUES ('$customer','$currency', '$date','$item_code','$description','$quntity','$unite_price','$discount','$total')";
        if ($db->query($sql) === TRUE) {
        echo "<p class='text-success'>Create successfully</p>";
        
        
        } else {
        echo "Error: " . $sql . "<br>" . $db->error;
        }
        $db->close();
                        
                }
        }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        
        <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
        
    </head>
    <body>
        <div class="container">
            <a href="index.php" class="btn btn-info">Back</a>
            <form   method="post">
                <div style="border: 1px solid #616D7E; padding: 10px; margin-top: 20px; border-radius: 5px">
                    <div class="form-group">
                        <label style="float: left; width: 10%">Customer:</label>
                        <select style="width: 20%" class="form-control" name="customer" required>
                            <option value="">CustomerName</option>
                            <?php
                            include('db.php');
                            $result = mysqli_query($db,"SELECT * FROM customer_name");
                            while($customer_name = mysqli_fetch_array($result)){
                            $cname = $customer_name['cname'];
                            ?>
                            <option  name='customer'><?php echo $cname ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label style="float: left; width: 10%">Currency:</label>
                        <select style="width: 20%" class="form-control" name="currency" required>
                            <option value="">Currency</option>
                            <option value="Euro">Euro</option>
                            <option value="Dollar">Dollar</option>
                            <option value="Rupee">Rupee</option>
                            <option value="Taka">Taka</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label  style="float: left; width: 10%">Date</label>
                        <input style="width: 20%" class="form-control" type="date"  name="date" required>
                    </div>
                </div>
                <h2 class="text-center" style="margin-top: 20px;">Sales Invoice Item</h2>
                <table class="table table-hover">
                    <thead style="color: #F8F8FF; background: #616D7E">
                        <tr style="border: 1px solid #616D7E">
                            <th>Item Code</th>
                            <th>Item Description</th>
                            <th>Quntity</th>
                            <th>Unite Price</th>
                            <th>Discount</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border: 1px solid #616D7E">
                            <td><input type="text" class="form-control" name="item_code" placeholder="Item Code" required></td>
                            <td><select class="form-control" name="description" required>
                                <option value="">Item Description</option>
                                <?php
                                include('db.php');
                                $result = mysqli_query($db,"SELECT * FROM product");
                                while($product = mysqli_fetch_array($result)){
                                $description = $product['description'];
                                ?>
                                <option><?php echo $description ?></option>
                                <?php } ?>
                            </select>
                        </td>
                        <td><input type="number" class="form-control" name="quntity" placeholder="Qunitity" required></td>
                        <td><input type="number" name="unite_price" class="form-control" placeholder="0.00" required></td>
                        <td><input type="number" name="discount" class="form-control" placeholder="0.0" ></td>
                        <td><input type="number"  name="total" class="form-control" placeholder="0.0" required></td>
                        <td>
                            <div class="col">
                                <button type="submit" name="select" class="form-control btn btn-success" ><i id="success"  class="fa fa-check"></i></button>
                            </div>
                        </td>
                    </tr>
                <tr style="border: 1px solid #616D7E"></tr>
            </tbody>
        </table>
    </form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
    
</script>
</body>
</html>