@extends($setting->view.'/index')
@section('form')
<section id="css-classes" class="card">
  <div class="card-header">
    <h4 class="card-title">{{ucfirst($setting->headline)}}</h4>
  </div>
  <div class="card-content">
    <div class="card-body">
      <div class="card-text">
        <div class="col-12">
          <div class="card" style="height: 419.75px;">
            <div class="card-content">
              <div class="card-body">
                <form class="form form-horizontal" action=" {{route($setting->update['url'],$data->id)}}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="form-body">
                    <div class="row">                     
                      <div class="col-12">
                        <div class="form-group row">
                          <div class="col-md-4">
                            <span>Kelompok</span>
                          </div>
                          <div class="col-md-8">
                            <input type="text" id="first-name"  class="form-control" name="kelompok" placeholder="First Name" value="{{ $data->kelompok }}">
                            @if($errors->has('kelompok'))
                              <p class="text-danger">{{$errors->first('kelompok')}}</p>
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group row">
                          <div class="col-md-4">
                            <span>Keterangan/Deskripsi</span>
                          </div>
                          <div class="col-md-8">
                            <textarea class="form-control"  name="keterangan">{{ $data->keterangan  }}</textarea>
                            @if($errors->has('keterangan'))
                              <p class="text-danger">{{$errors->first('keterangan')}}</p>
                            @endif                            
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2 offset-md-10">
                        <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Submit</button>
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
@endsection