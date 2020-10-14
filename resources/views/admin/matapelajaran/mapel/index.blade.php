@extends('layout.index')
@section('content')
<div class="content-wrapper">
   <div class="content-header row">
       <div class="content-header-left col-md-9 col-12 mb-2">
           <div class="row breadcrumbs-top">
               <div class="col-12">
                   <h2 class="content-header-title float-left mb-0">{{ucfirst($setting->headline)}}</h2>
                   <div class="breadcrumb-wrapper col-12">
                       <ol class="breadcrumb">
                        @foreach($setting->breadcrumb AS $row)
                          @if(!$row['aktif'])
                            <li class="breadcrumb-item "><a href="{{$row['url']}}">{{$row['label']}}</a>
                           </li>
                          @else
                          <li class="breadcrumb-item active">{{$row['label']}}
                           </li>
                          @endif
                        @endforeach
                       </ol>
                   </div>
               </div>
           </div>
       </div>
       <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        @if($setting->tambah['status'])
          <a href="javascript:void(0)" url="{{$setting->tambah['url']}}" onclick="add(this)" type="button" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Tambah</a>
        @endif
       </div>
   </div>
   <div class="content-body">
       <!-- CSS Classes -->
       <div id="tampildata">
       <section id="css-classes" class="card">
           <div class="card-header">
               <h4 class="card-title">{{ucfirst($setting->subheadline)}}</h4>
           </div>
           <div class="card-content">
               <div class="card-body">
                   <div class="card-text">
                       <div class="table-responsive">
                        <table class="table">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>NIP</th>
                                <th>Telp</th>
                                <th>Alamat</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>123123123123</td>
                                <td>08125634454</td>
                                <td>jl.damai 35</td>
                              </tr>
                              
                            </tbody>
                          </table>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       </div>
       <!--/ CSS Classes -->     
   </div>
</div>
@endsection
<script type="text/javascript">
  add=function(btn){
    var url=$(btn).attr('url')
    $("#tampildata").load(url,function(){
      //LAOD ANOTHER FUNCTION
    });
  }
</script>