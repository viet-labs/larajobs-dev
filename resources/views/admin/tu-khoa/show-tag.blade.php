@extends('layouts.admin')

@section('title', 'Show Tag')

@section('content')
    <div class="mt-8 max-w-[93%] mx-auto border-2 border-black">
        <div class="">
            <h2 class="p-4 text-2xl text-gray-700 font-bold text-center bg-gray-300">Chào Mừng Đến Với Trang Xem Từ Khóa.
            </h2>
        </div>

        <div class="mx-4">
            <div class="mt-8 mx-2">
                <strong class="block">Tên Hiển Thị:</strong>
                <span>{{ $tuKhoa->ten_hien_thi }}</span>
            </div>

            <div class="mt-8 mx-2">
                <strong class="block">Slug:</strong>
                <span>{{ $tuKhoa->slug }}</span>
            </div>

            <div class="my-6 flex justify-center">
                <a href="{{ route('tu-khoa.index') }}"
                class="ml-4 py-2 px-4 font-bold border-2 border-red-600 rounded bg-red-600 text-white hover:bg-white hover:text-red-600">Back</a>
            </div>

        </div>
    </div>
@endsection
