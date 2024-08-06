@extends('layout.app')

@section('content')
     <!--================Contact Area =================-->
     <section class="contact_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <x-contact.item label="Damascus, Syria" desc="AL-tal"/>

                        <x-contact.item label="+(963) 945 772 096" desc="Mon to Fri 9am to 6 pm"/>

                        <x-contact.item label="LinaSoleman63@gmail.com" desc="Send us your query anytime!"/>


                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="primary_btn">
                                <span>Send Message</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div id="mapBox" class="mapBox"
                data-lat="40.701083"
                data-lon="-74.1522848"
                data-zoom="13"
                data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                data-mlat="40.701083"
                data-mlon="-74.1522848">
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->

@endsection
