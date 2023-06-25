<a type="button" class="btn btn-info" href="?action=add" >اضافة مسؤل</a>
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
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>الاسم</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php

require_once "functions/conntact.php";
$select_owner    =   "SELECT * FROM owner";
$id    =    0;
$query  =   $conn -> query($select_owner);
foreach ($query as $owner) {

?>
                                        <tr>
                                            <td><?php echo ++$id?></td>
                                            <td><?php echo $owner["username"]?></td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#q<?= $owner['id'] ?>">
                                                حذف
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="q<?= $owner['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" 
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">حذف موظف</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id" value="<?php echo $owner['id'] ?>">
                                                        هل تريد حذف الموظف :-
                                                        <?php echo $owner["username"] ?>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                                                        <a type="button" class="btn btn-primary" href="functions/owner/delete_owner.php?id=<?=$owner['id']?>">حذف</a>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
<?php } ?>
                                    </tbody>
                                </table>