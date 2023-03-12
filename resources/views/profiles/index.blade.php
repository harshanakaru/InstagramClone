<x-app-layout>
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-12">
            <div class="col-span-3 p-5">
                <img src="{{$user->profile->profileImage()}}" style="width:150px" class="mx-auto rounded-full w-full" alt="">
            </div>
            <div class="col-span-9 pt-5">
                <div class="flex justify-between items-baseline">
                    <h1 class="text-2xl">{{ $user->username}}</h1>

                    @can('update', $user->profile)
                    <a href="/p/create/">Add New Post</a>
                    @endcan
                </div>

                @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
                @endcan

                <div class="flex">
                    <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                    <div class="pr-5"><strong>23k</strong> followers</div>
                    <div class="pr-5"><strong>212</strong> following</div>
                </div>

                <div class="pt-5"><strong>{{$user->profile->title}}</strong></div>
                <div>{{$user->profile->description}}</div>
                <a href="#">{{$user->profile->url}}</a>
            </div>
        </div>

        <div class="grid grid-cols-3 gap-5 pt-5">
            @foreach($user->posts as $post)
                <div>
                    <a href="/p/{{$post->id}}">
                        <img src="/storage/{{$post->image}}" class="w-full" alt="">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
