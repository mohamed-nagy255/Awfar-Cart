<a type="button" class="btn btn-info" href="?action=add" >اضافة كرت</a>
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
                                            <th>اسم الكرت</th>
                                            <th>qr </th>
                                            <th>الكود </th>
                                            <th>العرض </th>
                                            <th>عدد الاستخدام </th>
<?php

    if ($_SESSION['priv'] == 100) {

?>
                                            <th>التحكم </th>
<?php } ?>
                                        </tr>
                                    </thead>  
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>اسم الكرت</th>
                                            <th>qr </th>
                                            <th>الكود </th>
                                            <th>العرض </th>
                                            <th>عدد الاستخدام </th>
<?php

    if ($_SESSION['priv'] == 100) {

?>
                                            <th>التحكم </th>
<?php } ?>
                                        </tr>
                                    </tfoot>  
                                    <tbody>
<?php

    $id = $_SESSION['login'];

    // print_r($id);
    // exit();

        require_once "functions/conntact.php";
        $select_cart    =   "SELECT * FROM cart";
        $id    =    0;
        $query  =   $conn -> query($select_cart);

        foreach ($query as $cart) {

?>
                                        <tr>
                                            <td><?php echo ++$id?></td>
                                            <td><?php echo $cart["username"]?></td>
                                            <td>
                                                <img style="width: 100px;" src="functions/cart/<?= $cart['qr']?>">
                                            </td>
                                            <td><?php echo $cart["code"]?></td>
                                            <td><?php echo $cart["sale"]?></td>
                                            <td><?php echo $cart["count"]?></td>
<?php

if ($_SESSION['priv'] == 100) {

?>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#q<?= $cart['id'] ?>">
                                                حذف
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="q<?= $cart['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" 
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">حذف العميل</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id" value="<?php echo $cart['id'] ?>">
                                                        هل تريد حذف كرت :-
                                                        <?php echo $cart["username"] ?>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                                                        <a type="button" class="btn btn-primary" href="functions/cart/delete_cart.php?id=<?=$cart['id']?>">حذف</a>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
<?php } } ?>
                                    </tbody>
                                </table>