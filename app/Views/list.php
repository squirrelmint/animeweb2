 <!-- Icons Grid -->
 <section id="anime-update" class="text-center">
   <div class="container">
     <div class="row flex-col">
       <div class="col-md-12">
         <?php
          if (!empty($cate_name)) {

            $title = '<h2 class="anime-title">' . $cate_name . '</h2>';
          } else if (!empty($keyword)) {

            $title = '<h2 class="anime-title">คุณกำลังค้นหา : ' . $keyword . '</h2>';
          }
          ?>
         <div class="anime-bg-title "> <?= $title ?></div>
         <ul id="list-anime" class="list-anime">
           <?PHP
            if ($list_anime) {
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

                   <a onclick="goView('<?= ($val['movie_id']) ?>','<?= $url_name ?>','0','<?= str_replace(' ','-' ,$val['ep_data'][0]['NameEp']) ?>')">

                     <img src="<?= $movie_picture ?>">
                   </a>
                 </div>
                 <div class="title-in">

                   <h2>
                     <a onclick="goView('<?= ($val['movie_id']) ?>','<?= $url_name ?>','0','<?= str_replace(' ','-' ,$val['ep_data'][0]['NameEp']) ?>')" tabindex="-1"><?= $val['movie_thname'] ?></a>
                   </h2>
                   <div class="anime-score">
                    <i class="fas fa-star"></i> <?= $val['movie_ratescore'] ?>
                    <span class="line-small">|</span>
                    <?php if (!($val['movie_view'])) {
                      $view = 0;
                    } else if (strlen($val['movie_view']) >= 5) {
                      $view =  substr($val['movie_view'], 0, -3) . 'k';
                    } else {
                      $view = $val['movie_view'];
                    } ?>
                    <i class="fas fa-eye"></i> <?= $view ?>
                   </div>
                 </div>
               </li>
             <?php  }
            } else {
              ?>

             <h3> ไม่พบอนิเมะ ที่คุณค้นหา</h3>

           <?php
            } ?>

         </ul>
      <?php
         if ($list_anime) {
      ?>
         <button id="anime-loadmore">Load more ...</button>
         <?php
      }
      ?>
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
  $(document).ready(function() {
    var track_click = 2; //track user click on "load more" button, righ now it is 0 click
    var total_pages = '<?= $pagination['total_page'] ?>';
    var keyword = '<?= $keyword ?>';

    if( track_click >= total_pages ){
      $("#anime-loadmore").hide(0);
    }

    $("#anime-loadmore").click(function(e) { //user clicks on button

      if (track_click <= total_pages) //user click number is still less than total pages
      {
        //post page number and load returned data into result element
        $.get('<?php echo $url_loadmore ?>', {
          'page': track_click,
          'keyword': keyword,
        }, function(data) {

         //  $("#anime-loadmore").show(); //bring back load more button
          $("#list-anime").append(data); //append data received from server

          track_click++; //user click increment on load button

        }).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
          alert(thrownError); //alert with HTTP error
        });

      }

      if(track_click >= total_pages){

        $("#anime-loadmore").hide(0);

      }

      // alert(track_click+" "+total_pages)

    });
  });
</script>