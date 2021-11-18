<div class=" bg-white p-5 rounded-xl w-full flex flex-col justify-between" style="height: 360px">
    <div class="container">
       <div class="flex justify-between items-center">
          <h1 class="font-medium text-2xl">Northern Mariana Islands</h1>
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
             <g opacity="0.2">
             <path fill-rule="evenodd" clip-rule="evenodd" d="M3 12C3 10.896 3.896 10 5 10C6.104 10 7 10.896 7 12C7 13.104 6.104 14 5 14C3.896 14 3 13.104 3 12ZM12 10C10.896 10 10 10.896 10 12C10 13.104 10.896 14 12 14C13.104 14 14 13.104 14 12C14 10.896 13.104 10 12 10ZM19 10C17.896 10 17 10.896 17 12C17 13.104 17.896 14 19 14C20.104 14 21 13.104 21 12C21 10.896 20.104 10 19 10Z" fill="black"/>
             </g>
          </svg>            
       </div>
    </div>
    <div class="mb-9 mt-6 flex flex-col items-center sm:flex-row flex-wrap">
      <div class="flex items-center mr-4">
         <span class="w-4 h-4 rounded-full bg-redd mr-2"></span>
         <span class="text-lg">Restless</span>
      </div>
      <div class="flex items-center mr-4">
         <span class="w-4 h-4 rounded-full bg-cyellow  mr-2"></span>
         <span class="text-lg">Awake</span>
      </div>
      <div class="flex items-center mr-4">
        <span class="w-4 h-4 rounded-full bg-greend mr-2"></span>
        <span class="text-lg">Deep</span>
     </div>
     <div class="flex items-center mr-4">
        <span class="w-4 h-4 rounded-full bg-pdark mr-2"></span>
        <span class="text-lg">Time</span>
     </div>
    </div>
    <div class=" flex-1">
        <canvas id="mywidget14" style="height: 70vh; width:60vw"></canvas>        
    </div>

 </div>
 <script>
    const ctxw14 = document.getElementById('mywidget14').getContext('2d');
        
        const dataw14 = {
            labels: [1, 2, 3,4,5,6],
            datasets: [
                {
                    borderWidth: 4,
                    tension:0,
                    label:'Digital',
                    borderColor:'#34B53A',
                    fill:false,
                    data:[100, 150, 160, 210, 300, 380]
                },
                {
                    borderWidth: 4,
                    tension:0,
                    label:'Deep',
                    borderColor:'#FFB200',
                    fill:false,
                    data:[100, 175, 215, 290, 315, 465]
                },
                {
                    borderWidth: 4,
                    tension:0,
                    label:'Awake',
                    borderColor:'#FF3A29',
                    fill:false,
                    data:[100, 190, 250, 210, 290,370]
                },
                {
                    borderWidth: 4,
                    tension:0,
                    label:'Restless',
                    borderColor:'#4339F2',
                    fill:false,
                    data:[100, 170, 170, 170, 250,200]
                },
            ]
        }
        
        const optionsw14 = {
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
        
      const configw14 = {
         type: 'line',
         data: dataw14,
         options: optionsw14
      }
        
        const mywidget14 = new Chart(ctxw14, configw14)
 </script>