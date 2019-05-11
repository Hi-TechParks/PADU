<?php $__env->startSection('content'); ?>

  	<!--== Faculty Member Area Start ==-->
    <section class="section" id="academic-page">
      <div class="container">

        <!--== Page Title Area ==-->
        <div class="row sub-page-title-box">
          <div class="col-md-6 col-xs-12">
            <h2 class="sub-page-title">Honorable <span>Faculty Member</span></h2>
          </div>
          <div class="col-md-6 col-xs-12">
            <!-- <form class="form-inline">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              <button class="btn" type="submit">Search</button>
            </form> -->
            <form action="<?php echo e(url('/academic')); ?>" method="get" class="">
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" name="full_name" placeholder="Full Name">
                </div>
                <div class="col">
                  <input type="text" class="form-control" name="designation" placeholder="Designation">
                </div>
                <div class="col">
                  <button type="submit" class="btn">Search</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!--== Page Title Area ==-->

        <div class="row">
          <?php $__currentLoopData = $chairmans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chairman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <!--== Single Faculty Member ==-->
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 academic-box">
            <div class="single-academic-box chairman-box">
              <div class="single-academic-image">
                <img src="/uploads/images/profile/<?php echo e($chairman->PROFILE_IMAGE_PATH); ?>" alt="Profile">
              </div>
              <ul class="single-academic-details">
                <li><span><i class="fas fa-user"></i></span><?php echo e($chairman->name); ?></li>
                <li><span><i class="fas fa-graduation-cap"></i></span><?php echo e($chairman->QUALIFICATION); ?></li>
                <li><span><i class="fas fa-phone"></i></span><?php echo e($chairman->CONTACT_PHONE); ?></li>
                <li><span><i class="fas fa-envelope"></i></span><?php echo e($chairman->email); ?></li>

                <div class="single-academic-level">
                  <?php echo e($chairman->DESIGNATION_NAME); ?>

                </div>
              </ul>
              <div class="single-academic-footer">
                <a href="/profile/<?php echo e($chairman->id); ?>">Details <span><i class="fas fa-arrow-right"></i></span></a>
              </div>
            </div>
          </div>
          <!--== Single Faculty Member ==-->
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          <?php $__currentLoopData = $faculties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <!--== Single Faculty Member ==-->
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 academic-box">
            <div class="single-academic-box">
              <div class="single-academic-image">
                <img src="/uploads/images/profile/<?php echo e($faculty->PROFILE_IMAGE_PATH); ?>" alt="Profile">
              </div>
              <ul class="single-academic-details">
                <li><span><i class="fas fa-user"></i></span><?php echo e($faculty->name); ?></li>
                <li><span><i class="fas fa-graduation-cap"></i></span><?php echo e($faculty->QUALIFICATION); ?></li>
                <li><span><i class="fas fa-phone"></i></span><?php echo e($faculty->CONTACT_PHONE); ?></li>
                <li><span><i class="fas fa-envelope"></i></span><?php echo e($faculty->email); ?></li>

                <div class="single-academic-level">
                  <?php echo e($faculty->DESIGNATION_NAME); ?>

                </div>
              </ul>
              <div class="single-academic-footer">
                <a href="/profile/<?php echo e($faculty->id); ?>">Details <span><i class="fas fa-arrow-right"></i></span></a>
              </div>
            </div>
          </div>
          <!--== Single Faculty Member ==-->
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          <!--== Single Faculty Member ==-->
          <!-- <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 academic-box">
            <div class="single-academic-box">
              <div class="single-academic-image">
                <img src="assets/img/academic/profff.jpg">
              </div>
              <ul class="single-academic-details">
                <li><span><i class="fas fa-user"></i></span>Dr. Mobasser Monem</li>
                <li><span><i class="fas fa-graduation-cap"></i></span>PhD (University of London, UK)</li>
                <li><span><i class="fas fa-book-reader"></i></span>Research Area: Lorem Ipsum is simply dummy text of the printing and typeset.</li>
                <li><span><i class="fas fa-phone"></i></span>880-2-9661900/6667 (Office)</li>
                <li><span><i class="fas fa-envelope"></i></span>mobassermonem@du.ac.bd</li>

                <div class="single-academic-level">
                  Assistant Professor
                </div>
              </ul>
              <div class="single-academic-footer">
                <a href="#">Details <span><i class="fas fa-arrow-right"></i></span></a>
              </div>
            </div>
          </div> -->
          <!--== Single Faculty Member ==-->
        </div>

        <!--== Pagination Area ==-->
        <div class="row">
          <div class="col-md-12 col-xs-12">
              <div class="mx-auto d-block d-flex">
                <nav aria-label="..." class="mx-auto d-block">
                  <?php echo e($faculties->links()); ?>

                </nav>
              </div>
          </div>
        </div>
        <!--== Pagination Area ==-->

      </div>
    </section>
    <!--== Faculty Member Area End ==-->


    <!--== Our Stuffs Area Start ==-->
    <section class="section" id="alumni-page">
      <div class="container">

        <!--== Page Title Area ==-->
        <div class="row sub-page-title-box">
          <div class="col-md-8">
            <h2 class="sub-page-title">Our <span>Stuffs</span></h2>
          </div>
          <div class="col-md-4">
            
          </div>
        </div>
        <!--== Page Title Area ==-->

        <div class="owl-carousel owl-theme">

          <?php $__currentLoopData = $stuffs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stuff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <!--== Single Alumni Box ==-->
          <div class="alumni-box">
            <div class="single-alumni-box">
              <div class="single-alumni-image">
                <img src="/uploads/images/profile/<?php echo e($stuff->PROFILE_IMAGE_PATH); ?>" alt="Profile">
              </div>
              <ul class="single-alumni-details">
                <li><span><i class="fas fa-user"></i></span><?php echo e($stuff->name); ?></li>
                <li><span><i class="fas fa-graduation-cap"></i></span><?php echo e($stuff->QUALIFICATION); ?></li>
                <li><span><i class="fas fa-phone"></i></span><?php echo e($stuff->CONTACT_PHONE); ?></li>
                <li><span><i class="fas fa-envelope"></i></span><?php echo e($stuff->email); ?></li>
              </ul>
            </div>
          </div>
          <!--== Single Alumni Box ==-->
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          <!--== Single Alumni Box ==-->
          <!-- <div class="alumni-box">
            <div class="single-alumni-box">
              <div class="single-alumni-image">
                <img src="assets/img/students/student1.jpg">
              </div>
              <ul class="single-alumni-details">
                <li><span><i class="fas fa-user"></i></span>MD. Diptto Islail</li>
                <li><span><i class="fas fa-swatchbook"></i></span>10th Batch</li>
                <li><span><i class="fas fa-industry"></i></span>Asst. Engg, BCC.</li>
                <li><span><i class="fas fa-envelope"></i></span>dipto@gmail.com</li>
                <li><span><i class="fas fa-phone"></i></span>01712345678</li>
              </ul>
            </div>
          </div> -->
          <!--== Single Alumni Box ==-->

        </div>

      </div>
    </section>
    <!--== Our Stuffs Area End ==-->


    <!--== Our Library Area Start ==-->
    <section class="section pd-btm" id="library">
      <div class="container">
        <div class="row sub-page-title-box">
          <div class="col-md-8">
            <h2 class="sub-page-title">Our <span>Library</span></h2>
          </div>
          <div class="col-md-4">
            
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="library-image">
              <img src="assets/img/library.jpg" alt="library">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="library-details">
              <p>It is a long established fact that a reader will be 
              distracted by the readable content of a page when 
              looking at its layout. The point of using Lorem Ipsum 
              is that it has a more-or-less normal distribution 
              of letters, as opposed to</p>

              <ul>
                <li><span><i class="fas fa-book"></i></span>30,00,689+ books</li>
                <li><span><i class="far fa-clock"></i></span>9:00 am - 5:00pm</li>
                <li><span><i class="fas fa-phone"></i></span>09-9513201</li>
                <li><span><i class="fas fa-envelope"></i></span>padu_register@du.com</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== Our Library Area End ==-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>