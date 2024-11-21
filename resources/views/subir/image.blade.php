<!-- resources/views/image.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Viewer</title>
    <style>
        .thumbnail {
            width: 150px;
            cursor: pointer;
        }
        .large-image {
            display: none;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Image Viewer</h1>
    <img src="{{ url('image/' . $image->id) }}" alt="Thumbnail" class="thumbnail" onclick="showLargeImage()">
    <div class="large-image" id="largeImageContainer">
        <h2>{{ $image->name }}</h2>
        <img src="{{ url('image/' . $image->id) }}" alt="Large Image">
    </div>

    <script>
        function showLargeImage() {
            document.getElementById('largeImageContainer').style.display = 'block';
        }
    </script>
</body>
</html>