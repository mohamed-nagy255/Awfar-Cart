<a type="button" class="btn btn-info" href="?action=add" >اضافة موظف</a>
<br />
<br />
<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                جدول البيانات
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>الاسم</th>
                                            <th>رقم التليفون</th>
                                            <th>اجمالي العمولة</th>
                                            <th>التحكم</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>الاسم</th>
                                            <th>رقم التليفون</th>
                                            <th>اجمالي العمولة</th>
                                            <th>التحكم</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
<?php

require_once "functions/conntact.php";
$select_employee    =   "SELECT * FROM employee";
$id    =    0;
$query  =   $conn -> query($select_employee);
foreach ($query as $employee) {

?>
                                        <tr>
                                            <td><?php echo ++$id?></td>
                                            <td><?php echo $employee["username"]?></td>
                                            <td><?php echo $employee["phone"]?></td>
                                            <td>
                                                <?php 
                                                include "functions/employee/update_comm.php";
                                                // echo $employee["Total"];
                                                ?>
                                                ج
                                            </td>
                                            <td>
                                                <a type="button" class="btn btn-info" href="?action=show&id=<?php echo $employee['id']?>" > العملاء التابعة</a>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#q<?= $employee['id'] ?>">
                                                حذف
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="q<?= $employee['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" 
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">حذف موظف</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id" value="<?php echo $employee['id'] ?>">
                                                        هل تريد حذف الموظف :-
                                                        <?php echo $employee["username"] ?>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                                                        <a type="button" class="btn btn-primary" href="functions/employee/delete_employee.php?id=<?=$employee['id']?>">حذف</a>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
<?php } ?>
                                    </tbody>
                                </table>