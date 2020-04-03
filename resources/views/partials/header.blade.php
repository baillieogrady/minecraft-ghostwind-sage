{{-- header --}}
<nav class="bg-gray-900 p-4 mt-0 w-full">
	<div class="container mx-auto flex items-center justify-center sm:justify-start">
		<div class="flex text-white font-extrabold">
		<a class="hidden sm:block flex text-white text-base no-underline hover:text-white hover:no-underline" href="{{ site_url() }}"> 
				<span class="w-0 md:w-auto pl-1">{{ bloginfo('name') }}</span>
			</a>
		</div>
		<div class="flex pl-4 text-sm">
			@if (has_nav_menu('primary_navigation'))
				{!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav list-reset flex justify-between flex-1 md:flex-none items-center', 'container' => false]) !!}
			@endif
		</div>
	</div>
</nav>
{{-- /header --}}