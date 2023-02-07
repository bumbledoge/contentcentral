<x-app-layout>
    <div class="py-12" style="display: flex; justify-content: center;">
        <div class="min-w-7xl mx-auto sm:px-6 lg:px-8" style="min-width: 1000px;">
            <h2 class="font-semibold text-gray-800 leading-tight" style="font-size: 3rem">
                {{ __('Articles') }}
            </h2>
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                    <!-- <x-slot name="asdf">
                        Default body content
                    </x-slot> -->
                    body content
                </button>
            </div>

        </div>
    </div>
</x-app-layout>
