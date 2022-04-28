<?php get_header();?>
    <div class="page-content aboutspace">
      <div class="dlab-bnr-inr overlay-black-middle" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/bg4.jpg)">
        <div class="container">
          <div class="dlab-bnr-inr-entry">
            <h1 class="text-white">Services</h1>
          </div>
        </div>
      </div>

      <div class="breadcrumb-row">
        <div class="container">
          <ul class="list-inline">
            <li><a href="#">Home</a></li>
            <li>Services</li>
          </ul>
        </div>
      </div>
      <!-- click service -->

      <div class="section-full about-us bg-white content-inner-1">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="dlab-tabs vertical">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a data-bs-toggle="tab" class="nav-link active" href="#cargeneral" aria-expanded="true">
                      <h4>Car General Service</h4>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a data-bs-toggle="tab" class="nav-link" href="#carbody" aria-expanded="false">
                      <h4>Car Body Repairs</h4>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a data-bs-toggle="tab" class="nav-link" href="#cargrooming" aria-expanded="false">
                      <h4>Car Grooming</h4>
                    </a>
                  </li>
                </ul>
                <div class="tab-content">
                  <!-- car general -->
                  <div id="cargeneral" class="tab-pane active">
                    <div class="row">
                      <div class="col-lg-7 about-contant">
                        <div class="m-b20">
                          <h2 class="text-uppercase m-t0 m-b10">
                            Car
                            <span class="text-primary">General Service</span>
                          </h2>
                          <div class="clear"></div>
                        </div>
                        <p class="m-b30">
                          We are The Most Successfull in Car Repair Service and We Recover More Than 500+ vehicle.
                        </p>
                        <div class="dical">
                          <!-- periodical -->
                          <h2 class=" m-t0 m-b10"><span class="text-primary">Periodical Maintenance
                              Service</span></h2>
                          <p class="m-b15">
                            Get your vehicle serviced as per your manufacturer's recommendation. Every year or 10,000
                            kms
                            with an oil change, coolant topup, brake fluid check and many others. We can do pick & Drop
                            your vehicle
                          </p>
                          <!-- Quick General checkup -->
                          <h2 class=" m-t0 m-b10"><span class="text-primary">Quick General checkup</span></h2>
                          <p class="m-b15">
                            Vital general checkup for your car during your long travel. Keep your family safe with the
                            spic and span vehicle to have endless fun.
                          </p>
                          <!-- Comfort Check - HVAC Opertion -->
                          <h2 class=" m-t0 m-b10"><span class="text-primary">Comfort Check - HVAC Opertion</span></h2>
                          <p class="m-b15">
                            Heating, Ventilation and Air condition is truly a differentiator to make your driving
                            comfortable. prone to attract dust, pollen and odors. Get your Air-conditioning system
                            thoroughly serviced, with refrigerant top-up and cabin filter in place.
                          </p>
                          <!-- Vehicle Dynamic Check & Evaluation -->
                          <h2 class=" m-t0 m-b10"><span class="text-primary">Vehicle Dynamic Check & Evaluation</span>
                          </h2>
                          <p class="m-b15">
                            Want to Evaluate your vehicle to understand the vehicle drivability and safety. We help you
                            to get it done.</p>
                          <!-- Interior Treatment -->
                          <h2 class=" m-t0 m-b10"><span class="text-primary">Interior Treatment</span></h2>
                          <p class="m-b15">
                            The interior of your car takes a lot of abuse. Each time you get in your car, you drag in
                            more dirt. Each time you eat or drink in your car, you add a few more crumbs and spills. In
                            fact, just sitting in your car, you drop hair, dead skin, makeup and other contaminants. All
                            of this dirt and junk adds up very fast. FIX MY KARS offer a selection of interior care
                            products as unique as your car. Each is designed to care for interior components quickly and
                            easily.</p>
                          <!--  Break down Assistance-->
                          <h2 class=" m-t0 m-b10"><span class="text-primary">Break down Assistance</span></h2>
                          <p class="m-b15">
                            Got stuck on the way to business. Not to worry we FIX MY KARS will reach your spot. We aim
                            to fix your vehicle by the roadside.</p>

                        </div>


                      </div>
                      <div class="col-lg-5 dlab-we-best">
                        <div
                          class="p-lr20 p-tb40 m-t30 dlab-appoinment-now-form tp-dark clearfix bg-secondry border-1 text-black">
                          <form method="post" class="dzForm" action="script/contact.php">
                            <input value="Appoinment" name="dzToDo" type="hidden" />
                            <div class="row">
                              <div class="col-lg-12 text-center text-white m-b10">
                                <h2 class="m-t0 m-b10">Make An Appoinment</h2>
                                <div class="dlab-separator-outer">
                                  <div class="dlab-separator bg-primary"></div>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <input name="dzName" class="form-control" placeholder="Name" type="text" />
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <input name="dzEmail" class="form-control" placeholder="Email" type="text" />
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <input name="dzOther[date]" class="form-control" placeholder="Select Date"
                                    type="text" />
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <select class="bs-select-hidden" name="dzOther[service]">
                                    <option value="">Services</option>
                                    <option value="">Services 2</option>
                                    <option value="">Services 3</option>
                                    <option value="">Services 4</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <div class="input-group">
                                    <textarea name="dzMessage" rows="4" class="form-control" required=""
                                      placeholder="Text messege..."></textarea>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="g-recaptcha" data-theme="dark"
                                      data-sitekey="6LefsVUUAAAAABy0gWJlqIPO3YpVkxgcjy9XJ5kQ"
                                      data-callback="verifyRecaptchaCallback"
                                      data-expired-callback="expiredRecaptchaCallback"></div>
                                    <input class="form-control d-none" style="display: none" data-recaptcha="true"
                                      required data-error="Please complete the Captcha" />
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-12 text-center">
                                <div class="dzFormMsg"></div>
                                <button name="Reset" value="Reset" type="reset" class="site-button skew-secondry m-r10">
                                  <span>Reset</span>
                                </button>
                                <button name="submit" type="submit" value="Submit" class="site-button skew-secondry">
                                  <span>Submit</span>
                                </button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- car body -->
                  <div id="carbody" class="tab-pane">
                    <div class="row">
                      <div class="col-lg-7 about-contant">
                        <div class="m-b20">
                          <h2 class="text-uppercase m-t0 m-b10">
                            Car
                            <span class="text-primary">Body Repairs</span>
                          </h2>
                          <div class="clear"></div>
                        </div>
                        <p class="m-b30">
                          We are The Most Successfull in Car Repair Service and We Recover More Than 500+ vehicle.
                        </p>
                        <div class="dical">
                          <!-- Minor Repair (Single Panel) -->
                          <h2 class=" m-t0 m-b10"><span class="text-primary">Minor Repair (Single Panel)</span></h2>
                          <p class="m-b15">
                            Minor body damage occurs all the time. we keep encounter the Door dings, bumper scrapes,
                            scratches, etc. A car lover never leaves his vehicle in that condition. We help you to
                            recover your car beautiness.
                          </p>
                          <!--Major Repair (Single Panel)-->
                          <h2 class=" m-t0 m-b10"><span class="text-primary">Major Repair (Single Panel)</span></h2>
                          <p class="m-b15">
                            Having a major dent on your car is like walking around the mall with a huge ketchup stain on
                            your white tee—it's unsightly. You can ignore it, but other people won't and they'll
                            unfairly judge you for it. But don’t worry we FIX your car with the best possible way.
                          </p>
                          <!-- Complete - Refurbishment - Full body paint -->
                          <h2 class=" m-t0 m-b10"><span class="text-primary">Complete - Refurbishment - Full body
                              paint</span></h2>
                          <p class="m-b15">
                            When's the last time you gave your car a second look? Or ran your fingers along the hood?
                            It's time you fell back in love with your car again. Let us transform your weathered wagon
                            with a new coat of paint, and soon you'll be driving the car you always wanted, again
                          </p>
                          <!-- Towing Facility -->
                          <h2 class=" m-t0 m-b10"><span class="text-primary">Towing Facility</span>
                          </h2>
                          <p class="m-b15">
                            Whether you are locked out of your car, have a dead battery or ran out of fuel. Call us to
                            Tow your car.</p>


                        </div>


                      </div>
                      <div class="col-lg-5 dlab-we-best">
                        <div
                          class="p-lr20 p-tb40 m-t30 dlab-appoinment-now-form tp-dark clearfix bg-secondry border-1 text-black">
                          <form method="post" class="dzForm" action="script/contact.php">
                            <input value="Appoinment" name="dzToDo" type="hidden" />
                            <div class="row">
                              <div class="col-lg-12 text-center text-white m-b10">
                                <h2 class="m-t0 m-b10">Make An Appoinment</h2>
                                <div class="dlab-separator-outer">
                                  <div class="dlab-separator bg-primary"></div>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <input name="dzName" class="form-control" placeholder="Name" type="text" />
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <input name="dzEmail" class="form-control" placeholder="Email" type="text" />
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <input name="dzOther[date]" class="form-control" placeholder="Select Date"
                                    type="text" />
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <select class="bs-select-hidden" name="dzOther[service]">
                                    <option value="">Services</option>
                                    <option value="">Services 2</option>
                                    <option value="">Services 3</option>
                                    <option value="">Services 4</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <div class="input-group">
                                    <textarea name="dzMessage" rows="4" class="form-control" required=""
                                      placeholder="Text messege..."></textarea>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="g-recaptcha" data-theme="dark"
                                      data-sitekey="6LefsVUUAAAAABy0gWJlqIPO3YpVkxgcjy9XJ5kQ"
                                      data-callback="verifyRecaptchaCallback"
                                      data-expired-callback="expiredRecaptchaCallback"></div>
                                    <input class="form-control d-none" style="display: none" data-recaptcha="true"
                                      required data-error="Please complete the Captcha" />
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-12 text-center">
                                <div class="dzFormMsg"></div>
                                <button name="Reset" value="Reset" type="reset" class="site-button skew-secondry m-r10">
                                  <span>Reset</span>
                                </button>
                                <button name="submit" type="submit" value="Submit" class="site-button skew-secondry">
                                  <span>Submit</span>
                                </button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- car grooming -->
                  <div id="cargrooming" class="tab-pane">
                    <div class="row">
                      <div class="col-lg-7 about-contant">
                        <div class="m-b20">
                          <h2 class="text-uppercase m-t0 m-b10">
                            Car
                            <span class="text-primary">Grooming</span>
                          </h2>
                          <div class="clear"></div>
                        </div>
                        <p class="m-b30">
                          We are The Most Successfull in Car Repair Service and We Recover More Than 500+ vehicle.
                        </p>
                        <div class="dical">
                          <!-- car washing -->
                          <h2 class=" m-t0 m-b10"><span class="text-primary">Car Washing</span></h2>
                          <p class="m-b15">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-5 dlab-we-best">
                        <div
                          class="p-lr20 p-tb40 m-t30 dlab-appoinment-now-form tp-dark clearfix bg-secondry border-1 text-black">
                          <form method="post" class="dzForm" action="script/contact.php">
                            <input value="Appoinment" name="dzToDo" type="hidden" />
                            <div class="row">
                              <div class="col-lg-12 text-center text-white m-b10">
                                <h2 class="m-t0 m-b10">Make An Appoinment</h2>
                                <div class="dlab-separator-outer">
                                  <div class="dlab-separator bg-primary"></div>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <input name="dzName" class="form-control" placeholder="Name" type="text" />
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <input name="dzEmail" class="form-control" placeholder="Email" type="text" />
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <input name="dzOther[date]" class="form-control" placeholder="Select Date"
                                    type="text" />
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <select class="bs-select-hidden" name="dzOther[service]">
                                    <option value="">Services</option>
                                    <option value="">Services 2</option>
                                    <option value="">Services 3</option>
                                    <option value="">Services 4</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <div class="input-group">
                                    <textarea name="dzMessage" rows="4" class="form-control" required=""
                                      placeholder="Text messege..."></textarea>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="g-recaptcha" data-theme="dark"
                                      data-sitekey="6LefsVUUAAAAABy0gWJlqIPO3YpVkxgcjy9XJ5kQ"
                                      data-callback="verifyRecaptchaCallback"
                                      data-expired-callback="expiredRecaptchaCallback"></div>
                                    <input class="form-control d-none" style="display: none" data-recaptcha="true"
                                      required data-error="Please complete the Captcha" />
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-12 text-center">
                                <div class="dzFormMsg"></div>
                                <button name="Reset" value="Reset" type="reset" class="site-button skew-secondry m-r10">
                                  <span>Reset</span>
                                </button>
                                <button name="submit" type="submit" value="Submit" class="site-button skew-secondry">
                                  <span>Submit</span>
                                </button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- service -->
      <div class="section-full bg-gray content-inner">
        <div class="container">
          <div class="section-head text-center">
            <h2 class="text-uppercase">
              Our <span class="text-primary">Multi-brand Services </span>
            </h2>
  
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
              <div class="service-style2">
                <div class="dlab-media">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/our-services/pic1.jpg" alt="" />
                </div>
                <div class="icon-content">
                  <h3 class="dlab-tilte m-b15">
                    <a href="#">Ford Car Service</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
              <div class="service-style2">
                <div class="dlab-media">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/our-services/pic2.jpg" alt="" />
                </div>
                <div class="icon-content">
                  <h3 class="dlab-tilte m-b15">
                    <a href="#">Renault Car Service</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
              <div class="service-style2">
                <div class="dlab-media">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/our-services/pic3.jpg" alt="" />
                </div>
                <div class="icon-content">
                  <h3 class="dlab-tilte m-b15">
                    <a href="#">Maruti Car Service</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
              <div class="service-style2">
                <div class="dlab-media">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/our-services/pic4.jpg" alt="" />
                </div>
                <div class="icon-content">
                  <h3 class="dlab-tilte m-b15">
                    <a href="#">Mahindra Car Service</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
              <div class="service-style2">
                <div class="dlab-media">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/our-services/pic5.jpg" alt="" />
                </div>
                <div class="icon-content">
                  <h3 class="dlab-tilte m-b15">
                    <a href="#">Hyundai Car Service</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
              <div class="service-style2">
                <div class="dlab-media">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/our-services/pic6.jpg" alt="" />
                </div>
                <div class="icon-content">
                  <h3 class="dlab-tilte m-b15">
                    <a href="#">Honda Car Service</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
              <div class="service-style2">
                <div class="dlab-media">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/our-services/pic6.jpg" alt="" />
                </div>
                <div class="icon-content">
                  <h3 class="dlab-tilte m-b15">
                    <a href="#">Skoda Car Service</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
              <div class="service-style2">
                <div class="dlab-media">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/our-services/pic6.jpg" alt="" />
                </div>
                <div class="icon-content">
                  <h3 class="dlab-tilte m-b15">
                    <a href="#">Volkswagen Car Service</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
              <div class="service-style2">
                <div class="dlab-media">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/images/our-services/pic6.jpg" alt="" />
                </div>
                <div class="icon-content">
                  <h3 class="dlab-tilte m-b15">
                    <a href="#">Toyoto Car Service</a>
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php get_footer();?>