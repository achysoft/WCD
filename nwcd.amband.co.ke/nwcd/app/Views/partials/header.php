<div class="navbar-header border-b border-neutral-200 dark:border-neutral-600">
    <div class="flex items-center justify-between w-full">
        <!-- Left: Sidebar toggle -->
        <div class="col-auto">
            <div class="flex flex-wrap items-center gap-[16px]">
                <button type="button" class="sidebar-toggle">
                    <iconify-icon icon="heroicons:bars-3-solid" class="icon non-active"></iconify-icon>
                    <iconify-icon icon="iconoir:arrow-right" class="icon active"></iconify-icon>
                </button>
            </div>
        </div>

        <!-- Middle: Navigation menu links -->
        <div class="flex-1 flex justify-center">
            <nav class="flex items-center gap-6">
                <a href="#" class="text-neutral-700 dark:text-white hover:text-primary-600 dark:hover:text-primary-400 font-medium">Home</a>
                <a href="#" class="text-neutral-700 dark:text-white hover:text-primary-600 dark:hover:text-primary-400 font-medium">Landscape</a>
                <a href="#" class="text-neutral-700 dark:text-white hover:text-primary-600 dark:hover:text-primary-400 font-medium">Conservation</a>
                <a href="#" class="text-neutral-700 dark:text-white hover:text-primary-600 dark:hover:text-primary-400 font-medium">Biodiversity</a>
            </nav>
        </div>

        <!-- Right: Search, theme toggle, messages -->
        <div class="col-auto">
            <div class="flex flex-wrap items-center gap-3">
                <form class="navbar-search">
                    <input type="text" name="search" placeholder="Search">
                    <iconify-icon icon="ion:search-outline" class="icon"></iconify-icon>
                </form>

                <button type="button" id="theme-toggle" class="w-10 h-10 bg-neutral-200 dark:bg-neutral-700 dark:text-white rounded-full flex justify-center items-center">
                    <span id="theme-toggle-dark-icon" class="hidden">
                        <i class="ri-sun-line"></i>
                    </span>
                    <span id="theme-toggle-light-icon" class="hidden">
                        <i class="ri-moon-line"></i>
                    </span>
                </button>

                <!-- Messages Dropdown -->
                <div id="dropdownMessage" class="z-10 hidden bg-white dark:bg-neutral-700 rounded-2xl overflow-hidden shadow-lg max-w-[394px] w-full">
                    <!-- ...existing message code... -->
                </div>
                <!-- End Messages Dropdown -->
            </div>
        </div>
    </div>
</div>
