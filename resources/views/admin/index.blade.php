@extends('layout.index')

@section('content')
<div class="content-wrapper">
   <div class="content-header row">
       <div class="content-header-left col-md-9 col-12 mb-2">
           <div class="row breadcrumbs-top">
               <div class="col-12">
                   <h2 class="content-header-title float-left mb-0">2 Columns</h2>
                   <div class="breadcrumb-wrapper col-12">
                       <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="sk-layout-2-columns.html">Home</a>
                           </li>
                           <li class="breadcrumb-item"><a href="#">Starter Kit</a>
                           </li>
                           <li class="breadcrumb-item active">2 Columns
                           </li>
                       </ol>
                   </div>
               </div>
           </div>
       </div>
       <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
           <div class="form-group breadcrum-right">
               <div class="dropdown">
                   <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                   <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
               </div>
           </div>
       </div>
   </div>
   <div class="content-body">
       <!-- Description -->
       <section id="description" class="card">
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
       </section>
       <!--/ Description -->
       <!-- CSS Classes -->
       <section id="css-classes" class="card">
           <div class="card-header">
               <h4 class="card-title">CSS Classes</h4>
           </div>
           <div class="card-content">
               <div class="card-body">
                   <div class="card-text">
                       <p>This table contains all classes related to the 2 columns layout. This is a custom layout classes for 2
                           columns layout page requirements.</p>
                       <p>All these options can be set via following classes:</p>
                       <div class="table-responsive">
                           <table class="table table-hover">
                               <thead>
                                   <tr>
                                       <th>Classes</th>
                                       <th>Description</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <th scope="row"><code>.2-columns</code></th>
                                       <td>You can create 2 columns layout by adding <code>2-columns</code> class in <code>&lt;body&gt;</code>
                                           tag.</td>
                                   </tr>
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <!--/ CSS Classes -->
  

   </div>
</div>
@endsection