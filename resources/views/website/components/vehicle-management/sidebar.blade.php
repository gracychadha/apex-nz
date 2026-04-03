<div
    class="col-xl-4 col-md-12 col-sm-12 col-12 mt_lg--60 pl--50 pl_lg--0 pl_md--0 pl-lg-controler pl_sm--0 mt-service-shorter">

    <!-- Categories -->
    <div class="rts-single-wized Categories service">
        <div class="wized-header">
            <h5 class="title">Categories</h5>
        </div>

        <div class="wized-body">
            <ul class="single-categories">
                <li><a href="{{ route('vehicle-management') }}">Vehicle Management <i
                            class="far fa-long-arrow-right"></i></a></li>
            </ul>
            <ul class="single-categories">
                <li><a href="{{ route('asset-management') }}">Asset Management <i
                            class="far fa-long-arrow-right"></i></a></li>
            </ul>
            <ul class="single-categories">
                <li><a href="{{ route('stolen-vehicle-management') }}">Stolen vehicle Management <i
                            class="far fa-long-arrow-right"></i></a></li>
            </ul>

        </div>
    </div>

    <!-- Download -->
    {{-- <div class="rts-single-wized download service">
        <div class="wized-header">
            <h5 class="title">Download</h5>
        </div>

        <div class="wized-body">
            <div class="single-download-area">
                <img src="{{ asset('website/images/service/icon/01.svg') }}">
                <div class="mid">
                    <h6 class="title">Service Brochure</h6>
                    <span>Download</span>
                </div>
                <a class="rts-btn btn-primary" href="#"><i class="fal fa-arrow-right"></i></a>
            </div>

            <div class="single-download-area">
                <img src="{{ asset('website/images/service/icon/02.svg') }}">
                <div class="mid">
                    <h6 class="title">Product Catalogue</h6>
                    <span>Download</span>
                </div>
                <a class="rts-btn btn-primary" href="#"><i class="fal fa-arrow-right"></i></a>
            </div>
        </div>
    </div> --}}

    <!-- Contact -->
    <div class="rts-single-wized contact">
        <div class="wized-header">
            <a href="#"><img src="{{ asset('website/images/logo/apex-white.png') }}" alt="Business_logo" /></a>
        </div>
        <div class="wized-body">
            <h5 class="title">Need Help? We Are Here To Help You</h5>
            <a class="rts-btn btn-primary btn-white" href="{{ route('contact-us') }}">Contact Us</a>
        </div>
    </div>

</div>