<style>
    .profile-banner {
        background-image: url("{{asset('img/profile-banner.jpg')}}");
        background-size: cover;
        background-repeat: no-repeat;
    }

    /* .profile-detail::after{
                content:"";
                position: ;
                
            } */
</style>

<div class="content flex flex-col justify-center w-[100%] space-y-4 md:w-[642px] lg:w-[856px] 2xl:w-[1070px] mx-auto">
    <div class="profile-detail w-[100%]  flex flex-col justify-center space-y-4">
        <div class="relative w-[100%] h-0 pt-[16.2%] lg:h-[137px] 2xl:h-[172px]">
            <div class="profile-banner absolute left-0 top-0 w-[100%] h-[100%] rounded-xl"></div>
        </div>

        <div class="profile-info flex items-center space-x-2">
            <img src="{{asset('img/avt.jpg')}}" class="self-start w-[160px] h-[160px] rounded-full hidden sm:block" alt="">
            <div class="flex flex-col space-y-3 self-start">
                <h1 class="font-bold text-3xl">Một Bản Tình Ca</h1>
                <p class="overflow-x-clip line-clamp-1">@motbantinhca ‧ 71,4 N người đăng ký ‧ 679 video</p>
                <p class="overflow-x-clip line-clamp-1">Orinn Music là đội ngũ sản xuất những dự án âm nhạc hàng đầu Việt Nam.</p>
                <button class="cursor-pointer hover:bg-slate-700 text-[12px] text-white bg-black font-semibold rounded-[30px] py-2 px-3 self-start">Đăng ký</button>
            </div>
        </div>

        <ul class="flex space-x-2 sm:space-x-3 border-b-2 overflow-x-auto sm:overflow-visible justify-start items-center">
            <li class="font-bold inline-block pb-2 border-b-2 border-black cursor-pointer text-[10px] sm:text-[14px] whitespace-nowrap">Trang chủ</li>
            <li class="font-bold inline-block pb-2 hover:border-b-2 border-slate-700 text-slate-700 cursor-pointer text-[10px] sm:text-[14px] whitespace-nowrap">video</li>
            <li class="font-bold inline-block pb-2 hover:border-b-2 border-slate-700 text-slate-700 cursor-pointer text-[10px] sm:text-[14px] whitespace-nowrap">Danh sách phát</li>
            <li class="font-bold inline-block pb-2 hover:border-b-2 border-slate-700 text-slate-700 cursor-pointer text-[10px] sm:text-[14px] whitespace-nowrap">Cộng đồng</li>
            <li class="ml-2 flex items-center pb-2">
                <i class="ti-search cursor-pointer rounded-full "></i>
                <input type="text" class="outline-none sm:w-sm" placeholder="Tìm kiếm">
            </li>
        </ul>
    </div>
    <div class="for-me flex-col space-y-4">
        <h2 class="text-xl font-bold">Dành cho bạn</h2>
        <ul class="flex space-x-4 overflow-x-auto justify-start items-center">
            <li class="font-bold flex flex-col cursor-pointer text-[10px] sm:text-[14px] whitespace-nowrap">
                <div class="w-[354px]">
                    <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer" src="{{asset('img/hq720.webp')}}" alt="" />
                    <div class="group flex mt-4 w-[100%]">
                        <div class="w-[calc(90%)] cursor-pointer">
                            <div class="line-clamp-1 overflow-clip font-semibold">
                                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                            </div>
                            <div class="text-gray-500 text-[8px]">
                                1,2 triệu lượt xem • 8 tuần trước
                            </div>
                        </div>

                        <div class="video-actions relative">
                            <svg class="button-dropdown block ml-[1px] cursor-pointer active:bg-slate-400 rounded-full p-[5px]" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                <path d="M12 16.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zM10.5 12c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5zm0-6c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5z"></path>
                            </svg>

                            <div class="dropdown absolute hidden bg-white right-5">
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M21 16h-7v-1h7v1zm0-5H9v1h12v-1zm0-4H3v1h18V7zm-11 8-7-4v8l7-4z"></path>
                                    </svg>
                                    <span>Thêm vào danh sách chờ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"></path>
                                    </svg>
                                    <span>Lưu vào danh sách xem sau</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z"></path>
                                    </svg>
                                    <span>Lưu vào danh sách phát</span>
                                </div>
                                <div class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z"></path>
                                    </svg>
                                    <span>Chia sẻ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z" fill-rule="evenodd"></path>
                                    </svg>
                                    <span>Không quan tâm</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <g>
                                            <path d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z"></path>
                                        </g>
                                    </svg>
                                    <span>Không đề xuất kênh này</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z"></path>
                                    </svg>
                                    <span>Báo vi phạm</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="font-bold flex flex-col cursor-pointer text-[10px] sm:text-[14px] whitespace-nowrap">
                <div class="w-[354px]">
                    <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer" src="{{asset('img/hq720.webp')}}" alt="" />
                    <div class="group flex mt-4 w-[100%]">
                        <div class="w-[calc(90%)] cursor-pointer">
                            <div class="line-clamp-1 overflow-hidden font-semibold">
                                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                            </div>
                            <div class="text-gray-500 text-[8px]">
                                1,2 triệu lượt xem • 8 tuần trước
                            </div>
                        </div>

                        <div class="video-actions relative">
                            <svg class="button-dropdown block ml-[1px] cursor-pointer active:bg-slate-400 rounded-full p-[5px]" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                <path d="M12 16.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zM10.5 12c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5zm0-6c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5z"></path>
                            </svg>

                            <div class="dropdown absolute hidden bg-white right-5">
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M21 16h-7v-1h7v1zm0-5H9v1h12v-1zm0-4H3v1h18V7zm-11 8-7-4v8l7-4z"></path>
                                    </svg>
                                    <span>Thêm vào danh sách chờ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"></path>
                                    </svg>
                                    <span>Lưu vào danh sách xem sau</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z"></path>
                                    </svg>
                                    <span>Lưu vào danh sách phát</span>
                                </div>
                                <div class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z"></path>
                                    </svg>
                                    <span>Chia sẻ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z" fill-rule="evenodd"></path>
                                    </svg>
                                    <span>Không quan tâm</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <g>
                                            <path d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z"></path>
                                        </g>
                                    </svg>
                                    <span>Không đề xuất kênh này</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z"></path>
                                    </svg>
                                    <span>Báo vi phạm</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="font-bold flex flex-col cursor-pointer text-[10px] sm:text-[14px] whitespace-nowrap">
                <div class="w-[354px]">
                    <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer" src="{{asset('img/hq720.webp')}}" alt="" />
                    <div class="group flex mt-4 w-[100%]">
                        <div class="w-[calc(90%)] cursor-pointer">
                            <div class="line-clamp-1 overflow-hidden font-semibold">
                                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                            </div>
                            <div class="text-gray-500 text-[8px]">
                                1,2 triệu lượt xem • 8 tuần trước
                            </div>
                        </div>

                        <div class="video-actions relative">
                            <svg class="button-dropdown block ml-[1px] cursor-pointer active:bg-slate-400 rounded-full p-[5px]" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                <path d="M12 16.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zM10.5 12c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5zm0-6c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5z"></path>
                            </svg>

                            <div class="dropdown absolute hidden bg-white right-5">
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M21 16h-7v-1h7v1zm0-5H9v1h12v-1zm0-4H3v1h18V7zm-11 8-7-4v8l7-4z"></path>
                                    </svg>
                                    <span>Thêm vào danh sách chờ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"></path>
                                    </svg>
                                    <span>Lưu vào danh sách xem sau</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z"></path>
                                    </svg>
                                    <span>Lưu vào danh sách phát</span>
                                </div>
                                <div class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z"></path>
                                    </svg>
                                    <span>Chia sẻ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z" fill-rule="evenodd"></path>
                                    </svg>
                                    <span>Không quan tâm</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <g>
                                            <path d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z"></path>
                                        </g>
                                    </svg>
                                    <span>Không đề xuất kênh này</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z"></path>
                                    </svg>
                                    <span>Báo vi phạm</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </li>


        </ul>
    </div>
    <!-- <div class="pinned-video flex flex-col sm:flex-row w-[100%]">
                <div class="w-[900px]">
                    <img src="{{asset('img/pinned-video.png')}}" class="rounded-xl" alt="">
                </div>
                <div class="pinned-video-description flex flex-col space-y-1">
                    <h3 class="line-clamp-1 font-bold">Từng Quen (1 Hours) - Wren Evans x Mind Lofi Ver. / Nhìn em anh bối rối anh thua rồi tim em lắm lối</h3>
                </div>
            </div> -->
</div>