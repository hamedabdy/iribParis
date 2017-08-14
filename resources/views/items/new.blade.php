<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>آرشیو صدا سیما پاریس - ایجاد رکورد</title>
        <link rel="icon" href="images/favicon.png">
        <link rel="stylesheet" type="text/css" href="../js/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" type="text/css" href="../js/jquery-ui/jquery-ui.structure.min.css">
        <link rel="stylesheet" type="text/css" href="../js/jquery-ui/jquery-ui.theme.min.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>

        <div class="form-container">
            <div id="submit-msg" class=""></div>
            <form class="form-horizontal" method="POST" action="../items" id="new-record-form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <fieldset>

            <!-- Form Name -->
            <legend>ایجاد رکورد جدید</legend>

            <!-- Text input-->
                <label class="col-md-4 control-label" for="global_id">شماره کل</label>  
                    <input id="global_id" name="global_id" type="text" class="form-control input-md" required="">
                <label class="col-md-4 control-label" for="item_id">شماره آیتم</label>  
                    <input id="item_id" name="item_id" type="text" class="form-control input-md" required="">
                <label class="col-md-4 control-label" for="date_shamsi">عنوان</label>  
                    <input id="title" name="title" type="text" class="form-control input-md" required="">
                <label class="col-md-4 control-label" for="date">تاریخ میلادی</label>  
                    <input id="datepicker" name="datepicker" type="text" class="form-control input-md" placeholder="DD/MM/YYYY" required="">
                    <input type="hidden" name="date" id="date">
                <label class="col-md-4 control-label" for="date_shamsi">تاریخ شمسی</label>  
                    <input id="date_shamsi" name="date_shamsi" type="text" class="form-control input-md" required="">
                <label class="col-md-4 control-label" for="description">توضیحات</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                <div class="radio-buttons">
                    <input type="radio" name="rush_report" id="rush_report0" value="1" checked="checked">گزارش
                    <input type="radio" name="rush_report" id="rush_report1" value="2">راش
                    <input type="radio" name="rush_report" id="rush_report2" value="3">مانیتورینگ
                </div>
                    <span class="sent"><input type="checkbox" name="sent" id="sent-0" value="1" checked="checked">ارسالی؟</span>
                <div class="action-buttons">
                    <button id="submit" name="submit" class="btn btn-success">ثبت</button>
                    <button id="reset" name="reset" class="btn btn-danger">از نو</button>
                </div>
            </fieldset>
            </form>
        </div>
        <footer>Design &amp; Development: Hamed Abdy | 2017 | IRIB</footer>

        <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="../js/jquery-ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../js/jquery-ui/datepicker-fr.js"></script>
        <script type="text/javascript" src="../js/jdate.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function (){
                $.datepicker.setDefaults( $.datepicker.regional[ "fr" ] );
                $( '#datepicker' ).datepicker( {altField: "#date", altFormat: "yy-mm-dd"} );

                $('#datepicker').on('change', function (){
                    var JDate = require('jdate');
                    jdate = JDate.to_jalali(new Date($("#date").val())) + "";
                    $('#date_shamsi').val(jdate.replace(/,/g, '/'));
                });
            });

            // Variable to hold request
            var request;

            // $("#new-record-form").submit(function(e) {
            //     e.preventDefault();

            //     // Abort any pending request
            //     if(request) request.abort();

            //     // Local variables
            //     var $form = $(this);

            //     // Let's select and cache all the fields
            //     var $inputs = $form.find("input, select, button, textarea, radio, checkbox");

            //     // Serialize the data in the form
            //     var serializedData = $form.serialize();

            //     // Let's disable the inputs for the duration of the Ajax request.
            //     // Note: we disable elements AFTER the form data has been serialized.
            //     // Disabled form elements will not be serialized.
            //     $inputs.prop("disabled", true);

            //     request = $.ajax({
            //         url: "new-record.php",
            //         method: "POST",
            //         data: serializedData,
            //         beforeSend: function( xhr ) { $("#submit-msg").removeClass("fade-trans"); }
            //     });

            //     // Callback handler that will be called on success
            //     request.done(function (response, textStatus, jqXHR){
            //         // Log a message to the console
            //         console.log("Hooray, it worked!", response);
            //         $("#submit-msg").html(response);
            //     });

            //     // Callback handler that will be called on failure
            //     request.fail(function (jqXHR, textStatus, errorThrown){
            //         // Log the error to the console
            //         console.error(
            //             "The following error occurred: "+
            //             textStatus, errorThrown
            //         );
            //     });

            //     // Callback handler that will be called regardless
            //     // if the request failed or succeeded
            //     request.always(function () {
            //         // Reenable the inputs
            //         $inputs.prop("disabled", false);
            //         $("#submit-msg").addClass("fade-trans");
            //     });

            // });
        </script>
    </body>
</html>