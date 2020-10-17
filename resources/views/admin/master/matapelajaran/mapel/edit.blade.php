@extends($setting->view.'/index')
@section('form')
<section id="css-classes" class="card">
  <div class="card-header">
    <h4 class="card-title">{{ucfirst($setting->headline)}}</h4>
  </div>
  <div class="card-content">
    <div class="card-body">
      <form action="{{route($setting->update['url'],$data->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <span>Nama</span>
          <input type="text" name="nama" class="form-control"  value="{{ $data->nama}}">
          @if($errors->has('nama'))
          <p class="text-danger">{{$errors->first('nama')}}</p>
          @endif
        </div>
        <div class="form-group">
          <span>Kelompok Mapel</span>
         <select class="form-control" name="kelompokmapel_id">
            @foreach ($kelompokmapel as $row)
          <option value="{{$row->id}}" {{$data->kelompokmapel_id==$row->id ? 'selected':''}}>{{ucfirst($row->kelompok)}}</option>  
            @endforeach
          </select>
          @if($errors->has('kelompokmapel_id'))
          <p class="text-danger">{{$errors->first('kelompokmapel_id')}}</p>
          @endif
        </div>
        <div class="form-group">
          <span>Nama Mapel</span>
          <input type="text" name="nama_mapel" class="form-control" value="{{ $data->nama_mapel }}">
          @if($errors->has('nama_mapel'))
          <p class="text-danger">{{$errors->first('nama_mapel')}}</p>
          @endif
        </div>  
        <div class="form-group">
          <span>kkm</span>
          <input type="text" name="kkm" class="form-control" value="{{ $data->kkm}}">
          @if($errors->has('kkm'))
          <p class="text-danger">{{$errors->first('kkm')}}</p>
          @endif
        </div> 
        <div class="form-group">
          <span>Tingkat</span>
          <input type="text" name="tingkat" class="form-control" value="{{$data->tingkat }}">
          @if($errors->has('tingkat'))
          <p class="text-danger">{{$errors->first('tingkat')}}</p>
          @endif
        </div> 
        <div class="form-group">
          <span>Aktif</span>
          <select name="aktif" class="form-control">
            <option value="1" {{$data->aktif==true ? 'selected':''}}>Aktif</option>
            <option value="0" {{$data->aktif==false ? 'selected':''}}>Disable</option>
          </select>
          @if($errors->has('aktif'))
          <p class="text-danger">{{$errors->first('aktif')}}</p>
          @endif
        </div>
        <div class="form-group">
          <span>User</span>
          <input type="text" name="user_id" class="form-control" value="{{ $data->user_id }}">
          @if($errors->has('user_id'))
          <p class="text-danger">{{$errors->first('user_id')}}</p>
          @endif
        </div>         
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
</section>
@endsection