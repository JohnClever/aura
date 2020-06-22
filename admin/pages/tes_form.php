

<div class="main-card mb-3 card">
    <div class="card-body"><h5 class="card-title">Form for Testimonies</h5>
        <form class="f_testimonies" action="scripts/testimonials.php" method="post" enctype="multipart/form-data">
            <div class="position-relative form-group">
                <label for="exampleEmail" class="">Name</label>
                <input name="name" id="exampleEmail" placeholder="Name" type="text" class="form-control" required>
            </div>
            <div class="position-relative form-group">
                <label for="comment" class="">Comment</label>
                <textarea name="comment" id="comment" cols="20" rows="7" class="form-control" placeholder="Write comment here..."></textarea>
            </div>
            <div class="position-relative form-group e_audpic">
                <label for="exampleFile" class="">Select a picture,</label>
                <input name="photo" id="exampleFile" type="file" class="form-control-file" required>
            </div>
            <button style= "color: #fff" type="submit" class="mt-1 btn btn-primary">Upload Testimony</button>
        </form>
    </div>
</div>
<script src="jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="jquery-3.3.1.min.js"></script>

<script src="js/form.js"></script>