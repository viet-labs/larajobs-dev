@php
    $isEditPage = isset($tuKhoa);
@endphp

@if (Session::has('success'))
    <div class="py-3 px-4 border-2 rounded bg-green-300 text-green-600">
        {{ Session::get('success') }}
    </div>
@endif

<form method="POST" action="{{ $submitUrl }}">
    @csrf

    @if ($isEditPage)
        {{ method_field('PUT') }}
        <input type="hidden" name="id" value="{{ $tuKhoa->id }}">
    @endif

    <div class="mt-8 mx-2">
        <label for="ten_hien_thi" class="block text-xl font-bold leading-6 text-gray-900">Tên Hiển Thị:</label>
        <div class="my-2">
            <input id="ten_hien_thi" name="ten_hien_thi" type="text" required value="{{ $tuKhoa->ten_hien_thi ?? '' }}"
                class="block w-full rounded-lg border text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-4 py-2">
        </div>
    </div>

    <div class="mt-4 mx-2">
        <label for="slug" class="block text-xl font-bold leading-6 text-gray-900">Slug:</label>
        <div class="mt-2">
            <input id="slug" name="slug" type="text" required
                value="{{ $tuKhoa->slug ?? '' }}"
                class="block w-full rounded-lg border text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-3 py-2">
        </div>
    </div>

    <div class="my-4 flex justify-center items-center">
        <button type="submit"
            class="py-2 px-4 font-bold border-2 border-blue-600 rounded bg-blue-600 text-white hover:bg-white hover:text-blue-600">{{ $isEditPage ? 'Update' : 'Create' }}</button>
        <a href="{{ route('tu-khoa.index') }}"
            class="ml-4 py-2 px-4 font-bold border-2 border-red-600 rounded bg-red-600 text-white hover:bg-white hover:text-red-600">Back</a>
    </div>
</form>


