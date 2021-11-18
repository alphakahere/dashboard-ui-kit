<x-charts.chart-panel>
    <x-slot name="title">Australia</x-slot>
    <x-slot name="grid">
        <div class="flex justify-between items-center">
            <h3 class="font-normal text-lg leading-relaxed">East Herminio</h3>
            <div class="flex space-x-5 items-center">
                <div class="flex items-center space-x-1">
                    <span class="w-3 h-3 bg-pdark rounded-full"></span>
                    <span>Restless</span>
                </div>
                <div class="flex items-center space-x-1">
                    <span class="w-3 h-3 bg-plight rounded-full"></span>
                    <span>Awake</span>
                </div>
            </div>
        </div>
        <div class="mt-5 relative h-full pb-16">
            <x-charts.grid1 />    
            <div class="absolute flex justify-between w-full pr-24 items-end" style="bottom: 75px; left:85px">
                <div class=" bg-plight h-96 w-7 rounded-3xl"></div>
                <div class=" bg-plight h-80 w-7 rounded-3xl"></div>
                <div class=" bg-plight h-72 w-7 rounded-3xl"></div> 
                <div class=" bg-plight h-44 w-7 rounded-3xl" style="height: 530px"></div>
                <div class=" bg-plight h-96 w-7 rounded-3xl"></div>
                <div class=" bg-pdark w-7 rounded-3xl" style="height: 580px"></div> 
                <div class=" bg-plight  w-7 rounded-3xl" style="height: 530px"></div>
                <div class=" bg-plight h-96 w-7 rounded-3xl"></div>
                <div class=" bg-plight h-56 w-7 rounded-3xl"></div> 
                <div class=" bg-plight h-80 w-7 rounded-3xl"></div>
                <div class=" bg-plight h-64 w-7 rounded-3xl"></div>
                <div class=" bg-plight h-72 w-7 rounded-3xl"></div>                    
            </div>
        </div>
    </x-slot>
</x-charts.chart-panel>

