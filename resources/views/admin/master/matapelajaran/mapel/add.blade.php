@extends($setting->view.'/index')
@section('form')
<section id="css-classes" class="card">
  <div class="card-header">
    <h4 class="card-title">{{ucfirst($setting->headline)}}</h4>
  </div>
  <div class="card-content">
    <div class="card-body">
      <form action="{{$setting->simpan}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
          <span>Nama</span>
          <input type="text" name="nama" class="form-control"  value="{{ old('nama') }}">
          @if($errors->has('nama'))
          <p class="text-danger">{{$errors->first('nama')}}</p>
          @endif
        </div>
        <div class="form-group">
          <span>Kelompok Mapel</span>
          <select class="form-control" name="kelompokmapel_id">
            @foreach ($kelompokmapel as $row)
          <option value="{{$row->id}}">{{ucfirst($row->kelompok)}}</option>  
            @endforeach
          </select>
          @if($errors->has('kelompokmapel_id'))
          <p class="text-danger">{{$errors->first('kelompokmapel_id')}}</p>
          @endif
        </div>
        <div class="form-group">
          <span>Nama Mapel</span>
          <input type="text" name="nama_mapel" class="form-control" value="{{ old('nama_mapel') }}">
          @if($errors->has('nama_mapel'))
          <p class="text-danger">{{$errors->first('nama_mapel')}}</p>
          @endif
        </div>  
        <div class="form-group">
          <span>kkm</span>
          <input type="text" name="kkm" class="form-control" value="{{ old('kkm') }}">
          @if($errors->has('kkm'))
          <p class="text-danger">{{$errors->first('kkm')}}</p>
          @endif
        </div> 
        <div class="form-group">
          <span>Tingkat</span>
          <input type="text" name="tingkat" class="form-control" value="{{ old('tingkat') }}">
          @if($errors->has('tingkat'))
          <p class="text-danger">{{$errors->first('tingkat')}}</p>
          @endif
        </div> 
        <div class="form-group">
          <span>Aktif</span>
          <select name="aktif" class="form-control">
            <option value="1">Aktif</option>
            <option value="0">Disable</option>
          </select>
          @if($errors->has('aktif'))
          <p class="text-danger">{{$errors->first('aktif')}}</p>
          @endif
        </div>
        <div class="form-group">
          <span>User</span>
          <input type="text" name="user_id" class="form-control" value="{{ old('user_id') }}">
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