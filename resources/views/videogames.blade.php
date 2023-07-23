<x-layout>
    <x-navbar />

    <x-hero>
        Videogames
    </x-hero>


    <div class="container my-5 ">
        <div class="row justify-content-center ">
            @foreach ($videogames as $videogame)
                <div class="col-12 col-md-3 my-3 ">
                    {{-- <x-card>
                        id="{{ $videogame['id'] }}"
                        name="{{ $videogame['name'] }}"
                        route = "videogames_details"
                    </x-card> --}}
                    <div class="card bg-light mb-3" style="max-width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$videogame['name']}}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                content.</p>
                            <a href="{{route('videogames_details', ['id' => $videogame['id']])}}" class="btn btn-primary">more</a>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>

</x-layout>
