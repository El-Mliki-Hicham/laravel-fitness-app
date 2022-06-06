@extends('pages.principal')		
@section('content')
          <div class="main-content">
              <h1 class="titre text-center ">
             <strong>Insére les endroits</strong>
             </h1>
                  <div class="section__content section__content--p30">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-lg-12">
                                  <div class="card">
  
                                      <!-- form -->
                                      <div class="card-header">Ajouter categorie</div>
                                      <div class="card-body">
                                          
                                        
                                          <form action="{{route('afficher-categorie.store')}}" method="POST" novalidate="novalidate" enctype="multipart/form-data">
                                    
                                        @csrf
                                            <div class="row">
                          
                                               </div>
                                               <div class="row">
                                                  <div class="col-6">
                                                      <div class="form-group ">
                                                          <label for="cc-exp" class="control-label mb-1">Name</label>
                                                          <input id="cc-exp" name="nom_categorie" type="text" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                              data-val-cc-exp="Please enter a valid month and year"
                                                              autocomplete="cc-exp">
                                                          <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                      </div>
                                                  </div>
                                                  
                                                  
                                                  
                                                  
                                             
                                                 
                                                  <div class="form-group">
                                                      <div class="row form-group">
                                                         
                                                      </div>
                                                      <label for="cc-payment" class="control-label mb-1">Description</label>
                                                      <textarea id="cc-pament" name="description" type="text "class="form-control" aria-required="true" aria-invalid="false" value="100.00"> </textarea>
                                                    </div>
                              
                                                  <div class="col-6">
                                                      <label for="x_card_code" class="control-label mb-1">Photo</label>
                                                      <i
                                                          class="fas fa-cloud-upload-alt tm-upload-icon"                    
                    >                                         </i>
                                                      <div class="input-group">
                                      
                                                          <input id="x_card_code"  value=""
                                                                       type="file" name="photo_categorie">
  
                                                      </div>
                                                  </div>   
                                              </div>
                                              <div class="">
                                                  <button class="btn btn-info au-btn--block " type="submit"> Ajouter </button>
  
                                                
                                              </div>
                                           </div>
                                          </form>
                                        
                                      </div>
                                  </div>
                                  <!-- fin -->                        
                              <div class="col-md-12">
                                  
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

      @endsection