<!--start main -->

<footer class="footer">
    <div class="container">
        <div class="col-xs-6 col-sm-3">
            <h4>About us</h4>
            <ul>
                <li><a href="{{URL::to('pages/about')}}">About Teamwork</a></li>
                <li><a href="{{URL::to('pages/terms-condition')}}">About term and conditions</a></li>
                <li><a href="{{URL::to('pages/privacy')}}">Privacy</a></li>
                <li><a href="#">Media room</a></li>
            </ul>
        </div>
        <div class="col-xs-6 col-sm-3">
            <h4>For you</h4>
            <ul>
                <li><a href="{{URL::to('be_admin')}}" target="_blank">Hotel partner</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Affiliate</a></li>
                <li><a href="#">24/7 help desk</a></li>
            </ul>
        </div>
        <div class="col-xs-6 col-sm-3">
            <h4>Share on</h4>
            <ul>
                <li><a class="icon1" href="#">Facebook</a></li>
                <li><a class="icon2" href="#">Twitter</a></li>
                <li><a class="icon3" href="#">LinkedIn</a></li>
                <li><a class="icon4" href="#">GooglePlus</a></li>
                <li><a class="icon5" href="#">More</a></li>
            </ul>
        </div>
        <div class="col-xs-6 col-sm-3">
            <h4>Mobile apps</h4>
            <ul>
                <li><a href="">iOS <strong>(Coming later)</strong></a></li>
                <li><a href="">Windows Phone <strong>(Coming later)</strong></a></li>
                <li><a href="">Android <strong>(Coming later)</strong></a></li>
            </ul>
        </div>
        <div class="copy col-xs-12 text-center">
            <p class="link">
						<span>© All rights reserved 2015 -
                            <script>document.write(new Date().getFullYear())</script>
                            | Template by&nbsp;<a href="">Group 6</a></span>
            </p>
        </div>
    </div>
</footer>
@include('layouts.partials.scripts')
