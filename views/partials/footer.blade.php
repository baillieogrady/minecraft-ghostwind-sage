<footer class="mt-6 bg-contain" style="background-color: #613720; border-top: 10px solid #48791f;">
  <div class="container max-w-6xl mx-auto flex items-center px-6 py-8">

    <div class="w-full mx-auto flex flex-wrap items-center">
      <div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
        <a class="text-gray-900 no-underline hover:text-gray-900 hover:no-underline" href="{{ site_url() }}">
         <span class="text-base text-gray-200">{{ bloginfo('name') }}</span>
        </a>
      </div>
      <div class="flex w-full pt-2 justify-center md:w-1/2 md:justify-end nav">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'list-reset flex justify-between flex-1 md:flex-none items-center']) !!}
        @endif
      </div>
    </div>
  </div>
</footer>