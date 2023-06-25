<?php 

    require_once "functions/conntact.php";
    $select_cart = "SELECT * FROM cart";
    $query  =  $conn -> query($select_cart);
    foreach ($query as $key) {}
    // echo "";
    // echo  $key['id'];
    // print_r ($query);
    // var_dump(num_rows());
?>

<form method="post" action="functions/cart/add_cart.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">اسم الكرت</label>
    <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">العرض</label>
    <input type="text" class="form-control" name="sale" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
  </div>
  
  <input type='hidden' value='<?= $qr_gn = $key['id'] ?>'>
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">qr رمز</label>
    <input type="text" class="form-control" name="qr" id="exampleInputPassword1">
  </div> -->
  <input type="hidden" name="id_qr" value="<?php echo 'https://awfarcart.com/data.php?id=' . ++$qr_gn ?>&qr_gn=<?php echo $qr_gn?>">
  <input type="hidden" name="qr_gn" value="<?= $qr_gn ?>">
  <input type="hidden" name="active" value="0">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"></label>
    <input type="hidden" class="form-control" name="code" value="<?php echo mt_rand (0, 100000); ?>" id="exampleInputPassword1">
  </div>
  
  <br />
  <button type="submit" class="btn btn-primary" >حفظ</button>
  <br />
  <br />
</form>