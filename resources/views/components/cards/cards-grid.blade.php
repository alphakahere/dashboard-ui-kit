<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">
    <div class="">
        <x-card/>
    </div>
    <div class="">
        <x-card2>
            <x-slot name="title">
                Senegal
            </x-slot>
            <x-slot name="body">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique blanditiis 
                quam reiciendis perferendis aperiam! Praesentium, earum. Quas, saepe quidem ducimus est.
            </x-slot>
            <div class="">
                <img src="https://cdn.pixabay.com/photo/2018/02/07/18/30/people-3137672__340.jpg" alt="card-image" 
                class="h-32 w-full object-cover rounded-t-lg"
                >
            </div>
        </x-card2>
    </div>
    <div class="">
        <x-card3/>
    </div>
    <div class="">
        <x-card2>
            <x-slot name="title">
                Cologne
            </x-slot>
            <x-slot name="body">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique blanditiis 
                quam reiciendis perferendis aperiam! Praesentium, earum. Quas, saepe quidem ducimus est.
            </x-slot>
        </x-card2>
    </div>
    <div class="">
        <x-card4 />
    </div>
</div>