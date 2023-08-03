@extends('frontend.layouts.app');
@include('frontend.layouts.header');
<body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Development - Tech Simians</title>
</head>
    <main class="container">
      <!-- <section class="breadcrumb">
        <a href="{{url('/')}}" class="breadcrumb__link">Home</a>
        <a href="{{url('/')}}" class="breadcrumb__link">Services</a>
        <a href="{{url('development')}}" class="breadcrumb__link">Development</a>
      </section> -->
      <section class="service" style="margin-top: 80px;">
        <div class="service__content">
          <span class="text-blue">Development involves crafting application programs hosted on remote servers and delivered to users' devices via the Internet.
        </div>
        <div class="service__img">
          <lottie-player
            id="animation"
            src="{{('frontend/assets/animations/development.json')}}"
          ></lottie-player>
        </div>
      </section>
      <section class="whatweserve">
        <div class="whatweserver__title">What we Serve:</div>
        <div class="whatweserve__row">
          <div class="whatweserve__item open">
            <div class="whatweserve__item-title">Web Applications</div>
            <div class="whatweserve__item-content">
            Web Applications: Our skilled team designs and develops customized web applications to streamline your business processes, enhance user experiences, and drive online growth.
            </div>
          </div>
          <div class="whatweserve__item">
            <div class="whatweserve__item-title">Mobile Applications</div>
            <div class="whatweserve__item-content">
            Mobile Applications: We create cutting-edge mobile apps for Android and iOS platforms, leveraging the latest technologies to ensure user satisfaction and market success.
            </div>
          </div>
          <div class="whatweserve__item">
            <div class="whatweserve__item-title">
              Robotic Process Automation
            </div>
            <div class="whatweserve__item-content">
            Robotic Process Automation: Our RPA solutions optimize your workflow, automating repetitive tasks and increasing operational efficiency, resulting in significant time and cost savings.
            </div>
          </div>
          <div class="whatweserve__item">
            <div class="whatweserve__item-title">Software</div>
            <div class="whatweserve__item-content">
            Software: From enterprise solutions to specialized software, our team delivers robust applications that cater to your specific requirements, boosting productivity and effectiveness.
            </div>
          </div>
          <div class="whatweserve__item">
            <div class="whatweserve__item-title">IOT</div>
            <div class="whatweserve__item-content">
            IoT (Internet of Things): Embrace the power of IoT with our smart and connected solutions that allow you to collect, analyze, and utilize data for better decision-making and enhanced customer experiences.
            </div>
          </div>
        </div>
      </section>
    </main>
   @include('frontend.layouts.footer');
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".whatweserve__item-title").forEach((e) => {
          e.addEventListener("click", (item) => {
            if (window.innerWidth >= 992) {
              document.querySelectorAll(".whatweserve__item").forEach((it) => {
                it.classList.remove("open");
              });
            }

            item.currentTarget
              .closest(".whatweserve__item")
              .classList.toggle("open");
          });
        });

        LottieInteractivity.create({
          player: "#animation",
          mode: "chain",

          actions: [
            {
              speed: 0.5,
              state: "autoplay"
            }
          ]
        });
      });
    </script>
  </body>