<x-charts.chart-panel>
    <x-slot name="title">Saint Vincent and the Grenadines</x-slot>
    <x-slot name="grid">
        <div class="flex justify-between items-center">
            <h3 class="font-normal text-lg leading-relaxed">New Sibyl</h3>
            <div class="flex space-x-5 items-center">
                <div class="flex items-center space-x-1">
                    <span class="w-3 h-3 bg-pdark rounded-full"></span>
                    <span>Restless</span>
                </div>
                <div class="flex items-center space-x-1">
                    <span class="w-3 h-3 bg-redd rounded-full"></span>
                    <span>Awake</span>
                </div>
                <div class="flex items-center space-x-1">
                    <span class="w-3 h-3 bg-cyellow rounded-full"></span>
                    <span>Deep</span>
                </div>
                <div class="flex items-center space-x-1">
                    <span class="w-3 h-3 bg-greend rounded-full"></span>
                    <span>Digital</span>
                </div>
            </div>
        </div>
        <div class="mt-8 relative h-full pb-20 text-gray-400">
            <x-charts.grid2 />    
            <div class="absolute flex flex-col w-full justify-between pr-28 h-full pt-20" style="bottom: 85px; left:113px">
                <div class="w-full flex justify-center">
                    <div class=" bg-redd w-5/12 h-5 rounded-3xl"></div>
                </div>
                <div class="w-full flex justify-end pr-28">
                    <div class=" bg-cblue w-5/12 h-5 rounded-3xl"></div>
                </div>

                <div class="w-full pl-28">
                    <div class=" bg-cyellow w-5/12 h-5 rounded-3xl"></div>
                </div>
                <div class="w-full flex justify-end">
                    <div class=" bg-greend w-5/12 h-5 rounded-3xl"></div>
                </div>
                <div class="w-full">
                    <div class=" bg-pdark w-2/12 h-5 rounded-3xl"></div>
                </div>
                <div class="w-full flex justify-end pr-28">
                    <div class=" bg-redd w-5/12 h-5 rounded-3xl"></div>
                </div>
                <div class="w-full pl-28">
                    <div class=" bg-greend   w-5/12 h-5 rounded-3xl"></div>
                </div>

                
            </div>
        </div>
    </x-slot>
</x-charts.chart-panel>

