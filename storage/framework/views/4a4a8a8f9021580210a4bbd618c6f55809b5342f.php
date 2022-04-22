<?php $__env->startSection('content'); ?>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Register Client</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="<?php echo e(route('clients.index')); ?>" class="btn btn-sm btn-primary">Back to List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?php echo e(route('clients.store')); ?>" autocomplete="off">
                            <?php echo csrf_field(); ?>
                            <h6 class="heading-small text-muted mb-4">Client Information</h6>
                            <div class="pl-lg-4">
                                <div class="form-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-name">Name</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" placeholder="Name" value="<?php echo e(old('name')); ?>" required autofocus>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <label class="form-control-label" for="input-document_type">Type</label>
                                        <select name="document_type" id="input-document_type" class="form-control form-control-alternative<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" required>
                                            <?php $__currentLoopData = ['V', 'E', 'P', 'RIF']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($document_type == old('document_type')): ?>
                                                    <option value="<?php echo e($document_type); ?>" selected><?php echo e($document_type); ?></option>
                                                <?php else: ?>
                                                    <option value="<?php echo e($document_type); ?>"><?php echo e($document_type); ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label class="form-control-label" for="input-document_id">Document Number</label>
                                        <input type="number" name="document_id" id="input-document_id" class="form-control form-control-alternative<?php echo e($errors->has('document_id') ? ' is-invalid' : ''); ?>" placeholder="Document Number" value="<?php echo e(old('document_id')); ?>" required>
                                        <?php echo $__env->make('alerts.feedback', ['field' => 'document_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    </div>
                                </div>
                                <div class="form-group<?php echo e($errors->has('email') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-email">Email</label>
                                    <input type="email" name="email" id="input-email" class="form-control form-control-alternative<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" placeholder="Email" value="<?php echo e(old('email')); ?>" required>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                                <div class="form-group<?php echo e($errors->has('phone') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-phone">Telephone</label>
                                    <input type="text" name="phone" id="input-phone" class="form-control form-control-alternative<?php echo e($errors->has('phone') ? ' is-invalid' : ''); ?>" placeholder="Telephone" value="<?php echo e(old('phone')); ?>" required>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'phone'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php echo $__env->make('layouts.app', ['page' => 'Register Client', 'pageSlug' => 'clients', 'section' => 'clients'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Adones\Downloads\Inventory-Management-main\resources\views/clients/create.blade.php ENDPATH**/ ?>