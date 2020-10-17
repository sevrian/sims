@extends('layout.index')

@push('css')
<link rel="stylesheet" type="text/css" href="{{url('app-assets/css/pages/app-user.css')}}">
@endpush
@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Profil Sekolah</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="sk-layout-2-columns.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Sekolah</a>
                            </li>
                            <li class="breadcrumb-item active">Profil Sekolah
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <a href="{{route('profil_sekolah.create')}}" type="button"
                class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Tambah</a>
        </div> --}}
        <section class="page-users-view">
            <div class="row">
                <!-- account start -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Account</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="users-view-image">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-12.jpg" class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar">
                                </div>
                                <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                    <table>
                                        <tr>
                                            <td class="font-weight-bold">Nama Sekolah</td>
                                            <td>SMA MAJU TERUS PATANG MUNDUR</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">NPSN</td>
                                            <td>50302147</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">NSS</td>
                                            <td>5030214799099</td>
                                        </tr>
                                    </table>
                                </div>
                                {{-- <div class="col-12 col-md-12 col-lg-5">
                                    <table class="ml-0 ml-sm-0 ml-lg-0">
                                        <tr>
                                            <td class="font-weight-bold">Status</td>
                                            <td>active</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Role</td>
                                            <td>admin</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Company</td>
                                            <td>WinDon Technologies Pvt Ltd</td>
                                        </tr>
                                    </table>
                                </div> --}}
                                {{-- <div class="col-12">
                                    <a href="app-user-edit.html" class="btn btn-primary mr-1"><i class="feather icon-edit-1"></i> Edit</a>
                                    <button class="btn btn-outline-danger"><i class="feather icon-trash-2"></i> Delete</button>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- account end -->
                <!-- information start -->
                <div class="col-md-6 col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title mb-2">Information</div>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td class="font-weight-bold">Alamat </td>
                                    <td>Jl.Mereka N0.45 
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Kode pos</td>
                                    <td>234652</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Kelurahan</td>
                                    <td>https://rowboat.com/insititious/Angelo
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Kecamatan</td>
                                    <td>English, Arabic
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Kabupaten </td>
                                    <td>female</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Provinsi</td>
                                    <td>email, message, phone
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- information start -->
                <!-- social links end -->
                <div class="col-md-6 col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title mb-2">Social Links</div>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td class="font-weight-bold">website</td>
                                    <td>https://twitter.com/adoptionism744
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Email</td>
                                    <td>https://twitter.com/adoptionism744
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Twitter</td>
                                    <td>https://twitter.com/adoptionism744
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Facebook</td>
                                    <td>https://www.facebook.com/adoptionism664
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Instagram</td>
                                    <td>https://www.instagram.com/adopt-ionism744/
                                    </td>
                                </tr>
                               
                                <tr>
                                    <td class="font-weight-bold">CodePen</td>
                                    <td>https://codepen.io/adoptism243
                                    </td>
                                </tr>
                               
                            </table>
                        </div>
                    </div>
                </div>
                <!-- social links end -->
                <!-- permissions start -->
               
                <!-- permissions end -->
            </div>
        </section>
    </div>
 
</div>
@endsection
@push('scripts')

@endpush