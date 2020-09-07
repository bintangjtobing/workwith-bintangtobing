@extends('new')
@section('content')
<section id="slider" class="slider-element min-vh-md-100 py-4 include-header"
   style="background: #FFF url('{!!asset('homepage/freelancer/images/hero-bg.svg')!!}') repeat top center; background-size: cover;">
   <div class="slider-inner">
      <div class="vertical-middle slider-element-fade">
         <div class="container text-center py-5">
            <div class="emphasis-title mb-2">
               <h4 class="text-uppercase ls3 font-weight-bolder mb-0">I'm Bintang.</h4>
               <h1>
                  <span id="oc-images" class="owl-carousel image-carousel carousel-widget" data-items="1"
                     data-margin="0" data-autoplay="3000" data-loop="true" data-nav="false" data-pagi="false"
                     data-animate-in="fadeInUp">
                     <div class="oc-item gradient-text gradient-red-yellow text-uppercase">Developer.
                     </div>
                     <div class="oc-item gradient-text gradient-red-yellow text-uppercase">Freelancer.
                     </div>
                  </span>
               </h1>
            </div>

            <div class="mx-auto" style="max-width: 600px">
               <p class="lead font-weight-normal text-dark mb-5">Not only completing your assignments and
                  projects, but also being responsible for what I do is a priority for me. Don't worry
                  about how your business is going, in this digital world I will provide the best solution
                  for you.</p>
               <a href="/projects-done"
                  class="button button-dark button-hero h-translatey-3 tf-ts button-reveal overflow-visible bg-dark text-right"><span>View
                     my Works</span><i class="icon-line-arrow-right"></i></a>
               <a href="#footer" class="button button-large button-light text-dark bg-transparent m-0"><i
                     class="icon-line2-arrow-down font-weight-bold"></i> <u>Contact Me</u></a>
            </div>
         </div>
      </div>
   </div>
</section>
<section id="content">

   <div class="content-wrap p-0">

      <div class="section mb-0 pt-3 pb-0" style="background-color: #F4F4F4; margin-top: 150px; overflow: visible;">
         <div class="shape-divider" data-shape="wave" data-height="150" data-outside="true" data-flip-vertical="true"
            data-fill="#F4F4F4"></div>
         <div class="container">
            <div class="row justify-content-center text-center mt-5">
               <div class="col-lg-6">
                  <div>
                     <h3 class="font-weight-bolder h1 mb-4">Graphics Designer & Full Stack Developer,
                        Based
                        in <span class="gradient-text gradient-horizon">Indonesia</span></h3>
                     <p class="mb-5 lead text-black-50 font-weight-extralight">Are you from abroad? Don't
                        worry about what country you are from. We can do this from the zoom application.
                        Everything must have a solution. Let's first discuss what your target is in
                        branding in the digital world.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="d-flex justify-content-center position-relative">
            <div class="parallax min-vh-75"
               style="background-image: url('{!!asset('homepage/freelancer/images/me.jpg')!!}'); background-size: cover; background-position: center center;"
               data-bottom-top="width: 40vw" data-center-top="width: 100vw;">
               <div class="row align-items-center justify-content-center h-100">
                  <div class="col-auto text-center">
                     <a href="/linkedin"
                        class="display-4 font-weight-bolder text-white d-inline-block mx-4 h-op-08 op-ts"><u>#linkedin</u></a>
                     <a href="/instagram"
                        class="display-4 font-weight-bolder text-white d-inline-block mx-4 h-op-08 op-ts"><u>#instagram</u></a>
                  </div>
               </div>
            </div>
            <div class="shape-divider" data-shape="wave" data-position="bottom"></div>
         </div>
      </div>

      <div class="container" style="max-width: 1000px">
         <div class="row col-mb-30 mt-5">
            <div class="col-md-3">
               <?php
               $from = 2015;
               $to = Date('Y');
               $res = $to-$from;
               ?>
               <div class="d-flex align-items-center justify-content-center">
                  <div class="counter counter-xlarge text-dark font-weight-bolder"><span data-from="1"
                        data-to="{{$res}}" data-refresh-interval="2" data-speed="600"></span></div>
                  <span>+ Years Of<br>Experience.</span>
               </div>
            </div>

            <div class="col-md-3">
               <div class="d-flex align-items-center justify-content-center">
                  <div class="counter counter-xlarge text-dark font-weight-bolder"><span data-from="4" data-to="85"
                        data-refresh-interval="50" data-speed="1500"></span></div>
                  <span>% of Works <br>Completed.</span>
               </div>
            </div>
            <div class="col-md-3">
               <div class="d-flex align-items-center justify-content-center">
                  <div class="counter counter-xlarge text-dark font-weight-bolder"><span data-from="4"
                        data-to="{{$count_pro}}" data-refresh-interval="50" data-speed="1500"></span></div>
                  <span>Projects <br>Completed.</span>
               </div>
            </div>

            <div class="col-md-3">
               <div class="d-flex align-items-center justify-content-center">
                  <div class="counter counter-xlarge text-dark font-weight-bolder"><span data-from="5" data-to="97"
                        data-refresh-interval="30" data-speed="1200"></span></div>
                  <span>% Satisfied<br>Customers.</span>
               </div>
            </div>
         </div>
         <div class="line line-sm mb-0"></div>
      </div>

      <div class="section bg-transparent py-5">
         <div class="container">
            <div class="row align-items-center justify-content-around">
               <div class="col-lg-4">
                  <h3 class="font-weight-bolder h1 mb-4">What Some of my Clients Say</h3>

                  <div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget mt-5" data-margin="0"
                     data-items="1" data-pagi="true" data-nav="false">

                     <div class="oc-item">
                        <div class="testimonial border-0 shadow-none bg-transparent">
                           <div class="testi-content">
                              <p>Dalam 3 bulan, yang awal nya website saya kurang terlihat bagus, dan
                                 sering terkena serangan, namun sekarang baik baik saja dan terlihat
                                 lebih bagus kok.</p>
                              <div class="testi-meta d-flex align-items-center">
                                 <img src="{!!asset('homepage/freelancer/images/testi/face.png')!!}" alt="Face"
                                    width="30">
                                 <div>
                                    Yong Chen
                                    <span class="pl-0"><a href="https://btsa.co.id">BTSA
                                          Logistics</a></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="oc-item">
                        <div class="testimonial border-0 shadow-none bg-transparent">
                           <div class="testi-content">
                              <p>Pengerjaan tepat, design memuaskan, dan yang paling penting
                                 bertanggung jawab!</p>
                              <div class="testi-meta d-flex align-items-center">
                                 <img src="{!!asset('homepage/freelancer/images/testi/face2.png')!!}" alt="Face"
                                    width="30">
                                 <div>
                                    Khaidir
                                    <span class="pl-0"><a href="https://euroupvc.co.id">Euro
                                          uPVC</a></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="oc-item">
                        <div class="testimonial border-0 shadow-none bg-transparent">
                           <div class="testi-content">
                              <p>Website simple dengan integrasi ke facebook membuat customer saya
                                 jadi lebih mudah interaksi ke saya sendiri tanpa perlu tau nomor
                                 telepon (Whatsapp).</p>
                              <div class="testi-meta d-flex align-items-center">
                                 <img src="{!!asset('homepage/freelancer/images/testi/face3.png')!!}" alt="Face"
                                    width="30">
                                 <div>
                                    Bella T.
                                    <span class="pl-0"><a href="https://starwhisper.id">starwhisper.</a></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>

               <div class="col-lg-6">
                  <img src="{!!asset('homepage/freelancer/images/testi/bg.svg')!!}" alt="">
               </div>
            </div>
         </div>
      </div>

      <div class="clear"></div>

      <div class="section m-0">
         <div class="container">
            <div class="row align-items-end justify-content-between mb-5">
               <div class="col-lg-5 offset-lg-1">
                  <div>
                     <h3 class="font-weight-bolder h1 mb-4">Latest Creative Works,<br>and Selected
                        Projects</h3>
                     <p class="lead mb-0">This is my latest works<br> and the best projects i choosed.
                     </p>
                  </div>
               </div>
               <div class="col-auto">
                  <a href="/projects-done" class="button button-dark button-border rounded-pill">View All Works <i
                        class="icon-line-arrow-right"></i></a>
               </div>
            </div>
            <div class="row justify-content-center col-mb-50">
               @foreach ($project as $project)
               <div class="col-lg-6 h-translatey-3 tf-ts">
                  <a href="{{$project->link}}" class="portfolio-item" target="_blank">
                     <div class="portfolio-image">
                        <img src="{!!asset('homepage/freelancer/images/works/'.$project->file)!!}"
                           alt="Portfolio Bintang Tobing">
                        <div class="bg-overlay">
                           <div
                              class="bg-overlay-content align-items-start justify-content-start flex-column px-5 py-4">
                              <h3 class="mb-0 mt-1">{{$project->project_name}}</h3>
                              <h5>{{$project->category}}</h5>
                           </div>
                           <div class="bg-overlay-content align-items-start justify-content-end p-4">
                              <div class="overlay-trigger-icon bg-dark text-white" data-hover-animate="fadeInDownSmall"
                                 data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i
                                    class="icon-line-link"></i></div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               @endforeach
            </div>

         </div>
      </div>

      <div class="clear"></div>

      <div class="section bg-transparent py-5">

         <div class="container">
            <div class="row align-items-end mb-5">
               <div class="col-lg-5 offset-lg-1">
                  <h3 class="font-weight-bolder h1">The ways I can help you</h3>
                  <p>Not only doing a projects but also i can help you in many ways. Go check it!</p>
               </div>
            </div>

            <div class="row gutter-50 mb-5 align-items-stretch">
               <div class="col-md-6">
                  <div class="card d-flex align-items-end flex-column p-4 border-0" style="background-color: #e4e4e4;">
                     <div class="mt-5"></div>
                     <div class="mt-auto">
                        <div class="card-body">
                           <div class="d-flex align-items-center mb-4">
                              <img src="{!!asset('homepage/freelancer/images/icons/icons8-google_code.png')!!}"
                                 height="50" alt="Bintang Tobing's Offers">
                              <img src="{!!asset('homepage/freelancer/images/icons/icons8-web.png')!!}" height="50"
                                 alt="Bintang Tobing's Offers" class="ml-3">
                           </div>
                           <h3 class="card-title font-weight-bolder">Website Development & Design</h3>
                           <p class="card-text mb-0 mt-2 font-weight-light">This is the main point of
                              what I am offering here. 85% who come to me are those who want to
                              increase their turnover from a website marketing strategy. A dynamic,
                              integrated and responsive website is essential in business.</p>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-md-6">
                  <div class="card d-flex align-items-end flex-column p-4 border-0" style="background-color: #C2DFEC;">
                     <div class="mt-5"></div>
                     <div class="mt-auto">
                        <div class="card-body">
                           <img src="{!!asset('homepage/freelancer/images/icons/icons8-design.png')!!}"
                              alt="Bintang Tobing's Offers" class="mb-4" height="50">
                           <h3 class="card-title font-weight-bolder">Logo & Company Needs Design</h3>
                           <p class="card-text mb-0 mt-2 font-weight-light">I know that the design
                              factor is also needed in the area of ​​your digital marketing strategy
                              and branding strategy. For that I can serve you in planning the right
                              design for your business venture. Starting from logo design, business
                              cards, brochures, and others.</p>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-md-6">
                  <div class="card d-flex align-items-end flex-column p-4 border-0" style="background-color: #E4E4E4">
                     <div class="mt-5"></div>
                     <div class="mt-auto">
                        <div class="card-body">
                           <img src="{!!asset('homepage/freelancer/images/icons/icons8-launch.png')!!}" height="50"
                              alt="Bintang Tobing's Offers" class="mb-4">
                           <h3 class="card-title font-weight-bolder">SEO (Search Engine
                              Optimation)</h3>
                           <p class="card-text mb-0 mt-2 font-weight-light">SEO optimization is the
                              number 2 important thing after you create your own business website.
                              Building a business without anyone recognizing you in the environment
                              itself is futile. For this reason, SEO is needed to increase the name of
                              the site branding in the digital world.</p>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-md-6">
                  <div class="card d-flex align-items-end flex-column p-4 border-0" style="background-color: #E5E3CE;">
                     <div class="mt-5"></div>
                     <div class="mt-auto">
                        <div class="card-body">
                           <img src="{!!asset('homepage/freelancer/images/icons/icons8-domain_name.png')!!}" height="50"
                              alt="Bintang Tobing's Offers" class="mb-4">
                           <img src="{!!asset('homepage/freelancer/images/icons/hosting.svg')!!}" height="50"
                              alt="Bintang Tobing's Offers" class="mb-4">
                           <h3 class="card-title font-weight-bolder">Domain & Web Hosting</h3>
                           <p class="card-text mb-0 mt-2 font-weight-light">When your website is ready
                              for publication, you will definitely need a global name and place so
                              that other people can view the website publicly. Don't worry because I
                              have a service where you can choose the right domain and cloud-based
                              storage for your website. <br><a href="#"
                                 class="button button-rounded button-reveal button-small button-yellow button-light text-right"><span>Search
                                    your domain here
                                 </span></a>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="clear"></div>

         <div class="container mt-6">
            <div class="row align-items-end">
               <div class="col-lg-6 offset-lg-1">
                  <h3 class="font-weight-bolder h1">Always value our relationships 😉</h3>
                  <p>It was never just a client-developer, but now we always create a circle of symbiosis
                     of mutualism, we really respect each other.</p>
               </div>
            </div>
            <div class="section rounded-10 p-6 my-4" style="background-color: #F1F1F1;">
               <div id="clientssec" class="row justify-content-between align-items-center col-mb-50">
                  <ul class="clients-grid grid-2 grid-sm-3 grid-md-6 mb-0">
                     <li class="grid-item"><a href="https://occulto.site" target="_blank"><img
                              src="{!!asset('homepage/freelancer/images/clients/occulto.png')!!}"
                              alt="Bintang Tobing's Clients"></a>
                     </li>
                     <li class="grid-item"><a href="https://btsa.co.id" target="_blank"><img
                              src="{!!asset('homepage/freelancer/images/clients/btsa.png')!!}"
                              alt="Bintang Tobing's Clients"></a>
                     </li>
                     <li class="grid-item"><a href="https://euroupvc.co.id" target="_blank"><img
                              src="{!!asset('homepage/freelancer/images/clients/euroupvc.png')!!}"
                              alt="Bintang Tobing's Clients"></a>
                     </li>
                     <li class="grid-item"><a href="http://hkbpglugurmedan.org" target="_blank"><img
                              src="{!!asset('homepage/freelancer/images/clients/hkbpglugur.png')!!}"
                              alt="Bintang Tobing's Clients"></a>
                     </li>
                     <li class="grid-item"><a href="#"><img
                              src="{!!asset('homepage/freelancer/images/clients/indotech.png')!!}"
                              alt="Bintang Tobing's Clients"></a>
                     </li>
                     <li class="grid-item"><a href="http://interiorrumahku.id" target="_blank"><img
                              src="{!!asset('homepage/freelancer/images/clients/interior.png')!!}"
                              alt="Bintang Tobing's Clients"></a>
                     </li>
                     <li class="grid-item"><a href="https://movith.id" target="_blank"><img
                              src="{!!asset('homepage/freelancer/images/clients/movith.png')!!}"
                              alt="Bintang Tobing's Clients"></a>
                     </li>
                     <li class="grid-item"><a href="#"><img
                              src="{!!asset('homepage/freelancer/images/clients/portahost.png')!!}"
                              alt="Bintang Tobing's Clients"></a>
                     </li>
                     <li class="grid-item"><a href="https://sajanamalam.com" target="_blank"><img
                              src="{!!asset('homepage/freelancer/images/clients/sarjanamalam.png')!!}"
                              alt="Bintang Tobing's Clients"></a>
                     </li>
                     <li class="grid-item"><a href="https://starwhisper.id" target="_blank"><img
                              src="{!!asset('homepage/freelancer/images/clients/starwhisper.png')!!}"
                              alt="Bintang Tobing's Clients"></a>
                     </li>
                     <li class="grid-item"><a href="#"><img
                              src="{!!asset('homepage/freelancer/images/clients/whallen.png')!!}"
                              alt="Bintang Tobing's Clients"></a>
                     </li>
                     <li class="grid-item"><a href="http://bprnbp18.co.id" target="_blank"><img
                              src="{!!asset('homepage/freelancer/images/clients/nbp.png')!!}"
                              alt="Bintang Tobing's Clients"></a>
                     </li>
                     <li class="grid-item"><a href="#"><img
                              src="{!!asset('homepage/freelancer/images/clients/amkm.png')!!}"
                              alt="Bintang Tobing's Clients"></a>
                     </li>
                     <li class="grid-item"><a href="#"><img
                              src="{!!asset('homepage/freelancer/images/clients/originalnest.png')!!}"
                              alt="Bintang Tobing's Clients"></a>
                     </li>
                     <li class="grid-item"><a href="https://pesthunter.co.id" target="_blank"><img
                              src="{!!asset('homepage/freelancer/images/clients/plpestindo.png')!!}"
                              alt="Bintang Tobing's Clients"></a>
                     </li>
                     <li class="grid-item"><a href="https://shui-interior.com" target="_blank"><img
                              src="{!!asset('homepage/freelancer/images/clients/shuiinterior.png')!!}"
                              alt="Bintang Tobing's Clients"></a>
                     </li>

                     <li class="grid-item"><a href="https://sumberparts.com" target="_blank"><img
                              src="{!!asset('homepage/freelancer/images/clients/sumberdiesel.png')!!}"
                              alt="Bintang Tobing's Clients"></a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>

      <div class="clear"></div>

      <div class="section m-0" id="faq"
         style="background: #f1efe5 url('{!!asset('homepage/freelancer/images/bg.svg')!!}') no-repeat right center; padding-top: 240px">
         <div class="shape-divider" data-shape="wave-4" data-height="150" id="shape-divider-6017"><svg
               xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none">
               <path class="shape-divider-fill" fill="#F8F7F2"
                  d="M0 51.76c36.21-2.25 77.57-3.58 126.42-3.58 320 0 320 57 640 57 271.15 0 312.58-40.91 513.58-53.4V0H0z"
                  opacity="0.3"></path>
               <path class="shape-divider-fill"
                  d="M0 24.31c43.46-5.69 94.56-9.25 158.42-9.25 320 0 320 89.24 640 89.24 256.13 0 307.28-57.16 481.58-80V0H0z"
                  opacity="0.5"></path>
               <path class="shape-divider-fill"
                  d="M0 0v3.4C28.2 1.6 59.4.59 94.42.59c320 0 320 84.3 640 84.3 285 0 316.17-66.85 545.58-81.49V0z">
               </path>
            </svg></div>
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-5">
                  <h3 class="font-weight-bolder h1 my-5">A few things clients<br>normally ask me</h3>
                  <div class="accordion" data-collapsible="true">

                     <div class="accordion-header">
                        <div class="accordion-icon">
                           <i class="accordion-closed icon-line-plus color gradient-text gradient-red-yellow"></i>
                           <i class="accordion-open icon-line-minus color gradient-text gradient-red-yellow"></i>
                        </div>
                        <div class="accordion-title">
                           What is Our Refund Policy
                        </div>
                     </div>
                     <div class="accordion-content">Don't be afraid of the results, because I guarantee
                        money back if you are not satisfied. For that I created my work system, namely a
                        win-win solution. First, I started work (design & development process), and
                        <span style="background-color:#fddf7e; ">if
                           you are satisfied with the initial design results and the process you can
                           pay
                           the initial bill to continue the project.</span></div>

                     <div class="accordion-header" id="id-accordion-3">
                        <div class="accordion-icon">
                           <i class="accordion-closed icon-line-plus color gradient-text gradient-red-yellow"></i>
                           <i class="accordion-open icon-line-minus color gradient-text gradient-red-yellow"></i>
                        </div>
                        <div class="accordion-title">
                           My Processing Time
                        </div>
                     </div>
                     <div class="accordion-content">The speed of my work process depends on your response
                        in this matter. <span style="background-color:#fddf7e; ">When you quickly
                           provide the necessary data for this project, at
                           least 14 working days</span> you will get the results specified in the
                        initial
                        conditions. If the condition is unresponsive, it may take 30 working days.
                        Everything is related.
                     </div>

                     <div class="accordion-header">
                        <div class="accordion-icon">
                           <i class="accordion-closed icon-line-plus color gradient-text gradient-red-yellow"></i>
                           <i class="accordion-open icon-line-minus color gradient-text gradient-red-yellow"></i>
                        </div>
                        <div class="accordion-title">
                           Design &amp; Development Process
                        </div>
                     </div>
                     <div class="accordion-content">Usually I collect data first, conclude what the
                        target client is, and provide some system suggestions and site design that might
                        be suitable for the client. <span style="background-color: #fddf7e;">And when
                           everything fits, I usually design the site
                           sketch and design the flowchart and database</span> for the client first.
                     </div>

                     <div class="accordion-header" id="id-accordion-4">
                        <div class="accordion-icon">
                           <i class="accordion-closed icon-line-plus color gradient-text gradient-red-yellow"></i>
                           <i class="accordion-open icon-line-minus color gradient-text gradient-red-yellow"></i>
                        </div>
                        <div class="accordion-title">
                           How do I Pay and Payment Method
                        </div>
                     </div>
                     <div class="accordion-content">You don't need to be difficult when it comes to
                        payments, you can pay me via electronic payments at this time. You can pay via
                        OVO, Go-Pay, Dana, PayPal, Jenius and you can also pay via bank transfer at Bank
                        BCA, Bank Mestika, and Bank Panin.

                        <div class="row" id="paymentimg">
                           <div class="col-lg-6">
                              <img src="{!!asset('homepage/freelancer/images/payment/bank-transfer.png')!!}"
                                 alt="Payment Method FAQ WorkWith Bintang Tobing">
                              <img src="{!!asset('homepage/freelancer/images/payment/bca.png')!!}"
                                 alt="Payment Method FAQ WorkWith Bintang Tobing">
                              <img src="{!!asset('homepage/freelancer/images/payment/panin.png')!!}"
                                 alt="Payment Method FAQ WorkWith Bintang Tobing">
                              <img src="{!!asset('homepage/freelancer/images/payment/mestika.png')!!}"
                                 alt="Payment Method FAQ WorkWith Bintang Tobing">
                           </div>
                           <div class="col-lg-6">
                              <img src="{!!asset('homepage/freelancer/images/payment/ovo.png')!!}"
                                 alt="Payment Method FAQ WorkWith Bintang Tobing">
                              <img src="{!!asset('homepage/freelancer/images/payment/gopay.png')!!}"
                                 alt="Payment Method FAQ WorkWith Bintang Tobing">
                              <img src="{!!asset('homepage/freelancer/images/payment/dana.png')!!}"
                                 alt="Payment Method FAQ WorkWith Bintang Tobing">
                              <img src="{!!asset('homepage/freelancer/images/payment/paypal.png')!!}"
                                 alt="Payment Method FAQ WorkWith Bintang Tobing">
                              <img src="{!!asset('homepage/freelancer/images/payment/linkaja.png')!!}"
                                 alt="Payment Method FAQ WorkWith Bintang Tobing">
                              <img src="{!!asset('homepage/freelancer/images/payment/jenius.png')!!}"
                                 alt="Payment Method FAQ WorkWith Bintang Tobing">
                           </div>
                        </div>
                     </div>

                  </div>
               </div>

               <div class="col-lg-7">
                  <img src="{!!asset('homepage/freelancer/images/ask.svg')!!}" alt="FAQs Bintang Tobing" class="px-5">
               </div>
            </div>
         </div>
      </div>

      <div class="clear"></div>

   </div>

</section>
@endsection