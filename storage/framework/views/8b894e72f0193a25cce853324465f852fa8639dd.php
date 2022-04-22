<?php $__env->startSection('content'); ?>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">New Provider</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="<?php echo e(route('providers.index')); ?>" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?php echo e(route('providers.store')); ?>" autocomplete="off">
                            <?php echo csrf_field(); ?>

                            <h6 class="heading-small text-muted mb-4">Provider Information</h6>
                            <div class="pl-lg-4">
                                <div class="form-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-name">Name</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" placeholder="Name" value="<?php echo e(old('name')); ?>" required autofocus>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>

                                <div class="form-group<?php echo e($errors->has('description') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-description">Description</label>
                                    <input type="text" name="description" id="input-description" class="form-control form-control-alternative<?php echo e($errors->has('description') ? ' is-invalid' : ''); ?>" placeholder="Description" value="<?php echo e(old('description')); ?>" required>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'description'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>

                                <div class="form-group<?php echo e($errors->has('email') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-email">Email</label>
                                    <input type="email" name="email" id="input-email" class="form-control form-control-alternative<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" placeholder="Email" value="<?php echo e(old('email')); ?>" required>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                                <div class="form-group<?php echo e($errors->has('phone') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-phone">Telephone</label>
                                    <input type="phone" name="phone" id="input-phone" class="form-control form-control-alternative<?php echo e($errors->has('phone') ? ' is-invalid' : ''); ?>" placeholder="Telephone" value="<?php echo e(old('phone')); ?>" required>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'phone'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                                <div class="form-group<?php echo e($errors->has('paymentinfo') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-paymentinfo">Payment information</label>
                                    <textarea name="paymentinfo" id="input-paymentinfo" class="form-control form-control-alternative<?php echo e($errors->has('paymentinfo') ? ' is-invalid' : ''); ?>" placeholder="Payment information" value="<?php echo e(old('paymentinfo')); ?>" required></textarea>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'paymentinfo'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['page' => 'New Provider', 'pageSlug' => 'provider', 'section' => 'providers'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Adones\Downloads\Inventory-Management-main\resources\views/providers/create.blade.php ENDPATH**/ ?>