<x-ciida::layout>
    <div class="relative z-10" role="dialog" aria-modal="true" x-data="{}">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-25 transition-opacity"></div>

        <div class="fixed inset-0 z-10 overflow-y-auto p-4 sm:p-6 md:p-20">
            <div class="mx-auto max-w-2xl transform divide-y divide-gray-500 divide-opacity-20 overflow-hidden rounded-xl bg-gray-900 shadow-2xl transition-all">
                <x-ciida::search />

                <ul class="scroll-py-2 divide-y divide-gray-500 divide-opacity-20 overflow-y-auto">
                    <li class="p-2">
                        <x-ciida::command.group name="Seeder" />
                        <ul class="text-sm text-gray-400">
                            <x-ciida::command.seeder name="DatabaseSeeder" />
                            <x-ciida::command.seeder name="UserSeeder" />
                            <x-ciida::command.seeder name="CustomerSeeder" />
                        </ul>
                    </li>
                    <li class="p-2">
                        <x-ciida::command.group name="Commands" />
                        <ul class="text-sm text-gray-400">
                            <x-ciida::command.command name="Lighthouse / LighthouseScanLink" />
                            <x-ciida::command.command name="Lighthouse / LighthouseScanHost" />
                            <x-ciida::command.command name="About" />
                            <x-ciida::command.command name="Purge old data" />
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-ciida::layout>
