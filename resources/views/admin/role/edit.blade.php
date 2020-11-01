@extends('layout.index')

@section('content')

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Role</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="sk-layout-2-columns.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Role</a>
                            </li>
                            <li class="breadcrumb-item active">Edit Role
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Maaf!</strong> Data yang anda masukan sudah tepakai.<br><br>
        </div>
        @endif
        <section id="css-classes" class="card">
         <div class="card-header">
             <h4 class="card-title">Form Role</h4>
         </div>
         <div class="card-content">
             <div class="card-body">
                 <div class="card-text">
                  <div class="col-12">
                     <div class="card" style="height: 419.75px;">
                        
                         <div class="card-content">
                             <div class="card-body">
                                 <form class="form form-horizontal" action="{{ route('role.update',($role->id))}}" method="POST">
                                     @csrf 
                                     @method('PUT')
                                     <div class="form-body">
                                         <div class="row">
                                             <div class="col-12">
                                                 <div class="form-group row">
                                                     <div class="col-md-4">
                                                         <span> Nama Role</span>
                                                     </div>
                                                     <div class="col-md-8">
                                                         <input type="text" class="form-control" name="nama_role" placeholder="Role" value="{{$role->nama_role}}">
                                                     </div>
                                                 </div>
                                                 <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span> Nama Role</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="keterangan" placeholder="keterangan" value="{{$role->keterangan}}">
                                                    </div>
                                                </div>
                                             </div>
                                           
                                           
                                             <div class="col-md-8 offset-md-10">
                                                 <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Submit</button>
                                                 
                                             </div>
                                         </div>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
                     </div>
                 </div>
             </div>
         </div>
      </section>
        <!--/ CSS Classes -->


    </div>
</div>
@endsection
 