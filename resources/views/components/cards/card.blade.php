<div class="border border-gray-200 bg-white rounded-lg">
    {{-- card-img --}}
    <div class="">
        <img src="https://cdn.pixabay.com/photo/2014/10/10/10/49/moss-483206_960_720.jpg" alt="card-image" class="h-40 w-full object-fill rounded-t-lg">
    </div>
    {{-- card-body --}}
    <div class="px-5 pb-5">
        {{-- card-title --}}
        <h1 class="mb-2 mt-5 font-bold text-lg">Guinea</h1>
        {{-- card-text --}}
        <p class="text-sm text-gray-500 mb-6">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique blanditiis 
            quam reiciendis perferendis aperiam! Praesentium, earum. Quas, saepe quidem ducimus est.
        </p>
        {{-- Avatars --}}
        <div class="flex items-center">
            <x-avatar src="https://media.istockphoto.com/photos/pleasant-young-indian-woman-freelancer-consult-client-via-video-call-picture-id1300972573?s=612x612"/>
            <x-avatar src="https://media.istockphoto.com/photos/headshot-portrait-of-smiling-male-employee-in-office-picture-id1309328823?s=612x612"/>
            <x-avatar src="{{asset('images/me.jpg')}}"/>
        </div>
    </div>
</div>