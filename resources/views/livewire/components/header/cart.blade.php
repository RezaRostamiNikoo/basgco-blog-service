<div>
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
        <div @click.away="cartDropDown = false,$dispatch('overlay-hide')"
             x-show="cartDropDown"
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
