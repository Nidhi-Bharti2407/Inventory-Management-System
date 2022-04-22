<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Register Transfer</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="<?php echo e(route('transfer.index')); ?>" class="btn btn-sm btn-primary">
                                Back to List
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo e(route('transfer.store')); ?>" autocomplete="off">
                        <?php echo csrf_field(); ?>
                        <h6 class="heading-small text-muted mb-4">Transfer Information</h6>
                        <div class="pl-lg-4">
                            <div class="form-group<?php echo e($errors->has('title') ? ' has-danger' : ''); ?>">
                                <label class="form-control-label" for="input-title">Title</label>
                                <input type="text" name="title" id="input-title" class="form-control form-control-alternative<?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>" placeholder="Title" value="<?php echo e(old('title')); ?>" required autofocus>
                                <?php echo $__env->make('alerts.feedback', ['field' => 'title'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('sender_method_id') ? ' has-danger' : ''); ?>">
                                <label class="form-control-label" for="input-method">Sender Method</label>
                                <select name="sender_method_id" id="input-method" class="form-select form-control-alternative<?php echo e($errors->has('sender_method_id') ? ' is-invalid' : ''); ?>" required>
                                    <?php $__currentLoopData = $methods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment_method): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($payment_method['id'] == old('sender_method_id')): ?>
                                            <option value="<?php echo e($payment_method['id']); ?>" selected><?php echo e($payment_method['name']); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($payment_method['id']); ?>"><?php echo e($payment_method['name']); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php echo $__env->make('alerts.feedback', ['field' => 'sender_method_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('receiver_method_id') ? ' has-danger' : ''); ?>">
                                <label class="form-control-label" for="input-method">Receiver Method</label>
                                <select name="receiver_method_id" id="input-method" class="form-select2 form-control-alternative<?php echo e($errors->has('receiver_method_id') ? ' is-invalid' : ''); ?>" required>
                                    <?php $__currentLoopData = $methods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment_method): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($payment_method['id'] == old('receiver_method_id')): ?>
                                            <option value="<?php echo e($payment_method['id']); ?>" selected><?php echo e($payment_method['name']); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($payment_method['id']); ?>"><?php echo e($payment_method['name']); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php echo $__env->make('alerts.feedback', ['field' => 'receiver_method_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('sended_amount') ? ' has-danger' : ''); ?>">
                                <label class="form-control-label" for="input-sended_amount">Amount Sent</label>
                                <input type="number" step=".01" name="sended_amount" id="input-sended_amount" class="form-control form-control-alternative" placeholder="Amount Sent" value="<?php echo e(old('sended_amount')); ?>" min="0" required>
                                <?php echo $__env->make('alerts.feedback', ['field' => 'amount'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('received_amount') ? ' has-danger' : ''); ?>">
                                <label class="form-control-label" for="input-received_amount">Amount Received</label>
                                <input type="number" step=".01" name="received_amount" id="input-received_amount" class="form-control form-control-alternative" placeholder="Amount Received" value="<?php echo e(old('received_amount')); ?>" min="0" required>
                                <?php echo $__env->make('alerts.feedback', ['field' => 'received_amount'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('reference') ? ' has-danger' : ''); ?>">
                                <label class="form-control-label" for="input-reference">Reference</label>
                                <input type="text" name="reference" id="input-reference" class="form-control form-control-alternative<?php echo e($errors->has('reference') ? ' is-invalid' : ''); ?>" placeholder="Reference" value="<?php echo e(old('reference')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'reference'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script>
        new SlimSelect({
            select: '.form-select'
        })
        new SlimSelect({
            select: '.form-select2'
        })
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', ['page' => 'Register Transfer', 'pageSlug' => 'transfers', 'section' => 'transactions'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Adones\Downloads\Inventory-Management-main\resources\views/transfers/create.blade.php ENDPATH**/ ?>