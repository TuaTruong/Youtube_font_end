<div class="flex w-[100%] px-[20px] sm:text-[14px] text-[12px]">
    <div class="main-grid w-[100%] gap-4">
        <div class="video-details flex flex-col space-y-2 self-start row-end-1">
            <img class="w-[100%] h-auto" src="{{asset('img/video.png')}}" alt="">
            <div class="channel-description">
                <div class="video-name font-bold my-2">Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu Nhau.. Playlist Lofi Chill Hay Hot Tiktok</div>
                
                <div class="channel-info flex flex-col md:flex-row md:justify-between md:items-center items-start">
                    <div class="channel-profile flex justify-between space-x-2">
                        <img src="{{asset('img/avt.jpg')}}" class="rounded-full self-start w-[30px] h-[30px] sm:w-[48px] sm:h-[48px]">
                        <div class="channel-name-follow flex flex-col space-y-1 p-1">
                            <div class="font-bold text-[10px] sm:text-[12px]">Một Bản Tình Ca</div>
                            <div class="font-thin text-[10px] sm:text-[12px] text-slate-500">181 N người đăng ký</div>
                        </div>
                        <div class="cursor-pointer hover:bg-slate-700 text-[10px] sm:text-[12px] text-white bg-black font-semibold rounded-[30px] p-1 sm:py-2 sm:px-3 self-center">Đăng ký</div>
                    </div>

                    <div class="reactions flex justify-between items-center space-x-1">
                        <div class="like-dislike flex">
                            <button class="like flex items-center bg-slate-200 px-[2px] sm:px-2 rounded-l-full w-[65px] sm:w-[91px] h-[36px] cursor-pointer hover:bg-slate-300 relative justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                    <path d="M18.77,11h-4.23l1.52-4.94C16.38,5.03,15.54,4,14.38,4c-0.58,0-1.14,0.24-1.52,0.65L7,11H3v10h4h1h9.43 c1.06,0,1.98-0.67,2.19-1.61l1.34-6C21.23,12.15,20.18,11,18.77,11z M7,20H4v-8h3V20z M19.98,13.17l-1.34,6 C18.54,19.65,18.03,20,17.43,20H8v-8.61l5.6-6.06C13.79,5.12,14.08,5,14.38,5c0.26,0,0.5,0.11,0.63,0.3 c0.07,0.1,0.15,0.26,0.09,0.47l-1.52,4.94L13.18,12h1.35h4.23c0.41,0,0.8,0.17,1.03,0.46C19.92,12.61,20.05,12.86,19.98,13.17z"></path>
                                </svg>

                                <span class="ml-1">1 N</span>
                            </button>

                            <button class="dislike w-[38px] h-[36px] flex items-center justify-center bg-slate-200 cursor-pointer hover:bg-slate-300 rounded-r-full">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                    <path d="M17,4h-1H6.57C5.5,4,4.59,4.67,4.38,5.61l-1.34,6C2.77,12.85,3.82,14,5.23,14h4.23l-1.52,4.94C7.62,19.97,8.46,21,9.62,21 c0.58,0,1.14-0.24,1.52-0.65L17,14h4V4H17z M10.4,19.67C10.21,19.88,9.92,20,9.62,20c-0.26,0-0.5-0.11-0.63-0.3 c-0.07-0.1-0.15-0.26-0.09-0.47l1.52-4.94l0.4-1.29H9.46H5.23c-0.41,0-0.8-0.17-1.03-0.46c-0.12-0.15-0.25-0.4-0.18-0.72l1.34-6 C5.46,5.35,5.97,5,6.57,5H16v8.61L10.4,19.67z M20,13h-3V5h3V13z"></path>
                                </svg>
                            </button>
                        </div>

                        <button class="share-button flex h-[36px] px-1 sm:px-3 space-x-2 rounded-l-full rounded-r-full justify-between items-center bg-slate-200 cursor-pointer hover:bg-slate-300">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                <path d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z"></path>
                            </svg>
                            <span>Chia sẻ</span>
                        </button>

                        <div class="rounded-full main-video-action bg-slate-200 cursor-pointer hover:bg-slate-300 p-[7px] relative">
                            <svg xmlns="http://www.w3.org/2000/svg" class="button-dropdown" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                <path d="M7.5 12c0 .83-.67 1.5-1.5 1.5s-1.5-.67-1.5-1.5.67-1.5 1.5-1.5 1.5.67 1.5 1.5zm4.5-1.5c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5 1.5-.67 1.5-1.5-.67-1.5-1.5-1.5zm6 0c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5 1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z"></path>
                            </svg>

                            <ul class="main-video-action-dropdown dropdown hidden absolute py-1 bg-white w-[200px] right-7 top-10  xl:top-0 xl:left-10 rounded-lg">
                                <li class="flex space-x-1 bg-white p-2 hover:bg-slate-200 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M8 7c0 .55-.45 1-1 1s-1-.45-1-1 .45-1 1-1 1 .45 1 1zm-1 9c-.55 0-1 .45-1 1s.45 1 1 1 1-.45 1-1-.45-1-1-1zm3.79-7.77L21 18.44V20h-3.27l-5.76-5.76-1.27 1.27c.19.46.3.96.3 1.49 0 2.21-1.79 4-4 4s-4-1.79-4-4 1.79-4 4-4c.42 0 .81.08 1.19.2l1.37-1.37-1.11-1.11C8 10.89 7.51 11 7 11c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4c0 .43-.09.84-.21 1.23zm-.71.71-.43-.44.19-.58c.11-.34.16-.64.16-.92 0-1.65-1.35-3-3-3S4 5.35 4 7s1.35 3 3 3c.36 0 .73-.07 1.09-.21l.61-.24.46.46 1.11 1.11.71.71-.71.71-1.37 1.37-.43.43-.58-.18C7.55 14.05 7.27 14 7 14c-1.65 0-3 1.35-3 3s1.35 3 3 3 3-1.35 3-3c0-.38-.07-.75-.22-1.12l-.25-.61.47-.47 1.27-1.27.71-.71.71.71L18.15 19H20v-.15l-9.92-9.91zM17.73 4H21v1.56l-5.52 5.52-2.41-2.41L17.73 4zm.42 1-3.67 3.67 1 1L20 5.15V5h-1.85z"></path>
                                    </svg>
                                    <span>Tạo đoạn video</span>
                                </li>
                                <li class="flex space-x-1 bg-white p-2 hover:bg-slate-200 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z"></path>
                                    </svg>
                                    <span>Lưu</span>
                                </li>
                                <li class="flex space-x-1 bg-white p-2 hover:bg-slate-200 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z"></path>
                                    </svg>
                                    <span>Báo cáo vi phạm</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-description bg-[#f2f2f2] flex flex-col w-100% justify-start p-2 roundpxed-xl">
                <div class="views upload-time flex space-x-1 sm:space-x-3 font-semibold ssm:text-[12px] text-[9px] no-wrap">
                    <span>23.311 lượt xem</span>
                    <span>8 thg 1, 2023</span>
                    <span class="hashtag">#EDM</span>
                    <span class="hashtag">#nhachay</span>
                </div>
                <p class="text-[10px]">
                    Nhạc hay cực cháy <br> <br>
                    <span class="hashtag">#nhacchill</span><br>
                    <span class="hashtag">#nhacchilltiktok</span><br>
                    <span class="hashtag">#bantinhca</span><br><br>

                    ✪ More about Một Bản Tình Ca <br>
                    • Facebook: <a href="https://www.fb.com/H2OMusicc" class="hashtag">https://www.fb.com/H2OMusicc</a> <br> <br>
                    • Email: contact@1991s.vn <br>
                    ------------------------------------------- <br>
                    ✪ Đừng quên Đăng ký (Subscribe) để cập nhật những bản nhạc hot nhất mới nhất hiện nay nhé! <br>
                    ✉ Hợp tác, quảng cáo, khiếu nại các vấn đề về bản quyền liên hệ qua: contact@1991s.vn <br> <br>
                    © Bản quyền Video thuộc về Yêu Lành/H2O Music <br>
                </p>

                <div class="channel-profile flex space-x-2 my-4 items-center">
                    <img src="{{asset('img/avt.jpg')}}" class="rounded-full self-start sm:h-[96px] sm:w-[96px] h-[60px] w-[60px]">
                    <div class="channel-name-follow flex flex-col space-y-1 p-1">
                        <div class="font-bold text-lg sm:text-xl">Một Bản Tình Ca</div>
                        <div class="font-thin text-[14px] sm:text-[18px] text-slate-500">181 N người đăng ký</div>
                    </div>
                </div>
                <div class="flex space-x-3">
                    <div class="flex w-[40%] justify-center items-center border bottom-3 rounded-l-full rounded-r-full cursor-pointer hover:bg-slate-300 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                            <path d="m10 8 6 4-6 4V8zm11-5v18H3V3h18zm-1 1H4v16h16V4z"></path>
                        </svg>
                        <span>Video</span>
                    </div>
                    <div class="flex w-[40%] justify-center items-center border bottom-3 rounded-l-full rounded-r-full cursor-pointer hover:bg-slate-300 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" focusable="false" width="24" height="24">
                            <path d="M3,3v18h18V3H3z M4.99,20c0.39-2.62,2.38-5.1,7.01-5.1s6.62,2.48,7.01,5.1H4.99z M9,10c0-1.65,1.35-3,3-3s3,1.35,3,3 c0,1.65-1.35,3-3,3S9,11.65,9,10z M12.72,13.93C14.58,13.59,16,11.96,16,10c0-2.21-1.79-4-4-4c-2.21,0-4,1.79-4,4 c0,1.96,1.42,3.59,3.28,3.93c-4.42,0.25-6.84,2.8-7.28,6V4h16v15.93C19.56,16.73,17.14,14.18,12.72,13.93z"></path>
                        </svg>
                        <span>Giới thiệu</span>
                    </div>
                </div>
                <span class="hide-video-description hidden font-bold cursor-pointer active:bg-slate-300 inline-block w-[58px]">Ẩn bớt</span>
            </div>
        </div>


        <div class="flex flex-col w-[100%] row-span-2 ">
            <ul class="suggest items-center justify-start no-wrap h-[56px] overflow-x-auto flex">
                <li class="text-white bg-[#0f0f0f] px-4 py-1 rounded-lg mx-1 cursor-pointer whitespace-nowrap">
                    Tất cả
                </li>
                <li class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-1 cursor-pointer whitespace-nowrap">
                    Âm nhạc
                </li>
                <li class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-1 cursor-pointer whitespace-nowrap">
                    Danh sách kết hợp
                </li>
                <li class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-1 cursor-pointer whitespace-nowrap">
                    Trực tiếp
                </li>
                <li class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-1 cursor-pointer whitespace-nowrap">
                    Trò chơi
                </li>
                <li class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-1 cursor-pointer whitespace-nowrap">
                    Tin tức
                </li>
                <li class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-1 cursor-pointer whitespace-nowrap">
                    Toán học
                </li>
                <li class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-1 cursor-pointer whitespace-nowrap">
                    Bóng đá
                </li>
                <li class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-1 cursor-pointer whitespace-nowrap">
                    Đọc rap
                </li>
                <li class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-1 cursor-pointer whitespace-nowrap">
                    Lập trình
                </li>
            </ul>

            <div class="video-suggest flex flex-col space-y-2">
                <div class="video-item col-span-1 flex m-2 space-x-2">
                    <img class="rounded-lg hover:rounded-none cursor-pointer h-[68px] w-[140px] sm:h-[94px] sm:w-[168px]" src="{{asset('img/hq720.webp')}}" alt="" />
                    <div class="group flex w-[100%]">
                        <div class="w-[calc(100%)] cursor-pointer text-[10px] sm:text-[12px]">
                            <div class="line-clamp-2 overflow-hidden mb-1 text-[12px] sm:text-[14px]">
                                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                            </div>
                            <div class="text-[#606060] line-clamp-1">Một Bản Tình Ca</div>
                            <div class="text-[#606060] line-clamp-1">
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
                                    <span class="text-[8px]">Thêm vào danh sách chờ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách xem sau</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách phát</span>
                                </div>
                                <div class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z"></path>
                                    </svg>
                                    <span class="text-[8px]">Chia sẻ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z" fill-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-[8px]">Không quan tâm</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <g>
                                            <path d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z"></path>
                                        </g>
                                    </svg>
                                    <span class="text-[8px]">Không đề xuất kênh này</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z"></path>
                                    </svg>
                                    <span class="text-[8px]">Báo vi phạm</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-item col-span-1 flex m-2 space-x-2">
                    <img class="rounded-lg hover:rounded-none cursor-pointer h-[68px] w-[140px] sm:h-[94px] sm:w-[168px]" src="{{asset('img/hq720.webp')}}" alt="" />
                    <div class="group flex w-[100%]">
                        <div class="w-[calc(100%)] cursor-pointer text-[10px] sm:text-[12px]">
                            <div class="line-clamp-2 overflow-hidden mb-1 text-[12px] sm:text-[14px]">
                                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                            </div>
                            <div class="text-[#606060] line-clamp-1">Một Bản Tình Ca</div>
                            <div class="text-[#606060] line-clamp-1">
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
                                    <span class="text-[8px]">Thêm vào danh sách chờ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách xem sau</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách phát</span>
                                </div>
                                <div class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z"></path>
                                    </svg>
                                    <span class="text-[8px]">Chia sẻ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z" fill-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-[8px]">Không quan tâm</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <g>
                                            <path d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z"></path>
                                        </g>
                                    </svg>
                                    <span class="text-[8px]">Không đề xuất kênh này</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z"></path>
                                    </svg>
                                    <span class="text-[8px]">Báo vi phạm</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-item col-span-1 flex m-2 space-x-2">
                    <img class="rounded-lg hover:rounded-none cursor-pointer h-[68px] w-[140px] sm:h-[94px] sm:w-[168px]" src="{{asset('img/hq720.webp')}}" alt="" />
                    <div class="group flex w-[100%]">
                        <div class="w-[calc(100%)] cursor-pointer text-[10px] sm:text-[12px]">
                            <div class="line-clamp-2 overflow-hidden mb-1 text-[12px] sm:text-[14px]">
                                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                            </div>
                            <div class="text-[#606060] line-clamp-1">Một Bản Tình Ca</div>
                            <div class="text-[#606060] line-clamp-1">
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
                                    <span class="text-[8px]">Thêm vào danh sách chờ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách xem sau</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách phát</span>
                                </div>
                                <div class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z"></path>
                                    </svg>
                                    <span class="text-[8px]">Chia sẻ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z" fill-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-[8px]">Không quan tâm</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <g>
                                            <path d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z"></path>
                                        </g>
                                    </svg>
                                    <span class="text-[8px]">Không đề xuất kênh này</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z"></path>
                                    </svg>
                                    <span class="text-[8px]">Báo vi phạm</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-item col-span-1 flex m-2 space-x-2">
                    <img class="rounded-lg hover:rounded-none cursor-pointer h-[68px] w-[140px] sm:h-[94px] sm:w-[168px]" src="{{asset('img/hq720.webp')}}" alt="" />
                    <div class="group flex w-[100%]">
                        <div class="w-[calc(100%)] cursor-pointer text-[10px] sm:text-[12px]">
                            <div class="line-clamp-2 overflow-hidden mb-1 text-[12px] sm:text-[14px]">
                                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                            </div>
                            <div class="text-[#606060] line-clamp-1">Một Bản Tình Ca</div>
                            <div class="text-[#606060] line-clamp-1">
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
                                    <span class="text-[8px]">Thêm vào danh sách chờ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách xem sau</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách phát</span>
                                </div>
                                <div class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z"></path>
                                    </svg>
                                    <span class="text-[8px]">Chia sẻ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z" fill-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-[8px]">Không quan tâm</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <g>
                                            <path d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z"></path>
                                        </g>
                                    </svg>
                                    <span class="text-[8px]">Không đề xuất kênh này</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z"></path>
                                    </svg>
                                    <span class="text-[8px]">Báo vi phạm</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-item col-span-1 flex m-2 space-x-2">
                    <img class="rounded-lg hover:rounded-none cursor-pointer h-[68px] w-[140px] sm:h-[94px] sm:w-[168px]" src="{{asset('img/hq720.webp')}}" alt="" />
                    <div class="group flex w-[100%]">
                        <div class="w-[calc(100%)] cursor-pointer text-[10px] sm:text-[12px]">
                            <div class="line-clamp-2 overflow-hidden mb-1 text-[12px] sm:text-[14px]">
                                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                            </div>
                            <div class="text-[#606060] line-clamp-1">Một Bản Tình Ca</div>
                            <div class="text-[#606060] line-clamp-1">
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
                                    <span class="text-[8px]">Thêm vào danh sách chờ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách xem sau</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách phát</span>
                                </div>
                                <div class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z"></path>
                                    </svg>
                                    <span class="text-[8px]">Chia sẻ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z" fill-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-[8px]">Không quan tâm</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <g>
                                            <path d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z"></path>
                                        </g>
                                    </svg>
                                    <span class="text-[8px]">Không đề xuất kênh này</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z"></path>
                                    </svg>
                                    <span class="text-[8px]">Báo vi phạm</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-item col-span-1 flex m-2 space-x-2">
                    <img class="rounded-lg hover:rounded-none cursor-pointer h-[68px] w-[140px] sm:h-[94px] sm:w-[168px]" src="{{asset('img/hq720.webp')}}" alt="" />
                    <div class="group flex w-[100%]">
                        <div class="w-[calc(100%)] cursor-pointer text-[10px] sm:text-[12px]">
                            <div class="line-clamp-2 overflow-hidden mb-1 text-[12px] sm:text-[14px]">
                                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                            </div>
                            <div class="text-[#606060] line-clamp-1">Một Bản Tình Ca</div>
                            <div class="text-[#606060] line-clamp-1">
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
                                    <span class="text-[8px]">Thêm vào danh sách chờ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách xem sau</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách phát</span>
                                </div>
                                <div class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z"></path>
                                    </svg>
                                    <span class="text-[8px]">Chia sẻ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z" fill-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-[8px]">Không quan tâm</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <g>
                                            <path d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z"></path>
                                        </g>
                                    </svg>
                                    <span class="text-[8px]">Không đề xuất kênh này</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z"></path>
                                    </svg>
                                    <span class="text-[8px]">Báo vi phạm</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-item col-span-1 flex m-2 space-x-2">
                    <img class="rounded-lg hover:rounded-none cursor-pointer h-[68px] w-[140px] sm:h-[94px] sm:w-[168px]" src="{{asset('img/hq720.webp')}}" alt="" />
                    <div class="group flex w-[100%]">
                        <div class="w-[calc(100%)] cursor-pointer text-[10px] sm:text-[12px]">
                            <div class="line-clamp-2 overflow-hidden mb-1 text-[12px] sm:text-[14px]">
                                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                            </div>
                            <div class="text-[#606060] line-clamp-1">Một Bản Tình Ca</div>
                            <div class="text-[#606060] line-clamp-1">
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
                                    <span class="text-[8px]">Thêm vào danh sách chờ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách xem sau</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách phát</span>
                                </div>
                                <div class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z"></path>
                                    </svg>
                                    <span class="text-[8px]">Chia sẻ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z" fill-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-[8px]">Không quan tâm</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <g>
                                            <path d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z"></path>
                                        </g>
                                    </svg>
                                    <span class="text-[8px]">Không đề xuất kênh này</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z"></path>
                                    </svg>
                                    <span class="text-[8px]">Báo vi phạm</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-item col-span-1 flex m-2 space-x-2">
                    <img class="rounded-lg hover:rounded-none cursor-pointer h-[68px] w-[140px] sm:h-[94px] sm:w-[168px]" src="{{asset('img/hq720.webp')}}" alt="" />
                    <div class="group flex w-[100%]">
                        <div class="w-[calc(100%)] cursor-pointer text-[10px] sm:text-[12px]">
                            <div class="line-clamp-2 overflow-hidden mb-1 text-[12px] sm:text-[14px]">
                                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                            </div>
                            <div class="text-[#606060] line-clamp-1">Một Bản Tình Ca</div>
                            <div class="text-[#606060] line-clamp-1">
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
                                    <span class="text-[8px]">Thêm vào danh sách chờ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách xem sau</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách phát</span>
                                </div>
                                <div class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z"></path>
                                    </svg>
                                    <span class="text-[8px]">Chia sẻ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z" fill-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-[8px]">Không quan tâm</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <g>
                                            <path d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z"></path>
                                        </g>
                                    </svg>
                                    <span class="text-[8px]">Không đề xuất kênh này</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z"></path>
                                    </svg>
                                    <span class="text-[8px]">Báo vi phạm</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-item col-span-1 flex m-2 space-x-2">
                    <img class="rounded-lg hover:rounded-none cursor-pointer h-[68px] w-[140px] sm:h-[94px] sm:w-[168px]" src="{{asset('img/hq720.webp')}}" alt="" />
                    <div class="group flex w-[100%]">
                        <div class="w-[calc(100%)] cursor-pointer text-[10px] sm:text-[12px]">
                            <div class="line-clamp-2 overflow-hidden mb-1 text-[12px] sm:text-[14px]">
                                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                            </div>
                            <div class="text-[#606060] line-clamp-1">Một Bản Tình Ca</div>
                            <div class="text-[#606060] line-clamp-1">
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
                                    <span class="text-[8px]">Thêm vào danh sách chờ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách xem sau</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách phát</span>
                                </div>
                                <div class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z"></path>
                                    </svg>
                                    <span class="text-[8px]">Chia sẻ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z" fill-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-[8px]">Không quan tâm</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <g>
                                            <path d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z"></path>
                                        </g>
                                    </svg>
                                    <span class="text-[8px]">Không đề xuất kênh này</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z"></path>
                                    </svg>
                                    <span class="text-[8px]">Báo vi phạm</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-item col-span-1 flex m-2 space-x-2">
                    <img class="rounded-lg hover:rounded-none cursor-pointer h-[68px] w-[140px] sm:h-[94px] sm:w-[168px]" src="{{asset('img/hq720.webp')}}" alt="" />
                    <div class="group flex w-[100%]">
                        <div class="w-[calc(100%)] cursor-pointer text-[10px] sm:text-[12px]">
                            <div class="line-clamp-2 overflow-hidden mb-1 text-[12px] sm:text-[14px]">
                                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                            </div>
                            <div class="text-[#606060] line-clamp-1">Một Bản Tình Ca</div>
                            <div class="text-[#606060] line-clamp-1">
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
                                    <span class="text-[8px]">Thêm vào danh sách chờ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách xem sau</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách phát</span>
                                </div>
                                <div class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z"></path>
                                    </svg>
                                    <span class="text-[8px]">Chia sẻ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z" fill-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-[8px]">Không quan tâm</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <g>
                                            <path d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z"></path>
                                        </g>
                                    </svg>
                                    <span class="text-[8px]">Không đề xuất kênh này</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z"></path>
                                    </svg>
                                    <span class="text-[8px]">Báo vi phạm</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-item col-span-1 flex m-2 space-x-2">
                    <img class="rounded-lg hover:rounded-none cursor-pointer h-[68px] w-[140px] sm:h-[94px] sm:w-[168px]" src="{{asset('img/hq720.webp')}}" alt="" />
                    <div class="group flex w-[100%]">
                        <div class="w-[calc(100%)] cursor-pointer text-[10px] sm:text-[12px]">
                            <div class="line-clamp-2 overflow-hidden mb-1 text-[12px] sm:text-[14px]">
                                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                            </div>
                            <div class="text-[#606060] line-clamp-1">Một Bản Tình Ca</div>
                            <div class="text-[#606060] line-clamp-1">
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
                                    <span class="text-[8px]">Thêm vào danh sách chờ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách xem sau</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách phát</span>
                                </div>
                                <div class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z"></path>
                                    </svg>
                                    <span class="text-[8px]">Chia sẻ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z" fill-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-[8px]">Không quan tâm</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <g>
                                            <path d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z"></path>
                                        </g>
                                    </svg>
                                    <span class="text-[8px]">Không đề xuất kênh này</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z"></path>
                                    </svg>
                                    <span class="text-[8px]">Báo vi phạm</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-item col-span-1 flex m-2 space-x-2">
                    <img class="rounded-lg hover:rounded-none cursor-pointer h-[68px] w-[140px] sm:h-[94px] sm:w-[168px]" src="{{asset('img/hq720.webp')}}" alt="" />
                    <div class="group flex w-[100%]">
                        <div class="w-[calc(100%)] cursor-pointer text-[10px] sm:text-[12px]">
                            <div class="line-clamp-2 overflow-hidden mb-1 text-[12px] sm:text-[14px]">
                                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                            </div>
                            <div class="text-[#606060] line-clamp-1">Một Bản Tình Ca</div>
                            <div class="text-[#606060] line-clamp-1">
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
                                    <span class="text-[8px]">Thêm vào danh sách chờ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách xem sau</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách phát</span>
                                </div>
                                <div class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z"></path>
                                    </svg>
                                    <span class="text-[8px]">Chia sẻ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z" fill-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-[8px]">Không quan tâm</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <g>
                                            <path d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z"></path>
                                        </g>
                                    </svg>
                                    <span class="text-[8px]">Không đề xuất kênh này</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z"></path>
                                    </svg>
                                    <span class="text-[8px]">Báo vi phạm</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-item col-span-1 flex m-2 space-x-2">
                    <img class="rounded-lg hover:rounded-none cursor-pointer h-[68px] w-[140px] sm:h-[94px] sm:w-[168px]" src="{{asset('img/hq720.webp')}}" alt="" />
                    <div class="group flex w-[100%]">
                        <div class="w-[calc(100%)] cursor-pointer text-[10px] sm:text-[12px]">
                            <div class="line-clamp-2 overflow-hidden mb-1 text-[12px] sm:text-[14px]">
                                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                            </div>
                            <div class="text-[#606060] line-clamp-1">Một Bản Tình Ca</div>
                            <div class="text-[#606060] line-clamp-1">
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
                                    <span class="text-[8px]">Thêm vào danh sách chờ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách xem sau</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách phát</span>
                                </div>
                                <div class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z"></path>
                                    </svg>
                                    <span class="text-[8px]">Chia sẻ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z" fill-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-[8px]">Không quan tâm</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <g>
                                            <path d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z"></path>
                                        </g>
                                    </svg>
                                    <span class="text-[8px]">Không đề xuất kênh này</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z"></path>
                                    </svg>
                                    <span class="text-[8px]">Báo vi phạm</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-item col-span-1 flex m-2 space-x-2">
                    <img class="rounded-lg hover:rounded-none cursor-pointer h-[68px] w-[140px] sm:h-[94px] sm:w-[168px]" src="{{asset('img/hq720.webp')}}" alt="" />
                    <div class="group flex w-[100%]">
                        <div class="w-[calc(100%)] cursor-pointer text-[10px] sm:text-[12px]">
                            <div class="line-clamp-2 overflow-hidden mb-1 text-[12px] sm:text-[14px]">
                                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                            </div>
                            <div class="text-[#606060] line-clamp-1">Một Bản Tình Ca</div>
                            <div class="text-[#606060] line-clamp-1">
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
                                    <span class="text-[8px]">Thêm vào danh sách chờ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách xem sau</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách phát</span>
                                </div>
                                <div class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z"></path>
                                    </svg>
                                    <span class="text-[8px]">Chia sẻ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z" fill-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-[8px]">Không quan tâm</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <g>
                                            <path d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z"></path>
                                        </g>
                                    </svg>
                                    <span class="text-[8px]">Không đề xuất kênh này</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z"></path>
                                    </svg>
                                    <span class="text-[8px]">Báo vi phạm</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-item col-span-1 flex m-2 space-x-2">
                    <img class="rounded-lg hover:rounded-none cursor-pointer h-[68px] w-[140px] sm:h-[94px] sm:w-[168px]" src="{{asset('img/hq720.webp')}}" alt="" />
                    <div class="group flex w-[100%]">
                        <div class="w-[calc(100%)] cursor-pointer text-[10px] sm:text-[12px]">
                            <div class="line-clamp-2 overflow-hidden mb-1 text-[12px] sm:text-[14px]">
                                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                            </div>
                            <div class="text-[#606060] line-clamp-1">Một Bản Tình Ca</div>
                            <div class="text-[#606060] line-clamp-1">
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
                                    <span class="text-[8px]">Thêm vào danh sách chờ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách xem sau</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách phát</span>
                                </div>
                                <div class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z"></path>
                                    </svg>
                                    <span class="text-[8px]">Chia sẻ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z" fill-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-[8px]">Không quan tâm</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <g>
                                            <path d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z"></path>
                                        </g>
                                    </svg>
                                    <span class="text-[8px]">Không đề xuất kênh này</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z"></path>
                                    </svg>
                                    <span class="text-[8px]">Báo vi phạm</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-item col-span-1 flex m-2 space-x-2">
                    <img class="rounded-lg hover:rounded-none cursor-pointer h-[68px] w-[140px] sm:h-[94px] sm:w-[168px]" src="{{asset('img/hq720.webp')}}" alt="" />
                    <div class="group flex w-[100%]">
                        <div class="w-[calc(100%)] cursor-pointer text-[10px] sm:text-[12px]">
                            <div class="line-clamp-2 overflow-hidden mb-1 text-[12px] sm:text-[14px]">
                                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                            </div>
                            <div class="text-[#606060] line-clamp-1">Một Bản Tình Ca</div>
                            <div class="text-[#606060] line-clamp-1">
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
                                    <span class="text-[8px]">Thêm vào danh sách chờ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách xem sau</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách phát</span>
                                </div>
                                <div class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z"></path>
                                    </svg>
                                    <span class="text-[8px]">Chia sẻ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z" fill-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-[8px]">Không quan tâm</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <g>
                                            <path d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z"></path>
                                        </g>
                                    </svg>
                                    <span class="text-[8px]">Không đề xuất kênh này</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z"></path>
                                    </svg>
                                    <span class="text-[8px]">Báo vi phạm</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-item col-span-1 flex m-2 space-x-2">
                    <img class="rounded-lg hover:rounded-none cursor-pointer h-[68px] w-[140px] sm:h-[94px] sm:w-[168px]" src="{{asset('img/hq720.webp')}}" alt="" />
                    <div class="group flex w-[100%]">
                        <div class="w-[calc(100%)] cursor-pointer text-[10px] sm:text-[12px]">
                            <div class="line-clamp-2 overflow-hidden mb-1 text-[12px] sm:text-[14px]">
                                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                            </div>
                            <div class="text-[#606060] line-clamp-1">Một Bản Tình Ca</div>
                            <div class="text-[#606060] line-clamp-1">
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
                                    <span class="text-[8px]">Thêm vào danh sách chờ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách xem sau</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z"></path>
                                    </svg>
                                    <span class="text-[8px]">Lưu vào danh sách phát</span>
                                </div>
                                <div class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z"></path>
                                    </svg>
                                    <span class="text-[8px]">Chia sẻ</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z" fill-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-[8px]">Không quan tâm</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <g>
                                            <path d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z"></path>
                                        </g>
                                    </svg>
                                    <span class="text-[8px]">Không đề xuất kênh này</span>
                                </div>
                                <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z"></path>
                                    </svg>
                                    <span class="text-[8px]">Báo vi phạm</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                
            </div>


        </div>
        <div class="comments-wrapper flex flex-col space-y-4 mt-8">
            <div class="items-center flex space-x-4">
                <span class="text-lg font-bold">22 bình luận</span>
                <span class="relative sort-comment">
                    <div class="button-dropdown flex space-x-1 sm:space-x-2 font-bold items-center cursor-pointer active:bg-slate-200">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                            <path d="M21 6H3V5h18v1zm-6 5H3v1h12v-1zm-6 6H3v1h6v-1z"></path>
                        </svg>
                        <span>Sắp xếp theo</span>
                    </div>

                    <div class="dropdown sort-comment-dropdown absolute bg-white w-[160px] top-[35px] hidden">
                        <div class="p-2 cursor-pointer hover:bg-slate-200 inline-block w-[100%]">Bình luận hàng đầu</div>
                        <div class="p-2 cursor-pointer hover:bg-slate-200 inline-block w-[100%]">Mới nhất xếp trước</div>
                    </div>
                </span>
            </div>

            <div class="write-comment flex w-[100%] space-x-3">
                <img src="{{asset('img\T.jpg')}}" width="40" height="40" class="rounded-full self-start">
                <div class="flex flex-col w-[100%] space-y-2">
                    <input type="text" placeholder="Thêm bình luận..." class="w-[100%] outline-none border-b-2 border-black">
                    <div class="flex justify-between">
                        <div class="emoji hover:bg-slate-200 rounded-full p-1 self-start">
                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                <path d="M15.83 15c-.52 1.38-2.19 2-3.79 2-1.59 0-3.28-.62-3.85-2h7.64m.69-1H7.49c-.27 0-.49.22-.46.47C7.34 16.83 9.7 18 12.05 18c2.35 0 4.69-1.18 4.93-3.54.03-.25-.2-.46-.46-.46zM12 3c4.96 0 9 4.04 9 9s-4.04 9-9 9-9-4.04-9-9 4.04-9 9-9m0-1C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM6.94 9.73C7.19 9.25 7.72 9 8.5 9c.75 0 1.28.25 1.57.75.14.24.45.32.68.18.24-.14.32-.44.18-.68C10.6 8.68 9.91 8 8.5 8c-1.48 0-2.15.69-2.44 1.27-.13.25-.03.55.21.67.07.04.15.06.23.06.18 0 .36-.1.44-.27zm7 0c.25-.48.78-.73 1.56-.73.75 0 1.28.25 1.57.75.14.24.45.32.68.18.24-.14.32-.44.18-.68C17.6 8.68 16.91 8 15.5 8c-1.48 0-2.15.69-2.44 1.27-.13.25-.03.55.21.67.07.04.15.06.23.06.18 0 .36-.1.44-.27z"></path>
                            </svg>
                        </div>

                        <div class="flex space-x-2">
                            <div class="py-1 px-4 cursor-pointer hover:bg-slate-200 rounded-l-full rounded-r-full">Huỷ</div>
                            <div class="py-1 px-4 bg-[#f2f2f2] rounded-l-full rounded-r-full text-[#909090]">Bình luận</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="viewers-comments flex flex-col space-y-4">
                <div class="viewer-comment flex space-x-3">
                    <img src="{{asset('img\T.jpg')}}" width="40" height="40" class="rounded-full self-start">
                    <div class="flex flex-col w-[100%] justify-between space-y-2">
                        <div class="id-time flex space-x-2">
                            <span class="font-bold text-[10px]">@kimnguyen-ou5yy</span>
                            <span class="text-slate-400">3 tuần trước</span>
                        </div>

                        <div class="text-comment">Hay quá anh ơi</div>
                        <div class="flex space-x-2 items-center">
                            <div class="like hover:bg-slate-200 cursor-pointer p-1 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false" class="">
                                    <path d="M18.77,11h-4.23l1.52-4.94C16.38,5.03,15.54,4,14.38,4c-0.58,0-1.14,0.24-1.52,0.65L7,11H3v10h4h1h9.43 c1.06,0,1.98-0.67,2.19-1.61l1.34-6C21.23,12.15,20.18,11,18.77,11z M7,20H4v-8h3V20z M19.98,13.17l-1.34,6 C18.54,19.65,18.03,20,17.43,20H8v-8.61l5.6-6.06C13.79,5.12,14.08,5,14.38,5c0.26,0,0.5,0.11,0.63,0.3 c0.07,0.1,0.15,0.26,0.09,0.47l-1.52,4.94L13.18,12h1.35h4.23c0.41,0,0.8,0.17,1.03,0.46C19.92,12.61,20.05,12.86,19.98,13.17z"></path>
                                </svg>
                            </div>
                            <div class="dislike hover:bg-slate-200 cursor-pointer p-1 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                    <path d="M17,4h-1H6.57C5.5,4,4.59,4.67,4.38,5.61l-1.34,6C2.77,12.85,3.82,14,5.23,14h4.23l-1.52,4.94C7.62,19.97,8.46,21,9.62,21 c0.58,0,1.14-0.24,1.52-0.65L17,14h4V4H17z M10.4,19.67C10.21,19.88,9.92,20,9.62,20c-0.26,0-0.5-0.11-0.63-0.3 c-0.07-0.1-0.15-0.26-0.09-0.47l1.52-4.94l0.4-1.29H9.46H5.23c-0.41,0-0.8-0.17-1.03-0.46c-0.12-0.15-0.25-0.4-0.18-0.72l1.34-6 C5.46,5.35,5.97,5,6.57,5H16v8.61L10.4,19.67z M20,13h-3V5h3V13z"></path>
                                </svg>
                            </div>
                            <div class="response hover:bg-slate-200 cursor-pointer rounded-l-full rounded-r-full py-1 px-3">Phản hồi</div>
                        </div>
                    </div>
                </div>
           
                <div class="viewer-comment flex space-x-3">
                    <img src="{{asset('img\T.jpg')}}" width="40" height="40" class="rounded-full self-start">
                    <div class="flex flex-col w-[100%] justify-between space-y-2">
                        <div class="id-time flex space-x-2 items-center">
                            <span class="font-bold text-[10px]">@kimnguyen-ou5yy</span>
                            <span class="text-slate-400">3 tuần trước</span>
                        </div>
                        <div class="text-comment">Hay quá anh ơi</div>
                        <div class="flex space-x-2 items-center">
                            <div class="like hover:bg-slate-200 cursor-pointer p-1 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false" class="">
                                    <path d="M18.77,11h-4.23l1.52-4.94C16.38,5.03,15.54,4,14.38,4c-0.58,0-1.14,0.24-1.52,0.65L7,11H3v10h4h1h9.43 c1.06,0,1.98-0.67,2.19-1.61l1.34-6C21.23,12.15,20.18,11,18.77,11z M7,20H4v-8h3V20z M19.98,13.17l-1.34,6 C18.54,19.65,18.03,20,17.43,20H8v-8.61l5.6-6.06C13.79,5.12,14.08,5,14.38,5c0.26,0,0.5,0.11,0.63,0.3 c0.07,0.1,0.15,0.26,0.09,0.47l-1.52,4.94L13.18,12h1.35h4.23c0.41,0,0.8,0.17,1.03,0.46C19.92,12.61,20.05,12.86,19.98,13.17z"></path>
                                </svg>
                            </div>
                            <div class="dislike hover:bg-slate-200 cursor-pointer p-1 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                    <path d="M17,4h-1H6.57C5.5,4,4.59,4.67,4.38,5.61l-1.34,6C2.77,12.85,3.82,14,5.23,14h4.23l-1.52,4.94C7.62,19.97,8.46,21,9.62,21 c0.58,0,1.14-0.24,1.52-0.65L17,14h4V4H17z M10.4,19.67C10.21,19.88,9.92,20,9.62,20c-0.26,0-0.5-0.11-0.63-0.3 c-0.07-0.1-0.15-0.26-0.09-0.47l1.52-4.94l0.4-1.29H9.46H5.23c-0.41,0-0.8-0.17-1.03-0.46c-0.12-0.15-0.25-0.4-0.18-0.72l1.34-6 C5.46,5.35,5.97,5,6.57,5H16v8.61L10.4,19.67z M20,13h-3V5h3V13z"></path>
                                </svg>
                            </div>
                            <div class="response hover:bg-slate-200 cursor-pointer rounded-l-full rounded-r-full py-1 px-3">Phản hồi</div>
                        </div>
                    </div>
                </div>
           
                <div class="viewer-comment flex space-x-3">
                    <img src="{{asset('img\T.jpg')}}" width="40" height="40" class="rounded-full self-start">
                    <div class="flex flex-col w-[100%] justify-between space-y-2">
                        <div class="id-time flex space-x-2">
                            <span class="font-bold text-[10px]">@kimnguyen-ou5yy</span>
                            <span class="text-slate-400">3 tuần trước</span>
                        </div>

                        <div class="text-comment">Hay quá anh ơi</div>
                        <div class="flex space-x-2 items-center">
                            <div class="like hover:bg-slate-200 cursor-pointer p-1 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false" class="">
                                    <path d="M18.77,11h-4.23l1.52-4.94C16.38,5.03,15.54,4,14.38,4c-0.58,0-1.14,0.24-1.52,0.65L7,11H3v10h4h1h9.43 c1.06,0,1.98-0.67,2.19-1.61l1.34-6C21.23,12.15,20.18,11,18.77,11z M7,20H4v-8h3V20z M19.98,13.17l-1.34,6 C18.54,19.65,18.03,20,17.43,20H8v-8.61l5.6-6.06C13.79,5.12,14.08,5,14.38,5c0.26,0,0.5,0.11,0.63,0.3 c0.07,0.1,0.15,0.26,0.09,0.47l-1.52,4.94L13.18,12h1.35h4.23c0.41,0,0.8,0.17,1.03,0.46C19.92,12.61,20.05,12.86,19.98,13.17z"></path>
                                </svg>
                            </div>
                            <div class="dislike hover:bg-slate-200 cursor-pointer p-1 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                    <path d="M17,4h-1H6.57C5.5,4,4.59,4.67,4.38,5.61l-1.34,6C2.77,12.85,3.82,14,5.23,14h4.23l-1.52,4.94C7.62,19.97,8.46,21,9.62,21 c0.58,0,1.14-0.24,1.52-0.65L17,14h4V4H17z M10.4,19.67C10.21,19.88,9.92,20,9.62,20c-0.26,0-0.5-0.11-0.63-0.3 c-0.07-0.1-0.15-0.26-0.09-0.47l1.52-4.94l0.4-1.29H9.46H5.23c-0.41,0-0.8-0.17-1.03-0.46c-0.12-0.15-0.25-0.4-0.18-0.72l1.34-6 C5.46,5.35,5.97,5,6.57,5H16v8.61L10.4,19.67z M20,13h-3V5h3V13z"></path>
                                </svg>
                            </div>
                            <div class="response hover:bg-slate-200 cursor-pointer rounded-l-full rounded-r-full py-1 px-3">Phản hồi</div>
                        </div>
                    </div>
                </div>
           
            </div>
        </div>
    </div>
</div>