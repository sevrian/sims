@extends('admin.master.data.agama.index')

@section('content')

<div class="content-wrapper">
   <div class="content-header row">
       <div class="content-header-left col-md-9 col-12 mb-2">
           <div class="row breadcrumbs-top">
               <div class="col-12">
                   <h2 class="content-header-title float-left mb-0">Agama</h2>
                   <div class="breadcrumb-wrapper col-12">
                       <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="sk-layout-2-columns.html">Home</a>
                           </li>
                           <li class="breadcrumb-item"><a href="#">Agama</a>
                           </li>
                           <li class="breadcrumb-item active">Tambah Agama
                           </li>
                       </ol>
                   </div>
               </div>
           </div>
       </div>
     
   </div>
   <div class="content-body">
       <!-- Description -->
       {{-- <section id="description" class="card">
           <div class="card-header">
               <h4 class="card-title">Description</h4>
           </div>
           <div class="card-content">
               <div class="card-body">
                   <div class="card-text">
                       <p>2 Columns layout is the most common and popular layout, it has a navigation with content section. This layout
                           use the common navbar and footer sections, however you can add customized header or footer on page level.</p>
                       <div class="alert alert-warning" role="alert">
                           Vuexy Admin Template default layout is 2 columns. If you do not define pageConfig block on page or template
                           level, it will consider 2 columns by default.
                       </div>
                   </div>
               </div>
           </div>
       </section> --}}
       <!--/ Description -->
       <!-- CSS Classes -->
      @include('admin.master.data.agama._form')
       <!--/ CSS Classes -->
  
       
   </div>
</div>
@endsection
