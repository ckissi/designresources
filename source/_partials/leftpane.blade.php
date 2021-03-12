<div class="relative hidden dark:bg-gray-800 md:block">
    <div class="flex flex-col sm:flex-row sm:justify-around">
        <div class="mb-10 w-80">
            <nav class="flex flex-col px-6 mt-10 space-y-1 text-sm">
                @foreach ($posts as $post)                  
                    @if($post->title != 'Design resources for Developers') 
                    <div class="flex">
                    <a class="flex items-center p-1 border-b-2  border-blue-50 @if($post->title == $page->title) border-blue-500 @else  @endif transition-colors duration-200 hover:border-blue-500"
                    href="{{ $post->getPath() }}">                        
                            {{ $post->title }}                        
                    </a>
                    </div>
                    @endif
                @endforeach
            </nav>
        </div>
    </div>
</div>