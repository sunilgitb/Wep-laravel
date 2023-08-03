@extends('frontend.layouts.app')
@include('frontend.layouts.header')

<body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Tech Simians</title>
</head>
    <main class="container">
      <!-- <section class="breadcrumb">
        <a href="{{url('/')}}" class="breadcrumb__link">Home</a>
        <a href="{{url('about-us')}}" class="breadcrumb__link">About</a>
      </section> -->
      <section class="whoweare about" style="margin-top: 80px;">
        <h2 class="heading">We are corporate web agency</h2>
        <p class="subheading">
        We are a corporate web agency with a dynamic team of creative, intelligent, and enthusiastic individuals. We foster an environment of continuous inspiration and growth, encouraging each other to strive for excellence and happiness in all that we do.
        </p>
        <div class="whoweare__item">
          <div class="whoweare__animation">
            <div class="whoweare__circle">
              <img src="{{asset('frontend/assets/img/circle.svg')}}" alt="" />
            </div>
            <div class="whoweare__line">
              <img src="{{asset('frontend/assets/img/line-with-right-curve.svg')}}" alt="" />
            </div>
            <div class="whoweare__icon">
              <lottie-player
                id="firstLottie"
                src="https://assets9.lottiefiles.com/packages/lf20_kzmlad7s.json"
              ></lottie-player>
            </div>
          </div>
          <div class="whoweare__content">
            <h3 class="whoweare__item-title">
              We understand the pressure of work
            </h3>
            <div class="whoweare__item-text">
            We comprehend the challenges of working under tight time constraints. Rest assured, we have you covered with our commitment to timely project delivery. Your projects are in safe hands with us.
            </div>
          </div>
        </div>
        <div class="whoweare__item whoweare__item-right">
          <div class="whoweare__animation">
            <div class="whoweare__circle">
              <img src="img/circle.svg" alt="" />
            </div>
            <div class="whoweare__line">
              <img src="{{asset('frontend/assets/img/line-with-left-curve.svg')}}" alt="" />
            </div>
            <div class="whoweare__icon">
              <lottie-player
                id="secondLottie"
                src="https://assets6.lottiefiles.com/packages/lf20_ndbw9wpl.json"
              ></lottie-player>
            </div>
          </div>
          <div class="whoweare__content">
            <h3 class="whoweare__item-title">
              Innovative ideas and designing,
            </h3>
            <div class="whoweare__item-text">
            We deliver innovative ideas and designs tailored to your specific requirements, enhanced with cutting-edge technologies, ensuring the highest quality of service.
            </div>
          </div>
        </div>
        <div class="whoweare__item">
          <div class="whoweare__animation">
            <div class="whoweare__circle">
              <img src="img/circle.svg" alt="" />
            </div>
            <div class="whoweare__line">
              <img src="{{asset('frontend/assets/img/line-with-right-curve.svg')}}" alt="" />
            </div>
            <div class="whoweare__icon">
              <lottie-player
                id="thirdLottie"
                src="https://assets1.lottiefiles.com/packages/lf20_0sl0y1f4.json"
              ></lottie-player>
            </div>
          </div>
          <div class="whoweare__content">
            <h3 class="whoweare__item-title">
              Our top notch content writing service
            </h3>
            <div class="whoweare__item-text">
            Our exceptional content writing service guarantees improved search engine optimization and delivers satisfying results.
            </div>
          </div>
        </div>
        <div class="whoweare__item whoweare__item-right whoweare__item-last">
          <div class="whoweare__animation">
            <div class="whoweare__circle">
              <img src="{{('frontend/assets/img/circle.svg')}}" alt="" />
            </div>

            <div class="whoweare__icon">
              <lottie-player
                id="fourthLottie"
                src="https://assets8.lottiefiles.com/packages/lf20_frcf3wjo.json"
              ></lottie-player>
            </div>
          </div>
          <div class="whoweare__content">
            <h3 class="whoweare__item-title">
              Offering best customer support
            </h3>
            <div class="whoweare__item-text">
            We provide top-notch customer support after product delivery to ensure the seamless operation of your projects. Whether it's development, hosting, or product publishing, we have all aspects covered.
            </div>
          </div>
        </div>
      </section>
      <style>
  .bordered-image {
    border: 1px solid #0047ff;
    height: 150px;
    width: 150px;
    border-radius: 50%;
  }
  .team__member-name{
    margin-right:10px!mportant;
  }
</style>

      <section class="team">
        <h2 class="heading">Meet The Team</h2>
        <div class="subheading">
        Our team is brimming with creative, intelligent, and enthusiastic individuals. We motivate and uplift each other every day, striving to be the best versions of ourselves and fostering a positive and happy environment.
        </div>
        <div class="team__row">
          <div class="team__member">
            <div class="team__member-img">
           <!-- In your CSS file or within <style> tags in your HTML -->

        <img src="{{asset('frontend/assets/img/sid.jpg')}}" alt="sid" class="bordered-image" />

            </div>
            <div class="team__member-name">Siddharth Jain</div>
            <div class="team__member-designation">Managing Partner</div>
          </div>
          <div class="team__member">
            <div class="team__member-img">
              <img src="{{asset('frontend/assets/img/varun.png')}}" alt="Leon" class="bordered-image" />
            </div>
            <div class="team__member-name">Varun  Sudulagunta</div>
            <div class="team__member-designation">Head-Business Delivery & Sustenance</div>
          </div>
          <div class="team__member">
            <div class="team__member-img">
              <img src="{{asset('frontend/assets/img/aaron.jpg')}}" alt="Maxime" class="bordered-image"/>
            </div>
            <div class="team__member-name">Aaron Sam</div>
            <div class="team__member-designation">Head - Mobile  Technologies</div>
          </div>
          <div class="team__member">
            <div class="team__member-img">
              <img src="{{asset('frontend/assets/img/donovan.png')}}" alt="Donovan"class="bordered-image" />
            </div>
            <div class="team__member-name">Akshat Kanchan</div>
            <div class="team__member-designation">Head - Emerging Technologies</div>
          </div>
            <!-- <div class="team__member">
              <div class="team__member-img">
                <img src="{{asset('frontend/assets/img/ruben.png')}}" alt="Ruben" />
              </div>
              <div class="team__member-name">Ruben</div>
              <div class="team__member-designation"></div>
            </div>
            <div class="team__member">
              <div class="team__member-img">
                <img src="{{asset('frontend/assets/img/nils.png')}}" alt="Nils" />
              </div>
              <div class="team__member-name">Nils</div>
              <div class="team__member-designation"></div>
            </div>
            <div class="team__member">
              <div class="team__member-img">
                <img src="{{asset('frontend/assets/img/donovan.png')}}" alt="Andrea" />
              </div>
              <div class="team__member-name">Andrea</div>
              <div class="team__member-designation"></div>
            </div>
            <div class="team__member">
              <div class="team__member-img">
                <img src="{{asset('frontend/assets/img/maxime.png')}}" alt="Rodolf" />
              </div>
              <div class="team__member-name">Rodolf</div>
              <div class="team__member-designation"></div>
            </div>
          </div> -->
      </section>
      <section class="jointeam">
        <h2 class="jointeam__title">Join Our Team</h2>
        <div class="jointeam__text">
          We could talk all day about how much fun it is being part of the
          TECHSimians team. But really there's only one way to find out...
        </div>
        <a href="{{url('careers')}}" class="jointeam__cta button button--white"
          >Go to careers</a
        >
      </section>
      <!-- <section class="openings">
        <div class="opening__title">Job Openings</div>
        <a class="opening__item" href="{{url('job-openings')}}">
          <div class="opening__item-title">Visual Designer Intern</div>
          <div class="opening__item-content">
            Grow as a designer in a way school can’t teach
          </div>
        </a>
      </section> -->
    </main>
    
  </body>
@include('frontend.layouts.footer')
