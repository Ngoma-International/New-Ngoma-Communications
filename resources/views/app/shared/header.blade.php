<header class="header">
    <div class="top-menu">
        <ul>

            <li>
                <a href="#home">
                    <span class="icon fa fa-home" style=" text-align: center"></span>
                    <span class="link">Home</span>
                </a>
            </li>


            <li>
                <a href="#about">
                    <span class="icon fa fa-info-circle" style="text-align: center"></span>
                    <span class="link">About Us</span>
                </a>
            </li>

            <li>
                <a href="#sessions">
                    <span class="icon fa fa-door-closed" style="text-align: center"></span>
                    <span class="link">Private Sessions</span>
                </a>
            </li>

            <li>
                <a  href="#events">
                    <span class="icon fa fa-calendar" style="text-align: center"></span>
                    <span class="link">Open Seminars</span>
                </a>
            </li>

            <li>
                <a  href="#podcast">
                    <span class="icon fa fa-microphone" style="text-align: center"></span>
                    <span class="link">Podcast</span>
                </a>
            </li>

            <li>
                <a  href="#leaders">
                    <span class="icon fa fa-user-shield" style="text-align: center"></span>
                    <span class="link">Leaders club</span>
                </a>
            </li>

            <li>
                <a href="#contact">
                    <i class="icon fa fa-envelope" style="text-align: center"></i>
                    <span class="link">Contact Us</span>
                </a>
            </li>
            @auth
                <li>
                    <a href="{{ route('admins.backend.index') }}">
                        <i class="icon fa fa-user" style="text-align: center"></i>
                        <span class="link">Admin</span>
                    </a>
                </li>
            @else
                <li>
                    <a href="{{ route('login') }}">
                        <i class="icon fa fa-sign-in" style="text-align: center"></i>
                        <span class="link">Login</span>
                    </a>
                </li>
            @endauth
        </ul>
    </div>

    <div class="social" >
        <a target="_blank" href="https://www.facebook.com/ngomacommunications/"><span class="fab fa-facebook" style="font-size: 14px; text-align: center"></span></a>
        <a target="_blank" href="https://www.instagram.com/Ngomacomms"><span class="fab fa-instagram" style="font-size: 14px; text-align: center"></span></a>
        <a target="_blank" href="https://www.twitter.com/Ngomacomms"><span class="fab fa-twitter" style="font-size: 14px; text-align: center"></span></a>
        <a target="_blank" href="https://join.skype.com/invite/f4H8DhzuWg5w"><span class="fab fa-skype" style="font-size: 14px; text-align: center"></span></a>
        <a target="_blank" href="https://www.youtube.com/channel/UCnMKWqfCy-SgY9yCDzfP_LA"><span class="fab fa-youtube" style="font-size: 14px; text-align: center"></span></a>
        <a  href="whatsapp://send?text=Hello&phone=+27662669364"><span class="fab fa-whatsapp" style="font-size: 14px; text-align: center"></span></a>
    </div>
    <span class="menu-btn">
        <span class="m-line"></span>
    </span>
</header>
