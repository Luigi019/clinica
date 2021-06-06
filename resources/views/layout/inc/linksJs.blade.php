<!-- Footer-->
<footer class="bg-light py-5">
  <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; {{ date('Y') }} - Centro médico Diagnóstico Clínico</div></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
 
<!-- SimpleLightbox plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/vendor/modernizr-3.11.2.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
  window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
  ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview');
</script>
<script src="https://www.google-analytics.com/analytics.js" async=""></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  @yield("js")