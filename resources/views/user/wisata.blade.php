<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Wisata Kroman</h1>

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

            @foreach($wisata as $wisatas)

            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="wisataimage/{{$wisatas->image}}" alt="">
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">{{$wisatas->name}}</p>
                        <span class="text-sm text-grey">{{$wisatas->speciality}}</span></span>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>