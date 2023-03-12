<x-app-layout>
    <div class="max-w-xl mx-auto">

        <form action="{{route('post.store')}}" enctype="multipart/form-data" method="post">
            @csrf
            <h1 class="text-3xl mb-4 mt-4">Add New Post</h1>

            <!-- Caption -->
            <div>
                <x-input-label for="caption" :value="__('Post Caption')" />
                <x-text-input id="caption" class="block mt-1 w-full"
                              type="text" name="caption"
                              :value="old('caption')"
                              autofocus autocomplete="caption" />
                <x-input-error :messages="$errors->get('caption')" class="mt-2" />
            </div>

            <!-- Image -->
            <div class="mt-4">
                <x-input-label for="image" :value="__('Post Image')" />
                <input type="file" id="image" name="image">
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>

            <x-primary-button class="mt-4">
                {{ __('Create Post') }}
            </x-primary-button>
        </form>
    </div>
</x-app-layout>
