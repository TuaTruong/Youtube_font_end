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

        .dropdown{
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            z-index: 1;
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

    <!-- SIDEBAR  -->
    <div class="mini-sidebar fixed w-[64px] h-screen mt-[62px] px-[4px] hidden bg-white pt-[18px]">
        <div class="flex flex-col text-center space-y-2 cursor-pointer">
            <div class="w-[100%] flex flex-col py-[16px] hover:bg-[#ccc] rounded-lg space-y-1 justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                    <g>
                        <path d="M4 21V10.08l8-6.96 8 6.96V21h-6v-6h-4v6H4z"></path>
                    </g>
                </svg>
                <span class="text-xs">Home</span>
            </div>
            <div class="w-[100%] flex flex-col py-[16px] hover:bg-[#ccc] rounded-lg space-y-1 justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                    <path d="M10 14.65v-5.3L15 12l-5 2.65zm7.77-4.33-1.2-.5L18 9.06c1.84-.96 2.53-3.23 1.56-5.06s-3.24-2.53-5.07-1.56L6 6.94c-1.29.68-2.07 2.04-2 3.49.07 1.42.93 2.67 2.22 3.25.03.01 1.2.5 1.2.5L6 14.93c-1.83.97-2.53 3.24-1.56 5.07.97 1.83 3.24 2.53 5.07 1.56l8.5-4.5c1.29-.68 2.06-2.04 1.99-3.49-.07-1.42-.94-2.68-2.23-3.25zm-.23 5.86-8.5 4.5c-1.34.71-3.01.2-3.72-1.14-.71-1.34-.2-3.01 1.14-3.72l2.04-1.08v-1.21l-.69-.28-1.11-.46c-.99-.41-1.65-1.35-1.7-2.41-.05-1.06.52-2.06 1.46-2.56l8.5-4.5c1.34-.71 3.01-.2 3.72 1.14.71 1.34.2 3.01-1.14 3.72L15.5 9.26v1.21l1.8.74c.99.41 1.65 1.35 1.7 2.41.05 1.06-.52 2.06-1.46 2.56z"></path>
                </svg>
                <span class="text-xs">Shorts</span>
            </div>
            <div class="w-[100%] flex flex-col py-[16px] hover:bg-[#ccc] rounded-lg space-y-1 justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" focusable="false" wdth="24" height="24">
                    <path d="M3,3v18h18V3H3z M4.99,20c0.39-2.62,2.38-5.1,7.01-5.1s6.62,2.48,7.01,5.1H4.99z M9,10c0-1.65,1.35-3,3-3s3,1.35,3,3 c0,1.65-1.35,3-3,3S9,11.65,9,10z M12.72,13.93C14.58,13.59,16,11.96,16,10c0-2.21-1.79-4-4-4c-2.21,0-4,1.79-4,4 c0,1.96,1.42,3.59,3.28,3.93c-4.42,0.25-6.84,2.8-7.28,6V4h16v15.93C19.56,16.73,17.14,14.18,12.72,13.93z"></path>
                </svg>
                <span class="text-xs">Kênh của bạn</span>
            </div>
            <div class="w-[100%] flex flex-col py-[16px] hover:bg-[#ccc] rounded-lg space-y-1 justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                    <path d="m11 7 6 3.5-6 3.5V7zm7 13H4V6H3v15h15v-1zm3-2H6V3h15v15zM7 17h13V4H7v13z"></path>
                </svg>
                <span class="text-xs">Bạn</span>
            </div>
        </div>
    </div>

    <div class="sidebar-wrapper w-[224px] p-2 mt-[62px] overflow-y-scroll max-h-[calc(100%-70px)] text-[13px] fixed bg-white pt-[18px]">
        @include("sidebar")
    </div>
    <!-- End sidebar -->


    <div class="content-wrapper ml-[250px] mt-[80px] w-[calc(100%-250px)]" style="display: inline-block">
        @include("content")
    </div>

    <script src="{{asset('javascript/home.js')}}"></script>
</body>

</html>