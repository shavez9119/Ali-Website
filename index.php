<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="icon" href="images/favicon.png">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
    />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="style.css" />
    <title>AliWebsite</title>
  </head>
  <body>

    <div class="preloader">
      <img src="images/preloader.gif" alt="preloader">
    </div>
    <div class="overlay"></div>
      <header >
          <div class="logo" onclick=location.href="index.html">
            <img src="images/logo.png" class="logo_img" alt="logo">
            <h3>AliWebsite</h3>
          </div>
          <div class="nav_links">
            <ul>
              <li><a class="link" href="#home">Home</a></li>
              <li><a class="link" href="#about">About</a></li>
              <li><a class="link" href="#values">Values</a></li>
              <li><a class="link" href="#features">Features</a></li>
              <li><a class="link" href="#services">Services</a></li>
              <li><a class="link" href="#pricing">Pricing</a></li>
              <li><a class="link" href="#team">Team</a></li>
              <li><a class="link" href="#blog">Blog</a></li>
              <!-- <li><a href="#">Dropdown</a></li> -->
              <li><a class="link" href="#contact">Contact</a></li>
              <li><a href="tel: +91 9119064662" class="nav_btn">Make a&nbsp;call <i class="fa-solid fa-phone-flip"></i></a></li>
            </ul>
          
          </div>
          <i class="fa-solid fa-bars"></i>
          
      </header>
      <!--  HERO  -->
        <div class="hero" id="home">
          <div class="container">
            <div class="row">
              <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                <div class="text">
                  <h1>Most Affordable Web Development Company In India</h1>
                  <p>Carry on business work with solid web development procedure through bridging the gap between clients and server end</p>
                  <button onclick=location.href="https://www.google.com" class="hero_btn">Read More &nbsp; <i class="fa-solid fa-arrow-right-long"></i></button>
                </div>
              </div>
              <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                <div class="hero_img">
                  <img src="images/hero-img.png" class="hero_img" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--  HERO END  -->

        <!--  ABOUT  -->
        <div id="about"></div>
        <section >
        <div class="about" >
          <div class="container">
            <div class="row about">
              <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                <div class="about_text">
                  <span>WHO WE ARE</span>
                  <h3>Why Choose Us?</h3>
                  <p>Choosing a good digital marketing company that understands the agenda of your business is more important than you think.
                  There are a number of reasons due to which you must choose us.</p>
                  <button onclick=location.href="https://www.google.com" class="hero_btn">Read More &nbsp; <i class="fa-solid fa-arrow-right-long"></i></button>
                </div>
              </div>
              <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                <div class="img_container">
                  <img src="images/about.jpg" alt="about">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--  ABOUT END -->



      <!-- VALUE CARDS -->
      <div id="values"></div>
      <section data-aos="fade-up">
        <div class="value">
          <div class="container">
            <div class="title" data-aos="fade-down">OUR VALUES</div>
            <div class="sub_title" data-aos="fade-down">Our core values guide everything we do</div>
            <div class="row">
              <div class="col-lg-4 col-md-6" data-aos="fade-right" data-aos-duration="1000">
                <div class="value_card">
                  <div class="value_img">
                    <img src="images/values-1.png" alt="values-1">
                  </div>
                    <h3 class="card_title">Employees</h3>
                    <p class="card_description">Eum ad dolor et Autem aut fugiat debitis voluptatem consequuntur sit Et veritatis id.</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="value_card">
                  <div class="value_img">
                    <img src="images/values-2.png" alt="values-1">
                  </div>
                  <h3 class="card_title">Innovation</h3>
                  <p class="card_description">Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-duration="1000">
                <div class="value_card">
                  <div class="value_img">
                    <img src="images/values-3.png" alt="values-1">
                  </div>
                  <h3 class="card_title">Profitabilty</h3>
                  <p class="card_description">Eum ad dolor et Autem aut fugiat debitis voluptatem consequuntur sit Et veritatis id.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- VALUE CARDS END -->

      <!-- FACILITIES -->
      <div id="facilities"></div>
      <section>
        <div class="facilities">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-right" data-aos-duration="1000"
>
                <div class="facilities_box">
                  <i class="fa-solid fa-face-smile blue"></i>
                  <p>Happy Clients</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-right" data-aos-duration="1000"
>
                <div class="facilities_box">
                  <i class="fa-solid fa-file-contract orange"></i>
                  <p>Best Projects</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-left" data-aos-duration="1000"
>
                <div class="facilities_box">
                  <i class="fa-solid fa-headset green"></i>
                  <p>24/7 Support</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-left" data-aos-duration="1000"
>
                <div class="facilities_box">
                  <i class="fa-solid fa-user-group brown"></i>
                  <p>Excelent Team</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- FACILITIES END -->


      <!-- FEATURES -->
      <div id="features"></div>
      <section>
        <div class="features">
          <div class="container">
            <div class="title" data-aos="fade-up" data-aos-duration="1000">FEATURES</div>
            <div class="sub_title" data-aos="fade-up" data-aos-duration="1000">Top Features Of Our Company</div>
            <div class="row item">
              <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                <div class="features_left">
                  <div class="features_img_container">
                    <img src="images/features.png" alt="features">
                  </div>
                </div>
                </div>
                      <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="features_box">
                                <i class="fa-solid fa-check"></i>
                                <p>Excelent Documentation</p>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="features_box">
                                <i class="fa-solid fa-check"></i>
                                <p>High Security</p>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="features_box">
                                <i class="fa-solid fa-check"></i>
                                <p>High Scalability</p>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="features_box">
                                <i class="fa-solid fa-check"></i>
                                <p>Offers High Security</p>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="features_box">
                                <i class="fa-solid fa-check"></i>
                                <p>Thoroughly Tested</p>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="features_box">
                                <i class="fa-solid fa-check"></i>
                                <p>Provides Rapid Development</p>
                              </div>
                            </div>
                          </div>
                      </div>
            </div>
          </div>
        </div>
      </section>
      <!-- FEATURES END -->


      <!-- CATEGORY -->

      <!-- <section id="portfolio">
        <div class="category">
          <div class="container">
            <div class="row item">
              <div class="col-md-7" data-aos="fade-right" data-aos-duration="1000">
                <div class="category_left">
                  <h2>Neque officiis dolore maiores et exercitationem quae est seda lidera pat claero</h2>
                  <ul class="category_tabs">
                    <li class="is_active category">SAEPE FUGA</li>
                    <li class="voluptates category">VOLUPTATES</li>
                    <li class="corrupti category">CORRUPTI</li>
                  </ul>
                  <div class="category_text is_active">
                    <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima
                      nihil quae aspernatur quo suscipit voluptatem.</p>
                    <p class="diff"><i class="fa-solid fa-check"></i>&nbsp; &nbsp; Repudiandae rerum velit modi et officia quasi facilis</p>
                    <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni
                      quaerat
                      nemo et.</p>
                    <p class="diff"><i class="fa-solid fa-check"></i>&nbsp; &nbsp; Repudiandae rerum velit modi et officia quasi facilis</p>
                    <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni
                      quaerat
                      nemo et.</p>
                  </div>
                  <div class="category_text">
                    <p>Voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima
                      nihil quae aspernatur quo suscipit voluptatem.</p>
                    <p class="diff"><i class="fa-solid fa-check"></i>&nbsp; &nbsp; Repudiandae rerum velit modi et officia quasi facilis
                    </p>
                    <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni
                      quaerat
                      nemo et.</p>
                    <p class="diff"><i class="fa-solid fa-check"></i>&nbsp; &nbsp; Repudiandae rerum velit modi et officia quasi facilis
                    </p>
                    <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni
                      quaerat
                      nemo et.</p>
                  </div>
                  <div class="category_text">
                    <p>Inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima
                      nihil quae aspernatur quo suscipit voluptatem.</p>
                    <p class="diff"><i class="fa-solid fa-check"></i>&nbsp; &nbsp; Repudiandae rerum velit modi et officia quasi facilis
                    </p>
                    <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni
                      quaerat
                      nemo et.</p>
                    <p class="diff"><i class="fa-solid fa-check"></i>&nbsp; &nbsp; Repudiandae rerum velit modi et officia quasi facilis
                    </p>
                    <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni
                      quaerat
                      nemo et.</p>
                  </div>
                </div>
                
              </div>
              <div class="col-md-5" data-aos="fade-left" data-aos-duration="1000">
                <div class="category_img">
                  <img src="images/features-2.png" alt="features-2">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- CATEGORY END-->


      <!-- DETAIL -->

      <section>
        <div class="detail">
          <div class="container">
            <div class="sub_title" data-aos="fade-up" data-aos-duration="1000">Extra Style For Client Requirment</div>
            <div class="row item">
              <div class="col-lg-4" data-aos="fade-right" data-aos-duration="1000">
                <div class="detail_img">
                  <img src="images/features-3.png" alt="features-3">
                </div>
              </div>
              <div class="col-lg-8 mg-top" data-aos="fade-left" data-aos-duration="1000">
                <div class="row my">
                  <div class="col-sm-6">
                    <div class="detail_text_right">
                      <div class="detail_icon">
                        <i class="fa-solid fa-arrows-to-dot"></i>
                      </div>
                      <div class="detail_text">
                        <h5>Corporis voluptates sit</h5>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="detail_text_right">
                      <div class="detail_icon">
                        <i class="fa-solid fa-business-time"></i>
                      </div>
                      <div class="detail_text">
                        <h5>Ullamco laboris nisi</h5>
                        <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="detail_text_right">
                      <div class="detail_icon">
                        <i class="fa-solid fa-calendar"></i>
                      </div>
                      <div class="detail_text">
                        <h5>Labore consequatur</h5>
                        <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                   <div class="detail_text_right">
                      <div class="detail_icon">
                        <i class="fa-solid fa-chart-line"></i>
                      </div>
                      <div class="detail_text">
                        <h5>Beatae veritatis</h5>
                        <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                      </div>
                   </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="detail_text_right">
                      <div class="detail_icon">
                        <i class="fa-solid fa-chart-pie"></i>
                      </div>
                      <div class="detail_text">
                        <h5>Molestiae dolor</h5>
                        <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="detail_text_right">
                      <div class="detail_icon">
                        <i class="fa-solid fa-chart-simple"></i>
                      </div>
                      <div class="detail_text">
                        <h5>Explicabo consectetur</h5>
                        <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- DETAIL END -->
      <div id="services"></div>
      <!-- SERVICES -->
      <section >
        <div class="service">
          <div class="container">
            <div class="title"  data-aos="fade-up" data-aos-duration="1000">SERVICES</div>
            <div class="sub_title" data-aos="fade-up" data-aos-duration="1000">We Offer A Wide Array Of Services To Your Web, Mobile etc.</div>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-right" data-aos-duration="1000">
              <div class="service_card blue_card">
                <div class="service_icon">
                  <i class="fa-regular fa-message"></i>
                </div>
                <h3>Web Development</h3>
                <p>Cross-browser and cross-device compatibility driven by mobile responsiveness all under one roof
                Starting from basic website designs.</p>
                <a href="#" class="service_btn" onclick=location.href="https://www.google.com">Read More <i class="fa-solid fa-arrow-right-long service_btn"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-duration="1000">
              <div class="service_card orange_card">
                <div class="service_icon">
                  <i class="fa-regular fa-message"></i>
                </div>
                <h3>Digital Marketing</h3>
                <p>Developing a long-term and reliable marketing strategy that will flourish and live a longer life, while ensuring your
                customers stay with you and tell the world the tales of your business.</p>
                <a href="#" class="service_btn" onclick=location.href="https://www.google.com">Read More <i class="fa-solid fa-arrow-right-long service_btn"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-left" data-aos-duration="1000">
              <div class="service_card green_card">
                <div class="service_icon">
                  <i class="fa-regular fa-message"></i>
                </div>
                <h3 >Graphic Design</h3>
                <p>We provide the best graphic design solutions that are customized to meet your brand requirements.</p>
                <a href="#" class="service_btn" onclick=location.href="https://www.google.com">Read More <i class="fa-solid fa-arrow-right-long service_btn"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-right" data-aos-duration="1000">
              <div class="service_card red_card">
                <div class="service_icon">
                  <i class="fa-regular fa-message"></i>
                </div>
                <h3>UX Design</h3>
                <p>UX drives UI. Our team of UX designers at Acodez have ample of years of experience in the core areas of user experience,
                which helps them collaborate the finer modules of usability and functionality.</p>
                <a href="#" class="service_btn" onclick=location.href="https://www.google.com">Read More <i class="fa-solid fa-arrow-right-long service_btn"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-duration="1000">
              <div class="service_card purple_card">
                <div class="service_icon">
                  <i class="fa-regular fa-message"></i>
                </div>
                <h3>Mobile App</h3>
                <p>Intuitive designs combined with compelling user experience are what makes our apps stand ahead in the digital age. Seamless experience driven by international standards in collaboration</p>
                <a href="#" class="service_btn" onclick=location.href="https://www.google.com">Read More <i class="fa-solid fa-arrow-right-long service_btn"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-left" data-aos-duration="1000">
              <div class="service_card pink_card">
                <div class="service_icon">
                  <i class="fa-regular fa-message"></i>
                </div>
                <h3>Branding</h3>
                <p>Crafting a brand identity for your business that will convey your intention, goals and all that you intend to do for
                your audience - embedded inside a single design - connecting your business with your customers.</p>
                <a href="#" class="service_btn" onclick=location.href="https://www.google.com">Read More <i class="fa-solid fa-arrow-right-long service_btn"></i></a>
              </div>
            </div>
          </div>
          </div>
        </div>
      </section>
      <!-- SERVICES END -->



      <!-- PRICING -->
      <div id="pricing"></div>
      <section>
        <div class="pricing">
          <div class="container">
            <div class="title" data-aos="fade-up" data-aos-duration="1000">PRICING</div>
            <div class="sub_title" data-aos="fade-up" data-aos-duration="1000">Check Our Pricing</div>
            <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-right" data-aos-duration="1000">
                <div class="price_card">
                  <div class="price_title blue_price">Free Plan</div>
                  <div class="price"><span>$0</span> / mo</div>
                  <img src="images/pricing-free.png" alt="pricing-free">
                  <div class="price_text">
                  <p>5-6 Pages</p>
                  <p>Small business, Portfolio</p>
                  <del><p>Responsive Design with mobile optimization</p></del>
                  <del><p>Embed photos, videos and music in your pages</p></del>
                  <del><p>Photo gallery</p></del>
                  </div>
                  <button class="price_btn">Buy Now</button>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-right" data-aos-duration="1000" >
                <div class="price_card">
                  <div class="price_title green_price">Starter Plan</div>
                  <div class="price"><span>$99</span> / mo</div>
                  <img src="images/pricing-starter.png" alt="pricing-free">
                  <div class="price_text">
                  <p>8-9 Pages</p>
                  <p>Small business, Portfolio</p>
                  <p>Responsive Design with mobile optimization</p>
                  <del><p>Embed photos, videos and music in your pages</p></del>
                  <del><p>Photo gallery</p></del>
                  </div>
                  <button class="price_btn">Buy Now</button>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-left" data-aos-duration="1000">
                <div class="price_card">
                  <div class="price_title orange_price">Business Plan</div>
                  <div class="price"><span>$199</span> / mo</div>
                  <img src="images/pricing-business.png" alt="pricing-free">
                  <div class="price_text">
                    <p>10-15 Pages</p>
                  <p>Small business, Portfolio</p>
                  <p>Responsive Design with mobile optimization</p>
                <p>Embed photos, videos and music in your pages</p>
                  <del><p>Photo gallery</p></del>
                  </div>
                  <button class="price_btn">Buy Now</button>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-left" data-aos-duration="1000">
                <div class="price_card">
                  <div class="price_title pink_price">Ultimate Plan</div>
                  <div class="price"><span>$299</span> / mo</div>
                  <img src="images/pricing-ultimate.png" alt="pricing-free">
                  <div class="price_text">
                  <p>Unlimited Pages</p>
                  <p>Small business, Portfolio</p>
                  <p>Responsive Design with mobile optimization</p>
                  <p>Embed photos, videos and music in your pages</p>
                    <p>Photo gallery</p>
                  </div>
                  <button class="price_btn">Buy Now</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- PRICING END -->



      <!-- FAQ -->
      <div id="faq"></div>
      <section>
        <div class="faq">
          <div class="container">
            <div class="title" data-aos="fade-up" data-aos-duration="1000">F.A.Q</div>
            <div class="sub_title" data-aos="fade-up" data-aos-duration="1000">Frequently Asked Questions</div>
            <div class="row">
              <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                <div class="faq_box">
                  <div class="faq_title">
                    <p>How long will it take to get to the 1st page of Google?</p>
                    <div class="icon">
                      <i class="fa-solid fa-angle-down"></i>
                    </div>
                  </div>
                  <div class="faq_description">
                    <p>Normally it would take a minimum of 6 months for your website to appear on the 1st page of Google and it completely
                    depends on the difficulty of the keywords used in your website.</p>
                  </div>
                </div>
                <div class="faq_box">
                  <div class="faq_title">
                    <p>Do you only create WordPress websites?</p>
                    <div class="icon">
                      <i class="fa-solid fa-angle-down"></i>
                    </div>
                  </div>
                  <div class="faq_description">
                    <p>WordPress is on the trend. Websites can be developed using other platforms like Shopify, Laravel, and many more but,
                    WordPress is the one that is standing out of the crowd.</p>
                  </div>
                </div>
                <div class="faq_box">
                  <div class="faq_title">
                    <p>Can you help me improve my site without building a new website?</p>
                    <div class="icon">
                      <i class="fa-solid fa-angle-down"></i>
                    </div>
                  </div>
                  <div class="faq_description" >
                    <p>Through our maintenance service, we can help you in improving the design, features and overall performance of your
                    website without the need for a new one.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
                <div class="faq_box">
                  <div class="faq_title">
                    <p>What if I need help on my site down the road?</p>
                    <div class="icon">
                      <i class="fa-solid fa-angle-down"></i>
                    </div>
                  </div>
                  <div class="faq_description">
                    <p>You can approach us whenever you need our assistance. Our team can sort it out and bring your site back with its
                    functionality. At ColorWhistle, we first look for the causes behind it and then check with all the technical
                    configurations to provide the best solution for bringing back your website.</p>
                  </div>
                </div>
                <div class="faq_box">
                  <div class="faq_title">
                    <p>Can I update the website myself once it’s built?</p>
                    <div class="icon">
                      <i class="fa-solid fa-angle-down"></i>
                    </div>
                  </div>
                  <div class="faq_description">
                    <p>Yes, you can keep updating your website once it is built, and we would also recommend the same. If you don’t keep your
                    website updated with fresh content, there are possibilities to lose your online visibility in the search engines.</p>
                  </div>
                </div>
                <div class="faq_box">
                  <div class="faq_title">
                    <p>I want to have an email signup form on my website? How can I<br> do this?</p>
                    <div class="icon">
                      <i class="fa-solid fa-angle-down"></i>
                    </div>
                  </div>
                  <div class="faq_description">
                    <p>This is a great idea to bring in more leads to your business. You can embed a signup form on your website using any one
                    of the top email marketing platforms like MailChimp, SendinBlue, ActiveCampaign and more.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- FAQ END -->

      <div id="clients"></div>
      <!-- COMPANY LOGOS -->
      <section data-aos="fade-up" data-aos-duration="1000">
        <div class="company">
          <div class="container">
            <div class="title">CLIENTS</div>
            <div class="sub_title">Our Happy Clients</div>
            <div class="row">
              <div class="col-md-12">
                <div class="company_items">
                  <ul class="company_ul">
                    <li><img src="images/client-1.png" alt=""></li>
                    <li><img src="images/client-2.png" alt=""></li>
                    <li><img src="images/client-3.png" alt=""></li>
                    <li><img src="images/client-4.png" alt=""></li>
                    <li><img src="images/client-5.png" alt=""></li>
                    <li><img src="images/client-6.png" alt=""></li>
                    <li><img src="images/client-7.png" alt=""></li>
                    <li><img src="images/client-8.png" alt=""></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- COMPANY LOGOS END  -->

      
    
        
<!-- TESTIMONIAL -->
<div id="testimonial"></div>
<section>
  <div class="testimonial">
    <div class="container">
      <div class="title" data-aos="fade-up" data-aos-duration="1000">TESTIMONIALS</div>
      <div class="sub_title" data-aos="fade-up" data-aos-duration="1000">What They Are Saying About Us</div>
      <div class="row">
        <div class="col-md-12">
          <div class="testimonial_container" data-aos="fade-up" data-aos-duration="1000">
            <div class="testimonial_card">
              <div class="testimonial_icon">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <div class="testimonial_description">
                <p>Since having our new website built by Thrive, we have seen a 200% increase in the number of online contact forms being
                filled out and returned to us. Matt and his team worked closely with us to provide a site that met all of the criteria
                that we were looking for.
                </p>
              </div>
              <div class="testimonial_img">
                <img src="images/testimonials-1.jpg" alt="testimonial">
              </div>
              <p class="testimonial_name">Saul Goodman</p>
              <p class="testimonial_post">CEO & Founder</p>
            </div>
            <div class="testimonial_card">
              <div class="testimonial_icon">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <div class="testimonial_description">
                <p>With Thrive’s help, we were able to increase the functionality of our website dramatically while cutting our costs. Our
                website is much more easy to use, has tons of more features than before and is incredibly easy to maintain<br><br>
                </p>
              </div>
              <div class="testimonial_img">
                <img src="images/testimonials-2.jpg" alt="testimonial">
              </div>
              <p class="testimonial_name">Sara Wilsson</p>
              <p class="testimonial_post">Designer</p>
            </div>
            <div class="testimonial_card">
              <div class="testimonial_icon">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <div class="testimonial_description">
                <p>Compared to the other companies we have used in the past, Thrive has been far and above the best in every area. While
                building our new web site, the customer service has been prompt and straightforward and the actual services are well
                documented and logical.
                </p>
              </div>
              <div class="testimonial_img">
                <img src="images/testimonials-3.jpg" alt="testimonial">
              </div>
              <p class="testimonial_name">Jena Karlis</p>
              <p class="testimonial_post">Store Owner</p>
            </div>
            <div class="testimonial_card">
              <div class="testimonial_icon">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <div class="testimonial_description">
                <p>We have been very happy with our new website! It looks professional and very easy to navigate. Our experience with the
                customer service at Thrive has been great. They handle things very efficiently and are available for any questions we
                have.</p>
              </div>
              <div class="testimonial_img">
                <img src="images/testimonials-4.jpg" alt="testimonial">
              </div>
              <p class="testimonial_name">Matt Brandon</p>
              <p class="testimonial_post">Freelancer</p>
            </div>
            <div class="testimonial_card">
              <div class="testimonial_icon">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <div class="testimonial_description">
                <p>We re-did our website twice in a 12 month period. There was no comparison between the first company and Thrive.
                Professional, Creative, Attentive to Detail, Excellent Communication…If I had contracted.<br><br>
</p>
              </div>
              <div class="testimonial_img">
                <img src="images/testimonials-5.jpg" alt="testimonial">
              </div>
              <p class="testimonial_name">John Larson</p>
              <p class="testimonial_post">Enterpreneur</p>
            </div>

          </div>


        </div>
      </div>
    </div>
  </div>
</section>
<!-- TESTIMONIAL END -->


    <!-- TEAM -->
    <div id="team"></div>
    <section id="team" >
      <div class="team">
        <div class="container">
          <div class="title" data-aos="fade-up" data-aos-duration="1000">TEAM</div>
          <div class="sub_title" data-aos="fade-up" data-aos-duration="1000">Our Hard Working Team</div>
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-right" data-aos-duration="1000">
              <div class="team_card">
                <div class="team_img">
                  <div class="team_social">
                    <i class="fa-brands fa-facebook-f" onclick=location.href="https://www.facebook.com"></i>
                    <i class="fa-brands fa-instagram" onclick=location.href="https://www.instagram.com"></i>
                    <i class="fa-brands fa-twitter" onclick=location.href="https://www.twitter.com"></i>
                    <i class="fa-brands fa-linkedin-in" onclick=location.href="https://www.linkedin.com"></i>
                  </div>
                  <img src="images/team-1.jpg" alt="team-1">
                </div>
                <div class="team_text">
                  <p class="team_name">Walter White</p>
                  <p class="team_post">Front-end Developer</p>
                  <p class="team_description">Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima
                  enim corporis et voluptate.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-right" data-aos-duration="1000">
              <div class="team_card">
                <div class="team_img">
                  <div class="team_social">
                    <i class="fa-brands fa-facebook-f" onclick=location.href="https://www.facebook.com"></i>
                    <i class="fa-brands fa-instagram" onclick=location.href="https://www.instagram.com"></i>
                    <i class="fa-brands fa-twitter" onclick=location.href="https://www.twitter.com"></i>
                    <i class="fa-brands fa-linkedin-in" onclick=location.href="https://www.linkedin.com"></i>
                  </div>
                  <img src="images/team-2.jpg" alt="team-1">
                </div>
                <div class="team_text">
                  <p class="team_name">Sarah Jhonson</p>
                  <p class="team_post">Back-end Developer</p>
                  <p class="team_description">Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum
                  officia.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-left" data-aos-duration="1000">
              <div class="team_card">
                <div class="team_img">
                  <div class="team_social">
                    <i class="fa-brands fa-facebook-f" onclick=location.href="https://www.facebook.com"></i>
                    <i class="fa-brands fa-instagram" onclick=location.href="https://www.instagram.com"></i>
                    <i class="fa-brands fa-twitter" onclick=location.href="https://www.twitter.com"></i>
                    <i class="fa-brands fa-linkedin-in" onclick=location.href="https://www.linkedin.com"></i>
                  </div>
                  <img src="images/team-3.jpg" alt="team-1">
                </div>
                <div class="team_text">
                  <p class="team_name">William Anderson</p>
                  <p class="team_post">CEO</p>
                  <p class="team_description">Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro
                  aspernatur molestiae modi.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-left" data-aos-duration="1000">
              <div class="team_card">
                <div class="team_img">
                  <div class="team_social">
                    <i class="fa-brands fa-facebook-f" onclick=location.href="https://www.facebook.com"></i>
                    <i class="fa-brands fa-instagram" onclick=location.href="https://www.instagram.com"></i>
                    <i class="fa-brands fa-twitter" onclick=location.href="https://www.twitter.com"></i>
                    <i class="fa-brands fa-linkedin-in" onclick=location.href="https://www.linkedin.com"></i>
                  </div>
                  
                  <img src="images/team-4.jpg" alt="team-1">
                  
                </div>
                <div class="team_text">
                  <p class="team_name">Amanda Jepson</p>
                  <p class="team_post">HR</p>
                  <p class="team_description">Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas
                  reiciendis animi neque sapiente.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- TEAM END -->


    <!-- BLOG -->
    <div id="blog"></div>
    <section id="blog">
      <div class="blog">
        <div class="container">
          <div class="title" data-aos="fade-up" data-aos-duration="1000">BLOG</div>
          <div class="sub_title" data-aos="fade-up" data-aos-duration="1000">Recent Posts Form Our Blog</div>
          <div class="row">
            <div class="col-md-4 col-sm-6" data-aos="fade-right" data-aos-duration="1000">
              <div class="blog_card">
                <div class="blog_img">
                  <img src="images/blog-1.jpg" alt="blog-1">
                </div>
                <div class="blog_card_text">
                  <p class="date">Tue, September 15</p>
                  <h5>What Maked The Best Web Development Company In Chandigarh?</h5>
                </div>
                <a href="http://www.google.com" class="blog_btn">Read more <i
                    class="fa-solid fa-arrow-right-long"></i></a><br>
              </div>
            </div>
            <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
              <div class="blog_card">
                <div class="blog_img">
                  <img src="images/blog-2.jpg" alt="blog-1">
                </div>
                <div class="blog_card_text">
                  <p class="date">Fri, August 28</p>
                  <h5>Effective Tips To Secure Your E-Commerce Website</h5>
                </div>
                <a href="http://www.google.com" class="blog_btn">Read more <i
                    class="fa-solid fa-arrow-right-long"></i></a><br>
              </div>
            </div>
            <div class="col-md-4 col-sm-6" data-aos="fade-left" data-aos-duration="1000">
              <div class="blog_card">
                <div class="blog_img">
                  <img src="images/blog-3.jpg" alt="blog-1">
                </div>
                <div class="blog_card_text">
                  <p class="date">Mon, July 11</p>
                  <h5>How an Ecommerce Website can help your Business Grow?</h5>
                </div>
                <a href="http://www.google.com" class="blog_btn">Read more <i
                    class="fa-solid fa-arrow-right-long"></i></a><br>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- BLOG END -->

    
      


      <!-- CONTACT -->
      <div id="contact"></div>
      <section id="contact">
        <div class="contact">
          <div class="container">
            <div class="title" data-aos="fade-up" data-aos-duration="1000">CONTACT</div>
            <div class="sub_title" data-aos="fade-up" data-aos-duration="1000">Here You Can Find Us</div>
            <div class="row">
              <div class="col-lg-6 col-md-12" data-aos="fade-right" data-aos-duration="1000">
                <div class="row">
                  <div class="col-md-6" >
                    <a href="https://www.google.com/maps/place/Sarawani+walo+ka+ghar/@28.9522089,77.722677,17z/data=!4m5!3m4!1s0x390c65df3bdfa2b7:0x79023bdd2f8a936c!8m2!3d28.9522089!4d77.7248657">
                      <div class="contact_box">
                        <i class="fa-solid fa-location-dot"></i>
                        <p class="contact_title">Address</p>
                        <!-- <p class="span">A108 Adam Street, <br> New York, NY 535022</p> -->
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a href="mailto: shavez9119@gmail.com">
                      <div class="contact_box">
                        <i class="fa-solid fa-envelope"></i>
                        <p class="contact_title">Email Us</p>
                        <!-- <p class="span">info@example.com, <br> contact@example.com</p> -->
                      </div>
                    </a>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <a href="tel: +91 9119064662">
                      <div class="contact_box">
                        <i class="fa-solid fa-phone"></i>
                        <p class="contact_title">Call Us</p>
                        <!-- <p class="span" >+1 5589 55488 55, <br> +1 6678 254445 41</p> -->
                      </div>
                    </a>
                  </div>
      
                  <div class="col-md-6">
                    <div class="contact_box">
                      <i class="fa-solid fa-clock"></i>
                      <p class="contact_title">Open Days</p>
                      <p class="span">Monday - Friday </p>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="col-lg-6">
                <form>
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3491.18594162496!2d77.72267701744384!3d28.95220889999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390c65df3bdfa2b7%3A0x79023bdd2f8a936c!2sSarawani%20walo%20ka%20ghar!5e0!3m2!1sen!2sin!4v1653376491604!5m2!1sen!2sin"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- CONTACT END -->


    <!-- NEWS LETTER -->
    <section data-aos="fade-down" data-aos-duration="1000">
      <div class="news_letter">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="sub_title1">Our Newsletter</div>
              <p>Submit Your Email Because It is Free</p><br>
              <form class="form">
                <input type="email" name="email" id="email" class="email" placeholder="Enter Email">
                <input type="submit" name="submit" class="nav_btn" id="submit" value="Submit">
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- NEWS LETTER END -->
     


<!-- FOOTER  -->
      <div class="footer" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 ">
              <div class="footer_left">
                <div class="row">
                  <div class="contact_logo_width">
                    <div class="logo" onclick=location.href="index.html">
                      <img src="images/logo.png" class="logo_img" alt="logo">
                      <h3>AliWebsite</h3>
                    </div>
                  </div>
                </div>
                <p class="footer_desc">AliWebsite is a multi-international award winning company, specializing across various arenas of the IT and digital
                marketing industry. Based in India, with offices in Delhi NCR, Mumbai, Bangalore and Calicut, we cater to the
                requirements of our clients in 70+ countries, across all 6 continents.</p>
                <div class="footer_social">
                  <i class="fa-brands fa-facebook-f" onclick=location.href="https://www.facebook.com/shavez.ali.714655/"></i>
                  <i class="fa-brands fa-instagram" onclick=location.href="https://www.instagram.com/im_shavez_srkian/"></i>
                  <i class="fa-brands fa-twitter" onclick=location.href="https://twitter.com/m_shavez_srkian"></i>
                  <i class="fa-brands fa-linkedin-in" onclick=location.href="https://www.linkedin.com/in/shavez-ali-5520851b9/"></i>
                </div>
              </div>
            </div>
           <div class="col-lg-7 ">
            <div class="contact_right">
              <div class="row">
                <div class="col-md-4 col-sm-6">
                  <div class="contact_text">
                    <p class="contact_title">USEFUL LINKS</p>
                    <ul>
                      <li><a href="#home">> Home</a></li>
                      <li><a href="#about">> About us</a></li>
                      <li><a href="#services">> Services</a></li>
                      <li><a href="#">> Terms of services</a></li>
                      <li><a href="#">> Privacy policy</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="contact_text">
                    <p class="contact_title">OUR SERVICES</p>
                    <ul>
                      <li><a href="javascript:void(0)">> Web Design</a></li>
                      <li><a href="javascript:void(0)">> Web Development</a></li>
                      <li><a href="javascript:void(0)">> Product Management</a></li>
                      <li><a href="javascript:void(0)">> Marketing</a></li>
                      <li><a href="javascript:void(0)">> Graphic Design</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="contact_text">
                    <p class="contact_title">CONTACT US</p>
                    <p class="contact_para">A108 Adam Street<br>
                    New York, NY 535022<br>
                    United States</p>
                    <p class="contact_para"><span>Phone:</span> +1 5589 55488 55</p>
                    <p class="contact_para"><span>Email:</span> info@example.com</p>
                  </div>
                </div>
              </div>
            </div>
           </div>
          </div>
        </div>
      </div>
<!-- FOOTER END -->

<br>
    <!-- COPYRIGHT -->
        <div class="copyright">
          <div class="row">
            <div class="col-md-12">
              <div class="copyright_text">
                <p>© Copyright <a href="index.html">AliWebsite</a>. All Rights Reserved</p>
                <p>Designed by <a href="javascript:void(0)">Shavez Ali</a> </p>
              </div>
            </div>
          </div>
        </div>
    <!-- COPYRIGHT END -->

        <!-- TOTOP -->
        <div class="totop">
          <a href="#"><i class="fa-solid fa-arrow-up"></i></a>
        </div>
        <!-- TOTOP END -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>
      <script src="script.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
      <script>
        $('.company_ul').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            dots:true,
            arrows:true,
            infinite:true,
            autoplay: true,
            autoplaySpeed: 1500,
          });
      </script>
      <script>
        $('.testimonial_container').slick({
            // centerMode: true,
            centerPadding: '60px',
            slidesToShow: 3,
            dots:true,
            responsive: [
              {
                breakpoint: 768,
                settings: {
                  arrows: false,
                  centerMode: true,
                  centerPadding: '40px',
                  slidesToShow: 1
                }
              },
              {
                breakpoint: 480,
                settings: {
                  arrows: false,
                  centerMode: true,
                  centerPadding: '40px',
                  slidesToShow: 1
                }
              }
            ]
          });
      </script>
  </body>
</html>
