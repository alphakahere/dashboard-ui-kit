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
    {{-- card-img --}}
    {{$slot}}
    {{-- card-body --}}
    <div class="">
        {{-- card-title --}}
        <h1 class="mb-1 mt-2 font-bold text-lg">{{ $title ?? 'Titre'}}</h1>
        {{-- card-text --}}
        <p class="text-sm text-gray-500 mb-4">
            {{ $body ?? 'le corps'}}
        </p>
        <p>
            <a href="#" class=" text-purpleprimary">Details</a>
        </p>
    </div>
</div>