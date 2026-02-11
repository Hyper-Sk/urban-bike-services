<section class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image: url(images/1.jpg)">
            <div class="slide-content">
              <div class="text">
                <h3>best Bike Service in Hyderabad</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Mollitia accusantium sit porro. Neque aliquid fuga aspernatur
                  nam labore numquam vel quo laudantium nemo mollitia maiores
                  repudiandae quae voluptate consequuntur ut quis sit obcaecati
                  earum, blanditiis suscipit magnam dolorum porro? Saepe.
                </p>
              </div>
              <div class="form"></div>
            </div>
          </div>
          <div
            class="swiper-slide"
            style="background-image: url(images/1.jpg); height: 100vh"
          ></div>
        </div>
      </section>
      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper(".mySwiper", {
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          autoplay: {
            delay: 4000,
            disableOnInteraction: false,
          },
        });
      </script>
