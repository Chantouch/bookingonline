<!-- start header -->
<nav class="navbar-default navbar-no-bg" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="/">
                {{HTML::image('images/logo/logo.png', 'Booking Early',array('height'=>'49','width'=>'123','class'=>'img-responsive'))}}
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse" style="overflow-x: hidden">

            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li><a href="{{URL::to('account/logout')}}">Sign Out</a></li>
                @else
                    <li>
                        <form class="navbar-form " role="form" action="{{URL::to('account/login')}}">
                            <div class="row">
                                <div class="col-xs-12">
                                    <!--<label class="col-lg-8"><p>Current hotel partners, click here to login:</p></label>-->
                                    <a class="btn btn-success col-lg-12 col-sm-12 col-xs-12 ga_LoginSignUpBtn"
                                       href="{{URL::to('account')}}"><strong>Log in</strong></a>
                                </div>
                            </div>
                        </form>
                    </li>
                    <li>
                        <form class="navbar-form " role="form" action="{{URL::to('actionUsers/register')}}">
                            <div class="row">
                                <div class="col-xs-12">
                                    <!--<label class="col-lg-8"><p>Current hotel partners, click here to login:</p></label>-->
                                    <a class="btn btn-success col-lg-12 col-sm-12 col-xs-12 ga_LoginSignUpBtn"
                                       href="{{URL::to('actionUsers')}}"><strong>Sign up!</strong></a>
                                </div>
                            </div>
                        </form>
                    </li>
                    <li>
                        <form class="navbar-form " role="form">
                            <a class="btn btn-default col-lg-12 col-sm-12 col-xs-12 pull-right ga_ContactUsLinkHeader"
                               style="padding-left:25px;padding-right:25px" href="{{URL::to('contact')}}">Contact
                                us<span
                                        class="sr-only">(current)</span></a>
                        </form>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<!-- /.container -->

