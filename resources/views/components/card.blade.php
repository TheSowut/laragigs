{{-- By using $attributes->merge we can pass styling props when using the component e.g. in listings view --}}
<div {{$attributes->merge(['class' => 'bg-gray-50 border border-gray-200 rounded p-6'])}}>
    {{ $slot }}

</div>
