<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-weight:bold; font-size:30px; font-family:'Open Sans'">
            <?php echo e($item->food_name); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12" style=" justify-content:center; text-align:center; background-color:rgba(255, 255, 204, 0.9)">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-xl sm:rounded-lg" style="border-radius:25px;background-color:rgba(255, 204, 0, 0.55);">
                <h1 style="font-weight:bold; font-size:30px; font-family:'Ribeye Marrow'">Kategorija: <?php echo e($item->category); ?></br></br></h1>
                <h1 style="font-weight:bold; font-size:30px; font-family:'Ribeye Marrow'">Količina: <?php echo e($item->quantity); ?>

                <?php echo e($item->measurement_unit); ?></br></br></h1>
            </div>
            <hr>
            <div style="text-align:center; margin-top: 30px">
                <a href="/hladnjak/<?php echo e($item->id); ?>/edit" class="btn btn-primary btn-rounded" style = 'background-color:rgba(255, 204, 0, 0.55) ;border-color:black;  color:black; font-family:"Open Sans"; font-weight:bold; text-align:center;  font-size:20px; float:left; width:150px;' > Uredi </a>
            </div>
            <?php echo Form::open(['route' => ['hladnjak.destroy', $item->id], 'method' => 'POST', 'class'=> 'pull-right']); ?>

                <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                <?php echo e(Form::submit('Obriši', ['class' => 'btn btn-danger btn-rounded' , 'style' => 'background-color:red; border-color:black; color:black; font-family:"Open Sans"; font-weight:bold; width:150px; font-size:20px; float:right;color:white'])); ?>

            <?php echo Form::close(); ?>

        </div>
        <div style="text-align:center; margin-top: 150px">
                <a href="/hladnjak" class="btn btn-primary btn-rounded" style = 'background-color:rgba(255, 204, 0, 0.55) ;border-color:black;  color:black; font-family:"Open Sans"; font-weight:bold; text-align:center;  font-size:20px' > Natrag </a>
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH /home/vagrant/Projects_Laravel/Zavrsni2/resources/views/proba/hladnjak_show.blade.php ENDPATH**/ ?>