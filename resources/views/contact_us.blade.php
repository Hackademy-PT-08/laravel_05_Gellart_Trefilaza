<x-layout>
    <x-navbar />

    <x-hero>
        Contact
    </x-hero>

    {{-- form --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{route('contact-submit')}}" >
                    @if (session('emailError'))
                    <div class="alert alert-danger">
                        {{ session('emailError') }}
                    </div>
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">name and surname</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">text</label>
                        <textarea name="user_message" id="message" cols="30" rows="7" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-info">Contact us</button>
                </form>

            </div>
        </div>
    </div>

</x-layout>
