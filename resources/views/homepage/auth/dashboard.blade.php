@extends('new')
@section('content')
<section id="page-title">
   <div class="container clearfix">
      <h1>Dashboard</h1>
      <span>Welcome {{session()->get('name')}}.</span>
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="#">Home</a></li>
         <li class="breadcrumb-item"><a href="#">Pages</a></li>
         <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
   </div>
</section>
<section id="content">
   <div class="content-wrap">
      <div class="container clearfix">
         @if(session('selamat'))
         <div class="style-msg successmsg">
            <div class="sb-msg"><i class="icon-thumbs-up"></i><strong>Well done!</strong> {{session('selamat')}}</div>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         </div>
         @endif
         <div id="side-navigation" class="row" data-plugin="tabs">
            <div class="col-md-6 col-lg-4">
               <h3>Dashboard</h3>
               <ul class="sidenav">
                  <li><a href="#snav-content1"><i class="icon-screen"></i>Projects<i class="icon-chevron-right"></i></a>
                  </li>
               </ul>
            </div>

            {{-- Modal Add Projects --}}
            <div class="modal fade bs-example-modal-lg" id="modaladd" tabindex="-1" role="dialog"
               aria-labelledby="myLargeModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-lg">
                  <div class="modal-body">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h4 class="modal-title" id="myModalLabel">Add Projects</h4>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                           <form action="/admin/addproject" method="POST" id="projectadd" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <div class="form-group">
                                 <label for="">Nama Proyek</label>
                                 <input type="text" class="form-control" name="project_name" placeholder="Nama Proyek"
                                    required>
                              </div>
                              <div class="form-row">
                                 <div class="col">
                                    <div class="form-group">
                                       <label for="">Kategori Proyek</label>
                                       <input type="text" class="form-control" name="category" placeholder="Nama Proyek"
                                          required>
                                       <small>Cth: BTSA, Logistics</small>
                                    </div>
                                 </div>
                                 <div class="col">
                                    <div class="form-group">
                                       <label for="">Link Tautan</label>
                                       <input type="url" class="form-control" name="link" placeholder="Link Proyek"
                                          required>
                                       <small>Cth: https://xxxxx.com</small>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="">File Upload</label>
                                 <input type="file" class="form-control-file" name="file" required>
                              </div>
                              <div class="form-group">
                                 <button type="submit" class="btn btn-primary btn-sm">Upload</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-md-6 col-lg-8">
               <div id="snav-content1">
                  <div class="row">
                     <div class="col-md-6 text-left">
                        <h3>Projects Managements</h3>
                     </div>
                     <div class="col-md-6 text-right">
                        <a class="button button-3d button-rounded button-blue" data-toggle="modal"
                           data-target="#modaladd"><i class="icon-plus"></i>Add
                           project</a>
                     </div>
                  </div>
                  <div class="row">
                     @if(!$project->isEmpty())
                     @foreach ($project as $projects)
                     <div class="col-md-6 my-3">
                        <div class="card">
                           <div class="card-header">
                              <img src="{!!asset('homepage/freelancer/images/works/'.$projects->file)!!}" alt="">
                           </div>
                           <div class="card-body">
                              <h4 class="card-title">{{$projects->project_name}}</h4>
                              <p class="card-text">{{$projects->category}}</p>
                           </div>
                        </div>
                     </div>
                     @endforeach

                     <div class="row">
                        <div class="col-md-6">
                           <ul class="pagination pagination-transparent pagination-circle">
                              <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span
                                       aria-hidden="true">&laquo;</span></a></li>
                              <li class="page-item"><a class="page-link" href="#">{{$project->links()}}</a></li>
                              <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                       aria-hidden="true">&raquo;</span></a></li>
                           </ul>
                        </div>
                     </div>
                     @else
                     Empty Data!
                     @endif
                  </div>

               </div>
            </div>

         </div>

      </div>
   </div>
</section>
@endsection