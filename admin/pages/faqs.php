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
                <i class="fa fa-table icon-gradient bg-tempting-azure">
                </i>
            </div>
            <div>FAQs
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
                <button style="margin-bottom: 0.5em; padding: 0 20px;" class="btn btn-danger float-left" form="deleteFaqs" name="deleteFaqs"><i class="fa fa-trash fa-2x"></i></button>
            </div>
            
        <table style="width: 100%;" id="table" class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th></th>
                <th>Asked By</th>
                <th>Question</th>
                <th>Answer</th>
                <th>Answered By</th>
            </tr>
            </thead>
            <tbody>
                <form action='scripts/delete.php' method='post' id='deleteFaqs'>
                <?php echo faqs(); ?>
               <!--php echo details-->
                </form>
            </tbody>
        </table>
    </div>
</div>

               