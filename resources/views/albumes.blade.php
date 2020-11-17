@extends('template')
@section('titulo', 'Álbumes')
@section('body')
{{-- Aqui va el código html --}}

<div id="carouselIndex" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://d500.epimg.net/cincodias/imagenes/2020/01/24/lifestyle/1579860332_147617_1579860380_noticia_normal.jpg">
        <div class="carousel-caption d-none d-md-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="h2-responsive">ALBUM DOBLE REGION VOL.ll</h2>
                        <p> SRNAY MUSIC.</p>
                        <a class="btn btn-outline-primary waves-effect" href="#">Ver mas</a>
                    </div>
                <div>  

                          <iframe src="https://open.spotify.com/embed/album/4OtyKyA6SJAKQOVXgCALlm" width="300" height="480" frameborder="1" allowtransparency="true" allow="encrypted-media"></iframe>
               
            
        </div>
   </div>
        </div>
             </div>
                </div>
                   </div>
                    <div class="carousel-item">
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg">
        <div class="carousel-caption d-none d-md-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="h2-responsive">Proximos Conciertos</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem minima esse sapiente, voluptatibus laboriosam rerum, saepe odio delectus molestias perferendis sint. Eos minima reprehenderit animi iure iste sint aliquid vero.</p>
                        <a class="btn btn-outline-primary waves-effect" href="#">Ver mas</a>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(31).jpg">
      </div>
    </div>
</div>
    <section class="fondofirtssection view">
        <div class="mask rgba-stylish-light d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-white">
                        <h1 class="h1-responsive">Album Doble Region Vol.l</h1>
                        <hr class="bg-light">
                        <p class="h4-responsive text-justify">SRNAY MUSIC.</p>
                    </div>
                    <div>  

                          
                <iframe src="https://open.spotify.com/embed/album/4OtyKyA6SJAKQOVXgCALlm" width="300" height="480" frameborder="1" allowtransparency="true" allow="encrypted-media"></iframe>
            

        </div>
                </div>
            </div>
        </div>
    </section>
                        



@endsection