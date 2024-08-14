<div class="container mx-auto lg:max-w-5xl mt-[2rem] px-12">
    <div class="font-bold text-xl mb-4 mx-4">Tags</div>
    <div class="flex flex-wrap mx-4">
        @foreach ($tuKhoaList as $tuKhoa)
            <a href=""
                class="font-bold text-[#F9332B] border border-[#F9332B] rounded-full bg-[#FFECEB] hover:bg-white py-2 px-4 my-2 mr-2">
                {{ $tuKhoa->ten_hien_thi }}
            </a>
        @endforeach
    </div>
</div>
