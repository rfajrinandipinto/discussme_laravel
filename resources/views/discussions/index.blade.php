<x-layout>



<div class="main-content container mt-4">
    <div class="row">
      
        @include('partials._sidebar')

      <div class="content col-9 ps-4 ">
        <div class="card rounded border-0 shadow overflow-hidden">
          <div class="card-body d-flex flex-column p-0 ">
              <div class="row p-5">
                <div class="col-3 d-flex">
                  <img src="./img/code1.png" alt="" class="img-fluid">
                </div>
                <div class="col-8">
                  <div class="d-flex align-items-center gap-2">
                    <img src="./img/profile.png" alt="" style="width:35px;height: 35px;">
                    <div class="">
                      <p>Malik Fajar</p>
                      <p class="text-secondary">@fajarmailk</p>
                    </div>
                    
                  </div>
                  <p class="fs-4 fw-bold">Bagaimana cara untuk initialize decoder untuk dummy data</p>
                  <p class="fs-5 text-secondary">Bagaimana cara untuk inisialisasi data "machine" itu untuk keperluan dummy data</p>
                  <div class="d-flex justify-content-between">
                    <div class="d-flex gap-2 align-items-center">
                      <p class="primary-bg primary-color py-1 px-2 rounded">#fetchapi</p>
                      <p class="primary-bg primary-color py-1 px-2 rounded">#json</p>
                      <p class="primary-bg primary-color py-1 px-2 rounded">#javascript</p>
                    </div>
                    <div class="d-flex gap-2 align-items-center">
                      <div class="d-flex bg-light rounded align-items-center px-2 py-1">
                        <i class="like-icon">
                          <img src="../src/img/comment.svg" alt="">
                        </i>
                        <p class="  py-1 px-2 text-secondary "><span class="primary-color fw-bold me-1">68</span>Komentar</p>
                      </div>
                      <div class="d-flex bg-light rounded align-items-center px-2 py-1">
                        <i class="comment-icon">
                          <img src="../src/img/like.svg" alt="">
                        </i>
                        <p class=" py-1 px-2 text-secondary"><span class="primary-color fw-bold me-1">125</span>Like</p>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
          </div>
        </div>
      </div>


    </div>
    
  </div>

</x-layout>