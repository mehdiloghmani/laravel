
@extends('auth-layout')
@section('class-body' , 'sign-in-page')

@section('content')
<div id="log-in" class="site-form log-in-form">
    <div id="loading-center">
    </div>
 </div>
 
 <!-- MainContent -->
 <section class="sign-in-page">
    <div class="container">
       <div class="row justify-content-center align-items-center height-self-center">
          <div class="col-lg-7 col-md-12 align-self-center">
             <div class="sign-user_card ">                    
                <div class="sign-in-page-data">
                   <div class="sign-in-from w-100 m-auto">
                    <x-validation-errors></x-validation-errors>
                      <form class="" action="{{route('register.store')}}" method="POST">
                        @csrf
                         <div class="row">
                            <div class="col-md-6">
                               <div class="form-group">
                               
                
                                  <label style="color: aliceblue">نام کاربری</label>
                                  <input type="text" class="form-control mb-0" name="name" id="exampleInputEmail2" placeholder="نام کامل را وارد کنید"  >
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="form-group">  
                                  <label style="color: aliceblue">ایمیل</label>                               
                                  <input name="email" type="email" class="form-control mb-0" id="exampleInputEmail3" placeholder="ایمیل را وارد کنید" >
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="form-group">   
                                  <label style="color: antiquewhite">کلمه عبور</label>                              
                                  <input name="password" type="password" class="form-control mb-0" id="exampleInputPassword2" placeholder="کلمه عبور" >
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="form-group"> 
                                  <label style="color:aliceblue">رمز عبور را تکرار کنید</label>                                
                                  <input name="password_confirmation" type="password" class="form-control mb-0" id="exampleInputPassword2" placeholder="کلمه عبور">
                               </div>
                            </div>
                            <div class="remember">
                              <div class="checkbox">
                                  <label style="color: aliceblue">
                                      <input name="remember" type="checkbox">
                                          مرا به خاطر بسپار
                                  </label>
                              </div>
                       
                         <button type="submit" class="btn btn-hover my-2">ثبت نام</button>
                                                             
                      </form>
                   </div>
                </div>    
                <div class="mt-3">
                   <div class="d-flex justify-content-center links">
                     قبلاً حساب کاربری دارید؟ <a href="{{route('login.create')}}" class="text-primary ml-2">ورود</a>
                   </div>                        
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 
@endsection
    