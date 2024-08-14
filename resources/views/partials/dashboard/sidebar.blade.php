<nav class="fixed w-72 h-screen bg-gray-900">
    <div class="mt-5 pb-4 text-2xl text-white text-center border-b-4">
        <strong class="font-bold">Dashboard</strong>
    </div>

    <div class="mx-6 mt-5">
        <div class="">
            <a href="#" class="text-white">Trang Chủ</a>
        </div>

        <div class="">
            <a href="" class="text-white">
                <span>Quản Lý</span>
            </a>

            <ul>
                <li class="text-white font-bold">
                    <a href="{{ route('cong-viec.index') }}">Quản Lý Jobs</a>
                </li>
                <li class="text-white font-bold">
                    <a href="{{ route('to-chuc.index') }}">Quản lý Tổ Chức</a>
                </li>
                <li class="text-white font-bold">
                    <a href="{{ route('tu-khoa.index') }}">Quản Lý Tag</a>
                </li>
                <li class="text-white font-bold">
                    <a href="{{ route('user.index') }}">Quản Lý User</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
