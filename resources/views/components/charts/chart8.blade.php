<x-charts.chart-panel>
    <x-slot name="title">Kazakhstan</x-slot>
    <x-slot name="grid">
        <div class="flex justify-between items-center">
            <h3 class="font-normal text-lg leading-relaxed">South Skylafort</h3>
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
        <div class="mt-5 pb-16">
            <div class="container">
                <canvas id="myChart" style="height: 60vh; width:60vw"></canvas>
            </div>
        </div>
    </x-slot>
</x-charts.chart-panel>
<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    console.log(ctx);
        
        const data = {
            labels:['1/12','2/12','3/12','4/12','5/12','6/12','7/12','8/12','9/12','10/12','11/12','12/12',''],
            datasets: [
                {
                    label:'Digital',
                    borderColor:'#34B53A',
                    fill:false,
                    data:[600, 550, 610, 515, 540, 510,690, 590, 620, 590, 530,610, 500,]
                },
                {
                    label:'Deep',
                    borderColor:'#FFB200',
                    fill:false,
                    data:[490, 450, 350, 500, 470, 415,495, 560, 450, 350, 510, 400, 500]
                },
                {
                    label:'Awake',
                    borderColor:'#FF3A29',
                    fill:false,
                    data:[300, 410, 170, 590, 310,450, 170, 505, 110, 510, 300, 600, 300, 600,]
                },
                {
                    label:'Restless',
                    borderColor:'#4339F2',
                    fill:false,
                    data:[190, 350, 300, 350, 200,280, 200, 340, 190, 360, 290, 150, 100]
                },
            ]
        }
        
        
        const config = {
            type: 'line',
            data: data,
            options: {
                fill:false,
            },
        }
        
        const myChart = new Chart(ctx, config)
</script>

