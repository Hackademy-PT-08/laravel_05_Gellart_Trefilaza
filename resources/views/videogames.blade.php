<x-layout>
    <x-navbar />

    <x-hero>
        uvbiun
    </x-hero>


    <div class="container my-5 ">
        <div class="row justify-content-center ">
            @foreach ($videogames as $videogame)
                <div class="col-12 col-md-3 my-3 ">
                    <x-card id="{{ $videogame['id'] }}" name="{{ $videogame['name'] }}" route="videogames_details" />
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
