<style>
    .profile-banner{
        background-image: url("{{asset('img/profile-banner.jpg')}}");
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>

<div class="content flex flex-col justify-center">
    <div class="profile-detail w-[255px] md:w-[856px] 2xl:w-[1070px] flex flex-col justify-center mx-auto">
        <div class="relative h-[40px] md:h-[137px] 2xl:h-[172px]">
            <div class="profile-banner absolute left-0 top-0 w-[100%] h-[100%] rounded-xl"></div>
        </div>

        <div class="profile-info flex items-center mt-2 space-x-2">
            <img src="{{asset('img/avt.jpg')}}" class="self-start w-[160px] h-[160px] rounded-full hidden sm:block" alt="">
            <div class="flex flex-col space-y-3 self-start">
                <h1 class="font-bold text-3xl">Một Bản Tình Ca</h1>
                <p>@motbantinhca ‧ 71,4 N người đăng ký ‧ 679 video</p>
                <p class="overflow-x-clip">Orinn Music là đội ngũ sản xuất những dự án âm nhạc hàng đầu Việt Nam.</p>
                <button class="cursor-pointer hover:bg-slate-700 text-[10px] sm:text-[12px] text-white bg-black font-semibold rounded-[30px] p-1 sm:py-2 sm:px-3 self-start">Đăng ký</button>
            </div>
        </div>
    </div>
</div>