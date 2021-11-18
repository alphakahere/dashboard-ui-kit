<x-charts.chart-panel>
    <x-slot name="title">Liechtenstein</x-slot>
    <x-slot name="grid">
        <div class="flex justify-between items-center">
            <h3 class="font-normal text-lg leading-relaxed">Mooreview</h3>
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
        <div class="mt-5 pb-16">
            <div class="container">
                <canvas id="myChart12" style="height: 60vh; width:60vw"></canvas>
            </div>
        </div>
    </x-slot>
</x-charts.chart-panel>
<script>
    const ctx12 = document.getElementById('myChart12').getContext('2d');
        
        const data12 = {
            labels:['03 Mar 2019','13 Nov 2019','14 Jan 2020','14 Jan 2020','14 Jan 2020','14 Jan 2020','14 Jan 2020',''],
            datasets: [
                {
                    tension:0,
                    pointStyle: 'cross',
                    borderWidth: 8,
                    label:'Deep',
                    borderColor:'#5574F2',
                    fill:false,
                    data:[100, 200, 300, 500, 600,750, 900, 1100]
                },
                {
                    tension:0,
                    pointStyle: 'cross',
                    borderWidth: 1,
                    label:'Deep',
                    borderColor:'#DAD7FE',
                    backgroundColor:'#DAD7FE',
                    data:[100, 200, 300, 500, 600,750, 900, 1100]
                },
            ]
        }
        
        const config12 = {
            type: 'line',
            data: data12,
            options: {
                fill:false,
            },
        }
        
        const myChart12 = new Chart(ctx12, config12)
</script>

