<x-charts.chart-panel>
    <x-slot name="title">Falkland Islands (Malvinas)</x-slot>
    <x-slot name="grid">
        <div class="flex justify-between items-center">
            <h3 class="font-normal text-lg leading-relaxed">Port Adrienne</h3>
            <div class="flex space-x-5 items-center">
                <div class="flex items-center space-x-1">
                    <span class="w-3 h-3 bg-somone rounded-full"></span>
                    <span>Restless</span>
                </div>
                <div class="flex items-center space-x-1">
                    <span class="w-3 h-3 bg-plight rounded-full"></span>
                    <span>Awake</span>  
                </div>
                <div class="flex items-center space-x-1">
                    <span class="w-3 h-3 bg-ylight rounded-full"></span>
                    <span>Deep</span>
                </div>
            </div>
        </div>
        <div class="mt-5 pb-16">
            <div class="container">
                <canvas id="myChart10" style="height: 60vh; width:60vw"></canvas>
            </div>
        </div>
    </x-slot>
</x-charts.chart-panel>
<script>
    const ctx10 = document.getElementById('myChart10').getContext('2d');
        
        const data10 = {
            labels:['1/12','2/12','3/12','4/12','5/12','6/12','7/12','8/12','9/12','10/12','11/12','12/12',''],
            datasets: [
                {
                    pointStyle: 'cross',
                    borderWidth: 4,
                    label:'Deep',
                    borderColor:'#FFF5CC',
                    backgroundColor:'#FFF5CC',
                    data:[100, 200, 190, 250, 220,280, 265, 250, 240, 210, 280, 200, 350, 360,]
                },
                {
                    pointStyle: 'cross',
                    borderWidth: 4,
                    label:'Awake',
                    borderColor:'#DAD7FE',
                    backgroundColor:'#DAD7FE',
                    data:[100, 200, 300, 350, 340, 300,335, 390, 500, 600, 590, 520, 480]
                },
                {
                    pointStyle: 'cross',
                    borderWidth: 4,
                    label:'Restless',
                    borderColor:'#FFE5D3',
                    backgroundColor:'#FFE5D3',
                    data:[420, 490,550, 540, 520, 510,500, 490, 470, 400, 350,300, 200,]
                },
            ]
        }
        
        
        const config10 = {
            type: 'line',
            data: data10,
            options: {
                fill:false,
            },
        }
        
        const myChart10 = new Chart(ctx10, config10)
</script>

