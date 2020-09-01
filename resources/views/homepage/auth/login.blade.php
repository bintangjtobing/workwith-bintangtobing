@extends('new')
@section('content')
<section id="content">
   <div class="content-wrap">
      <div class="container clearfix">
         <div class="row">
            <div class="col-md-4 offset-4">
               <div class="well well-lg mb-0">
                  <form id="login-form" name="login-form" class="row" action="{{route('login.proses')}}" method="post">
                     @csrf
                     <div class="col-12">
                        <h3>Login to your Account</h3>
                     </div>

                     <div class="col-12 form-group">
                        <label for="login-form-username">Username:</label>
                        <input type="text" id="login-form-username" name="username" value="" class="form-control" />
                     </div>

                     <div class="col-12 form-group">
                        <label for="login-form-password">Password:</label>
                        <input type="password" id="login-form-password" name="password" value="" class="form-control" />
                     </div>

                     <div class="col-12 form-group">
                        <button class="btn btn-secondary m-0" id="login-form-submit" name="login-form-submit"
                           value="login">Login</button>
                     </div>

                  </form>
               </div>

            </div>
         </div>
      </div>
   </div>
</section>
@endsection