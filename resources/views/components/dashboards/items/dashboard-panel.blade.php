<div class="mb-3 flex border rounded-xl dpanel">
    {{-- Menu --}}
    <x-menu />
    <div class="w-full px-10 py-4">
       <div class="container h-full">
            {{-- Top-bar --}}
            <x-top-bar />
            <div class="mt-10 h-full">
                {{$slot}}
            </div>
       </div>
    </div>
 </div>