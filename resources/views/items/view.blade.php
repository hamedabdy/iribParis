<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>آرشیو صدا سیما پاریس - نمایش رکورد ها</title>
        <meta charset="utf-8">
        <link rel="icon" href="images/favicon.png">
        <link rel="stylesheet" type="text/css" href="../js/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" type="text/css" href="../js/jquery-ui/jquery-ui.structure.min.css">
        <link rel="stylesheet" type="text/css" href="../js/jquery-ui/jquery-ui.theme.min.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>

        <div class="sql-query">Query : </div>
        <?php $humanReadableMapping = array("", "شماره ردیف", "شناسه کل", "شناسه آیتم", "عنوان", "تاریخ میلادی", "تاریخ شمسی", "گزارش", "راش", "مانیتورینگ", "ارسالی", "توضیحات"); ?>
        @if (count($rows) > 0)
        <table class="table table-striped table-hover">
          <thead class="thead-inverse">
            <tr class="font-farsi-titre">
              <th>{!! implode('</th><th>', $humanReadableMapping) !!}</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($rows as $row)
            <tr>
                <td><span class="del-item" data-token="{{ csrf_token() }}">&#10008;</span></td>
                <td>{{ $row->id }}</td>
                <td>{{ $row->global_id }}</td>
                <td>{{ $row->item_id }}</td>
                <td>{{ $row->title }}</td>
                <td>{{ $row->date }}</td>
                <td>{{ $row->date_shamsi }}</td>
                <td>{{ $row->report == 0 ? '-' : '&#x2714;' }}</td>
                <td>{{ $row->rush == 0 ? '-' : '&#x2714;' }}</td>
                <td>{{ $row->monitoring == 0 ? '-' : '&#x2714;' }}</td>
                <td>{{ $row->sent == 0 ? '-' : '&#x2714;' }}</td>
                <td>{{ $row->description }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <?php endif; ?>

        <footer>Design &amp; Development: Hamed Abdy | 2017 | IRIB</footer>

        <div id="dialog-confirm" style="display: none; font-family: Compset;" title="حذف ردیف؟">
          <p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>آیا با حذف این ردیف موافق هستید؟</p>
        </div>

        <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="../js/jquery-ui/jquery-ui.min.js"></script>
        <script type="text/javascript">
            $("table > tbody > tr").on({
                mouseenter: function(e){
                    var $id = $(this).children(":nth-child(2)").html();
                    var row = $(this).find(".del-item");
                    var parent = $(row).parent();
                    var token = $(row).data('token');
                    row.show();
                    row.click(function(e){
                        $( "#dialog-confirm" ).dialog({
                            resizable: false,
                            height: "auto",
                            width: 400,
                            modal: true,
                            buttons: {
                                "بلی": function() {
                                    $( this ).dialog( "close" );
                                    var request = $.ajax({
                                        url: '{{ url('/items') }}' + '/' + $id,
                                        type: "POST",
                                        dataType : 'text',
                                        data : {"_method" : "delete", "id" : $id, "_token": token}
                                    });
                                    request.done(function(msg) {
                                        console.log('SUCCESS ', msg);
                                        parent.slideUp(500, function () {
                                            parent.closest("tr").remove();
                                        });
                                    });
                                    request.fail(function(msg) {
                                        console.log('FAIL ' , msg);
                                    });
                                },
                                "خیر": function() {
                                    $( this ).dialog( "close" );
                                }
                            }
                        });
                    });
                }, mouseleave: function(e){
                    $(this).find(".del-item").hide();
                }
            });
        </script>

    </body>
</html>