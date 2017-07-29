<?
require_once('include/connectdb.php');
$query=$con_pdo->prepare("select * from order_detail where order_no = '0411'");
$query->execute();

/* Exercise PDOStatement::fetch styles */
//print("PDO::FETCH_ASSOC: ");
//print("Return next row as an array indexed by column name\n");
$result = $query->fetch(PDO::FETCH_ASSOC);

?>


<!doctype html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>PICK UP</title>

</head>
<body>
<div class="col-xs-8">    
      
          
         <select name="deliveryoption" autocomplete="off">
      <option value="default" <?php if($result['delivery_type']=="default") {?>  selected="selected" <?php }?>  > default </option>
      <option value="sameday" <?php if($result['delivery_type']=="sameday") {?> selected="selected" <?php }?> > Sameday </option>
      <option value="nextday" <?php if($result['delivery_type']=="nextday") {?> selected="selected" <?php }?> > Nextday</option>
      </select>  
      </div>
  
  


</body>
</html>
