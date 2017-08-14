<!DOCTYPE html>
<html lang="fa">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="images/favicon.png">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <title>آرشیو صدا سیما پاریس - جستجوی رکورد</title>
    </head>
    <body dir="rtl">
        <div class="container">
            <div class="well well-sm">
                <div class="form-group">
                    <div class="input-group input-group-md">
                        <div class="icon-addon addon-md">
                            <input type="text" placeholder="به دنبال چه هستید?" class="form-control" v-model="query">
                        </div>
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button" @click="search()" v-if="!loading">جستجو!</button>
                            <button class="btn btn-default" type="button" disabled="disabled" v-if="loading">در حال جستجو...</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="alert alert-danger" role="alert" v-if="error">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                @{{ error }}
            </div>
            <div id="products" class="">
                <div class="" v-for="item in items">
                    <div class="thumbnail" style="text-align: right;">
                        <h3 class="list-group-item-heading bg-info">@{{ item.global_id }} &#8592; @{{ item.item_id }}- @{{ item.title }}</h3>
                        <p class="list-group-item-text">@{{ item.description }}</p>
                        <p class="list-group-item-text bg-warning" style="text-align: left;">@{{ item.date }} | @{{ item.date_shamsi }}</p>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.1/vue-resource.min.js"></script>
        <script src="../js/search.app.js"></script>

    </body>
</html>