<div class="bg-cool-gray-700 py-10 -mt-6">
    <div class="container">
        <div class="flex items-start">
            <div class="flex-shrink-0">
                <img class="w-16 h-16 object-cover object-center rounded-full" src="{{ $user->gravatar() }}">
            </div>
            <div>
                <h1 class="font-semibold text-xl text-white">{{$user->name}}</h1>
            </div>
        </div>
    </div>
</div>