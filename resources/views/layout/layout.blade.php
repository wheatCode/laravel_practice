     @include('layout.head')

     <body>
         <!--  preloader start -->
         <div id="tb-preloader">
             <div class="tb-preloader-wave"></div>
         </div>
         <!-- preloader end -->
         <div class="wrapper">
             @include('layout.navbar')
             @yield('banner')
             @yield('content')
             @include('layout.footer')
         </div>

         @include('layout.script')
     </body>

     </html>
