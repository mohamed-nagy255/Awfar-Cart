<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#q"> حذف القائمة</button>
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
                                            <th>تاريخ الاستخدام</th>
                                        </tr>
                                    </thead>  
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>تاريخ الاستخدام</th>
                                        </tr>
                                    </tfoot>  
                                    <tbody>
<?php

        $id = $_GET['id'];

        require_once "functions/conntact.php";
        $select_client    =   "SELECT * FROM client";
        $idd    =    0;
        $query  =   $conn -> query($select_client);


        require_once "functions/conntact.php";
        $select_client    =   "SELECT * FROM client_used WHERE client_id = $id";
        $idd    =    0;
        $query  =   $conn -> query($select_client);

        foreach ($query as $client) {

?>
                                        <tr>
                                            <td><?php echo ++$idd?></td>
                                            <td><?php echo $client["date"]?></td>
                                            
                                        </tr>
<?php } ?>
                                    </tbody>
                                    
                                                <!-- Modal -->
                                                <div class="modal fade" id="q" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" 
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">حذف القائمة</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id" value="">
                                                        هل تريد حذف القائمة :-
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                                                        <a type="button" class="btn btn-primary" href="functions/client/delete_used.php">حذف</a>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                </table>