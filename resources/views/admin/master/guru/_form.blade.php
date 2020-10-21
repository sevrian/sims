<div class="modal fade tambah-edit-modal" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
       <div class="modal-content">
           <div class="modal-header bg-primary">
               <h5 class="modal-title" id="exampleModalScrollableTitle">Form Guru</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>

         <div class="modal-body">
            <form class="form" action="{{ route('guru.store')}}" method="POST">
               <div class="form-body">
                   <div class="row">
                       <div class="col-6">
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <span>NIP</span>
                               </div>
                               <div class="col-md-8">
                                   <input type="text" class="form-control" name="nip" placeholder="NIP">
                               </div>
                           </div>
                       </div>
                       <div class="col-6">
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <span>Jenis PTK</span>
                               </div>
                               <div class="col-md-8">
                                   <input type="text"  class="form-control" name="jenisptk_id" placeholder="Jenis PTK">
                               </div>
                           </div>
                       </div>
                       <div class="col-6">
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <span>Agama</span>
                               </div>
                               <div class="col-md-8">
                                   <input type="text"  class="form-control" name="Agama_id" placeholder="Agama">
                               </div>
                           </div>
                       </div>
                       <div class="col-6">
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <span>Negara</span>
                               </div>
                               <div class="col-md-8">
                                   <input type="text"  class="form-control" name="negara_id" placeholder="Negara">
                               </div>
                           </div>
                       </div>
                       <div class="col-6">
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <span>Nama Guru</span>
                               </div>
                               <div class="col-md-8">
                                   <input type="text" i class="form-control" name="nama_guru" placeholder="Nama Guru">
                               </div>
                           </div>
                       </div>
                       <div class="col-6">
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <span>Tempat Lahir</span>
                               </div>
                               <div class="col-md-8">
                                   <input type="text" class="form-control" name="tanggal_lahir" placeholder="Tanggl Lahir">
                               </div>
                           </div>
                       </div>
                       <div class="col-6">
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <span>Tanggal Lahir</span>
                               </div>
                               <div class="col-md-8">
                                   <input type="text" class="form-control pickadate-months-year picker__input picker__input--active" name="tanggal_lahir" placeholder="Tanggal Lahir">
                               </div>
                           </div>
                       </div>
                       <div class="col-6">
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <span>Jenis Kelamin</span>
                               </div>
                               <div class="col-md-8">
                                   <fieldset class="form-group">
                                       <select class="custom-select" name="jenis_kelamin">
                                           
                                           <option value="Pria">Pria</option>
                                           <option value="Wanita">Wanita</option>
                                       </select>
                                   </fieldset>
                               </div>
                           </div>
                       </div>
                      
                       <div class="col-6">
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <span>NIK</span>
                               </div>
                               <div class="col-md-8">
                                   <input type="number"class="form-control" name="nik" placeholder="NIK">
                               </div>
                           </div>
                       </div>
                       <div class="col-6">
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <span>NUPTK</span>
                               </div>
                               <div class="col-md-8">
                                   <input type="text"  class="form-control" name="nuptk" placeholder="NUPTK">
                               </div>
                           </div>
                       </div>
                       <div class="col-6">
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <span>Alamat</span>
                               </div>
                               <div class="col-md-8">
                                   <input type="text"  class="form-control" name="alamat" placeholder="Alamat">
                               </div>
                           </div>
                       </div>
                       <div class="col-6">
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <span>Telepon</span>
                               </div>
                               <div class="col-md-8">
                                   <input type="text"  class="form-control" name="telepon" placeholder="Telepon">
                               </div>
                           </div>
                       </div>
                       <div class="col-6">
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <span>Email</span>
                               </div>
                               <div class="col-md-8">
                                   <input type="email"  class="form-control" name="email" placeholder="Email">
                               </div>
                           </div>
                       </div>
                       <div class="col-6">
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <span>Status Keaktifan</span>
                               </div>
                               <div class="col-md-8">
                                   <fieldset class="form-group">
                                       <select class="custom-select" name="status_aktif">
                                           
                                           <option value="Pria">Aktif</option>
                                           <option value="Wanita">Tidak Aktif</option>
                                       </select>
                                   </fieldset>
                               </div>
                           </div>
                       </div>
                       <div class="col-6">
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <span>Foto</span>
                               </div>
                               <div class="col-lg-8">
                                   <fieldset class="form-group">
                                      
                                       <div class="custom-file">
                                           <input type="file" class="custom-file-input" name="foto">
                                           <label class="custom-file-label" for="inputGroupFile01">Pilih file</label>
                                       </div>
                                   </fieldset>
                               </div>
                           </div>
                       </div>
                       <div class="col-6">
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <span>Password</span>
                               </div>
                               <div class="col-md-8">
                                   <input type="password"  class="form-control" name="password" placeholder="Password">
                               </div>
                           </div>
                       </div>
                      
                   </div>
               </div>
           </form>
         </div>
           <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
           </div>
       </div>
   </div>
</div>