  <section class="anime-content text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12 ">
          <h1>Anime8k</h1>
          <h2>ดูการ์ตูนออนไลน์ใหม่ ๆ ได้ทุกวัน</h2>
        </div>
      </div>
    </div>
  </section>

  <section id="anime-popular" class="text-center">
    <div class="container">
      <div class="row flex-col">
        <div class="anime-bg-title "><h2 class="anime-title">Popular <span>Anime</span></h2></div>
        <ul class="list-anime">

         <?PHP
        foreach ($slide_anime as $val) {
          $url_name = urlencode(str_replace(' ', '-', $val['movie_thname']));
          ?>
            <li>
              <div class="anime-box">

                <?php if (substr($val['movie_picture'], 0, 4) == 'http') {
                  $movie_picture = $val['movie_picture'];
                } else {
                  $movie_picture = $path_thumbnail . $val['movie_picture'];
                }

                $url_name = urlencode(str_replace(' ', '-', $val['movie_thname']));
                ?>

                <a onclick="goView('<?= ($val['movie_id']) ?>','<?= $url_name ?>','0','<?= str_replace(' ','-' ,$val['ep_data'][0]['NameEp']) ?>')" alt="<?= $val['movie_thname'] ?>" title="<?= $val['movie_thname'] ?>">
                  <img src="<?= $movie_picture ?>" alt="<?= $val['movie_thname'] ?>" title="<?= $val['movie_thname'] ?>">
                </a>
              </div>
              <div class="title-in">
                <h2>
                  <a onclick="goView('<?= ($val['movie_id']) ?>','<?= $url_name ?>','0','<?= str_replace(' ','-' ,$val['ep_data'][0]['NameEp']) ?>')" tabindex="-1" alt="<?= $val['movie_thname'] ?>" title="<?= $val['movie_thname'] ?>"><?= $val['movie_thname'] ?></a>
                </h2>
                <div class="anime-score">
                  <i class="fas fa-star"></i> <?= $val['movie_ratescore'] ?>
                </div>
              </div>
            </li>
          <?php  } ?>
          
        </ul>
      </div>
    </div>
  </section>
  
  <!-- Icons Grid -->
  <section id="anime-update" class="text-center">
    <div class="container">
      <div class="row flex-col">
        <div class="col-md-12">
          <div class="anime-bg-title ">
            <h2 class="anime-title">Anime <span>Update</span></h2>
          </div>
          <ul id="list-anime" class="list-anime">
            <?PHP
              foreach ($list_anime as $val) {
            ?>
              <li>
                <div class="anime-box">

                  <?php if (substr($val['movie_picture'], 0, 4) == 'http') {
                    $movie_picture = $val['movie_picture'];
                  } else {
                    $movie_picture = $path_thumbnail . $val['movie_picture'];
                  }

                  $url_name = urlencode(str_replace(' ', '-', $val['movie_thname']));
                  ?>

                  <a onclick="goView('<?= ($val['movie_id']) ?>','<?= $url_name ?>','0','<?= str_replace(' ','-' ,$val['ep_data'][0]['NameEp']) ?>')" alt="<?= $val['movie_thname'] ?>" title="<?= $val['movie_thname'] ?>">
                    <img src="<?= $movie_picture ?>" alt="<?= $val['movie_thname'] ?>" title="<?= $val['movie_thname'] ?>">
                  </a>
                </div>
                <div class="title-in">
                  <h2>
                    <a onclick="goView('<?= ($val['movie_id']) ?>','<?= $url_name ?>','0','<?= str_replace(' ','-' ,$val['ep_data'][0]['NameEp']) ?>')" tabindex="-1" alt="<?= $val['movie_thname'] ?>" title="<?= $val['movie_thname'] ?>"><?= $val['movie_thname'] ?></a>
                  </h2>
                  <div class="anime-score">
                    <i class="fas fa-star"></i> <?= $val['movie_ratescore'] ?>
                  </div>
                </div>
              </li>
            <?php  } ?>
            </ul>
          <button id="anime-loadmore">Load more ...</button>
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

  <section id="anime-footer" class="bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <a class="navbar-brand" href="#">Start Bootstrap</a>
          <p><strong>ดูอนิเมะฟรี</strong> โหลดไวแบบไม่มีสะดุดภาพคมชัดระดับ HD FullHD 4k ครบทุกเรื่องทุกรสดูได้ทุกที่ทุกเวลาทั้งบนมือถือ แท็บเล็ต เครื่องคอมพิวเตอร์ ระบบปฏิบัติการ Android และ IOS ดูอนิเมะใหม่ให้รับชมอีกมากมาย สามารถรับชมฟรีได้ทุกที่ทุกเวลาตลอด 24 ชั่วโมง</p>
        </div>
      </div>
    </div>
  </section>

  <script>

    $(document).ready(function() {

      var track_click = 2; //track user click on "load more" button, righ now it is 0 click
      var total_pages = '<?= $pagination['total_page'] ?>';

      if( track_click == total_pages ){
        $("#anime-loadmore").hide(0);
      }

      $("#anime-loadmore").click(function(e) { //user clicks on button

        if (track_click <= total_pages) //user click number is still less than total pages
        {
          //post page number and load returned data into result element
          $.get('<?php echo $url_loadmore ?>', {
            'page': track_click
          }, function(data) {

            // $("#anime-loadmore").show(); //bring back load more button
            $("#list-anime").append(data); //append data received from server

            track_click++; //user click increment on load button

          }).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
            alert(thrownError); //alert with HTTP error
          });

        }

        if(track_click >= total_pages){

          $("#anime-loadmore").hide(0);

        }

      });

    });
  </script>


