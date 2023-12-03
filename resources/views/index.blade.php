 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document NDP contents</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            overflow: hidden;
        }

        .generateNpd {
            color: rgb(255, 255, 255);
            align-items: center;
        }

        .img {
            width: 100px;
            height: 200px;
            background-image: url('image/img1.jpg');
        }
    </style>
</head>

<body style="background-image: url('image/index.jpg')">
    <div class="container mt-3" align="" >
        <a href="{{ route('download-pdf') }}"> <button class="btn btn-primary generateNpd"> Stream & Download NDP Book </button></a>
        <a href="{{ route('preview-book') }}"> <button class="btn btn-success generateNpd"> Preview My Book </button></a>
        {{-- <a href="{{ route('stream-pdf') }}"> <button class="btn btn-success generateNpd"> Stream PDF </button></a> --}}
    </div>
</body>

</html>
