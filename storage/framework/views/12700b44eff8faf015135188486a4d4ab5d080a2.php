<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-weight:bold; font-size:30px; font-family:'Open Sans'">
            Hladnjak
        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12" style=" background-color:rgba(255, 255, 204, 0.9)">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-xl sm:rounded-lg" style="border-radius:25px;background-color:rgba(255, 204, 0, 0.5)">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('hladnjak-live', ['content' => $content])->html();
} elseif ($_instance->childHasBeenRendered('1p6b5Rf')) {
    $componentId = $_instance->getRenderedChildComponentId('1p6b5Rf');
    $componentTag = $_instance->getRenderedChildComponentTagName('1p6b5Rf');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1p6b5Rf');
} else {
    $response = \Livewire\Livewire::mount('hladnjak-live', ['content' => $content]);
    $html = $response->html();
    $_instance->logRenderedChild('1p6b5Rf', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
            <div style="text-align:center">
                <a href="/hladnjak/create" class="btn btn-primary btn-rounded" style = 'background-color:black; border-color:black; color:white; font-family:"Open Sans"; font-weight:bold; text-align:center; width:250px; font-size:20px'> + Dodaj novu namirnicu</a>
            </div>

        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH /home/vagrant/Projects_Laravel/Zavrsni2/resources/views/proba/hladnjak.blade.php ENDPATH**/ ?>