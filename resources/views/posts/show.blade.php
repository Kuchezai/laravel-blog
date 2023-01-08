<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$post->title}}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-3xl mx-auto mb-10">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl mt-10 min-h-full">
                    <div class="p-6 text-gray-900 text-lg">
                        <div class ="ml-2">{{$post->title}}</div>
                        <img class = 'text-sm mt-5 sm:rounded-xl' src="{{asset('/storage/' . $post->image)}}" alt="{{__('Image for post #')}}{{$post->id}}">
                        <div>{{$post->body}}</div>
                        <x-secondary-button class="mt-8" onclick="location.href='{{url()->previous()}}'">{{__('Back')}}</x-secondary-button>
                    </div>

                </div>
        </div>
    </div>
</x-app-layout>
