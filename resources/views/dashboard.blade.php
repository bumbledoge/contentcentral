<x-app-layout>
    <div class="py-12" style="display: flex; justify-content: center;">
        <div class="min-w-7xl mx-auto sm:px-6 lg:px-8" style="min-width: 1000px;">
            <h2 class="font-semibold text-gray-800 leading-tight" style="font-size: 3rem">
                {{ __('Articles') }}
            </h2>
            <x-article-card/>
            <x-article-card/>
            <x-article-card/>
            <x-article-card/>
        </div>
    </div>
</x-app-layout>
