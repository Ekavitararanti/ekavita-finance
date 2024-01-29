<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>Finance</h3>
          <p>
            Kaliwungu, Kab Kendal<br>
            51372<br><br>
            <strong>Phone:</strong> 081 617 789 180<br>
            <strong>Email:</strong> ekavitar@gmail.com<br>
          </p>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="index.php?#services">Fitur</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="index.php?#features">Tentang</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="index.php?#contact">Kontak</a></li>
          </ul>
        </div>

      </div>
    </div>
  </div>

  <div class="container d-md-flex py-4">

    <div class="me-md-auto text-center text-md-start pt-3">
      <div class="copyright">
        &copy; Copyright <strong><span>Finance </span></strong>2023.
      </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
  </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('bikin/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('bikin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('bikin/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('bikin/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('bikin/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('bikin/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('bikin/assets/js/main.js')}}"></script>

</body>

</html>

{{-- jQuery CDN --}}
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

{{-- Notification Toastr --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  @if(Session::has('success'))
  toastr.success('{{ Session::get('
    success ') }}');
  @endif
</script>

@if (session('error'))
<script>
  $(document).ready(function() {
    toastr.error('{{ session('
      error ') }}');
  });
</script>
@endif

<script>
  $(document).ready(function() {
    $('#submitBtn').click(function(e) {
      e.preventDefault(); // Mencegah aksi default tombol submit

      // Kirim permintaan AJAX ke server
      $.ajax({
        type: 'PUT',
        url: '/absen', // Ganti dengan URL endpoint yang sesuai
        data: {
          status: $('input[name="status"]:checked').val(),
          keterangan: $('textarea[name="keterangan"]').val()
        },
        success: function(response) {
          if (response.error) {
            toastr.error(response.error);
          } else {
            toastr.success(response.success);
          }
        },
        error: function(xhr, status, error) {
          console.error(
            error); // Log error jika terjadi kesalahan saat permintaan AJAX
        }
      });
    });
  });
</script>

</body>

</html>