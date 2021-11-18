<div class="flex mt-12  rounded-lg">
   <x-charts.chart-menu class=""/>
   <div class="flex-1 py-4  px-8 bg-gray-50">
       <x-top-bar />
       <div class="mt-12 rounded-lg ">
            <h1 class="font-medium text-3xl leading-10 ">{{$title}}</h1>
            <div class="mt-3 bg-white w-full h-full px-5 py-6" style="height: 770px">
                {{$grid}}
            </div>
       </div>
   </div>
</div>