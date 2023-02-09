@props(['name'])
<li class="group flex cursor-default select-none items-center rounded-md px-3 py-2">
    <x-ciida::svg.command />
    <span class="ml-3 flex-auto truncate">{{ $name }}</span>
</li>