<div id="side-bar" class="side-bar header-two">
    <button class="close-icon-menu" title="Close menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="rts-sidebar-menu-desktop">
        <a class="logo-1" href="#"><img class="logo" src="{{ asset('website/images/logo/apex.png') }}"
                alt="finbiz_logo"></a>
        <div class="body d-none d-xl-block">
            <p class="disc">
                Apex specializes in advanced GPS tracking solutions that ensure real-time monitoring, enhanced security,
                and seamless connectivity for vehicles and assets.
            </p>
            <div class="get-in-touch">
                <!-- title -->
                <div class="h6 title">Get In Touch</div>
                <!-- title End -->
                <div class="wrapper">
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-phone-alt"></i>
                        <a href="#">347-9052</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-envelope"></i>
                        <a href="#">info@apex.com</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-globe"></i>
                        <a href="#">apex.vibrantick.org</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="#">13/A, New Pro State, NZ</a>
                    </div>
                    <!-- single ENd -->
                </div>
                <div class="social-wrapper-two menu">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                    <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu area start -->
    <div class="mobile-menu d-block d-xl-none">
    <nav class="nav-main mainmenu-nav mt--30">
        <ul class="mainmenu metismenu" id="mobile-menu-active">

            <!-- About Us -->
            <li class="has-droupdown">
                <a href="#" class="main" aria-expanded="false">About Us</a>
                <ul class="submenu mm-collapse">
                    <li><a href="{{ route('case-studies') }}">Case</a></li>
                    <li><a href="{{ route('news') }}">News</a></li>
                    <li><a href="{{ route('videos') }}">Video</a></li>
                </ul>
            </li>
            <li class="has-droupdown">
                <a href="#" class="main" aria-expanded="false">Sales</a>
                <ul class="submenu mm-collapse">
                    <li><a href="{{ route('car-sale') }}">Car Sales</a></li>
                    <li><a href="{{ route('car-parts') }}">Car Parts</a></li>
                    <li><a href="{{ route('tractor-sale') }}">Tractor Sales</a></li>
                    <li><a href="{{ route('tractor-part') }}">Tractor Parts</a></li>
                    <li><a href="{{ route('farming-supplies') }}">Farming Supplies</a></li>
                </ul>
            </li>

            <!-- Products -->
            <li class="has-droupdown">
                <a href="#" class="main" aria-expanded="false">Products</a>
                <ul class="submenu mm-collapse">

                    <!-- Vehicle Tracker -->
                    <li class="has-droupdown">
                        <a href="#">Vehicle Tracker</a>
                        <ul class="submenu mm-collapse">
                            <li><a href="{{ route('vehicle-tracker-gs105') }}">GS10G - 4G 8PIN Tracker</a></li>
                            <li><a href="{{ route('vehicle-tracker-gs105') }}">H29P - 4G Tracker</a></li>
                            <li><a href="{{ route('vehicle-tracker-gs105') }}">GS900 - 4G 300MAH Tracker</a></li>
                            <li><a href="{{ route('vehicle-tracker-gs105') }}">GS12 - 4G Waterproof Tracker</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#">Vehicle Tracker</a>
                        <ul class="submenu mm-collapse">
                            <li><a href="{{ route('vehicle-tracker-gs105') }}">GS10G - 4G 8PIN Tracker</a></li>
                            <li><a href="{{ route('vehicle-tracker-gs105') }}">H29P - 4G Tracker</a></li>
                            <li><a href="{{ route('vehicle-tracker-gs105') }}">GS900 - 4G 300MAH Tracker</a></li>
                            <li><a href="{{ route('vehicle-tracker-gs105') }}">GS12 - 4G Waterproof Tracker</a></li>
                        </ul>
                    </li>

                    <!-- Asset Tracker -->
                    <li class="has-droupdown">
                        <a href="#">Asset Tracker</a>
                        <ul class="submenu mm-collapse">
                            <li><a href="{{ route('vehicle-tracker-gs105') }}">S20 Pro - 4G TRACKER (LTE/GNSS)</a></li>
                            <li><a href="{{ route('vehicle-tracker-gs105') }}">S20 - 4G Portable 6000MAH</a></li>
                            <li><a href="{{ route('vehicle-tracker-gs105') }}">GS300 - 4G Asset GPS Tracker</a></li>
                            <li><a href="{{ route('vehicle-tracker-gs105') }}">GS18 - 2G Portable 4200MAH</a></li>
                        </ul>
                    </li>

                    <!-- Video Telematics -->
                    <li class="has-droupdown">
                        <a href="#">Video Telematics</a>
                        <ul class="submenu mm-collapse">
                            <li><a href="{{ route('vehicle-tracker-gs105') }}">H18P - 4G ADAS+DMS</a></li>
                            <li><a href="{{ route('vehicle-tracker-gs105') }}">H20P - 4G ADAS+DMS Dashcam</a></li>
                            <li><a href="{{ route('vehicle-tracker-gs105') }}">ADAS+DSM Advanced Assisted</a></li>
                        </ul>
                    </li>

                    <!-- Accessories -->
                    <li class="has-droupdown">
                        <a href="#">Accessories</a>
                        <ul class="submenu mm-collapse">
                            <li><a href="{{ route('vehicle-tracker-gs105') }}">Relay And Socket</a></li>
                            <li><a href="{{ route('vehicle-tracker-gs105') }}">Ultrasonic Oil Level Sensor</a></li>
                            <li><a href="{{ route('vehicle-tracker-gs105') }}">Sound Receiver</a></li>
                            <li><a href="{{ route('vehicle-tracker-gs105') }}">SOS Button</a></li>
                            <li><a href="{{ route('vehicle-tracker-gs105') }}">Capacitance Oil Sensor</a></li>
                        </ul>
                    </li>

                </ul>
            </li>

            <!-- Solutions -->
            <li class="has-droupdown">
                <a href="#" class="main" aria-expanded="false">Solutions</a>
                <ul class="submenu mm-collapse">
                    <li><a href="{{ route('vehicle-management') }}">Vehicle Management</a></li>
                    <li><a href="{{ route('vehicle-management') }}">Asset Management</a></li>
                    <li><a href="{{ route('vehicle-management') }}">Stolen Vehicle Recovery</a></li>
                    <li><a href="{{ route('vehicle-management') }}">Get Free Consultation</a></li>
                </ul>
            </li>

            

            <!-- OEM/ODM -->
            <li>
                <a href="{{ route('oem-odm-service') }}" class="main">OEM/ODM</a>
            </li>

            <!-- Contact -->
            <li>
                <a href="{{ route('contact-us') }}" class="main">Contact Us</a>
            </li>

        </ul>
    </nav>
</div>

    <!-- mobile menu area end -->
</div>