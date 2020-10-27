  
  <!-- Icons Grid -->
  <section id="anime-detail-video" class="bg-anime text-center">
    <div class="container">
      <div class="row">
        <div id="anime-detail">
          <div class="anime-poster">
            <img src="https://images-na.ssl-images-amazon.com/images/I/71nQwqxnYZL._AC_SY741_.jpg">
          </div>
          <div class="anime-card-detail">
            <h1 class="anime-video-title">KIMETSU NO YAIBA</h1>
            <div class="anime-score">
              <span class="anime-text-red">คะแนน :</span>
              <i class="fas fa-star"></i> 8.6
            </div>
            <div class="anime-date">
              <span class="anime-text-red">เข้าฉาย :</span>
              August, 20 2020
            </div>
            <div class="anime-category">
              <span class="anime-text-red">แนวของเรื่อง :</span>
              Action / Adventure / Super Power
            </div>
            <div class="anime-description">
              <span class="anime-text-red">เรื่องย่อ :</span>
              <p>
                เรื่องราวเกิดขึ้นในประเทศญี่ปุ่นยุคไทโช คามาโดะ ทันจิโร่ เป็นเด็กหนุ่มผู้มีจิตใจอ่อนโยนและเฉลียวฉลาด ในฐานะลูกชายคนโตของครอบครัวคนเผาถ่าน เขาจึงเป็นหัวเรี่ยวหัวแรงในการหารายได้เลี้ยงดูครอบครัวจากการเผาถ่านไปขายหลังจากพ่อของเขาเสียชีวิต ทุกสิ่งทุกอย่างได้เปลี่ยนแปลงไปเมื่อมีอสูรบุกเข้ามาสังหารคนในครอบครัวของทันจิโร่ เหลือแต่เพียงเขาและน้องสาวที่ชื่อเนะซึโกะเท่านั้น เนะซึโกะที่รอดตายมาได้กลับกลายเป็นอสูรไป ทว่าก็น่าประหลาดใจที่เธอยังคงมีความคิดและการแสดงอารมณ์อย่างมนุษย์หลงเหลืออยู่ หลังจากที่ทันจิโร่ได้ต่อสู้กับโทมิโอะกะ กิยู นักล่าอสูรที่เดินทางผ่านมาและต้องการจะฆ่าเนะซึโกะที่กลายเป็นอสูรไปแล้ว เขาจึงตัดสินใจที่จะเป็นนักล่าอสูรตามคำชักชวนของกิยู เพื่อหาทางทำให้น้องสาวกลับมาเป็นมนุษย์ และชำระแค้นจากอสูรที่ฆ่าคนในครอบครัวของเขาให้จงได้
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="anime-video" class="bg-light text-center">
    <div class="container">
      <div class="row">

        <div id="anime-player">
          <iframe id="player" class="player" src="<?= base_url('player/1/0') ?>" scrolling="no" frameborder="0" allowfullscreen="yes"></iframe>
          <div class="anime-episode">
            <div id="NextEP" class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a onclick="" tabindex="-1" alt="" title="">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/71nQwqxnYZL._AC_SY741_.jpg">
                    <span class="active">EP 1</span>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a onclick="" tabindex="-1" alt="" title="">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/71nQwqxnYZL._AC_SY741_.jpg">
                    <span class="active">EP 1</span>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a onclick="" tabindex="-1" alt="" title="">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/71nQwqxnYZL._AC_SY741_.jpg">
                    <span class="active">EP 1</span>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a onclick="" tabindex="-1" alt="" title="">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/71nQwqxnYZL._AC_SY741_.jpg">
                    <span class="active">EP 1</span>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a onclick="" tabindex="-1" alt="" title="">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/71nQwqxnYZL._AC_SY741_.jpg">
                    <span class="active">EP 1</span>
                  </a>
                </div>
              </div>

              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <section id="anime-banners" class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12 ">
          <img class="banners" src="https://gurubac.com//images/banner.jpg?692d2df5f9f9837e6112a0e772232da7">
        </div>
      </div>
    </div>
  </section>

  <script>
    window.onload = function() {

      var swiper = new Swiper('#NextEP', {
        slidesPerView: 4,
        spaceBetween: 30,
        centeredSlides: true,
        
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
      });

    };

  </script>


