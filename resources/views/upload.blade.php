<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Upload</title>



</head>
<body>
    <div class="container">
        <div class="row">
            <form action="{{ route('upload.file') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="file" name="file">
                <input type="text" name="title">
                <input type="text" name="description">
                <button type="submit" class="btn btn-info">Pridėti</button>
            </form>
        </div>
    </div>










</body>
</html>