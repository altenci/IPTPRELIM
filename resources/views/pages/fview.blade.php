<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First View</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

</head>
<body>
    <div>
        <h1>This is the First View</h1>
        <a href="{{url('/sview')}}">Second View</a>
        <a href="{{url('/tview')}}">Third View</a>
    </div>
</body>
</html>