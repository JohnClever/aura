
<?php 
  session_start();
  ob_start();
    require_once '../scripts/functions.php' ;
  if(!isset($_SESSION['fname']))
      header('location: index.html?signFrst=1');
    require_once '../scripts/functions.php';

              $status ='noMsg';
              $upload = 'noMsg';
            
      if(isset($_SESSION['status']))
        $status = $_SESSION['status'];
      if(isset($_SESSION['upload']))
        $upload = $_SESSION['upload']; 
echo "<input type='hidden' value='$status' id='statusBtn'>";
echo "<input type='hidden' value='$upload' id='uploadStatus'>";
    
?>
<div class="main-card mb-3 card">

    <div class="card-body"><h5 class="card-title">Form for Image upload</h5>
        <form class="f_sermons" action="scripts/image.php" method="post" enctype="multipart/form-data">
           
            <div class="position-relative form-group e_audpic">
                <label for="exampleFile" class="">Select a picture,</label>
                <input name="photo" id="exampleFile" type="file" class="form-control-file" required>
            </div>
          
            <button style = "color: #fff" class="mt-1 btn btn-primary">Add Image to Gallery</button>
        </form>
    </div>
    <div>
        <form action="scripts/delete.php" method="post" id="deletePhotos">
            <table>
                <?php echo adminPhotos('../images/img');?>
            </table>
         </form>
    <div>
        <button style="margin: 10px 20px; padding: 0 12px;" class="btn btn-danger float-left" form="deletePhotos"  name="deletePhotos"><i class="fa fa-trash fa-2x"></i></button>     
    </div>
</div>
    <script>
        $(document).ready(function(){
        var status = parseInt($('#statusBtn').val());
        var upload = parseInt($('#uploadStatus').val());
        if(status===1){
            status = null;
        swal({
        text: "Successfully Deleted!",
        icon: "success",
        button: "OK",
        });
        } else if(status === -1){
            swal({
        text: "Could not be Deleted!",
        icon: "error",
        button: "OK",
        });
        };
        if(upload === 1){
            upload = null;
             swal({
            position: "top-end",
            type: "success",
            icon: "success",
            title: "Successfully Uploaded",
            showConfirmButton: false,
            timer: 3000
            })
        }else if(upload === -1){
            upload = null;
            swal({
        text: "Could not be Uploaded!",
        icon: "error",
        button: "OK",
        });
        }
    });
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
            $("#deletePhotos").submit();  
        }  
    })
    });   

</script>
<script src="jquery-3.3.1.min.js"></script>
<script src="js/form.js"></script>
<script src="jquery-3.3.1.min.js"></script>
<script src="js/form.js"></script>
<?php $_SESSION['status'] = 'noMsg';
      $_SESSION['upload'] = 'noMsg'; 
ob_end_flush();?>
