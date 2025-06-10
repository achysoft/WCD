<?= $this->extend('layout/layout'); ?>

<?= $this->section('script'); ?>
        <script>
                // =========================== Copy Color Code when click on box Js Start ================================ 
                $(".color-box").click(function() {
                    var clipboardText = $(this).find("[data-clipboard-text]").attr("data-clipboard-text");

                    // Create a temporary input element to hold the text to copy
                    var tempInput = $("<input>");
                    $("body").append(tempInput);
                    tempInput.val(clipboardText).select();

                    // Copy the text to the clipboard 
                    document.execCommand("copy");

                    // Remove the temporary input element
                    tempInput.remove();


                    // Remove any existing badge
                    $(this).find(".copied-message").remove();

                    // Create the notification badge
                    var $badge = $(`<span class="copied-message text-xs badge bg-success-main py-8 px-12 fw-normal rounded-pill position-absolute start-50 translate-middle-x top-0 mt-24">    Copied! </span>`)

                    // Append the badge to the color box
                    $(this).append($badge);

                    // Show the badge and then fade it out
                    $badge.fadeIn().delay(800).fadeOut(function() {
                        $(this).remove();
                    });

                });
                // =========================== Copy Color Code when click on box Js End ================================ 
        </script>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Default List</h6>
            </div>
            <div class="card-body p-6">
                <ul class="rounded-lg border border-neutral-200 dark:border-neutral-600 overflow-hidden">
                    <li class="text-secondary-light p-4 bg-neutral-50 dark:bg-neutral-600 border-b border-neutral-200 dark:border-neutral-600">1. This is list trust fund seitan letterpress, keytar raw denim keffiye</li>
                    <li class="text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">2. This is list trust fund seitan letterpress, keytar raw denim </li>
                    <li class="text-secondary-light p-4 bg-neutral-50 dark:bg-neutral-600 border-b border-neutral-200 dark:border-neutral-600">3. This is list trust fund seitan letterpress, keytar raw </li>
                    <li class="text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">4. This is list trust fund seitan letterpress, keytar raw denim keffiye</li>
                    <li class="text-secondary-light p-4 bg-neutral-50 dark:bg-neutral-600">5. This is list trust fund seitan letterpress, keytar raw denim </li>
                </ul>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Active List</h6>
            </div>
            <div class="card-body p-6">
                <ul class="rounded-lg border border-neutral-200 dark:border-neutral-600 overflow-hidden">
                    <li class="text-secondary-light p-4 bg-primary-600 border-b border-neutral-200 dark:border-neutral-600 text-white">1. This is list trust fund seitan letterpress, keytar raw denim keffiye</li>
                    <li class="text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">2. This is list trust fund seitan letterpress, keytar raw denim </li>
                    <li class="text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">3. This is list trust fund seitan letterpress, keytar raw </li>
                    <li class="text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">4. This is list trust fund seitan letterpress, keytar raw denim keffiye</li>
                    <li class="text-secondary-light p-4 bg-white dark:bg-neutral-700">5. This is list trust fund seitan letterpress, keytar raw denim </li>
                </ul>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Active List</h6>
            </div>
            <div class="card-body p-6">
                <ul class="rounded-lg border border-neutral-200 dark:border-neutral-600 overflow-hidden">
                    <li class="text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                        <div class="flex items-center gap-2">
                            <span class="flex"><iconify-icon icon="ci:bell-notification" class="text-xl"></iconify-icon></span>
                            Push Notification (This is push notifications)
                        </div>
                    </li>
                    <li class="text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                        <div class="flex items-center gap-2">
                            <span class="flex"><iconify-icon icon="mynaui:cart-check" class="text-xl"></iconify-icon></span>
                            New Orders confirmed (This is Orders confirmed)
                        </div>
                    </li>
                    <li class="text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                        <div class="flex items-center gap-2">
                            <span class="flex"><iconify-icon icon="mdi:security-lock-outline" class="text-xl"></iconify-icon></span>
                            Security Access (This is Security Access)
                        </div>
                    </li>
                    <li class="text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                        <div class="flex items-center gap-2">
                            <span class="flex"><iconify-icon icon="tabler:folder-open" class="text-xl"></iconify-icon></span>
                            Storage Folder (This is Storage Folder)
                        </div>
                    </li>
                    <li class="text-secondary-light p-4 bg-white dark:bg-neutral-700">
                        <div class="flex items-center gap-2">
                            <span class="flex"><iconify-icon icon="flowbite:forward-outline" class="text-xl"></iconify-icon></span>
                            Forward Message (This is Forward Message)
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">List Icons & label</h6>
            </div>
            <div class="card-body p-6">
                <ul class="rounded-lg border border-neutral-200 dark:border-neutral-600 overflow-hidden">
                    <li class="flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                        <div class="flex items-center gap-2">
                            <span class="flex"><iconify-icon icon="ci:bell-notification" class="text-xl"></iconify-icon></span>
                            Push Notification (This is push notifications)
                        </div>
                        <span class="text-xs bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded px-2.5 py-1 font-semibold">Low</span>
                    </li>
                    <li class="flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                        <div class="flex items-center gap-2">
                            <span class="flex"><iconify-icon icon="mynaui:cart-check" class="text-xl"></iconify-icon></span>
                            New Orders confirmed (This is Orders confirmed)
                        </div>
                        <span class="text-xs bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded px-2.5 py-1 font-semibold">High</span>
                    </li>
                    <li class="flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                        <div class="flex items-center gap-2">
                            <span class="flex"><iconify-icon icon="mdi:security-lock-outline" class="text-xl"></iconify-icon></span>
                            Security Access (This is Security Access)
                        </div>
                        <span class="text-xs bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400 rounded px-2.5 py-1 font-semibold">Medium</span>
                    </li>
                    <li class="flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                        <div class="flex items-center gap-2">
                            <span class="flex"><iconify-icon icon="tabler:folder-open" class="text-xl"></iconify-icon></span>
                            Storage Folder (This is Storage Folder)
                        </div>
                        <span class="text-xs bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded px-2.5 py-1 font-semibold">Low</span>
                    </li>
                    <li class="flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700">
                        <div class="flex items-center gap-2">
                            <span class="flex"><iconify-icon icon="flowbite:forward-outline" class="text-xl"></iconify-icon></span>
                            Forward Message (This is Forward Message)
                        </div>
                        <span class="text-xs bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400 rounded px-2.5 py-1 font-semibold">Medium</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Colored Lists</h6>
            </div>
            <div class="card-body p-6">
                <ul class="rounded-lg border border-neutral-200 dark:border-neutral-600 overflow-hidden">
                    <li class="text-secondary-light p-4 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 border-b border-neutral-200 dark:border-neutral-600">
                        <div class="flex items-center gap-2">
                            <img src="<?= base_url('assets/images/lists/list-img1.png') ?>" class="w-8 h-8 rounded-full" alt="">
                            Push Notification (This is push notifications)
                        </div>
                    </li>
                    <li class="text-secondary-light p-4 bg-info-100 dark:bg-info-600/25 text-info-600 dark:text-info-400 border-b border-neutral-200 dark:border-neutral-600">
                        <div class="flex items-center gap-2">
                            <img src="<?= base_url('assets/images/lists/list-img2.png') ?>" class="w-8 h-8 rounded-full" alt="">
                            New Orders confirmed (This is Orders confirmed)
                        </div>
                    </li>
                    <li class="text-secondary-light p-4 bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400 border-b border-neutral-200 dark:border-neutral-600">
                        <div class="flex items-center gap-2">
                            <img src="<?= base_url('assets/images/lists/list-img3.png') ?>" class="w-8 h-8 rounded-full" alt="">
                            Security Access (This is Security Access)
                        </div>
                    </li>
                    <li class="text-secondary-light p-4 bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 border-b border-neutral-200 dark:border-neutral-600">
                        <div class="flex items-center gap-2">
                            <img src="<?= base_url('assets/images/lists/list-img4.png') ?>" class="w-8 h-8 rounded-full" alt="">
                            Storage Folder (This is Storage Folder)
                        </div>
                    </li>
                    <li class="text-secondary-light p-4 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400">
                        <div class="flex items-center gap-2">
                            <img src="<?= base_url('assets/images/lists/list-img5.png') ?>" class="w-8 h-8 rounded-full" alt="">
                            Forward Message (This is Forward Message)
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">List Icons &amp; label</h6>
            </div>
            <div class="card-body p-6">
                <ul class="rounded-lg border border-neutral-200 dark:border-neutral-600 overflow-hidden">
                    <li class="flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                        <div class="flex items-center gap-2">
                            <img src="<?= base_url('assets/images/lists/list-img1.png') ?>" class="w-8 h-8 rounded-full" alt="">
                            Push Notification (This is push notifications)
                        </div>
                        <span class="text-xs bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded px-2.5 py-1 font-semibold">Low</span>
                    </li>
                    <li class="flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                        <div class="flex items-center gap-2">
                            <img src="<?= base_url('assets/images/lists/list-img2.png') ?>" class="w-8 h-8 rounded-full" alt="">
                            New Orders confirmed (This is Orders confirmed)
                        </div>
                        <span class="text-xs bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded px-2.5 py-1 font-semibold">High</span>
                    </li>
                    <li class="flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                        <div class="flex items-center gap-2">
                            <img src="<?= base_url('assets/images/lists/list-img3.png') ?>" class="w-8 h-8 rounded-full" alt="">
                            Security Access (This is Security Access)
                        </div>
                        <span class="text-xs bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400 rounded px-2.5 py-1 font-semibold">Medium</span>
                    </li>
                    <li class="flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                        <div class="flex items-center gap-2">
                            <img src="<?= base_url('assets/images/lists/list-img4.png') ?>" class="w-8 h-8 rounded-full" alt="">
                            Storage Folder (This is Storage Folder)
                        </div>
                        <span class="text-xs bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded px-2.5 py-1 font-semibold">Low</span>
                    </li>
                    <li class="flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700">
                        <div class="flex items-center gap-2">
                            <img src="<?= base_url('assets/images/lists/list-img5.png') ?>" class="w-8 h-8 rounded-full" alt="">
                            Forward Message (This is Forward Message)
                        </div>
                        <span class="text-xs bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400 rounded px-2.5 py-1 font-semibold">Medium</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>
