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
                                <th width="30%">Mapel</th>
                                <th width="22%">Hari</th>
                                <th width="15%">Jam</th>
                                <th width="10%">Status</th>
                                <th width="15%" class="text-center">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($data AS $row)
                              <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->mapel->nama_mapel}}</td>
                                <td>{{$row->hari}}</td>
                                <td>{{$row->jam}}</td>
                                <td><span class="badge badge-info">{{$row->status==1 ? 'Aktif':'Disable'}}</span></td>
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