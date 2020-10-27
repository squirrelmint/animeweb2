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

                <a onclick="goView('<?= ($val['movie_id']) ?>','<?= $url_name ?>','0')" alt="<?= $val['movie_thname'] ?>" title="<?= $val['movie_thname'] ?>">
                  <img src="<?= $movie_picture ?>" alt="<?= $val['movie_thname'] ?>" title="<?= $val['movie_thname'] ?>">
                </a>
              </div>
              <div class="title-in">
                <div class="anime-score">
                  <span>score</span>
                  <span class="score"><?= $val['movie_ratescore'] ?></span>
                </div>
                <h2>
                  <a onclick="goView('<?= ($val['movie_id']) ?>','<?= $url_name ?>','0')" tabindex="-1" alt="<?= $val['movie_thname'] ?>" title="<?= $val['movie_thname'] ?>"><?= $val['movie_thname'] ?></a>
                </h2>
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
        <div class="anime-bg-title "><h2 class="anime-title">Anime <span>Update</span></h2></div>
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

                <a onclick="goView('<?= ($val['movie_id']) ?>','<?= $url_name ?>','0')" alt="<?= $val['movie_thname'] ?>" title="<?= $val['movie_thname'] ?>">
                  <img src="<?= $movie_picture ?>" alt="<?= $val['movie_thname'] ?>" title="<?= $val['movie_thname'] ?>">
                </a>
              </div>
              <div class="title-in">
                <div class="anime-score">
                  <span>score</span>
                  <span class="score"><?= $val['movie_ratescore'] ?></span>
                </div>
                <h2>
                  <a onclick="goView('<?= ($val['movie_id']) ?>','<?= $url_name ?>','0')" tabindex="-1" alt="<?= $val['movie_thname'] ?>" title="<?= $val['movie_thname'] ?>"><?= $val['movie_thname'] ?></a>
                </h2>
              </div>
            </li>
          <?php  } ?>
          
        
          
        
          
          
        </ul>
        <button id="anime-loadmore">Load more ...</button>
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
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <p><strong>ดูอนิเมะฟรี</strong> โหลดไวแบบไม่มีสะดุดภาพคมชัดระดับ HD FullHD 4k ครบทุกเรื่องทุกรสดูได้ทุกที่ทุกเวลาทั้งบนมือถือ แท็บเล็ต เครื่องคอมพิวเตอร์ ระบบปฏิบัติการ Android และ IOS ดูอนิเมะใหม่ให้รับชมอีกมากมาย สามารถรับชมฟรีได้ทุกที่ทุกเวลาตลอด 24 ชั่วโมง</p>
      </div>
    </div>
  </section>

  <script>
    $(document).ready(function() {
      var track_click = 0; //track user click on "load more" button, righ now it is 0 click
      var total_pages = '1';

      // $('#list-anime').load("animedata", {'page':track_click}, function() {track_click++;}); //initial data to load
      $("#anime-loadmore").click(function (e) { //user clicks on button

        // $(this).hide(); //hide load more button on click
        // $('.animation_image').show(); //show loading image

        if(track_click <= total_pages) //user click number is still less than total pages
        {
          //post page number and load returned data into result element
          $.get('animedata',{'page': track_click}, function(data) {

            // $("#anime-loadmore").show(); //bring back load more button

            $("#list-anime").append(data); //append data received from server

            //scroll page smoothly to button id
            // $("html, body").animate({scrollTop: $("#load_more_button").offset().top}, 500);

            //hide loading image
            // $('.animation_image').hide(); //hide loading image once data is received

            track_click++; //user click increment on load button

          }).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
            alert(thrownError); //alert with HTTP error
            // $(".load_more").show(); //bring back load more button
            // $('.animation_image').hide(); //hide loading image once data is received
          });


          if(track_click >= total_pages-1) //compare user click with page number
          {
            //reached end of the page yet? disable load button
            $("#anime-loadmore").hide();
          }
        }

      });
    });
  </script>


