<x-pagelayout>
    <!-- Title name -->
    <x-slot name="title">
        <title>About</title>
    </x-slot>

    <!-- Main content -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 col-sm-10 px-3">
                <h1>About Us</h1>
                <p>
                    We recognize that each situation is different, and requires
                    a well thought out plan to reach the desired outcome. Our
                    staff takes a caring approach with each call, will listen to
                    your story without judgement and offer genuine interest in
                    helping you. Whether we can help you reach your goal or find
                    closure so that you can set more realistic goals, we will do
                    our absolute best to help you improve your quality of life
                    with the resources we can share with you.
                </p>
            </div>

            <div class="col-md-6">
                <!-- Default form contact -->
                <form class="border border-light px-2" action="#!">
                    <p class="h4 mb-4 text-center">Contact us</p>

                    <!-- Name -->
                    <input
                        type="text"
                        id="defaultContactFormName"
                        class="form-control mb-4"
                        placeholder="Name"
                    />

                    <!-- Email -->
                    <input
                        type="email"
                        id="defaultContactFormEmail"
                        class="form-control mb-4"
                        placeholder="E-mail"
                    />

                    <!-- Subject -->
                    <label>Subject</label>
                    <select class="form-control custom-select mb-4">
                        <option value="" disabled>Choose option</option>
                        <option value="1" selected>Feedback</option>
                        <option value="2">Report a bug</option>
                        <option value="3">Feature request</option>
                        <option value="4">Feature request</option>
                    </select>

                    <!-- Message -->
                    <div class="form-group">
                        <textarea
                            class="form-control rounded-3"
                            id="exampleFormControlTextarea2"
                            rows="3"
                            placeholder="Message"
                        ></textarea>
                    </div>

                    <!-- Copy -->
                    <div class="custom-control custom-checkbox mb-4">
                        <input
                            type="checkbox"
                            class="custom-control-input"
                            id="defaultContactFormCopy"
                        />
                        <label
                            class="custom-control-label"
                            for="defaultContactFormCopy"
                            >Send me a copy of this message</label
                        >
                    </div>

                    <!-- Send button -->
                    <button class="btn btn-info btn-block" type="submit">
                        Send
                    </button>
                </form>
                <!-- Default form contact -->
            </div>
        </div>
    </div>
</x-pagelayout>
