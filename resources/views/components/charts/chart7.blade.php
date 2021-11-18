<x-charts.chart-panel>
    <x-slot name="title">Ireland    </x-slot>
    <x-slot name="grid">
        <div class="flex justify-between items-center">
            <h3 class="font-normal text-lg leading-relaxed">North Victor</h3>
            <div class="flex space-x-5 items-center">
                <div class="flex items-center space-x-1">
                    <span class="w-3 h-3 bg-pdark rounded-full"></span>
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
                <div class="w-full flex space-x-3 mt-3">
                    <div class=" bg-pdark w-4/12 h-3 rounded-3xl"></div>
                    <div class=" bg-cblue w-4/12 h-3 rounded-3xl"></div>
                    <div class=" bg-greend w-1/12 h-3 rounded-3xl"></div>
                </div>
                <div class="w-full flex space-x-3">
                    <div class=" bg-pdark w-44 h-3 rounded-3xl"></div>
                    <div class=" bg-cblue w-44 h-3 rounded-3xl"></div>
                    <div class=" bg-greend w-7/12 h-3 rounded-3xl"></div>
                </div>
                <div class="w-full flex space-x-3">
                    <div class=" bg-pdark w-1/12 h-3 rounded-3xl"></div>
                    <div class=" bg-cblue w-48 h-3 rounded-3xl"></div>
                    <div class=" bg-greend w-48 h-3 rounded-3xl"></div>
                </div>
                <div class="w-full flex space-x-3">
                    <div class=" bg-pdark w-96 h-3 rounded-3xl"></div>
                    <div class=" bg-cblue w-20 h-3 rounded-3xl"></div>
                    <div class=" bg-greend w-56 h-3 rounded-3xl"></div>
                </div>
                <div class="w-full flex space-x-3">
                    <div class=" bg-pdark w-7/12 h-3 rounded-3xl"></div>
                    <div class=" bg-cblue w-44 h-3 rounded-3xl"></div>
                    <div class=" bg-greend w-44 h-3 rounded-3xl"></div>
                </div>
                <div class="w-full flex space-x-3">
                    <div class=" bg-pdark w-4/12 h-3 rounded-3xl"></div>
                    <div class=" bg-cblue w-4/12 h-3 rounded-3xl"></div>
                    <div class=" bg-greend w-1/12 h-3 rounded-3xl"></div>
                </div>
                <div class="w-full flex space-x-3">
                    <div class=" bg-pdark w-4/12 h-3 rounded-3xl"></div>
                    <div class=" bg-cblue w-4/12 h-3 rounded-3xl"></div>
                    <div class=" bg-greend w-1/12 h-3 rounded-3xl"></div>
                </div>      
            </div>
        </div>
    </x-slot>
</x-charts.chart-panel>

