@extends('_layouts.main')

@php
    $page->type = 'article';
@endphp

@section('body')      
   @php 
       $links = json_decode(base64_decode($page->links));       
   @endphp   
   <h1 class="my-2 mt-10 ml-4 text-2xl font-bold">{{ $page->title }}</h1>
   <h3 class="mb-10 ml-4 text-base font-normal">{{ $page->description }}</h3>
   <div class="grid grid-cols-1 gap-4 md:p-4 md:grid-cols-2 xl:grid-cols-3">   
    @foreach ($links as $link)       
      <x-block :link="$link" :page="$page"></x-block>
    @endforeach
   </div>
@endsection