<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-medium text-gray-900">
                        details
                    </h1>
                    <p class="mt-6 text-gray-500 leading-relaxed">
                        supported formats: mp4, quicktime, webm, matroska
                        {{ $video }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>