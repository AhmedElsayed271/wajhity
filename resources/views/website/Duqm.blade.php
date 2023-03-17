<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duqm</title>
    <!-- css file -->
    <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
    <!-- Render elements normaly -->
    <link rel="stylesheet" href="{{ asset('assets/css/Normarize.css') }}">
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
      {{-- header --}}
      @include('website.includes.header')

    <div class="salalahpage container ">
        <div class="textInfo1">
            <p class="fs-4" data-translate="duqmtitle">
                Duqm, the Sultanate of Oman, is the city of the future and not just an industrial zone, as the state is
                witnessing a tourism boom and is currently considered the most promising area for tourism-related
                investments,
                due to its various characteristics and features. It also includes an airport for easy access for
                visitors.
            </p>

            <div class="weathersahar">
                <h4 class="text-center my-4"><a
                        href="https://www.msn.com/ar-sa/weather/forecast/in-Duqm,%D9%85%D8%AD%D8%A7%D9%81%D8%B8%D8%A9-%D8%A7%D9%84%D9%88%D8%B3%D8%B7%D9%89?loc=eyJsIjoiRHVxbSIsInIiOiLZhdit2KfZgdi42Kkg2KfZhNmI2LPYt9mJIiwicjIiOiJXaWxheWF0IEFkIER1cW0iLCJjIjoi2LnZhdin2YYiLCJpIjoiT00iLCJnIjoiYXItc2EiLCJ4IjoiNTcuNjM1IiwieSI6IjE5LjYyIn0%3D&ocid=ansmsnweather&weadegreetype=C"
                        data-translate="weather"><span class="d-inline-block">Weather</span></a></h4>
            </div>
            <div class="images row my-5 py-5">
                <div class="Imageabout col-12 col-sm-6 col-md-4 my-4">
                    <div class="image h-50">
                        <img src="{{ asset('assets/images/duqm.AVIF') }}" alt="duqmimg1" class="w-100 h-100">
                    </div>
                    <div class="imginfo">
                        <p class="info fs-5" data-translate="duqminfo1">
                            Arabian Oryx Reserve
                            The Arabian Oryx Reserve or the Oryx Reserve is located an hour's drive from Duqm,
                            Sultanate of Oman, and has an area of 27,500 square kilometers.
                        </p>
                    </div>
                </div>
                <div class="Imageabout col-12 col-sm-6 col-md-4 my-4">
                    <div class="image h-50">
                        <img src="{{ asset('assets/images/duqmimg1.AVIF') }}" alt="duqmImage" class="w-100 h-100">
                    </div>
                    <div class="imginfo">
                        <p class="info fs-5" data-translate="duqminfo2">
                            Al-Haqf area
                            The Al-Haqf region in the city of Duqm, the Sultanate of Oman, is home to the oldest rocks
                            ever,
                            dating back more than 730 million years. The region is considered one of the sites and
                            natural reserves that
                            are characterized by preserving the fossils found there.
                        </p>
                    </div>
                </div>
                <div class="Imageabout col-12 col-sm-6 col-md-4 my-4">
                    <div class="image h-50">
                        <img src="{{ asset('assets/images/duqmimg2.AVIF') }}" alt="duqmimg3" class="w-100 h-100">
                    </div>
                    <div class="imginfo">
                        <p class="info fs-5" data-translate="duqminfo3">
                            The two referees left Duqm
                            Bar Al Hakman, which is an area that enjoys virgin nature untouched by human hands,
                            and consists of several plains and picturesque vast flats. The area also includes many
                            wonderful mud lands
                        </p>
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
