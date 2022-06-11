
@extends('auth-layout')
@section('class-body' , 'sign-in-page')

@section('content')
<section class="sign-in-page">
    <div class="container">
       <div class="row justify-content-center align-items-center height-self-center">
          <div class="col-lg-5 col-md-12 align-self-center">
             <div class="sign-user_card ">                    
                <div class="sign-in-page-data">
                   <div class="sign-in-from w-100 m-auto">
                      <h3 class="mb-3 text-center">ورود</h3>
                      <form class="mt-4" action="{{route('login.store')}}" method="POST">
                        @csrf
                         <div class="form-group">                                 
                            <input type="email" name="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="ایمیل" autocomplete="off" required>
                         </div>
                         <div class="form-group">                                 
                            <input type="password" name="password" class="form-control mb-0" id="exampleInputPassword2" placeholder="رمز عبور" required>
                         </div>
                         
                            <div class="sign-info">
                               <button type="submit" class="btn btn-hover">ورود</button>
                               <div class="custom-control custom-checkbox d-inline-block">
                                  <input type="checkbox" class="custom-control-input" id="customCheck">
                               </div>                                
                            </div>                                    
                         
                      </form>
                   </div>
                </div>
                <div class="mt-3">
                   <div class="d-flex justify-content-center links">
                    حساب ندارید ؟ <a href="{{route('register.create')}}" class="text-primary ml-2">ثبت نام</a>
                   </div>
                   <div class="remember">
                     <div class="checkbox">
                         <label style="color: aliceblue">
                             <input name="remember" type="checkbox">
                                 مرا به خاطر بسپار
                         </label>
                     </div>
                   <div class="d-flex justify-content-center links">
                      <a href="reset-password.html" class="f-link">رمز عبور خود را فراموش کرده اید؟</a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 @endsection