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
              <a href="tel:3479052">3479052</a><br>
              <a href="tel:9914253">9914253</a>
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
              <a href="#">125 Town, New Zealand</a>
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
          <form class="form__content" method="post" action="mailer.php" id="contact-form">
            <h4 class="title">Get In Touch</h4>
            <input name="name" id="name" type="text" placeholder="Your Name" />
            <input type="email" name="email" id="email" placeholder="Johndoe@gmail.com" />
            <input type="tel" name="phone" id="phone" placeholder="+256 2145 2156" />
           
              <select  aria-label="Default select example">
                <option selected="">Interested Product</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            
            <textarea name="message" id="message" placeholder="Message"></textarea>
            <input type="checkbox" id="checkbox" name="terms" />
            <label for="checkbox">I agree to the Terms & Conditions</label>
            <button class="rts-btn btn-primary" type="submit">
              Get In Touch
            </button>
          </form>
          <div id="form-messages"></div>
        </div>
      </div>
    </div>
  </div>
</div>