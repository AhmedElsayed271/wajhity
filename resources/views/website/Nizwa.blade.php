<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nizwa</title>
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
            <p class="fs-4" data-translate="nizwatitle">
                The city of Nizwa is located in the Sultanate of Oman in the Al Dakhiliyah Governorate,
                specifically in the Al Jawf region. Nizwa includes a distinguished group of natural, historical and
                cultural tourist places
                And various museums
            </p>
        </div>
        <div class="weathersahar">
            <h4 class="text-center my-4"><a
                    href="https://www.msn.com/ar-sa/weather/forecast/in-Nizwa,%D8%A7%D9%84%D8%AF%D8%A7%D8%AE%D9%84%D9%8A%D8%A9?loc=eyJsIjoiTml6d2EiLCJyIjoi2KfZhNiv2KfYrtmE2YrYqSIsInIyIjoiV2lsYXlhdCBOaXp3YSIsImMiOiLYudmF2KfZhiIsImkiOiJPTSIsImciOiJhci1zYSIsIngiOiI1Ny41MzEiLCJ5IjoiMjIuOTMyIn0%3D&ocid=ansmsnweather&weadegreetype=C"
                    data-translate="weather"><span class="d-inline-block">Weather</span></a></h4>
        </div>
        <div class="images row my-5 py-5">
            <div class="Imageabout col-12 col-sm-6 col-md-4 my-4">
                <div class="image h-75">
                    <img src="{{asset('assets/images/nizwaimg1.AVIF')}}" alt="nizwaimg1" class="w-100 h-100">
                </div>
                <div class="imginfo">
                    <p class="info fs-5" data-translate="nizwainfo1">
                        The city of Nizwa is located in the Sultanate of Oman in the Al Dakhiliyah Governorate,
                        specifically in the Al Jawf region
                        It is about 164 km from the city of Muscat
                    </p>
                </div>
            </div>
            <div class="Imageabout col-12 col-sm-6 col-md-4 my-4">
                <div class="image h-75">
                    <img src="{{asset('assets/images/nizwaimg2.AVIF')}}" alt="nizwaimg2" class="w-100 h-100">
                </div>
                <div class="imginfo">
                    <p class="info fs-5" data-translate="nizwainfo2">
                        Nizwa embraces a variety of accommodations, with different prices, to suit a budget
                        All the tourists coming to the city and most of the accommodations are located near
                        One of the places of tourism in Nizwa
                    </p>
                </div>
            </div>
            <div class="Imageabout col-12 col-sm-6 col-md-4 my-4">
                <div class="image h-75">
                    <img src="{{asset('assets/images/nizwaimg3.AVIF')}}" alt="duqmimg3" class="w-100 h-100">
                </div>
                <div class="imginfo">
                    <p class="info fs-5" data-translate="nizwainfo3">
                        Nizwa has a bunch of diverse tourist attractions that attract different tourists, 
                        and we have collected for you, dear reader, in this tab, a bunch of the most important of these tourist attractions
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
    <script src="{{ asset('assets/main.js') }}"></script>
</body>

</html>