<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <div style="justify-content:center; text-align:center">
            <h1 class="font-semibold text-xl text-gray-800 leading-tight" style="font-weight:bold; font-size:30px; font-family:'Ribeye Marrow';">
                <u><?php echo e($ing->title); ?></u>
                <img style="margin-left:auto; margin-right:auto; width:50%;" src="/storage/cover_images/<?php echo e($ing->cover_image); ?>">
            </h1>
            <h3 class="font-semibold text-xl text-gray-800 leading-tight">
                <b style="font-weight:bold; font-size:30px; font-family:'Ribeye Marrow'">Kategorija:</b> <i style="font-weight:bold; font-size:25px; text-transform:capitalize;font-family:'Open Sans'"><?php echo e($ing->rec_category); ?></i>  
            </h3>
            <h3>
                <?php if($ing->measurement == 'min'): ?>
                    <b style="font-weight:bold; font-size:30px; font-family:'Ribeye Marrow'">Vrijeme izrade: </b> <i style="font-weight:bold; font-size:25px; text-transform:capitalize; font-family:'Open Sans'"><?php echo e((int)$ing->time); ?><?php echo e($ing->measurement); ?></i> <br/>
                <?php else: ?>
                    <b style="font-weight:bold; font-size:30px; font-family:'Ribeye Marrow'">Vrijeme izrade: </b> <i style="font-weight:bold; font-size:25px; text-transform:capitalize; font-family:'Open Sans'"><?php echo e($ing->time); ?><?php echo e($ing->measurement); ?></i> <br/>
                <?php endif; ?>
            <b style="font-weight:bold; font-size:30px; font-family:'Ribeye Marrow'">Porcije: </b> <i style="font-weight:bold; font-size:25px; text-transform:capitalize; font-family:'Open Sans'"><?php echo e($ing->servings); ?></i> <br/>
            <p><b style="font-weight:bold; font-size:30px; font-family:'Ribeye Marrow'">Namirnice: </b>  <?php $__currentLoopData = $ing->ingredients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <i style="font-weight:bold; font-size:25px; font-family:'Open Sans'"> <?php echo e($in->pivot->food->food_name); ?>:<?php echo e($in->pivot->quantity); ?><?php echo e($in->pivot->measurement_unit); ?>, </i>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                </p>
            </h3>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="py-12" style=" background-color:rgba(255, 255, 204, 0.9)">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg" style="font-weight:bold; font-size:25px; text-align:center; border-radius:25px;background-color:rgba(255, 204, 0, 0.55);"> 
                <div style="background-color:rgba(255, 255, 204, 0.9);margin-top:50px;border:2px dashed black; border-radius:25px"><?php echo $ing->instructions; ?></div></br></br>
            </div>
            <div style="margin-top:20px"><small style="font-size:17px;"><b>Napisao: <i style="font-family:'Open Sans'"><?php echo e($ing->author); ?></i></b></br></br></small></div>
            <hr>
            <?php if(Auth::user()->id == $ing->author_id): ?>
                <div style="text-align:center; margin-top: 30px">
                    <a href="/proba/<?php echo e($ing->id); ?>/edit" class="btn btn-primary btn-rounded" style = 'background-color:rgba(255, 204, 0, 0.55) ;border-color:black;  color:black; font-family:"Open Sans"; font-weight:bold; text-align:center;  font-size:20px; float:left; width:150px;' > Uredi </a>
                </div>
                <?php echo Form::open(['route' => ['proba.destroy', $ing->id], 'method' => 'POST', 'class'=> 'pull-right', 'style' => 'float:right']); ?>

                    <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                    <?php echo e(Form::submit('Obriši', ['class' => 'btn btn-danger btn-rounded' , 'style' => 'background-color:red; border-color:black; color:black; font-family:"Open Sans"; font-weight:bold; width:150px; font-size:20px; float:right; color:white'])); ?>

                <?php echo Form::close(); ?>

            <?php endif; ?>
        </div>
        <div style="text-align:center; margin-top: 150px">
                <a href="/proba" class="btn btn-primary btn-rounded" style = 'background-color:rgba(255, 204, 0, 0.55) ;border-color:black;  color:black; font-family:"Open Sans"; font-weight:bold; text-align:center;  font-size:20px' > Natrag </a>
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH /home/vagrant/Projects_Laravel/Zavrsni2/resources/views/proba/proba_show.blade.php ENDPATH**/ ?>