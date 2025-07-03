<!DOCTYPE html>
<html lang="en">

<?= $this->include('partials/headcss') ?>

<body class="bg-neutral-100 text-neutral-900">

<section class="bg-white flex flex-wrap min-h-[100vh]">
    <!-- Left Image Section -->
    <div class="lg:w-1/2 lg:block hidden">
        <div class="flex items-center flex-col h-full justify-center">
            <img src="<?= base_url('assets/images/auth/banner3.jpg') ?>" alt="Login">
        </div>
    </div>

    <!-- Right Form Section -->
    <div class="lg:w-1/2 py-8 px-6 flex flex-col justify-center">
        <div class="lg:max-w-[464px] mx-auto w-full">
            <!-- Logo and Intro -->
            <div>
                <a href="<?= route_to('index') ?>" class="mb-2.5 max-w-[70px] inline-block">
    <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo" class="w-25 h-20">
</a>

                <h4 class="mb-3 text-xl font-semibold">Sign In to your Account</h4>
                <p class="mb-8 text-secondary-light text-lg">Welcome back! Please enter your details.</p>
            </div>

            <!-- Login Form -->
            <form id="signin-form" action="<?= route_to('signin') ?>" method="post">
                <?= csrf_field() ?>

                <!-- Email Field -->
                <div class="icon-field mb-4 relative">
                    <span class="absolute start-4 top-1/2 -translate-y-1/2 pointer-events-none text-xl">
                        <iconify-icon icon="mage:email"></iconify-icon>
                    </span>
                    <input 
                        type="email" 
                        name="email" 
                        value="<?= old('email') ?>"
                        class="form-control h-[56px] ps-11 border-neutral-300 bg-neutral-50 rounded-xl w-full"
                        placeholder="Email"
                        required
                    >
                </div>

                <!-- Password Field -->
                <div class="relative mb-5">
                    <div class="icon-field">
                        <span class="absolute start-4 top-1/2 -translate-y-1/2 pointer-events-none text-xl">
                            <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                        </span>
                        <input 
                            type="password" 
                            name="password" 
                            class="form-control h-[56px] ps-11 border-neutral-300 bg-neutral-50 rounded-xl w-full"
                            id="your-password" 
                            placeholder="Password"
                            required
                        >
                    </div>
                    <span 
                        class="toggle-password ri-eye-line cursor-pointer absolute end-0 top-1/2 -translate-y-1/2 me-4 text-secondary-light"
                        data-toggle="#your-password"
                        aria-label="Toggle password visibility"
                    ></span>
                </div>

                <!-- Remember + Forgot -->
                <div class="mt-7">
                    <div class="flex justify-between gap-2 text-sm">
                        <label class="flex items-center">
                            <input name="remember" class="form-check-input border border-neutral-300 me-2" type="checkbox">
                            Remember me
                        </label>
                        <a href="<?= base_url('forgot-password') ?>" class="text-primary-600 font-medium hover:underline">Forgot Password?</a>
                    </div>
                </div>

                <!-- Submit -->
                <button type="submit" class="btn btn-primary justify-center text-sm btn-sm px-3 py-4 w-full rounded-xl mt-8">
                    Sign In
                </button>

                <!-- Divider -->
                <div class="mt-8 center-border-horizontal text-center relative before:absolute before:w-full before:h-[1px] before:top-1/2 before:-translate-y-1/2 before:bg-neutral-300 before:start-0">
                    <span class="bg-white z-[2] relative px-4">Or sign in with</span>
                </div>

                <!-- Social Buttons -->
                <div class="mt-8 flex items-center gap-3">
                    <button type="button" class="font-semibold text-neutral-600 py-4 px-6 w-1/2 border rounded-xl text-base flex items-center justify-center gap-3 hover:bg-primary-50">
                        <iconify-icon icon="ic:baseline-facebook" class="text-primary-600 text-xl"></iconify-icon>
                        Facebook
                    </button>
                    <button type="button" class="font-semibold text-neutral-600 py-4 px-6 w-1/2 border rounded-xl text-base flex items-center justify-center gap-3 hover:bg-primary-50">
                        <iconify-icon icon="logos:google-icon" class="text-primary-600 text-xl"></iconify-icon>
                        Google
                    </button>
                </div>

                <!-- Sign Up Redirect -->
                <div class="mt-8 text-center text-sm">
                    <p>Don't have an account?
                        <a href="<?= route_to('signup') ?>" class="text-primary-600 font-semibold hover:underline">Sign Up</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- SweetAlert2 (before using it) -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?= $this->section('script'); ?>
    <script>
        // Toggle password visibility
        document.querySelectorAll(".toggle-password").forEach(toggle => {
            toggle.addEventListener("click", function () {
                this.classList.toggle("ri-eye-off-line");
                const input = document.querySelector(this.getAttribute("data-toggle"));
                input.type = input.type === "password" ? "text" : "password";
            });
        });

        // AJAX login
        $(document).ready(function () {
            $('#signin-form').on('submit', function (e) {
                e.preventDefault();

                const $form = $(this);

                $.ajax({
                    url: $form.attr('action'),
                    method: 'POST',
                    data: $form.serialize(),
                    dataType: 'json',
                    success: function (response) {
                        if (response.status === 'success') {
                            window.location.href = response.redirect;
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Login Failed',
                                html: response.message,
                                confirmButtonColor: '#e3342f'
                            });
                        }
                    },
                    error: function (xhr) {
                        let errorText = 'An unexpected error occurred.';
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorText = xhr.responseJSON.message;
                        }
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            html: errorText,
                            confirmButtonColor: '#e3342f'
                        });
                    }
                });
            });
        });
    </script>
<?= $this->endSection(); ?>

<?= $this->include('partials/script') ?>
</body>
</html>
