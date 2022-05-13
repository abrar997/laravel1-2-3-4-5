<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> </title>
      <!-- CSS FILES -->
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
    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
        <div class="container">
            <a class="navbar-brand mx-auto d-lg-none" href="index.html">
                Medic Care
                <strong class="d-block">Health Specialist</strong>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">

                        {{-- <a class="nav-link" href="{{route('home # name of Route from web ')}}">Home</a> --}}
                        {{-- this or this --}}

                        <a class="nav-link" href="{{ url('home') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#timeline">Timeline</a>
                    </li>

                    <a class="navbar-brand d-none d-lg-block" href="index.html">
                        Medic Care
                        <strong class="d-block">Health Specialist</strong>
                    </a>

                    <li class="nav-item">
                        <a class="nav-link" href="#reviews">Testimonials</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('book')}}">Booking</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>


    <section class="section-padding bg-light" id="booking">
        <div class="container">
            <div class="row">

                <div class="col-lg-8  mx-auto mt-0 ">
                    <div class="booking-form" style="margin-top: -70px">

                        <h5 class="text-center mb-lg-3 mb-2 bg-primary text-light">Book an appointment</h5>

                        <form role="form" action="#booking" method="post" class="shadow-lg p-2">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Full name" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        class="form-control" placeholder="Email address" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="telephone" name="phone" id="phone"
                                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control"
                                        placeholder="Phone: 123-456-7890">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="date" name="date" id="date" value="" class="form-control">

                                </div>

                                <div class="col-12">
                                    <textarea class="form-control" rows="5" id="message" name="message" placeholder="Additional Message"></textarea>
                                </div>

                                <div class="col-lg-2 col-md-4  col-6 mx-auto">
                                    <button type="submit" class="form-control bg-danger text-light p-2 ">Book
                                        Now</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>









</body>
</html>
