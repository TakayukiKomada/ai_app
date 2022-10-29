<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div>
                <form action="{{ route('posts.index') }}" method="GET">
                    <input type="text" name="keyword" value="{{ $keyword }}" placeholder="こちらに検索したい画像のワードを入れてください"
                    class="shadow appearance-none border-red-500 border rounded w-full py-2 px-3 text-gray-700 mb-5 leading-tight focus:outline-none focus:shadow-outline">
                    <input type="submit" value="検索" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">
                </form>
            </div>
        </h2>
    </x-slot>
    <div class="container max-w-7xl mx-auto px-4 md:px-12 pb-3 mt-3">

        <x-flash-message :message="session('notice')" />

        <div class="flex flex-wrap -mx-1 lg:-mx-4 mb-4">
            @foreach ($posts as $post)
                <article class="w-full px-4 md:w-1/2 text-xl text-gray-800 leading-normal">
                    <a href="{{ route('posts.show', $post) }}">
                        <img class="w-full mb-2" src="{{ $post->image_url }}" alt="">
                    </a>
                </article>
            @endforeach
        </div>
        {{ $posts->appends(request()->query())->links() }}
    </div>
    <x-slot name="footer">
        <h2 class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">
            ©️ koma company
        </h2>
    </x-slot>
</x-app-layout>
