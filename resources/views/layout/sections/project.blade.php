<section class="portfolio_area" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_title text-left">
                    <h2>{{ $title }} <br>
                        {{ $label }} </h2>
                </div>
            </div>
        </div>
        <div class="filters portfolio-filter">
            <ul>
                <li class="active" data-filter="*">all</li>
                <li data-filter=".latest"> latest</li>
                <li data-filter=".upcoming">upcoming</li>
            </ul>
        </div>

        <div class="filters-content">
            <div class="row portfolio-grid justify-content-center">
               <x-project.project name="Real-estate Management sys" class="" image="{{ asset('assets/img/portfolio/p1.jpg') }}" link="{{ asset('assets/img/portfolio/p1.jpg') }}" />
               <x-project.project name="Invoice Management sys" class="" image="{{ asset('assets/img/portfolio/p3.png') }}" link="{{ asset('assets/img/portfolio/p3.png') }}"/>
               <x-project.project name="Multi vendor e-commerce" class="latest"  image="{{ asset('assets/img/portfolio/stores.png') }}" link="{{ asset('assets/img/portfolio/stores.png') }}"/>

                <div class="col-lg-4 col-md-6 all upcoming">
                    <div class="portfolio_box">

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
