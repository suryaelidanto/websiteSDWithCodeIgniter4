  <!-- Site footer -->
  <div class="zoom"></div>
  <footer class="site-footer">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 col-md-6">
                  <h3 style="color: #FFD500;">Lokasi Sekolah </h3>

                  <!-- MAPS API -->


                  <div id='map' style='width: 400px; height: 300px;'>


                  </div>



                  <!-- Akhir MAPS API -->


              </div>

              <div id="medsos" class="col-xs-6 col-md-3">
                  <h3 style="color: #FFD500">Temukan Kami</h3>
                  <ul class="footer-links">
                      <div style="margin-left: 30px;">
                          <li><a href="https://facebook.com/cintara.elidanto" target="_blank"><i class="fa fa-facebook fa-3x"></i></a></li>
                          <li><a href="https://www.instagram.com/surselz/" target="_blank"><i class="fa fa-instagram fa-3x"></i></a></li>
                          <li><a href="https://twitter.com/suryaa6666" target="_blank"><i class="fa fa-twitter fa-3x"></i></a></li>
                          <li><a href="https://www.youtube.com/channel/UCeJfiHw5K5kq3zDLJ-NR0jA?view_as=subscriber" target="_blank"><i class="fa fa-youtube fa-3x"></i></a></li>
                      </div>
                  </ul>
              </div>

              <div class="col-xs-6 col-md-3">
                  <h3 style="color: #FFD500;">Hubungi Kami</h3>
                  <ul class="footer-links">
                      <li><a><i class="fa fa-whatsapp fa-2x"></i></a> +620895386881400</li>
                      <li><a href="mailto:suryaelidanto@gmail.com"><i class="fa fa-envelope fa-lg"></i></a> suryaelidanto@gmail.com </li>
                  </ul>
              </div>


          </div>
          <hr>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-md-8 col-sm-6 col-xs-12">
                  <p class="copyright-text">Copyright &copy; <?= date("Y"); ?> All Rights Reserved by
                      <a href="https://facebook.com/cintara.elidanto" target="_blank">Surya Elz</a>.
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