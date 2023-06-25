<form method="post" action="functions/owner/add_owner.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">اسم المسؤل</label>
    <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الرقم السري</label>
    <input type="password" class="form-control" name="password" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
  <input type="hidden" name="priv" value="100">
  <button type="submit" class="btn btn-primary" >حفظ</button>
</form>