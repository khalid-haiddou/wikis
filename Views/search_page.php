<div class="container" data-aos="fade-up">
        <div class="row g-5">
<?php foreach($getwikis as $wiki){ ?>
          <div class="col-lg-4">
            <div class="post-entry-1 lg">
              <a href="single-post.html"><img src="../assets/assets1/img/khalidsc.webp" alt="" class="img-fluid"></a>
              <div class="post-meta"><span class="date"><?php echo $wiki['category']; ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $wiki['creationDate']; ?></span></div>
              <h2><a href="single-post.html"><?php echo $wiki['title']; ?></a></h2>
              <p class="mb-4 d-block"><?php echo $wiki['description']; ?></p>

              <div class="d-flex align-items-center author">
                <div class="name">
                  <h3 class="m-0 p-0"><?php echo $wiki['author']; ?></h3>
                </div>
              </div>
            </div>

          </div>
          <?php } ?>

          <div class="col-lg-8">
            <div class="row g-5">
              <!-- Trending Section -->
            </div>
          </div>
        </div> <!-- End .row -->
</div>