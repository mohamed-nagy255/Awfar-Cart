<form method="post" action="functions/employee/add_employee.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">اسم الموظف</label>
    <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الرقم السري</label>
    <input type="password" class="form-control" name="password" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">رقم التليفون</label>
    <input type="text" class="form-control" name="phone" id="exampleInputPassword1" required>
  </div>
  <input type="hidden" name="priv" value="200">
  <button type="submit" class="btn btn-primary" >حفظ</button>
</form>