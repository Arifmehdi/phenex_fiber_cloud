    <footer class="footer"><img src="{{ asset('frontend')}}/assets/img/media/footer-pattern.png" alt="" class="footer-bg-shape">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="widget widget_contact">
                            <h5 class="widget-title">Contact Info</h5>
                            <ul>
                                <li><span class="icon"><img src="{{ asset('frontend')}}/assets/img/icons/location.svg" alt="" class="svg">
                                    <!-- </span>8565 Manina Avenue • Brisbon Street NY 91335, United States</li> -->
                                    </span>{{$ws->contact_address }}</li>
                                <li><span class="icon"><img src="{{ asset('frontend')}}/assets/img/icons/phone.svg" alt="" class="svg">
                                    <!-- </span><a href="callto:(202)2555421">Phone: (305) 720-8500</a></li> -->
                                    </span><a href="callto:{{$ws->contact_mobile }}">Phone: {{$ws->contact_mobile }}</a></li>
                                <li><span class="icon"><img src="{{ asset('frontend')}}/assets/img/icons/email.svg" alt="" class="svg">
                                    <!-- </span><a href="mailto:Your@gmail.com">Email: support@govpn.com</a></li> -->
                                    </span><a href="mailto:{{$ws->contact_email }}">Email: {{$ws->contact_email }}</a></li>
                                <li><span class="icon"><img src="{{ asset('frontend')}}/assets/img/icons/chat.svg" alt="" class="svg">
                                    </span><a href="#">Live Chat</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="widget widget_nav_menu">
                            <h5 class="widget-title">Useful Links</h5>
                            <div class="menu-container">
                                <ul class="menu">
                                    <li><a href="#">About company</a></li>
                                    <li><a href="#">Affiliate Program</a></li>
                                    <li><a href="#">Price Plans</a></li>
                                    <li><a href="#">Business Plans</a></li>
                                    <li><a href="#">Privacy & Legal</a></li>
                                    <li><a href="#">Friends Plans</a></li>
                                    <li><a href="#">Supplier Guideline</a></li>
                                    <li><a href="#">Free Web Proxy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="widget widget_newsletter">
                            <h5 class="widget-title">Subscribe Newsletter</h5>
                            <p>Sign up for our latest news & articles. We won’t give you spam mails.</p>
                            <form
                                action="#"
                                class="newsletter-form style--two" target="_blank"><input type="email"
                                    class="form-control" placeholder="Email Address..."> <button type="submit"><img
                                        src="{{ asset('frontend')}}/assets/img/icons/paper.svg" alt="" class="svg"></button></form>
                            <div class="social-links style--two pt-1"><span>Follow Us:</span> <a
                                    href="{{ $ws->fb_url}}"><i class="fa fa-facebook"></i> </a><a
                                    href="{{ $ws->twitter_url}}"><i class="fa fa-twitter"></i> </a><a
                                    href="{{ $ws->youtube_url }}"><i class="fa fa-youtube"></i> </a>
                                    <!-- <a  href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a> -->
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div
                            class="footer-bottom-content d-flex flex-column flex-md-row justify-content-md-between align-items-center">
                            <div class="mb-2 mb-md-0">© 2026 <a href="https://phenexsoft.com/" target="_blank"
                                    class="bold">Phenexsoft IT</a> All Rights Reserved.</div>
                            <ul class="inline-menu">
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Security</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>