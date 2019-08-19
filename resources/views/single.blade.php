@extends('layouts.app')

@section('content')

@include('partials.page-header')
<div class='container'>
  <div class="content">
    <div class='flex'>
      <main class="main py-8 xl:w-3/4 xxl:py-12">  
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-'.get_post_type())
  @endwhile
  </main> 
    </div>
  </div>  
</div>    
@endsection
