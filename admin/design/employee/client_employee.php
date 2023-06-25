
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
                                            <th>اسم العميل</th>
                                            <th>اسم المحل</th>
                                            <th>نوع النشاط</th>
                                            <th>رقم التليفون </th>
                                            <th>العنوان </th>
                                            <th>الكود </th>
                                            <th>العرض </th>
                                            <th>الباقة </th>
                                            <th>العمولة</th>
                                            <th>تاريخ البدء </th>
                                            <th>تاريخ الانتهاء </th>
                                            <th>التحكم </th>
                                        </tr>
                                    </thead>  
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>اسم العميل</th>
                                            <th>اسم المحل</th>
                                            <th>نوع النشاط</th>
                                            <th>رقم التليفون </th>
                                            <th>العنوان </th>
                                            <th>الكود </th>
                                            <th>العرض </th>
                                            <th>الباقة </th>
                                            <th>العمولة</th>
                                            <th>تاريخ البدء </th>
                                            <th>تاريخ الانتهاء </th>
                                            <th>التحكم </th>
                                        </tr>
                                    </tfoot>  
                                    <tbody>
<?php

    $id = $_GET['id'];

    // print_r($id);
    // exit();

    require_once "functions/conntact.php";
    $select_client    =   "SELECT * FROM client WHERE employee_id = $id";
    $id    =    0;
    $query  =   $conn -> query($select_client);

    foreach ($query as $client) {

?>
                                        <tr>
                                            <td><?php echo ++$id?></td>
                                            <td><?php echo $client["username"]?></td>
                                            <td><?php echo $client["shop_name"]?></td>
                                            <td><?php echo $client["shops"]?></td>
                                            <td><?php echo $client["phone"]?></td>
                                            <td><?php echo $client["address"]?></td>
                                           
                                            <td><?php echo $client["code"]?></td>
                                            <td><?php
                                            
                                                $namesa = $client['sale_id'];
                                                $select_pricing = "SELECT username FROM cart WHERE id = $namesa";
                                                $query = $conn -> query($select_pricing) -> fetch_assoc();
                                                echo @$query['username'];

                                            ?></td>
                                            <td><?php
                                            
                                            $namesa = $client['pricing_id'];
                                            $select_pricing = "SELECT * FROM pricing WHERE id = $namesa";
                                            $query = $conn -> query($select_pricing) -> fetch_assoc();
                                            echo @$query['prname'];

                                            ?></td>    
                                            <td><?php 
                                            @$comm = @$query['commoiswion'];
                                            echo $comm;
                                            ?></td>
                                            <td><?php echo $client["starting_date"]?></td>
                                            <td><?php echo $client["expiry_date"]?></td>
<?php

if ($_SESSION['priv'] == 100) {

?>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#q<?= $client['id'] ?>">
                                                حذف
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="q<?= $client['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" 
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">حذف العميل</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id" value="<?php echo $client['id'] ?>">
                                                        هل تريد حذف العميل :-
                                                        <?php echo $client["username"] ?>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                                                        <a type="button" class="btn btn-primary" href="functions/client/delete_client.php?id=<?=$client['id']?>">حذف</a>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <br />
                                                <br />
<?php

    if ($client['statue'] == 1) {

?>
                                                <a class="btn btn-success" data-bs-toggle="modal" href="#exampleModalToggle<?= $client['id'] ?>" role="button">نشط</a>
<?php 

    } elseif ($client['statue'] == 0) { 

?>
                                                <a class="btn btn-danger" data-bs-toggle="modal" href="#exampleModalToggle<?= $client['id'] ?>" role="button">خامل</a>
<?php } ?>
                                                <div class="modal fade" id="exampleModalToggle<?= $client['id'] ?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalToggleLabel">تغيير حالة العميل</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form method="post" action="functions/client/edite_statue.php">
                                                    <div class="modal-body">
                                                        <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="statue" value="1" id="flexRadioDefault1"
<?php

if ($client['statue'] == 1) {

?>

checked >
<?php } ?>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            نشط
                                                        </label>
                                                        </div>
                                                        <input type="hidden" name="id" value="<?= $client['id'] ?>">
                                                        <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="statue" value="0" id="flexRadioDefault2" 
                                                        <?php

if ($client['statue'] == 0) {

?>

checked >
<?php } ?>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            خامل
                                                        </label>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">حفظ التغيير</button>
                                                    </div>
                                                    </form>
                                                    </div>
                                                </div>
                                                </div>
                                            </td>
<?php } ?>
                                        </tr>
<?php } ?>
<!-- <br>
<br> -->
                                        <!-- <tr>
                                            <h3 style="text-align: center;"> اجمالي العمولة:-
<?php
// include "functions/employee/update_comm.php";
?>
                                            </h3> -->
<!-- <br> -->
<!-- <br> -->
                                        </tr>
                                    </tbody>
                                </table>