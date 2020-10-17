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
          <span>Mata Pelajaran</span>
          <select class="form-control" name="mapel_id">
            @foreach ($mapel as $row)
              <option value="{{$row->id}}" {{$data->mapel_id==$row->id ? 'selected':''}}>{{ucfirst($row->nama_mapel)}}</option>
            @endforeach
          </select>
          @if($errors->has('mapel_id'))
          <p class="text-danger">{{$errors->first('mapel_id')}}</p>
          @endif
        </div>
        <div class="form-group">
          <span>Jam</span>
        <input type="text" name="jam" class="form-control"  value="{{$data->jam}}">
          @if($errors->has('jam'))
          <p class="text-danger">{{$errors->first('jam')}}</p>
          @endif
        </div>
        <div class="form-group">
          <span>Hari</span>
          <input type="text" name="hari" class="form-control"  value="{{$data->hari}}">
          @if($errors->has('hari'))
          <p class="text-danger">{{$errors->first('hari')}}</p>
          @endif
        </div>   
        <div class="form-group">
          <span>Aktif</span>
          <select class="form-control" name="status">
            <option value="1" {{$data->status==true ? 'selected':''}}>Aktif</option>
            <option value="0" {{$data->status==false ? 'selected':''}}>Disable</option>
          </select>
          @if($errors->has('aktif'))
          <p class="text-danger">{{$errors->first('aktif')}}</p>
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