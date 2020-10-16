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
          <a href="{{$setting->tambah['url']}}" type="button" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Tambah</a>
        @endif
       </div>
   </div>
   <div class="content-body">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif    
       <!-- CSS Classes -->
       <div id="tampildata">
        @yield('form')
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