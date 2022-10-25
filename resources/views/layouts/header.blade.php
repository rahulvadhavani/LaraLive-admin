<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <title>{{env('APP_NAME')}}</title>
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/plugins/charts-c3/c3.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/theme1.css')}}" />
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <link rel="stylesheet" href="{{asset('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.min.css" />

    <livewire:styles>

        <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}" />
        @stack('css')
</head>