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
                <h6 class="text-lg font-semibold mb-0">Basic Upload</h6>
            </div>
            <div class="card-body p-6">
                <label for="basic-upload" class="border border-primary-600 font-medium text-primary-600 px-4 py-3 rounded-xl inline-flex items-center gap-2 cursor-pointer hover:bg-primary-50">
                    <iconify-icon icon="solar:upload-linear" class="text-xl"></iconify-icon>
                    Click to upload
                </label>
                <input type="file" id="basic-upload" class="block w-full text-sm  text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 mt-6">
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Image Upload</h6>
            </div>
            <div class="card-body p-6">
                <div class="upload-image-wrapper flex items-center gap-3">
                    <div class="uploaded-img hidden relative h-[120px] w-[120px] border input-form-light rounded-lg overflow-hidden border-dashed bg-neutral-50 dark:bg-neutral-600">
                        <button type="button" class="uploaded-img__remove absolute top-0 end-0 z-1 text-2xxl line-height-1 me-8 mt-2 flex">
                            <iconify-icon icon="radix-icons:cross-2" class="text-xl text-danger-600"></iconify-icon>
                        </button>
                        <img id="uploaded-img__preview" class="w-full h-full object-fit-cover" src="<?= base_url('assets/images/user.png') ?>" alt="image">
                    </div>

                    <label class="upload-file h-[120px] w-[120px] border input-form-light rounded-lg overflow-hidden border-dashed bg-neutral-50 dark:bg-neutral-600 hover:bg-neutral-200 flex items-center flex-col justify-center gap-1" for="upload-file">
                        <iconify-icon icon="solar:camera-outline" class="text-xl text-secondary-light"></iconify-icon>
                        <span class="font-semibold text-secondary-light">Upload</span>
                        <input id="upload-file" type="file" hidden>
                    </label>
                </div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Upload With image preview</h6>
            </div>
            <div class="card-body p-6">
                <div class="upload-image-wrapper flex items-center gap-3 flex-wrap">
                    <div class="uploaded-imgs-container flex gap-3 flex-wrap"></div>
                    <label class="upload-file-multiple h-[120px] w-[120px] border input-form-light rounded-lg overflow-hidden border-dashed bg-neutral-50 dark:bg-neutral-600 hover:bg-neutral-200 flex items-center flex-col justify-center gap-1" for="upload-file-multiple">
                        <iconify-icon icon="solar:camera-outline" class="text-xl text-secondary-light"></iconify-icon>
                        <span class="font-semibold text-secondary-light">Upload</span>
                        <input id="upload-file-multiple" type="file" hidden multiple>
                    </label>
                </div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Upload With image preview</h6>
            </div>
            <div class="card-body p-6">
                <label for="file-upload-name" class="mb-4 border border-neutral-600 font-medium text-secondary-light px-4 py-3 rounded-xl inline-flex items-center gap-2 hover:bg-neutral-200">
                    <iconify-icon icon="solar:upload-linear" class="text-xl"></iconify-icon>
                    Click to upload
                    <input type="file" class="form-control w-auto mt-6 form-control-lg" id="file-upload-name" multiple hidden>
                </label>
                <ul id="uploaded-img-names" class=""></ul>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>