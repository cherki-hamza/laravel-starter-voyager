@extends('frontend.master.app')

@section('my-styles')
    <style>
        h1{
            color:gold;
        }
        .color_1{
            background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
            height: 2px;
        }
    </style>
@endsection

@section('title' , 'Home Site')

@section('content')


<div class="container my-2">

    <div class="card shadow my-5">
        <div class="card-header">
            <h1 class="card-text text-primary"> {{__('site.HELLO')}} </h1>
        </div>
        <div class="card-body">
            <p class="text-danger">{{__('site.FULL_STACK')}}</p>
        </div>
        <div class="card-footer">
            <span class="btn btn-success opacity-5 btn-block"><a class="orange" target="__blink" href="https://cherkihamza.com">cherkihamza.com</a></span>
        </div>
    </div>

</div>



@endsection

@section('scripts')
    <script>
        const clearStyles = '';
        const largeText = 'font-size: 20px;';
        const yellowText = 'color: yellow;';
        const largeRedText = 'font-size: 20px; color: red;';
        const largeGreenText = 'font-size: 20px; color: green;';

        console.log(`%cWelcome to Home Page :).\n`+
            `%cIm a developer %cWeb php <laravel> javascript <react,vuejs> Full Stack.\n`+
            `%cThis is my website %chttps://cherkihamza.com.`,
            largeRedText,
            clearStyles,
            largeGreenText,
            clearStyles,
            largeText + yellowText
        );

        let cherki_hamza_info = [
            {
                FullName: 'Cherki Hamza',
                Website: 'https://cherkhamza.com',
                Country: 'Morocco',
                job: 'Developer Web Full Stack',
                Email: 'cherki0hamza@gmail.com',
                Telphone: '+212 06-37-80-69-39',
            },

            ];
            console.table(cherki_hamza_info);

    </script>
@endsection
