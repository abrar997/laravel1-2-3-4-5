<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/templatemo-medic-care.css') }}" rel="stylesheet">

</head>

<body>
    <div class="container ">
        <h6 class="bg-danger text-center text-light mb-4 p-2">photos by resource Controller and model </h6>
        <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data"
            class="form mx-auto shadow p-4 w-50 ">
            @csrf
            {{-- to protect data info --}}
            <div class="form-group">
                <h6 class="">uplaod photo </h6>
                <br>
                {{-- any input need name --}}
                <input type="file" class="border p-2" name="file" />
            </div>

            <div class="form-group mt-4">
                <input class="bg-danger border-none btn text-light" type="submit" />
            </div>
        </form>
    </div>
</body>

</html>
