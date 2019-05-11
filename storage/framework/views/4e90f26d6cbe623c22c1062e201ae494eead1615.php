<?php $__env->startSection('content'); ?>

  	<!--== Program Gallery Area Start ==-->
    <section class="section" id="program-gallery">
      <div class="container">

        <div class="row">

          <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <!--== Single Program ==-->
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="single-program-gallery">
              <img src="assets/img/program/3.jpg" class="img-fluid mx-auto d-block" alt="Single Program" />
              <div class="program-gallery-overley">
                <a href="/admission/<?php echo e($program->PROGRAM_ID); ?>"><?php echo e($program->PROGRAM_NAME); ?></a>
              </div>
            </div>
          </div>
          <!--== Single Program ==-->
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          <!--== Single Program ==-->
          <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="single-program-gallery">
              <img src="assets/img/program/3.jpg" class="img-fluid mx-auto d-block" alt="Single Program" />
              <div class="program-gallery-overley">
                <a href="#">Graduation</a>
              </div>
            </div>
          </div> -->
          <!--== Single Program ==-->

        </div>
      </div>
    </section>
    <!--== Program Gallery Area End ==-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>