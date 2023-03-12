<x-app-layout>
    <div class="container mx-auto">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-8">
                <img src="/storage/{{$post->image}}" class="w-full" alt="">
            </div>
            <div class="col-span-4">
                <div class="flex items-center">
                    <div class="pr-3">
                        <img src="{{$post->user->profile->profileImage()}}" alt="" class="rounded-full w-full"
                             style="max-width: 40px">
                    </div>
                    <div>
                        <a href="/profile/{{$post->user->id}}">
                            <h5 class="font-semibold">{{$post->user->username}}</h5>
                        </a>
                    </div>
                    <a href="" class="pl-3 text-cyan-500 font-semibold">Follow</a>
                </div>
                <hr class="border-t-2 border-gray-800 my-3">
                <p>
                    <a href="/profile/{{$post->user->id}}">
                        <span class="font-semibold">{{$post->user->username}}</span>
                    </a>
                    {{$post->caption}}
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
