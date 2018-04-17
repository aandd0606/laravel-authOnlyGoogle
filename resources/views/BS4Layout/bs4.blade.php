<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>EPB_Share英語繪本分享平台</title>
</head>

<body>






<div class="container">
    {{--導覽列區塊--}}
    <div class="row bg-info">
    @include('BS4Layout.navBar')
    </div>

    {{--橫幅輪動區塊--}}
    <div class="row bg-info">
    @include('BS4Layout.carousel')
    </div>

    {{--表單驗證錯誤訊息區塊--}}
    <div class="row bg-info">
    @include('BS4Layout.error')
    </div>

    <h1>Bootstrap 4</h1>
    {{--引入表格區塊--}}
    @include('BS4Layout.table')

    {{--引入表單區塊--}}
    @include('BS4Layout.form')


    {{--    @include('layouts.menubar')--}}
    @yield('content')
    {{--    @include('layouts.footer')--}}
    <div class="row">
    <div class="col col-md-2 bg-info">1</div>
    <div class="col col-md-8 bg-info">這是頁腳</div>
    <div class="col col-md-2 bg-info">1</div>
    </div>
</div>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>