<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('font/themify-icons.css')}}" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <style>
        *{
            box-sizing:border-box;
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

        .show-more-short::after{
            content: "";
            width: 100%;
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            border: 1px solid #ccc;
            z-index: -1;
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
            <div class="w-[100%] flex flex-col py-[16px] hover:bg-[#ccc] rounded-lg space-y-1">
                <i class="ti-home"></i>
                <span class="text-xs">Home</span>
            </div>
            <div class="w-[100%] flex flex-col py-[16px] hover:bg-[#ccc] rounded-lg space-y-1">
                <i class="ti-home"></i>
                <span class="text-xs">Shorts</span>
            </div>
            <div class="w-[100%] flex flex-col py-[16px] hover:bg-[#ccc] rounded-lg space-y-1">
                <i class="ti-home"></i>
                <span class="text-xs">Kênh của bạn</span>
            </div>
            <div class="w-[100%] flex flex-col py-[16px] hover:bg-[#ccc] rounded-lg space-y-1">
                <i class="ti-home"></i>
                <span class="text-xs">Bạn</span>
            </div>
        </div>
    </div>

    <div
        class="sidebar-wrapper w-[224px] p-2 mt-[62px] overflow-y-scroll max-h-[calc(100%-70px)] text-[13px] fixed bg-white pt-[18px]">
        @include("sidebar")
    </div>
    <!-- End sidebar -->


    <div class="content-wrapper ml-[250px] mt-[80px] flex flex-col w-[calc(100%-250px)]" style="display: inline-block">
        @include("content")
    </div>

    <script src="{{asset('javascript/main.js')}}"></script>
</body>

</html>
