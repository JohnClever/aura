$(document).ready(function() { 


//......................DataTables........................//

        $(".data_t").click(function(event) {
                event.preventDefault();
                $(".app-main__inner").load("pages/faqs.php");
        });
        $(".data_ts").click(function(event) {
                event.preventDefault();
                $(".app-main__inner").load("pages/tes.php");
        });

        $(".data_e").click(function(event) {
                event.preventDefault();
                $(".app-main__inner").load("pages/events.php");
        })

        $(".data_c").click(function(event) {
                event.preventDefault();
                $(".app-main__inner").load("pages/messages.php");
        });

        $(".data_d").click(function(event) {
                event.preventDefault();
                $(".app-main__inner").load("pages/dash.php");
        });



 //......................Forms........................//

        $(".data_sf").click(function(event) {
                event.preventDefault();
                $(".app-main__inner").load("pages/image_form.php");
        })

        $(".data_tf").click(function(event) {
                event.preventDefault();
                $(".app-main__inner").load("pages/faq_form.php");
        })
        $(".data_tfs").click(function(event) {
                event.preventDefault();
                $(".app-main__inner").load("pages/tes_form.php");
        })

       
        


        

})