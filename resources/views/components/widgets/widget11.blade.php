<div class=" bg-white p-5 rounded-xl w-full flex flex-col justify-between" style="height: 360px">
    <div class="container">
       <div class="flex justify-between items-center">
          <h1 class="font-medium text-2xl">Guinea</h1>
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
             <g opacity="0.2">
             <path fill-rule="evenodd" clip-rule="evenodd" d="M3 12C3 10.896 3.896 10 5 10C6.104 10 7 10.896 7 12C7 13.104 6.104 14 5 14C3.896 14 3 13.104 3 12ZM12 10C10.896 10 10 10.896 10 12C10 13.104 10.896 14 12 14C13.104 14 14 13.104 14 12C14 10.896 13.104 10 12 10ZM19 10C17.896 10 17 10.896 17 12C17 13.104 17.896 14 19 14C20.104 14 21 13.104 21 12C21 10.896 20.104 10 19 10Z" fill="black"/>
             </g>
          </svg>            
       </div>
    </div>
    <div class="">
        <canvas id="piechart" style="height: 70vh; width:60vw"></canvas>        
    </div>
    <div class=" flex flex-col items-center sm:flex-row">
       <div class="flex items-center mr-4">
          <span class="w-4 h-4 rounded-full bg-pdark mr-2"></span>
          <span class="text-lg">Restless</span>
       </div>
       <div class="flex items-center mr-4">
          <span class="w-4 h-4 rounded-full bg-redd mr-2"></span>
          <span class="text-lg">Awake</span>
       </div>
       <div class="flex items-center mr-4">
          <span class="w-4 h-4 rounded-full bg-cyellow mr-2"></span>
          <span class="text-lg">Deep</span>
       </div>
    </div>
 </div>

 <script>
     var chartColors = {
        acc1: '#5574F2',
        acc2: '#FFB200',
        acc3: '#FF3429',
    };

    var chartData = {
        res1: 120,
        res2: 120,
        res3: 120,
    };
      const ctxw11 = document.getElementById('piechart').getContext('2d');
      const dataw11 = {
            labels: [
                chartData.res1,
                chartData.res2,
                chartData.res3,
                chartData.res4
            ],
           datasets: [
            {
            backgroundColor: [
                chartColors.acc1,
                chartColors.acc2,
                chartColors.acc3,
            ],
            data: [
                chartData.res1,
                chartData.res2,
                chartData.res3,
            ]
        }]
    }

      const configw11 = {
        type: 'pie',
        data: dataw11,
        options: {
            responsive: true,
            legend: {
                display:false
            },
        },
    };
    const piechart = new Chart(ctxw11, configw11)
 </script>