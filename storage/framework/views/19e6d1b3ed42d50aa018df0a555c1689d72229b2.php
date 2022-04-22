<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Payments</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="<?php echo e(route('transactions.create', ['type' => 'payment'])); ?>" class="btn btn-sm btn-primary">New Payment</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">Date</th>
                                <th scope="col">Provider</th>
                                <th scope="col">Title</th>
                                <th scope="col">Method</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Reference</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td> <?php echo e(date('d-m-y', strtotime($transaction->created_at))); ?></td>
                                        <td><a href="<?php echo e(route('providers.show', $transaction->provider)); ?>"><?php echo e($transaction->provider->name); ?></a></td>
                                        <td> <?php echo e($transaction->title); ?></td>
                                        <td><a href="<?php echo e(route('methods.show', $transaction->method)); ?>"><?php echo e($transaction->method->name); ?></a></td>
                                        <td><?php echo e(format_money($transaction->amount)); ?></td>
                                        <td><?php echo e($transaction->reference); ?></td>
                                        <td></td>
                                        <td class="td-actions text-right">
                                            <a href="<?php echo e(route('transactions.edit', $transaction)); ?>" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Payment">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a>
                                            <form action="<?php echo e(route('transactions.destroy', $transaction)); ?>" method="post" class="d-inline">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                                <button type="button" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Delete Payment" onclick="confirm('Are you sure you want to delete this payment? There will be no record left.') ? this.parentElement.submit() : ''">
                                                    <i class="tim-icons icon-simple-remove"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                        <?php echo e($transactions->links()); ?>

                    </nav>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['page' => 'Payments', 'pageSlug' => 'payments', 'section' => 'transactions'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Adones\Downloads\Inventory-Management-main\resources\views/transactions/payment/index.blade.php ENDPATH**/ ?>