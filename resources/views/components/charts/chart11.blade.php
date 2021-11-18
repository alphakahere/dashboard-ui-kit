<x-charts.chart-panel>
    <x-slot name="title">United States Minor Outlying Islands</x-slot>
    <x-slot name="grid">
        <div class="flex justify-between items-center">
            <h3 class="font-normal text-lg leading-relaxed">North Mertie</h3>
            <div class="flex space-x-5 items-center">
                <div class="flex items-center space-x-1">
                    <span class="w-3 h-3 bg-pdark rounded-full"></span>
                    <span>Restless</span>
                </div>
            </div>
        </div>
        <div class="mt-5 pb-16">
            <div class="container">
                <canvas id="myChart11" style="height: 60vh; width:60vw"></canvas>
            </div>
        </div>
    </x-slot>
</x-charts.chart-panel>
<script>
    const ctx11 = document.getElementById('myChart11').getContext('2d');
        
        const data11 = {
            labels:['1/12','2/12','3/12','4/12','5/12','6/12','7/12','8/12','9/12','10/12','11/12','12/12',''],
            datasets: [
                {
                    pointStyle: 'cross',
                    borderWidth: 4,
                    label:'Deep',
                    borderColor:'#5574F2',
                    backgroundColor:'#5574F2',
                    data:[100, 200, 210, 310, 410,407, 390, 400, 500, 600, 590, 580, 540, 500,]
                },
            ]
        }
    
        
        const config11 = {
            type: 'line',
            data: data11,
            options: {
                fill:false,
            },
        }
        
        const myChart11 = new Chart(ctx11, config11)
</script>

