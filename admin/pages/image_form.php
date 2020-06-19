
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
            <button class="mt-1 btn btn-primary">Add Image to Gallery</button>
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
    $(".form-control").focus(function(){
        $(".mess").fadeOut(800);
        $(".mess").html("");
        $(".mess").css("color", "gray");
    })
</script>
<script src="js/form.js"></script>

