@extends('website.layout.app')
@section('title', 'Contact Us - Apex GPS Tracker Manufacturer')
@section('content')

    {{-- breadcrumb --}}
    @include('website.components.contact.breadcrum')

    {{-- contact form --}}
    @include('website.components.contact.form')

    {{-- google map --}}
    @include('website.components.contact.map')

    {{-- subscribe --}}
    @include('website.components.home.subscribe-form')
@endsection
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