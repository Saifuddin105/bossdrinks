<div id="myFirstCarousel" class="carousel slide " data-ride="carousel">
  <div class="carousel-inner">
    <!-- oreach($rorders as $data) -->
    <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="carousel-item <?php if($index==0): ?> <?php echo e('active'); ?> <?php endif; ?>">
      <div class="slide-<?php echo e($index+1); ?>">
        <div class="row FirstCarousel">
          <div class="text-1-div text-center col-lg-7 col-12 py-1">
            <h2 class="text-1 font-weight-bold">
              <?php echo e($slider->details_text); ?>

            </h2>
            <!-- <h4 class="text-12">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Voluptate,
                                    ad.</h4> -->
            <a href="shop.html"><button id="btn-1" type="button" class="btn btn-light font-weight-bold ">SHOP
                NOW</button></a>

          </div>

          <div class="imgDiv col-lg-5 col-12 mt-3 text-right">
            <img class="img1" src="<?php echo e(asset('assets/images/sliders/'.$slider->photo)); ?>" alt="something">
          </div>
        </div>

      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <ol class="carousel-indicators">
      <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li data-target="#myFirstCarousel" data-slide-to="<?php echo e($index); ?>" class="<?php if($index==0): ?> <?php echo e('active'); ?> <?php endif; ?>"></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>

    <a href="#myFirstCarousel" class="carousel-control-prev" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" area-hidden="true"></span>
    </a>
    <a href="#myFirstCarousel" class="carousel-control-next" role="button" data-slide="next">
      <span class="carousel-control-next-icon" area-hidden="true"></span>
    </a>
  </div>
</div><?php /**PATH E:\RF\laragon\www\bossdrinks\project\resources\views/frontend/layouts/partials/carousel.blade.php ENDPATH**/ ?>