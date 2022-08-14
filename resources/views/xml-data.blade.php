<!DOCTYPE html>
<html lang="en">

<head>
    <title>Тестовое - xml </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container" style="margin-top: 50px;">
        <h4 style="text-align: center;">Тестовое - xml</h4>

        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>    
            <strong>{{ $message }}</strong>
        </div>
        @endif

        <form action="{{ route('xml-upload') }}" id="frm-create-course" method="post">
           @csrf
            <div class="form-group">
                <label for="file">Выберите файл:</label>
                <input type="file" class="form-control" required id="file" name="file">
            </div>

            <button type="submit" class="btn btn-primary" id="submit-post">Выгрузить</button>
        </form>
    </div>
</body>

</html>