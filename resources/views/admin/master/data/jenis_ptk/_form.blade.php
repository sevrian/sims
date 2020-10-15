<section id="css-classes" class="card">
   <div class="card-header">
       <h4 class="card-title">Form PTK</h4>
   </div>
   <div class="card-content">
       <div class="card-body">
           <div class="card-text">
            <div class="col-12">
               <div class="card" style="height: 419.75px;">
                  
                   <div class="card-content">
                       <div class="card-body">
                           <form class="form form-horizontal" action="{{ route('jenis_ptk.store')}}" method="POST">
                               @csrf 
                               <div class="form-body">
                                   <div class="row">
                                       <div class="col-12">
                                           <div class="form-group row">
                                               <div class="col-md-4">
                                                   <span> Jenis PTK</span>
                                               </div>
                                               <div class="col-md-8">
                                                   <input type="text" id="jenis_ptk" class="form-control" name="jenis_ptk" placeholder="Jenis PTK">
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-12">
                                           <div class="form-group row">
                                               <div class="col-md-4">
                                                   <span>Keterangan</span>
                                               </div>
                                               <div class="col-md-8">
                                                   <input type="text"  class="form-control" name="keterangan" placeholder="Keteragan">
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