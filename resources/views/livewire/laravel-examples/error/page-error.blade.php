<main class="main-content  mt-0">
    <section class="my-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 my-auto">
                    <h1 class="display-1 text-bolder text-gradient text-danger">{{ __('Error 404') }}</h1>
                    <h2>{{ __('Erm. Page not found') }}</h2>
                    <p class="lead">{{ __('We suggest you to go to the homepage while we solve this issue.') }}</p>
                    <a href={{ route('default') }} type="button"
                        class="btn bg-gradient-dark mt-4">{{ __('Go to Homepage') }}</a>
                </div>
                <div class="col-lg-6 my-auto position-relative">
                    <img class="w-100 position-relative" src="../../../assets/img/illustrations/error-404.png"
                        alt="404-error">
                </div>
            </div>
        </div>
    </section>
</main>
