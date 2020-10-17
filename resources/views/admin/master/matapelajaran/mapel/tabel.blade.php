@extends($setting->view.'/index')
@section('form')
       <section id="css-classes" class="card">
           <div class="card-header">
               <h4 class="card-title">{{ucfirst($setting->subheadline)}}</h4>
           </div>
           <div class="card-content">
               <div class="card-body">
                   <div class="card-text">
                       <div class="table-responsive">
                        <table class="table" width="100%"> 
                            <thead>
                              <tr>
                                <th width="8%">#</th>
                                <th width="30%">Nama</th>
                                <th width="27%">Kelompok Mapel</th>
                                <th width="20%">KKM</th>
                                <th width="10%">KKM</th>
                                <th width="15%" class="text-center">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($data AS $row)
                              <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->nama}}</td>
                                <td>{{$row->kelompokmapel->kelompok}}</td>
                                <td>{{$row->kkm}}</td>
                                <td><span class="badge badge-info">{{$row->aktif==1 ? 'Aktif':'Disable'}}</span></td>
                                <td>
                                  @include($setting->view.'.button')
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                       </div>
                   </div>
               </div>
           </div>
       </section>
@endsection