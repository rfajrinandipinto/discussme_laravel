<x-layout>
    <div class="main-content container mt-4">
        <div class="row">
          
            @include('partials._sidebar')
    
            <div class="content col-9 ps-4 ">
                <div class="card rounded border-0 shadow overflow-hidden">
                  <div class="card-body d-flex flex-column p-0 ">
                    <div class="profile primary-bg text-center position-relative" style="height: 200px;margin-bottom: 125px">
                          <img src="./img/profile.png" alt="" class="position-absolute z-2" style="top: 100%; height:250px; width: 250px; left: 50%; transform: translate(-50%, -50%); ">
      
                    </div>
                    <div class="profile-description text-center mb-4">
                      <p class="fs-3 fw-bold">Malik Fajar</p>
                      <p class="text-secondary">Klaten</p>
                      <p class="text-secondary">Member AMCC</p>
                    </div>
                    <div class="d-flex justify-content-center w-100 gap-4 mb-5">
                      <div class="primary-bg text-center p-4 rounded">
                          <img src="./img/askSolid.svg" alt="" style="width: 60px" class="mb-2">
                          <p class="primary-color"><span class="fw-bold me-2">12</span>Pertanyaan</p>
                      </div>
                      <div class="primary-bg text-center p-4 rounded">
                        <img src="./img/doneSolid.svg" alt="" style="width: 60px" class="mb-2">
                        <p class="primary-color"><span class="fw-bold me-2">10</span>Terjawab</p>
                    </div>
                    <div class="primary-bg text-center p-4 rounded">
                      <img src="./img/pendingSolid.svg" alt="" style="width: 60px" class="mb-2">
                      <p class="primary-color"><span class="fw-bold me-2">2</span>Menunggu</p>
                  </div>
                    </div>
                  </div>
                </div>
              </div>
    
    
        </div>
        
      </div>
</x-layout>