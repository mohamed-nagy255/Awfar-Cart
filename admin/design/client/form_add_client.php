<?php 

    require_once "functions/conntact.php";
    $select_client = "SELECT * FROM client";
    $query  =  $conn -> query($select_client);
    foreach ($query as $key) {}
    // echo "";
    // echo  $key['id'];
    // print_r ($query);
    // var_dump(num_rows());
?>

<form method="post" action="functions/client/add_client.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">اسم العميل</label>
    <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">اسم المحل</label>
    <input type="text" class="form-control" name="shop_name" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">نوع النشاط</label>
    <input type="text" class="form-control" name="shops" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">رقم التليفون</label>
    <input type="shop_phone" class="form-control" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">العنوان</label>
    <input type="text" class="form-control" name="address" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
  </div>

  <div class="mb-3">
    <select class="form-select" name="pricing_id" aria-label="Default select example"  required>
    <option selected>اختر الباقة </option>

    <?php

      $select_pricing  =  "SELECT * FROM pricing";
      $query  =  $conn -> query($select_pricing);
      
      foreach ($query as $pricing) {

    ?>

      <option value="<?php echo $pricing['id']?>"><?php echo $pricing['prname']?></option>

      <?php } ?>
    </select>
  </div>
  <div class="mb-3">
    <select class="form-select" name="employee_id" aria-label="Default select example" required>
    <option selected>اسم المندوب </option>

    <?php

      $select_employee  =  "SELECT * FROM employee";
      $query  =  $conn -> query($select_employee);
      
      foreach ($query as $employee) {

    ?>

      <option value="<?php echo $employee['id']?>"><?php echo $employee['username']?></option>

      <?php } ?>
    </select>
  </div>
  <div class="mb-3">
    <select class="form-select" name="sale_id" aria-label="Default select example" required>
    <option selected>اسم الكرت </option>

    <?php

      $select_cart  =  "SELECT * FROM cart";
      $query  =  $conn -> query($select_cart);
      
      foreach ($query as $cart) {

    ?>

      <option value="<?php echo $cart['id']?>"><?php echo $cart['username']?></option>

      <?php } ?>
    </select>
  </div>
 
  <input type="hidden" name="active" value="0">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"></label>
    <input type="hidden" class="form-control" name="code" value="<?php echo mt_rand (0, 100000); ?>" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">تاريخ البدء</label>
    <input type="date" class="form-control" name="starting_date" id="exampleInputPassword1" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">تاريخ الانتهاء</label>
    <input type="date" class="form-control" name="expiry_date" id="exampleInputPassword1" required>
  </div>
  <br />
  <button type="submit" class="btn btn-primary" >حفظ</button>
  <br />
  <br />
</form>