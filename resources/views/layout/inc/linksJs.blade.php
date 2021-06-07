
 <!-- Footer-->
 <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="#!">Sobre Nosotros</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Contactanos</a></li>
                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0">&copy; {{ date('Y') }} - Centro médico Diagnóstico Clínico. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="https://www.facebook.com/Drayessiponce" target="_blank"><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-twitter fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/drayessiponc/" target="_blank"><i class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    
            </footer>
            <footer>
            <div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <hr class="divider divider-light" /> 
                        <p class="text-white-75 mb-4"><i><b>Sitio Web diseñado por  <a href="http://funnywebs.herokuapp.com/#page-top" target="_blank">Funny Webs</a></b></i></p>
                       
                    </div>
                </div>
            </div>
    </footer>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
 
<!-- SimpleLightbox plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/vendor/modernizr-3.11.2.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  @yield("js")