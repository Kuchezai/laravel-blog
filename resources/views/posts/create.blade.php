<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create post') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 mt-20">
        <form method="POST" action="{{ route('posts.store') }}" enctype ='multipart/form-data'>
            @csrf
            <div>
                <x-input-label for="title" :value="__('Title')"/>
                <x-text-input class="block mt-1 w-full" type="text" name="title" :value="old('title')"
                              required
                              autofocus/>
                <x-input-error :messages="$errors->get('title')" class="mt-2"/>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="body" :value="__('Body')"/>
                <x-text-input class="block mt-1 w-full" type="text" name="body" :value="old('body')"
                              required/>
                <x-input-error :messages="$errors->get('body')" class="mt-2"/>
            </div>

            <div class="mt-4">
                <x-input-label for="image" :value="__('Image')" />
                <x-text-input type="file" name="image" class="py-1 mt-2 border pl-2"
                              :value="old('image')" accept=".jpg, .jpeg, .png, .jfif" required/>
                    <x-input-error :messages="$errors->get('image')" class="mt-2"/>
            </div>

            <x-primary-button class="mt-4">
                {{ __('Create post') }}
            </x-primary-button>
        </form>
    </div>
</x-app-layout>
