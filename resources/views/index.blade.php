<x-pagelayout>
    <!-- Title name -->
    <x-slot name="title">
        <title>Home</title>
    </x-slot>

    <!-- Main content -->
    <!-- Carousel wrapper -->
    <div
        id="carouselBasicExample"
        class="carousel slide carousel-fade"
        data-mdb-ride="carousel"
    >
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
        <div class="carousel-inner">
            <!-- Single item -->
            <div class="carousel-item active">
                <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg"
                    class="d-block w-100"
                    alt="Sunset Over the City"
                />
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>
                        Nulla vitae elit libero, a pharetra augue mollis
                        interdum.
                    </p>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(22).jpg"
                    class="d-block w-100"
                    alt="Canyon at Nigh"
                />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(23).jpg"
                    class="d-block w-100"
                    alt="Cliff Above a Stormy Sea"
                />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>
                        Praesent commodo cursus magna, vel scelerisque nisl
                        consectetur.
                    </p>
                </div>
            </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <button
            class="carousel-control-prev"
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel wrapper -->

    <!-- Grid row -->
    <div class="container my-5">
        <div class="row mb-4">
            <h1 class="text-center">Best Caregiving Service in Myanmar</h1>
        </div>
        <div class="row">
            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 col-sm-8 d-flex align-items-stretch">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view">
                        <img
                            src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
                            class="card-img-top"
                            alt="photo"
                        />
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Baby Care</h4>
                        <!--Text-->
                        <p class="card-text">
                            Some quick example text to build on the card title
                            and make up the bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Button</a>
                    </div>
                </div>
                <!--/.Card-->
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 col-sm-8 d-flex align-items-stretch">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view">
                        <img
                            src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
                            class="card-img-top"
                            alt="photo"
                        />
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Elder Care</h4>
                        <!--Text-->
                        <p class="card-text">
                            Some quick example text to build on the card title
                            and make up the bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Button</a>
                    </div>
                </div>
                <!--/.Card-->
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 col-sm-8 d-flex align-items-stretch">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img
                            src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
                            class="card-img-top"
                            alt="photo"
                        />
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Hospitalized Patient Care</h4>
                        <!--Text-->
                        <p class="card-text">
                            Some quick example text to build on the card title
                            and make up the bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Button</a>
                    </div>
                </div>
                <!--/.Card-->
            </div>
            <!-- Grid column -->
        </div>
    </div>
    <!-- Grid row -->

    <!-- Who We are  -->
    <x-whoWeAre></x-whoWeAre>
</x-pagelayout>
