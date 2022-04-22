<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Transfers</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="<?php echo e(route('transfer.create')); ?>" class="btn btn-sm btn-primary">
                                Register Transfer
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>Date</th>
                            <th>Title</th>
                            <th>Sender Method</th>
                            <th>Receiver Method</th>
                            <th>Reference</th>
                            <th>Amount Sent</th>
                            <th>Amount Received</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $transfers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transfer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(date('d-m-y', strtotime($transfer->created_at))); ?></td>
                                    <td style="max-width:150px"><?php echo e($transfer->title); ?></td>
                                    <td><a href="<?php echo e(route('methods.show', $transfer->sender_method)); ?>"><?php echo e($transfer->sender_method->name); ?></a></td>
                                    <td><a href="<?php echo e(route('methods.show', $transfer->receiver_method)); ?>"><?php echo e($transfer->receiver_method->name); ?></a></td>
                                    <td><?php echo e($transfer->reference); ?></td>
                                    <td>$<?php echo e($transfer->sended_amount); ?></td>
                                    <td>$<?php echo e($transfer->received_amount); ?></td>
                                    <td class="td-actions text-right">
                                        <form action="<?php echo e(route('transfer.destroy', $transfer)); ?>" method="post" class="d-inline">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button type="button" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Delete Transfer" onclick="confirm('Are you sure you want to delete this transfer? There will be no record left.') ? this.parentElement.submit() : ''">
                                                <i class="tim-icons icon-simple-remove"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                        <?php echo e($transfers->links()); ?>

                    </nav>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['page' => 'Transfers', 'pageSlug' => 'transfers', 'section' => 'transactions'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Adones\Downloads\Inventory-Management-main\resources\views/transfers/index.blade.php ENDPATH**/ ?>