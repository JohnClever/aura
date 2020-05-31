

<div class="main-card mb-3 card">

    <div class="card-body"><h5 class="card-title">Form for Image upload</h5>
        <form class="f_sermons" action="index.php" method="post" enctype="multipart/form-data">
            
            <div class="position-relative form-group">
                <label for="exampleEmail" class="">Date of image upload</label>
                <input name="s_date" id="exampleEmail" class="form-control" type="date">
            </div>

           
            <div class="position-relative form-group e_audpic">
                <label for="exampleFile" class="">Select a picture,</label>
                <input name="s_sermonAlt" id="exampleFile" type="file" class="form-control-file">
            </div>
          
            <small class="form-text text-muted err mess">
            
            </small>
            <div class="_prog" style="display: none">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <button class="mt-1 btn btn-primary">Submit</button>
        </form>
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

