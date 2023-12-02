<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('font/themify-icons.css')}}" />
    
    <style>
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

      /* .suggest::-webkit-scrollbar {
        height: auto;
        width: auto;
        background-color: transparent;
      }

    .suggest::-webkit-scrollbar-thumb {
      background-color: transparent;
      border-radius: 0;
    } */
    </style>
  </head>
  <body class="h-screen">
    <div class="header-wrapper fixed w-[100%] h-[62px] px-2 py-2 bg-white z-10 mr-1">
      <div class="flex items-center justify-between">
        <!-- start header  -->
        <div class="flex items-center header-start">
          <i
            class="ti-menu p-4 cursor-pointer hover:bg-[#ccc] rounded-full"
          ></i>
          <div class="cursor-pointer ytb-logo">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="external-icon"
              viewBox="0 0 90 20"
              focusable="false"
              width="90"
              height="20"
              class="inline"
            >
              <svg
                viewBox="0 0 90 20"
                preserveAspectRatio="xMidYMid meet"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g>
                  <path
                    d="M27.9727 3.12324C27.6435 1.89323 26.6768 0.926623 25.4468 0.597366C23.2197 2.24288e-07 14.285 0 14.285 0C14.285 0 5.35042 2.24288e-07 3.12323 0.597366C1.89323 0.926623 0.926623 1.89323 0.597366 3.12324C2.24288e-07 5.35042 0 10 0 10C0 10 2.24288e-07 14.6496 0.597366 16.8768C0.926623 18.1068 1.89323 19.0734 3.12323 19.4026C5.35042 20 14.285 20 14.285 20C14.285 20 23.2197 20 25.4468 19.4026C26.6768 19.0734 27.6435 18.1068 27.9727 16.8768C28.5701 14.6496 28.5701 10 28.5701 10C28.5701 10 28.5677 5.35042 27.9727 3.12324Z"
                    fill="#FF0000"
                  ></path>
                  <path
                    d="M11.4253 14.2854L18.8477 10.0004L11.4253 5.71533V14.2854Z"
                    fill="white"
                  ></path>
                </g>
                <g>
                  <g>
                    <path
                      d="M34.6024 13.0036L31.3945 1.41846H34.1932L35.3174 6.6701C35.6043 7.96361 35.8136 9.06662 35.95 9.97913H36.0323C36.1264 9.32532 36.3381 8.22937 36.665 6.68892L37.8291 1.41846H40.6278L37.3799 13.0036V18.561H34.6001V13.0036H34.6024Z"
                    ></path>
                    <path
                      d="M41.4697 18.1937C40.9053 17.8127 40.5031 17.22 40.2632 16.4157C40.0257 15.6114 39.9058 14.5437 39.9058 13.2078V11.3898C39.9058 10.0422 40.0422 8.95805 40.315 8.14196C40.5878 7.32588 41.0135 6.72851 41.592 6.35457C42.1706 5.98063 42.9302 5.79248 43.871 5.79248C44.7976 5.79248 45.5384 5.98298 46.0981 6.36398C46.6555 6.74497 47.0647 7.34234 47.3234 8.15137C47.5821 8.96275 47.7115 10.0422 47.7115 11.3898V13.2078C47.7115 14.5437 47.5845 15.6161 47.3329 16.4251C47.0812 17.2365 46.672 17.8292 46.1075 18.2031C45.5431 18.5771 44.7764 18.7652 43.8098 18.7652C42.8126 18.7675 42.0342 18.5747 41.4697 18.1937ZM44.6353 16.2323C44.7905 15.8231 44.8705 15.1575 44.8705 14.2309V10.3292C44.8705 9.43077 44.7929 8.77225 44.6353 8.35833C44.4777 7.94206 44.2026 7.7351 43.8074 7.7351C43.4265 7.7351 43.156 7.94206 43.0008 8.35833C42.8432 8.77461 42.7656 9.43077 42.7656 10.3292V14.2309C42.7656 15.1575 42.8408 15.8254 42.9914 16.2323C43.1419 16.6415 43.4123 16.8461 43.8074 16.8461C44.2026 16.8461 44.4777 16.6415 44.6353 16.2323Z"
                    ></path>
                    <path
                      d="M56.8154 18.5634H54.6094L54.3648 17.03H54.3037C53.7039 18.1871 52.8055 18.7656 51.6061 18.7656C50.7759 18.7656 50.1621 18.4928 49.767 17.9496C49.3719 17.4039 49.1743 16.5526 49.1743 15.3955V6.03751H51.9942V15.2308C51.9942 15.7906 52.0553 16.188 52.1776 16.4256C52.2999 16.6631 52.5045 16.783 52.7914 16.783C53.036 16.783 53.2712 16.7078 53.497 16.5573C53.7228 16.4067 53.8874 16.2162 53.9979 15.9858V6.03516H56.8154V18.5634Z"
                    ></path>
                    <path
                      d="M64.4755 3.68758H61.6768V18.5629H58.9181V3.68758H56.1194V1.42041H64.4755V3.68758Z"
                    ></path>
                    <path
                      d="M71.2768 18.5634H69.0708L68.8262 17.03H68.7651C68.1654 18.1871 67.267 18.7656 66.0675 18.7656C65.2373 18.7656 64.6235 18.4928 64.2284 17.9496C63.8333 17.4039 63.6357 16.5526 63.6357 15.3955V6.03751H66.4556V15.2308C66.4556 15.7906 66.5167 16.188 66.639 16.4256C66.7613 16.6631 66.9659 16.783 67.2529 16.783C67.4974 16.783 67.7326 16.7078 67.9584 16.5573C68.1842 16.4067 68.3488 16.2162 68.4593 15.9858V6.03516H71.2768V18.5634Z"
                    ></path>
                    <path
                      d="M80.609 8.0387C80.4373 7.24849 80.1621 6.67699 79.7812 6.32186C79.4002 5.96674 78.8757 5.79035 78.2078 5.79035C77.6904 5.79035 77.2059 5.93616 76.7567 6.23014C76.3075 6.52412 75.9594 6.90747 75.7148 7.38489H75.6937V0.785645H72.9773V18.5608H75.3056L75.5925 17.3755H75.6537C75.8724 17.7988 76.1993 18.1304 76.6344 18.3774C77.0695 18.622 77.554 18.7443 78.0855 18.7443C79.038 18.7443 79.7412 18.3045 80.1904 17.4272C80.6396 16.5476 80.8653 15.1765 80.8653 13.3092V11.3266C80.8653 9.92722 80.7783 8.82892 80.609 8.0387ZM78.0243 13.1492C78.0243 14.0617 77.9867 14.7767 77.9114 15.2941C77.8362 15.8115 77.7115 16.1808 77.5328 16.3971C77.3564 16.6158 77.1165 16.724 76.8178 16.724C76.585 16.724 76.371 16.6699 76.1734 16.5594C75.9759 16.4512 75.816 16.2866 75.6937 16.0702V8.96062C75.7877 8.6196 75.9524 8.34209 76.1852 8.12337C76.4157 7.90465 76.6697 7.79646 76.9401 7.79646C77.2271 7.79646 77.4481 7.90935 77.6034 8.13278C77.7609 8.35855 77.8691 8.73485 77.9303 9.26636C77.9914 9.79787 78.022 10.5528 78.022 11.5335V13.1492H78.0243Z"
                    ></path>
                    <path
                      d="M84.8657 13.8712C84.8657 14.6755 84.8892 15.2776 84.9363 15.6798C84.9833 16.0819 85.0821 16.3736 85.2326 16.5594C85.3831 16.7428 85.6136 16.8345 85.9264 16.8345C86.3474 16.8345 86.639 16.6699 86.7942 16.343C86.9518 16.0161 87.0365 15.4705 87.0506 14.7085L89.4824 14.8519C89.4965 14.9601 89.5035 15.1106 89.5035 15.3011C89.5035 16.4582 89.186 17.3237 88.5534 17.8952C87.9208 18.4667 87.0247 18.7536 85.8676 18.7536C84.4777 18.7536 83.504 18.3185 82.9466 17.446C82.3869 16.5735 82.1094 15.2259 82.1094 13.4008V11.2136C82.1094 9.33452 82.3987 7.96105 82.9772 7.09558C83.5558 6.2301 84.5459 5.79736 85.9499 5.79736C86.9165 5.79736 87.6597 5.97375 88.1771 6.32888C88.6945 6.684 89.059 7.23433 89.2707 7.98457C89.4824 8.7348 89.5882 9.76961 89.5882 11.0913V13.2362H84.8657V13.8712ZM85.2232 7.96811C85.0797 8.14449 84.9857 8.43377 84.9363 8.83593C84.8892 9.2381 84.8657 9.84722 84.8657 10.6657V11.5641H86.9283V10.6657C86.9283 9.86133 86.9001 9.25221 86.846 8.83593C86.7919 8.41966 86.6931 8.12803 86.5496 7.95635C86.4062 7.78702 86.1851 7.7 85.8864 7.7C85.5854 7.70235 85.3643 7.79172 85.2232 7.96811Z"
                    ></path>
                  </g>
                </g>
              </svg>
            </svg>
          </div>
          <div class="pb-5 text-xs">VN</div>
        </div>

        <!-- Center header  -->
        <div
          class="header-center items-center justify-center mx-auto container hidden sm:inline-flex"
        >
          <div
            class="input-search-bar p-3 space-x-2 border rounded-l-full w-[40%]"
          >
            <i class="ti-search"></i>
            <input
              name="search"
              type="text"
              class="border-0 w-[calc(100%-60px)] outline-none"
              placeholder="Tìm kiếm"
            />
            <i class="ti-blackboard"></i>
          </div>

          <button
            class="w-[80px] h-[50.47px] bg-[#f8f8f8f8] rounded-r-full mr-4 hover:bg-[#ccc]"
          >
            <i class="ti-search"></i>
          </button>

          <div
            class="py-3 px-4 rounded-full bg-[#f8f8f8] cursor-pointer hover:bg-[#ccc]"
          >
            <i class="ti-microphone"></i>
          </div>
        </div>

        <!-- End header  -->
        <div
          class="end-header flex items-center font-serif text-sm header-end lg:space-x-2 xl:space-x-2 md:space-x-1"
        >
          <div class="search-btn sm:hidden" aria-label="Tuan">
            <i
              class="ti-search cursor-pointer hover:bg-[#ccc] py-4 px-4 rounded-full"
            ></i>
          </div>

          <div class="microphone-btn sm:hidden" aria-label="Tuan">
            <i
              class="ti-microphone cursor-pointer hover:bg-[#ccc] py-4 px-4 rounded-full"
            ></i>
          </div>

          <div class="upload-btn relative" aria-label="Tuan">
            <i
              class="ti-video-camera cursor-pointer hover:bg-[#ccc] py-4 px-4 rounded-full"
            ></i>
            <div
              class="absolute hidden w-40 mt-3 bg-white border shadow-md ti-video-camera-dropdown"
            >
              <div
                class="flex space-x-2 items-center p-2 cursor-pointer hover:bg-[#f8f8f8]"
              >
                <div class="ti-upload"></div>
                <span class="">Tải video lên</span>
              </div>
              <div
                class="flex space-x-2 items-center p-2 cursor-pointer hover:bg-[#f8f8f8]"
              >
                <div class="ti-control-record"></div>
                <span>Phát trực tiếp</span>
              </div>
              <div
                class="flex space-x-2 items-center p-2 cursor-pointer hover:bg-[#f8f8f8]"
              >
                <div class="ti-instagram"></div>
                <span>Tạo bài đăng</span>
              </div>
            </div>
          </div>

          <div class="notifications-wrapper relative" aria-label="Tuan">
            <i
              class="show-notifications ti-microphone cursor-pointer hover:bg-[#ccc] py-4 px-4 rounded-full"
            ></i>
            <div
              class="notification-scroll hidden absolute w-[480px] border shadow-md bg-white top-8 right-8 max-h-[642px] overflow-y-auto"
            >
              <div class="flex justify-between p-4 items-center border-b-2">
                <span>Thông báo</span>
                <i
                  class="ti-settings p-2 cursor-pointer hover:bg-[#ccc] rounded-full"
                ></i>
              </div>

              <div
                class="notification-item flex py-4 pr-4 justify-between cursor-pointer hover:bg-[#f8f8f8]"
              >
                <div class="w-[4px]"></div>
                <div>
                  <img
                    width="48"
                    height="48"
                    src="{{asset('img/channel_profile.jpg')}}"
                    class="rounded-full mr-2"
                  />
                </div>

                <div class="max-w-[235px]">
                  <div class="flex flex-col space-y-1">
                    <p class="text-[14px] font-sans">
                      Tuyền Văn Hóa uploaded: TRƯƠNG MỸ LAN ĐÃ DÙNG TRÒ MA GIÁO
                      NÀO ĐỂ RÚT 1 TRIỆU TỶ ĐỒNG TỪ NGÂN HÀNG SCB?
                    </p>
                    <span>1 giờ trước</span>
                  </div>
                </div>
                <div>
                  <img
                    src="{{asset('img/main-img.jpg')}}"
                    width="86"
                    height="64"
                    alt=""
                  />
                </div>
                <div>
                  <i
                    class="ti-more p-2 cursor-pointer hover:bg-[#ccc] rounded-full"
                  ></i>
                </div>
              </div>

              <div
                class="notification-item flex py-4 pr-4 justify-between cursor-pointer hover:bg-[#f8f8f8]"
              >
                <div class="w-[4px]"></div>
                <div>
                  <img
                    width="48"
                    height="48"
                    src="{{asset('img/channel_profile.jpg')}}"
                    class="rounded-full mr-2"
                  />
                </div>

                <div class="max-w-[235px]">
                  <div class="flex flex-col space-y-1">
                    <p class="text-[14px] font-sans">
                      Tuyền Văn Hóa uploaded: TRƯƠNG MỸ LAN ĐÃ DÙNG TRÒ MA GIÁO
                      NÀO ĐỂ RÚT 1 TRIỆU TỶ ĐỒNG TỪ NGÂN HÀNG SCB?
                    </p>
                    <span>1 giờ trước</span>
                  </div>
                </div>
                <div>
                  <img
                    src="{{asset('img/main-img.jpg')}}"
                    width="86"
                    height="64"
                    alt=""
                  />
                </div>
                <div>
                  <i
                    class="ti-more p-2 cursor-pointer hover:bg-[#ccc] rounded-full"
                  ></i>
                </div>
              </div>

              <div
                class="notification-item flex py-4 pr-4 justify-between cursor-pointer hover:bg-[#f8f8f8]"
              >
                <div class="w-[4px]"></div>
                <div>
                  <img
                    width="48"
                    height="48"
                    src="{{asset('img/channel_profile.jpg')}}"
                    class="rounded-full mr-2"
                  />
                </div>

                <div class="max-w-[235px]">
                  <div class="flex flex-col space-y-1">
                    <p class="text-[14px] font-sans">
                      Tuyền Văn Hóa uploaded: TRƯƠNG MỸ LAN ĐÃ DÙNG TRÒ MA GIÁO
                      NÀO ĐỂ RÚT 1 TRIỆU TỶ ĐỒNG TỪ NGÂN HÀNG SCB?
                    </p>
                    <span>1 giờ trước</span>
                  </div>
                </div>
                <div>
                  <img
                    src="{{asset('img/main-img.jpg')}}"
                    width="86"
                    height="64"
                    alt=""
                  />
                </div>
                <div>
                  <i
                    class="ti-more p-2 cursor-pointer hover:bg-[#ccc] rounded-full"
                  ></i>
                </div>
              </div>

              <div
                class="notification-item flex py-4 pr-4 justify-between cursor-pointer hover:bg-[#f8f8f8]"
              >
                <div class="w-[4px]"></div>
                <div>
                  <img
                    width="48"
                    height="48"
                    src="{{asset('img/channel_profile.jpg')}}"
                    class="rounded-full mr-2"
                  />
                </div>

                <div class="max-w-[235px]">
                  <div class="flex flex-col space-y-1">
                    <p class="text-[14px] font-sans">
                      Tuyền Văn Hóa uploaded: TRƯƠNG MỸ LAN ĐÃ DÙNG TRÒ MA GIÁO
                      NÀO ĐỂ RÚT 1 TRIỆU TỶ ĐỒNG TỪ NGÂN HÀNG SCB?
                    </p>
                    <span>1 giờ trước</span>
                  </div>
                </div>
                <div>
                  <img
                    src="{{asset('img/main-img.jpg')}}"
                    width="86"
                    height="64"
                    alt=""
                  />
                </div>
                <div>
                  <i
                    class="ti-more p-2 cursor-pointer hover:bg-[#ccc] rounded-full"
                  ></i>
                </div>
              </div>

              <div
                class="notification-item flex py-4 pr-4 justify-between cursor-pointer hover:bg-[#f8f8f8]"
              >
                <div class="w-[4px]"></div>
                <div>
                  <img
                    width="48"
                    height="48"
                    src="{{asset('img/channel_profile.jpg')}}"
                    class="rounded-full mr-2"
                  />
                </div>

                <div class="max-w-[235px]">
                  <div class="flex flex-col space-y-1">
                    <p class="text-[14px] font-sans">
                      Tuyền Văn Hóa uploaded: TRƯƠNG MỸ LAN ĐÃ DÙNG TRÒ MA GIÁO
                      NÀO ĐỂ RÚT 1 TRIỆU TỶ ĐỒNG TỪ NGÂN HÀNG SCB?
                    </p>
                    <span>1 giờ trước</span>
                  </div>
                </div>
                <div>
                  <img
                    src="{{asset('img/main-img.jpg')}}"
                    width="86"
                    height="64"
                    alt=""
                  />
                </div>
                <div>
                  <i
                    class="ti-more p-2 cursor-pointer hover:bg-[#ccc] rounded-full"
                  ></i>
                </div>
              </div>

              <div
                class="notification-item flex py-4 pr-4 justify-between cursor-pointer hover:bg-[#f8f8f8]"
              >
                <div class="w-[4px]"></div>
                <div>
                  <img
                    width="48"
                    height="48"
                    src="{{asset('img/channel_profile.jpg')}}"
                    class="rounded-full mr-2"
                  />
                </div>

                <div class="max-w-[235px]">
                  <div class="flex flex-col space-y-1">
                    <p class="text-[14px] font-sans">
                      Tuyền Văn Hóa uploaded: TRƯƠNG MỸ LAN ĐÃ DÙNG TRÒ MA GIÁO
                      NÀO ĐỂ RÚT 1 TRIỆU TỶ ĐỒNG TỪ NGÂN HÀNG SCB?
                    </p>
                    <span>1 giờ trước</span>
                  </div>
                </div>
                <div>
                  <img
                    src="{{asset('img/main-img.jpg')}}"
                    width="86"
                    height="64"
                    alt=""
                  />
                </div>
                <div>
                  <i
                    class="ti-more p-2 cursor-pointer hover:bg-[#ccc] rounded-full"
                  ></i>
                </div>
              </div>


            </div>
          </div>

          <div class="profile-wrapper w-[42px] h-[42px] relative">
            <img
              src="{{asset('img/T.jpg')}}"
              alt=""
              class="show-profile rounded-full cursor-pointer"
            />

            <div
              class="hidden absolute right-4 top-14 bg-white shadow-md w-[268px] font-sans"
            >
              <div class="identifier flex items-center p-4 border-b-2">
                <img
                  src="{{asset('img/T.jpg')}}"
                  width="42"
                  height="42"
                  class="rounded-full mr-4"
                />
                <div class="flex flex-col">
                  <span>Trương Tuấn</span>
                  <span>@TuanTruong-zk4cy</span>
                  <a href="#" class="text-blue-500 mt-2">Xem kênh của bạn</a>
                </div>
              </div>

              <div class="account-details flex flex-col border-b-2 mt-1">
                <div
                  class="flex cursor-pointer hover:bg-[#f0f0f0] py-2 items-center"
                >
                  <i class="ti-google my-1 mx-2"></i>
                  <span>Tài khoản google</span>
                </div>
                <div
                  class="flex cursor-pointer hover:bg-[#f0f0f0] py-2 items-center justify-between"
                >
                  <i class="ti-google my-1 mx-2"></i>
                  <span class="mr-auto">Chuyển đổi tài khoản</span>
                  <i class="ti-angle-right my-1 mx-2"></i>
                </div>
                <div
                  class="flex cursor-pointer hover:bg-[#f0f0f0] py-2 items-center"
                >
                  <i class="ti-layout-tab-window my-1 mx-2"></i>
                  <span>Đăng xuất</span>
                </div>
              </div>

              <div class="account-details flex flex-col border-b-2 mt-1">
                <div
                  class="flex cursor-pointer hover:bg-[#f0f0f0] py-2 items-center"
                >
                  <i class="ti-google my-1 mx-2"></i>
                  <span>Youtube studio</span>
                </div>
                <div
                  class="flex cursor-pointer hover:bg-[#f0f0f0] py-2 items-center"
                >
                  <i class="ti-layout-tab-window my-1 mx-2"></i>
                  <span>Giao dịch và mua gói thành viên</span>
                </div>
              </div>

              <div class="account-details flex flex-col border-b-2 mt-1">
                <div
                  class="flex cursor-pointer hover:bg-[#f0f0f0] py-2 items-center"
                >
                  <i class="ti-google my-1 mx-2"></i>
                  <span>Dữ liệu của bạn trong youtube</span>
                </div>

                <div
                  class="flex cursor-pointer hover:bg-[#f0f0f0] py-2 items-center justify-between"
                >
                  <i class="ti-google my-1 mx-2"></i>
                  <span class="mr-auto">Giao diện: Giao diện thiết bị</span>
                  <i class="ti-angle-right my-1 mx-2"></i>
                </div>

                <div
                  class="flex cursor-pointer hover:bg-[#f0f0f0] py-2 items-center justify-between"
                >
                  <i class="ti-google my-1 mx-2"></i>
                  <span class="mr-auto">Ngôn ngữ: Tiếng Việt</span>
                  <i class="ti-angle-right my-1 mx-2"></i>
                </div>

                <div
                  class="flex cursor-pointer hover:bg-[#f0f0f0] py-2 items-center justify-between"
                >
                  <i class="ti-google my-1 mx-2"></i>
                  <span class="mr-auto">Chế độ hạn chế: Đã tắt</span>
                  <i class="ti-angle-right my-1 mx-2"></i>
                </div>

                <div
                  class="flex cursor-pointer hover:bg-[#f0f0f0] py-2 items-center justify-between"
                >
                  <i class="ti-google my-1 mx-2"></i>
                  <span class="mr-auto">Địa điểm: Việt Nam</span>
                  <i class="ti-angle-right my-1 mx-2"></i>
                </div>

                <div
                  class="flex cursor-pointer hover:bg-[#f0f0f0] py-2 items-center"
                >
                  <i class="ti-google my-1 mx-2"></i>
                  <span>Phím tắt</span>
                </div>
              </div>

              <div class="account-details flex flex-col border-b-2 mt-1">
                <div
                  class="flex cursor-pointer hover:bg-[#f0f0f0] py-2 items-center"
                >
                  <i class="ti-google my-1 mx-2"></i>
                  <span>Cài đặt</span>
                </div>
              </div>

              <div class="account-details flex flex-col border-b-2 mt-1">
                <div
                  class="flex cursor-pointer hover:bg-[#f0f0f0] py-2 items-center"
                >
                  <i class="ti-google my-1 mx-2"></i>
                  <span>Trợ giúp</span>
                </div>
                <div
                  class="flex cursor-pointer hover:bg-[#f0f0f0] py-2 items-center"
                >
                  <i class="ti-google my-1 mx-2"></i>
                  <span>Gửi ý kiến phản hồi</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End header  -->

    <!-- Siderbar  -->
    <div class="mini-sidebar fixed w-[64px] h-screen mt-[62px] px-[4px] hidden bg-white pt-[18px]">
      <div class="flex flex-col text-center space-y-2 cursor-pointer">
        <div
          class="w-[100%] flex flex-col py-[16px] hover:bg-[#ccc] rounded-lg space-y-1"
        >
          <i class="ti-home"></i>
          <span class="text-xs">Home</span>
        </div>
        <div
          class="w-[100%] flex flex-col py-[16px] hover:bg-[#ccc] rounded-lg space-y-1"
        >
          <i class="ti-home"></i>
          <span class="text-xs">Shorts</span>
        </div>
        <div
          class="w-[100%] flex flex-col py-[16px] hover:bg-[#ccc] rounded-lg space-y-1"
        >
          <i class="ti-home"></i>
          <span class="text-xs">Kênh của bạn</span>
        </div>
        <div
          class="w-[100%] flex flex-col py-[16px] hover:bg-[#ccc] rounded-lg space-y-1"
        >
          <i class="ti-home"></i>
          <span class="text-xs">Bạn</span>
        </div>
      </div>
    </div>

    <div
      class="sidebar-wrapper w-[224px] p-2 mt-[62px] overflow-y-scroll max-h-[calc(100%-70px)] text-[13px] fixed bg-white pt-[18px]"
    >
      <div class="flex flex-col">
        <!-- Main sidebar  -->
        <div
          class="main-sidebar flex flex-col border-b-[1px] border-black pb-2"
        >
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <div class="ti-search"></div>
            <span>Trang chủ</span>
          </div>
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <div class="ti-search"></div>
            <span>Shorts</span>
          </div>
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <div class="ti-search"></div>
            <span>Kênh đăng ký</span>
          </div>
        </div>

        <!-- Me sidebar  -->
        <div
          class="me-sidebar flex flex-col border-b-[1px] border-black pb-2 my-2"
        >
          <div
            class="flex items-center px-2 py-2 space-x-2 font-bold cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <span>Bạn</span>
            <ti class="ti-arrow-circle-right"></ti>
          </div>
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <div class="ti-search"></div>
            <span>Kênh của bạn</span>
          </div>
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <div class="ti-search"></div>
            <span>Video đã xem</span>
          </div>
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <div class="ti-search"></div>
            <span>Video của bạn</span>
          </div>
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <div class="ti-search"></div>
            <span>Xem sau</span>
          </div>
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <div class="ti-arrow-circle-down"></div>
            <span>Thêm</span>
          </div>
        </div>

        <!-- Registered sidebar -->
        <div
          class="registered-sidebar flex flex-col border-b-[1px] border-black pb-2 my-2"
        >
          <div
            class="flex items-center px-2 py-2 space-x-2 font-bold rounded-xl"
          >
            <span>Kênh đăng ký</span>
          </div>
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <img
              src="{{asset('img/avt.jpg')}}"
              width="24"
              height="24"
              alt=""
              class="rounded-full"
            />
            <span>Đen Vâu Ofical</span>
          </div>
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <img
              src="{{asset('img/avt.jpg')}}"
              width="24"
              height="24"
              alt=""
              class="rounded-full"
            />
            <span>Web5ngay</span>
          </div>
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <img
              src="{{asset('img/avt.jpg')}}"
              width="24"
              height="24"
              alt=""
              class="rounded-full"
            />
            <span>FreeCodeCamp</span>
          </div>
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <img
              src="{{asset('img/avt.jpg')}}"
              width="24"
              height="24"
              alt=""
              class="rounded-full"
            />
            <span>Pinkfong</span>
          </div>
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <img
              src="{{asset('img/avt.jpg')}}"
              width="24"
              height="24"
              alt=""
              class="rounded-full"
            />
            <span>Review Phim</span>
          </div>
        </div>

        <!-- Explore sidebar -->
        <div
          class="explore-sidebar flex flex-col border-b-[1px] border-black pb-2 my-2"
        >
          <div class="flex items-center px-2 py-2 space-x-2 font-bold">
            <span>Khám phá</span>
          </div>
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <div class="ti-search"></div>
            <span>Thịnh hành</span>
          </div>
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <div class="ti-search"></div>
            <span>Âm nhạc</span>
          </div>
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <div class="ti-search"></div>
            <span>Trò chơi</span>
          </div>
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <div class="ti-search"></div>
            <span>Tin tức</span>
          </div>
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <div class="ti-search"></div>
            <span>Thể thao</span>
          </div>
        </div>

        <!-- Youtube service  -->
        <div
          class="main-sidebar flex flex-col border-b-[1px] border-black pb-2 my-2"
        >
          <div class="flex items-center px-2 py-2 space-x-2 font-bold">
            <span>Dịch vụ khác của youtube</span>
          </div>
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <div class="ti-search"></div>
            <span>Youtube premium</span>
          </div>
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <div class="ti-search"></div>
            <span>Youtube studio</span>
          </div>
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <div class="ti-search"></div>
            <span>Youtube music</span>
          </div>
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <div class="ti-search"></div>
            <span>Youtube kids</span>
          </div>
        </div>

        <!-- Privacy and setting sidebar -->
        <div
          class="main-sidebar flex flex-col border-b-[1px] border-black pb-2 my-2"
        >
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <div class="ti-search"></div>
            <span>Cài đặt</span>
          </div>
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <div class="ti-search"></div>
            <span>Nhật ký báo cáo</span>
          </div>
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <div class="ti-search"></div>
            <span>Trợ giúp</span>
          </div>
          <div
            class="flex items-center px-2 py-2 space-x-2 cursor-pointer rounded-xl hover:bg-slate-400"
          >
            <div class="ti-search"></div>
            <span>Gửi ý kiến phản hồi</span>
          </div>
        </div>

        <div class="my-1">
          <a href="#" class="font-bold pr-1 text-[#606060] text-[#606060]">Giới thiệu</a>
          <a href="#" class="font-bold pr-1 text-[#606060]">Báo chí</a>
          <a href="#" class="font-bold pr-1 text-[#606060]">Bản quyền</a>
          <a href="#" class="font-bold pr-1 text-[#606060]">Liên hệ với chúng tôi</a>
          <a href="#" class="font-bold pr-1 text-[#606060]">Người sáng tạo</a>
          <a href="#" class="font-bold pr-1 text-[#606060]">Quảng cáo</a>
          <a href="#" class="font-bold pr-1 text-[#606060]">Nhà phát triển</a>
        </div>

        <div class="my-1">
          <a href="#" class="font-bold pr-1 text-[#606060]">Giới thiệu</a>
          <a href="#" class="font-bold pr-1 text-[#606060]">Báo chí</a>
          <a href="#" class="font-bold pr-1 text-[#606060]">Bản quyền</a>
          <a href="#" class="font-bold pr-1 text-[#606060]">Liên hệ với chúng tôi</a>
          <a href="#" class="font-bold pr-1 text-[#606060]">Người sáng tạo</a>
          <a href="#" class="font-bold pr-1 text-[#606060]">Quảng cáo</a>
          <a href="#" class="font-bold pr-1 text-[#606060]">Nhà phát triển</a>
        </div>

        <footer>© 2023 Google LLC</footer>
      </div>
    </div>

    <div
      class="content-wrapper ml-[250px] mt-[80px] flex flex-col w-[calc(100%-250px)]"
      style="display: inline-block"
    >
      <div class="suggest flex items-center justify-start no-wrap h-[56px] overflow-x-auto">
        <div
          class="text-white bg-[#0f0f0f] px-4 py-1 rounded-lg mx-2 cursor-pointer whitespace-nowrap"
        >
          Tất cả
        </div>
        <div
          class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-2 cursor-pointer whitespace-nowrap"
        >
          Âm nhạc
        </div>
        <div
          class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-2 cursor-pointer whitespace-nowrap"
        >
          Danh sách kết hợp
        </div>
        <div
          class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-2 cursor-pointer whitespace-nowrap"
        >
          Trực tiếp
        </div>
        <div
          class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-2 cursor-pointer whitespace-nowrap"
        >
          Trò chơi
        </div>
        <div
          class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-2 cursor-pointer whitespace-nowrap"
        >
          Tin tức
        </div>
        <div
          class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-2 cursor-pointer whitespace-nowrap"
        >
          Toán học
        </div>
        <div
          class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-2 cursor-pointer whitespace-nowrap"
        >
          Bóng đá
        </div>
        <div
          class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-2 cursor-pointer whitespace-nowrap"
        >
          Đọc rap
        </div>
        <div
          class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-2 cursor-pointer whitespace-nowrap"
        >
          Lập trình
        </div>
      </div>

      <div
        class="videos-grid grid grid-cols-1 grid-rows-2 gap-1 w-[100%] text-[10px] sm:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-5"
      >
      
        <div class="video-item col-span-1 flex flex-col mb-4 mr-4">
          <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer" src="{{asset('img/hq720.webp')}}" alt="" />
          <div class="flex mt-4 w-[100%]">
            <div class="w-[36px] mr-2 cursor-pointer">
              <img
                class="w-[36px] rounded-full"
                src="{{asset('img/avt.jpg')}}"
                alt=""
              />
            </div>
            <div class="w-[100%] cursor-pointer">
              <div class="line-clamp-2 overflow-hidden font-semibold">
                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
              </div>
              <div class="text-gray-500">Bản tình ca</div>
              <div class="text-gray-500 text-[8px]">
                1,2 triệu lượt xem • 8 tuần trước
              </div>
            </div>
          </div>
        </div>

        <div class="video-item col-span-1 flex flex-col mb-4 mr-4">
          <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer" src="{{asset('img/hq720.webp')}}" alt="" />
          <div class="flex mt-4 w-[100%]">
            <div class="w-[36px] mr-2 cursor-pointer">
              <img
                class="w-[36px] rounded-full"
                src="{{asset('img/avt.jpg')}}"
                alt=""
              />
            </div>
            <div class="w-[100%] cursor-pointer">
              <div class="line-clamp-2 overflow-hidden font-semibold">
                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
              </div>
              <div class="text-gray-500">Bản tình ca</div>
              <div class="text-gray-500 text-[8px]">
                1,2 triệu lượt xem • 8 tuần trước
              </div>
            </div>
          </div>
        </div>

        <div class="video-item col-span-1 flex flex-col mb-4 mr-4">
          <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer" src="{{asset('img/hq720.webp')}}" alt="" />
          <div class="flex mt-4 w-[100%]">
            <div class="w-[36px] mr-2 cursor-pointer">
              <img
                class="w-[36px] rounded-full"
                src="{{asset('img/avt.jpg')}}"
                alt=""
              />
            </div>
            <div class="w-[100%] cursor-pointer">
              <div class="line-clamp-2 overflow-hidden font-semibold">
                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
              </div>
              <div class="text-gray-500">Bản tình ca</div>
              <div class="text-gray-500 text-[8px]">
                1,2 triệu lượt xem • 8 tuần trước
              </div>
            </div>
          </div>
        </div>

        <div class="video-item col-span-1 flex flex-col mb-4 mr-4">
          <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer" src="{{asset('img/hq720.webp')}}" alt="" />
          <div class="flex mt-4 w-[100%]">
            <div class="w-[36px] mr-2 cursor-pointer">
              <img
                class="w-[36px] rounded-full"
                src="{{asset('img/avt.jpg')}}"
                alt=""
              />
            </div>
            <div class="w-[100%] cursor-pointer">
              <div class="line-clamp-2 overflow-hidden font-semibold">
                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
              </div>
              <div class="text-gray-500">Bản tình ca</div>
              <div class="text-gray-500 text-[8px]">
                1,2 triệu lượt xem • 8 tuần trước
              </div>
            </div>
          </div>
        </div>

        <div class="video-item col-span-1 flex flex-col mb-4 mr-4">
          <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer" src="{{asset('img/hq720.webp')}}" alt="" />
          <div class="flex mt-4 w-[100%]">
            <div class="w-[36px] mr-2 cursor-pointer">
              <img
                class="w-[36px] rounded-full"
                src="{{asset('img/avt.jpg')}}"
                alt=""
              />
            </div>
            <div class="w-[100%] cursor-pointer">
              <div class="line-clamp-2 overflow-hidden font-semibold">
                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
              </div>
              <div class="text-gray-500">Bản tình ca</div>
              <div class="text-gray-500 text-[8px]">
                1,2 triệu lượt xem • 8 tuần trước
              </div>
            </div>
          </div>
        </div>

        <div class="video-item col-span-1 flex flex-col mb-4 mr-4">
          <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer" src="{{asset('img/hq720.webp')}}" alt="" />
          <div class="flex mt-4 w-[100%]">
            <div class="w-[36px] mr-2 cursor-pointer">
              <img
                class="w-[36px] rounded-full"
                src="{{asset('img/avt.jpg')}}"
                alt=""
              />
            </div>
            <div class="w-[100%] cursor-pointer">
              <div class="line-clamp-2 overflow-hidden font-semibold">
                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
              </div>
              <div class="text-gray-500">Bản tình ca</div>
              <div class="text-gray-500 text-[8px]">
                1,2 triệu lượt xem • 8 tuần trước
              </div>
            </div>
          </div>
        </div>

        <div class="video-item col-span-1 flex flex-col mb-4 mr-4">
          <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer" src="{{asset('img/hq720.webp')}}" alt="" />
          <div class="flex mt-4 w-[100%]">
            <div class="w-[36px] mr-2 cursor-pointer">
              <img
                class="w-[36px] rounded-full"
                src="{{asset('img/avt.jpg')}}"
                alt=""
              />
            </div>
            <div class="w-[100%] cursor-pointer">
              <div class="line-clamp-2 overflow-hidden font-semibold">
                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
              </div>
              <div class="text-gray-500">Bản tình ca</div>
              <div class="text-gray-500 text-[8px]">
                1,2 triệu lượt xem • 8 tuần trước
              </div>
            </div>
          </div>
        </div>

        <div class="video-item col-span-1 flex flex-col mb-4 mr-4">
          <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer" src="{{asset('img/hq720.webp')}}" alt="" />
          <div class="flex mt-4 w-[100%]">
            <div class="w-[36px] mr-2 cursor-pointer">
              <img
                class="w-[36px] rounded-full"
                src="{{asset('img/avt.jpg')}}"
                alt=""
              />
            </div>
            <div class="w-[100%] cursor-pointer">
              <div class="line-clamp-2 overflow-hidden font-semibold">
                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
              </div>
              <div class="text-gray-500">Bản tình ca</div>
              <div class="text-gray-500 text-[8px]">
                1,2 triệu lượt xem • 8 tuần trước
              </div>
            </div>
          </div>
        </div>

        <div class="video-item col-span-1 flex flex-col mb-4 mr-4">
          <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer" src="{{asset('img/hq720.webp')}}" alt="" />
          <div class="flex mt-4 w-[100%]">
            <div class="w-[36px] mr-2 cursor-pointer">
              <img
                class="w-[36px] rounded-full"
                src="{{asset('img/avt.jpg')}}"
                alt=""
              />
            </div>
            <div class="w-[100%] cursor-pointer">
              <div class="line-clamp-2 overflow-hidden font-semibold">
                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
              </div>
              <div class="text-gray-500">Bản tình ca</div>
              <div class="text-gray-500 text-[8px]">
                1,2 triệu lượt xem • 8 tuần trước
              </div>
            </div>
          </div>
        </div>

        <div class="video-item col-span-1 flex flex-col mb-4 mr-4">
          <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer" src="{{asset('img/hq720.webp')}}" alt="" />
          <div class="flex mt-4 w-[100%]">
            <div class="w-[36px] mr-2 cursor-pointer">
              <img
                class="w-[36px] rounded-full"
                src="{{asset('img/avt.jpg')}}"
                alt=""
              />
            </div>
            <div class="w-[100%] cursor-pointer">
              <div class="line-clamp-2 overflow-hidden font-semibold">
                Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                Nhau.. Playlist Lofi Chill Hay Hot Tiktok
              </div>
              <div class="text-gray-500">Bản tình ca</div>
              <div class="text-gray-500 text-[8px]">
                1,2 triệu lượt xem • 8 tuần trước
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End videos grid -->

      <div
        class="sm:flex items-center my-4 space-x-2 text-3xl font-bold shorts w-[100%]"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          focusable="false"
        >
          <g>
            <path
              d="M17.77,10.32l-1.2-.5L18,9.06a3.74,3.74,0,0,0-3.5-6.62L6,6.94a3.74,3.74,0,0,0,.23,6.74l1.2.49L6,14.93a3.75,3.75,0,0,0,3.5,6.63l8.5-4.5a3.74,3.74,0,0,0-.23-6.74Z"
              fill="red"
            ></path>
            <polygon
              points="10 14.65 15 12 10 9.35 10 14.65"
              fill="#fff"
            ></polygon>
          </g>
        </svg>
        <h1>Shorts</h1>
      </div>

      <div
        class="shorts-grid flex"
      >
        <div class="short-item px-2 short h-auto">
          <img
            src="{{asset('img/short.webp')}}"
            width="272"
            
            class="rounded-xl"
          />
          <div class="flex flex-col mt-2 space-y-1 short-detail">
            <h3 class="font-bold">Spot the hidden people for $10,000</h3>
            <p>10 Tr lượt xem</p>
          </div>
        </div>
        <div class="short-item px-2 short h-auto">
          <img
            src="{{asset('img/short.webp')}}"
            width="272"
            
            class="rounded-xl"
          />
          <div class="flex flex-col mt-2 space-y-1 short-detail">
            <h3 class="font-bold">Spot the hidden people for $10,000</h3>
            <p>10 Tr lượt xem</p>
          </div>
        </div>
        <div class="short-item px-2 short h-auto">
          <img
            src="{{asset('img/short.webp')}}"
            width="272"
            
            class="rounded-xl"
          />
          <div class="flex flex-col mt-2 space-y-1 short-detail">
            <h3 class="font-bold">Spot the hidden people for $10,000</h3>
            <p>10 Tr lượt xem</p>
          </div>
        </div>
        <div class="short-item px-2 short h-auto">
          <img
            src="{{asset('img/short.webp')}}"
            width="272"
            
            class="rounded-xl"
          />
          <div class="flex flex-col mt-2 space-y-1 short-detail">
            <h3 class="font-bold">Spot the hidden people for $10,000</h3>
            <p>10 Tr lượt xem</p>
          </div>
        </div>
        <div class="short-item px-2 short h-auto">
          <img
            src="{{asset('img/short.webp')}}"
            width="272"
            
            class="rounded-xl"
          />
          <div class="flex flex-col mt-2 space-y-1 short-detail">
            <h3 class="font-bold">Spot the hidden people for $10,000</h3>
            <p>10 Tr lượt xem</p>
          </div>
        </div>
        <div class="short-item px-2 short h-auto">
          <img
            src="{{asset('img/short.webp')}}"
            width="272"
            
            class="rounded-xl"
          />
          <div class="flex flex-col mt-2 space-y-1 short-detail">
            <h3 class="font-bold">Spot the hidden people for $10,000</h3>
            <p>10 Tr lượt xem</p>
          </div>
        </div>
        <div class="short-item px-2 short h-auto">
          <img
            src="{{asset('img/short.webp')}}"
            width="272"
            
            class="rounded-xl"
          />
          <div class="flex flex-col mt-2 space-y-1 short-detail">
            <h3 class="font-bold">Spot the hidden people for $10,000</h3>
            <p>10 Tr lượt xem</p>
          </div>
        </div>
        <div class="short-item px-2 short h-auto">
          <img
            src="{{asset('img/short.webp')}}"
            width="272"
            
            class="rounded-xl"
          />
          <div class="flex flex-col mt-2 space-y-1 short-detail">
            <h3 class="font-bold">Spot the hidden people for $10,000</h3>
            <p>10 Tr lượt xem</p>
          </div>
        </div>
        <div class="short-item px-2 short h-auto">
          <img
            src="{{asset('img/short.webp')}}"
            width="272"
            
            class="rounded-xl"
          />
          <div class="flex flex-col mt-2 space-y-1 short-detail">
            <h3 class="font-bold">Spot the hidden people for $10,000</h3>
            <p>10 Tr lượt xem</p>
          </div>
        </div>
        <div class="short-item px-2 short h-auto">
          <img
            src="{{asset('img/short.webp')}}"
            width="272"
            
            class="rounded-xl"
          />
          <div class="flex flex-col mt-2 space-y-1 short-detail">
            <h3 class="font-bold">Spot the hidden people for $10,000</h3>
            <p>10 Tr lượt xem</p>
          </div>
        </div>
        <div class="short-item px-2 short h-auto">
          <img
            src="{{asset('img/short.webp')}}"
            width="272"
            
            class="rounded-xl"
          />
          <div class="flex flex-col mt-2 space-y-1 short-detail">
            <h3 class="font-bold">Spot the hidden people for $10,000</h3>
            <p>10 Tr lượt xem</p>
          </div>
        </div>
      </div>
    </div>

    <script src="{{asset('javascript/main.js')}}"></script>
  </body>
</html>
