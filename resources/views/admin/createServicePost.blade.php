<x-adminlayout>
    <x-slot name="title">
        <title>Create Service Post</title>
    </x-slot>

    
    <!-- Main Content -->
    <div class="container my-5 grey">
        <div class="row">
            <!-- Card -->
            <div class="card mx-xl-5">
                <!-- Card body -->
                <div class="card-body">
                    <!-- Default form subscription -->
                    <form>
                        <p class="h4 text-center py-4">Create Service Post</p>

                        <!-- Default input name -->
                        <div class="form-group purple-border"></div>
                            <label
                                for="defaultFormCardNameEx"
                                class="grey-text font-weight-light"
                                >Service Title</label
                            >
                            <input
                                type="text"
                                id="defaultFormCardNameEx"
                                class="form-control"
                            />
                        

                        <br />

                        
                        <label
                        for="defaultFormCardNameEx"
                        class="grey-text font-weight-light"
                        >Body title</label
                    >
                            <textarea
                                class="form-control"
                                id="exampleFormControlTextarea4"
                                rows="3"
                            ></textarea>
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
    </div>
</x-adminlayout>
