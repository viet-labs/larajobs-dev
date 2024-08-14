<div class="container mx-auto lg:max-w-5xl mt-[2rem] px-12">
    <div class="flex justify-between mx-4">
        <div class="font-bold text-lg">
            Older Jobs
        </div>

        <div class="text-gray-500 text-base">
            Note, these jobs may no longer be available
        </div>
    </div>
</div>

<div class="container mx-auto lg:max-w-5xl px-8 mb-20">
    @foreach ($olderJobs as $olderJob)
        <div
            class="relative py-6 pr-8 pl-14 mt-6 shadow-lg border border-gray-300 rounded-lg hover:border-gray-500 flex justify-between items-center">

            <div class="absolute -left-10 bg-white border rounded-lg shadow-lg p-4">
                <img src="https://larajobs.com/logos/pyUtkvMCYwhCQcnLVHJjcYcKvddBCuDLGX6oo4Zu.png"
                    alt="{{ $olderJob->tieu_de }}" class="w-12 h-12 rounded-lg">
            </div>

            <div>
                <div class="text-sm">
                    {{ $olderJob->ToChuc->ten_cong_ty }}
                </div>
                <div class="font-bold text-lg text-gray-800">
                    {{ $olderJob->tieu_de }}
                </div>
                <div class="text-sm">
                    <span class="uppercase">
                        {{ $olderJob->loai_cong_viec }}
                    </span>

                    <span class="before:content-['-'] after:content-['VND']">
                        {{ number_format($olderJob->muc_luong_toi_thieu) }}
                    </span>

                    <span class="before:content-['-'] after:content-['VND']">
                        {{ number_format($olderJob->muc_luong_toi_da) }}
                    </span>
                </div>
            </div>

            <div class="text-sm">
                <div class="flex items-center">
                    <div class="mr-2">
                        <i class="bx bx-globe text-gray-400"></i>
                        <span class="capitalize after:content-['-']">
                            {{ $olderJob->hinh_thuc_lam_viec }}
                        </span>
                        <span>
                            {{ $olderJob->dia_chi_lam_viec }}
                        </span>
                    </div>

                    <div>
                        <i class="bx bx-calendar-event text-gray-400"></i>
                        <span class="capitalize">
                            {{ date('Y', strtotime($olderJob->ngay_het_han)) }}
                        </span>
                    </div>
                </div>

                <div class="mt-3 flex justify-end">
                    @foreach ($olderJob->tuKhoas as $tuKhoa)
                        <a href=""
                            class="font-bold text-[#F9332B] border border-[#F9332B] rounded-full bg-[#FFECEB] hover:bg-white py-2 px-3">
                            {{ $tuKhoa->ten_hien_thi }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
</div>
