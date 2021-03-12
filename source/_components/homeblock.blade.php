<div class="flex flex-col p-5 space-y-5 bg-white rounded-lg">
    <h4 class="mb-0"><a href="{{ $post->getUrl() }}" class="text-base font-semibold text-gray-800 duration-200 transform border-b-2 border-blue-100 hover:border-blue-500">{{ $post->title }}</a></h4>
    <p class="flex-1 text-sm text-gray-500">{{ $post->description }}</p>
    <div>
        <a href="{{ $post->getUrl() }}"
            class="inline-block p-2 px-6 text-xs font-bold text-white duration-200 transform bg-blue-500 rounded-md hover:scale-105">Show
            List</a>
    </div>
</div>