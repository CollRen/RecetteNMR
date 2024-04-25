@extends('partials.base')

@section('titre', trans('About'))

@section('content')

<body class="mt-24">
<section class="bg-clr-sec2 bg-opacity-5">
    <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            <div class="max-w-lg">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">@lang('lang.titre_About')</h2>
                <p class="mt-4 text-clr-pri1 text-lg">@lang('lang.text_about_us')</p>
                <div class="mt-8">
                    <a href="#" class="text-blue-500 hover:text-clr-sec2 font-medium">@lang('lang.learn_more')
                        <span class="ml-2">&#8594;</span></a>
                </div>
            </div>
            <div class="mt-12 md:mt-0">
                <img src="{{Vite::asset('resources/img/pexels-ella-olsson.jpg')}}" alt="About Us Image" class="object-cover rounded-lg shadow-md">
            </div>
        </div>
    </div>
</section>
</body>
@endsection
</html>