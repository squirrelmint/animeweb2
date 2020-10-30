

<?PHP
foreach ($list_anime as $val) {
  // echo '<pre>' . print_r($val, true) . '</pre>';
  // die;
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

      <a onclick="goView('<?= ($val['movie_id']) ?>','<?= $url_name ?>','0')">

        <img src="<?= $movie_picture ?>">
      </a>
    </div>
    <div class="title-in">
      <h2>
        <a onclick="goView('<?= ($val['movie_id']) ?>','<?= $url_name ?>','0')" tabindex="-1"><?= $val['movie_thname'] ?></a>
      </h2>
      <div class="anime-score">
        <i class="fas fa-star"></i> <?= $val['movie_ratescore'] ?>
        <span class="line-small">|</span>
        <i class="fas fa-eye"></i> 100
      </div>

    </div>
  </li>
<?php  } ?>