@props(['name'])
<li class="group flex cursor-default select-none items-center rounded-md px-3 py-2 hover:text-white hover:bg-gray-800">
    <x-ciida::svg.db />
    <span class="ml-3 flex-auto truncate">{{ $name }}</span>
</li>