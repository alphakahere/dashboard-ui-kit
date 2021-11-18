<x-charts.chart-panel>
    <x-slot name="title">Niue</x-slot>
    <x-slot name="grid">
        <div class="flex justify-between items-center">
            <h3 class="font-normal text-lg leading-relaxed">Hamillmouth</h3>
            <div class="flex space-x-5 items-center">
                <div class="flex items-center space-x-1">
                    <span class="w-3 h-3 bg-redd rounded-full"></span>
                    <span>Restless</span>
                </div>
                <div class="flex items-center space-x-1">
                    <span class="w-3 h-3 bg-somone rounded-full"></span>
                    <span>Awake</span>
                </div>
            </div>
        </div>
        <div class="mt-8 relative h-full pb-20 text-gray-400">
            <x-charts.grid2 />    
            <div class="absolute flex flex-col w-full justify-between pr-28 h-full pt-20" style="bottom: 85px; left:113px">
                <div class="w-full bg-somone h-3 rounded-3xl">
                    <div class=" bg-redd w-1/2 h-3 rounded-3xl"></div>
                </div>
                <div class="w-full bg-somone h-3 rounded-3xl">
                    <div class=" bg-redd w-2/3 h-3 rounded-3xl"></div>
                </div>
                <div class="w-full bg-somone h-3 rounded-3xl">
                    <div class=" bg-redd w-1/5 h-3 rounded-3xl"></div>
                </div>
                <div class="w-full bg-somone h-3 rounded-3xl">
                    <div class=" bg-redd w-1/4 h-3 rounded-3xl"></div>
                </div>
                <div class="w-full bg-somone h-3 rounded-3xl">
                    <div class=" bg-redd w-10/12 h-3 rounded-3xl"></div>
                </div>
                <div class="w-full bg-somone h-3 rounded-3xl">
                    <div class=" bg-redd w-2/3 h-3 rounded-3xl"></div>
                </div>
                <div class="w-full bg-somone h-3 rounded-3xl">
                    <div class=" bg-redd w-7/12 h-3 rounded-3xl"></div>
                </div>
            </div>
        </div>
    </x-slot>
</x-charts.chart-panel>

