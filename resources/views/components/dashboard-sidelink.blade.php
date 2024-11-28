<a {{ $attributes->merge([
    'class' => "flex items-center p-2 pl-11 w-full text-base font-medium rounded-lg transition duration-75 group " .
               ($active ? 'bg-gray-900 text-white dark:text-white' : 'text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700')
]) }}
aria-current="{{ $active ? 'page' : false }}">
{{ $slot }}
</a>
