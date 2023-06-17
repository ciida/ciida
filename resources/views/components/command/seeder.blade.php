@props(['name'])
<li
    x-ref="palleteOption"
    class="pallete-option group"
>
    <x-ciida::svg.db />
    <span class="ml-3 flex-auto truncate">{{ $name }}</span>
</li>