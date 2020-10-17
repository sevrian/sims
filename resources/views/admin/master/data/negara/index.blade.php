@extends('layout.index')

@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Warga Negara</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="sk-layout-2-columns.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Negara</a>
                            </li>
                            <li class="breadcrumb-item active">Daftar Kewarganegaraan
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <a href="{{route('negara.create')}}" type="button"
                class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Tambah</a>
        </div>

    </div>
    <div class="content-body">

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <section id="css-classes" class="card">
            <div class="card-header">
                <h4 class="card-title">Daftar Jenis PTK</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="card-text">

                        <div class=" table-responsive">
                            <table class="table  table-hover">
                                <thead>
                                    <tr class="table-active">
                                        <th>No</th>
                                        <th>Nama Negara</th>
                                        <th>Keterangan</th>
                                        <th style="width:400px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($negara as $hasil)
                                    <tr>

                                        <td>{{ ++$i }}</td>
                                        <td>{{ $hasil->nama_negara}}</td>
                                        <td>{{ $hasil->keterangan}}</td>
                                        <td>
                                            <form action="{{ route('negara.destroy',$hasil->id) }}" method="POST">

                                                <a class="btn btn-primary btn-sm"
                                                    href="{{ route('negara.edit',$hasil->id) }}">Edit</a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>
                            {!! $negara ?? ''->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
     
        <!--/ CSS Classes -->


    </div>
</div>
@endsection
@push('scripts')

@endpush