<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sur</title>
    <!-- css file -->
    <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}" />
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
    @include('website.includes.header')
    <div class="salalahpage container ">
        <div class="textInfo1">
            <p class="fs-4" data-translate="title10">
                The Turtle Reserve includes Ras Al Hadd in the state of Tire, and it is one of the most wonderful and
                distinguished tourist attractions. Tire has been famous since ancient times for building ships, and its
                people
                were known for practicing the fishing profession. Ras Al Jinz is a charming natural landmark overlooking
                the Gulf of Oman in the Sultanate of Oman, and is famous locally for being a fishing village.
            </p>
        </div>
        <div class="weathersahar">
            <h4 class="text-center my-4"><a href="https://www.accuweather.com/ar/om/sur/256960/current-weather/256960"
                    data-translate="weather"><span class="d-inline-block">Weather</span></a></h4>
        </div>
        <div class="images row my-5 py-5">
            <div class="Imageabout col-12 col-sm-6 col-md-4 my-4">
                <div class="image h-75">
                    <img src="{{asset('assets/images/surimg1.AVIF')}}" alt="surimg1" class="w-100 h-100">
                </div>
                <div class="imginfo">
                    <p class="info fs-5" data-translate="surinfo1">
                        The Ras Al Hadd Turtle Reserve in the state of Sur is one of the most amazing tourist
                        attractions in the Gulf Sultanate of Oman
                    </p>
                </div>
            </div>
            <div class="Imageabout col-12 col-sm-6 col-md-4 my-4">
                <div class="image h-75">
                    <img src="{{asset('assets/images/surimg2.AVIF')}}" alt="surimg2" class="w-100 h-100">
                </div>
                <div class="imginfo">
                    <p class="info fs-5" data-translate="surinfo2">
                        Ras Al Jinz, Sultanate of Oman, is known as one of the charming natural landmarks overlooking
                        the
                        distinctive Gulf of the Sultanate of Oman, as this reserve is known locally as a fishing
                        village.
                    </p>
                </div>
            </div>
            <div class="Imageabout col-12 col-sm-6 col-md-4 my-4">
                <div class="image h-75">
                    <img src="{{asset('assets/images/surimg3.AVIF')}}" alt="surimg3" class="w-100 h-100">
                </div>
                <div class="imginfo">
                    <p class="info fs-5" data-translate="surinfo3">
                        The Ras Al Hadd Fort in the Gulf Sultanate of Oman is known as one of the most prominent
                        historical monuments in the Wilayat of Sur and the Sultanate of Oman,
                        which is distinguished by its building in the traditional Omani heritage style.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- font awesome library -->
    <script src="https://kit.fontawesome.com/4964aa4896.js" crossorigin="anonymous"></script>
    <!-- Bootstrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/main.js') }}"></script>
</body>

</html>
