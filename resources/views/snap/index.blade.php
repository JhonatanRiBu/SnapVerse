<x-app>
    <x-slot name="title">SnapVerse</x-slot>
    <h3 class="pt-5 pl-3 text-2xl">Cards found: <b>{{$characters['total']}}</b></h3>
    <div class=" flex flex-wrap gap-y-2 gap-x-5 px-5 py-5 justify-center">
        @foreach ($characters['data'] as $character)
        <div>
        <x-card>
            <x-slot name="serie">{{$character['source_slug']}}'</x-slot>
            <x-slot name="url">{{$character['art']}}</x-slot>
            <x-slot name="cardName">{{$character['name']}}</x-slot>
            <x-slot name="cardDescription">{{$character['flavor']}} ? {{$character['flavor']}} : {{$character['ability']}} </x-slot>
        </x-card>
        </div>
        @endforeach
    </div>
</x-app>

<!--https://marvelsnapzone.com/wp-content/themes/blocksy-child/assets/media/cards/abomination.webp?v=116 -->



