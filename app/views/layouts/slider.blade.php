<!----start-images-slider---->
<div class="images-slider">
    <!-- start slider -->
    <div id="fwslider">
        <div class="slider_container">
            <div class="slide">
                <!-- Slide image -->
                {{--<img class="img-responsive" src="{{asset($home_slider->home_slider)}}" alt="">--}}
                {{HTML::image('images/slider-bg.jpg', 'Lorem Ipsum is simply.')}}
                        <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h4 class="title">
                            <i class="bg"></i>Lorem Ipsum is simply <span class="">dummy
									text</span>
                        </h4>
                        <h5 class="title1">
                            <i class="bg"></i>Morbi justo <span class="">condimentum
									accumsan</span>
                        </h5>
                        <!-- /Text title -->
                    </div>
                </div>
                <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
                {{HTML::image('images/slider-bg.jpg')}}
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h4 class="title">
                            <i class="bg"></i>Morbi justo <span class=""> condimentum </span>text
                        </h4>
                        <h5 class="title1">
                            <i class="bg"></i>Lorem Ipsum is <span class="">simply dummy
									text</span>
                        </h5>
                        <!-- /Text title -->
                    </div>
                </div>
            </div>
            <div class="slide">
                {{HTML::image('images/slider-bg.jpg')}}
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h4 class="title">
                            <i class="bg"></i>Morbi justo <span class=""> condimentum </span>text
                        </h4>
                        <h5 class="title1">
                            <i class="bg"></i>Lorem Ipsum is <span class="">simply dummy
									text</span>
                        </h5>
                        <!-- /Text title -->
                    </div>
                </div>
            </div>
            <!--/slide -->
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