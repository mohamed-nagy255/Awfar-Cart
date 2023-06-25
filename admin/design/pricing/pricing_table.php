<a type="button" class="btn btn-info" href="?action=add" >اضافة باقة</a>
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
                                            <th>اسم الباقة</th>
                                            <th>الوصف</th>
                                            <th>السعر</th>
                                            <th>النسبة</th>
                                            <th>العمولة</th>
<?php

    if ( $_SESSION['priv'] == 100 ) {

        echo "<th>التحكم</th>";
    }
?>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>اسم الباقة</th>
                                            <th>الوصف</th>
                                            <th>السعر</th>
                                            <th>النسبة</th>
                                            <th>العمولة</th>
<?php

    if ($_SESSION['priv'] == 100) {

        echo "<th>التحكم</th>";

    }
?>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php

require_once "functions/conntact.php";
$select_pricing    =   "SELECT * FROM pricing";
$id    =    0;
$query  =   $conn -> query($select_pricing);
foreach ($query as $pricing) {

?>
                                        <tr>
                                            <td><?php echo ++$id?></td>
                                            <td><?php echo $pricing["prname"]?></td>
                                            <td><?php echo $pricing["descr"]?></td>
                                            <td><?php echo $pricing["price"]?></td>
                                            <td><?php echo $pricing["ratio"]?>%</td>
                                            <td><?php echo $pricing["commoiswion"]?></td>
<?php

    if ($_SESSION['priv'] == 100) {

?>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#q<?= $pricing['id'] ?>">
                                                حذف
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="q<?= $pricing['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" 
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">حذف الباقة</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id" value="<?php echo $pricing['id'] ?>">
                                                        هل تريد حذف الباقة :-
                                                        <?php echo $pricing["prname"] ?>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                                                        <a type="button" class="btn btn-primary" href="functions/pricing/delete_pricing.php?id=<?=$pricing['id']?>">حذف</a>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
<?php }} ?>
                                    </tbody>
                                </table>