<x-adminlayout>
    <x-slot name="title">
        <title>Create Training Post</title>
    </x-slot>

    
    <!-- Main Content -->
    
    <p class="h4 text-center py-4">Create Training Post</p>

        <div class="row">
            <!-- Card -->
            <div class="card">
                <!-- Card body -->
                <div class="card-body">
                    <!-- Default form subscription -->
                    <form action="{{route('storeTrainingPost')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        
                        <!-- Default input name -->
                        <div class="form-group purple-border"></div>
                            <label
                                for="defaultFormCardNameEx"
                                class="grey-text font-weight-light"
                                >Training Title</label
                            >
                            <input
                                type="text"
                                name="title"
                                id="defaultFormCardNameEx"
                                class="form-control"
                                autofocus
                            />
                        

                            <br />

                        
                            <label
                            for="defaultFormCardNameEx"
                            class="grey-text font-weight-light"
                            >Body title</label
                    >
                            <textarea
                                class="form-control"
                                name="body"
                                id="exampleFormControlTextarea4"
                                rows="3"
                            ></textarea>

                            <br>

                            <label
                                for="defaultFormCardNameEx"
                                class="grey-text font-weight-light"
                                >Training Photo</label
                            >
                            <input
                                type="file"
                                name="image"
                                id="defaultFormCardNameEx"
                                class="form-control"
                                accept="image/png, image/jpeg"
                            />
                        </div>

                        <div class="text-center py-4 mt-3">
                            <button
                                class="btn btn-red"
                                type="submit"
                            >
                                Create<i class="fa fa-paper-plane-o ml-2"></i>
                            </button>
                        </div>
                    </form>
                    <!-- Default form subscription -->
                </div>
                <!-- Card body -->
            </div>
            <!-- Card -->
        </div>
</x-adminlayout>

