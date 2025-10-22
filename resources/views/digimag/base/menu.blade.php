 <div class="col-lg-3 col-md-3 col-xs-12 pull-right sticky">
     <nav class="homepage-header-aside">
         <ul class="mega-menu-ul">
             <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-hover-1">
                 <a href="{{ route('digimag.index') }}" class="menu-item-anchor">صفحه اصلی</a>
             </li>
             @foreach ($categoryMenu as $category)
                 <li
                     class="menu-item menu-item-type-custom menu-item-object-custom menu-item-hover-1 {{ $blogCategory == $category->category ? 'active' : '' }}">
                     <a href="{{ route('digimag.blog.category', ['category' => $category->category]) }}"
                         class="menu-item-anchor"><img src="{{ asset('digimag/assets/images/manu/shape.png') }}"
                             alt="menu">
                         {{ $category->category }}
                     </a>
                 </li>
             @endforeach
         </ul>
     </nav>
     <div id="home-menu-bottom-sidebar my-3" class="sidebar-digimag">
         <div class="home-menu-bottom-widget">
             <a href="#" class="promotion">
                 <img src="{{ asset('digimag/assets/images/sidebar/buying-guide-under-menu-tile-2.jpg') }}"
                     class="promotion-img" alt="menu">
             </a>
         </div>
     </div>
 </div>
