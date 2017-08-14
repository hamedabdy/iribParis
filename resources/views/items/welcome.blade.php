<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>آرشیو صدا سیما پاریس - صفحه نخست</title>
        <link rel="icon" href="images/favicon.png">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="col-md-6" style="right: 0; position: absolute;">
                <div class="logo"><img src="images/logo-irib.png" alt="logo"></div>
                <div style="text-align: center;">
                    <a href="items/show" class="btn btn-success btn-sm" style="display: block; margin-bottom: 10px;">مشاهده تمامی رکورد ها</a>
                    <!-- <a href="items/search" class="btn btn-secondary btn-sm">جستجوی رکورد</a> -->
                    <a href="items/create" class="btn btn-danger btn-sm" style="display: block;">ایجاد رکورد جدید</a>
                </div>
            </div>
            <div class="col-md-6" style="margin-top: 5%; height: 80%; position: absolute; left: 0;">
                <iframe frameborder="0" style="height: 100%; width: 100%;" src="search/index"></iframe>
            </div>
        </div>
    </body>
</html>
