<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Feed') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-3xl mx-auto mb-10">
            @foreach($posts as $post)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl mt-10 min-h-full">
                    <div class="p-6 text-gray-900 text-lg">
                        <a class ="ml-2" href="#">{{$post->title}}</a>
                        <img class = 'text-sm mt-5 sm:rounded-xl' src="{{asset('/storage/'.$post->image)}}" alt="Картинка к посту №{{$post->id}}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
