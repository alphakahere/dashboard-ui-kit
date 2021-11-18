<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <title>Bigcoder-dashboard-ui-kit</title>
        <script src="https://kit.fontawesome.com/e4530581f4.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js" 
        integrity="sha512-G2IkXzO4sCVjzajm/Tb9kDY7UIh3/OdHvQFJAZto6lEKklMKgxlce6P0ZHna6+a2Gmf/MZImqTURzc8F3UU8MQ==" 
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body class="bg-gray-100 py-3 px-5 md:px-10 lg:px-20 xl:px-56 overflow-x-hidden">
        <div class="container">
            <x-header />


            <main class="">
                {{-- Cards --}}
                <div class="mb-28">
                    <h1 id="cards" class="font-bold text-3xl leading-none">Cards</h1>
                    <x-cards-grid />
                </div>

                {{-- Widgets --}}
                <div class="mb-28">
                    <h1 id="widgets" class="font-bold text-3xl leading-none">Widgets</h1>
                    <x-widgets.widget />
                </div>

                {{-- Grids --}}
                <div class="mb-28">
                    <h1 id="grids" class="font-bold text-3xl leading-none">Grids</h1>
                    <x-grids.grids />
                </div>

                {{-- Icons --}}
                <div class="mb-28">
                    <h1 id="icons" class="font-bold text-3xl leading-none">Icons</h1>
                    <x-icons.icons-grid />
                </div>

                {{-- Dashboards --}}
                <div class="mb-28">
                    <h1 id="dashboards" class="font-bold text-3xl leading-none mb-10">Dashboards</h1>
                    <x-dashboard-grids />                    
                </div>

                {{-- Graphics --}}
                <div class="mb-28">
                    <h1 id="graphics" class="font-bold text-3xl leading-none">Graphics</h1>
                    <x-charts.charts-grid />
                </div>

            </div>
            <div class="fixed w-10 h-10 bg-plight z-50 right-5 rounded-full flex items-center justify-center" style="top: 93vh">
                <a href="#">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9995 15C17.7735 15 17.5465 14.924 17.3595 14.768L11.9885 10.292L6.62651 14.607C6.19751 14.954 5.56751 14.886 5.22051 14.455C4.87451 14.025 4.94251 13.396 5.37351 13.049L11.3735 8.22101C11.7435 7.92201 12.2745 7.92601 12.6405 8.23201L18.6405 13.232C19.0645 13.585 19.1215 14.216 18.7685 14.64C18.5705 14.877 18.2865 15 17.9995 15" fill="#7879F1"/>
                    </svg>                        
                </a>
            </div>
        </div>
    </body>
</html>
	