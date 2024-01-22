@extends("layouts.app")


@section("content")

<div class="bg-black max-w-full h-screen flex flex-col items-center p-4">
    <h1 class="text-white font-black text-4xl tracking-tighter">URL Shortener</h1>
    <p class="text-white text-sm">Just shorten that URL with ease.</p>
    <form class="flex-col flex w-[500px] items-center" method="POST" action="/add-url">
        @csrf
        <input class="outline-none h-[48px] border border-color-white bg-transparent p-4 w-[250px] text-white mt-8 rounded-md" type="text" name="url" placeholder="Enter your url" />
        <button class="bg-white transition-all duration-700 hover:w-[300px] text-black w-[250px] h-[45px] rounded-full mt-5">Generate</button>
    </form>


    @if($data != null)
            <h1 class="text-white font-black text-2xl tracking-tighter mt-5">Here is your short url</h1>
        <a class="text-green-600" href="/{{$data->short}}">localhost:8000/{{$data->short}}</a>
    @endif

</div>


@endsection