<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-medium text-gray-900">
                        history
                    </h1>
                    @foreach($videos as $video)
                    <div class="mt-4">
                        <h2 class="text-xl font-medium text-gray-900">{{ $video->title }}</h2>
                        <p class="text-gray-500 leading-relaxed">{{ $video->created_at->timezone('Etc/GMT-7') }}</p>
                        <video class="mt-4 w-full" controls>
                            <source src="{{ asset('storage/' . $video->path) }}">
                            Your browser does not support the video tag.
                        </video>
                        <p class="mt-4 text-gray-500 leading-relaxed">{{ $video->path }}</p>
                        <p class="mt-4 text-gray-500 leading-relaxed">{{ $video->result }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>