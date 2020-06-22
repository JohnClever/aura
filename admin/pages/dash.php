<?php 
    session_start();
    if(!isset($_SESSION['fname']))
        header('location: index.html?signFrst=1');
        require_once '../scripts/functions.php';


?>

<div class="app-page-title">

    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-map">
                </i>
            </div>
            <div>Dashboard
                <div class="page-title-subheading">

                </div>
            </div>
        </div>    
    </div>
</div>           
<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3 widget-chart widget-chart2 text-left">
                    <div class="widget-chart-content">
                        <div class="widget-chart-flex">
                            <div class="widget-title">Unread Messages</div>
                        </div>
                        <div class="widget-chart-flex">
                            <div class="widget-numbers"><span><!-- php number count clean the zero its default--> <?php echo countUnrdMsgs(); ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 widget-chart widget-chart2 text-left">
                    <div class="widget-chart-content">
                        <div class="widget-chart-flex">
                            <div class="widget-title">FAQs</div>
                        </div>
                        <div class="widget-chart-flex">
                            <div class="widget-numbers"><span><!-- php number count clean the zero its default--> <?php echo countFaqs(); ?>  </span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 widget-chart widget-chart2 text-left">
                    <div class="widget-chart-content">
                        <div class="widget-chart-flex">
                            <div class="widget-title">Gallery</div>
                        </div>
                        <div class="widget-chart-flex">
                            <div class="widget-numbers"><span><?php echo photoCount();?></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 widget-chart widget-chart2 text-left">
                    <div class="widget-chart-content">
                        <div class="widget-chart-flex">
                            <div class="widget-title">Testimonies</div>
                        </div>
                        <div class="widget-chart-flex">
                            <div class="widget-numbers"><span><!-- php number count clean the zero its default-->  <?php echo testNo(); ?> </span></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>
               