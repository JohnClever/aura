

<div class="main-card mb-3 card">
    <div class="card-body"><h5 class="card-title">Form for FAQ upload</h5>
        <form class="f_testimonies" action="scripts/faq_upload.php" method="post">
            <div class="position-relative form-group">
                <label for="exampleEmail" class="">Asked By</label>
                <input name="askerName" id="exampleEmail" placeholder="Name of Asker" type="text" class="form-control" required>
            </div>
            <div class="position-relative form-group">
                <label for="exampleText" class="">Question</label>
                <input name="question" id="exampleText" class="form-control" type="text" required>
            </div>
            <div class="position-relative form-group">
                <label for="answerText" class="">Answer</label>
                <textarea name="answer" id="answerText" class="form-control" required></textarea>
            </div>
            <button type="submit" name="t_submit" class="mt-1 btn btn-primary t_submit">Upload FAQ</button>
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