<x-pagelayout>
    <!-- Title name -->
    <x-slot name="title">
        <title>Training</title>
    </x-slot>
    <!-- Main content -->
    <div class="container my-5">
        <div class="row">
            <h1>Training Page</h1>
        </div>
        <div class="row">
            @foreach($trainingPosts as $trainingPost)
            <div class="col-lg-4 col-md-6 col-sm-8 d-flex align-items-stretch">
                <!-- Showing Services post from database -->
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img
                            src="{{ asset('images/posts/'.$trainingPost->image) }}"
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
                        <h4 class="card-title">{{$trainingPost->title}}</h4>
                        <!--Text-->
                        <p class="card-text">
                            {{$trainingPost->body}}
                        </p>
                        <a href="#" class="btn btn-primary">Button</a>
                    </div>
                </div>
                <!--/.Card-->
            </div>
            @endforeach
        </div>
    </div>
</x-pagelayout>
