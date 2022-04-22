<?php $__env->startSection('content'); ?>
    <div class="container-fluid mt--7">
    <?php echo $__env->make('alerts.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">New Receipt</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="<?php echo e(route('receipts.index')); ?>" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?php echo e(route('receipts.store')); ?>" autocomplete="off">
                            <?php echo csrf_field(); ?>

                            <h6 class="heading-small text-muted mb-4">Receipt Information</h6>
                            <div class="pl-lg-4">
                                <input type="hidden" name="user_id" value="<?php echo e(Auth::id()); ?>">

                                <div class="form-group<?php echo e($errors->has('title') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-title">Title</label>
                                    <input type="text" name="title" id="input-title" class="form-control form-control-alternative<?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>" placeholder="Title" value="<?php echo e(old('title')); ?>" required autofocus>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'title'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>

                                <div class="form-group<?php echo e($errors->has('client_id') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-provider">Provider</label>
                                    <select name="provider_id" id="input-provider" class="form-select form-control-alternative<?php echo e($errors->has('client') ? ' is-invalid' : ''); ?>">
                                        <option value="">Not Specified</option>
                                        <?php $__currentLoopData = $providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($provider['id'] == old('provider_id')): ?>
                                                <option value="<?php echo e($provider['id']); ?>" selected><?php echo e($provider['name']); ?></option>
                                            <?php else: ?>
                                                <option value="<?php echo e($provider['id']); ?>"><?php echo e($provider['name']); ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'client_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">Continue</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script>
        new SlimSelect({
            select: '.form-select'
        })
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', ['page' => 'New Receipt', 'pageSlug' => 'receipts', 'section' => 'inventory'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Adones\Downloads\Inventory-Management-main\resources\views/inventory/receipts/create.blade.php ENDPATH**/ ?>