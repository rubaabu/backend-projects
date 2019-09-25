<?php 
require 'db.php';
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header.php';?>

<style>
.body{
        background-color: #d0ecf0
    }
 #ru .container #ru-row #ru-column #ru-box {
    
  margin-top: 50px;
  max-width: 600px;
  height: 500px;
  border: 1px solid #9C9C9C;
  background-color: #176d81;
  margin-bottom: 50px;
}
#ru .container #ru-row #ru-column #ru-box #ru-form {
  padding: 20px;
}
#ru .container #ru-row #ru-column #ru-box #ru-form #register-link {
  margin-top: -85px;
}
    </style>
   

   

<body class="body">

<?php require 'nav.php'; ?><br>
<a href="managerpage.php"><button type='button' class='btn btn-info'>back</button></a>
<div id="ru">
<div class="container">

 
  
    
    <div id="ru-row" class="row justify-content-center align-items-center">
                <div id="ru-column" class="col-md-6">
                    <div id="ru-box" class="col-md-12">

                        <form id="ru-form" class="form" action="action/userbuy.php" method= "post" >
                             <h3 style=" color: #d8dfe2" class="text-center ">Order your product</h3>

                                <div class="form-group">
                                    <label for="message" style=" color: #71adb5">Message:</label><br>
                                    <input type="text" name="message"  class="form-control">
                                </div>

                                <div class="form-group">
                                <label for="date" style=" color: #71adb5">Date:</label><br>
                                <input type="date" name="date" class="form-control" /><br >
                                </div>
                                <div class="form-group">
                                        <label for="status" style=" color: #71adb5">Status</label>
                                        <select name="product_name" class="form-control" >
        
                                            <option selected="selected">Choose product</option>
                                            <?php 
                                                $sql = "SELECT * FROM products";
                                                $result = mysqli_query($conn,$sql);
                                                if (!$result) {
                                                    printf("Error: %s\n", mysqli_error($conn));
                                                    exit();
                                                }
                                                $rows = $result->fetch_all(MYSQLI_ASSOC);
                                                foreach($rows as $item){
                                                    ?>
                                                    <option value="<?php echo $item['product_id'];?>"><?php echo $item['product_name']; ?> </option>
                                                    <?php 
                                                }
                                            
                                            ?>
    
                                            </select><br>
                                    <input type="submit" name="send" class="btn btn-info btn-md" value="Send">

                                    </div>
    

                                 </form>
                    </div>
                </div>
            </div>
        </div>
</div>
    <?php require 'footer.php'; ?>

</body>
</html>