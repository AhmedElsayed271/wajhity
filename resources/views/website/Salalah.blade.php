<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salalah</title>
        <!-- css file -->
        <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
        <!-- Render elements normaly -->
      <link rel="stylesheet" href="{{ asset('assets/css/Normarize.css') }}">
        <!-- Google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Cairo:wght@500;600&family=Poppins:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=Ubuntu:ital,wght@0,300;0,400;1,300;1,400;1,500&display=swap"
            rel="stylesheet">
        <!-- Bootstrap link  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
        <!-- strat header -->
        @include('website.includes.header')    <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
    <div class="salalahpage container ">
        <div class="textInfo1">
            <p class="fs-4" data-translate="salalahtitle">The best hotels in Salalah are a fundamental pillar in the advancement of the tourism industry in Oman, especially with the historical, renaissance, and recreational elements that the state possesses, which made it the second capital of the Sultanate.
            The unifying thread for all hotels in the Sultanate of Oman is its highlighting the historical character of the Sultanate of Oman with its cultural and populist details, and this cannot be considered surprising as it is a general pattern for all hotels in the Sultanate.</p>
        </div>
        <div class="weathersahar">
            <h4 class="text-center my-4" ><a href="https://www.msn.com/ar-sa/weather/forecast/in-Salalah,%D8%B8%D9%81%D8%A7%D8%B1?loc=eyJsIjoiU2FsYWxhaCIsInIiOiLYuNmB2KfYsSIsInIyIjoiV2lsYXlhdCBTYWxhbGFoIiwiYyI6Iti52YXYp9mGIiwiaSI6Ik9NIiwiZyI6ImFyLXNhIiwieCI6IjU0LjEwMSIsInkiOiIxNy4wMTcifQ%3D%3D&ocid=ansmsnweather&weadegreetype=C" data-translate="weather"><span class="d-inline-block">Weather</span></a></h4>
        </div>
        <div class="images row my-5 py-5">
                <div class="Imageabout col-12 col-sm-6 col-md-4 my-4">
                    <div class="image h-50">
                        <img src="{{asset('assets/images/Salalahimg1.AVIF')}}" alt="Salalahimg1" class="w-100 h-100">
                    </div>
                    <div class="imginfo">
                        <p class="info fs-5" data-translate="saharinfo1">
                            Al Fanar Hotel Salalah
                            One of the best hotels in Salalah overlooking the sea, in addition to a private
                            beach area, with the opportunity to enter.
                        </p>
                    </div>
                </div>
                <div class="Imageabout col-12 col-sm-6 col-md-4 my-4">
                    <div class="image h-50">
                        <img src="{{asset('assets/images/Salalahimg2.AVIF')}}" alt="Salalahimg2" class="w-100 h-100">
                    </div>
                    <div class="imginfo">
                        <p class="info fs-5" data-translate="saharinfo2">
                            Intercity Hotel Salalah by Deutsche Hospitality
                            The hotel is suitable for those looking for the best hotels in Salalah,
                            which are characterized by views and a legendary facade on the city's skyline.
                        </p>
                    </div>
                </div>
                <div class="Imageabout col-12 col-sm-6 col-md-4 my-4">
                    <div class="image h-50">
                        <img src="{{asset('assets/images/Salalahimg3.AVIF')}}" alt="Salalahimg3" class="w-100 h-100">
                    </div>
                    <div class="imginfo">
                        <p class="info fs-5" data-translate="saharinfo3">
                            Atana Stay Salalah
                            One of the best hotels in Salalah, the Sultanate of Oman, as it provides modern and elegant
                            accommodation, with recreational facilities, such as a swimming pool, internet, and parking.
                        </p>
                    </div>
                </div>
        </div>
    </div>
        <!-- font awesome library -->
        <script src="https://kit.fontawesome.com/4964aa4896.js" crossorigin="anonymous"></script>
        <!-- Bootstrap link -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>
    <script src="{{asset('assets/main.js')}}"></script>
</body>
</html>