<x-layout>
    <!-- Carousel wrapper -->
    <div id="carouselBasicExample" class="carousel slide carousel-fade " data-mdb-ride="carousel" data-mdb-carousel-init>
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
            ></button>
            <button
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide-to="1"
            aria-label="Slide 2"
            ></button>
            <button
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide-to="2"
            aria-label="Slide 3"
            ></button>
        </div>
        
        <!-- Inner -->
        <div class="carousel-inner hCarousel">
            <!-- Single item -->
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 imgCarousel" alt="Sunset Over the City"/>
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            
            <!-- Single item -->
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 imgCarousel" alt="Canyon at Nigh"/>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            
            <!-- Single item -->
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1562322140-8baeececf3df?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 imgCarousel" alt="Cliff Above a Stormy Sea"/>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <!-- Inner -->
        
        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
            <span  aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
            <span  aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel wrapper -->
    
    {{-- Card --}}
    <div class="container p-5">
        <div class="row">
            
            <div class="col-7 h-100 bgP p-4 border rounded-4">
                <h1 class="text-center colorW">Titolo</h1>
                <p class="fs-4 colorW">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis enim, quidem exercitationem aliquid tempora sapiente possimus hic illum ea ab in aliquam earum reprehenderit maxime labore vel omnis, dolor laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae eligendi aperiam animi fugit, nemo harum itaque ducimus vitae omnis blanditiis dignissimos? Laboriosam at, quam magni temporibus porro commodi voluptate tenetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus accusamus reiciendis, doloribus perspiciatis suscipit aliquam unde quo nam, repudiandae culpa mollitia voluptates error? Eum odio delectus soluta ullam inventore cumque. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore laborum et perspiciatis ab atque accusamus laudantium aspernatur! Minima iste accusantium minus magnam omnis, aperiam repellendus neque debitis, asperiores, laborum consequuntur. Lorem ipsum, dolor sit amet consectetur adipisicing elit.  </p>
                <div class="d-flex justify-content-end align-items-end m-3">
                    <a href="{{route('detail')}}" type="button" class="btn bgD colorA">Scopri di più</a>
                    
                </div>
                
            </div>
            <div class="col-5">
                <div class="row flex-column">

                    <div class="col-2 mt-5 d-flex align-self-center" >
                        <img  class="rounded-circle" src="https:/picsum.photos/200" alt="" >
                    </div>
                    <div class="col-2 d-flex align-self-end">
                        <img class="rounded-circle" src="https:/picsum.photos/201" alt="" >
                    </div>
                    <div class="col-2 d-flex align-self-center">
                        <img class="rounded-circle" src="https:/picsum.photos/202" alt="" >
                        {{-- data-aos="flip-up" data-aos-delay="950" --}}
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
    
    
    
    
    
    
    
    
    
</x-layout>
