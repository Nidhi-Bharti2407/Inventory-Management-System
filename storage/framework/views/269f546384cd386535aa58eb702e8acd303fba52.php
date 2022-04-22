<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="card ">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                        <h4 class="card-title">Receipts</h4>
                    </div>
                    <div class="col-4 text-right">
                        <a href="<?php echo e(route('receipts.create')); ?>" class="btn btn-sm btn-primary">New Receipt</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="">
                    <table class="table">
                        <thead>
                            <th>Date</th>
                            <th>Title</th>
                            <th>Provider</th>
                            <th>products</th>
                            <th>Stock</th>
                            <th>Defective Stock</th>
                            <th>Status</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $receipts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $receipt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(date('d-m-y', strtotime($receipt->created_at))); ?></td>
                                    <td style="max-width:150px"><?php echo e($receipt->title); ?></td>
                                    <td>
                                        <?php if($receipt->provider_id): ?>
                                            <a href="<?php echo e(route('providers.show', $receipt->provider)); ?>"><?php echo e($receipt->provider->name); ?></a>
                                        <?php else: ?>
                                            N/A
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($receipt->products->count()); ?></td>
                                    <td><?php echo e($receipt->products->sum('stock')); ?></td>
                                    <td><?php echo e($receipt->products->sum('stock_defective')); ?></td>
                                    <td>
                                        <?php if($receipt->finalized_at): ?>
                                            FINALIZED
                                        <?php else: ?>
                                            <span style="color:red; font-weight:bold;">TO FINALIZE</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="td-actions text-right">
                                        <?php if($receipt->finalized_at): ?>
                                            <a href="<?php echo e(route('receipts.show', ['receipt' => $receipt])); ?>" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Ver Receipt">
                                                <i class="tim-icons icon-zoom-split"></i>
                                            </a>
                                        <?php else: ?>
                                            <a href="<?php echo e(route('receipts.show', ['receipt' => $receipt])); ?>" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Receipt">
                                                <i class="tim-icons icon-pencil"></i>
                                            </a>
                                        <?php endif; ?>
                                        <form action="<?php echo e(route('receipts.destroy', $receipt)); ?>" method="post" class="d-inline">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button type="button" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Delete Receipt" onclick="confirm('Estás seguro que quieres eliminar este recibo? Todos sus registros serán eliminados permanentemente, si ya está finalizado el stock de los productos permanecerán.') ? this.parentElement.submit() : ''">
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
                    <?php echo e($receipts->links()); ?>

                </nav>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['page' => 'Receipts', 'pageSlug' => 'receipts', 'section' => 'inventory'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Adones\Downloads\Inventory-Management-main\resources\views/inventory/receipts/index.blade.php ENDPATH**/ ?>