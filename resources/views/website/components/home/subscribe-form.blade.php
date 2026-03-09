<section class="rts-cts-area-start bg_cts-10 bg_iamge ptb--95">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cta-style-10-wrapper">
                    <div class="left-side">
                        <span>Subscribe Newsletter</span>
                        <h3 class="title">
                            Subscribe for Tracking<br> Updates & Exclusive Offers
                        </h3>
                    </div>
                    <div class="right-side">
                        <form id="subscribeForm">
                            @csrf
                            <input type="email" name="email" placeholder="Enter your email" required>
                            <button class="rts-btn btn-primary btn-white btn-border" type="submit">Subscribe Now</button>
                            <div id="message"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


