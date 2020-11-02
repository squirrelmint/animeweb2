  <!-- Icons Grid -->
  <section id="anime-detail-video" class="bg-anime text-center">
    <div class="container">
      <div class="row">
        <div id="anime-detail">
          <div class="anime-poster">
            <?php if (substr($data_anime['movie_picture'], 0, 4) == 'http') {
              $movie_picture = $data_anime['movie_picture'];
            } else {
              $movie_picture = $path_thumbnail . $data_anime['movie_picture'];
            }
            $url_name = urlencode(str_replace(' ', '-', $data_anime['movie_thname']))
            ?>
            <img src="<?= $movie_picture ?>">
          </div>
          <div class="anime-card-detail">
            <h1 class="anime-video-title"><?= $data_anime['movie_thname'] ?> </h1>
            <div class="anime-score">
              <span class="anime-text-red">คะแนน :</span>
              <i class="fas fa-star"></i> <?= $data_anime['movie_ratescore'] ?>
            </div>
            <div class="anime-date"><span class="anime-text-red">อัพเดท :</span>
               <?= $DateEng['m'] . ' ' . $DateEng['d'] . ', ' . $DateEng['Y'] ?>
            </div>
            <div class="anime-category">
              <span class="anime-text-red">แนวของเรื่อง :</span>
              <?php foreach ($data_anime['cate_data'] as  $val) { ?>
                <a href="<?php echo base_url() . '/category/' . $val['category_id'] . '/' . $val['category_name'] ?>" target="_blank">
                  <span class="cate-name">
                    <?= $val['category_name'] ?>
                  </span>
                </a>
              <?php } ?>

            </div>
            <div class="anime-description">
              <span class="anime-text-red">เรื่องย่อ :</span>
              <p>
                <?= $data_anime['movie_des'] ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="anime-video" class="text-center">
    <div class="container">
      <div class="row">

        <div id="anime-player">
          <iframe id="player" class="player" src="<?= base_url('player/' . $data_anime['movie_id'] . '/' . $ep_index) ?>" scrolling="no" frameborder="0" allowfullscreen="yes"></iframe>
          <div class="anime-episode">
            <div id="NextEP" class="swiper-container">
              <div class="swiper-wrapper">

                <?php foreach ($data_anime['ep_data'] as $key => $val) {
                  $url_nameep = urlencode(str_replace(' ', '-', $val['NameEp']))
                ?>


                  <div class="swiper-slide">

                    <a onclick="goView('<?= ($data_anime['movie_id']) ?>','<?= urldecode($url_name) ?>','<?= $key ?>','<?= $url_nameep ?>')" tabindex="-1">
                      <img src="<?= $movie_picture ?>"><br>
                      <?= $val['NameEp'] ?>
                    </a>
                  </div>
                <?php } ?>

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
        centeredSlides: false,
        initialSlide: '<?= $ep_index ?>',
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