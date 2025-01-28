@props(['customClass' => ''])
<div {{ $attributes->merge(['class' => 'alert alert-' . $customClass ]) }} role="alert">
    <a href="#" class="alert-link">{{ $msj }}</a>
</div>