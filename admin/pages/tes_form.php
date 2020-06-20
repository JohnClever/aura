

<div class="main-card mb-3 card">
    <div class="card-body"><h5 class="card-title">Form for Testimonies</h5>
        <form class="f_testimonies" action="scripts/faq_upload.php" method="post">
            <div class="position-relative form-group">
                <label for="exampleEmail" class="">Name</label>
                <input name="askerName" id="exampleEmail" placeholder="Name" type="text" class="form-control" required>
            </div>
            <div class="position-relative form-group">
                <label for="exampleText" class="">Comment</label>
                <input name="question" id="exampleText" class="form-control" type="text" required>
            </div>
            <div class="position-relative form-group e_audpic">
                <label for="exampleFile" class="">Select a picture,</label>
                <input name="photo" id="exampleFile" type="file" class="form-control-file" required>
            </div>
            <a style= "color: #fff" href="" type="submit" name="" class="mt-1 btn btn-primary ">Upload Image</a>
        </form>
    </div>
</div>
<script src="jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>
    $('.btn-primary').on('click',function(e){
        e.preventDefault();
    swal({
    position: "top-end",
    type: "success",
    icon: "success",
    title: "Upload success",
    showConfirmButton: false,
    timer: 3000
    }).then((result) => {
        
    })
    });

    $(".form-control").focus(function(){
        $(".mess").html("");
        $(".mess").css("color", "gray");
    })
</script>
<script src="jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="js/form.js"></script>