@extends('admin.matapelajaran.kelompokmapel.index')

@section('content')
<div class="content-wrapper">
   <div class="content-header row">
       <div class="content-header-left col-md-9 col-12 mb-2">
           <div class="row breadcrumbs-top">
               <div class="col-12">
                   <h2 class="content-header-title float-left mb-0">{{$setting->headline}}</h2>
                   <div class="breadcrumb-wrapper col-12">
                       <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="sk-layout-2-columns.html">Home</a>
                           </li>
                           <li class="breadcrumb-item"><a href="#">Guru</a>
                           </li>
                           <li class="breadcrumb-item active">Tambah Guru
                           </li>
                       </ol>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <div class="content-body">
       <!-- CSS Classes -->
      @include('admin.master.guru._form')
       <!--/ CSS Classes -->
   </div>
</div>
@endsection
