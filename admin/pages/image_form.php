
<?php require_once '../scripts/functions.php';?>
<div class="main-card mb-3 card">

    <div class="card-body"><h5 class="card-title">Form for Image upload</h5>
        <form class="f_sermons" action="scripts/image.php" method="post" enctype="multipart/form-data">
           
            <div class="position-relative form-group e_audpic">
                <label for="exampleFile" class="">Select a picture,</label>
                <input name="photo" id="exampleFile" type="file" class="form-control-file" required>
            </div>
          
            <small class="form-text text-muted err mess">
            
            </small>
            <div class="_prog" style="display: none">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <a style = "color: #fff" class="mt-1 btn btn-primary">Add Image to Gallery</a>
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
    $('.btn-primary').on('click',function(e){
        e.preventDefault();
    swal({
    position: "top-end",
    type: "success",
    title: "Image uploaded successfully",
    showConfirmButton: false,
    timer: 3000
    }).then((result) => {
        
    })
    });

    $(".form-control").focus(function(){
        $(".mess").html("");
        $(".mess").css("color", "gray");
    });

    $('.btn-danger').on('click',function(e){
        e.preventDefault();
        swal({
        title: "Are you sure you want to delete Image?",
        text: "Once deleted, you will not be able to recover this!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            swal("Success! Image has been deleted!", {
            icon: "success",
            });
        } else {
            swal("Image hasn't been deleted");
        }
        });
    });

    $(".form-control").focus(function(){
        $(".mess").html("");
        $(".mess").css("color", "gray");
    })
</script>
<script src="jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="js/form.js"></script>

