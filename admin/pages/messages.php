<?php 
    session_start();
    if(!isset($_SESSION['fname']))
        header('location: ../../index.html?signFrst=1');
        require_once '../scripts/functions.php';


?>
 
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-comment">
                </i>
            </div>
            <div>Table Of Messages
                <div class="page-title-subheading">
                </div>
            </div>
        </div>
    </div>
</div>            
<div class="main-card mb-3 card">
    <div class="card-body">
    <script src="assets\scripts\main.cba69814a806ecc7945a.js"></script>
            <script src="js/form.js"></script>
            <div >
                <button style="margin-bottom: 0.5em; padding: 0 12px;" class="btn btn-danger float-left" form="deleteMsgs" name="deleteMsgs"><i class="fa fa-trash fa-2x"></i></button>
            </div>
        <table style="width: 100%;" id="table" class="table table-hover table-striped table-bordered">
            
            <thead>
            <tr>
                <th></th>
                <th>Date</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                
            </tr>
            </thead>
            <tbody>
              <form method='post' action='scripts/delete.php' id='deleteMsgs'>
               <?php echo msgs();
                     readMsgs();
                ?>
               </form>
            </tbody>
        </table>
    </div>
</div>
<script>
    $('.btn-danger').on('click',function(e){
        e.preventDefault();
        var attrName = $(this).attr('name');
        swal({
        title: "Are you sure you want to delete?",
        text: "Once deleted, you will not be able to recover this!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if(willDelete) {
            $("#deleteMsgs").submit();  
        }  
    })
    });
</script>
<script src="jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="js/form.js"></script>
<script src="jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="js/form.js"></script>