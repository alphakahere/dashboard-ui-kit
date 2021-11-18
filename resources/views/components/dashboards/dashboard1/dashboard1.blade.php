<div class="mb-3 flex border rounded-xl">
   {{-- Menu --}}
   <x-menu />
   <div class="w-full px-10 py-4">
      <div class="container">
         {{-- Top-bar --}}
         <x-top-bar />
         <h1 class="mt-8 font-semibold text-2xl">Be Single mended</h1>
         {{-- Widgets --}}
         <div class="mt-5">
            {{-- cards --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
               {{-- Card 1 --}}
               <div class=" bg-white p-3 rounded-lg">
                     {{-- User    --}}
                     <div class="flex items-center mb-4">
                        <x-avatar src="{{asset('images/abdoul.jpeg')}}" />
                        <div class="flex flex-col justify-center">
                           <h1 class=" text-base font-semibold">Abdoul Khadre Diallo</h1>
                           <p class="text-sm text-gray-400">Congo</p>
                        </div>
                     </div>
                     <div class="">
                        {{-- progress bar --}}
                        <div class="flex flex-col justify-center mb-4">
                           <div class="flex items-center justify-between">
                              <h5 class=" text-lg">Instagram</h5>
                              <h5 class="text-greend  ">65,376</h5>
                           </div>
                           <div class=" bg-greenl h-2 rounded-xl">
                              <div class=" bg-greend h-2 w-1/2 rounded-xl"></div>
                           </div>
                        </div>
                         {{-- progress bar --}}
                         <div class="flex flex-col justify-center mb-4">
                           <div class="flex items-center justify-between">
                              <h5 class=" text-lg">Facebook</h5>
                              <h5 class="text-greend  ">12,376</h5>
                           </div>
                           <div class=" bg-greenl h-2 rounded-xl">
                              <div class=" bg-greend h-2 w-1/3 rounded-xl"></div>
                           </div>
                        </div>
                         {{-- progress bar --}}
                         <div class="flex flex-col justify-center ">
                           <div class="flex items-center justify-between">
                              <h5 class=" text-lg">Twitter</h5>
                              <h5 class="text-greend  ">132,745</h5>
                           </div>
                           <div class=" bg-greenl h-2 rounded-xl">
                              <div class=" bg-greend h-2 w-2/3 rounded-xl"></div>
                           </div>
                        </div>
                     </div>
               </div>            

               {{-- Card 2 --}}
               <div class=" bg-white p-3 rounded-lg">
                  {{-- User    --}}
                  <div class="flex items-center mb-4">
                     <x-avatar src="{{asset('images/sadjo.jpeg')}}" />
                     <div class="flex flex-col justify-center">
                        <h1 class=" text-base font-semibold">Sadjo Sanghare</h1>
                        <p class="text-sm text-gray-400">Egypte</p>
                     </div>
                  </div>
                  <div class="">
                     {{-- progress bar --}}
                     <div class="flex flex-col justify-center mb-4">
                        <div class="flex items-center justify-between">
                           <h5 class=" text-lg">Instagram</h5>
                           <h5 class=" text-redd">65,376</h5>
                        </div>
                        <div class=" bg-somone h-2 rounded-xl">
                           <div class=" bg-redd h-2 w-1/2 rounded-xl"></div>
                        </div>
                     </div>
                      {{-- progress bar --}}
                      <div class="flex flex-col justify-center mb-4">
                        <div class="flex items-center justify-between">
                           <h5 class=" text-lg">Facebook</h5>
                           <h5 class="text-redd  ">12,376</h5>
                        </div>
                        <div class=" bg-somone h-2 rounded-xl">
                           <div class=" bg-redd h-2 w-1/3 rounded-xl"></div>
                        </div>
                     </div>
                      {{-- progress bar --}}
                      <div class="flex flex-col justify-center ">
                        <div class="flex items-center justify-between">
                           <h5 class=" text-lg">Twitter</h5>
                           <h5 class="text-redd  ">132,745</h5>
                        </div>
                        <div class=" bg-somone h-2 rounded-xl">
                           <div class=" bg-redd h-2 w-2/3 rounded-xl"></div>
                        </div>
                     </div>
                  </div>
               </div>

               {{-- Card 3 --}}
               <div class=" bg-white p-3 rounded-lg">
                  {{-- User    --}}
                  <div class="flex items-center mb-4">
                     <x-avatar src="{{asset('images/me.jpg')}}" />
                     <div class="flex flex-col justify-center">
                        <h1 class=" text-base font-semibold">Alpha Amadou Diallo</h1>
                        <p class="text-sm text-gray-400">Canada</p>
                     </div>
                  </div>
                  <div class="">
                     {{-- progress bar --}}
                     <div class="flex flex-col justify-center mb-4">
                        <div class="flex items-center justify-between">
                           <h5 class=" text-lg">Instagram</h5>
                           <h5 class=" text-pdark">65,376</h5>
                        </div>
                        <div class=" bg-plight h-2 rounded-xl">
                           <div class=" bg-pdark h-2 w-1/2 rounded-xl"></div>
                        </div>
                     </div>
                      {{-- progress bar --}}
                      <div class="flex flex-col justify-center mb-4">
                        <div class="flex items-center justify-between">
                           <h5 class=" text-lg">Facebook</h5>
                           <h5 class="text-pdark  ">200,376</h5>
                        </div>
                        <div class=" bg-plight h-2 rounded-xl">
                           <div class=" bg-pdark h-2 w-4/5 rounded-xl"></div>
                        </div>
                     </div>
                      {{-- progress bar --}}
                      <div class="flex flex-col justify-center ">
                        <div class="flex items-center justify-between">
                           <h5 class=" text-lg">Twitter</h5>
                           <h5 class="text-pdark  ">132,745</h5>
                        </div>
                        <div class=" bg-plight h-2 rounded-xl">
                           <div class=" bg-pdark h-2 w-2/3 rounded-xl"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="mt-8 flex flex-col lg:flex-row">
               <div class="">
                  {{-- Creative outdoor ads --}}
                  <div class="flex justify-between bg-pdark px-4 py-1 text-white rounded-lg">
                     <div class="flex  items-center w-2/3">
                        <svg width="140" height="124" viewBox="0 0 140 124" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <rect x="0.0188599" y="46.7435" width="60.5104" height="60.5104" transform="rotate(-50.35 0.0188599 46.7435)" fill="#FFB200"/>
                           <path d="M79.8875 43.5315C79.8875 43.5315 75.9623 47.2761 76.824 48.2328C77.6857 49.1895 84.1959 48.2328 84.1959 48.2328C84.1959 48.2328 84.5777 49.9562 87.2594 49.8612C89.9411 49.7661 95.398 49.8612 95.398 49.8612" fill="#CCF8FE"/>
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M50.4203 44.4835L65.8611 59.1957C65.8611 59.1957 70.1696 81.6884 73.7605 86.1712C77.3514 90.6539 95.5896 104.291 95.5896 104.291L112.679 123.248L139.392 109.771L126.467 94.3763C126.467 94.3763 129.4 66.6009 127.533 61.3483C126.173 57.5261 110.154 43.5394 99.9298 33.9815C95.8932 30.211 90.3761 28.4536 84.9024 29.1947L55.3608 33.188C54.8181 33.2616 54.3742 33.6566 54.2379 34.1869C54.1015 34.7173 54.3 35.2774 54.7398 35.6036L57.9633 37.9891L84.0993 38.1791L100.12 65.7186L84.4826 65.4667C84.4826 65.4667 67.9108 36.0978 51.5497 40.1607C50.6485 40.3887 49.9427 41.089 49.7078 41.9884C49.4728 42.8878 49.7458 43.8438 50.4203 44.4835Z" fill="white"/>
                           <path d="M112.033 57.5277C112.033 57.5277 95.9556 33.8754 92.7606 31.1034C90.372 29.03 87.2594 29.03 87.2594 29.03" stroke="black" stroke-width="0.55"/>
                           <path d="M120.172 55.7727C120.172 55.7727 104.047 38.9918 97.8278 32.9377C94.9766 30.161 92.4089 29.7333 92.4089 29.7333" stroke="black" stroke-width="0.55"/>
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M126.023 49.4081L51.1695 46.0817L41.6227 40.392L52.0027 36.8866L126.432 40.1972C127.655 40.2493 128.807 40.7863 129.634 41.6895C130.461 42.5926 130.894 43.7877 130.838 45.0109C130.785 46.2332 130.247 47.3838 129.343 48.2088C128.44 49.0337 127.245 49.4653 126.023 49.4081Z" fill="black"/>
                           <path d="M69.7593 47.0606L52.1421 46.2782L50.4203 44.6387C49.747 43.998 49.4751 43.0421 49.7102 42.143C49.9454 41.2438 50.6505 40.5434 51.5512 40.3144C57.9173 38.7336 64.3104 42.2168 69.7593 47.0606Z" fill="white"/>
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M126.395 46.907C127.598 46.907 128.573 45.9318 128.573 44.729C128.573 43.5261 127.598 42.551 126.395 42.551C125.192 42.551 124.217 43.5261 124.217 44.729C124.217 45.9318 125.192 46.907 126.395 46.907Z" fill="white"/>
                           <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" d="M55.9263 33.1056C55.9263 33.1056 59.8467 37.007 62.2322 32.2534L55.9263 33.1056Z" fill="black"/>
                           <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" d="M51.7968 45.7903C51.7968 45.7903 51.1632 42.8979 55.2388 43.3398C59.3145 43.7818 59.8815 47.0369 58.4068 48.1378C57.4778 48.8001 56.3467 49.1172 55.2087 49.0343" fill="black"/>
                           <path d="M19.3787 51.0523C19.3787 51.0523 22.8254 24.6803 27.899 24.0103C32.9725 23.3402 33.4525 47.2761 35.6606 47.5152C37.8687 47.7544 41.6228 40.392 41.6228 40.392" stroke="black" stroke-width="3.0096"/>
                        </svg>
                        <div class="ml-3 flex flex-col justify-center">
                           <h1 class=" text-lg font-medium mb-2">Creative outdoor ads</h1>
                           <p class="text-sm leading-5">
                              Every large design company whether it’s a multi-national branding corporation or 
                              a regular down at heel tatty magazine publisher needs to fill holes in the workforce.
                           </p>
                        </div>
                     </div>
                     <div class=" w-1/3 flex justify-end items-end mb-3">
                        <button class="border border-white text-pdark bg-white px-6 py-2 rounded-lg hover:bg-plight transition-all ease-in duration-400">
                           See more
                        </button>
                     </div>
                  </div>
                  {{-- Social media --}}
                  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-8 mb-8 lg:mb-0">
                     {{-- item 1 --}}
                     <div class="flex justify-center flex-1">
                        <div class="bg-white py-5 px-8 rounded-xl flex flex-col items-center justify-center w-36">
                           <h1 class="mb-4 text-center">Twitter</h1>
                           <div class="rounded-full flex items-center justify-center bg-greenl w-24 h-24 border-greend border-r-8 border-t-8">
                              <span class="">65%</span>
                           </div>
                        </div>
                     </div>
                     {{-- item 2 --}}
                     <div class="flex justify-center">
                        <div class="bg-white py-5 px-8 rounded-xl flex flex-col items-center justify-center w-36">
                           <h1 class="mb-4 text-center">Instagram</h1>
                           <div class="rounded-full flex items-center justify-center bg-plight w-24 h-24 border-pdark border-r-8 border-t-8">
                              <span class="">65%</span>
                           </div>
                        </div>
                     </div>
                     {{-- item 3 --}}
                     <div class="flex justify-center">
                        <div class="bg-white py-5 px-8 rounded-xl flex flex-col items-center justify-center w-36">
                           <h1 class="mb-4 text-center">Faebook</h1>
                           <div class="rounded-full flex items-center justify-center bg-somone w-24 h-24 border-redd border-r-8 border-t-8">
                              <span class="">65%</span>
                           </div>
                        </div>
                     </div>
                     {{-- item 4 --}}
                     <div class="flex justify-center">
                        <div class="bg-white py-5 px-8 rounded-xl flex flex-col items-center justify-center w-36">
                           <h1 class="mb-4 text-center">Behance</h1>
                           <div class="rounded-full flex items-center justify-center bg-blue-100 w-24 h-24 border-cblue border-r-8">
                              <span class="">35%</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               {{-- Line Chart --}}
               <div class="ml-5 bg-white p-3 rounded-lg flex flex-col justify-center">
                  <h1 class=" text-base mb-8 opacity-60">Aussie chef shares culinary</h1>
                  <div class="flex">
                     <div class="flex flex-col justify-end">
                        <div class="w-4 bg-cyellow rounded-3xl h-52 mr-3"></div>
                        <p class=" text-xs opacity-50">01</p>
                     </div>
                     <div class="flex flex-col justify-end">
                        <div class="w-4 bg-cyellow rounded-3xl h-32 mr-3"></div>
                        <p class=" text-xs opacity-50">02</p>
                     </div>
                     <div class="flex flex-col justify-end">
                        <div class="w-4 bg-cyellow rounded-3xl h-40 mr-3"></div>
                        <p class=" text-xs opacity-50">03</p>
                     </div>
                     <div class="flex flex-col justify-end">
                        <div class="w-4 bg-cyellow rounded-3xl h-20 mr-3"></div>
                        <p class=" text-xs opacity-50">04</p>
                     </div>
                     <div class="flex flex-col justify-end">
                        <div class="w-4 bg-cyellow rounded-3xl h-28 mr-3"></div>
                        <p class=" text-xs opacity-50">05</p>
                     </div>
                     <div class="flex flex-col justify-end">
                        <div class="w-4 bg-cyellow rounded-3xl h-60 mr-3"></div>
                        <p class=" text-xs opacity-50">06</p>
                     </div>
                     <div class="flex flex-col justify-end">
                        <div class="w-4 bg-cyellow rounded-3xl h-44 mr-3"></div>
                        <p class=" text-xs opacity-50">07</p>
                     </div>
                     <div class="flex flex-col justify-end">
                        <div class="w-4 bg-cyellow rounded-3xl h-24 mr-3"></div>
                        <p class=" text-xs opacity-50">08</p>
                     </div>
                     <div class="flex flex-col justify-end">
                        <div class="w-4 bg-cyellow rounded-3xl h-44 mr-3"></div>
                        <p class=" text-xs opacity-50">09</p>
                     </div>
                     <div class="flex flex-col justify-end">
                        <div class="w-4 bg-cyellow rounded-3xl h-20 mr-3"></div>
                        <p class=" text-xs opacity-50">10</p>
                     </div>
                     <div class="flex flex-col justify-end">
                        <div class="w-4 bg-cyellow rounded-3xl h-36 mr-3"></div>
                        <p class=" text-xs opacity-50">11</p>
                     </div>
                     <div class="flex flex-col justify-end mr-3">
                        <div class="w-4 bg-cyellow rounded-3xl h-52"></div>
                        <p class=" text-xs opacity-50">12</p>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
</div>