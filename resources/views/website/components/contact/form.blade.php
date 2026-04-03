<div class="rts-contact-area-in-page" data-animation="fadeInUp" data-delay="0.2">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4">
        <div class="contact-info-area-wrapper-p">
          <div class="single-contact-info">
            <div class="icon">
              <i class="fa-solid fa-phone-flip"></i>
            </div>
            <div class="info-wrapper">
              <span>Call Us 24/7</span>
             <a href="tel:+6421382286">+64 213 82286</a>
            </div>
          </div>
          <div class="single-contact-info">
            <div class="icon">
              <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="info-wrapper">
              <span>Work with us</span>
              <a href="mailto:info@apex.com">info@apex.com</a>
            </div>
          </div>
          <div class="single-contact-info">
            <div class="icon">
              <i class="fa-solid fa-location-dot"></i>
            </div>
            <div class="info-wrapper">
              <span>Our Location</span>
               <a href="#">Apex Cartrack , New Zealand , Fiji , Australia , USA</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="thumbnail-contact-form">
          <img src="{{ asset('website/images/contact/01.webp') }}" alt="contact" />
        </div>
      </div>
      <div class="col-lg-3">
        <div class="contact-form-p">
          <form method="POST" action="{{ route('lead.store') }}" id="contact-form">
            @csrf

            <h4 class="title">Get In Touch</h4>

            <input name="name" type="text" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Johndoe@gmail.com" required>
            <input type="tel" name="phone" placeholder="+256 2145 2156">
            <input type="text" name="product" placeholder="Ps tracker">

            <textarea name="message" placeholder="Message"></textarea>

            <!-- captcha token -->
            <input type="hidden" name="g-recaptcha-response" id="recaptcha-token">
           
            <button class="rts-btn btn-primary" type="submit">
              Get In Touch
            </button>
          </form>
        
        </div>
      </div>
    </div>
  </div>
</div>