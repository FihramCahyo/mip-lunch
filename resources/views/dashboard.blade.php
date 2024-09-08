<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    {{-- @dd($beranda) --}}
    <div class="max-w-full mx-auto sm:px-6 lg:px-8 bg-slate-50 dark:bg-gray-900">
        <x-hero-section :beranda="$beranda" />
    </div>
</x-app-layout>
