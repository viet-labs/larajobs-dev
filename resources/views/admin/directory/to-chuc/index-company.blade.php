@extends('layouts.admin')

@section('title', 'Admin')

@section('content')
    <div class="mt-8 max-w-[93%] mx-auto border-2 border-black">
        <h1 class="p-4 text-2xl text-gray-700 font-bold text-center bg-gray-300">Chào Mừng Đền Với Trang Danh Sách Tổ Chức.
        </h1>

        <div>
            <div class="py-4 my-4 mr-4 flex justify-end">
                <a href="{{ route('to-chuc.create') }}"
                    class="py-3 px-4 flex items-center border-2 border-green-400 rounded-lg bg-green-400 text-white hover:bg-white hover:text-green-400"><i
                        class="bx bx-plus-medical mr-2"></i>Thêm Tổ Chức Mới</a>
            </div>

            @session('success')
                <div class="my-4 mx-2 px-4 py-2 rounded-lg border border-green-600 bg-green-300 font-bold"> {{ $value }} </div>
            @endsession

            <div class="mx-2 mb-[10rem]">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="py-2 border-2">STT</th>
                            <th class="py-2 border-2">Tên Công Ty</th>
                            <th class="py-2 border-2">Địa Chỉ Liên Hệ</th>
                            <th class="py-2 border-2">Website</th>
                            <th class="py-2 border-2">Chức Năng</th>
                        </tr>
                    </thead>

                    <tbody class="text-center">
                        @foreach ($toChuc as $tc)
                            <tr>
                                <td class="py-2 border-2 text-sm w-10">{{ ++$i }}</td>
                                <td class="py-2 border-2 text-sm w-48">{{ $tc->ten_cong_ty }}</td>
                                <td class="py-2 border-2 text-sm w-96">{{ $tc->dia_chi_lien_he }}</td>
                                <td class="py-2 border-2 text-sm w-52">{{ $tc->website_url }}</td>
                                <td class="py-2 border-2 text-sm w-56">
                                    <div class="flex justify-around">
                                        <a href="{{ route('to-chuc.edit', $tc->id) }}"
                                            class="p-2 flex items-center font-bold text-white bg-blue-700 rounded hover:text-blue-700 hover:bg-white"><i
                                                class="bx bxs-edit pr-1"></i>Sửa</a>
                                        <a href=""
                                            class="p-2 flex items-center font-bold text-white bg-red-600 border-2 border-red-600 rounded hover:text-red-600 hover:bg-white">
                                            <form method="POST" action="{{ route('to-chuc.destroy', $tc->id) }}">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button type="submit"
                                                    onclick="return confirm('Are you sure you want to delete jobs?')"><i
                                                        class="bx bxs-trash pr-1"></i>Xóa</button>
                                            </form>
                                        </a>
                                        <a href="{{ route('to-chuc.show', $tc->id) }}"
                                            class="p-2 flex items-center font-bold text-white bg-blue-500 border-2 border-blue-500 rounded hover:text-blue-600 hover:bg-white"><i
                                                class="bx bx-list-ul pr-1"></i>Xem</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="mt-4">
                    {{ $toChuc->links() }}
                </div>

            </div>
        </div>
    </div>
@endsection
