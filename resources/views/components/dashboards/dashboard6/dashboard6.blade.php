<x-dashboard-panel>
    <div class="flex mb-8 items-center">
        <div class="flex space-x-5 items-center">
            <button class="w-24 h-11 border border-1 bg-redd border-redd rounded text-white transition-all ease-in duration-500 hover:bg-white hover:text-redd">
                Mouth
            </button>
            <button class="w-24 h-11 border border-1 bg-somone border-somone rounded text-redd transition-all ease-in duration-500 hover:bg-redd hover:text-somone">Week</button>
        </div>
        <div class="flex flex-1 justify-center items-center font-medium text-lg space-x-2">
            <x-icons.arrow-left />
            <span class="">Today</span>
            <x-icons.arrow-right />
        </div>
    </div>
    {{-- Days --}}
    <div class=" grid grid-cols-7 text-lg h-full pb-44">
        <div class="border-l-2 border-r-2 border-black h-full flex flex-col items-center px-1 font-medium">
            <h6>3</h6>
            <h6>Monday</h6>
            <div class="bg-white h-44 w-full rounded-lg mt-80 text-cblue p-2">
                <h6>13:30</h6>
                <h6 class=" text-base">Usually the astronomy</h6>
            </div>
        </div>
        <div class="border-r border-black h-full flex flex-col items-center px-1 font-medium">
            <h6>4</h6>
            <h6>Tuesday</h6>
            <div class="bg-white h-28 w-full rounded-lg mt-10 text-cblue p-2">
                <h6>11:00</h6>
                <h6 class=" text-base">Usually the astronomy</h6>
            </div>
            <div class="bg-white h-44 w-full rounded-lg mt-3 text-greend p-2">
                <h6>13:30</h6>
                <h6 class=" text-base">Usually the astronomy</h6>
            </div>
        </div>
        <div class="border-r border-black h-full flex flex-col items-center text-pdark font-medium px-1">
            <h6>5</h6>
            <h6>Wednesday</h6>
            <div class="bg-white h-32 w-full rounded-lg mt-60 text-cyellow p-2">
                <h6>11:00</h6>
                <h6 class=" text-base">Usually the astronomy</h6>
            </div>
            <div class="bg-white h-56 w-full rounded-lg mt-3 text-pdark p-2">
                <h6>13:30</h6>
                <h6 class=" text-base">Usually the astronomy</h6>
            </div>
        </div>
        <div class="border-r border-black h-full flex flex-col items-center px-1 font-medium">
            <h6>6</h6>
            <h6>Thursday</h6>
            <div class="bg-white h-28 w-full rounded-lg mt-24 text-cyellow p-2">
                <h6>11:00</h6>
                <h6 class=" text-base">Usually the astronomy</h6>
            </div>
            <div class="bg-white h-36 w-full rounded-lg mt-3 text-greend p-2">
                <h6>13:30</h6>
                <h6 class=" text-base">Usually the astronomy</h6>
            </div>
        </div>
        <div class="border-r border-black h-full flex flex-col items-center px-1 justify-between font-medium">
            <div class="">
                <h6>7</h6>
                <h6>Friday</h6>
            </div>           
            <div class="bg-white h-80 w-full rounded-lg text-cblue p-2">
                <h6>11:00</h6>
                <h6 class=" text-base">Usually the astronomy</h6>
            </div>
        </div>
        <div class="border-r border-black h-full flex flex-col items-center px-1 justify-between font-medium">
            <div class="">
                <h6>8</h6>
                <h6>Saturday</h6>
            </div>           
            <div class="bg-white h-2/3 w-full rounded-lg text-cyellow p-2">
                <h6>11:00</h6>
                <h6 class=" text-base">Usually the astronomy</h6>
            </div>
        </div>
        <div class="border-r border-black h-full flex flex-col items-center px-1 font-medium">
            <h6>9</h6>
            <h6>Sunday</h6>          
            <div class="bg-white h-80 w-full rounded-lg text-pdark p-2 mt-10">
                <h6>11:00</h6>
                <h6 class=" text-base">Usually the astronomy</h6>
            </div>
        </div>
    </div>
</x-dashboard-panel>