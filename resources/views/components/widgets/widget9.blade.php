<div class=" bg-white p-5 rounded-xl w-full">
    <div class="flex justify-between items-center">
        <h1 class="font-medium text-xl">Apple</h1>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.2">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M3 12C3 10.896 3.896 10 5 10C6.104 10 7 10.896 7 12C7 13.104 6.104 14 5 14C3.896 14 3 13.104 3 12ZM12 10C10.896 10 10 10.896 10 12C10 13.104 10.896 14 12 14C13.104 14 14 13.104 14 12C14 10.896 13.104 10 12 10ZM19 10C17.896 10 17 10.896 17 12C17 13.104 17.896 14 19 14C20.104 14 21 13.104 21 12C21 10.896 20.104 10 19 10Z" fill="black"/>
            </g>
        </svg>            
    </div>
    <div class="flex flex-col md:flex-row items-start my-2">
        <div class="flex items-center mr-4">
            <span class="w-3 h-3 rounded-full bg-cyellow mr-2"></span>
            <span class="font-medium">Instagram</span>
        </div>
        <div class="flex items-center mr-4">
            <span class="w-3 h-3 rounded-full bg-pdark mr-2"></span>
            <span class="font-medium">Facebook</span>
        </div>
        <div class="flex items-center  mr-4">
            <span class="w-3 h-3 rounded-full bg-greend mr-2"></span>
            <span class="font-medium">Twitter</span>
        </div>
    </div>
    <div class="mt-3">
      <div class="container">
         <canvas id="mywidget9" class="cw9"></canvas>
     </div>
    </div>
</div>
<script>
   const ctxw9 = document.getElementById('mywidget9').getContext('2d');
       
       const dataw9 = {
           labels:['1/12','2/12','3/12','4/12','5/12','6/12','7/12','8/12','9/12','10/12','11/12','12/12',''],
           datasets: [
               {
                   pointStyle: 'line',
                   borderWidth: 4,
                   label:'Instagram',
                   borderColor:'#FFB200',
                   backgroundColor:'#FFB200',
                   data:[100, 200, 190, 250, 220,280, 265, 250, 240, 210, 280, 200, 350, 360,]
               },
               {
                   pointStyle: 'line',
                   borderWidth: 4,
                   label:'Twitter',
                   borderColor:'#34B53A',
                   backgroundColor:'#34B53A',
                   data:[100, 200, 300, 350, 340, 300,335, 390, 500, 600, 590, 520, 480]
               },
               {
                  pointStyle: 'line',
                  borderWidth: 4,
                  label:'Facebook',
                  borderColor:'#5574F2',
                  backgroundColor:'#5574F2',
                  data:[420, 490,550, 540, 520, 510,500, 490, 470, 400, 350,300, 200,]
               },
           ]
       }
       
       const optionsw9 = {
         responsive: true,
         legend: {
            position: 'top',
            display:false
         }
      }
       
       const configw9 = {
           type: 'line',
           data: dataw9,
           options: optionsw9
       }
       
       const mywidget9 = new Chart(ctxw9, configw9)
</script>