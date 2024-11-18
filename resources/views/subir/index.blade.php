<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivos pdf e imagenes</title>
</head>
<body>
    <form action="{{ url('subir') }}" enctype="multipart/form-data" method="post">
        @csrf <!-- seguridad, consultas preparadas SQL -->
        <input type="file" name="file">
        <input type="submit">
    </form>
</body>
</html>