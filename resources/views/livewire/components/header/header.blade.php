<div>
    <livewire:components.header.notification/>
    <!-- Livewire Component wire-end:VBk54V2gXBLUP9NS4P2s -->
    <header class="pt-4" x-data="{ menuSate : false }" @menu-active.window="menuSate = true"
            @menu-hide.window="menuSate = false">
        <div class="container">
            <div
                class="flex items-center justify-between bg-white dark:bg-dark-890 sm:px-11 sm:py-9 p-5 rounded-2xl shadow-headerSecOne relative">
                <div class="lg:hidden"
                     @click="$dispatch('body-overflow-active') , $dispatch('overlay-show') , $dispatch('menu-active')">
                    <svg width="24" class="text-biscay-700 dark:text-white" height="18" viewBox="0 0 24 18" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 2.5H21.5M2 9H21.5M2 15.5H21.5" stroke="currentColor" stroke-width="3.65625"
                              stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
                <div>
                    <a href="/" class="">
                        <img class="md:w-52 sm:w-40 w-24 sm:inline-block dark:hidden hidden" width="220"
                             src="{{asset('/assets/images/logo-text.svg')}}"/>
                        <img class="sm:hidden inline-block sm:ml-0 -ml-6" width="70"
                             src="{{asset('/assets/images/logo.svg')}}"/>
                    </a>
                </div>
                <livewire:components.header.search/>
                <!-- Livewire Component wire-end:uTHqEBYsZrh510WEZCgx -->
                <div class="hidden lg:flex">
                    <button onclick="toLightMode()" title="تم تاریک"
                            class="group lg:w-12 hidden ml-4 lg:h-12 header__moon group w-10 h-10  items-center relative dark:hover:bg-biscay-300 dark:bg-dark-920 justify-center rounded-full bg-gray-210 hover:bg-biscay-700 transition cursor-pointer">
                        <svg
                            class=" text-biscay-700 dark:text-gray-900 dark:group-hover:text-dark-920 group-hover:text-biscay-300"
                            width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M19.9358 14.3652C20.0691 14.0415 19.9906 13.6679 19.7389 13.4276C19.4872 13.1873 19.115 13.1308 18.8051 13.2857C17.7584 13.8091 16.5801 14.1034 15.3317 14.1034C10.9835 14.1034 7.45846 10.5246 7.45846 6.1098C7.45846 4.32254 8.0352 2.67449 9.01033 1.34372C9.21644 1.06244 9.22917 0.680892 9.04229 0.386091C8.85541 0.0912907 8.50809 -0.054977 8.17055 0.0189828C3.50017 1.04235 2.17361e-07 5.25905 0 10.3077C-2.50276e-07 16.1208 4.64155 20.8333 10.3672 20.8333C14.6778 20.8333 18.372 18.1625 19.9358 14.3652Z"
                                  fill="currentColor"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M13.0928 3.67116L13.7596 1.84183C13.9751 1.25035 14.4797 0.939795 14.9987 0.910156C15.5177 0.939795 16.0222 1.25035 16.2378 1.84183L16.9045 3.67116L18.7063 4.34807C19.9329 4.8089 19.9329 6.57032 18.7063 7.03114L16.9045 7.70806L16.2378 9.53738C16.0222 10.1289 15.5177 10.4394 14.9987 10.4691C14.4797 10.4394 13.9751 10.1289 13.7596 9.53738L13.0928 7.70806L11.2911 7.03114C10.0644 6.57032 10.0644 4.8089 11.2911 4.34807L13.0928 3.67116Z"
                                  fill="currentColor" fill-opacity="0.4"></path>
                        </svg>
                    </button>
                    <button onclick="toSystemMode()" title="تم روشن"
                            class="group lg:w-12 ml-4 lg:h-12 header__sun group w-10 h-10 hidden items-center relative dark:hover:bg-biscay-300 dark:bg-dark-920 justify-center rounded-full bg-gray-210 hover:bg-biscay-700 transition cursor-pointer">
                        <svg width="23"
                             class=" text-biscay-700 dark:text-gray-900 dark:group-hover:text-dark-920 group-hover:text-biscay-300"
                             height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M11.8025 18.0871C7.03723 18.0871 5.4658 16.5156 5.51682 11.8013C5.56785 7.08705 7.03723 5.51562 11.8025 5.51562C16.5678 5.51562 18.0882 7.08705 18.0882 11.8013C18.0882 16.5156 16.5678 18.0871 11.8025 18.0871Z"
                                  fill="currentColor"></path>
                            <path
                                d="M11.8008 0.800781C12.2347 0.800781 12.5865 1.15256 12.5865 1.5865V3.15792C12.5865 3.59186 12.2347 3.94364 11.8008 3.94364C11.3668 3.94364 11.0151 3.59186 11.0151 3.15792V1.5865C11.0151 1.15256 11.3668 0.800781 11.8008 0.800781Z"
                                fill="currentColor" fill-opacity="0.4"></path>
                            <path
                                d="M12.5865 20.4436C12.5865 20.0097 12.2347 19.6579 11.8008 19.6579C11.3668 19.6579 11.0151 20.0097 11.0151 20.4436V22.0151C11.0151 22.449 11.3668 22.8008 11.8008 22.8008C12.2347 22.8008 12.5865 22.449 12.5865 22.0151V20.4436Z"
                                fill="currentColor" fill-opacity="0.4"></path>
                            <path
                                d="M22.8008 11.8008C22.8008 12.2347 22.449 12.5865 22.0151 12.5865H20.4436C20.0097 12.5865 19.6579 12.2347 19.6579 11.8008C19.6579 11.3668 20.0097 11.0151 20.4436 11.0151H22.0151C22.449 11.0151 22.8008 11.3668 22.8008 11.8008Z"
                                fill="currentColor" fill-opacity="0.4"></path>
                            <path
                                d="M3.15792 12.5865C3.59186 12.5865 3.94364 12.2347 3.94364 11.8008C3.94364 11.3668 3.59186 11.0151 3.15792 11.0151H1.5865C1.15256 11.0151 0.800781 11.3668 0.800781 11.8008C0.800781 12.2347 1.15256 12.5865 1.5865 12.5865H3.15792Z"
                                fill="currentColor" fill-opacity="0.4"></path>
                            <path
                                d="M3.38805 3.38805C3.6949 3.08121 4.19238 3.08121 4.49922 3.38805L5.61039 4.49922C5.91723 4.80606 5.91723 5.30355 5.61039 5.61039C5.30355 5.91723 4.80606 5.91723 4.49922 5.61039L3.38805 4.49922C3.08121 4.19238 3.08121 3.6949 3.38805 3.38805Z"
                                fill="currentColor" fill-opacity="0.4"></path>
                            <path
                                d="M4.49922 20.5388C4.19238 20.8457 3.6949 20.8457 3.38805 20.5388C3.08121 20.232 3.08121 19.7345 3.38805 19.4277L4.49922 18.3165C4.80606 18.0097 5.30355 18.0097 5.61039 18.3165C5.91723 18.6233 5.91723 19.1208 5.61039 19.4277L4.49922 20.5388Z"
                                fill="currentColor" fill-opacity="0.4"></path>
                            <path
                                d="M20.5388 3.38805C20.232 3.08121 19.7345 3.08121 19.4277 3.38805L18.3165 4.49922C18.0097 4.80606 18.0097 5.30355 18.3165 5.61039C18.6233 5.91723 19.1208 5.91723 19.4277 5.61039L20.5388 4.49922C20.8457 4.19238 20.8457 3.6949 20.5388 3.38805Z"
                                fill="currentColor" fill-opacity="0.4"></path>
                            <path
                                d="M19.4277 20.5388C19.7345 20.8457 20.232 20.8457 20.5388 20.5388C20.8457 20.232 20.8457 19.7345 20.5388 19.4277L19.4277 18.3165C19.1208 18.0097 18.6233 18.0097 18.3165 18.3165C18.0097 18.6233 18.0097 19.1208 18.3165 19.4277L19.4277 20.5388Z"
                                fill="currentColor" fill-opacity="0.4"></path>
                        </svg>
                    </button>
                    <button onclick="toDarkMode()" title="دارک مود بر اساس سیستم شما"
                            class="group header__indeterminate lg:w-12 ml-4 lg:h-12 group w-10 h-10 hidden items-center relative dark:hover:bg-biscay-300 dark:bg-dark-920 justify-center rounded-full bg-gray-210 hover:bg-biscay-700 transition cursor-pointer">
                        <svg
                            class=" text-biscay-700 dark:text-gray-900 dark:group-hover:text-dark-920 group-hover:text-biscay-300"
                            height="23" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                  d="M12 2A10 10 0 0 0 2 12A10 10 0 0 0 12 22A10 10 0 0 0 22 12A10 10 0 0 0 12 2M12 4A8 8 0 0 1 20 12A8 8 0 0 1 12 20V4Z"></path>
                        </svg>
                    </button>
                </div>
                <div>
                    <div class="flex items-center">
                        <div class="lg:flex hidden ml-4">
                            <livewire:components.header.cart/>
                            <!-- Livewire Component wire-end:EUpGhEdIp14IpYT0l1H4 -->
                            <div wire:id="KfyXi9AtrJ4YfsGEkC1s" class=" flex">
                                <div class="group flex items-center ">
                                    <a href="https://user.roocket.ir/notifications"
                                       class="group lg:w-12 lg:h-12  w-10 h-10 flex items-center relative dark:hover:bg-biscay-300 dark:bg-dark-920 justify-center rounded-full bg-gray-210 hover:bg-biscay-700 transition cursor-pointer">
                                        <svg width="14" height="17" viewBox="0 0 14 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                class="fill-current text-biscay-700 dark:group-hover:text-dark-920 dark:text-gray-900 group-hover:text-biscay-300"
                                                d="M13.3014 8.50275C12.709 7.81089 12.4397 7.21133 12.4397 6.19274V5.8464C12.4397 4.51905 12.1342 3.66382 11.47 2.8086C10.4463 1.48043 8.72294 0.679932 7.03584 0.679932H6.9641C5.31247 0.679932 3.64311 1.44367 2.60167 2.71793C1.90119 3.59031 1.56023 4.48229 1.56023 5.8464V6.19274C1.56023 7.21133 1.30873 7.81089 0.698539 8.50275C0.249559 9.01245 0.106079 9.66755 0.106079 10.3766C0.106079 11.0864 0.339033 11.7586 0.806552 12.3051C1.41675 12.9602 2.27843 13.3784 3.15866 13.4511C4.43305 13.5965 5.70744 13.6512 7.00038 13.6512C8.2925 13.6512 9.5669 13.5598 10.8421 13.4511C11.7215 13.3784 12.5832 12.9602 13.1934 12.3051C13.6601 11.7586 13.8939 11.0864 13.8939 10.3766C13.8939 9.66755 13.7504 9.01245 13.3014 8.50275"></path>
                                            <path
                                                class="fill-current text-biscay-700 dark:group-hover:text-dark-920 dark:text-gray-900 group-hover:text-biscay-300"
                                                opacity="0.4"
                                                d="M8.62912 14.653C8.22367 14.5664 5.75307 14.5664 5.34762 14.653C5.00101 14.733 4.62619 14.9192 4.62619 15.3277C4.64634 15.7173 4.87446 16.0612 5.19044 16.2793L5.18963 16.2801C5.59831 16.5986 6.07792 16.8012 6.5801 16.8739C6.84771 16.9107 7.12016 16.909 7.39745 16.8739C7.89883 16.8012 8.37844 16.5986 8.78711 16.2801L8.78631 16.2793C9.10229 16.0612 9.3304 15.7173 9.35055 15.3277C9.35055 14.9192 8.97573 14.733 8.62912 14.653"></path>
                                        </svg>
                                        <span
                                            class="absolute text-white bg-red-450 rounded-full w-6 h-6 flex items-center justify-center text-xs -top-2 -right-2">2</span>
                                    </a>
                                    <a class="lg:hidden dark:text-white text-biscay-700 mr-2"
                                       href="https://user.roocket.ir/notifications">
                                        اعلانات
                                    </a>
                                </div>
                            </div>
                            <!-- Livewire Component wire-end:KfyXi9AtrJ4YfsGEkC1s -->
                        </div>
                        <div wire:id="lj4ytiLc3hkLSngQMbY8" x-data="{ userDropDown : false }" class="relative"
                             :class="userDropDown ? 'z-50' : ' '">
                            <div @click="userDropDown = true , $dispatch('overlay-show')" href="#"
                                 class="group w-12 h-12 flex items-center justify-center rounded-full bg-gray-210 dark:bg-dark-920 hover:bg-biscay-700 transition relative cursor-pointer">
                                <div
                                    class="w-12 h-12 bg-gray-300 rounded-full overflow-hidden border-2 border-solid border-gray-80">
                                    <img src="https://roocket.ir/img/default.png" alt="user-avatar">
                                </div>
                                <span
                                    class="absolute text-white bg-yellow-500 rounded-full w-6 h-6 flex items-center justify-center text-xs -top-2 -right-2">6</span>
                            </div>
                            <div @click.away="userDropDown = false,$dispatch('overlay-hide')" x-show="userDropDown"
                                 class="absolute sm:w-80 w-276 dark:!bg-dark-930 dark:shadow-whiteShadow bg-white rounded-lg overflow-hidden top-16 -left-4 z-10"
                                 style="display: none;">
                                <div>
                                    <div class="pt-7 px-5">
                                        <div class="relative">
                                 <span
                                     class="absolute bg-biscay-100 dark:bg-white dark:bg-opacity-10 w-px md:h-full right-22px z-negative"></span>
                                            <div class="flex items-start mb-2">
                                                <div wire:id="plVQFtAKhzNoGWJPSJOt" class="relative hvr-ripple-out"
                                                     style="" x-data="{ hover : false}" @mouseenter="hover = true"
                                                     @mouseleave="hover = false">
                                                    <div
                                                        class="w-12 h-12 ml-4 bg-gray-300 group relative rounded-full overflow-hidden border-2 border-solid border-green-700">
                                                        <a href="/@rezarostami">
                                                            <img
                                                                class="transition duration-200 transform group-hover:scale-110 w-full h-full"
                                                                src="https://roocket.ir/img/default.png"
                                                                alt="user-avatar">
                                                            <div
                                                                class="w-full h-full absolute top-0 right-0 bg-biscay-700 bg-opacity-20 z-0"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- Livewire Component wire-end:plVQFtAKhzNoGWJPSJOt -->
                                                <div class="flex flex-col">
                                                    <a href="/@rezarostami"
                                                       class="mb-2 dark:text-white text-biscay-500 hover:text-biscay-650 duration-200 transition font-bold text-xl">رضا
                                                        رستمی نیکو</a>
                                                    <a href="https://user.roocket.ir/"
                                                       class="flex items-center font-medium text-base dark:text-blue-450 text-blue-700 hover:opacity-80">
                                                        مشاهده پنل کاربری
                                                        <svg class="mr-2" width="15" height="10" viewBox="0 0 15 10"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M4.99998 0.833344L0.833313 5.00001M0.833313 5.00001H14.1666M0.833313 5.00001L4.99998 9.16668"
                                                                stroke="#3B82F6" stroke-width="1.28571"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="pr-12">
                                                <div class="relative flex items-center justify-between mb-3">
                                       <span
                                           class="w-4 h-4 absolute rounded-full bg-blue-700 -right-34px"></span>
                                                    <div>
                                          <span
                                              class="dark:text-gray-100 text-gray-300 font-bold text-sm">کیف پول</span>
                                                    </div>
                                                    <div>
                                          <span class="flex items-center dark:text-gray-100 text-gray-300 font-bold text-sm">
                                             0
                                             <svg class="mr-1" width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                  xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.874343 3.99165C1.02826 3.99165 1.1599 3.96938 1.26926 3.92482C1.38267 3.88432 1.47583 3.82761 1.54874 3.7547C1.62165 3.6818 1.67835 3.59471 1.71886 3.49345C1.75936 3.39624 1.78366 3.29296 1.79176 3.18359H1.37862C1.168 3.18359 0.995855 3.16132 0.862191 3.11676C0.728527 3.07221 0.623216 3.0074 0.546258 2.92234C0.4693 2.83323 0.414619 2.7259 0.382216 2.60033C0.353863 2.47477 0.339686 2.333 0.339686 2.17504C0.339686 2.01707 0.361964 1.86923 0.406518 1.73152C0.451073 1.58975 0.51588 1.46621 0.600939 1.3609C0.690048 1.25559 0.79941 1.17256 0.929023 1.1118C1.05864 1.04699 1.2085 1.01459 1.37862 1.01459C1.51634 1.01459 1.64595 1.03687 1.76746 1.08142C1.89302 1.12598 2.00239 1.19686 2.09555 1.29407C2.18871 1.39128 2.26161 1.51684 2.31427 1.67076C2.37097 1.82468 2.39933 2.01302 2.39933 2.23579V2.51527H2.89145C2.98056 2.51527 3.02512 2.62261 3.02512 2.83728C3.02512 3.06816 2.98056 3.18359 2.89145 3.18359H2.38718C2.37908 3.38206 2.33857 3.57041 2.26566 3.74863C2.19276 3.92685 2.0915 4.08279 1.96188 4.21645C1.83632 4.35012 1.68443 4.45543 1.50621 4.53239C1.32799 4.61339 1.12749 4.6539 0.904721 4.6539H0.291081L0.254628 3.99165H0.874343ZM0.935099 2.13251C0.935099 2.27427 0.965477 2.37351 1.02623 2.43021C1.09104 2.48692 1.2166 2.51527 1.40292 2.51527H1.80392V2.22972C1.80392 2.0191 1.76341 1.87126 1.6824 1.7862C1.60544 1.70114 1.49608 1.65861 1.35432 1.65861C1.22065 1.65861 1.11737 1.69911 1.04446 1.78012C0.971553 1.86113 0.935099 1.97859 0.935099 2.13251ZM3.89142 2.51527C3.94407 2.51527 3.9785 2.54363 3.99471 2.60033C4.01496 2.65299 4.02508 2.73197 4.02508 2.83728C4.02508 2.95474 4.01496 3.04183 3.99471 3.09853C3.9785 3.15524 3.94407 3.18359 3.89142 3.18359H2.88894C2.83628 3.18359 2.80185 3.15727 2.78565 3.10461C2.7654 3.0479 2.75527 2.9669 2.75527 2.86158C2.75527 2.74412 2.7654 2.65704 2.78565 2.60033C2.80185 2.54363 2.83628 2.51527 2.88894 2.51527H3.89142ZM4.89414 2.51527C4.94679 2.51527 4.98122 2.54363 4.99742 2.60033C5.01767 2.65299 5.0278 2.73197 5.0278 2.83728C5.0278 2.95474 5.01767 3.04183 4.99742 3.09853C4.98122 3.15524 4.94679 3.18359 4.89414 3.18359H3.89166C3.839 3.18359 3.80457 3.15727 3.78837 3.10461C3.76812 3.0479 3.75799 2.9669 3.75799 2.86158C3.75799 2.74412 3.76812 2.65704 3.78837 2.60033C3.80457 2.54363 3.839 2.51527 3.89166 2.51527H4.89414ZM5.89685 2.51527C5.94951 2.51527 5.98394 2.54363 6.00014 2.60033C6.02039 2.65299 6.03052 2.73197 6.03052 2.83728C6.03052 2.95474 6.02039 3.04183 6.00014 3.09853C5.98394 3.15524 5.94951 3.18359 5.89685 3.18359H4.89437C4.84172 3.18359 4.80729 3.15727 4.79109 3.10461C4.77084 3.0479 4.76071 2.9669 4.76071 2.86158C4.76071 2.74412 4.77084 2.65704 4.79109 2.60033C4.80729 2.54363 4.84172 2.51527 4.89437 2.51527H5.89685ZM6.89957 2.51527C6.95223 2.51527 6.98666 2.54363 7.00286 2.60033C7.02311 2.65299 7.03324 2.73197 7.03324 2.83728C7.03324 2.95474 7.02311 3.04183 7.00286 3.09853C6.98666 3.15524 6.95223 3.18359 6.89957 3.18359H5.89709C5.84444 3.18359 5.81001 3.15727 5.79381 3.10461C5.77355 3.0479 5.76343 2.9669 5.76343 2.86158C5.76343 2.74412 5.77355 2.65704 5.79381 2.60033C5.81001 2.54363 5.84444 2.51527 5.89709 2.51527H6.89957ZM7.45877 2.51527C7.73015 2.51527 7.86584 2.38363 7.86584 2.12036V1.40343H8.48555V2.16289C8.48555 2.49907 8.40049 2.75425 8.23037 2.92842C8.06026 3.09853 7.82128 3.18359 7.51345 3.18359H6.89981C6.84715 3.18359 6.81273 3.15727 6.79652 3.10461C6.77627 3.0479 6.76615 2.9669 6.76615 2.86158C6.76615 2.74412 6.77627 2.65704 6.79652 2.60033C6.81273 2.54363 6.84715 2.51527 6.89981 2.51527H7.45877ZM8.50378 0.692582H7.87191V0.0971694H8.50378V0.692582ZM7.63496 0.692582H7.0031V0.0971694H7.63496V0.692582ZM3.62053 8.0317C3.62053 8.26258 3.58408 8.47522 3.51117 8.66964C3.44231 8.86812 3.34105 9.04026 3.20739 9.18607C3.07777 9.33189 2.91778 9.4453 2.72741 9.52631C2.54109 9.61137 2.3325 9.6539 2.10162 9.6539H1.71886C1.26521 9.6539 0.912822 9.51416 0.661695 9.23468C0.410569 8.9552 0.285006 8.57243 0.285006 8.08638V6.99884H0.898645V8.06208C0.898645 8.20385 0.914847 8.33143 0.94725 8.44485C0.979654 8.55826 1.03028 8.65547 1.09914 8.73648C1.17205 8.81749 1.26521 8.88027 1.37862 8.92482C1.49608 8.96938 1.63785 8.99165 1.80392 8.99165H2.07124C2.24136 8.99165 2.38515 8.96533 2.50261 8.91267C2.62413 8.86407 2.72134 8.79521 2.79424 8.7061C2.8712 8.62104 2.92588 8.51978 2.95829 8.40232C2.99069 8.2889 3.00689 8.16739 3.00689 8.03778V6.40343H3.62053V8.0317ZM2.19276 6.3123H1.50621V5.69258H2.19276V6.3123ZM5.17841 8.18359C5.065 8.18359 4.95564 8.16942 4.85033 8.14106C4.74907 8.10866 4.65996 8.05601 4.583 7.9831C4.50604 7.91019 4.44528 7.81501 4.40073 7.69754C4.35617 7.57603 4.3339 7.42616 4.3339 7.24795V4.4167H4.95361V7.09605C4.95361 7.22567 4.98196 7.32895 5.03867 7.40591C5.09943 7.47882 5.18854 7.51527 5.306 7.51527H5.44574C5.53485 7.51527 5.5794 7.62261 5.5794 7.83728C5.5794 8.06816 5.53485 8.18359 5.44574 8.18359H5.17841ZM5.50085 7.51527C5.63856 7.51527 5.7459 7.48895 5.82286 7.43629C5.89981 7.37958 5.93829 7.28845 5.93829 7.16289V7.02922C5.93829 6.86721 5.96057 6.71734 6.00512 6.57963C6.05373 6.44191 6.12259 6.32445 6.2117 6.22724C6.30081 6.13003 6.40814 6.0551 6.5337 6.00244C6.66332 5.94573 6.80711 5.91738 6.96508 5.91738C7.13114 5.91738 7.27696 5.94573 7.40252 6.00244C7.53213 6.0551 7.63947 6.13205 7.72453 6.23331C7.80959 6.33052 7.8744 6.44799 7.91895 6.5857C7.96351 6.72342 7.98578 6.87328 7.98578 7.0353C7.98578 7.39984 7.89262 7.68337 7.7063 7.88589C7.52403 8.08436 7.27493 8.18359 6.959 8.18359C6.79698 8.18359 6.64104 8.15322 6.49118 8.09246C6.34536 8.02765 6.23397 7.92639 6.15702 7.78868C6.08006 7.94664 5.98082 8.05195 5.85931 8.10461C5.7378 8.15727 5.61831 8.18359 5.50085 8.18359H5.44617C5.39351 8.18359 5.35908 8.15727 5.34288 8.10461C5.32263 8.0479 5.3125 7.9669 5.3125 7.86158C5.3125 7.74412 5.32263 7.65704 5.34288 7.60033C5.35908 7.54363 5.39351 7.51527 5.44617 7.51527H5.50085ZM7.39037 7.07783C7.39037 6.94011 7.35797 6.82468 7.29316 6.73152C7.2324 6.63836 7.12102 6.59178 6.959 6.59178C6.80508 6.59178 6.6937 6.63836 6.62484 6.73152C6.56003 6.82063 6.52763 6.93809 6.52763 7.0839C6.52763 7.22567 6.56611 7.333 6.64307 7.40591C6.72002 7.47882 6.82534 7.51527 6.959 7.51527C7.24658 7.51527 7.39037 7.36946 7.39037 7.07783Z"
                                                    fill="#98A3B8"></path>
                                             </svg>
                                          </span>
                                                    </div>
                                                </div>
                                                <div class="relative flex items-center justify-between mb-3">
                                       <span
                                           class="w-4 h-4 absolute rounded-full bg-green-700 -right-34px"></span>
                                                    <div>
                                          <span
                                              class="dark:text-gray-100 text-gray-300 font-bold text-sm">تجربه کاربری</span>
                                                    </div>
                                                    <div>
                                          <span
                                              class="text-green-700 font-bold text-sm">43,858 تجربه</span>
                                                    </div>
                                                </div>
                                                <div class="relative flex items-center justify-between">
                                       <span
                                           class="w-4 h-4 absolute rounded-full bg-yellow-500 -right-34px"></span>
                                                    <div>
                                          <span
                                              class="dark:text-gray-100 text-gray-300 font-bold text-sm">باقیمانده اشتراک</span>
                                                    </div>
                                                    <div>
                                          <span
                                              class="text-yellow-500 font-bold text-sm">عضو ویژه نیستید</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="dark:border-gray-360 dark:border-opacity-10 border-biscay-100 mt-5 mb-3">
                                    <ul class="pb-7 px-5">
                                        <li class="dark:hover:bg-dark-450 hover:bg-dark-550 hover:bg-opacity-10 rounded-lg">
                                            <a href="https://user.roocket.ir/courses"
                                               class="flex items-center py-3 px-4">
                                                <div class="flex items-center">
                                                    <svg class="dark:text-gray-920 text-gray-550 ml-4" width="21"
                                                         height="21" viewBox="0 0 21 21" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M13.8862 13.2399C13.9552 14.801 12.6953 16.1211 11.0724 16.1874C10.9529 16.1925 5.12549 16.1807 5.12549 16.1807C3.5105 16.3033 2.09705 15.1428 1.96966 13.5876C1.96007 13.4717 1.96268 7.21902 1.96268 7.21902C1.89114 5.65627 3.14928 4.33284 4.773 4.26398C4.89428 4.2581 10.7138 4.26902 10.7138 4.26902C12.3367 4.1481 13.7545 5.31701 13.8801 6.87976C13.8889 6.99229 13.8862 13.2399 13.8862 13.2399Z"
                                                              stroke="currentColor" stroke-width="1.7"
                                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M13.8889 8.50365L16.6949 6.20729C17.3902 5.6381 18.4331 6.13401 18.4323 7.03125L18.422 13.2932C18.4212 14.1905 17.3774 14.6821 16.6838 14.1129L13.8889 11.8166"
                                                            stroke="currentColor" stroke-width="1.7"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="dark:text-gray-920 text-gray-550 font-normal text-lg">دوره ها</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="dark:hover:bg-dark-450 hover:bg-dark-550 hover:bg-opacity-10 rounded-lg">
                                            <a href="https://user.roocket.ir/financial"
                                               class="flex items-center justify-between py-3 px-4">
                                                <div class="flex items-center">
                                                    <svg class="dark:text-gray-920 text-gray-550 ml-4" width="21"
                                                         height="21" viewBox="0 0 21 21" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M18.4382 12.2664H14.9887C13.7221 12.2656 12.6955 11.2398 12.6947 9.9732C12.6947 8.70663 13.7221 7.68079 14.9887 7.68001H18.4382"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M15.3789 9.92071H15.1133" stroke="currentColor"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M6.60165 2.55625H13.9666C16.436 2.55625 18.438 4.55823 18.438 7.0277V13.1431C18.438 15.6126 16.436 17.6146 13.9666 17.6146H6.60165C4.13218 17.6146 2.1302 15.6126 2.1302 13.1431V7.0277C2.1302 4.55823 4.13218 2.55625 6.60165 2.55625Z"
                                                              stroke="currentColor" stroke-width="1.5"
                                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M5.99492 6.42315H10.5953" stroke="currentColor"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="dark:text-gray-920 text-gray-550 font-normal text-lg">مالی و اشتراک</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="dark:hover:bg-dark-450 hover:bg-dark-550 hover:bg-opacity-10 rounded-lg">
                                            <a href="https://user.roocket.ir/questions"
                                               class="flex items-center justify-between py-3 px-4">
                                                <div class="flex items-center">
                                                    <svg class="dark:text-gray-920 text-gray-550 ml-4" width="19"
                                                         height="19" viewBox="0 0 19 19" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="0.75" y="0.75" width="17.5" height="17.5" rx="5.25"
                                                              stroke="currentColor" stroke-width="1.5"></rect>
                                                        <path
                                                            d="M9.50018 4.74982C8.75758 4.74982 8.14246 5.03617 7.72098 5.51032C7.31246 5.96991 7.12518 6.5603 7.12518 7.12482C7.12518 8.11758 7.70632 8.80324 8.08418 9.24907L8.1044 9.27293C8.55085 9.80006 8.70852 10.0222 8.70852 10.2915C8.70852 10.7287 9.06296 11.0832 9.50018 11.0832C9.93741 11.0832 10.2918 10.7287 10.2918 10.2915C10.2918 9.39408 9.73447 8.7428 9.38037 8.32905C9.35682 8.30153 9.33416 8.27506 9.31263 8.24964C8.89792 7.75998 8.70852 7.48219 8.70852 7.12482C8.70852 6.89767 8.78513 6.6964 8.90438 6.56223C9.01069 6.44264 9.18723 6.33315 9.50018 6.33315C9.81314 6.33315 9.98968 6.44264 10.096 6.56223C10.2152 6.6964 10.2918 6.89767 10.2918 7.12482C10.2918 7.56204 10.6463 7.91649 11.0835 7.91649C11.5207 7.91649 11.8752 7.56204 11.8752 7.12482C11.8752 6.5603 11.6879 5.96991 11.2794 5.51032C10.8579 5.03617 10.2428 4.74982 9.50018 4.74982Z"
                                                            fill="currentColor"></path>
                                                        <path
                                                            d="M9.50018 11.8748C9.06296 11.8748 8.70852 12.2293 8.70852 12.6665C8.70852 13.1037 9.06296 13.4582 9.50018 13.4582C9.93741 13.4582 10.2918 13.1037 10.2918 12.6665C10.2918 12.2293 9.93741 11.8748 9.50018 11.8748Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                    <span class="dark:text-gray-920 text-gray-550 font-normal text-lg">پرسش‌ها</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="dark:hover:bg-dark-450 hover:bg-dark-550 hover:bg-opacity-10 rounded-lg">
                                            <a href="https://user.roocket.ir/missions"
                                               class="flex items-center justify-between py-3 px-4">
                                                <div class="flex items-center">
                                                    <svg class="dark:text-gray-920 text-gray-550 ml-4" width="21"
                                                         height="22" viewBox="0 0 21 22" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M15.2158 17.9869C16.8118 17.9869 18.1061 16.6935 18.1069 15.0975V15.0958V12.7952C17.0529 12.7952 16.1991 11.9414 16.1983 10.8874C16.1983 9.83418 17.0521 8.97954 18.1061 8.97954H18.1069V6.67892C18.1086 5.08211 16.816 3.78694 15.2201 3.78524H15.215H5.23537C3.63857 3.78524 2.34425 5.0787 2.3434 6.67551V6.67636V9.05367C3.36079 9.01788 4.21372 9.81373 4.24951 10.8311C4.25036 10.8499 4.25121 10.8686 4.25121 10.8874C4.25207 11.9397 3.40083 12.7935 2.34851 12.7952H2.3434V15.0958C2.34255 16.6917 3.63686 17.9869 5.23281 17.9869H5.23367H15.2158Z"
                                                              stroke="currentColor" stroke-width="1.5"
                                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M10.5414 8.31236L11.0663 9.37491C11.1174 9.47886 11.2162 9.55129 11.3313 9.56833L12.5046 9.7396C12.7951 9.7822 12.9102 10.1384 12.7006 10.342L11.8519 11.1685C11.7684 11.2495 11.7309 11.3662 11.7496 11.4813L11.9499 12.6486C11.9993 12.9375 11.6968 13.1573 11.4378 13.021L10.3888 12.4697C10.2857 12.4151 10.163 12.4151 10.0599 12.4697L9.01188 13.021C8.752 13.1573 8.44951 12.9375 8.49893 12.6486L8.69917 11.4813C8.71876 11.3662 8.68042 11.2495 8.59692 11.1685L7.74909 10.342C7.53948 10.1384 7.65451 9.7822 7.94422 9.7396L9.11754 9.56833C9.23257 9.55129 9.33226 9.47886 9.38339 9.37491L9.90742 8.31236C10.0369 8.04992 10.4119 8.04992 10.5414 8.31236Z"
                                                              stroke="currentColor" stroke-width="1.5"
                                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="dark:text-gray-920 text-gray-550 font-normal text-lg">ماموریت‌ها</span>
                                                </div>
                                                <span
                                                    class="rounded-full w-6 h-6  bg-yellow-500 flex justify-center text-white font-normal text-lg">6</span>
                                            </a>
                                        </li>
                                        <li class="hover:bg-dark-550 hover:bg-opacity-10 rounded-lg">
                                            <form action="https://auth.roocket.ir/logout" method="post"
                                                  id="logout-action"><input type="hidden" name="_token"
                                                                            value="1DzCZNxpiPSVlruygtVH5mE4jHRjLmULnab1drE7">
                                            </form>
                                            <div
                                                onclick="event.preventDefault();document.getElementById('logout-action').submit()"
                                                class="flex items-center py-3 px-4 cursor-pointer">
                                                <div class="flex items-center">
                                                    <svg class="dark:text-gray-920 text-gray-550 ml-4" width="21"
                                                         height="21" viewBox="0 0 21 21" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.7949 6.70662V5.91163C12.7949 4.17764 11.3889 2.7717 9.65495 2.7717H5.50104C3.76791 2.7717 2.36197 4.17764 2.36197 5.91163V15.3953C2.36197 17.1293 3.76791 18.5352 5.50104 18.5352H9.66347C11.3923 18.5352 12.7949 17.1336 12.7949 15.4047V14.6012"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M18.5835 10.6534H8.32356" stroke="currentColor"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"></path>
                                                        <path d="M16.0883 8.16948L18.5833 10.6533L16.0883 13.138"
                                                              stroke="currentColor" stroke-width="1.5"
                                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="dark:text-gray-920 text-gray-550 font-normal text-lg">خروج از حساب کاربری</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Livewire Component wire-end:lj4ytiLc3hkLSngQMbY8 -->
                    </div>
                </div>
            </div>
            <div :class="{ '!right-0' : menuSate , '!-right-full' : !menuSate}"
                 class="modal dark:shadow-whiteShadow -right-full lg:bg-gray-80 dark:bg-dark-910 lg:mx-9 lg:shadow-headerSecTwo lg:rounded-b-3xl lg:py-5 lg:static fixed flex flex-col items-center h-full z-under-overlay lg:w-auto w-276 transition-all duration-200 ease-in-out top-0 pt-10 bg-white !-right-full">
                <div class="justify-between relative items-center lg:hidden  flex">
                    <span class="transform lg:scale-90 scale-75">
                          <svg class="  w-56 sm:inline-block dark:hidden" width="220" version="1.1" id="Layer_1"
                               xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                               y="0px" viewBox="0 0 578 128" style="enable-background: new 0 0 578 128"
                               xml:space="preserve">
                             <style type="text/css">
                                .st0 {
                                    fill: #ffffff;
                                }
                                .st1 {
                                    fill: #ff9900;
                                }
                                .st2 {
                                    fill: #ff3333;
                                }
                                .st3 {
                                    fill: #637789;
                                }
                             </style>
                             <g>
                                <g>
                                   <g>
                                      <polygon class="st1" points="46.3,124.7 31.8,103.4 46.3,88.9 60.9,103.4 			"></polygon>
                                      <path class="st2" d="M86.5,43.7v48l-20-15.1c0,0,2.2-18.7,2.6-32.9c0.2-7-6.4-13-22.6-21c-16.3,8.1-22.8,14-22.6,21
                                         c0.4,14.2,2.6,32.9,2.6,32.9l-20,15.1v-48c0-8.5,3.6-16.2,10.7-22.8c5-4.7,11.9-9,22.3-14.1l7-3.5l7,3.5
                                         c10.4,5.1,17.3,9.5,22.3,14.1C82.9,27.5,86.5,35.2,86.5,43.7z"></path>
                                   </g>
                                   <path class="st3" d="M163.7,86.1l-17-16.5h-21.5v16.5h-12V26.4h43.7c10.3,0,18.9,9.9,18.9,21.6c0,9.2-5.5,17.7-13.2,20.5
                                      l17.9,17.6H163.7z M156.4,56.5c3.9,0,7.4-4,7.4-8.5c0-4.6-3.4-8.5-7.4-8.5h-31.2v16.9H156.4z"></path>
                                   <path class="st3" d="M216.1,87.4c-21.3,0-33.5-10.8-33.5-29.6v-2.9c0-18.8,12.2-29.7,33.5-29.7c21.3,0,33.5,10.8,33.5,29.7v2.9
                                      C249.6,76.6,237.4,87.4,216.1,87.4z M216.1,39c-12.9,0-21.4,2.7-21.4,16.1v2.4c0,13.3,8.6,16.1,21.4,16.1
                                      c11.2,0,21.5-1.9,21.5-16.1V55C237.6,40.9,227.3,39,216.1,39z"></path>
                                   <path class="st3" d="M289.2,87.4c-21.3,0-33.5-10.8-33.5-29.6v-2.9c0-18.8,12.2-29.7,33.5-29.7c21.3,0,33.5,10.8,33.5,29.7v2.9
                                      C322.7,76.6,310.5,87.4,289.2,87.4z M289.2,39c-12.9,0-21.4,2.7-21.4,16.1v2.4c0,13.3,8.6,16.1,21.4,16.1
                                      c11.2,0,21.5-1.9,21.5-16.1V55C310.8,40.9,300.4,39,289.2,39z"></path>
                                   <polygon class="st3"
                                            points="537.5,86.1 537.5,40.1 515.4,40.1 515.4,26.4 571.6,26.4 571.6,40.1 549.5,40.1 549.5,86.1 		">
                                   </polygon>
                                   <path class="st3" d="M362.2,87.1c-10,0-33.2-2.9-33.2-29.4v-3c0-26.5,23.2-29.4,33.2-29.4c14.9,0,20.7,3,22.1,3.9l0.5,0.3v11.7
                                      l-1.4-0.5c-2.3-0.8-10.4-3.4-21.2-3.4c-13.7,0-20.6,5.9-20.6,17.6v2.5c0,11.7,6.9,17.6,20.6,17.6c10.7,0,18.9-2.6,21.2-3.4
                                      l1.4-0.5v11.7l-0.5,0.3C382.9,84.1,377.1,87.1,362.2,87.1z"></path>
                                   <polygon class="st3" points="432.6,85.8 404.9,60.2 404.9,85.8 392.3,85.8 392.3,26.6 404.9,26.6 404.9,52.8 432,26.6 450.4,26.6
                                      420,56.2 452.3,85.8 		"></polygon>
                                   <polygon class="st3" points="456,85.8 456,26.6 509.3,26.6 509.3,38.5 468.6,38.5 468.6,50.5 506.3,50.5 506.3,61.9 468.6,61.9
                                      468.6,73.9 509.3,73.9 509.3,85.8 		"></polygon>
                                </g>
                             </g>
                          </svg>
                          <svg class="hidden w-56 dark:inline-block" width="203" height="46" viewBox="0 0 203 46"
                           fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path
                             d="M56.7434 30.6068L50.6089 24.5795H42.3797V30.6068H38.7888V9.56836H54.125C57.6037 9.56836 60.5587 13.0179 60.5587 17.074C60.5587 20.3719 58.5388 23.4044 55.7708 24.3142L55.4716 24.4279L61.7183 30.6447H56.7434V30.6068ZM42.3797 20.5235H53.9754C55.5838 20.5235 57.0052 18.8935 57.0052 17.036C57.0052 15.1407 55.6212 13.5865 53.9754 13.5865H42.3797V20.5235Z"
                             fill="white"></path>
                         <path
                             d="M75.448 31.0177C68.0418 31.0177 63.7776 27.227 63.7776 20.5933V19.5319C63.7776 12.8981 68.0418 9.10742 75.448 9.10742C82.8542 9.10742 87.1184 12.8981 87.1184 19.5319V20.5933C87.1184 27.227 82.8542 31.0177 75.448 31.0177ZM75.448 13.3909C71.2586 13.3909 67.3685 14.1491 67.3685 19.6456V20.5174C67.3685 26.014 71.2586 26.7721 75.448 26.7721C79.4504 26.7721 83.5649 26.014 83.5649 20.5174V19.6456C83.5649 14.1112 79.4504 13.3909 75.448 13.3909Z"
                             fill="white"></path>
                         <path
                             d="M101.743 31.0177C94.3364 31.0177 90.0723 27.227 90.0723 20.5933V19.5319C90.0723 12.8981 94.3364 9.10742 101.743 9.10742C109.149 9.10742 113.413 12.8981 113.413 19.5319V20.5933C113.413 27.227 109.186 31.0177 101.743 31.0177ZM101.743 13.3909C97.5533 13.3909 93.6632 14.1491 93.6632 19.6456V20.5174C93.6632 26.014 97.5533 26.7721 101.743 26.7721C105.745 26.7721 109.86 26.014 109.86 20.5174V19.6456C109.86 14.1112 105.782 13.3909 101.743 13.3909Z"
                             fill="white"></path>
                         <path d="M191.441 30.6068V13.8139H183.511V9.56836H202.962V13.8139H195.032V30.6068H191.441Z" fill="white"></path>
                         <path
                             d="M128.003 30.944C124.524 30.944 116.445 29.9205 116.445 20.5954V19.4961C116.445 10.171 124.524 9.14746 128.003 9.14746C133.352 9.14746 135.372 10.2468 135.746 10.5121V14.0375C134.885 13.7342 131.893 12.7865 128.003 12.7865C122.916 12.7865 120.223 15.1368 120.223 19.6098V20.5196C120.223 24.9926 122.916 27.3428 128.003 27.3428C131.893 27.3428 134.885 26.3952 135.746 26.0919V29.6173C135.372 29.8447 133.352 30.944 128.003 30.944Z"
                             fill="white"></path>
                         <path
                             d="M153.475 30.4963L142.964 20.6405V30.4963H139.187V9.64746H142.964V19.6928L153.251 9.64746L159.348 9.64746L148.239 20.0719L159.984 30.4963H153.475Z"
                             fill="white"></path>
                         <path
                             d="M162.152 30.4963V9.64746H180.593V13.2107H165.93V18.3661H179.508V21.7398H165.93V26.8952H180.593V30.4963H162.152Z"
                             fill="white"></path>
                         <path d="M200.232 5.17373H199.259V7.44816H199.035V5.17373H198.025V4.94629H200.269V5.17373H200.232Z" fill="white"></path>
                         <path
                             d="M202.738 4.94629H203V7.44816H202.776V5.74234C202.776 5.70443 202.776 5.59071 202.776 5.36327C202.551 5.85606 202.289 6.38676 201.953 6.95537H201.728C201.392 6.42467 201.092 5.89397 200.868 5.36327C200.868 5.43908 200.868 5.59071 200.868 5.74234V7.44816H200.644V4.94629H200.905C201.13 5.47699 201.429 6.0835 201.803 6.72792C202.215 6.0835 202.514 5.47699 202.738 4.94629Z"
                             fill="white"></path>
                         <path d="M14.4049 45.0127L9.16821 37.2796L14.4049 31.9727L19.6042 37.2796L14.4049 45.0127Z" fill="#FF8429"></path>
                         <path
                             d="M28.802 15.5175L28.802 33.0306L21.6202 27.4961C21.6202 27.4961 22.4057 20.6729 22.5553 15.4796C22.6301 12.9019 20.2736 10.7412 14.401 7.82237C8.56579 10.7791 6.20926 12.9398 6.28407 15.5175C6.39629 20.6729 7.2192 27.534 7.2192 27.534L0 33.0306L0 15.5175C0 12.4091 1.30918 9.604 3.85274 7.21586C5.64819 5.51004 8.11693 3.91795 11.8949 2.0605L14.4384 0.80957L16.982 2.0605C20.7225 3.91795 23.2286 5.51004 25.0241 7.21586C27.5302 9.604 28.802 12.4091 28.802 15.5175Z"
                             fill="#E81C4D"></path>
                      </svg>
                    </span>
                    <button
                        @click="$dispatch('overlay-hide') , $dispatch('menu-hide') , $dispatch('body-overflow-hide')"
                        class="lg:hidden absolute bottom-full mb-1 -left-2">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 2L9 9M9 9L2 16M9 9L16 16M9 9L2 2" stroke="#353F53" stroke-width="2.88235"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
                <form action="/search" class="lg:hidden inline-block w-full px-4 pt-5 pb-1">
                    <div class="w-full h-full relative flex items-center">
                        <input type="text" name="search"
                               class="w-full py-4 bg-gray-210 dark:bg-dark-890 rounded-xl pl-12 pr-8 dark:placeholder-gray-200 dark:text-white placeholder-dark-550 text-xs border-none"
                               placeholder="دنبال چی میگردی ؟">
                        <button type="submit" class="absolute left-5">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="7.82495" cy="7.82492" r="6.74142" stroke="#64748B" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></circle>
                                <path d="M12.5137 12.8638L15.1568 15.4999" stroke="#64748B" stroke-width="1.5"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>
                </form>
                <div class="px-6 w-full mt-5 mb-3 lg:hidden inline-block">
                    <div
                        class="font-bold text-gray-800 py-5 border-t border-b dark:border-opacity-10 border-biscay-100">
                        <div class="w-fit-content mb-5 lg:hidden">
                            <div class=" hidden header__moon items-center">
                                <button onclick="toLightMode()"
                                        class="group lg:w-12 flex ml-3 lg:h-12 group w-10 h-10  items-center relative dark:hover:bg-biscay-300 dark:bg-dark-920 justify-center rounded-full bg-gray-210 hover:bg-biscay-700 transition cursor-pointer">
                                    <svg width="20" height="21"
                                         class=" text-biscay-700 dark:text-gray-900 dark:group-hover:text-dark-920 group-hover:text-biscay-300"
                                         viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M19.9358 14.3652C20.0691 14.0415 19.9906 13.6679 19.7389 13.4276C19.4872 13.1873 19.115 13.1308 18.8051 13.2857C17.7584 13.8091 16.5801 14.1034 15.3317 14.1034C10.9835 14.1034 7.45846 10.5246 7.45846 6.1098C7.45846 4.32254 8.0352 2.67449 9.01033 1.34372C9.21644 1.06244 9.22917 0.680892 9.04229 0.386091C8.85541 0.0912907 8.50809 -0.054977 8.17055 0.0189828C3.50017 1.04235 2.17361e-07 5.25905 0 10.3077C-2.50276e-07 16.1208 4.64155 20.8333 10.3672 20.8333C14.6778 20.8333 18.372 18.1625 19.9358 14.3652Z"
                                              fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M13.0928 3.67116L13.7596 1.84183C13.9751 1.25035 14.4797 0.939795 14.9987 0.910156C15.5177 0.939795 16.0222 1.25035 16.2378 1.84183L16.9045 3.67116L18.7063 4.34807C19.9329 4.8089 19.9329 6.57032 18.7063 7.03114L16.9045 7.70806L16.2378 9.53738C16.0222 10.1289 15.5177 10.4394 14.9987 10.4691C14.4797 10.4394 13.9751 10.1289 13.7596 9.53738L13.0928 7.70806L11.2911 7.03114C10.0644 6.57032 10.0644 4.8089 11.2911 4.34807L13.0928 3.67116Z"
                                              fill="currentColor" fill-opacity="0.4"></path>
                                    </svg>
                                </button>
                                <span class="dark:text-gray-200  text-dark-920 font-semibold  ">
                        تم تاریک
                        </span>
                            </div>
                            <div class=" hidden header__sun items-center">
                                <button onclick="toSystemMode()"
                                        class="group flex lg:w-12 ml-3 lg:h-12 group w-10 h-10  items-center relative dark:hover:bg-biscay-300 dark:bg-dark-920 justify-center rounded-full bg-gray-210 hover:bg-biscay-700 transition cursor-pointer">
                                    <svg width="23"
                                         class=" text-biscay-700 dark:text-gray-900 dark:group-hover:text-dark-920 group-hover:text-biscay-300"
                                         height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M11.8025 18.0871C7.03723 18.0871 5.4658 16.5156 5.51682 11.8013C5.56785 7.08705 7.03723 5.51562 11.8025 5.51562C16.5678 5.51562 18.0882 7.08705 18.0882 11.8013C18.0882 16.5156 16.5678 18.0871 11.8025 18.0871Z"
                                              fill="currentColor"></path>
                                        <path
                                            d="M11.8008 0.800781C12.2347 0.800781 12.5865 1.15256 12.5865 1.5865V3.15792C12.5865 3.59186 12.2347 3.94364 11.8008 3.94364C11.3668 3.94364 11.0151 3.59186 11.0151 3.15792V1.5865C11.0151 1.15256 11.3668 0.800781 11.8008 0.800781Z"
                                            fill="currentColor" fill-opacity="0.4"></path>
                                        <path
                                            d="M12.5865 20.4436C12.5865 20.0097 12.2347 19.6579 11.8008 19.6579C11.3668 19.6579 11.0151 20.0097 11.0151 20.4436V22.0151C11.0151 22.449 11.3668 22.8008 11.8008 22.8008C12.2347 22.8008 12.5865 22.449 12.5865 22.0151V20.4436Z"
                                            fill="currentColor" fill-opacity="0.4"></path>
                                        <path
                                            d="M22.8008 11.8008C22.8008 12.2347 22.449 12.5865 22.0151 12.5865H20.4436C20.0097 12.5865 19.6579 12.2347 19.6579 11.8008C19.6579 11.3668 20.0097 11.0151 20.4436 11.0151H22.0151C22.449 11.0151 22.8008 11.3668 22.8008 11.8008Z"
                                            fill="currentColor" fill-opacity="0.4"></path>
                                        <path
                                            d="M3.15792 12.5865C3.59186 12.5865 3.94364 12.2347 3.94364 11.8008C3.94364 11.3668 3.59186 11.0151 3.15792 11.0151H1.5865C1.15256 11.0151 0.800781 11.3668 0.800781 11.8008C0.800781 12.2347 1.15256 12.5865 1.5865 12.5865H3.15792Z"
                                            fill="currentColor" fill-opacity="0.4"></path>
                                        <path
                                            d="M3.38805 3.38805C3.6949 3.08121 4.19238 3.08121 4.49922 3.38805L5.61039 4.49922C5.91723 4.80606 5.91723 5.30355 5.61039 5.61039C5.30355 5.91723 4.80606 5.91723 4.49922 5.61039L3.38805 4.49922C3.08121 4.19238 3.08121 3.6949 3.38805 3.38805Z"
                                            fill="currentColor" fill-opacity="0.4"></path>
                                        <path
                                            d="M4.49922 20.5388C4.19238 20.8457 3.6949 20.8457 3.38805 20.5388C3.08121 20.232 3.08121 19.7345 3.38805 19.4277L4.49922 18.3165C4.80606 18.0097 5.30355 18.0097 5.61039 18.3165C5.91723 18.6233 5.91723 19.1208 5.61039 19.4277L4.49922 20.5388Z"
                                            fill="currentColor" fill-opacity="0.4"></path>
                                        <path
                                            d="M20.5388 3.38805C20.232 3.08121 19.7345 3.08121 19.4277 3.38805L18.3165 4.49922C18.0097 4.80606 18.0097 5.30355 18.3165 5.61039C18.6233 5.91723 19.1208 5.91723 19.4277 5.61039L20.5388 4.49922C20.8457 4.19238 20.8457 3.6949 20.5388 3.38805Z"
                                            fill="currentColor" fill-opacity="0.4"></path>
                                        <path
                                            d="M19.4277 20.5388C19.7345 20.8457 20.232 20.8457 20.5388 20.5388C20.8457 20.232 20.8457 19.7345 20.5388 19.4277L19.4277 18.3165C19.1208 18.0097 18.6233 18.0097 18.3165 18.3165C18.0097 18.6233 18.0097 19.1208 18.3165 19.4277L19.4277 20.5388Z"
                                            fill="currentColor" fill-opacity="0.4"></path>
                                    </svg>
                                </button>
                                <span class="dark:text-gray-200 text-dark-920 font-semibold  ">
                        تم روشن
                        </span>
                            </div>
                            <div class=" hidden header__indeterminate items-center">
                                <button onclick="toDarkMode()"
                                        class="group flex lg:w-12 ml-3 lg:h-12 group w-10 h-10  items-center relative dark:hover:bg-biscay-300 dark:bg-dark-920 justify-center rounded-full bg-gray-210 hover:bg-biscay-700 transition cursor-pointer">
                                    <svg
                                        class=" text-biscay-700 dark:text-gray-900 dark:group-hover:text-dark-920 group-hover:text-biscay-300"
                                        height="23" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                              d="M12 2A10 10 0 0 0 2 12A10 10 0 0 0 12 22A10 10 0 0 0 22 12A10 10 0 0 0 12 2M12 4A8 8 0 0 1 20 12A8 8 0 0 1 12 20V4Z"></path>
                                    </svg>
                                </button>
                                <span class="dark:text-gray-200 text-dark-920 font-semibold  ">
                        دارک مود خودکار
                        </span>
                            </div>
                        </div>
                        <div wire:id="ndvlcjqqUQaX9hOmVi3U">
                            <div x-data="{ cartDropDown : false }" class="relative lg:inline-block hidden ml-4"
                                 :class="cartDropDown ? 'z-50' : ''">
                                <div @click="cartDropDown = true  , $dispatch('overlay-show')"
                                     class="group w-12 h-12 flex items-center dark:hover:bg-biscay-300 dark:bg-dark-920 justify-center rounded-full bg-gray-210 hover:bg-biscay-700 transition relative cursor-pointer">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            class="fill-current text-biscay-700 dark:text-gray-900 dark:group-hover:text-dark-920 group-hover:text-biscay-300"
                                            fill-rule="evenodd" clip-rule="evenodd"
                                            d="M19.1705 14.9551L18.4657 9.27669C18.0363 7.25046 16.8211 6.41663 15.6626 6.41663H6.35407C5.17937 6.41663 3.92365 7.1921 3.55909 9.27669L2.84616 14.9551C2.26286 19.1243 4.40973 20.1666 7.21282 20.1666H14.8119C17.6069 20.1666 19.689 18.6574 19.1705 14.9551ZM8.33901 11.1362C7.89158 11.1362 7.52887 10.7629 7.52887 10.3024C7.52887 9.84187 7.89158 9.46855 8.33901 9.46855C8.78644 9.46855 9.14915 9.84187 9.14915 10.3024C9.14915 10.7629 8.78644 11.1362 8.33901 11.1362ZM12.8353 10.3024C12.8353 10.7629 13.198 11.1362 13.6454 11.1362C14.0928 11.1362 14.4555 10.7629 14.4555 10.3024C14.4555 9.84187 14.0928 9.46855 13.6454 9.46855C13.198 9.46855 12.8353 9.84187 12.8353 10.3024Z"></path>
                                        <path
                                            class="fill-current text-biscay-700 dark:text-gray-900 dark:group-hover:text-dark-920 group-hover:text-biscay-300"
                                            opacity="0.4"
                                            d="M15.5594 6.20972C15.5623 6.28082 15.5486 6.35162 15.5195 6.41658H14.2021C14.1766 6.35053 14.1631 6.28049 14.1622 6.20972C14.1622 4.45201 12.7324 3.0271 10.9686 3.0271C9.20486 3.0271 7.77504 4.45201 7.77504 6.20972C7.78713 6.27815 7.78713 6.34815 7.77504 6.41658H6.42575C6.41367 6.34815 6.41367 6.27815 6.42575 6.20972C6.52827 3.76367 8.54793 1.83325 11.0046 1.83325C13.4612 1.83325 15.4808 3.76367 15.5834 6.20972H15.5594Z"></path>
                                    </svg>
                                </div>
                                <div @click.away="cartDropDown = false,$dispatch('overlay-hide')" x-show="cartDropDown"
                                     class="absolute w-96 pt-5 pb-8 px-7 dark:bg-dark-910 bg-white rounded-lg overflow-hidden top-16 -left-4 z-10"
                                     style="display: none;">
                                    <div class="px-1 flex items-center justify-between">
                              <span
                                  class="dark:hover:text-white text-gray-300 font-medium text-lg">0 مورد</span>
                                        <a href="/cart"
                                           class="flex group dark:hover:text-white dark:text-blue-450 text-blue-700 text-sm font-medium group hover:text-biscay-700 transition duration-200">
                                            <span class="-mt-1">مشاهده سبد خرید</span>
                                            <svg
                                                class="mr-1 dark:group-hover:text-white text-blue-700 group-hover:text-biscay-700"
                                                width="6" height="10" viewBox="0 0 6 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.50359 8.71228L0.838135 5.04682L4.50359 1.38136"
                                                      stroke="currentColor" stroke-width="1.32722"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </a>
                                    </div>
                                    <hr class="dark:border-gray-300 border-biscay-100 mt-4 mb-5">
                                    <div>
                                        <span class="text-gray-300 font-medium text-base">هنوز محصولی به سبد خرید اضافه نشده</span>
                                        <div class="mt-5">
                                            <a href="/series"
                                               class="flex items-center justify-center w-full py-4 rounded-lg dark:hover:bg-dark-900 dark:hover:text-white bg-blue-60 hover:bg-blue-200 text-blue-700 font-semibold text-lg transition">
                                                <span class="mt-1">مشاهده دوره‌های آموزشی</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:hidden flex mb-5">
                                <div href="https://user.roocket.ir/cart" class="group flex items-center ">
                                    <a href="#"
                                       class="group lg:w-12 lg:h-12  w-10 h-10 flex items-center relative justify-center rounded-full bg-gray-210 dark:bg-dark-920 hover:bg-biscay-700 transition cursor-pointer">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                class="fill-current text-biscay-700 dark:text-gray-200 group-hover:text-biscay-300"
                                                fill-rule="evenodd" clip-rule="evenodd"
                                                d="M19.1705 14.9551L18.4657 9.27669C18.0363 7.25046 16.8211 6.41663 15.6626 6.41663H6.35407C5.17937 6.41663 3.92365 7.1921 3.55909 9.27669L2.84616 14.9551C2.26286 19.1243 4.40973 20.1666 7.21282 20.1666H14.8119C17.6069 20.1666 19.689 18.6574 19.1705 14.9551ZM8.33901 11.1362C7.89158 11.1362 7.52887 10.7629 7.52887 10.3024C7.52887 9.84187 7.89158 9.46855 8.33901 9.46855C8.78644 9.46855 9.14915 9.84187 9.14915 10.3024C9.14915 10.7629 8.78644 11.1362 8.33901 11.1362ZM12.8353 10.3024C12.8353 10.7629 13.198 11.1362 13.6454 11.1362C14.0928 11.1362 14.4555 10.7629 14.4555 10.3024C14.4555 9.84187 14.0928 9.46855 13.6454 9.46855C13.198 9.46855 12.8353 9.84187 12.8353 10.3024Z"></path>
                                            <path
                                                class="fill-current text-biscay-700 dark:text-gray-200 group-hover:text-biscay-300"
                                                opacity="0.4"
                                                d="M15.5594 6.20972C15.5623 6.28082 15.5486 6.35162 15.5195 6.41658H14.2021C14.1766 6.35053 14.1631 6.28049 14.1622 6.20972C14.1622 4.45201 12.7324 3.0271 10.9686 3.0271C9.20486 3.0271 7.77504 4.45201 7.77504 6.20972C7.78713 6.27815 7.78713 6.34815 7.77504 6.41658H6.42575C6.41367 6.34815 6.41367 6.27815 6.42575 6.20972C6.52827 3.76367 8.54793 1.83325 11.0046 1.83325C13.4612 1.83325 15.4808 3.76367 15.5834 6.20972H15.5594Z"></path>
                                        </svg>
                                    </a>
                                    <a class="lg:hidden mr-2 dark:text-gray-200 text-biscay-700" href="/cart">
                                        سبد خرید
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Livewire Component wire-end:ndvlcjqqUQaX9hOmVi3U -->
                        <div wire:id="P2tjNmVTeeyjsMMCMRzL" class=" flex">
                            <div class="group flex items-center ">
                                <a href="https://user.roocket.ir/notifications"
                                   class="group lg:w-12 lg:h-12  w-10 h-10 flex items-center relative dark:hover:bg-biscay-300 dark:bg-dark-920 justify-center rounded-full bg-gray-210 hover:bg-biscay-700 transition cursor-pointer">
                                    <svg width="14" height="17" viewBox="0 0 14 17" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            class="fill-current text-biscay-700 dark:group-hover:text-dark-920 dark:text-gray-900 group-hover:text-biscay-300"
                                            d="M13.3014 8.50275C12.709 7.81089 12.4397 7.21133 12.4397 6.19274V5.8464C12.4397 4.51905 12.1342 3.66382 11.47 2.8086C10.4463 1.48043 8.72294 0.679932 7.03584 0.679932H6.9641C5.31247 0.679932 3.64311 1.44367 2.60167 2.71793C1.90119 3.59031 1.56023 4.48229 1.56023 5.8464V6.19274C1.56023 7.21133 1.30873 7.81089 0.698539 8.50275C0.249559 9.01245 0.106079 9.66755 0.106079 10.3766C0.106079 11.0864 0.339033 11.7586 0.806552 12.3051C1.41675 12.9602 2.27843 13.3784 3.15866 13.4511C4.43305 13.5965 5.70744 13.6512 7.00038 13.6512C8.2925 13.6512 9.5669 13.5598 10.8421 13.4511C11.7215 13.3784 12.5832 12.9602 13.1934 12.3051C13.6601 11.7586 13.8939 11.0864 13.8939 10.3766C13.8939 9.66755 13.7504 9.01245 13.3014 8.50275"></path>
                                        <path
                                            class="fill-current text-biscay-700 dark:group-hover:text-dark-920 dark:text-gray-900 group-hover:text-biscay-300"
                                            opacity="0.4"
                                            d="M8.62912 14.653C8.22367 14.5664 5.75307 14.5664 5.34762 14.653C5.00101 14.733 4.62619 14.9192 4.62619 15.3277C4.64634 15.7173 4.87446 16.0612 5.19044 16.2793L5.18963 16.2801C5.59831 16.5986 6.07792 16.8012 6.5801 16.8739C6.84771 16.9107 7.12016 16.909 7.39745 16.8739C7.89883 16.8012 8.37844 16.5986 8.78711 16.2801L8.78631 16.2793C9.10229 16.0612 9.3304 15.7173 9.35055 15.3277C9.35055 14.9192 8.97573 14.733 8.62912 14.653"></path>
                                    </svg>
                                    <span
                                        class="absolute text-white bg-red-450 rounded-full w-6 h-6 flex items-center justify-center text-xs -top-2 -right-2">2</span>
                                </a>
                                <a class="lg:hidden dark:text-white text-biscay-700 mr-2"
                                   href="https://user.roocket.ir/notifications">
                                    اعلانات
                                </a>
                            </div>
                        </div>
                        <!-- Livewire Component wire-end:P2tjNmVTeeyjsMMCMRzL -->
                    </div>
                </div>
                <div class="lg:overflow-visible overflow-auto lg:h-auto h-full lg:w-auto w-full">
                    <ul class="flex items-center justify-center lg:flex-row flex-col lg:w-auto w-full lg:pt-0 pt-6">
                        <li class="lg:ml-6 lg:inline-block flex items-center lg:w-auto w-full lg:mb-0 mb-7">
                            <a href="/"
                               class="text-base font-medium text-biscay-700 dark:text-white dark:hover:text-gray-20 hover:text-biscay-500 flex items-center">
                                <span class="lg:hidden ml-4 mr-5">
                                   <svg class="" xmlns="http://www.w3.org/2000/svg" width="24.028" height="23.829"
                                        viewBox="0 0 24.028 23.829">
                                      <path id="Home"
                                            d="M7,22.73l10,.007L6,22.614a5.863,5.863,0,0,1-3.018-1.049,3.894,3.894,0,0,1-1.272-2.348,30.521,30.521,0,0,1-.513-10,1.838,1.838,0,0,1,.128-.181A8.216,8.216,0,0,1,2,8.3c.6-.6,1.445-1.33,2.4-2.124C6.323,4.6,8.644,2.832,10.337,1.572a2.869,2.869,0,0,1,3.427-.008c1.706,1.259,4.048,3.025,5.967,4.61.962.795,1.8,1.529,2.394,2.123a7.282,7.282,0,0,1,.653.725c.048.064.079.111.1.144a38.532,38.532,0,0,1-.5,10.072,3.707,3.707,0,0,1-1.244,2.334,5.939,5.939,0,0,1-3.039,1.042q-.547.068-1.089.125V16.114a3.147,3.147,0,0,0-3-3H10a3.147,3.147,0,0,0-3,3v6.575l-1.3-.111ZM1.18,9.253l0-.006ZM22.9,9.211l0-.007Z"
                                            transform="translate(0.04 0.091)" fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2">

                                      </path>
                                   </svg>
                                </span>
                                صفحه اصلی
                            </a>
                        </li>
                        <li class="lg:mr-6 lg:inline-block flex items-center lg:w-auto w-full lg:mb-0 mb-7">
                            <div x-data="{ active : false }" @click="active = !active" @click.away="active = false"
                                 href="#"
                                 class="flex lg:items-center lg:flex-row flex-col items-start text-base font-medium text-biscay-700 group hover:text-biscay-500 relative">
                        <span
                            class="cursor-pointer flex items-center dark:text-white dark:group-hover:text-gray-20">
                           <span class="lg:hidden ml-4 mr-5">
                              <svg class="" width="22" height="22" viewBox="0 0 22 22" fill="none"
                                   xmlns="http://www.w3.org/2000/svg">
                                 <path
                                     d="M1 11C1 13.2418 1.12143 14.975 1.42108 16.3234C1.71821 17.6603 2.17712 18.5568 2.81017 19.1898C3.44322 19.8229 4.33967 20.2818 5.67664 20.5789C7.02497 20.8786 8.7582 21 11 21C13.2418 21 14.975 20.8786 16.3234 20.5789C17.6603 20.2818 18.5568 19.8229 19.1898 19.1898C19.8229 18.5568 20.2818 17.6603 20.5789 16.3234C20.8786 14.975 21 13.2418 21 11C21 8.7582 20.8786 7.02497 20.5789 5.67664C20.2818 4.33967 19.8229 3.44322 19.1898 2.81017C18.5568 2.17712 17.6603 1.71821 16.3234 1.42108C14.975 1.12143 13.2418 1 11 1C8.7582 1 7.02497 1.12143 5.67664 1.42108C4.33967 1.71821 3.44322 2.17712 2.81017 2.81017C2.17712 3.44322 1.71821 4.33967 1.42108 5.67664C1.12143 7.02497 1 8.7582 1 11Z"
                                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path
                                     d="M15.569 11C15.569 10.2578 15.1273 9.75506 14.7133 9.41219C14.3256 9.09111 13.7773 8.76091 13.1729 8.39688C13.1522 8.38443 13.1314 8.37194 13.1106 8.35941L11.6299 7.46743C11.6086 7.45463 11.5874 7.44186 11.5663 7.42914C10.9631 7.06568 10.4144 6.73503 9.95247 6.54465C9.46505 6.34375 8.78927 6.17827 8.12994 6.57544C7.48653 6.96301 7.29813 7.62513 7.22401 8.14598C7.1522 8.65068 7.15227 9.30526 7.15234 10.0371C7.15234 10.0607 7.15234 10.0843 7.15234 10.108L7.15234 11.892C7.15234 11.9157 7.15234 11.9393 7.15234 11.9628C7.15227 12.6947 7.1522 13.3493 7.22401 13.854C7.29813 14.3748 7.48653 15.0369 8.12994 15.4245C8.78927 15.8217 9.46505 15.6562 9.95247 15.4553C10.4144 15.2649 10.9631 14.9343 11.5663 14.5708C11.5874 14.5581 11.6086 14.5453 11.6299 14.5325L13.1106 13.6405C13.1315 13.628 13.1522 13.6155 13.1729 13.6031C13.7773 13.239 14.3256 12.9089 14.7133 12.5878C15.1273 12.2449 15.569 11.7422 15.569 11Z"
                                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                           </span>
                           دوره های آموزشی
                           <span class="mr-2">
                              <svg class="text-biscay-700 dark:text-white dark:group-hover:text-gray-20"
                                   width="13" height="8" viewBox="0 0 13 8" fill="none"
                                   xmlns="http://www.w3.org/2000/svg">
                                 <path
                                     d="M12.2466 1.81357C12.2466 2.09063 12.1407 2.36913 11.929 2.58091L6.89555 7.63898C6.69102 7.8435 6.41397 7.9581 6.12386 7.9581C5.8352 7.9581 5.55814 7.8435 5.35362 7.63898L0.317309 2.58091C-0.106252 2.1559 -0.106252 1.46834 0.32021 1.04333C0.746671 0.619768 1.43568 0.621218 1.85924 1.04623L6.12386 5.3297L10.3885 1.04623C10.812 0.621218 11.4996 0.619768 11.9261 1.04333C12.1407 1.25511 12.2466 1.53506 12.2466 1.81357Z"
                                     fill="currentColor" fill-opacity="0.9"></path>
                              </svg>
                           </span>
                        </span>
                                <div x-show="active" class="lg:absolute top-14 -right-8 lg:w-400 w-full z-20"
                                     style="display: none;">
                                    <div class="bg-white dark:bg-dark-910 rounded-lg lg:shadow-nav-link lg:p-5">
                                        <div class="grid grid-cols-12 gap-4 lg:px-0 px-5 lg:pt-0 pt-5">
                                            <div class="lg:col-span-6 col-span-12 flex items-start">
                                                <a href="/series"
                                                   class="inline-flex items-start hover:bg-biscay-700 dark:hover:bg-dark-900 dark:rounded-lg hover:bg-opacity-5 rounded-md px-2 pt-4 pb-2">
                                                    <div class="ml-2">
                                                        <svg width="25" height="23" viewBox="0 0 25 23" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <circle opacity="0.15" cx="15.8062" cy="13.2944" r="9.19385"
                                                                    fill="#3B82F6"></circle>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M16.3214 2.11028C13.881 0.791546 12.2987 2.02656e-06 10.6634 0C9.02798 0 7.44568 0.791542 5.0053 2.11028L4.96149 2.13395L4.96148 2.13395C3.75491 2.78594 2.79516 3.30457 2.14113 3.74635C1.80989 3.97009 1.51103 4.20394 1.28922 4.45865C1.06485 4.7163 0.863281 5.06072 0.863281 5.48803V11.7601C0.863281 12.1931 1.21429 12.5441 1.64729 12.5441C2.08028 12.5441 2.43129 12.1931 2.43129 11.7601V7.41846C2.86981 7.69436 3.41342 8.00017 4.04977 8.34777C3.9992 8.97843 3.99926 9.79355 3.99934 10.8457L3.99935 10.9761C3.99935 14.8961 5.1708 15.6801 10.6364 15.6801C15.7594 15.6801 17.3274 14.8962 17.3274 10.9761C17.3274 9.86231 17.3274 9.00684 17.2715 8.35074C18.0591 7.92059 18.7049 7.5544 19.1856 7.22971C19.5168 7.00597 19.8156 6.77212 20.0375 6.51741C20.2618 6.25976 20.4634 5.91534 20.4634 5.48803C20.4634 5.06072 20.2618 4.7163 20.0375 4.45865C19.8156 4.20394 19.5168 3.97009 19.1856 3.74634C18.5315 3.30456 17.5718 2.78595 16.3652 2.13396L16.3214 2.11028ZM15.7452 9.17551C13.6245 10.3075 12.1664 10.9761 10.6634 10.9761C9.15979 10.9761 7.70108 10.307 5.5791 9.17422C5.56756 9.64289 5.56736 10.2286 5.56736 10.9761C5.56736 12.9088 5.89203 13.32 6.1699 13.5153C6.37815 13.6616 6.76763 13.8294 7.53133 13.9465C8.28954 14.0628 9.2921 14.1121 10.6364 14.1121C11.8908 14.1121 12.8546 14.0632 13.6025 13.947C14.3541 13.8302 14.7819 13.6605 15.0352 13.4922C15.3855 13.2595 15.7594 12.796 15.7594 10.9761C15.7594 10.2283 15.7582 9.643 15.7452 9.17551ZM3.01881 5.0457C2.72862 5.24172 2.56119 5.38576 2.47202 5.48803C2.56119 5.5903 2.72862 5.73434 3.01881 5.93036C3.60046 6.32325 4.49075 6.80543 5.75074 7.48631C8.28467 8.85559 9.50055 9.40805 10.6634 9.40805C11.8262 9.40805 13.042 8.85559 15.5759 7.48631C16.8359 6.80543 17.7262 6.32325 18.3079 5.93036C18.5981 5.73434 18.7655 5.5903 18.8547 5.48803C18.7655 5.38576 18.5981 5.24172 18.3079 5.0457C17.7262 4.65281 16.8359 4.17063 15.576 3.48976C13.042 2.12047 11.8262 1.56801 10.6634 1.56801C9.50055 1.56801 8.28467 2.12047 5.75074 3.48976C4.49075 4.17063 3.60046 4.65281 3.01881 5.0457ZM18.9077 5.55975L18.9067 5.55765C18.9074 5.55906 18.9077 5.55976 18.9077 5.55975ZM18.9077 5.4163L18.9067 5.41838C18.9071 5.41764 18.9073 5.4171 18.9075 5.41676C18.9076 5.41645 18.9077 5.4163 18.9077 5.4163ZM2.42001 5.41841C2.41927 5.417 2.41898 5.4163 2.41902 5.41631L2.42001 5.41841Z"
                                                                  fill="#3B82F6"></path>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <h4 class="text-dark-550 dark:text-white text-lg font-bold">
                                                            دوره‌های آموزشی
                                                        </h4>
                                                        <span class="text-gray-300 text-sm font-medium">لیست دوره‌های
                                          آموزشی ویدیویی راکت</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="lg:col-span-6 col-span-12 flex items-start">
                                                <a href="/skills"
                                                   class="inline-flex items-start hover:bg-biscay-700 dark:hover:bg-dark-900 dark:rounded-lg hover:bg-opacity-5 rounded-md px-2 pt-4 pb-2">
                                                    <div class="ml-2">
                                                        <svg width="22" height="23" viewBox="0 0 22 23" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <circle opacity="0.15" cx="12.8062" cy="13.2944" r="9.19385"
                                                                    fill="#E81C4D"></circle>
                                                            <path
                                                                d="M0.785 3.66683C0.785 4.40379 0.825512 4.94242 0.914603 5.34329C1.00171 5.73525 1.12449 5.94578 1.2561 6.0774C1.38771 6.20901 1.59824 6.33178 1.9902 6.41889C2.39108 6.50798 2.92971 6.5485 3.66667 6.5485C4.40363 6.5485 4.94226 6.50798 5.34313 6.41889C5.73509 6.33178 5.94562 6.20901 6.07723 6.0774C6.20885 5.94578 6.33162 5.73525 6.41873 5.34329C6.50782 4.94242 6.54833 4.40379 6.54833 3.66683C6.54833 2.92987 6.50782 2.39124 6.41873 1.99037C6.33162 1.59841 6.20885 1.38788 6.07723 1.25626C5.94562 1.12465 5.73509 1.00188 5.34313 0.914766C4.94226 0.825675 4.40363 0.785163 3.66667 0.785163C2.92971 0.785163 2.39108 0.825675 1.9902 0.914766C1.59824 1.00188 1.38771 1.12465 1.2561 1.25626C1.12449 1.38788 1.00171 1.59841 0.914603 1.99037C0.825512 2.39124 0.785 2.92987 0.785 3.66683Z"
                                                                stroke="#E81C4D" stroke-width="1.57"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path
                                                                d="M0.785 12.3333C0.785 13.0703 0.825512 13.6089 0.914603 14.0098C1.00171 14.4018 1.12449 14.6123 1.2561 14.7439C1.38771 14.8755 1.59824 14.9983 1.9902 15.0854C2.39108 15.1745 2.92971 15.215 3.66667 15.215C4.40363 15.215 4.94226 15.1745 5.34313 15.0854C5.73509 14.9983 5.94562 14.8755 6.07723 14.7439C6.20885 14.6123 6.33162 14.4018 6.41873 14.0098C6.50782 13.6089 6.54833 13.0703 6.54833 12.3333C6.54833 11.5964 6.50782 11.0577 6.41873 10.6569C6.33162 10.2649 6.20885 10.0544 6.07723 9.92277C5.94562 9.79115 5.73509 9.66838 5.34313 9.58127C4.94226 9.49218 4.40363 9.45167 3.66667 9.45167C2.92971 9.45167 2.39108 9.49218 1.9902 9.58127C1.59824 9.66838 1.38771 9.79115 1.2561 9.92277C1.12449 10.0544 1.00171 10.2649 0.914603 10.6569C0.825512 11.0577 0.785 11.5964 0.785 12.3333Z"
                                                                stroke="#E81C4D" stroke-width="1.57"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path
                                                                d="M9.45163 12.3333C9.45163 13.0703 9.49214 13.6089 9.58123 14.0098C9.66834 14.4018 9.79111 14.6123 9.92273 14.7439C10.0543 14.8755 10.2649 14.9983 10.6568 15.0854C11.0577 15.1745 11.5963 15.215 12.3333 15.215C13.0702 15.215 13.6089 15.1745 14.0098 15.0854C14.4017 14.9983 14.6122 14.8755 14.7439 14.7439C14.8755 14.6123 14.9982 14.4018 15.0854 14.0098C15.1744 13.6089 15.215 13.0703 15.215 12.3333C15.215 11.5964 15.1744 11.0577 15.0854 10.6569C14.9982 10.2649 14.8755 10.0544 14.7439 9.92277C14.6122 9.79115 14.4017 9.66838 14.0098 9.58127C13.6089 9.49218 13.0702 9.45167 12.3333 9.45167C11.5963 9.45167 11.0577 9.49218 10.6568 9.58127C10.2649 9.66838 10.0543 9.79115 9.92273 9.92277C9.79111 10.0544 9.66834 10.2649 9.58123 10.6569C9.49214 11.0577 9.45163 11.5964 9.45163 12.3333Z"
                                                                stroke="#E81C4D" stroke-width="1.57"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path
                                                                d="M12.3333 1.3335V3.66683M12.3333 6.00016V3.66683M12.3333 3.66683H14.6667H10"
                                                                stroke="#E81C4D" stroke-width="1.57"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <h4 class="text-dark-550 dark:text-white text-lg font-bold">
                                                            مسیرهای یادگیری
                                                        </h4>
                                                        <span class="text-gray-300 text-sm font-medium">مسیرهای یادگیری
                                          قدم به قدم برنامه‌نویسی</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="lg:col-span-6 col-span-12 flex items-start">
                                                <a href="https://user.roocket.ir/courses"
                                                   class="inline-flex items-start hover:bg-biscay-700 dark:hover:bg-dark-900 dark:rounded-lg hover:bg-opacity-5 rounded-md px-2 pt-4 pb-2">
                                                    <div class="ml-2">
                                                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <circle opacity="0.15" cx="13.8062" cy="13.2944" r="9.19385"
                                                                    fill="#FFA826"></circle>
                                                            <path
                                                                d="M0.785 8C0.785 9.62908 0.873314 10.8846 1.08987 11.859C1.30444 12.8245 1.63433 13.4652 2.08458 13.9154C2.53483 14.3657 3.17551 14.6956 4.14099 14.9101C5.11539 15.1267 6.37092 15.215 8 15.215C9.62908 15.215 10.8846 15.1267 11.859 14.9101C12.8245 14.6956 13.4652 14.3657 13.9154 13.9154C14.3657 13.4652 14.6956 12.8245 14.9101 11.859C15.1267 10.8846 15.215 9.62908 15.215 8C15.215 6.37092 15.1267 5.11539 14.9101 4.14099C14.6956 3.17551 14.3657 2.53483 13.9154 2.08458C13.4652 1.63433 12.8245 1.30444 11.859 1.08987C10.8846 0.873315 9.62908 0.785 8 0.785C6.37092 0.785 5.11539 0.873315 4.14099 1.08987C3.17551 1.30444 2.53483 1.63433 2.08458 2.08458C1.63433 2.53483 1.30444 3.17551 1.08987 4.14099C0.873314 5.11539 0.785 6.37092 0.785 8Z"
                                                                stroke="#FFA826" stroke-width="1.57"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path
                                                                d="M7.99996 4.6665V11.3332M11.3333 7.33317V11.3332M4.66663 8.6665V11.3332"
                                                                stroke="#FFA826" stroke-width="1.57"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <h4 class="text-dark-550 dark:text-white text-lg font-bold">
                                                            پیشرفت من
                                                        </h4>
                                                        <span class="text-gray-300 text-sm font-medium">مسیر پیشرفت
                                          آموزشی شما در راکت</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="lg:col-span-6 col-span-12 flex items-start">
                                                <a href="https://roocket.ir/certifications/what-is-certification"
                                                   class="inline-flex items-start w-full h-full hover:bg-biscay-700 dark:hover:bg-dark-900 dark:rounded-lg hover:bg-opacity-5 rounded-md px-2 pt-4 pb-2">
                                                    <div class="ml-2">
                                                        <svg width="25" height="23" viewBox="0 0 25 23" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <circle opacity="0.15" cx="15.8062" cy="13.2944" r="9.19385"
                                                                    fill="#1DBE59"></circle>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M16.3214 2.11028C13.881 0.791546 12.2987 2.02656e-06 10.6634 0C9.02798 0 7.44568 0.791542 5.0053 2.11028L4.96149 2.13395L4.96148 2.13395C3.75491 2.78594 2.79516 3.30457 2.14113 3.74635C1.80989 3.97009 1.51103 4.20394 1.28922 4.45865C1.06485 4.7163 0.863281 5.06072 0.863281 5.48803V11.7601C0.863281 12.1931 1.21429 12.5441 1.64729 12.5441C2.08028 12.5441 2.43129 12.1931 2.43129 11.7601V7.41846C2.86981 7.69436 3.41342 8.00017 4.04977 8.34777C3.9992 8.97843 3.99926 9.79355 3.99934 10.8457L3.99935 10.9761C3.99935 14.8961 5.1708 15.6801 10.6364 15.6801C15.7594 15.6801 17.3274 14.8962 17.3274 10.9761C17.3274 9.86231 17.3274 9.00684 17.2715 8.35074C18.0591 7.92059 18.7049 7.5544 19.1856 7.22971C19.5168 7.00597 19.8156 6.77212 20.0375 6.51741C20.2618 6.25976 20.4634 5.91534 20.4634 5.48803C20.4634 5.06072 20.2618 4.7163 20.0375 4.45865C19.8156 4.20394 19.5168 3.97009 19.1856 3.74634C18.5315 3.30456 17.5718 2.78595 16.3652 2.13396L16.3214 2.11028ZM15.7452 9.17551C13.6245 10.3075 12.1664 10.9761 10.6634 10.9761C9.15979 10.9761 7.70108 10.307 5.5791 9.17422C5.56756 9.64289 5.56736 10.2286 5.56736 10.9761C5.56736 12.9088 5.89203 13.32 6.1699 13.5153C6.37815 13.6616 6.76763 13.8294 7.53133 13.9465C8.28954 14.0628 9.2921 14.1121 10.6364 14.1121C11.8908 14.1121 12.8546 14.0632 13.6025 13.947C14.3541 13.8302 14.7819 13.6605 15.0352 13.4922C15.3855 13.2595 15.7594 12.796 15.7594 10.9761C15.7594 10.2283 15.7582 9.643 15.7452 9.17551ZM3.01881 5.0457C2.72862 5.24172 2.56119 5.38576 2.47202 5.48803C2.56119 5.5903 2.72862 5.73434 3.01881 5.93036C3.60046 6.32325 4.49075 6.80543 5.75074 7.48631C8.28467 8.85559 9.50055 9.40805 10.6634 9.40805C11.8262 9.40805 13.042 8.85559 15.5759 7.48631C16.8359 6.80543 17.7262 6.32325 18.3079 5.93036C18.5981 5.73434 18.7655 5.5903 18.8547 5.48803C18.7655 5.38576 18.5981 5.24172 18.3079 5.0457C17.7262 4.65281 16.8359 4.17063 15.576 3.48976C13.042 2.12047 11.8262 1.56801 10.6634 1.56801C9.50055 1.56801 8.28467 2.12047 5.75074 3.48976C4.49075 4.17063 3.60046 4.65281 3.01881 5.0457ZM18.9077 5.55975L18.9067 5.55765C18.9074 5.55906 18.9077 5.55976 18.9077 5.55975ZM18.9077 5.4163L18.9067 5.41838C18.9071 5.41764 18.9073 5.4171 18.9075 5.41676C18.9076 5.41645 18.9077 5.4163 18.9077 5.4163ZM2.42001 5.41841C2.41927 5.417 2.41898 5.4163 2.41902 5.41631L2.42001 5.41841Z"
                                                                  fill="#1DBE59"></path>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <div class="relative inline-block">
                                                            <h4 class="text-dark-550 dark:text-white text-lg font-bold">
                                                                گواهی پایان دوره
                                                            </h4>
                                                        </div>
                                                        <span class="text-gray-300 text-sm font-medium inline-block">گواهی
                                          تاییدیه کسب مهارت فنی دوره‌ها</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="lg:mx-6 lg:inline-block flex items-center lg:w-auto w-full lg:mb-0 mb-7">
                     <span class="lg:hidden ml-4 mr-5">
                        <svg class="dark:text-white text-gray-800" width="16" height="22" viewBox="0 0 22 22"
                             fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                               d="M11 1C13.2467 1 14.9905 1.10211 16.3514 1.36394C17.7072 1.62479 18.6085 2.03066 19.2357 2.58352C20.4808 3.68104 21 5.6766 21 9.77779C21 12.4186 20.7621 14.3444 20.1333 15.5914C19.8328 16.1872 19.455 16.6021 18.9828 16.8774C18.5049 17.1561 17.8586 17.3333 16.9586 17.3333C15.7711 17.3333 14.8725 17.6002 14.1667 18.0784C13.4789 18.5444 13.0655 19.1538 12.7627 19.6303C12.7167 19.7028 12.6737 19.7709 12.6333 19.8351C12.3793 20.238 12.2224 20.4871 12.0042 20.6828C11.818 20.8499 11.555 21 11.0003 21C10.4455 21 10.1826 20.8499 9.9963 20.6828C9.77817 20.487 9.62119 20.238 9.36728 19.8351C9.3268 19.7709 9.28385 19.7027 9.23779 19.6302C8.93495 19.1537 8.52155 18.5444 7.83374 18.0784C7.12794 17.6002 6.2293 17.3333 5.04189 17.3333C4.14714 17.3333 3.50309 17.1517 3.02535 16.8674C2.55165 16.5854 2.17112 16.1607 1.86852 15.5554C1.23723 14.2927 1 12.3632 1 9.77779C1 5.72906 1.51762 3.72774 2.76743 2.6168C3.3967 2.05745 4.29954 1.64398 5.6535 1.37651C7.01286 1.10797 8.75542 1 11 1Z"
                               stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                           <path d="M11.917 8.25H15.5837" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           <path d="M6.41602 11.918H15.5827" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                        </svg>
                     </span>
                            <a href="/discuss"
                               class="text-base font-medium text-biscay-700 dark:hover:text-gray-20 dark:text-white hover:text-biscay-500">
                                پرسش و پاسخ ها </a>
                        </li>
                        <li class="lg:mx-6 lg:inline-block flex items-center lg:w-auto w-full lg:mb-0 mb-7">
                     <span class="lg:hidden ml-4 mr-5">
                        <svg class="dark:text-white text-gray-800  " width="16" height="22" viewBox="0 0 22 22"
                             fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                               d="M1 11C1 13.2418 1.12143 14.975 1.42108 16.3234C1.71821 17.6603 2.17712 18.5568 2.81017 19.1898C3.44322 19.8229 4.33967 20.2818 5.67664 20.5789C7.02497 20.8786 8.7582 21 11 21C13.2418 21 14.975 20.8786 16.3234 20.5789C17.6603 20.2818 18.5568 19.8229 19.1898 19.1898C19.8229 18.5568 20.2818 17.6603 20.5789 16.3234C20.8786 14.975 21 13.2418 21 11C21 8.7582 20.8786 7.02497 20.5789 5.67664C20.2818 4.33967 19.8229 3.44322 19.1898 2.81017C18.5568 2.17712 17.6603 1.71821 16.3234 1.42108C14.975 1.12143 13.2418 1 11 1C8.7582 1 7.02497 1.12143 5.67664 1.42108C4.33967 1.71821 3.44322 2.17712 2.81017 2.81017C2.17712 3.44322 1.71821 4.33967 1.42108 5.67664C1.12143 7.02497 1 8.7582 1 11Z"
                               stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                           <path d="M9.16699 6.41666H12.8337" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           <path d="M6.41699 11H15.5837" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           <path d="M9.16699 15.5833L12.8337 15.5833" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                        </svg>
                     </span>
                            <a href="/articles"
                               class="text-base font-medium text-biscay-700 dark:hover:text-gray-20 dark:text-white hover:text-biscay-500">
                                مقالات </a>
                        </li>
                        <li class="lg:mx-6 lg:inline-block flex items-center lg:w-auto w-full lg:mb-0 mb-7">
                     <span class="lg:hidden ml-4 mr-5">
                        <svg class="dark:text-white text-gray-800  " width="16" height="22" viewBox="0 0 16 22"
                             fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                               d="M1 11C1 13.0721 1.6662 15.0155 3.5 16.5C4.93978 17.6655 6.5154 18 8 18M8 18L8 21L11 21L5 21M8 18C9.62679 18 11.0602 17.6655 12.5 16.5C14.3338 15.0155 15 12.9833 15 11"
                               stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                           <path
                               d="M8 0.75C7.00844 0.75 6.29025 0.999355 5.75424 1.37958C5.21259 1.76381 4.80375 2.31973 4.49962 3.0149C3.87961 4.43207 3.75 6.2944 3.75 8C3.75 9.7056 3.87961 11.5679 4.49962 12.9851C4.80375 13.6803 5.21258 14.2362 5.75424 14.6204C6.29025 15.0006 7.00844 15.25 8 15.25C8.99156 15.25 9.70974 15.0006 10.2458 14.6204C10.7874 14.2362 11.1962 13.6803 11.5004 12.9851C12.1204 11.5679 12.25 9.7056 12.25 8C12.25 6.2944 12.1204 4.43207 11.5004 3.0149C11.1962 2.31973 10.7874 1.76381 10.2458 1.37958C9.70974 0.999355 8.99156 0.75 8 0.75Z"
                               stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                     </span>
                            <a href="/podcast"
                               class="text-base font-medium text-biscay-700 dark:hover:text-gray-20 dark:text-white hover:text-biscay-500">
                                راکت کست </a>
                        </li>
                        <li class="lg:mr-6 lg:inline-block flex items-center lg:w-auto group w-full lg:mb-0 mb-7">
                            <div x-data="{ active : false }" @click="active = !active" @click.away="active = false"
                                 href="#"
                                 class="flex lg:items-center lg:flex-row items-start flex-col text-base font-medium text-biscay-700 hover:text-biscay-500 cursor-pointer relative">
                                <div
                                    class="cursor-pointer flex items-center dark:group-hover:text-gray-20 dark:text-white">
                           <span class="lg:hidden ml-4 mr-5">
                              <svg class="" width="16" height="22" viewBox="0 0 22 22" fill="none"
                                   xmlns="http://www.w3.org/2000/svg">
                                 <path
                                     d="M11.1004 14.1057L7.54369 17.6624C7.11308 18.078 6.53798 18.3102 5.93952 18.3102C5.34107 18.3102 4.76597 18.078 4.33536 17.6624C4.12416 17.452 3.95658 17.202 3.84224 16.9267C3.72789 16.6515 3.66903 16.3563 3.66903 16.0582C3.66903 15.7601 3.72789 15.465 3.84224 15.1897C3.95658 14.9144 4.12416 14.6644 4.33536 14.454L7.89202 10.8974C8.06464 10.7248 8.16161 10.4907 8.16161 10.2465C8.16161 10.0024 8.06464 9.76833 7.89202 9.59572C7.71941 9.4231 7.4853 9.32613 7.24119 9.32613C6.99708 9.32613 6.76297 9.4231 6.59036 9.59572L3.03369 13.1615C2.31718 13.9414 1.92968 14.968 1.95209 16.0268C1.97451 17.0856 2.40512 18.0949 3.15399 18.8438C3.90286 19.5926 4.91209 20.0232 5.97092 20.0456C7.02975 20.0681 8.0563 19.6806 8.83619 18.9641L12.402 15.4074C12.5746 15.2348 12.6716 15.0007 12.6716 14.7565C12.6716 14.5124 12.5746 14.2783 12.402 14.1057C12.2294 13.9331 11.9953 13.8361 11.7512 13.8361C11.5071 13.8361 11.273 13.9331 11.1004 14.1057ZM18.9654 3.03238C18.1942 2.26605 17.1513 1.83594 16.0641 1.83594C14.977 1.83594 13.934 2.26605 13.1629 3.03238L9.59703 6.58905C9.51156 6.67452 9.44376 6.77598 9.3975 6.88765C9.35125 6.99932 9.32744 7.11901 9.32744 7.23988C9.32744 7.36075 9.35125 7.48044 9.3975 7.59211C9.44376 7.70378 9.51156 7.80525 9.59703 7.89071C9.68249 7.97618 9.78396 8.04398 9.89563 8.09024C10.0073 8.13649 10.127 8.1603 10.2479 8.1603C10.3687 8.1603 10.4884 8.13649 10.6001 8.09024C10.7118 8.04398 10.8132 7.97618 10.8987 7.89071L14.4554 4.33405C14.886 3.91846 15.4611 3.6862 16.0595 3.6862C16.658 3.6862 17.2331 3.91846 17.6637 4.33405C17.8749 4.54441 18.0425 4.79441 18.1568 5.06969C18.2712 5.34497 18.33 5.64013 18.33 5.93822C18.33 6.2363 18.2712 6.53146 18.1568 6.80674C18.0425 7.08202 17.8749 7.33202 17.6637 7.54238L14.107 11.099C14.0211 11.1843 13.9529 11.2856 13.9064 11.3974C13.8598 11.5091 13.8359 11.6289 13.8359 11.7499C13.8359 11.8709 13.8598 11.9907 13.9064 12.1024C13.9529 12.2141 14.0211 12.3155 14.107 12.4007C14.1922 12.4866 14.2936 12.5548 14.4053 12.6014C14.517 12.6479 14.6368 12.6719 14.7579 12.6719C14.8789 12.6719 14.9987 12.6479 15.1104 12.6014C15.2221 12.5548 15.3235 12.4866 15.4087 12.4007L18.9654 8.83488C19.7317 8.06376 20.1618 7.02077 20.1618 5.93363C20.1618 4.84649 19.7317 3.8035 18.9654 3.03238ZM8.09369 13.904C8.17934 13.989 8.28093 14.0562 8.39261 14.1018C8.50429 14.1475 8.62389 14.1706 8.74452 14.1699C8.86516 14.1706 8.98475 14.1475 9.09644 14.1018C9.20812 14.0562 9.30971 13.989 9.39536 13.904L13.9054 9.39405C14.078 9.22144 14.1749 8.98732 14.1749 8.74322C14.1749 8.4991 14.078 8.26499 13.9054 8.09238C13.7327 7.91977 13.4986 7.8228 13.2545 7.8228C13.0104 7.8228 12.7763 7.91977 12.6037 8.09238L8.09369 12.6024C8.00777 12.6876 7.93958 12.789 7.89304 12.9007C7.8465 13.0124 7.82254 13.1322 7.82254 13.2532C7.82254 13.3742 7.8465 13.494 7.89304 13.6057C7.93958 13.7174 8.00777 13.8188 8.09369 13.904Z"
                                     fill="currentColor"></path>
                              </svg>
                           </span>
                                    لینک های مفید
                                    <span class="mr-2">
                              <svg class="text-biscay-700 dark:group-hover:text-gray-20 dark:text-white"
                                   width="13" height="8" viewBox="0 0 13 8" fill="none"
                                   xmlns="http://www.w3.org/2000/svg">
                                 <path
                                     d="M12.2466 1.81357C12.2466 2.09063 12.1407 2.36913 11.929 2.58091L6.89555 7.63898C6.69102 7.8435 6.41397 7.9581 6.12386 7.9581C5.8352 7.9581 5.55814 7.8435 5.35362 7.63898L0.317309 2.58091C-0.106252 2.1559 -0.106252 1.46834 0.32021 1.04333C0.746671 0.619768 1.43568 0.621218 1.85924 1.04623L6.12386 5.3297L10.3885 1.04623C10.812 0.621218 11.4996 0.619768 11.9261 1.04333C12.1407 1.25511 12.2466 1.53506 12.2466 1.81357Z"
                                     fill="currentColor" fill-opacity="0.9"></path>
                              </svg>
                           </span>
                                </div>
                                <div x-show="active" class="lg:absolute top-14 lg:w-52 w-full z-10"
                                     style="display: none;">
                                    <ul class="bg-white dark:bg-dark-910 dark:!shadow-whiteShadow rounded-lg lg:shadow-nav-link lg:p-3 px-11 pt-5 p w-full">
                                        <li class="h-full inline-block w-full"><a href="https://t.me/roocketir"
                                                                                  class="font-medium text-lg text-dark-550 dark:hover:bg-dark-900 dark:text-white rounded-md inline-block w-full pr-3 py-4 hover:bg-gray-200">کانال
                                                تلگرام</a>
                                        </li>
                                        <li class="h-full inline-block w-full"><a href="/faq"
                                                                                  class="font-medium text-lg text-dark-550 dark:hover:bg-dark-900 dark:text-white rounded-md inline-block w-full pr-3 py-4 hover:bg-gray-200">سوالات
                                                متداول</a>
                                        </li>
                                        <li class="h-full inline-block w-full"><a href="/about-us"
                                                                                  class="font-medium text-lg text-dark-550 dark:hover:bg-dark-900 dark:text-white rounded-md inline-block w-full pr-3 py-4 hover:bg-gray-200">درباره‌ما</a>
                                        </li>
                                        <li class="h-full inline-block w-full"><a href="/contact-us"
                                                                                  class="font-medium text-lg text-dark-550 dark:hover:bg-dark-900 dark:text-white rounded-md inline-block w-full pr-3 py-4 hover:bg-gray-200">ارتباط
                                                باما</a>
                                        </li>
                                        <li class="h-full inline-block w-full"><a href="/synergy"
                                                                                  class="font-medium text-lg text-dark-550 dark:hover:bg-dark-900 dark:text-white rounded-md inline-block w-full pr-3 py-4 hover:bg-gray-200">همکاری
                                                باما</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</div>
