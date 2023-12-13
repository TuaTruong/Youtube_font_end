@extends('layout.master')

@section('styles')
    <style>
        .show-more-short::after {
            content: "";
            width: 100%;
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            border: 1px solid #ccc;
            z-index: -1;
        }

        .wrapper {
            display: grid;
            grid-template-rows: 62px calc(100vh-62px);
            grid-template-columns: 224px 1fr;
        }
    </style>
@stop

@section('content')
    <div class="content-wrapper self-start h-[calc(100vh-70px)] overflow-y-auto">
        <style>
            .profile-banner {
                background-image: url("{{ asset('img/profile-banner.jpg') }}");
                background-size: cover;
                background-repeat: no-repeat;
            }

            .dropdown {
                z-index: 10;
            }

            div.sharing-button::after {
                position: absolute;
                content: "";
                display: block;
                height: 1px;
                width: 100%;
                margin: 8px 0;
                bottom: -15px;
                left: 0;
                background: #000;
                cursor: pointer;
            }

        </style>

        <div class="content flex flex-col justify-center px-2 w-[100%] sm:w-[80%] space-x-1 sm:space-y-4 mx-auto">
            <div class="profile-detail w-[100%] flex flex-col justify-center space-y-4">
                <div class="relative w-[100%] h-0 pt-[16.2%] lg:h-[137px] 2xl:h-[172px]">
                    <div class="profile-banner absolute left-0 top-0 w-[100%] h-[100%] rounded-xl"></div>
                </div>

                <div class="profile-info flex items-center space-x-2 hidden sm:flex">
                    <img src="{{ asset('img/avt.jpg') }}" class="self-start w-[160px] h-[160px] rounded-full sm:block"
                        alt="">
                    <div class="flex flex-col space-y-3 self-start">
                        <h1 class="font-bold text-3xl">Một Bản Tình Ca</h1>
                        <p class="overflow-x-clip line-clamp-1">@motbantinhca ‧ 71,4 N người đăng ký ‧ 679 video</p>
                        <p class="overflow-x-clip line-clamp-1">Orinn Music là đội ngũ sản xuất những dự án âm nhạc hàng đầu
                            Việt Nam.</p>
                        <button
                            class="cursor-pointer hover:bg-slate-700 text-[12px] text-white bg-black font-semibold rounded-[30px] py-2 px-3 self-start">Đăng
                            ký</button>
                    </div>
                </div>
                <div class="profile-info flex items-center space-x-2 sm:hidden">
                    <img src="{{ asset('img/avt.jpg') }}" class="self-start w-[70px] h-[70px] rounded-full sm:block"
                        alt="">
                    <div class="flex flex-col self-start">
                        <h1 class="font-bold text-[18px]">Một Bản Tình Ca</h1>
                        <p class="overflow-x-clip line-clamp-1 text-[12px]">@motbantinhca</p>
                        <p class="overflow-x-clip line-clamp-1 text-[12px]">71,4 N người đăng ký ‧ 679 video</p>
                    </div>
                </div>
                <p class="overflow-x-clip line-clamp-2 text-[8px] sm:hidden">Orinn Music là đội ngũ sản xuất những dự án âm
                    nhạc hàng đầu Việt Nam.</p>
                <button
                    class="cursor-pointer hover:bg-slate-700 text-[12px] text-white bg-black font-semibold rounded-[30px] py-2 px-3 self-start w-[100%] sm:hidden">Đăng
                    ký</button>

                <ul
                    class="flex space-x-2 sm:space-x-3 border-b-2 overflow-x-auto sm:overflow-visible justify-start items-center">
                    <li
                        class="font-bold inline-block pb-2 border-b-2 border-black cursor-pointer text-[10px] sm:text-[14px] whitespace-nowrap">
                        Trang chủ</li>
                    <li
                        class="font-bold inline-block pb-2 hover:border-b-2 border-slate-700 text-slate-700 cursor-pointer text-[10px] sm:text-[14px] whitespace-nowrap">
                        video</li>
                    <li
                        class="font-bold inline-block pb-2 hover:border-b-2 border-slate-700 text-slate-700 cursor-pointer text-[10px] sm:text-[14px] whitespace-nowrap">
                        Danh sách phát</li>
                    <li
                        class="font-bold inline-block pb-2 hover:border-b-2 border-slate-700 text-slate-700 cursor-pointer text-[10px] sm:text-[14px] whitespace-nowrap">
                        Cộng đồng</li>
                    <li class="ml-2 hidden sm:inline-block flex items-center pb-2 space-x-2">
                        <i class="ti-search cursor-pointer rounded-full show-search-video"></i>
                        <input type="text" class="outline-none hidden sm:w-sm" placeholder="Tìm kiếm">
                    </li>
                </ul>
            </div>


            <div class="for-me flex-col space-y-4 border-b-2 pb-1">
                <h2 class="text-sm sm:text-xl font-bold">Dành cho bạn</h2>
                <ul class="flex space-x-4 justify-start items-center pb-2 overflow-y-visible overflow-x-scroll">
                    <li class="video-item font-bold flex flex-col cursor-pointer text-[10px] sm:text-[14px]">
                        <div class="w-[260px] sm:w-[354px]">
                            <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer"
                                src="{{ asset('img/hq720.webp') }}" alt="" />
                            <div class="group flex mt-3 w-[100%]">
                                <div class="w-[calc(90%)] cursor-pointer">
                                    <div class="line-clamp-1  font-semibold">
                                        Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                        Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                                    </div>
                                    <div class="text-gray-500 text-[8px]">
                                        1,2 triệu lượt xem • 8 tuần trước
                                    </div>
                                </div>

                                <div class="video-actions relative">
                                    <svg class="button-dropdown block ml-[1px] cursor-pointer active:bg-slate-400 rounded-full p-[5px]"
                                        xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24"
                                        viewBox="0 0 24 24" width="24" focusable="false">
                                        <path
                                            d="M12 16.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zM10.5 12c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5zm0-6c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5z">
                                        </path>
                                    </svg>

                                    <div class=" dropdown absolute hidden bg-white right-5 overflow-x-visible">
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path d="M21 16h-7v-1h7v1zm0-5H9v1h12v-1zm0-4H3v1h18V7zm-11 8-7-4v8l7-4z">
                                                </path>
                                            </svg>
                                            <span>Thêm vào danh sách chờ</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z">
                                                </path>
                                            </svg>
                                            <span>Lưu vào danh sách xem sau</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z">
                                                </path>
                                            </svg>
                                            <span>Lưu vào danh sách phát</span>
                                        </div>
                                        <div
                                            class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z">
                                                </path>
                                            </svg>
                                            <span>Chia sẻ</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3 text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"
                                                    fill-rule="evenodd"></path>
                                            </svg>
                                            <span>Không quan tâm</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                                <g>
                                                    <path
                                                        d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <span>Không đề xuất kênh này</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                                <path
                                                    d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z">
                                                </path>
                                            </svg>
                                            <span>Báo vi phạm</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="video-item font-bold flex flex-col cursor-pointer text-[10px] sm:text-[14px]">
                        <div class="w-[260px] sm:w-[354px]">
                            <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer"
                                src="{{ asset('img/hq720.webp') }}" alt="" />
                            <div class="group flex mt-3 w-[100%]">
                                <div class="w-[calc(90%)] cursor-pointer">
                                    <div class="line-clamp-1  font-semibold">
                                        Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                        Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                                    </div>
                                    <div class="text-gray-500 text-[8px]">
                                        1,2 triệu lượt xem • 8 tuần trước
                                    </div>
                                </div>

                                <div class="video-actions relative">
                                    <svg class="button-dropdown block ml-[1px] cursor-pointer active:bg-slate-400 rounded-full p-[5px]"
                                        xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                        height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path
                                            d="M12 16.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zM10.5 12c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5zm0-6c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5z">
                                        </path>
                                    </svg>

                                    <div class="dropdown absolute hidden bg-white right-5">
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path d="M21 16h-7v-1h7v1zm0-5H9v1h12v-1zm0-4H3v1h18V7zm-11 8-7-4v8l7-4z">
                                                </path>
                                            </svg>
                                            <span>Thêm vào danh sách chờ</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z">
                                                </path>
                                            </svg>
                                            <span>Lưu vào danh sách xem sau</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z">
                                                </path>
                                            </svg>
                                            <span>Lưu vào danh sách phát</span>
                                        </div>
                                        <div
                                            class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z">
                                                </path>
                                            </svg>
                                            <span>Chia sẻ</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3 text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"
                                                    fill-rule="evenodd"></path>
                                            </svg>
                                            <span>Không quan tâm</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                                <g>
                                                    <path
                                                        d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <span>Không đề xuất kênh này</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                                <path
                                                    d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z">
                                                </path>
                                            </svg>
                                            <span>Báo vi phạm</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="video-item font-bold flex flex-col cursor-pointer text-[10px] sm:text-[14px]">
                        <div class="w-[260px] sm:w-[354px]">
                            <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer"
                                src="{{ asset('img/hq720.webp') }}" alt="" />
                            <div class="group flex mt-3 w-[100%]">
                                <div class="w-[calc(90%)] cursor-pointer">
                                    <div class="line-clamp-1  font-semibold">
                                        Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                        Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                                    </div>
                                    <div class="text-gray-500 text-[8px]">
                                        1,2 triệu lượt xem • 8 tuần trước
                                    </div>
                                </div>

                                <div class="video-actions relative">
                                    <svg class="button-dropdown block ml-[1px] cursor-pointer active:bg-slate-400 rounded-full p-[5px]"
                                        xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                        height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path
                                            d="M12 16.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zM10.5 12c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5zm0-6c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5z">
                                        </path>
                                    </svg>

                                    <div class="dropdown absolute hidden bg-white right-5">
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path d="M21 16h-7v-1h7v1zm0-5H9v1h12v-1zm0-4H3v1h18V7zm-11 8-7-4v8l7-4z">
                                                </path>
                                            </svg>
                                            <span>Thêm vào danh sách chờ</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z">
                                                </path>
                                            </svg>
                                            <span>Lưu vào danh sách xem sau</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z">
                                                </path>
                                            </svg>
                                            <span>Lưu vào danh sách phát</span>
                                        </div>
                                        <div
                                            class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z">
                                                </path>
                                            </svg>
                                            <span>Chia sẻ</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3 text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"
                                                    fill-rule="evenodd"></path>
                                            </svg>
                                            <span>Không quan tâm</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                                <g>
                                                    <path
                                                        d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <span>Không đề xuất kênh này</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                                <path
                                                    d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z">
                                                </path>
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
            <div class="suggest-topic flex-col space-y-4 border-b-2 pb-1">
                <div class="flex items-center space-x-4">
                    <h2 class="text-sm sm:text-xl font-bold" .>Playlist Lofi Chill</h2>
                    <button
                        class="text-sm font-semibold p-2 flex items-center rounded-l-full rounded-r-full cursor-pointer hover:bg-slate-200">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"
                            focusable="false">
                            <path d="m7 4 12 8-12 8V4z"></path>
                        </svg>
                        <span>Phát tất cả</span>
                    </button>
                </div>
                <ul class="flex space-x-4 overflow-x-auto justify-start items-center pb-2">
                    <li class="video-item font-bold flex flex-col cursor-pointer text-[10px] sm:text-[14px]">
                        <div class="w-[210px]">
                            <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer"
                                src="{{ asset('img/hq720.webp') }}" alt="" />
                            <div class="group flex mt-2 w-[100%]">
                                <div class="w-[calc(90%)] cursor-pointer">
                                    <div class="line-clamp-1 text-[11px] font-semibold">
                                        Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                        Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                                    </div>
                                    <div class="text-gray-500 text-[7px]">
                                        1,2 triệu lượt xem • 8 tuần trước
                                    </div>
                                </div>

                                <div class="video-actions relative">
                                    <svg class="button-dropdown block ml-[1px] cursor-pointer active:bg-slate-400 rounded-full p-[5px]"
                                        xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                        height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path
                                            d="M12 16.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zM10.5 12c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5zm0-6c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5z">
                                        </path>
                                    </svg>

                                    <div class="dropdown absolute hidden bg-white right-5">
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path d="M21 16h-7v-1h7v1zm0-5H9v1h12v-1zm0-4H3v1h18V7zm-11 8-7-4v8l7-4z">
                                                </path>
                                            </svg>
                                            <span>Thêm vào danh sách chờ</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z">
                                                </path>
                                            </svg>
                                            <span>Lưu vào danh sách xem sau</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z">
                                                </path>
                                            </svg>
                                            <span>Lưu vào danh sách phát</span>
                                        </div>
                                        <div
                                            class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z">
                                                </path>
                                            </svg>
                                            <span>Chia sẻ</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3 text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"
                                                    fill-rule="evenodd"></path>
                                            </svg>
                                            <span>Không quan tâm</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                                <g>
                                                    <path
                                                        d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <span>Không đề xuất kênh này</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                                <path
                                                    d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z">
                                                </path>
                                            </svg>
                                            <span>Báo vi phạm</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="video-item font-bold flex flex-col cursor-pointer text-[10px] sm:text-[14px]">
                        <div class="w-[210px]">
                            <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer"
                                src="{{ asset('img/hq720.webp') }}" alt="" />
                            <div class="group flex mt-2 w-[100%]">
                                <div class="w-[calc(90%)] cursor-pointer">
                                    <div class="line-clamp-1 text-[11px] font-semibold">
                                        Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                        Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                                    </div>
                                    <div class="text-gray-500 text-[7px]">
                                        1,2 triệu lượt xem • 8 tuần trước
                                    </div>
                                </div>

                                <div class="video-actions relative">
                                    <svg class="button-dropdown block ml-[1px] cursor-pointer active:bg-slate-400 rounded-full p-[5px]"
                                        xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                        height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path
                                            d="M12 16.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zM10.5 12c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5zm0-6c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5z">
                                        </path>
                                    </svg>

                                    <div class="dropdown absolute hidden bg-white right-5">
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path d="M21 16h-7v-1h7v1zm0-5H9v1h12v-1zm0-4H3v1h18V7zm-11 8-7-4v8l7-4z">
                                                </path>
                                            </svg>
                                            <span>Thêm vào danh sách chờ</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z">
                                                </path>
                                            </svg>
                                            <span>Lưu vào danh sách xem sau</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z">
                                                </path>
                                            </svg>
                                            <span>Lưu vào danh sách phát</span>
                                        </div>
                                        <div
                                            class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z">
                                                </path>
                                            </svg>
                                            <span>Chia sẻ</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3 text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"
                                                    fill-rule="evenodd"></path>
                                            </svg>
                                            <span>Không quan tâm</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                                <g>
                                                    <path
                                                        d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <span>Không đề xuất kênh này</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                                <path
                                                    d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z">
                                                </path>
                                            </svg>
                                            <span>Báo vi phạm</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="video-item font-bold flex flex-col cursor-pointer text-[10px] sm:text-[14px]">
                        <div class="w-[210px]">
                            <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer"
                                src="{{ asset('img/hq720.webp') }}" alt="" />
                            <div class="group flex mt-2 w-[100%]">
                                <div class="w-[calc(90%)] cursor-pointer">
                                    <div class="line-clamp-1 text-[11px] font-semibold">
                                        Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                        Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                                    </div>
                                    <div class="text-gray-500 text-[7px]">
                                        1,2 triệu lượt xem • 8 tuần trước
                                    </div>
                                </div>

                                <div class="video-actions relative">
                                    <svg class="button-dropdown block ml-[1px] cursor-pointer active:bg-slate-400 rounded-full p-[5px]"
                                        xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                        height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path
                                            d="M12 16.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zM10.5 12c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5zm0-6c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5z">
                                        </path>
                                    </svg>

                                    <div class="dropdown absolute hidden bg-white right-5">
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path d="M21 16h-7v-1h7v1zm0-5H9v1h12v-1zm0-4H3v1h18V7zm-11 8-7-4v8l7-4z">
                                                </path>
                                            </svg>
                                            <span>Thêm vào danh sách chờ</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z">
                                                </path>
                                            </svg>
                                            <span>Lưu vào danh sách xem sau</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z">
                                                </path>
                                            </svg>
                                            <span>Lưu vào danh sách phát</span>
                                        </div>
                                        <div
                                            class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z">
                                                </path>
                                            </svg>
                                            <span>Chia sẻ</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3 text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"
                                                    fill-rule="evenodd"></path>
                                            </svg>
                                            <span>Không quan tâm</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                                <g>
                                                    <path
                                                        d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <span>Không đề xuất kênh này</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                                <path
                                                    d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z">
                                                </path>
                                            </svg>
                                            <span>Báo vi phạm</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="video-item font-bold flex flex-col cursor-pointer text-[10px] sm:text-[14px]">
                        <div class="w-[210px]">
                            <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer"
                                src="{{ asset('img/hq720.webp') }}" alt="" />
                            <div class="group flex mt-2 w-[100%]">
                                <div class="w-[calc(90%)] cursor-pointer">
                                    <div class="line-clamp-1 text-[11px] font-semibold">
                                        Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                        Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                                    </div>
                                    <div class="text-gray-500 text-[7px]">
                                        1,2 triệu lượt xem • 8 tuần trước
                                    </div>
                                </div>

                                <div class="video-actions relative">
                                    <svg class="button-dropdown block ml-[1px] cursor-pointer active:bg-slate-400 rounded-full p-[5px]"
                                        xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                        height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path
                                            d="M12 16.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zM10.5 12c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5zm0-6c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5z">
                                        </path>
                                    </svg>

                                    <div class="dropdown absolute hidden bg-white right-5">
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path d="M21 16h-7v-1h7v1zm0-5H9v1h12v-1zm0-4H3v1h18V7zm-11 8-7-4v8l7-4z">
                                                </path>
                                            </svg>
                                            <span>Thêm vào danh sách chờ</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z">
                                                </path>
                                            </svg>
                                            <span>Lưu vào danh sách xem sau</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z">
                                                </path>
                                            </svg>
                                            <span>Lưu vào danh sách phát</span>
                                        </div>
                                        <div
                                            class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z">
                                                </path>
                                            </svg>
                                            <span>Chia sẻ</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3 text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"
                                                    fill-rule="evenodd"></path>
                                            </svg>
                                            <span>Không quan tâm</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                                <g>
                                                    <path
                                                        d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <span>Không đề xuất kênh này</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                                <path
                                                    d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z">
                                                </path>
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
            <div class="suggest-topic flex-col space-y-4 border-b-2 pb-1">
                <div class="flex items-center space-x-4">
                    <h2 class="text-sm sm:text-xl font-bold" .>Playlist EDM Chill</h2>
                    <button
                        class="text-sm font-semibold p-2 flex items-center rounded-l-full rounded-r-full cursor-pointer hover:bg-slate-200">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"
                            focusable="false">
                            <path d="m7 4 12 8-12 8V4z"></path>
                        </svg>
                        <span>Phát tất cả</span>
                    </button>
                </div>
                <ul class="flex space-x-4 overflow-x-auto justify-start items-center pb-2">
                    <li class="video-item font-bold flex flex-col cursor-pointer text-[10px] sm:text-[14px]">
                        <div class="w-[210px]">
                            <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer"
                                src="{{ asset('img/hq720.webp') }}" alt="" />
                            <div class="group flex mt-2 w-[100%]">
                                <div class="w-[calc(90%)] cursor-pointer">
                                    <div class="line-clamp-1 text-[11px] font-semibold">
                                        Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                        Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                                    </div>
                                    <div class="text-gray-500 text-[7px]">
                                        1,2 triệu lượt xem • 8 tuần trước
                                    </div>
                                </div>

                                <div class="video-actions relative">
                                    <svg class="button-dropdown block ml-[1px] cursor-pointer active:bg-slate-400 rounded-full p-[5px]"
                                        xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                        height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path
                                            d="M12 16.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zM10.5 12c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5zm0-6c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5z">
                                        </path>
                                    </svg>

                                    <div class="dropdown absolute hidden bg-white right-5">
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path d="M21 16h-7v-1h7v1zm0-5H9v1h12v-1zm0-4H3v1h18V7zm-11 8-7-4v8l7-4z">
                                                </path>
                                            </svg>
                                            <span>Thêm vào danh sách chờ</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z">
                                                </path>
                                            </svg>
                                            <span>Lưu vào danh sách xem sau</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z">
                                                </path>
                                            </svg>
                                            <span>Lưu vào danh sách phát</span>
                                        </div>
                                        <div
                                            class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z">
                                                </path>
                                            </svg>
                                            <span>Chia sẻ</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3 text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"
                                                    fill-rule="evenodd"></path>
                                            </svg>
                                            <span>Không quan tâm</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                                <g>
                                                    <path
                                                        d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <span>Không đề xuất kênh này</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                                <path
                                                    d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z">
                                                </path>
                                            </svg>
                                            <span>Báo vi phạm</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="video-item font-bold flex flex-col cursor-pointer text-[10px] sm:text-[14px]">
                        <div class="w-[210px]">
                            <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer"
                                src="{{ asset('img/hq720.webp') }}" alt="" />
                            <div class="group flex mt-2 w-[100%]">
                                <div class="w-[calc(90%)] cursor-pointer">
                                    <div class="line-clamp-1 text-[11px] font-semibold">
                                        Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                        Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                                    </div>
                                    <div class="text-gray-500 text-[7px]">
                                        1,2 triệu lượt xem • 8 tuần trước
                                    </div>
                                </div>

                                <div class="video-actions relative">
                                    <svg class="button-dropdown block ml-[1px] cursor-pointer active:bg-slate-400 rounded-full p-[5px]"
                                        xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                        height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path
                                            d="M12 16.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zM10.5 12c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5zm0-6c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5z">
                                        </path>
                                    </svg>

                                    <div class="dropdown absolute hidden bg-white right-5">
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path d="M21 16h-7v-1h7v1zm0-5H9v1h12v-1zm0-4H3v1h18V7zm-11 8-7-4v8l7-4z">
                                                </path>
                                            </svg>
                                            <span>Thêm vào danh sách chờ</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z">
                                                </path>
                                            </svg>
                                            <span>Lưu vào danh sách xem sau</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z">
                                                </path>
                                            </svg>
                                            <span>Lưu vào danh sách phát</span>
                                        </div>
                                        <div
                                            class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z">
                                                </path>
                                            </svg>
                                            <span>Chia sẻ</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3 text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"
                                                    fill-rule="evenodd"></path>
                                            </svg>
                                            <span>Không quan tâm</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                                <g>
                                                    <path
                                                        d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <span>Không đề xuất kênh này</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                                <path
                                                    d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z">
                                                </path>
                                            </svg>
                                            <span>Báo vi phạm</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="video-item font-bold flex flex-col cursor-pointer text-[10px] sm:text-[14px]">
                        <div class="w-[210px]">
                            <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer"
                                src="{{ asset('img/hq720.webp') }}" alt="" />
                            <div class="group flex mt-2 w-[100%]">
                                <div class="w-[calc(90%)] cursor-pointer">
                                    <div class="line-clamp-1 text-[11px] font-semibold">
                                        Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                        Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                                    </div>
                                    <div class="text-gray-500 text-[7px]">
                                        1,2 triệu lượt xem • 8 tuần trước
                                    </div>
                                </div>

                                <div class="video-actions relative">
                                    <svg class="button-dropdown block ml-[1px] cursor-pointer active:bg-slate-400 rounded-full p-[5px]"
                                        xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                        height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path
                                            d="M12 16.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zM10.5 12c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5zm0-6c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5z">
                                        </path>
                                    </svg>

                                    <div class="dropdown absolute hidden bg-white right-5">
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path d="M21 16h-7v-1h7v1zm0-5H9v1h12v-1zm0-4H3v1h18V7zm-11 8-7-4v8l7-4z">
                                                </path>
                                            </svg>
                                            <span>Thêm vào danh sách chờ</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z">
                                                </path>
                                            </svg>
                                            <span>Lưu vào danh sách xem sau</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z">
                                                </path>
                                            </svg>
                                            <span>Lưu vào danh sách phát</span>
                                        </div>
                                        <div
                                            class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z">
                                                </path>
                                            </svg>
                                            <span>Chia sẻ</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3 text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24" focusable="false">
                                                <path
                                                    d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"
                                                    fill-rule="evenodd"></path>
                                            </svg>
                                            <span>Không quan tâm</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                                <g>
                                                    <path
                                                        d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <span>Không đề xuất kênh này</span>
                                        </div>
                                        <div
                                            class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer text-[9px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                                height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                                <path
                                                    d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z">
                                                </path>
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

            <div class="for-me space-y-4 border-b-2 pb-1">
                <h2 class="text-sm sm:text-xl font-bold">Nổi bật</h2>
                <ul class="flex space-x-4 overflow-x-auto justify-start items-center pb-2">

                    <li class="font-bold flex cursor-pointer text-[10px] sm:text-[14px] whitespace-nowrap">
                        <div class="w-[210px] flex flex-col items-center text-center">
                            <img class="w-[103px] rounded-full cursor-pointer" src="{{ asset('img/avt2.jpg') }}"
                                alt="" />
                            <div class="group flex mt-1 w-[100%]">
                                <div class="w-[calc(100%)] cursor-pointer flex flex-col space-y-2">
                                    <div class="line-clamp-1  font-semibold">
                                        Đen Vâu Offical
                                    </div>
                                    <div class="text-gray-500 text-[8px]">
                                        1,2 triệu người đăng ký
                                    </div>
                                    <button
                                        class="self-center inline-block bg-slate-200 hover:bg-slate-300 px-3 py-1 text-[12px] text-semibold text-white rounded-l-full rounded-r-full">Đăng
                                        ký</button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="font-bold flex cursor-pointer text-[10px] sm:text-[14px] whitespace-nowrap">
                        <div class="w-[210px] flex flex-col items-center text-center">
                            <img class="w-[103px] rounded-full cursor-pointer" src="{{ asset('img/avt2.jpg') }}"
                                alt="" />
                            <div class="group flex mt-1 w-[100%]">
                                <div class="w-[calc(100%)] cursor-pointer flex flex-col space-y-2">
                                    <div class="line-clamp-1  font-semibold">
                                        Đen Vâu Offical
                                    </div>
                                    <div class="text-gray-500 text-[8px]">
                                        1,2 triệu người đăng ký
                                    </div>
                                    <button
                                        class="self-center inline-block bg-slate-200 hover:bg-slate-300 px-3 py-1 text-[12px] text-semibold text-white rounded-l-full rounded-r-full">Đăng
                                        ký</button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="font-bold flex cursor-pointer text-[10px] sm:text-[14px] whitespace-nowrap">
                        <div class="w-[210px] flex flex-col items-center text-center">
                            <img class="w-[103px] rounded-full cursor-pointer" src="{{ asset('img/avt2.jpg') }}"
                                alt="" />
                            <div class="group flex mt-1 w-[100%]">
                                <div class="w-[calc(100%)] cursor-pointer flex flex-col space-y-2">
                                    <div class="line-clamp-1  font-semibold">
                                        Đen Vâu Offical
                                    </div>
                                    <div class="text-gray-500 text-[8px]">
                                        1,2 triệu người đăng ký
                                    </div>
                                    <button
                                        class="self-center inline-block bg-slate-200 hover:bg-slate-300 px-3 py-1 text-[12px] text-semibold text-white rounded-l-full rounded-r-full">Đăng
                                        ký</button>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script src="{{ asset('javascript/profile.js') }}"></script>
@stop
