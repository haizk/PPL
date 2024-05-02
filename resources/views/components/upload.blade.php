<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <h1 class="text-2xl font-medium text-gray-900">
        file upload
    </h1>

    <p class="mt-6 text-gray-500 leading-relaxed">
        supported formats: mp4, quicktime, webm, matroska
    </p>

    <form action="{{ route('dashboard.upload') }}" method="post" enctype="multipart/form-data" class="mt-6">
        @csrf
        <input type="file" name="file" class="border border-gray-300 p-2 w-full" accept="video/mp4,video/quicktime,video/webm,video/x-matroska">
        <button type="submit" class="bg-blue-500 text-white p-2 w-full mt-4">Upload</button>
    </form>

    @if ($result != '')
    <div class="mt-6">
        <h1 class="text-2xl font-medium text-gray-900">
            result
        </h1>

        <div class="mt-4">
            <p class="text-gray-500 leading-relaxed">
                {{ $result }}
            </p>
        </div>
    </div>
    @endif

</div>