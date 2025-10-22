 <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">بازگشت
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <div class="login-pop-wrapper">
                     <div class="login-pop-wrapper-result">
                         <form action="#" class="login-box">
                             <img src="{{ asset('digimag/assets/images/user-modal-login.png') }}" alt="user"
                                 class="avatar">
                             <span class="login-box-title">ورود به دیجی‌کالا مگ</span>
                             <span class="login-box-hint">لطفا برای ورود از حساب کاربری دیجی‌کالا استفاده کنید.
                             </span>
                             <div class="input-wrapper">
                                 <label for="username" class="input-wrapper-item">
                                     <span class="title bold">ایمیل</span>
                                     <input type="email" dir="ltr" id="username" name="username" required=""
                                         placeholder="ایمیل">
                                 </label>
                                 <label for="pwd" class="input-wrapper-item">
                                     <span class="title bold">رمز ورود</span>
                                     <input type="password" dir="ltr" name="password" id="pwd"
                                         placeholder="رمز ورود">
                                 </label>
                             </div>
                             <div class="forgotten">
                                 <div class="form-auth-row">
                                     <label class="ui-checkbox">
                                         <input type="checkbox" value="1" name="login" id="remember">
                                         <span class="ui-checkbox-check"></span>
                                     </label>
                                     <label for="remember" class="remember-me">مرا به خاطر داشته باش</label>
                                 </div>
                                 <span class="forgotten-wrapper">
                                     <a class="forgotten-btn" href="../index.html">ثبت نام</a>
                                     <span class="sep">/</span>
                                     <a class="forgotten-btn" href="../password-forget.html">رمز عبورم را فراموش کرده
                                         ام</a>
                                 </span>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-primary">ورود</button>
             </div>
         </div>
     </div>
 </div>
