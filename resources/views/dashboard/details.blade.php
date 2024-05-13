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
                    <p>User ID: {{ $video->user_id }}</p>
                    <p>User Name: {{ $video->user->name }}</p>
                    <p>Title : {{ $video->title  }}</p>
                    <p>Created At: {{ $video->created_at }}</p>
                    <p>Updated At: {{ $video->updated_at }}</p>

                    <p>Response Body: {{ $video->result }}</p>
                    @php
                        $result = json_decode($video->result, true); // Decode the JSON string
                    @endphp

                    @if($result)
                        @php
                            // Ubah label sesuai dengan kondisi
                            $label = ($result['label'] == 0) ? 'dribbling' : 'dunk';

                            // Ubah confidence ke format persen
                            $confidence = number_format($result['confidence'] * 100, 2) . '%';
                        @endphp

                        <p>Label: {{ $label }}</p>
                        <p>Confidence: {{ $confidence }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>