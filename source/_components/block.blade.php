<div class="flex flex-col p-5 space-y-5 bg-white rounded-lg"> 
    <div style="background-image: linear-gradient(to bottom, rgba(6, 97, 244, 0.5), rgba(6, 97, 244, 0.3)" class="w-12 h-12 rounded-lg">
        <img src="//logo.clearbit.com/{{ parse_url($link->href)['host'] }}" alt="" class="w-12 h-12 p-1 duration-200 transform rounded-lg hover:scale-110"  onerror="this.style.display='none'"/>    
    </div>
    <h4 class="mb-0 text-base font-semibold text-gray-800"><a href="{{ $link->href }}" class="duration-200 transform border-b-2 border-blue-50 hover:border-blue-500">{{ $link->text }}</a></h4>    
    <p class="flex-1 text-sm text-gray-500">{{ preg_replace('/[\x00-\x1F\x7F]/u', '', strip_tags($link->descr)) }}</p>
    <div>
        <a href="{{ $link->href }}" class="inline-block p-2 px-6 text-xs font-bold text-white duration-200 transform bg-blue-600 rounded-md hover:scale-105">Visit site</a>
    </div>
</div>