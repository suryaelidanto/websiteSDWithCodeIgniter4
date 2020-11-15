  <!-- Site footer -->
  <footer class="site-footer">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 col-md-6">
                  <h6>Lokasi Sekolah </h6>

                  <!-- MAPS API -->


                  <div id='map' style='width: 400px; height: 300px;'>


                  </div>



                  <!-- Akhir MAPS API -->


              </div>

              <div class="col-xs-6 col-md-3">
                  <h6>Temukan Kami</h6>
                  <ul class="footer-links">
                      <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
                      <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
                      <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
                      <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
                      <li><a href="http://scanfcode.com/category/android/">Android</a></li>
                      <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
                  </ul>
              </div>

              <div id="medsos" class="col-xs-6 col-md-3">
                  <h6>Hubungi Kami</h6>
                  <ul class="footer-links">
                      <div>
                          <a href="#"><span>Facebook</span></a>
                          <a href="#"><span>Twitter</span></a>
                          <a href="#"><span>Google+</span></a>
                          <a href="#"><span>Github</span></a>
                          <a href="#"><span>Dribbble</span></a>
                          <a href="#"><span>CodePen</span></a>
                      </div>
                  </ul>
              </div>
          </div>
          <hr>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-md-8 col-sm-6 col-xs-12">
                  <p class="copyright-text">Copyright &copy; <?= date("Y"); ?> All Rights Reserved by
                      <a href="https://facebook.com/cintara.elidanto">Surya Elz</a>.
                  </p>
              </div>
          </div>
      </div>
  </footer>


  <!-- KARENA GOOGLE MAPS HARUS BAYAR DAN PAKAI BILL MAKA SKIP, YANG PENTING TAMPIL MAP -->

  <script>
      let map;

      function initMap() {
          map = new google.maps.Map(document.getElementById("map"), {
              center: {
                  lat: -7.3833286,
                  lng: 109.3228302
              },
              zoom: 15
          });
      }
  </script>
  <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqAIGnG-lm_4cqtoGisn0wCwNWsaB0BvY&callback=initMap">
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
  </body>

  </html>