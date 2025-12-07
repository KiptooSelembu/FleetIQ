
<div>
  <!-- Start Hero Area  -->
  <section class="trucker__hero-area-home-2">
    <div class="trucker__hero-wrapper">
      <div class="swiper trucker__hero-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="trucker__hero-item" data-background="{{ asset('assets/images/home-2/hero.png') }}">
              <span class="trucker__hero-item-shep">
                <svg xmlns="http://www.w3.org/2000/svg" width="634" height="570" viewBox="0 0 634 570" fill="none">
                  <path d="M0.520988 6.19259C-0.252866 3.0419 2.13234 0 5.37668 0H441.396C443.548 0 445.459 1.37715 446.14 3.41886L632.806 563.419C633.885 566.656 631.476 570 628.063 570H142.921C140.618 570 138.614 568.428 138.065 566.193L0.520988 6.19259Z" fill="#2A9D8F" fill-opacity="0.5" />
                </svg>
              </span>
              <div class="trucker__container">
                <div class="trucker__hero-content-wrapper">
                  <div class="trucker__hero-text-content">
                    <p class="trucker__hero-sub-title trucker__white trucker__fs-24 trucker__fw-700 wow img-custom-anim-left">
                      Streamline Your Fleet Operations</p>
                    <h2 class="trucker__hero-title trucker__white trucker__fs-70 trucker__fw-700 wow img-custom-anim-right">
                      Fleet Consumption & <br> Financial Tracking <br> System</h2>
                  </div>
                  <div class="trucker__hero-btn">
                    <a href="#" class="trucker__btn-style-1">Get Started <i class="fa-light fa-arrow-up-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="trucker__hero-item" data-background="{{ asset('assets/images/home-2/hero.png') }}">
              <span class="trucker__hero-item-shep">
                <svg xmlns="http://www.w3.org/2000/svg" width="634" height="570" viewBox="0 0 634 570" fill="none">
                  <path d="M0.520988 6.19259C-0.252866 3.0419 2.13234 0 5.37668 0H441.396C443.548 0 445.459 1.37715 446.14 3.41886L632.806 563.419C633.885 566.656 631.476 570 628.063 570H142.921C140.618 570 138.614 568.428 138.065 566.193L0.520988 6.19259Z" fill="#2A9D8F" fill-opacity="0.5" />
                </svg>
              </span>
              <div class="trucker__container">
                <div class="trucker__hero-content-wrapper">
                  <div class="trucker__hero-text-content">
                    <p class="trucker__hero-sub-title trucker__white trucker__fs-24 trucker__fw-700 wow img-custom-anim-right">
                      Complete Fleet Management Solution</p>
                    <h2 class="trucker__hero-title trucker__white trucker__fs-70 trucker__fw-700 wow img-custom-anim-right">
                      Track, Analyze & <br> Optimize Your <br> Fleet Performance</h2>
                  </div>
                  <div class="trucker__hero-btn">
                    <a href="#" class="trucker__btn-style-1">Get Started <i class="fa-light fa-arrow-up-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="trucker__slider-arrow">
          <span class="trucker__slider-btn trucker__next-slider-btn">
            <i class="fa-light fa-angle-left"></i>
          </span>
          <span class="trucker__slider-btn trucker__prev-slider-btn">
            <i class="fa-light fa-angle-right"></i>
          </span>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Area -->

  <!-- Start Brand Area  -->
  <section class="trucker__brand-area-home-2">
    <div class="trucker__container">
      <div class="trucker__brand-wrapper">
        <h2 class="trucker__brand-title trucker__deep-sea-blue trucker__fs-40 trucker__fw-700 text-center">Trusted by businesses managing fleets of all sizes</h2>
        <div class="swiper trukcer__brand-items">
          <div class="swiper-wrapper">
            @for($i = 1; $i <= 10; $i++)
            <div class="swiper-slide">
              <div class="trucker__brand-item">
                <img src="{{ asset('assets/images/home-2/brand-logo-' . (($i - 1) % 5 + 1) . '.png') }}" alt="FleetIQ Partner">
              </div>
            </div>
            @endfor
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Brand Area -->

  <!-- Start About Area  -->
  <section class="trucker__about-area_home-2">
    <div class="trucker__container">
      <div class="trucker__about-wrapper">
        <div class="trucker__about-left-site wow img-custom-anim-left">
          <img src="{{ asset('assets/images/home-2/about.png') }}" alt="FleetIQ Dashboard">
        </div>
        <div class="trucker__about-right-site">
          <h3 class="trucker__about-title trucker__deep-sea-blue trucker__fs-46 trucker__fw-700 wow img-custom-anim-top">
            Streamline Your Fleet <br> Operations Today</h3>
          <p class="trucker__about-sub-title trucker__gray-2 trucker__fs-16 trucker__fw-400 wow img-custom-anim-right">
            FleetIQ is a comprehensive platform designed to help businesses <br> efficiently manage vehicle operations and financial tracking</p>
          <div class="trucker__about-items-wrapper">
            <div class="trucker__about-items-inner wow img-custom-anim-right">
              <div class="trucker__about-item-icon">
                <span>
                  <img src="{{ asset('assets/images/icon/home-2-about-icon-1.png') }}" alt="Fuel Tracking">
                </span>
              </div>
              <div class="trucker__about-item-text">
                <h4 class="trucker__about-item-title trucker__deep-sea-blue trucker__fs-24 trucker__fw-700">Real-Time Fuel Tracking</h4>
                <p class="trucker__about-item-short-info trucker__gray-2 trucker__fw-400 trucker__fs-16">Monitor fuel consumption, <br> calculate cost per kilometer, and <br> optimize fuel efficiency.</p>
              </div>
            </div>
            <div class="trucker__about-items-inner wow img-custom-anim-left">
              <div class="trucker__about-item-icon">
                <span>
                  <img src="{{ asset('assets/images/icon/home-2-about-icon-2.png') }}" alt="Income Tracking">
                </span>
              </div>
              <div class="trucker__about-item-text">
                <h4 class="trucker__about-item-title trucker__deep-sea-blue trucker__fs-24 trucker__fw-700">Income & Revenue Tracking</h4>
                <p class="trucker__about-item-short-info trucker__gray-2 trucker__fw-400 trucker__fs-16">Track daily, weekly, and monthly <br> income per vehicle with detailed <br> revenue performance analytics.</p>
              </div>
            </div>
            <div class="trucker__about-items-inner wow img-custom-anim-top">
              <div class="trucker__about-item-icon">
                <span>
                  <img src="{{ asset('assets/images/icon/home-2-about-icon-3.png') }}" alt="Tax Management">
                </span>
              </div>
              <div class="trucker__about-item-text">
                <h4 class="trucker__about-item-title trucker__deep-sea-blue trucker__fs-24 trucker__fw-700">Automated Tax Calculation</h4>
                <p class="trucker__about-item-short-info trucker__gray-2 trucker__fw-400 trucker__fs-16">Compute taxes automatically with <br> configurable rules and maintain <br> complete expense logs.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About Area -->

  <!-- Start Banner Area -->
  <section class="trucker__banner-area-home-2 jarallax" data-background="{{ asset('assets/images/home-2/banner.png') }}">
    <div class="trucker__container">
      <div class="trucker__banner-wrapper">
        <div class="trucker__banner-text-content">
          <h2 class="trucker__banner-title trucker__white trucker__fs-45 trucker__fw-700 wow img-custom-anim-left">
            Complete Fleet Visibility <br> At Your Fingertips</h2>
          <p class="trucker__banner-sub-title trucker__white trucker__fs-18 trucker__fw-400 wow img-custom-anim-right">
            Track fuel usage, monitor income per vehicle, compute taxes <br> and maintain complete oversight of your entire fleet
          </p>
          <div class="trucker__banner-btn wow img-custom-anim-top">
            <a href="#" class="trucker__btn-style-1">Explore Features <i class="fa-light fa-arrow-up-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Banner Area -->

  <!-- Start Feature Area -->
  <section class="trucker__feature-area-home-2">
    <div class="trucker__container">
      <div class="trucker__feature-wrapper">
        <div class="trucker__title-wrapper">
          <p class="trucker__align-center trucker__sub-titel wow img-custom-anim-left">What we Offer</p>
          <h2 class="trucker__main-title trucker__align-center wow img-custom-anim-right">Our Features Make Fleet Management <br> Simple and Efficient</h2>
        </div>
        <div class="trucker__feature-inner">
          <div class="trucker__feature-items wow fadeInLeft">
            <div class="trucker__feature-icons-btn-wrapper">
              <span class="trucker__feature-icon">
                <img src="{{ asset('assets/images/icon/home-2-feature-icon-1.png') }}" alt="Fleet Management">
              </span>
              <a href="#" class="trucker__feature-btn trucker__white trucker__fs-18 trucker__fw-500">Learn More</a>
            </div>
            <h4 class="trucker__feature-item-title">
              <a href="#" class="trucker__fs-24 trucker__fw-700 trucker__deep-sea-blue">Fleet Management</a>
            </h4>
            <span class="trucker__feature-item-shep-line">
              <img src="{{ asset('assets/images/shep/home-2-feature-item-line-shep.png') }}" alt="divider">
            </span>
            <p class="trucker__feature-item-discriptiions trucker__gray trucker__fs-16 trucker__fw-400">
              Add, edit, and manage all your vehicles <br> in one centralized platform. Track vehicle <br> details, status, and performance metrics.
            </p>
          </div>
          <div class="trucker__feature-items wow fadeInRight">
            <div class="trucker__feature-icons-btn-wrapper">
              <span class="trucker__feature-icon">
                <img src="{{ asset('assets/images/icon/home-2-feature-icon-2.png') }}" alt="Fuel Tracking">
              </span>
              <a href="#" class="trucker__feature-btn trucker__white trucker__fs-18 trucker__fw-500">Learn More</a>
            </div>
            <h4 class="trucker__feature-item-title">
              <a href="#" class="trucker__fs-24 trucker__fw-700 trucker__deep-sea-blue">Fuel Consumption Tracking</a>
            </h4>
            <span class="trucker__feature-item-shep-line">
              <img src="{{ asset('assets/images/shep/home-2-feature-item-line-shep.png') }}" alt="divider">
            </span>
            <p class="trucker__feature-item-discriptiions trucker__gray trucker__fs-16 trucker__fw-400">
              Record fuel purchases, monitor consumption <br> trends, and calculate cost per kilometer <br> to optimize fuel efficiency.
            </p>
          </div>
          <div class="trucker__feature-items wow fadeInUp">
            <div class="trucker__feature-icons-btn-wrapper">
              <span class="trucker__feature-icon">
                <img src="{{ asset('assets/images/icon/home-2-feature-icon-3.png') }}" alt="Income Tracking">
              </span>
              <a href="#" class="trucker__feature-btn trucker__white trucker__fs-18 trucker__fw-500">Learn More</a>
            </div>
            <h4 class="trucker__feature-item-title">
              <a href="#" class="trucker__fs-24 trucker__fw-700 trucker__deep-sea-blue">Income & Revenue Logging</a>
            </h4>
            <span class="trucker__feature-item-shep-line">
              <img src="{{ asset('assets/images/shep/home-2-feature-item-line-shep.png') }}" alt="divider">
            </span>
            <p class="trucker__feature-item-discriptiions trucker__gray trucker__fs-16 trucker__fw-400">
              Capture daily, weekly, and monthly income <br> per vehicle. Track revenue performance <br> and analyze profitability trends.
            </p>
          </div>
          <div class="trucker__feature-items wow fadeInRight">
            <div class="trucker__feature-icons-btn-wrapper">
              <span class="trucker__feature-icon">
                <img src="{{ asset('assets/images/icon/home-2-feature-icon-4.png') }}" alt="Tax Management">
              </span>
              <a href="#" class="trucker__feature-btn trucker__white trucker__fs-18 trucker__fw-500">Learn More</a>
            </div>
            <h4 class="trucker__feature-item-title">
              <a href="#" class="trucker__fs-24 trucker__fw-700 trucker__deep-sea-blue">Tax & Expense Management</a>
            </h4>
            <span class="trucker__feature-item-shep-line">
              <img src="{{ asset('assets/images/shep/home-2-feature-item-line-shep.png') }}" alt="divider">
            </span>
            <p class="trucker__feature-item-discriptiions trucker__gray trucker__fs-16 trucker__fw-400">
              Compute taxes automatically with <br> configurable rules. Maintain detailed <br> expense logs for better profit analysis.
            </p>
          </div>
          <div class="trucker__feature-items wow fadeInUp">
            <div class="trucker__feature-icons-btn-wrapper">
              <span class="trucker__feature-icon">
                <img src="{{ asset('assets/images/icon/home-2-feature-icon-5.png') }}" alt="Reports">
              </span>
              <a href="#" class="trucker__feature-btn trucker__white trucker__fs-18 trucker__fw-500">Learn More</a>
            </div>
            <h4 class="trucker__feature-item-title">
              <a href="#" class="trucker__fs-24 trucker__fw-700 trucker__deep-sea-blue">Reports & Analytics</a>
            </h4>
            <span class="trucker__feature-item-shep-line">
              <img src="{{ asset('assets/images/shep/home-2-feature-item-line-shep.png') }}" alt="divider">
            </span>
            <p class="trucker__feature-item-discriptiions trucker__gray trucker__fs-16 trucker__fw-400">
              Generate comprehensive reports on fuel <br> usage, income trends, tax obligations, <br> and vehicle performance with charts.
            </p>
          </div>
          <div class="trucker__feature-items wow fadeInLeft">
            <div class="trucker__feature-icons-btn-wrapper">
              <span class="trucker__feature-icon">
                <img src="{{ asset('assets/images/icon/home-2-feature-icon-6.png') }}" alt="Access Control">
              </span>
              <a href="#" class="trucker__feature-btn trucker__white trucker__fs-18 trucker__fw-500">Learn More</a>
            </div>
            <h4 class="trucker__feature-item-title">
              <a href="#" class="trucker__fs-24 trucker__fw-700 trucker__deep-sea-blue">Secure Access Control</a>
            </h4>
            <span class="trucker__feature-item-shep-line">
              <img src="{{ asset('assets/images/shep/home-2-feature-item-line-shep.png') }}" alt="divider">
            </span>
            <p class="trucker__feature-item-discriptiions trucker__gray trucker__fs-16 trucker__fw-400">
              Role-based permissions and secure user <br> authentication. Separate admin and <br> standard user functionalities.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Feature Area -->

  <!-- Start Skill Area  -->
  <section class="trucker__skill-area-home-2">
    <div class="trucker__skill-bar-top">
      <div class="trucker__skill-bar-top-img wow img-custom-anim-right">
        <img src="{{ asset('assets/images/home-2/skill-bar-1.png') }}" alt="FleetIQ Statistics">
      </div>
      <div class="trucker__container">
        <div class="trucker__skill-bar-top-bar-wrapper">
          <h3 class="trucker__skill-bar-title trucker__deep-sea-blue trucker__fs-45 trucker__fw-700 wow img-custom-anim-left">
            Take Complete Control <br> of Your Fleet Operations <br> With FleetIQ</h3>
          <p class="trucker__skill-bar-sub-title trucker__fs-18 trucker__fw-400 trucker__gray wow img-custom-anim-top">
            Built with Laravel and Livewire, FleetIQ provides a secure, scalable, and <br> developer-friendly environment. Track every aspect of your fleet from fuel <br> consumption to financial performance in one centralized platform.</p>
        </div>
      </div>
    </div>
    <div class="trucker__skill-bar-bottom">
      <div class="trucker__skill-bar-bottom-bar-wrapper">
        <div class="trucker__progress-item wow img-custom-anim-top">
          <div class="trucker__circular-progress" data-value="80">
            <div class="trucker__progress-inner-text">
              <span class="trucker__progress-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20" fill="none">
                  <path d="M11 20C11.3397 19.9996 11.6713 19.8985 11.9519 19.7099C16.1079 16.9312 17.9074 15.026 18.9 13.8349C21.0153 11.2958 22.028 8.68906 21.9994 5.86615C21.9661 2.63125 19.331 0 16.1253 0C13.7943 0 12.1798 1.29323 11.2396 2.37031C11.2098 2.40409 11.173 2.43117 11.1316 2.44973C11.0903 2.46829 11.0454 2.4779 11 2.4779C10.9546 2.4779 10.9097 2.46829 10.8684 2.44973C10.827 2.43117 10.7902 2.40409 10.7604 2.37031C9.82021 1.29219 8.20572 0 5.87469 0C2.669 0 0.0339012 2.63125 0.000585556 5.86667C-0.0279713 8.6901 0.985773 11.2969 3.09999 13.8354C4.09258 15.0266 5.89215 16.9318 10.0481 19.7104C10.3287 19.8988 10.6604 19.9997 11 20Z" fill="#2A9D8F" />
                </svg>
              </span>
              <span class="trucker__progress-value">{{ $stats['active_users'] ?? '7230' }}</span>
            </div>
          </div>
          <div class="trucker__progress-text-wrapper">
            <h3 class="trucker__progress-name trucker__fs-30 trucker__fw-500 trucker__deep-sea-blue">Active Users</h3>
            <p class="trucker__progress-short-info trucker__gray-3 trucker__fs-20 trucker__fw-400">Growing fleet community</p>
          </div>
        </div>
        <div class="trucker__progress-item wow img-custom-anim-left">
          <div class="trucker__circular-progress" data-value="90">
            <div class="trucker__progress-inner-text">
              <span class="trucker__progress-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="24" viewBox="0 0 26 24" fill="none">
                  <path d="M13 0L15.9187 8.98278H25.3637L17.7225 14.5344L20.6412 23.5172L13 17.9656L5.35879 23.5172L8.27747 14.5344L0.636266 8.98278H10.0813L13 0Z" fill="#2A9D8F" />
                </svg>
              </span>
              <span class="trucker__progress-value">{{ $stats['fleet_vehicles'] ?? '12K+' }}</span>
            </div>
          </div>
          <div class="trucker__progress-text-wrapper">
            <h3 class="trucker__progress-name trucker__fs-30 trucker__fw-500 trucker__deep-sea-blue">Fleet Vehicles</h3>
            <p class="trucker__progress-short-info trucker__gray-3 trucker__fs-20 trucker__fw-400">Managed on platform</p>
          </div>
        </div>
      </div>
      <div class="trucker__skill-bar-bottom-img wow img-custom-anim-right">
        <img src="{{ asset('assets/images/home-2/skill-bar-2.png') }}" alt="FleetIQ Dashboard">
      </div>
    </div>
  </section>
  <!-- End Skill Bar Area -->

  <!-- Start Counter Area -->
  <section class="trucker__counter-area-home-2 jarallax" data-background="{{ asset('assets/images/home-2/counter-bg.png') }}">
    <div class="trucker__container">
      <div class="trucker__counter-wrapper">
        <div class="trucker__counter-item">
          <h3 class="odometer trucker__counter-value trucker__fs-45 trucker__fw-700 trucker__white" data-count="38770">0</h3>
          <p class="trucker__counter-label trucker__fs-18 trucker__fw-500 trucker__white">Tracked Trips</p>
        </div>
        <div class="trucker__counter-item">
          <h3 class="odometer trucker__counter-value trucker__fs-45 trucker__fw-700 trucker__white" data-count="68800">0</h3>
          <p class="trucker__counter-label trucker__fs-18 trucker__fw-500 trucker__white">Happy Clients</p>
        </div>
        <div class="trucker__counter-item">
          <h3 class="odometer trucker__counter-value trucker__fs-45 trucker__fw-700 trucker__white" data-count="72030">0</h3>
          <p class="trucker__counter-label trucker__fs-18 trucker__fw-500 trucker__white">Fuel Entries Logged</p>
        </div>
        <div class="trucker__counter-item">
          <h3 class="odometer trucker__counter-value trucker__fs-45 trucker__fw-700 trucker__white" data-count="50870">0</h3>
          <p class="trucker__counter-label trucker__fs-18 trucker__fw-500 trucker__white">Cost Saved (USD)</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Counter Area -->

  <!-- Start Pricing Area -->
  <section class="trucker__pricing-area-home-2">
    <div class="trucker__container">
      <div class="trucker__pricing-wrapper">
        <div class="trucker__title-wrapper">
          <p class="trucker__align-center trucker__sub-titel wow img-custom-anim-left">Pricing Plans</p>
          <h2 class="trucker__main-title trucker__align-center wow img-custom-anim-right">Choose Your Plan</h2>
        </div>
        <div class="trucker__pricing-inner">
          @foreach($pricing_plans ?? [] as $plan)
          <div class="trucker__pricing-item wow img-custom-anim-top">
            <div class="trucker__pricing-img">
              <img src="{{ asset('assets/images/home-2/price-' . $loop->iteration . '.png') }}" alt="FleetIQ {{ $plan['name'] }} Plan">
            </div>
            <div class="trucker__pricing-options">
              <ul>
                @foreach($plan['features'] as $feature)
                <li>
                  <span class="trucker__pricing-option-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M2.03455 6.00033L4.44205 8.78412L11.4766 0.432977C12.0033 -0.13128 12.8309 0.470561 12.4171 1.11008L5.49542 11.6806C4.96875 12.3577 4.25406 12.4329 3.65213 11.7558L0.153703 7.58026C-0.523397 6.60215 1.20696 5.21047 2.03455 6.00033V6.00033Z" fill="black" />
                    </svg>
                  </span>
                  <span class="trucker__pricing-option-text">{{ $feature }}</span>
                </li>
                @endforeach
              </ul>
            </div>
            <div class="trucker__prcing-btn-wrapper">
              <div class="trucker__price-day">
                <span class="trucker__price trucker__fs-24 trucker__fw-700 trucker__white">${{ $plan['price'] }}</span>
                <span class="trucker__days trucker__fs-24 trucker__fw-400 trucker__white">/ Month</span>
              </div>
              <a href="{{ route('pricing.subscribe', $plan['id']) }}" class="trucker__pricing-btn trucker__fs-19 trucker__fw-500">Get Started</a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- End Pricing Area -->

  <!-- Start Testimonial Area -->
  <section class="trucker__testimonial-area-home-2">
    <div class="trucker__container">
      <div class="trucker__warpper-testimonial">
        <div class="trucker__title-wrapper">
          <p class="trucker__align-center trucker__sub-titel wow img-custom-anim-left">Our Testimonials</p>
          <h2 class="trucker__main-title trucker__align-center wow img-custom-anim-right">What Our Clients Say</h2>
        </div>
        <div class="trucker__testimonial-inner">
          <div class="swiper trucker__testimonial-home-2">
            <div class="swiper-wrapper">
              @foreach($testimonials ?? [] as $testimonial)
              <div class="swiper-slide">
                <div class="trucker__testimonial-item">
                  <div class="trucker__testimonial-items-wrapper">
                    <div class="trucker__testimonial-img-inner">
                      <img src="{{ asset($testimonial['image']) }}" alt="{{ $testimonial['name'] }}">
                      <div class="trucker__testimonial-img-text">
                        <h5 class="trucker__testimonial-client-name trucker__fs-20 trucker__fw-500 trucker__deep-sea-blue">
                          {{ $testimonial['name'] }}</h5>
                        <span class="trucker__testimonial-regi trucker__fs-16 trucker__fw-400 trucker__green">{{ $testimonial['position'] }}</span>
                      </div>
                    </div>
                    <span class="trucker__testimonial-quets">
                      <svg xmlns="http://www.w3.org/2000/svg" width="56" height="41" viewBox="0 0 56 41" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8311 21.1016C17.9536 21.1016 18.0759 21.1354 18.1817 21.2039C18.3821 21.3311 18.4933 21.5575 18.4689 21.7902C18.1183 25.181 17.2177 28.3412 15.7918 31.1837C14.5318 33.6944 12.8821 35.8983 10.864 37.7716C20.7152 32.6251 24.7246 21.6445 23.3721 12.7732C22.5228 7.20455 19.1356 1.25311 12.1763 1.25311C6.17002 1.25308 1.28225 6.02976 1.28225 11.9008C1.28236 17.7707 6.16997 22.5474 12.1763 22.5474C14.0486 22.5473 15.8941 22.0753 17.5159 21.1821C17.6139 21.1277 17.723 21.1017 17.8311 21.1016L17.8311 21.1016ZM6.69995 40.7565C6.45388 40.7565 6.22235 40.6173 6.11549 40.39C5.98301 40.1038 6.08656 39.7655 6.35926 39.598C13.747 35.0813 16.2827 28.1824 17.053 22.8063C15.5225 23.4589 13.8584 23.8006 12.1765 23.8006C5.46212 23.8005 0 18.4615 0 11.9008C0.00010793 5.33901 5.4621 2.89626e-09 12.1765 2.89626e-09C15.527 -7.02862e-05 18.4723 1.27924 20.694 3.6986C22.7266 5.91116 24.0913 8.98545 24.64 12.5894C26.2563 23.1859 20.5827 36.6501 6.88693 40.7294C6.82457 40.7478 6.7611 40.7566 6.69997 40.7565L6.69995 40.7565Z" fill="#2A9D8F" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M48.9217 21.1017C49.0442 21.1017 49.1666 21.1354 49.2735 21.2039C49.4739 21.3311 49.584 21.5575 49.5607 21.7902C49.21 25.181 48.3084 28.3412 46.8825 31.1837C45.6226 33.6944 43.9739 35.8984 41.9558 37.7716C51.8048 32.6251 55.8152 21.6445 54.4628 12.7732C53.6136 7.20455 50.2274 1.25311 43.2682 1.25311C37.2607 1.25308 32.3741 6.02976 32.3741 11.9008C32.3742 17.7707 37.2607 22.5474 43.2682 22.5474C45.1394 22.5473 46.986 22.0753 48.6079 21.1821C48.7059 21.1277 48.8137 21.1017 48.9217 21.1017L48.9217 21.1017ZM37.7906 40.7565C37.5446 40.7565 37.313 40.6173 37.2073 40.39C37.0738 40.1039 37.1783 39.7656 37.4499 39.5981C44.8389 35.0814 47.3734 28.1824 48.1436 22.8063C46.6132 23.4589 44.9501 23.8006 43.2682 23.8006C36.5539 23.8005 31.0918 18.4615 31.0918 11.9008C31.0919 5.33901 36.5539 2.89626e-09 43.2682 2.89626e-09C46.6176 -7.02862e-05 49.5629 1.27924 51.7847 3.6986C53.8173 5.91116 55.1819 8.98545 55.7318 12.5883C57.347 23.1859 51.6734 36.6501 37.9776 40.7294C37.9153 40.7478 37.8529 40.7566 37.7906 40.7565V40.7565Z" fill="#2A9D8F" />
                      </svg>
                    </span>
                  </div>
                  <p class="trucker__testimonial-peragraph trucker__fs-18 trucker__fw-400 trucker__gray">{{ $testimonial['message'] }}</p>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="trucker__slider-arrow-testimonial-home-2">
            <span class="trucker__slider-testimonial-btn trucker__next-slider-testimonial-btn">
              <i class="fa-light fa-arrow-left"></i>
            </span>
            <span class="trucker__slider-testimonial-btn trucker__prev-slider-testimonial-btn">
              <i class="fa-light fa-arrow-right"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Testimonial Area -->

  <!-- Start Blog Area -->
  <section class="trucker__blog-area-home-2">
    <div class="trucker__container">
      <div class="trucker__blog-wrapper">
        <div class="trucker__title-wrapper">
          <p class="trucker__align-center trucker__sub-titel wow img-custom-anim-left">Latest Updates</p>
          <h2 class="trucker__main-title trucker__align-center wow img-custom-anim-right">Latest News & Articles <br> from FleetIQ Blog</h2>
        </div>
        <div class="trucker__blog-inner">
          <div class="trucker__blog-left-site">
            <img src="{{ asset('assets/images/home-2/blog-1.png') }}" alt="FleetIQ Featured Blog" class="wow img-custom-anim-top">
            <div class="trucker__blog-details-left-inner">
              <div class="trucker__blog-details wow fadeInUp">
                <div class="trucker__blog-date-tag wow img-custom-anim-top">
                  <div class="trucker__blog-tag">
                    <span><i class="fa-solid fa-tags trucker__green"></i></span>
                    <span class="trucker__fs-18 trucker__fw-500 trucker__gray-4">Fleet Management</span>
                  </div>
                  <div class="trucker__blog-date">
                    <span><i class="fa-sharp fa-regular fa-calendar-days trucker__green"></i></span>
                    <span class="trucker__fs-16 trucker__fw-500 trucker__gray-4">08 Dec 2024</span>
                  </div>
                </div>
                <h4 class="tucker__blog-title wow img-custom-anim-left">
                  <a href="#">Top 10 Tips for Reducing Fleet <br> Fuel Consumption Costs</a>
                </h4>
                <div class="trucker__blog-btn wow img-custom-anim-left">
                  <a href="#">
                    <span class="trucker__read-more trucker__fs-16 trucker__fw-400 trucker__green">Read More</span>
                    <span class="trucker__read-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="28" height="17" viewBox="0 0 28 17" fill="none">
                        <path d="M27.1848 8.51019C27.1848 12.4773 23.8872 15.7137 19.7941 15.7137C15.7009 15.7137 12.4033 12.4773 12.4033 8.51019C12.4033 4.54303 15.7009 1.30664 19.7941 1.30664C23.8872 1.30664 27.1848 4.54303 27.1848 8.51019Z" stroke="#E8F2F9" />
                        <path d="M21.0259 8.57914C21.2211 8.38388 21.2211 8.06729 21.0259 7.87203L17.8439 4.69005C17.6486 4.49479 17.3321 4.49479 17.1368 4.69005C16.9415 4.88531 16.9415 5.2019 17.1368 5.39716L19.9652 8.22558L17.1368 11.054C16.9415 11.2493 16.9415 11.5659 17.1368 11.7611C17.3321 11.9564 17.6486 11.9564 17.8439 11.7611L21.0259 8.57914ZM0.214844 8.72559L20.6723 8.72558L20.6723 7.72558L0.214844 7.72559L0.214844 8.72559Z" fill="#2A9D8F" />
                      </svg>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="trucker__blog-right-site">
            @foreach($recent_blogs ?? [] as $blog)
            <div class="trucker__blog-right-item">
              <img src="{{ asset($blog['image']) }}" alt="{{ $blog['title'] }}" class="wow img-custom-anim-left">
              <div class="trucker__blog-details wow fadeInRight">
                <div class="trucker__blog-date-tag wow img-custom-anim-left">
                  <div class="trucker__blog-tag">
                    <span><i class="fa-solid fa-tags trucker__green"></i></span>
                    <span class="trucker__fs-18 trucker__fw-500 trucker__gray-4">{{ $blog['category'] }}</span>
                  </div>
                  <div class="trucker__blog-date">
                    <span><i class="fa-sharp fa-regular fa-calendar-days trucker__green"></i></span>
                    <span class="trucker__fs-16 trucker__fw-500 trucker__gray-4">{{ $blog['date'] }}</span>
                  </div>
                </div>
                <h4 class="tucker__blog-title wow img-custom-anim-right">
                  <a href="{{ route('blog.show', $blog['id']) }}">{{ $blog['title'] }}</a>
                </h4>
                <div class="trucker__blog-btn wow img-custom-anim-right">
                  <a href="{{ route('blog.show', $blog['id']) }}">
                    <span class="trucker__read-more trucker__fs-16 trucker__fw-400 trucker__green">Read More</span>
                    <span class="trucker__read-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="28" height="17" viewBox="0 0 28 17" fill="none">
                        <path d="M27.1848 8.51019C27.1848 12.4773 23.8872 15.7137 19.7941 15.7137C15.7009 15.7137 12.4033 12.4773 12.4033 8.51019C12.4033 4.54303 15.7009 1.30664 19.7941 1.30664C23.8872 1.30664 27.1848 4.54303 27.1848 8.51019Z" stroke="#E8F2F9" />
                        <path d="M21.0259 8.57914C21.2211 8.38388 21.2211 8.06729 21.0259 7.87203L17.8439 4.69005C17.6486 4.49479 17.3321 4.49479 17.1368 4.69005C16.9415 4.88531 16.9415 5.2019 17.1368 5.39716L19.9652 8.22558L17.1368 11.054C16.9415 11.2493 16.9415 11.5659 17.1368 11.7611C17.3321 11.9564 17.6486 11.9564 17.8439 11.7611L21.0259 8.57914ZM0.214844 8.72559L20.6723 8.72558L20.6723 7.72558L0.214844 7.72559L0.214844 8.72559Z" fill="#2A9D8F" />
                      </svg>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Blog Area -->

  <!-- Start Map Area -->
  <section class="trucker__map-area">
    <div class="trucker__container">
      <div class="trucker__map-wrapper">
        <h2 class="trucker__map-text" data-background="{{ asset('assets/images/home-2/map-bg.png') }}">FLEETIQ</h2>
        <img src="{{ asset('assets/images/home-2/map.png') }}" alt="FleetIQ Global Reach">
      </div>
    </div>
  </section>
  <!-- End Map Area -->

  <!-- Start Mobile Menu -->
  <div class="trucker__mobile-menu">
    <div class="trucker__menu-header">
      <div class="trucker__logo">
        <a href="{{ route('welcome') }}">
          <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="FleetIQ Logo">
        </a>
      </div>
      <button class="trucker__close-btn"><i class="fa-sharp fa-light fa-xmark"></i></button>
    </div>

    <div class="trucker__mobile-menu-search">
      <form action="#" method="GET">
        <input type="text" name="q" placeholder="Search Here">
        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
      </form>
    </div>

    <div class="trucker__mobile-menu-btn">
      <a href="#" class="trucker__btn-style-1">Get Started <i class="fa-light fa-arrow-up-right"></i></a>
    </div>

    <nav>
      <ul class="trucker__nav-list">
        <li class="trucker__nav-item">
          <a href="{{ route('welcome') }}" class="trucker__nav-link">Home</a>
        </li>
        <li class="trucker__nav-item">
          <a href="{{ route('welcome') }}" class="trucker__nav-link">About</a>
        </li>
        <li class="trucker__nav-item">
          <a href="#" class="trucker__nav-link" onclick="return false;">
            Features
            <span class="trucker__toggle-btn"></span>
          </a>
          <ul class="trucker__submenu">
            <li class="trucker__submenu-item"><a href="#" class="trucker__submenu-link">Fleet Management</a></li>
            <li class="trucker__submenu-item"><a href="#" class="trucker__submenu-link">Fuel Tracking</a></li>
            <li class="trucker__submenu-item"><a href="#" class="trucker__submenu-link">Income Logging</a></li>
            <li class="trucker__submenu-item"><a href="#" class="trucker__submenu-link">Tax Management</a></li>
            <li class="trucker__submenu-item"><a href="#" class="trucker__submenu-link">Reports</a></li>
          </ul>
        </li>
        <li class="trucker__nav-item">
          <a href="#" class="trucker__nav-link">Pricing</a>
        </li>
        <li class="trucker__nav-item">
          <a href="#" class="trucker__nav-link" onclick="return false;">
            Blog
            <span class="trucker__toggle-btn"></span>
          </a>
          <ul class="trucker__submenu">
            <li class="trucker__submenu-item"><a href="#" class="trucker__submenu-link">All Articles</a></li>
            <li class="trucker__submenu-item"><a href="#" class="trucker__submenu-link">Fleet Management</a></li>
            <li class="trucker__submenu-item"><a href="#" class="trucker__submenu-link">Fuel Efficiency</a></li>
          </ul>
        </li>
        <li class="trucker__nav-item">
          <a href="#" class="trucker__nav-link">Contact Us</a>
        </li>
        @auth
        <li class="trucker__nav-item">
          <a href="#" class="trucker__nav-link">Dashboard</a>
        </li>
        @else
        <li class="trucker__nav-item">
          <a href="#" class="trucker__nav-link">Login</a>
        </li>
        @endauth
      </ul>
    </nav>
    <div class="mobile-menu-contact-info">
      <a href="mailto:support@fleetiq.com" class="trucker__header-topbar-info trucker__fs-15 trucker__fw-400 trucker__white">
        <i class="fa-sharp fa-light fa-envelope"></i> support@fleetiq.com
      </a>
      <a href="tel:+254700000000" class="trucker__header-topbar-info trucker__fs-15 trucker__fw-400 trucker__white">
        <i class="fa-light fa-phone"></i> +254 700 000 000
      </a>
    </div>
    <div class="mobile-menu-social-media">
      <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="#"><i class="fa-brands fa-youtube"></i></a>
      <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
      <a href="#"><i class="fa-brands fa-twitter"></i></a>
    </div>
    <div class="trucker__mobile-menu-copyright">
      <p class="trucker__mobile-menu-copyright-text">© {{ date('Y') }} <a href="{{ route('welcome') }}">FleetIQ</a>. All Rights Reserved.</p>
    </div>
  </div>
  <!-- End Mobile Menu -->

  <!-- Start Overlay Add -->
  <div class="trucker__overlay"></div>
  <!-- End Overlay Add -->

  <!-- Start Search Popup -->
  <div class="search-popup">
    <button class="close-search" aria-label="Close search">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
    <div class="search-container">
      <form class="search-form" action="#" method="GET">
        <input type="text" name="q" class="search-input" placeholder="Search FleetIQ..." autocomplete="off">
        <button type="submit" class="search-submit">Search</button>
      </form>
    </div>
  </div>
  <!-- End Search Popup -->
</div>
{{-- @endsection --}}

@push('scripts')
<script>
  // Initialize Swiper sliders
  document.addEventListener('DOMContentLoaded', function() {
    // Hero Slider
    new Swiper('.trucker__hero-slider', {
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.trucker__next-slider-btn',
        prevEl: '.trucker__prev-slider-btn',
      },
    });

    // Brand Slider
    new Swiper('.trukcer__brand-items', {
      loop: true,
      slidesPerView: 5,
      spaceBetween: 30,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      breakpoints: {
        320: { slidesPerView: 2 },
        768: { slidesPerView: 3 },
        1024: { slidesPerView: 5 },
      },
    });

    // Testimonial Slider
    new Swiper('.trucker__testimonial-home-2', {
      loop: true,
      slidesPerView: 2,
      spaceBetween: 30,
      navigation: {
        nextEl: '.trucker__next-slider-testimonial-btn',
        prevEl: '.trucker__prev-slider-testimonial-btn',
      },
      breakpoints: {
        320: { slidesPerView: 1 },
        768: { slidesPerView: 1 },
        1024: { slidesPerView: 2 },
      },
    });

    // Circular Progress Bars
    document.querySelectorAll('.trucker__circular-progress').forEach(function(el) {
      const value = el.getAttribute('data-value');
      // Implement circular progress animation here
    });

    // Counter Animation (Odometer)
    const counters = document.querySelectorAll('.odometer');
    counters.forEach(counter => {
      const target = parseInt(counter.getAttribute('data-count'));
      // Implement counter animation here
    });
  });
</script>
@endpush
