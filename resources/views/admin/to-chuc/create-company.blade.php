@extends('layouts.admin')

@section('title', 'Create Company')

@section('content')
    <div class="mt-8 max-w-[93%] mx-auto border-2 border-black">
        <div class="">
            <h2 class="p-4 text-2xl text-gray-700 font-bold text-center bg-gray-300">Chào Mừng Đến Với Trang Tạo Tổ Chức.
            </h2>
        </div>
        @include('admin.to-chuc.form-company', [
            'submitUrl' => route('to-chuc.store'),
        ])
    </div>
@endsection
