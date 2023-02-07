<x-app-layout>
    <div class="py-12" style="display: flex; justify-content: center;">
        <div class="min-w-7xl mx-auto sm:px-6 lg:px-8" style="min-width: 1000px;">
            <h2 class="font-semibold text-gray-800 leading-tight" style="font-size: 3rem">
                {{ __('Articles') }}
            </h2>
            @foreach($articles as $article)
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" style="display: flex; flex-direction: row; justify-content: space-between;">
                    <div>
                        <button onClick="location.href='{{ route('toTheArticle', ['id' => $article->id]) }}'" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" style="margin-bottom: 8px;">
                            {{ $article->title }}
                        </button>
                        <div>Author: {{ $article->author }}</div>
                        <div>Category: {{ $article->category }}</div>
                    </div>
                    <div style="display: flex; flex-direction:column; gap: 5px">
                        <!-- <button method="delete" onclick="location.href='{{ route('deleteArticle') }}'" class="deleteBtn">
                            Delete
                        </button> -->
                        <form action="{{ route('deleteArticle', ['id' => $article->id]) }}" method="POST" style="color:red;">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>

                        <form action="{{ route('editArticle', ['id' => $article->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Edit</button>
                        </form>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</x-app-layout>
