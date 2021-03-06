<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')
<body @php body_class("bg-gray-200 font-sans leading-normal tracking-normal") @endphp>
  <div class="wrapper" role="document">
    {{-- @php do_action('get_header') @endphp --}}
    {{-- @include('partials.header') --}}
    <main class="main">
      @yield('content')
    </main>
    {{-- @if (App\display_sidebar())
      <aside class="sidebar">
        @include('partials.sidebar')
      </aside>
      @endif --}}
      @php do_action('get_footer') @endphp
      @include('partials.footer')
      @php wp_footer() @endphp
    </div>
  </body>
  </html>
  