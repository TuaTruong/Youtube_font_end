<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('font/themify-icons.css')}}" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet" />
    <style>
        * {
            box-sizing: border-box;
            font-family: "Inter", sans-serif;
        }

        .sidebar-wrapper::-webkit-scrollbar,
        .notification-scroll::-webkit-scrollbar {
            height: 5px;
            width: 10px;
            background-color: lightgrey;
        }

        .sidebar-wrapper::-webkit-scrollbar-thumb,
        .notification-scroll::-webkit-scrollbar-thumb {
            background-color: grey;
            border-radius: 10px;
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

        .dropdown {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            z-index: 1;
        }

        .main-grid {
            grid-template-columns: 3fr 1fr;
        }
    </style>
    <title>Youtube</title>
</head>

<body class="h-screen">
    <!-- HEADER  -->
    <div class="header-wrapper fixed w-[100%] h-[62px] px-2 py-2 bg-white z-10 mr-1">
        @include("header")
    </div>
    <!-- END HEADER  -->


    <div class="content-wrapper w-[100%] mt-[80px]" style="display: inline-block">
        <div class="flex w-[100%] px-[20px]">
            <div class="main-grid grid grid-rows-2">
                <div class="video-details flex flex-col">
                    <img class="w-[100%] h-auto" src="{{asset('img/video.png')}}" alt="">
                    <div class="video-description">
                        <div class="video-name font-bold my-2">Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu Nhau.. Playlist Lofi Chill Hay Hot Tiktok</div>
                        <div class="author-info flex justify-between items-center">
                            <div class="author-profile flex justify-between space-x-2">
                                <img src="{{asset('img/avt.jpg')}}" width="48" height="48" class="rounded-full self-start">
                                <div class="author-name-follow flex flex-col space-y-1 p-1">
                                    <div class="font-bold">Bản tình ca</div>
                                    <div class="font-thin text-[12px] text-slate-500">181 N người đăng ký</div>
                                </div>
                                <div class="cursor-pointer hover:bg-slate-700 text-white bg-black font-bold rounded-[30px] py-2 px-3 self-center">Đăng ký</div>
                            </div>

                            <div class="reactions flex justify-between items-center">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div>Tuan</div>
                <div>Tuan</div>
            </div>
        </div>
    </div>

    <!-- <script src="{{asset('javascript/main.js')}}"></script> -->
</body>

</html>