<div class=" bg-white p-5 rounded-xl w-full flex flex-col justify-between" style="height: 360px">
    <div class="container">
       <div class="flex justify-between items-center">
          <h1 class="font-medium text-2xl">Holy Sea</h1>
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
             <g opacity="0.2">
             <path fill-rule="evenodd" clip-rule="evenodd" d="M3 12C3 10.896 3.896 10 5 10C6.104 10 7 10.896 7 12C7 13.104 6.104 14 5 14C3.896 14 3 13.104 3 12ZM12 10C10.896 10 10 10.896 10 12C10 13.104 10.896 14 12 14C13.104 14 14 13.104 14 12C14 10.896 13.104 10 12 10ZM19 10C17.896 10 17 10.896 17 12C17 13.104 17.896 14 19 14C20.104 14 21 13.104 21 12C21 10.896 20.104 10 19 10Z" fill="black"/>
             </g>
          </svg>            
       </div>
    </div>
    <div class="my-10 flex flex-col items-center sm:flex-row">
       <div class="flex items-center mr-4">
          <span class="w-4 h-4 rounded-full bg-pdark mr-2"></span>
          <span class="text-lg">Restless</span>
       </div>
       <div class="flex items-center mr-4">
          <span class="w-4 h-4 rounded-full bg-plight mr-2"></span>
          <span class="text-lg">Awake</span>
       </div>
    </div>
    <div class=" flex-1">
        <canvas id="mywidget13" style="height: 70vh; width:60vw"></canvas>        
    </div>
 </div>
 <script>
    const ctxw13 = document.getElementById('mywidget13').getContext('2d');
        
        const dataw13 = {
            labels: [1, 2, 3,4,5,6],
            datasets: [
                {
                    pointStyle: 'line',
                    borderWidth: 10,
                    label:'Instagram',
                    borderColor:'#5574F2',
                    backgroundColor:'#DAD7FE',
                    data:[1, 2, 3, 4, 5, 6,]
                },
            ]
        }
        
        const optionsw13 = {
          responsive: true,
          legend: {
             position: 'top',
             display:false
          },
          scales: {
            yAxes: [{
               ticks: {
                  display:false
               },
               gridLines: {
                  display: false
               }
            }],
            xAxes: [{
               ticks: {
                  display:false
               },
               gridLines: {
                  display: false
               }
            }]
        }
       }
        
        const configw13 = {
            type: 'line',
            data: dataw13,
            options: optionsw13
        }
        
        const mywidget13 = new Chart(ctxw13, configw13)
 </script>