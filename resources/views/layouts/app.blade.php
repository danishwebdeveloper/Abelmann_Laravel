<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style type="text/css">
.displaynone{
display: none;
}
table {
    counter-reset: tableCount;
}
.counterCell:before {
    content: counter(tableCount);
    counter-increment: tableCount;
}
.disp{
    margin-left: 25px;
    margin-top: 15px;
}
</style>
</head>
<body>
     @yield('content')
</body>
</html>

