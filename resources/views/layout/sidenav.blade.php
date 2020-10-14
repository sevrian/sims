<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
   <div class="navbar-header">
       <ul class="nav navbar-nav flex-row">
           <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ url ('html/ltr/vertical-menu-template/index.html')}}">
                   <div class="brand-logo"></div>
                   <h2 class="brand-text mb-0">SIMS</h2>
               </a></li>
           <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block primary" data-ticon="icon-disc"></i></a></li>
       </ul>
   </div>
   <div class="shadow-bottom"></div>
   <div class="main-menu-content">
       <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
           <li class=" nav-item"><a href="{{ url ('html/ltr/vertical-menu-template/index.html')}}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge badge-warning badge-pill float-right">2</span></a>
           </li>
           <li class=" nav-item"><a href="#"><i class="feather icon-zap"></i><span class="menu-title" data-i18n="Starter kit">Master Data</span></a>
               <ul class="menu-content">
                   <li class="{{ Request::is('guru')?'active':''}}"><a href="{{ url ('guru')}}"><i></i><span class="menu-item" data-i18n="2 columns">Master Guru</span></a>
                   </li>
                   <li class="{{ Request::is('siswa')?'active':''}}"><a href="{{ url ('siswa')}}"><i></i><span class="menu-item" data-i18n="Fixed navbar">Master Siswa</span></a>
                   </li>
                   <li class="{{ Request::is('mapel')?'active':''}}"><a href="{{ url ('mapel')}}"><i></i><span class="menu-item" data-i18n="Floating navbar">Master Pelajaran</span></a>
                   </li>
                   <li class="{{ Request::is('kelas')?'active':''}}"><a href="{{ url ('kelas')}}"><i></i><span class="menu-item" data-i18n="Fixed layout">Master Kelas</span></a>
                   </li>
               </ul>
           </li>
           <li class=" nav-item"><a href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation"><i class="feather icon-folder"></i><span class="menu-title" data-i18n="Documentation">Documentation</span></a>
           </li>
           <li class=" nav-item"><a href="https://pixinvent.ticksy.com/"><i class="feather icon-life-buoy"></i><span class="menu-title" data-i18n="Raise Support">Raise Support</span></a>
           </li>
       </ul>
   </div>
</div>