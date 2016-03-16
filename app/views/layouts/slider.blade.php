<!----start-images-slider---->
<div class="images-slider">
    <!-- start slider -->
    <div id="fwslider">
        <div class="slider_container">
            @foreach($home_slider as $slider)
                <div class="slide">
                    <!-- Slide image -->
                    <img class="img-responsive" src="{{asset($slider->home_slider)}}" alt="">
                    <!-- Texts container -->
                    <div class="slide_content">
                        <div class="slide_content_wrap">
                            <!-- Text title -->
                            <h4 class="title">
                                <i class="bg"></i>{{$slider->title}} <span class="">dummy
									text</span>
                            </h4>
                            <h5 class="title1">
                                <i class="bg"></i>{{$slider->sub_title}} <span class="">condimentum
									accumsan</span>
                            </h5>
                            <!-- /Text title -->
                        </div>
                    </div>
                    <!-- /Texts container -->
                </div>
            @endforeach
        </div>
        <div class="timers"></div>
        <div class="slidePrev">
            <span> </span>
        </div>
        <div class="slideNext">
            <span> </span>
        </div>
    </div>
    <!--/slider -->
</div>