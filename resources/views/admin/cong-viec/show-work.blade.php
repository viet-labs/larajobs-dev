@extends('layouts.admin')

@section('title', 'Show Work')

@section('content')
    <div class="mt-8 max-w-[93%] mx-auto border-2 border-black">
        <div class="">
            <h2 class="p-4 text-2xl text-gray-700 font-bold text-center bg-gray-300">Chào Mừng Đến Với Trang Xem Bài Viết.
            </h2>
        </div>

        <div class="mx-4">
            <div class="mt-8 mx-2">
                <strong class="block">Tiêu Đề:</strong>
                <span>{{ $congViec->tieu_de }}</span>
            </div>

            <div class="mt-8 mx-2">
                <strong class="block">Hình Thức Làm Việc:</strong>
                <span class="capitalize">{{ $congViec->hinh_thuc_lam_viec }}</span>
            </div>

            <div class="mt-8 mx-2">
                <strong class="block">Loại Công Việc:</strong>
                <span class="capitalize">{{ $congViec->loai_cong_viec }}</span>
            </div>

            <div class="mt-8 mx-2">
                <strong class="block">Đại Chỉ Làm Việc:</strong>
                <span>{{ $congViec->dia_chi_lam_viec }}</span>
            </div>

            <div class="mt-8 mx-2">
                <strong class="block">Mức Lương Tối Thiểu:</strong>
                <span class="after:content-['VND']">{{ number_format($congViec->muc_luong_toi_thieu) }} </span>
            </div>

            <div class="mt-8 mx-2">
                <strong class="block">Mức Lương Tối Đa:</strong>
                <span class="after:content-['VND']">{{ number_format($congViec->muc_luong_toi_da) }} </span>
            </div>

            <div class="mt-8 mx-2">
                <strong class="block">Ngày Hết Hạn:</strong>
                <span>{{ $congViec->ngay_het_han }}</span>
            </div>

            <div class="mt-8 mx-2">
                <strong class="block">User ID:</strong>
                <span>{{ $congViec->user_id }}</span>
            </div>

            <div class="mt-8 mx-2">
                <strong class="block">Tổ Chức ID:</strong>
                <span>{{ $congViec->to_chuc_id }}</span>
            </div>

            <div class="my-6 flex justify-center">
                <a href="{{ route('cong-viec.index') }}"
                class="ml-4 py-2 px-4 font-bold border-2 border-red-600 rounded bg-red-600 text-white hover:bg-white hover:text-red-600">Back</a>
            </div>

        </div>
    </div>
@endsection
