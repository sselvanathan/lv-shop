<?php $__env->startSection('content'); ?>
    <!-- Page Content-->
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">Shoppex</h1>
                <div class="list-group">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="list-group-item" href="/?category_id=<?php echo e($category->id); ?>"><?php echo e($category->name); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="carousel slide my-4" id="carouselExampleIndicators" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active"><img class="d-block img-fluid"
                                                               src="https://via.placeholder.com/900x350"
                                                               alt="First slide"/>
                        </div>
                        <div class="carousel-item"><img class="d-block img-fluid"
                                                        src="https://via.placeholder.com/900x350"
                                                        alt="Second slide"/></div>
                        <div class="carousel-item"><img class="d-block img-fluid"
                                                        src="https://via.placeholder.com/900x350"
                                                        alt="Third slide"/></div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="row">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="/?product_id=<?php echo e($product->id); ?>"><img class="card-img-top" src="https://via.placeholder.com/700x400"
                                                                               
                                                  alt="..."/></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="/?product_id=<?php echo e($product->id); ?>"><?php echo e($product->name); ?></a></h4>
                                    <h5><?php echo e($product->price); ?> €</h5>
                                    <p class="card-text"><?php echo e($product->description); ?></p>
                                    <hr />
                                    Category: <?php echo e($product->category->name); ?>

                                </div>
                                <div class="card-footer"><small class="text-muted">★ ★ ★ ★ ☆</small></div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/index.blade.php ENDPATH**/ ?>