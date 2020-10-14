<section class="card">
    <div class="card-header">
        <h4 class="card-title">Form Agama</h4>
    </div>
    <div class="card-content">
        <div class="card-body">
            <div class="card-text">
                <div class="col-12">
                    <div class="card" style="height: 200px;">

                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal" method="post" action="{{ route('agama.store')}}">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Agama</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text"class="form-control"
                                                            name="agama" placeholder="agama">
                                                    </div>
                                                </div>
                                            </div>

                                          
                                            <div class="col-md-8 offset-md-10">
                                                <button type="submit"
                                                    class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Submit</button>

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
</section>