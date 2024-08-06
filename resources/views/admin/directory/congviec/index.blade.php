@extends('layouts.layouts')

@section('title', 'Admin')

@section('content')
    <div class="mt-8 max-w-[93%] mx-auto border-2 border-black">
        <h1 class="p-4 text-2xl text-gray-700 font-bold text-center bg-gray-300">Chào Mừng Đền Với Trang Danh Sách Công Việc.
        </h1>

        <div>
            <div class="py-4 my-4 mr-4 flex justify-end">
                <a href="{{ route('cong-viec.create') }}"
                    class="py-3 px-4 flex items-center border-2 border-green-400 rounded-lg bg-green-400 text-white hover:bg-white hover:text-green-400"><i
                        class="bx bx-plus-medical mr-2"></i>Thêm Công Việc Mới</a>
            </div>

            @session('success')
                <div class="alert alert-success" role="alert"> {{ $value }} </div>
            @endsession

            <div class="mx-2 mb-[10rem]">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="py-2 border-2">STT</th>
                            <th class="py-2 border-2">Tiêu Đề</th>
                            <th class="py-2 border-2">Hình Thức Làm Việc</th>
                            <th class="py-2 border-2">Loại Công Việc</th>
                            <th class="py-2 border-2">Địa Chỉ Làm Việc</th>
                            <th class="py-2 border-2">Chức Năng</th>
                        </tr>
                    </thead>

                    <tbody class="text-center">
                        @foreach ($congViec as $cv)
                            <tr>
                                <td class="py-2 border-2 text-sm w-10">{{ ++$i }}</td>
                                <td class="py-2 border-2 text-sm w-80">{{ $cv->tieu_de }}</td>
                                <td class="py-2 border-2 text-sm w-40">{{ $cv->hinh_thuc_lam_viec }}</td>
                                <td class="py-2 border-2 text-sm w-32">{{ $cv->loai_cong_viec }}</td>
                                <td class="py-2 border-2 text-sm w-96">{{ $cv->dia_chi_lam_viec }}</td>
                                <td class="py-2 border-2 text-sm w-56">
                                    <div class="flex justify-around">
                                        <a href="{{ route('cong-viec.edit', $cv->id) }}"
                                            class="p-2 flex items-center font-bold text-white bg-blue-700 rounded hover:text-blue-700 hover:bg-white"><i
                                                class="bx bxs-edit pr-1"></i>Sửa</a>
                                        <a href=""
                                            class="p-2 flex items-center font-bold text-white bg-red-600 border-2 border-red-600 rounded hover:text-red-600 hover:bg-white">
                                            <form method="POST" action="{{ route('cong-viec.destroy', $cv->id) }}">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button type="submit"
                                                    onclick="return confirm('Are you sure you want to delete jobs?')"><i
                                                        class="bx bxs-trash pr-1"></i>Xóa</button>
                                            </form>
                                        </a>
                                        <a href="{{ route('cong-viec.show', $cv->id) }}"
                                            class="p-2 flex items-center font-bold text-white bg-blue-500 border-2 border-blue-500 rounded hover:text-blue-600 hover:bg-white"><i
                                                class="bx bx-list-ul pr-1"></i>Xem</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {!! $congViec->links() !!}

            </div>
        </div>
    </div>
@endsection
