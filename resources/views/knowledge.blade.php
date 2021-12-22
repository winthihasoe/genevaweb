<x-pagelayout>
    <!-- Title name -->
    <x-slot name="title">
        <title>Service</title>
    </x-slot>
    <!-- Main content -->
    <div class="container my-5">
        <div class="row my-5">
            <h1>Knowledge Page</h1>
            <div class="row my-5">
            @foreach($knowledgePosts as $knowledgePost)
            <div class="col-lg-4 col-md-6 col-sm-8 d-flex align-items-stretch">
                <!-- Showing Services post from database -->
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img
                            src="{{ asset('images/posts/'.$knowledgePost->image) }}"
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
                        <h4 class="card-title">{{$knowledgePost->title}}</h4>
                        <!--Text-->
                        <p class="card-text">
                            {{$knowledgePost->body}}
                        </p>
                        <a href="#" class="btn btn-primary">Button</a>
                    </div>
                </div>
                <!--/.Card-->
            </div>
            @endforeach
        </div>
        </div>
    </div>
</x-pagelayout>