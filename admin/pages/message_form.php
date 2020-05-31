

<div class="main-card mb-3 card">
    <div class="card-body"><h5 class="card-title">Form for message upload</h5>
        <form class="f_testimonies" action="index.php" method="post" enctype="multipart/form-data">
            <div class="position-relative form-group">
                <label for="exampleEmail" class="">Author</label>
                <input name="t_author" id="exampleEmail" placeholder="Write name" type="text" class="form-control" required>
            </div>
            <div class="position-relative form-group">
                <label for="exampleText" class="">Message</label>
                <textarea name="t_msg" id="exampleText" class="form-control" required></textarea>
            </div>
            <button type="submit" name="t_submit" class="mt-1 btn btn-primary t_submit">Submit</button>
        </form>
    </div>
</div>
<script>
    $(".form-control").focus(function(){
        $(".mess").html("");
        $(".mess").css("color", "gray");
    })
</script>
<script src="js/form.js"></script>