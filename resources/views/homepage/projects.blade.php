@extends('new')
@section('content')
<section id="content">
   <div class="content-wrap p-0">
      <div class="section m-0">
         <div class="container">
            <div class="row align-items-end justify-content-between mb-5">
               <div class="col-lg-8 offset-lg-1">
                  <div>
                     <h3 class="font-weight-bolder h1 mb-4">This is my finished projects</h3>
                     <p class="lead mb-0">This is my all latest works.
                     </p>
                  </div>
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
   </div>
</section>
@endsection