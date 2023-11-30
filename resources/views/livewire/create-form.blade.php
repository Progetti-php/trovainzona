<div>
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4 border border-0 shadow-lg">
                <div class="row g-0">
                  <div class="col-xl-6 d-none d-xl-block">
                    <img src="https:/picsum.photos/650/850"
                      alt="Sample photo" class="img-fluid border-0"
                      style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                  </div>
                  <div class="col-xl-6">
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase">Nuovo Annuncio</h3>
      
                      <div class="row">
                        <div class="col-md-6 mb-4">
                            <ul>
                                <li>
                                    <p>Cosa cerchi?</p>
                                </li>
                            </ul>
                            
                          <div class="form-outline ms-4">
                            <input wire:model.live='title' id="title" type="text" id="form3Example1m" class="form-control form-control-lg @error('title') is-invalid @enderror" />
                            <label class="form-label" for="form3Example1m">Titolo</label>
                          </div>
                        </div>
                        
                      </div>
      
                      
      
                      {{-- <div class="form-outline mb-4">
                        <input type="text" id="form3Example8" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example8">Address</label>
                      </div> --}}
      
                     
      
                      <div class="row">
                        
                        <div class="col-md-6 mb-4">
                            <ul>
                                <li>
                                    <p>Dove?</p>
                                </li>
                            </ul>
                            
                          <select class="select ms-4">
                            <option value="1">City</option>
                            <option value="2">Option 1</option>
                            <option value="3">Option 2</option>
                            <option value="4">Option 3</option>
                          </select>
      
                        </div>
                      </div>
      
                      
      
                      <div class="form-outline mb-4">
                        <input type="text" wire:model.live='cap'  id="cap" class="form-control form-control-lg @error('cap') is-invalid @enderror" />
                        <label class="form-label ms-4" for="form3Example90">CAP</label>
                      </div>
                      <ul>
                        <li>
                            <p>Spiega il tuo problema</p>
                        </li>
                    </ul>
                      
                      <div class="form-outline mb-4">
                        <input type="textarea" wire:model.live='description'  id="description" class="form-control form-control-lg @error('description') is-invalid @enderror" style="height: 100px" />
                        <label class="form-label ms-4" for="form3Example99">Descrizione</label>
                      </div>
                      <ul>
                        <li>
                            <p>Contatti</p>
                        </li>
                    </ul>
                     
                      <div class="form-outline mb-4">
                        <input type="email" wire:model.live='email'  id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" />
                        <label class="form-label ms-4" for="form3Example97">Email</label>
                      </div>
      
                      <div class="d-flex justify-content-end pt-3">
                        
                        <button type="button" class="btn bgA btn-lg ms-2">Invia</button>
                      </div>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
