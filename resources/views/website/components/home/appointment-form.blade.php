<section class="rts-appoinment-area rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-one center mb--60 mb_md--30">
                    <h2 class="title-two rts-text-anime-style-1">Monitor Anywhere. Control Anytime.<br> Grow
                        Efficiently.</h2>
                </div>
            </div>
        </div>
        <div class="row gy-5 gy-lg-0 align-items-center">
            <div class="col-lg-7">
                <div class="appoinment-main-wrapper-7 buisness-partner">
                    <form method="POST" action="{{ route('lead.store') }}" id="contact-form">
                        @csrf

                        <h4 class="title">Get In Touch</h4>

                        <input name="name" class="mb-4" type="text" placeholder="Your Name" required>
                        <input type="email" class="mb-4" name="email" placeholder="Johndoe@gmail.com" required>
                        <input type="tel" class="mb-4" name="phone" placeholder="+256 2145 2156">
                        <input type="text" class="mb-4" name="product" placeholder="Ps tracker">

                        <textarea name="message" placeholder="Message"></textarea>

                        <!-- captcha token -->
                        <input type="hidden" name="g-recaptcha-response" id="recaptcha-token">

                        <button class="rts-btn btn-primary" type="submit">
                            Get In Touch
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="appoinment-contact-area">
                    <h2 class="title">Contact Us</h2>
                    <div class="signle-contact">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="main-contact">
                            <span>Call Us 24/7</span>
                            <a href="tel:+6421382286">+64 213 82286</a>
                        </div>
                    </div>
                    <div class="signle-contact">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="main-contact">
                            <span>Work with us</span>
                            <a href="#">info@apex.com</a>
                        </div>
                    </div>
                    <div class="signle-contact">
                        <div class="icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="main-contact">
                            <span>Our Location</span>
                            <a href="#">Apex Cartrack , New Zealand , Fiji , Australia , USA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@push('scripts')

    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            // console.log('Scrip/t Loaded ✅');

            const form = document.getElementById('contact-form');
            const tokenInput = document.getElementById('recaptcha-token');

            if (!form || !tokenInput) {
                // console.log('Form not found ❌');
                return;
            }

            form.addEventListener('submit', function (e) {
                e.preventDefault();

                // console.log('Submitting form...');

                grecaptcha.ready(function () {
                    grecaptcha.execute('{{ config('services.recaptcha.site_key') }}', { action: 'lead' })
                        .then(function (token) {

                            // console.log('Captcha Token:', token);

                            tokenInput.value = token;
                            form.submit();
                        });
                });
            });

        });
        @if ($errors->any())
            < div style = "color:red;" >
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </div >
        @endif
    </script>

    @if(session('success'))
        <script>
                Swal.fire('Success', '{{ session('success') }}', 'success');
        </script>
    @endif

    @if($errors->has('captcha'))
        <script>
            Swal.fire('Captcha Failed', '{{ $errors->first('captcha') }}', 'error');
        </script>
    @endif

@endpush