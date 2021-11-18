<x-charts.chart-panel>
    <x-slot name="title">Turks and Caicos Islands</x-slot>
    <x-slot name="grid">
        <div class="flex justify-between items-center">
            <h3 class="font-normal text-lg leading-relaxed">Lake Orie</h3>
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
                <canvas id="Chart9" style="height: 60vh; width:60vw"></canvas>
            </div>
        </div>
    </x-slot>
</x-charts.chart-panel>
<script>
    const ctx9 = document.getElementById('Chart9').getContext('2d');
        const data9 = {
            labels:['1/12','2/12','3/12','4/12','5/12','6/12','7/12','8/12','9/12','10/12','11/12','12/12',''],
            datasets: [
                {
                    borderWidth: 4,
                    tension:0,
                    label:'Digital',
                    borderColor:'#34B53A',
                    fill:false,
                    data:[100, 150, 160, 210, 300, 380,400, 310, 250, 350, 460,590, 700,]
                },
                {
                    borderWidth: 4,
                    tension:0,
                    label:'Deep',
                    borderColor:'#FFB200',
                    fill:false,
                    data:[100, 175, 215, 290, 315, 465,473, 497, 470, 400, 508, 560, 700]
                },
                {
                    borderWidth: 4,
                    tension:0,
                    label:'Awake',
                    borderColor:'#FF3A29',
                    fill:false,
                    data:[100, 190, 250, 210, 290,370, 440, 430, 400, 410, 415, 420, 430, 500,]
                },
                {
                    borderWidth: 4,
                    tension:0,
                    label:'Restless',
                    borderColor:'#4339F2',
                    fill:false,
                    data:[100, 170, 170, 170, 250,200, 400, 380, 310, 400, 510, 490, 600]
                },
            ]
        }

        
        const config9 = {
            type: 'line',
            data: data9,
            options: {
                fill:false,
            },
        }
        
        const Chart9 = new Chart(ctx9, config9)
</script>

