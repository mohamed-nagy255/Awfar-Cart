<form method="post" action="functions/pricing/add_pricing.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">اسم الباقة</label>
    <input type="text" class="form-control" name="prname" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> وصف الباقة</label>
    <input type="text" class="form-control" name="descr" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">سعر الباقة </label>
    <input type="text" class="form-control" name="price" id="exampleInputPassword1" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">النسبة </label>
    <input type="text" class="form-control" name="ratio" id="exampleInputPassword1" required>
  </div>
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">العمولة </label>
    <input type="text" class="form-control" name="commoiswion" id="exampleInputPassword1" required>
  </div> -->
  <button type="submit" class="btn btn-primary" >حفظ</button>
</form>