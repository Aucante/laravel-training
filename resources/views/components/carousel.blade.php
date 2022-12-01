<div id="carouselExampleControls" class="carousel slide pb-5" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('carouselImage2.jpg') }}" class="d-block w-100" alt="carousel1">
            <div class="d-flex align-items-center justify-content-center card-img-overlay rounded-0">
                <div class="text-center mt-4">
                    <div
                        class="card-body d-flex align-items-center justify-content-center"
                    >
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <h1 class="display-5 fs-3 text-uppercase text-light">Expertise Nutrition</h1>
                        </div>
                    </div>
                    <a href="{{ route('login') }}"><button class="btn btn-light my-3">connexion</button></a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('carouselImage1.jpg') }}" class="d-block w-100" alt="carousel2">
            <div class="d-flex align-items-center justify-content-center card-img-overlay rounded-0">
                <div class="text-center mt-4">
                    <div
                        class="card-body d-flex align-items-center justify-content-center"
                    >
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <h1 class="display-5 fs-3  text-uppercase text-light">Hormonal Optimization</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('carouselImage4.jpg') }}" class="d-block w-100" alt="carousel3">
            <div class="d-flex align-items-center justify-content-center card-img-overlay rounded-0">
                <div class="text-center mt-4">
                    <div
                        class="card-body d-flex align-items-center justify-content-center"
                    >
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <h1 class="display-5 fs-3  text-uppercase text-light">Improve your training</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

