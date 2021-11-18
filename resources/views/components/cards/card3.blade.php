<div class="border border-gray-200 bg-white rounded-lg py-4 px-5">
    {{-- etiquettes --}}
    <div class=" flex items-center mb-4">
        <div class=" bg-purple-200 px-3 py-sm rounded-md mr-3">
            <span class="text-xs font-bold">Lost</span>
        </div>
        <div class=" bg-somone px-3 py-sm rounded-md mr-3">
            <span class="text-xs font-bold">Designer</span>
        </div>
        <div class=" bg-greenl px-3 py-sm rounded-md mr-3">
            <span class="text-xs font-bold">Hubble</span>
        </div>
    </div>
   {{-- card-header --}}
   <div class=" flex justify-between">
       <div class="flex items-center">
           <div class="flex items-center">
                <x-avatar src="{{asset('images/me.jpg')}}"/>
           </div>
           <div class="flex flex-col justify-center">
                <h1 class=" text-sm font-semibold">Alpha Diallo</h1>
                <p class="text-sm text-gray-500 font-medium">Conakry</p>
           </div>
       </div>
       <div class=" flex">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M18 19H6C5.449 19 5 18.552 5 18V13H7V16C7 16.553 7.448 17 8 17H16C16.552 17 17 16.553 17 16V13H19V18C19 18.552 18.551 19 18 19ZM8.342 5.553C8.512 5.212 8.855 5 9.236 5H14.764C15.145 5 15.488 5.212 15.658 5.553L18.382 11H16C15.448 11 15 11.447 15 12V15H9V12C9 11.447 8.552 11 8 11H5.618L8.342 5.553ZM20.789 11.342L17.447 4.658C16.936 3.636 15.908 3 14.764 3H9.236C8.092 3 7.064 3.636 6.553 4.658L3.211 11.342C3.073 11.618 3 11.928 3 12.236V18C3 19.654 4.346 21 6 21H18C19.654 21 21 19.654 21 18V12.236C21 11.928 20.927 11.618 20.789 11.342Z" fill="black"/>
            </svg>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 16C10 16.55 9.55 17 9 17C8.45 17 8 16.55 8 16V12C8 11.45 8.45 11 9 11C9.55 11 10 11.45 10 12V16ZM16 16C16 16.55 15.55 17 15 17C14.45 17 14 16.55 14 16V12C14 11.45 14.45 11 15 11C15.55 11 16 11.45 16 12V16ZM18 19C18 19.551 17.552 20 17 20H7C6.448 20 6 19.551 6 19V8H18V19ZM10 4.328C10 4.173 10.214 4 10.5 4H13.5C13.786 4 14 4.173 14 4.328V6H10V4.328ZM21 6H20H16V4.328C16 3.044 14.879 2 13.5 2H10.5C9.121 2 8 3.044 8 4.328V6H4H3C2.45 6 2 6.45 2 7C2 7.55 2.45 8 3 8H4V19C4 20.654 5.346 22 7 22H17C18.654 22 20 20.654 20 19V8H21C21.55 8 22 7.55 22 7C22 6.45 21.55 6 21 6Z" fill="black"/>
            </svg>
                
       </div>
   </div>
    {{-- card-body --}}
    <div class="">
        {{-- card-title --}}
        <h1 class="mt-2 font-semibold text-lg">Guinea</h1>
        {{-- card-text --}}
        <p class="text-xs text-gray-500 mb-4">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique blanditiis 
            quam reiciendis perferendis aperiam! Praesentium, earum. Quas, saepe quidem ducimus est.
        </p>
        <div class="flex items-center">
           <button class=" bg-purpleprimary text-white px-3 py-1 text-sm hover:bg-pdark rounded-lg">Published</button>
           <a href="#" class="flex items-center">
               <span class="text-sm ml-5 mr-1 leading-3 text-purpleprimary">Watch Store</span>
               <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M19 18V12C19 11.448 19.447 11 20 11C20.553 11 21 11.448 21 12V18C21 19.654 19.654 21 18 21H6C4.346 21 3 19.654 3 18V6C3 4.346 4.346 3 6 3H12C12.553 3 13 3.448 13 4C13 4.552 12.553 5 12 5H6C5.448 5 5 5.449 5 6V18C5 18.551 5.448 19 6 19H18C18.552 19 19 18.551 19 18ZM17.5781 5.008L15.9951 5C15.4421 4.997 14.9971 4.547 15.0001 3.995C15.0031 3.444 15.4501 3 16.0001 3H16.0051L20.0021 3.02C20.5521 3.023 20.9971 3.469 20.9971 4.019L21.0001 7.999C21.0001 8.552 20.5531 9 20.0011 9H20.0001C19.4481 9 19.0001 8.553 19.0001 8.001L18.9991 6.415L12.7071 12.707C12.5121 12.902 12.2561 13 12.0001 13C11.7441 13 11.4881 12.902 11.2931 12.707C10.9021 12.316 10.9021 11.684 11.2931 11.293L17.5781 5.008Z" fill="black"/>
                </svg>                
           </a>
        </div>
    </div>
</div>