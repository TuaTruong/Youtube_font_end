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
            grid-template-columns: 1fr 400px;
        }

        .like::after {
            position: absolute;
            content: "";
            height: 70%;
            right: 0;
            background: #000;
            width: 1px;
        }

        .hashtag {
            color: #186bd6;
            cursor: pointer;
        }
        .video-details{
            
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
            <div class="main-grid grid grid-rows-2 w-[100%] gap-4">
                <div class="video-details flex flex-col space-y-2">
                    <img class="w-[100%] h-auto" src="{{asset('img/video.png')}}" alt="">
                    <div class="channel-description">
                        <div class="video-name font-bold my-2">Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu Nhau.. Playlist Lofi Chill Hay Hot Tiktok</div>
                        <div class="channel-info flex justify-between items-center">
                            <div class="channel-profile flex justify-between space-x-2">
                                <img src="{{asset('img/avt.jpg')}}" width="48" height="48" class="rounded-full self-start">
                                <div class="channel-name-follow flex flex-col space-y-1 p-1">
                                    <div class="font-bold">Bản tình ca</div>
                                    <div class="font-thin text-[12px] text-slate-500">181 N người đăng ký</div>
                                </div>
                                <div class="cursor-pointer hover:bg-slate-700 text-white bg-black font-bold rounded-[30px] py-2 px-3 self-center">Đăng ký</div>
                            </div>

                            <div class="reactions flex justify-between items-center space-x-2">
                                <div class="like-dislike flex">
                                    <div class="like flex items-center bg-slate-200 pr-3 rounded-l-full w-[91px] h-[36px] cursor-pointer hover:bg-slate-300 relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 270" width="60" height="60" preserveAspectRatio="xMidYMid meet">
                                            <g clip-path="url(#__lottie_element_330)">
                                                <g clip-path="url(#__lottie_element_346)" style="display: none;" transform="matrix(2.7880001068115234,0,0,2.7880001068115234,-48.0780029296875,-51.58800506591797)" opacity="1">
                                                    <g style="display: block;" transform="matrix(0.4056888222694397,0.10870399326086044,-0.10870399326086044,0.4056888222694397,63.819969177246094,55.32201385498047)" opacity="1">
                                                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                            <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(255,78,69)" stroke-opacity="1" stroke-width="5" d="M0 0"></path>
                                                        </g>
                                                    </g>
                                                    <g style="display: block;" transform="matrix(0.6260144710540771,0.13306348025798798,-0.13306348025798798,0.6260144710540771,63.75,70.5)" opacity="1">
                                                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                            <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(0,229,190)" stroke-opacity="1" stroke-width="3" d="M0 0"></path>
                                                        </g>
                                                    </g>
                                                    <g style="display: none;" transform="matrix(1,0,0,1,91,46.25)" opacity="0.003244349980666641">
                                                        <g opacity="1" transform="matrix(0.17499999701976776,-0.30310890078544617,0.30310890078544617,0.17499999701976776,-5.455959796905518,-3.1499998569488525)">
                                                            <path fill="rgb(54,0,140)" fill-opacity="1" d=" M0,-3 C1.6556999683380127,-3 3,-1.6556999683380127 3,0 C3,1.6556999683380127 1.6556999683380127,3 0,3 C-1.6556999683380127,3 -3,1.6556999683380127 -3,0 C-3,-1.6556999683380127 -1.6556999683380127,-3 0,-3z"></path>
                                                        </g>
                                                        <g opacity="1" transform="matrix(-0.17499999701976776,-0.30310890078544617,0.30310890078544617,-0.17499999701976776,-5.455959796905518,3.1499998569488525)">
                                                            <path fill="rgb(54,0,140)" fill-opacity="1" d=" M0,-3 C1.6556999683380127,-3 3,-1.6556999683380127 3,0 C3,1.6556999683380127 1.6556999683380127,3 0,3 C-1.6556999683380127,3 -3,1.6556999683380127 -3,0 C-3,-1.6556999683380127 -1.6556999683380127,-3 0,-3z"></path>
                                                        </g>
                                                        <g opacity="1" transform="matrix(-0.3499999940395355,0,0,-0.3499999940395355,0,6.299999713897705)">
                                                            <path fill="rgb(54,0,140)" fill-opacity="1" d=" M0,-3 C1.6556999683380127,-3 3,-1.6556999683380127 3,0 C3,1.6556999683380127 1.6556999683380127,3 0,3 C-1.6556999683380127,3 -3,1.6556999683380127 -3,0 C-3,-1.6556999683380127 -1.6556999683380127,-3 0,-3z"></path>
                                                        </g>
                                                        <g opacity="1" transform="matrix(-0.17499999701976776,0.30310890078544617,-0.30310890078544617,-0.17499999701976776,5.455959796905518,3.1499998569488525)">
                                                            <path fill="rgb(54,0,140)" fill-opacity="1" d=" M0,-3 C1.6556999683380127,-3 3,-1.6556999683380127 3,0 C3,1.6556999683380127 1.6556999683380127,3 0,3 C-1.6556999683380127,3 -3,1.6556999683380127 -3,0 C-3,-1.6556999683380127 -1.6556999683380127,-3 0,-3z"></path>
                                                        </g>
                                                        <g opacity="1" transform="matrix(0.17499999701976776,0.30310890078544617,-0.30310890078544617,0.17499999701976776,5.455959796905518,-3.1499998569488525)">
                                                            <path fill="rgb(54,0,140)" fill-opacity="1" d=" M0,-3 C1.6556999683380127,-3 3,-1.6556999683380127 3,0 C3,1.6556999683380127 1.6556999683380127,3 0,3 C-1.6556999683380127,3 -3,1.6556999683380127 -3,0 C-3,-1.6556999683380127 -1.6556999683380127,-3 0,-3z"></path>
                                                        </g>
                                                        <g opacity="1" transform="matrix(0.3499999940395355,0,0,0.3499999940395355,0,-6.299999713897705)">
                                                            <path fill="rgb(54,0,140)" fill-opacity="1" d=" M0,-3 C1.6556999683380127,-3 3,-1.6556999683380127 3,0 C3,1.6556999683380127 1.6556999683380127,3 0,3 C-1.6556999683380127,3 -3,1.6556999683380127 -3,0 C-3,-1.6556999683380127 -1.6556999683380127,-3 0,-3z"></path>
                                                        </g>
                                                    </g>
                                                    <g style="display: block;" transform="matrix(0.6156615018844604,0.7880107760429382,-0.7880107760429382,0.6156615018844604,60.8013916015625,70.60517120361328)" opacity="1">
                                                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                            <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(0,229,190)" stroke-opacity="1" stroke-width="4" d="M0 0"></path>
                                                        </g>
                                                    </g>
                                                    <g style="display: block;" transform="matrix(-0.3420201539993286,0.9396926164627075,-0.9396926164627075,-0.3420201539993286,57.86277770996094,63.6497688293457)" opacity="1">
                                                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                            <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(255,78,69)" stroke-opacity="1" stroke-width="4" d="M0 0"></path>
                                                        </g>
                                                    </g>
                                                    <g style="display: none;" transform="matrix(1,0,0,1,39.875,92.75)" opacity="0.0026322470617240867">
                                                        <g opacity="1" transform="matrix(0.17499999701976776,-0.30310890078544617,0.30310890078544617,0.17499999701976776,-5.455959796905518,-3.1499998569488525)">
                                                            <path fill="rgb(0,229,190)" fill-opacity="1" d=" M0,-3 C1.6556999683380127,-3 3,-1.6556999683380127 3,0 C3,1.6556999683380127 1.6556999683380127,3 0,3 C-1.6556999683380127,3 -3,1.6556999683380127 -3,0 C-3,-1.6556999683380127 -1.6556999683380127,-3 0,-3z"></path>
                                                        </g>
                                                        <g opacity="1" transform="matrix(-0.17499999701976776,-0.30310890078544617,0.30310890078544617,-0.17499999701976776,-5.455959796905518,3.1499998569488525)">
                                                            <path fill="rgb(0,229,190)" fill-opacity="1" d=" M0,-3 C1.6556999683380127,-3 3,-1.6556999683380127 3,0 C3,1.6556999683380127 1.6556999683380127,3 0,3 C-1.6556999683380127,3 -3,1.6556999683380127 -3,0 C-3,-1.6556999683380127 -1.6556999683380127,-3 0,-3z"></path>
                                                        </g>
                                                        <g opacity="1" transform="matrix(-0.3499999940395355,0,0,-0.3499999940395355,0,6.299999713897705)">
                                                            <path fill="rgb(0,229,190)" fill-opacity="1" d=" M0,-3 C1.6556999683380127,-3 3,-1.6556999683380127 3,0 C3,1.6556999683380127 1.6556999683380127,3 0,3 C-1.6556999683380127,3 -3,1.6556999683380127 -3,0 C-3,-1.6556999683380127 -1.6556999683380127,-3 0,-3z"></path>
                                                        </g>
                                                        <g opacity="1" transform="matrix(-0.17499999701976776,0.30310890078544617,-0.30310890078544617,-0.17499999701976776,5.455959796905518,3.1499998569488525)">
                                                            <path fill="rgb(0,229,190)" fill-opacity="1" d=" M0,-3 C1.6556999683380127,-3 3,-1.6556999683380127 3,0 C3,1.6556999683380127 1.6556999683380127,3 0,3 C-1.6556999683380127,3 -3,1.6556999683380127 -3,0 C-3,-1.6556999683380127 -1.6556999683380127,-3 0,-3z"></path>
                                                        </g>
                                                        <g opacity="1" transform="matrix(0.17499999701976776,0.30310890078544617,-0.30310890078544617,0.17499999701976776,5.455959796905518,-3.1499998569488525)">
                                                            <path fill="rgb(0,229,190)" fill-opacity="1" d=" M0,-3 C1.6556999683380127,-3 3,-1.6556999683380127 3,0 C3,1.6556999683380127 1.6556999683380127,3 0,3 C-1.6556999683380127,3 -3,1.6556999683380127 -3,0 C-3,-1.6556999683380127 -1.6556999683380127,-3 0,-3z"></path>
                                                        </g>
                                                        <g opacity="1" transform="matrix(0.3499999940395355,0,0,0.3499999940395355,0,-6.299999713897705)">
                                                            <path fill="rgb(0,229,190)" fill-opacity="1" d=" M0,-3 C1.6556999683380127,-3 3,-1.6556999683380127 3,0 C3,1.6556999683380127 1.6556999683380127,3 0,3 C-1.6556999683380127,3 -3,1.6556999683380127 -3,0 C-3,-1.6556999683380127 -1.6556999683380127,-3 0,-3z"></path>
                                                        </g>
                                                    </g>
                                                    <g style="display: block;" transform="matrix(-0.882947564125061,-0.4694715738296509,0.4694715738296509,-0.882947564125061,54.99470138549805,66.93231201171875)" opacity="1">
                                                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                            <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(54,0,140)" stroke-opacity="1" stroke-width="4" d="M0 0"></path>
                                                        </g>
                                                    </g>
                                                    <g style="display: block;" transform="matrix(-0.24192190170288086,-0.9702957272529602,0.9702957272529602,-0.24192190170288086,65.31019592285156,68.61397552490234)" opacity="1">
                                                        <g opacity="1" transform="matrix(1,0,0,1,-1,0)">
                                                            <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(0,229,190)" stroke-opacity="1" stroke-width="3" d="M0 0"></path>
                                                        </g>
                                                    </g>
                                                    <g style="display: none;" transform="matrix(1,0,0,1,36.0620002746582,47.1879997253418)" opacity="0.0035738173766607416">
                                                        <g opacity="1" transform="matrix(0.2681155502796173,-0.22497566044330597,0.22497566044330597,0.2681155502796173,-4.499513149261475,-5.362310886383057)">
                                                            <path fill="rgb(255,78,69)" fill-opacity="1" d=" M0,-3 C1.6556999683380127,-3 3,-1.6556999683380127 3,0 C3,1.6556999683380127 1.6556999683380127,3 0,3 C-1.6556999683380127,3 -3,1.6556999683380127 -3,0 C-3,-1.6556999683380127 -1.6556999683380127,-3 0,-3z"></path>
                                                        </g>
                                                        <g opacity="1" transform="matrix(0.060776859521865845,-0.3446826934814453,0.3446826934814453,0.060776859521865845,-6.8936543464660645,-1.215537190437317)">
                                                            <path fill="rgb(255,78,69)" fill-opacity="1" d=" M0,-3 C1.6556999683380127,-3 3,-1.6556999683380127 3,0 C3,1.6556999683380127 1.6556999683380127,3 0,3 C-1.6556999683380127,3 -3,1.6556999683380127 -3,0 C-3,-1.6556999683380127 -1.6556999683380127,-3 0,-3z"></path>
                                                        </g>
                                                        <g opacity="1" transform="matrix(-0.17499999701976776,-0.30310890078544617,0.30310890078544617,-0.17499999701976776,-6.062177658081055,3.5)">
                                                            <path fill="rgb(255,78,69)" fill-opacity="1" d=" M0,-3 C1.6556999683380127,-3 3,-1.6556999683380127 3,0 C3,1.6556999683380127 1.6556999683380127,3 0,3 C-1.6556999683380127,3 -3,1.6556999683380127 -3,0 C-3,-1.6556999683380127 -1.6556999683380127,-3 0,-3z"></path>
                                                        </g>
                                                        <g opacity="1" transform="matrix(-0.32889240980148315,-0.11970704793930054,0.11970704793930054,-0.32889240980148315,-2.3941409587860107,6.577848434448242)">
                                                            <path fill="rgb(255,78,69)" fill-opacity="1" d=" M0,-3 C1.6556999683380127,-3 3,-1.6556999683380127 3,0 C3,1.6556999683380127 1.6556999683380127,3 0,3 C-1.6556999683380127,3 -3,1.6556999683380127 -3,0 C-3,-1.6556999683380127 -1.6556999683380127,-3 0,-3z"></path>
                                                        </g>
                                                        <g opacity="1" transform="matrix(-0.32889240980148315,0.11970704793930054,-0.11970704793930054,-0.32889240980148315,2.3941409587860107,6.577848434448242)">
                                                            <path fill="rgb(255,78,69)" fill-opacity="1" d=" M0,-3 C1.6556999683380127,-3 3,-1.6556999683380127 3,0 C3,1.6556999683380127 1.6556999683380127,3 0,3 C-1.6556999683380127,3 -3,1.6556999683380127 -3,0 C-3,-1.6556999683380127 -1.6556999683380127,-3 0,-3z"></path>
                                                        </g>
                                                        <g opacity="1" transform="matrix(-0.17499999701976776,0.30310890078544617,-0.30310890078544617,-0.17499999701976776,6.062177658081055,3.5)">
                                                            <path fill="rgb(255,78,69)" fill-opacity="1" d=" M0,-3 C1.6556999683380127,-3 3,-1.6556999683380127 3,0 C3,1.6556999683380127 1.6556999683380127,3 0,3 C-1.6556999683380127,3 -3,1.6556999683380127 -3,0 C-3,-1.6556999683380127 -1.6556999683380127,-3 0,-3z"></path>
                                                        </g>
                                                        <g opacity="1" transform="matrix(0.060776859521865845,0.3446826934814453,-0.3446826934814453,0.060776859521865845,6.8936543464660645,-1.215537190437317)">
                                                            <path fill="rgb(255,78,69)" fill-opacity="1" d=" M0,-3 C1.6556999683380127,-3 3,-1.6556999683380127 3,0 C3,1.6556999683380127 1.6556999683380127,3 0,3 C-1.6556999683380127,3 -3,1.6556999683380127 -3,0 C-3,-1.6556999683380127 -1.6556999683380127,-3 0,-3z"></path>
                                                        </g>
                                                        <g opacity="1" transform="matrix(0.2681155502796173,0.22497566044330597,-0.22497566044330597,0.2681155502796173,4.499513149261475,-5.362310886383057)">
                                                            <path fill="rgb(255,78,69)" fill-opacity="1" d=" M0,-3 C1.6556999683380127,-3 3,-1.6556999683380127 3,0 C3,1.6556999683380127 1.6556999683380127,3 0,3 C-1.6556999683380127,3 -3,1.6556999683380127 -3,0 C-3,-1.6556999683380127 -1.6556999683380127,-3 0,-3z"></path>
                                                        </g>
                                                        <g opacity="1" transform="matrix(0.3499999940395355,0,0,0.3499999940395355,0,-7)">
                                                            <path fill="rgb(255,78,69)" fill-opacity="1" d=" M0,-3 C1.6556999683380127,-3 3,-1.6556999683380127 3,0 C3,1.6556999683380127 1.6556999683380127,3 0,3 C-1.6556999683380127,3 -3,1.6556999683380127 -3,0 C-3,-1.6556999683380127 -1.6556999683380127,-3 0,-3z"></path>
                                                        </g>
                                                    </g>
                                                    <g style="display: block;" transform="matrix(0.8660253882408142,-0.5,0.5,0.8660253882408142,59.2075309753418,70.43893432617188)" opacity="1">
                                                        <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                            <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(229,229,44)" stroke-opacity="1" stroke-width="6" d="M0 0"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g clip-path="url(#__lottie_element_332)" transform="matrix(1.0880000591278076,0,0,1.0880000591278076,69.95299530029297,67.9433822631836)" opacity="1" style="display: block;">
                                                    <g style="display: none;" transform="matrix(1,0,0,1,60,60)" opacity="1">
                                                        <path fill="rgb(0,0,0)" fill-opacity="1" d=" M25.025999069213867,-4.00600004196167 C25.025999069213867,-4.00600004196167 5.992000102996826,-3.996999979019165 5.992000102996826,-3.996999979019165 C5.992000102996826,-3.996999979019165 11.012999534606934,-22.983999252319336 11.012999534606934,-22.983999252319336 C12.230999946594238,-26.90399932861328 13,-31.94300079345703 8.994000434875488,-31.981000900268555 C7,-32 5,-32 4.021999835968018,-31.007999420166016 C4.021999835968018,-31.007999420166016 -19.993000030517578,-5.03000020980835 -19.993000030517578,-5.03000020980835 C-19.993000030517578,-5.03000020980835 -20.027999877929688,32.025001525878906 -20.027999877929688,32.025001525878906 C-20.027999877929688,32.025001525878906 20.97599983215332,31.986000061035156 20.97599983215332,31.986000061035156 C25.010000228881836,31.986000061035156 26.198999404907227,29.562000274658203 26.99799919128418,25.985000610351562 C26.99799919128418,25.985000610351562 31.972000122070312,4.026000022888184 31.972000122070312,4.026000022888184 C33,-0.6930000185966492 30.392000198364258,-4.00600004196167 25.025999069213867,-4.00600004196167z"></path>
                                                        <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="4" d=" M25.025999069213867,-4.00600004196167 C25.025999069213867,-4.00600004196167 5.992000102996826,-3.996999979019165 5.992000102996826,-3.996999979019165 C5.992000102996826,-3.996999979019165 11.012999534606934,-22.983999252319336 11.012999534606934,-22.983999252319336 C12.230999946594238,-26.90399932861328 13,-31.94300079345703 8.994000434875488,-31.981000900268555 C7,-32 5,-32 4.021999835968018,-31.007999420166016 C4.021999835968018,-31.007999420166016 -19.993000030517578,-5.03000020980835 -19.993000030517578,-5.03000020980835 C-19.993000030517578,-5.03000020980835 -20.027999877929688,32.025001525878906 -20.027999877929688,32.025001525878906 C-20.027999877929688,32.025001525878906 20.97599983215332,31.986000061035156 20.97599983215332,31.986000061035156 C25.010000228881836,31.986000061035156 26.198999404907227,29.562000274658203 26.99799919128418,25.985000610351562 C26.99799919128418,25.985000610351562 31.972000122070312,4.026000022888184 31.972000122070312,4.026000022888184 C33,-0.6930000185966492 30.392000198364258,-4.00600004196167 25.025999069213867,-4.00600004196167z"></path>
                                                    </g>
                                                    <g transform="matrix(1,0,0,1,60,60)" opacity="1" style="display: block;">
                                                        <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="4" d=" M25.025999069213867,-4.00600004196167 C25.025999069213867,-4.00600004196167 5.992000102996826,-3.996999979019165 5.992000102996826,-3.996999979019165 C5.992000102996826,-3.996999979019165 11.012999534606934,-22.983999252319336 11.012999534606934,-22.983999252319336 C12.230999946594238,-26.90399932861328 13,-31.94300079345703 8.994000434875488,-31.981000900268555 C7,-32 5,-32 4.021999835968018,-31.007999420166016 C4.021999835968018,-31.007999420166016 -19.993000030517578,-5.03000020980835 -19.993000030517578,-5.03000020980835 C-19.993000030517578,-5.03000020980835 -20.027999877929688,32.025001525878906 -20.027999877929688,32.025001525878906 C-20.027999877929688,32.025001525878906 20.97599983215332,31.986000061035156 20.97599983215332,31.986000061035156 C25.010000228881836,31.986000061035156 26.198999404907227,29.562000274658203 26.99799919128418,25.985000610351562 C26.99799919128418,25.985000610351562 31.972000122070312,4.026000022888184 31.972000122070312,4.026000022888184 C33,-0.6930000185966492 30.392000198364258,-4.00600004196167 25.025999069213867,-4.00600004196167z"></path>
                                                    </g>
                                                    <g style="display: none;" transform="matrix(1,0,0,1,60,60)" opacity="1">
                                                        <path fill="rgb(0,0,0)" fill-opacity="1" d=" M-27.993000030517578,-4.015999794006348 C-27.993000030517578,-4.015999794006348 -36.02799987792969,-3.996999979019165 -36.02799987792969,-3.996999979019165 C-36.02799987792969,-3.996999979019165 -36,31.9950008392334 -36,31.9950008392334 C-36,31.9950008392334 -28.027999877929688,31.976999282836914 -28.027999877929688,31.976999282836914 C-28.027999877929688,31.976999282836914 -27.993000030517578,-4.015999794006348 -27.993000030517578,-4.015999794006348z"></path>
                                                        <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="4" d=" M-27.993000030517578,-4.015999794006348 C-27.993000030517578,-4.015999794006348 -36.02799987792969,-3.996999979019165 -36.02799987792969,-3.996999979019165 C-36.02799987792969,-3.996999979019165 -36,31.9950008392334 -36,31.9950008392334 C-36,31.9950008392334 -28.027999877929688,31.976999282836914 -28.027999877929688,31.976999282836914 C-28.027999877929688,31.976999282836914 -27.993000030517578,-4.015999794006348 -27.993000030517578,-4.015999794006348z"></path>
                                                    </g>
                                                    <g transform="matrix(1,0,0,1,60,60)" opacity="1" style="display: block;">
                                                        <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(0,0,0)" stroke-opacity="1" stroke-width="4" d=" M-19.986000061035156,-4.03000020980835 C-19.986000061035156,-4.03000020980835 -36.020999908447266,-3.996999979019165 -36.020999908447266,-3.996999979019165 C-36.020999908447266,-3.996999979019165 -36.00199890136719,31.993000030517578 -36.00199890136719,31.993000030517578 C-36.00199890136719,31.993000030517578 -20.030000686645508,32.02299880981445 -20.030000686645508,32.02299880981445 C-20.030000686645508,32.02299880981445 -19.986000061035156,-4.03000020980835 -19.986000061035156,-4.03000020980835z"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>

                                        <span>Thích</span>
                                    </div>

                                    <div class="dislike w-[41px] h-[36px] flex items-center justify-center bg-slate-200 cursor-pointer hover:bg-slate-300 rounded-r-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                            <path d="M17,4h-1H6.57C5.5,4,4.59,4.67,4.38,5.61l-1.34,6C2.77,12.85,3.82,14,5.23,14h4.23l-1.52,4.94C7.62,19.97,8.46,21,9.62,21 c0.58,0,1.14-0.24,1.52-0.65L17,14h4V4H17z M10.4,19.67C10.21,19.88,9.92,20,9.62,20c-0.26,0-0.5-0.11-0.63-0.3 c-0.07-0.1-0.15-0.26-0.09-0.47l1.52-4.94l0.4-1.29H9.46H5.23c-0.41,0-0.8-0.17-1.03-0.46c-0.12-0.15-0.25-0.4-0.18-0.72l1.34-6 C5.46,5.35,5.97,5,6.57,5H16v8.61L10.4,19.67z M20,13h-3V5h3V13z"></path>
                                        </svg>
                                    </div>
                                </div>

                                <div class="share-button flex h-[36px] px-3 space-x-2 rounded-l-full rounded-r-full justify-between items-center bg-slate-200 cursor-pointer hover:bg-slate-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z"></path>
                                    </svg>
                                    <span>Chia sẻ</span>
                                </div>

                                <div class="rounded-full bg-slate-200 cursor-pointer hover:bg-slate-300 p-[7px]">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                        <path d="M7.5 12c0 .83-.67 1.5-1.5 1.5s-1.5-.67-1.5-1.5.67-1.5 1.5-1.5 1.5.67 1.5 1.5zm4.5-1.5c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5 1.5-.67 1.5-1.5-.67-1.5-1.5-1.5zm6 0c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5 1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="video-description bg-[#f2f2f2] flex flex-col w-100% justify-start p-2 rounded-xl">
                        <div class="views upload-time flex space-x-3 font-bold">
                            <span>233.110 lượt xem</span>
                            <span>28 thg 11, 2023</span>
                            <span class="hashtag">#EDM</span>
                            <span class="hashtag">#nhachay</span>
                        </div>
                        <p>
                            Nhạc hay cực cháy <br> <br>
                            <span class="hashtag">#nhacchill</span><br>
                            <span class="hashtag">#nhacchilltiktok</span><br>
                            <span class="hashtag">#bantinhca</span><br><br>

                            ✪ More about Bản Tình Ca <br>
                            • Facebook: <a href="https://www.fb.com/H2OMusicc" class="hashtag">https://www.fb.com/H2OMusicc</a> <br> <br>
                            • Email: contact@1991s.vn <br>
                            ------------------------------------------- <br>
                            ✪ Đừng quên Đăng ký (Subscribe) để cập nhật những bản nhạc hot nhất mới nhất hiện nay nhé! <br>
                            ✉ Hợp tác, quảng cáo, khiếu nại các vấn đề về bản quyền liên hệ qua: contact@1991s.vn <br> <br>
                            © Bản quyền Video thuộc về Yêu Lành/H2O Music <br>
                        </p>

                        <div class="channel-profile flex space-x-2 my-4 items-center">
                            <img src="{{asset('img/avt.jpg')}}" width="96" height="96" class="rounded-full self-start">
                            <div class="channel-name-follow flex flex-col space-y-1 p-1">
                                <div class="font-bold text-xl">Bản tình ca</div>
                                <div class="font-thin text-[18px] text-slate-500">181 N người đăng ký</div>
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


                <div class="flex flex-col w-[100%]">
                    <div class="suggest flex items-center justify-start no-wrap h-[56px] overflow-x-auto">
                        <div class="text-white bg-[#0f0f0f] px-4 py-1 rounded-lg mx-1 cursor-pointer whitespace-nowrap">
                            Tất cả
                        </div>
                        <div class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-1 cursor-pointer whitespace-nowrap">
                            Âm nhạc
                        </div>
                        <div class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-1 cursor-pointer whitespace-nowrap">
                            Danh sách kết hợp
                        </div>
                        <div class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-1 cursor-pointer whitespace-nowrap">
                            Trực tiếp
                        </div>
                        <div class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-1 cursor-pointer whitespace-nowrap">
                            Trò chơi
                        </div>
                        <div class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-1 cursor-pointer whitespace-nowrap">
                            Tin tức
                        </div>
                        <div class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-1 cursor-pointer whitespace-nowrap">
                            Toán học
                        </div>
                        <div class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-1 cursor-pointer whitespace-nowrap">
                            Bóng đá
                        </div>
                        <div class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-1 cursor-pointer whitespace-nowrap">
                            Đọc rap
                        </div>
                        <div class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-1 cursor-pointer whitespace-nowrap">
                            Lập trình
                        </div>
                    </div>


                </div>
                <div class="comments-wrapper flex flex-col space-y-4 mt-8">
                    <div class="items-center flex space-x-4">
                        <span class="text-xl font-bold">222 bình luận</span>
                        <span class="relative">
                            <div class="button-dropdown flex space-x-2 font-bold items-center cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                                    <path d="M21 6H3V5h18v1zm-6 5H3v1h12v-1zm-6 6H3v1h6v-1z"></path>
                                </svg>
                                <span>Sắp xếp theo</span>
                            </div>

                            <div class="dropdown absolute bg-white w-[160px] top-[35px] hidden">
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
                                    <span class="font-bold">@kimnguyen-ou5yy</span>
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
                                    <span class="font-bold">@kimnguyen-ou5yy</span>
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
                                    <span class="font-bold">@kimnguyen-ou5yy</span>
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
                                    <span class="font-bold">@kimnguyen-ou5yy</span>
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
                                    <span class="font-bold">@kimnguyen-ou5yy</span>
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
                                    <span class="font-bold">@kimnguyen-ou5yy</span>
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
                                    <span class="font-bold">@kimnguyen-ou5yy</span>
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
                                    <span class="font-bold">@kimnguyen-ou5yy</span>
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
                                    <span class="font-bold">@kimnguyen-ou5yy</span>
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
                                    <span class="font-bold">@kimnguyen-ou5yy</span>
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
                                    <span class="font-bold">@kimnguyen-ou5yy</span>
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
    </div>

    <!-- <script src="{{asset('javascript/main.js')}}"></script> -->
</body>

</html>