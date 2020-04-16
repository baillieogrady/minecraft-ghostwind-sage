@extends('layouts.app')

@section('content')
  @php do_action('get_header') @endphp
  @include('partials.header')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-'.get_post_type())
  @endwhile
@endsection
