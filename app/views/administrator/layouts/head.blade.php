<?php
/**
 * Created by PhpStorm.
 * User: Ot Yol
 * Date: 3/12/2016
 * Time: 10:35 PM
 */
?>
<header role="banner">
    <div id="cd-logo"><a href="{{URL::to('be_admin')}}"><img src="images/svg/cd-logo.svg" alt="Logo"></a></div>
    <nav class="main-nav">
        <ul>
            <!-- inser more links here -->
            @if(Auth::check())
                <li><a class="cd-logout" href="{{URL::to('account/logout')}}">Sign Out</a></li>
            @endif
        </ul>
    </nav>
</header>

