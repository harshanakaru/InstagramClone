<x-app-layout>
    <div class="max-w-xl mx-auto">

        <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <h1 class="text-3xl mb-4 mt-4">Edit Profile</h1>

            <!-- Caption -->
            <div>
                <x-input-label for="title" :value="__('Title')"/>
                <x-text-input id="title" class="block mt-1 w-full"
                              type="text" name="title"
                              :value="old('title') ?? $user->profile->title"
                              autofocus autocomplete="title"/>
                <x-input-error :messages="$errors->get('title')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="description" :value="__('Description')"/>
                <x-text-input id="description" class="block mt-1 w-full"
                              type="text" name="description"
                              :value="old('description')?? $user->profile->description"
                              autofocus autocomplete="description"/>
                <x-input-error :messages="$errors->get('description')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="url" :value="__('URL')"/>
                <x-text-input id="url" class="block mt-1 w-full"
                              type="text" name="url"
                              :value="old('url')??$user->profile->url"
                              autofocus autocomplete="url"/>
                <x-input-error :messages="$errors->get('url')" class="mt-2"/>
            </div>

            <!-- Image -->
            <div class="mt-4">
                <x-input-label for="image" :value="__('Profile Image')"/>
                <input type="file" id="image" name="image">
                <x-input-error :messages="$errors->get('image')" class="mt-2"/>
            </div>

            <x-primary-button class="mt-4">
                {{ __('Save Profile') }}
            </x-primary-button>
        </form>
    </div>
</x-app-layout>
