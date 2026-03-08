<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">Test Page</h1>
        </div>
        <div class="grid gap-6 lg:grid-cols-2">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h2 class="text-xl font-semibold text-gray-800">Create Post</h2>

                @if (session()->has('message'))
                    <div class="mt-4 rounded-lg bg-green-50 px-4 py-3 text-sm text-green-700">
                        {{ session('message') }}
                    </div>
                @endif

                <form wire:submit="createPost" class="mt-6 space-y-4">
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input
                            id="title"
                            type="text"
                            wire:model="title"
                            required
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        >
                        @error('title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                        <textarea
                            id="content"
                            wire:model="content"
                            rows="5"
                            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        ></textarea>
                        @error('content')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-blue-800">
                        Create Post
                    </button>
                </form>
            </div>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-semibold text-gray-800">Posts</h2>
                    <span class="text-sm text-gray-500">{{ $posts->count() }} total</span>
                </div>

                <div class="mt-6 space-y-4">
                    @forelse ($posts as $post)
                        <article class="rounded-lg border border-gray-200 p-4">
                            <h3 class="text-lg font-semibold text-gray-900">{{ $post->title }}</h3>
                            <p class="mt-2 text-sm leading-6 text-gray-600">{{ $post->content }}</p>
                            <p class="mt-3 text-xs text-gray-400">{{ $post->created_at->format('M d, Y h:i A') }}</p>
                        </article>
                    @empty
                        <div class="rounded-lg border border-dashed border-gray-300 p-6 text-center text-sm text-gray-500">
                            No posts yet.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
