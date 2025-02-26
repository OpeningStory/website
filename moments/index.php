<?php $page = "moments";?>
<?php include "../header.php";?>

<main>

  <section class="hero">
    <div class="container-small">
      <div class="row">
        <div class="col-100">
          <h1>我拍摄的一些照片</h1>
          <p class="medium-margin-top text-small text-color-secondary max-width-400">
            没有在经营网络社交，拍照热情也不高。不是要表达什么，或者记录什么，更说不上美感，不过零星拍了些照片，就搁这儿吧。
          </p>
          <a href="#why" class="small-margin-top text-small">Learn more</a> 
        </div>
      </div>
    </div>
  </section>

  <section id="moments" >
    <div class="gallery-container moments-feed">
        <?php

        $dir_name = "photos/";
        $images = glob($dir_name."*.jpg");
        foreach( array_reverse($images) as $image ) {

        echo '<figure class="diapo">
                <img data-src="http://192.168.1.2:80/web/moments/'.$image.'" alt="'.substr($image, 11).'" class="lazy zoomlightbox-trigger" >
              </figure>';
        }

        ?>
    </div>
  </section>

  <section id="why" class="padded-section">
    <div class="container-small">
      <div class="row">
        <div class="col-100">
          <h2 class="no-margin-top medium-margin-bottom text-color-primary">怎么说呢</h2>
          <p class="text-regular text-color-secondary">
            这相当于一个简单的网络相册，用来备份我分散在手机相册和相机SD卡中的照片。
          </p>
          <p class="medium-margin-top text-color-secondary">
            图片比例为4:3和3:4，原图最大边长为1024px。图像均经过体积压缩，重在留存，不必在意细节。
          </p>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include '../footer.php';?>
