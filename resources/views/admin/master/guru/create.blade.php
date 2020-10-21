@extends('layout.index')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ url ('app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
@endpush

@section('content')

<div class="content-wrapper">
   <div class="content-header row">
       <div class="content-header-left col-md-9 col-12 mb-2">
           <div class="row breadcrumbs-top">
               <div class="col-12">
                   <h2 class="content-header-title float-left mb-0">PTK</h2>
                   <div class="breadcrumb-wrapper col-12">
                       <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="sk-layout-2-columns.html">Home</a>
                           </li>
                           <li class="breadcrumb-item"><a href="#">PTK</a>
                           </li>
                           <li class="breadcrumb-item active">Jenis PTK
                           </li>
                       </ol>
                   </div>
               </div>
           </div>
       </div>
     
   </div>
   <div class="content-body">
  
    <section id="css-classes" class="card">
        <div class="card-header">
            <h4 class="card-title">Form Guru</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <div class="card-text">
                 <div class="col-12">
                    <div class="card">
                       
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>NIP</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="nip" placeholder="NIP">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Jenis PTK</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text"  class="form-control" name="jenisptk_id" placeholder="Jenis PTK">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Agama</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text"  class="form-control" name="Agama_id" placeholder="Agama">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Negara</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text"  class="form-control" name="negara_id" placeholder="Negara">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Nama Guru</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" i class="form-control" name="nama_guru" placeholder="Nama Guru">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Tempat Lahir</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="tanggal_lahir" placeholder="Tanggl Lahir">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Tanggal Lahir</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control pickadate-months-year picker__input--active" name="tanggal_lahir" placeholder="Tanggal Lahir">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Jenis Kelamin</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <fieldset class="form-group">
                                                            <select class="custom-select" name="jenis_kelamin">
                                                                
                                                                <option value="Pria">Pria</option>
                                                                <option value="Wanita">Wanita</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>NIK</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="number"class="form-control" name="nik" placeholder="NIK">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>NUPTK</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text"  class="form-control" name="nuptk" placeholder="NUPTK">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Alamat</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text"  class="form-control" name="alamat" placeholder="Alamat">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Telepon</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text"  class="form-control" name="telepon" placeholder="Telepon">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Email</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="password"  class="form-control" name="email" placeholder="Email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Status Keaktifan</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <fieldset class="form-group">
                                                            <select class="custom-select" name="status_aktif">
                                                                
                                                                <option value="Pria">Aktif</option>
                                                                <option value="Wanita">Tidak Aktif</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Foto</span>
                                                    </div>
                                                    <div class="col-lg-8 col-md-12">
                                                        <fieldset class="form-group">
                                                           
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="foto">
                                                                <label class="custom-file-label" for="inputGroupFile01">Pilih file</label>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Password</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="password"  class="form-control" name="password" placeholder="Password">
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
@push('js')
<script src="{{ url ('app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{ url ('app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{ url ('app-assets/vendors/js/pickers/pickadate/legacy.js')}}""></script>
<script src="{{ url ('app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
@endpush
@push('scripts')
<script>
    $('.datepicker').pickadate({
        selectYear: 'picker__select--year',
    })
</script>
@endpush