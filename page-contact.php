<?php get_header();?>
      <div class="page-content aboutspace">
          <div
          class="dlab-bnr-inr overlay-black-middle"
          style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/bg4.jpg)"
        >
          <div class="container">
            <div class="dlab-bnr-inr-entry">
              <h1 class="text-white">Contact us</h1>
            </div>
          </div>
        </div>

        <div class="breadcrumb-row">
          <div class="container">
            <ul class="list-inline">
              <li><a href="#">Home</a></li>
              <li>Contact us</li>
            </ul>
          </div>
        </div>
      <div class="section-full content-inner bg-white contact-style-1">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 wow fadeInUp"
            data-wow-duration="2s"
            data-wow-delay="0.2s">
              <div class="p-a30 bg-gray clearfix m-b30">
                <h2>Contact Form</h2>
                <div class="dzFormMsg"></div>
                <form
                  method="post"
                  class="dzForm"
                  action="script/contact.php"
                >
                  <input type="hidden" value="Contact" name="dzToDo" />
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <div class="input-group">
                          <input
                            name="dzName"
                            type="text"
                            required
                            class="form-control"
                            placeholder="Your Name"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <div class="input-group">
                          <input
                            name="dzEmail"
                            type="email"
                            class="form-control"
                            required
                            placeholder="Your Email Id"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <div class="input-group">
                          <input
                            name="dzPhone"
                            type="text"
                            required
                            class="form-control"
                            placeholder="Phone"
                          />
                        </div>
                      </div>
                    </div>
                    <!-- <div class="col-lg-6">
                      <div class="form-group">
                        <div class="input-group">
                          <input
                            name="dzOther[Subject]"
                            type="text"
                            required
                            class="form-control"
                            placeholder="Subject"
                          />
                        </div>
                      </div>
                    </div> -->
                    <div class="col-lg-12">
                      <div class="form-group">
                        <div class="input-group">
                          <textarea
                            name="dzMessage"
                            rows="4"
                            class="form-control"
                            required
                            placeholder="Your Message..."
                          ></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <div class="input-group">
                          <div
                            class="g-recaptcha"
                            data-sitekey="6LefsVUUAAAAABy0gWJlqIPO3YpVkxgcjy9XJ5kQ"
                            data-callback="verifyRecaptchaCallback"
                            data-expired-callback="expiredRecaptchaCallback"
                          ></div>
                          <input
                            class="form-control d-none"
                            style="display: none"
                            data-recaptcha="true"
                            required
                            data-error="Please complete the Captcha"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <button
                        name="submit"
                        type="submit"
                        value="Submit"
                        class="site-button"
                      >
                        <span>Submit</span>
                      </button>
                    </div>
                  </div>
                </form>
                <?php 
                if(isset($_POST['submit'])){
                  
                }
                ?>
              </div>
            </div>

            <div class="col-lg-4 d-lg-flex wow fadeInUp"  
            data-wow-duration="2s"
            data-wow-delay="0.2s">
                <div
                  class="p-a30 m-b30 border-1 contact-area align-self-stretch"
                >
  
                  <ul class="no-margin">
                    <li class="icon-bx-wraper left m-b30">
                      <div class="icon-bx-xs bg-primary">
                        <a href="#" class="icon-cell"
                          ><i class="ti-location-pin"></i
                        ></a>
                      </div>
                      <div class="icon-content">
                        <h6 class="text-uppercase m-tb0 dlab-tilte">
                          Address
                        </h6>
                        <p>
                            #122/1, New Khatha No. 236, Shanker Reddy Layout, Chelekare, Kalyan Nagar Service Road, Opposite to HRBR Layout, Banaswadi Post, Bangalore-560043.
                        </p>
                      </div>
                    </li>
                    <li class="icon-bx-wraper left m-b30">
                      <div class="icon-bx-xs bg-primary">
                        <a href="#" class="icon-cell"
                          ><i class="ti-email"></i
                        ></a>
                      </div>
                      <div class="icon-content">
                        <h6 class="text-uppercase m-tb0 dlab-tilte">Email</h6>
                        <p>
                          <a
                            href="/cdn-cgi/l/email-protection"
                            class="__cf_email__"
                            data-cfemail="6d04030b022d0e02001d0c0314430e0200"
                            >info@fixmycars.in</a
                          >
                        </p>
                      </div>
                    </li>
                    <li class="icon-bx-wraper left">
                      <div class="icon-bx-xs bg-primary">
                        <a href="#" class="icon-cell"
                          ><i class="ti-mobile"></i
                        ></a>
                      </div>
                      <div class="icon-content">
                        <h6 class="text-uppercase m-tb0 dlab-tilte">PHONE</h6>
                        <p>(+91) 7090009537 / <br/> (+91) 9108826199</p>
                      </div>
                    </li>
                  </ul>
                  <div class="m-t20">
                    <ul class="dlab-social-icon dez-border dlab-social-icon-lg">
                      <li>
                        <a
                          href="https://www.facebook.com/"
                          class="fab fa-facebook-f bg-primary"
                          target="blank"
                        ></a>
                      </li>
                      <li>
                        <a
                          href="https://www.twitter.com/"
                          class="fab fa-twitter bg-primary"
                          target="blank"
                        ></a>
                      </li>
                      <li>
                        <a
                          href="https://www.linkedin.com/"
                          class="fab fa-linkedin-in bg-primary"
                          target="blank"
                        ></a>
                      </li>
                      <li>
                        <a
                          href="https://www.pinterest.com/"
                          class="fab fa-pinterest-p bg-primary"
                          target="blank"
                        ></a>
                      </li>
                      <li>
                        <a
                          href="https://www.mail.google.com/"
                          class="fab fa-google-plus-g bg-primary"
                          target="blank"
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row ">
              <div class="col-lg-12 wow fadeInUp" 
              data-wow-duration="2s"
              data-wow-delay="0.2s">
                <h2>Our Location</h2>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.1586565798834!2d77.63930861527017!3d13.025566717215023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae17835ed70543%3A0xd33dd28e82f6a7bf!2sFix%20My%20Cars%20-%20Multi%20Brand%20Car%20Service%20%26%20Body%20Repair%20Centre!5e0!3m2!1sen!2sin!4v1647930390807!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php get_footer();?>