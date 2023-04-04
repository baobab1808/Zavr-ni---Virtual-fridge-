<style>
    label{
        font-family:'Ribeye Marrow';
        font-weight: bold;
        font-size: 30px;
        
    }
</style>

<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-weight:bold; font-size:30px; font-family:'Open Sans'">
            Nova namirnica
        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12" style="display:flex; justify-content:center; text-align:center; background-color:rgba(255, 255, 204, 0.9)">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg" style="border-radius:25px;background-color:rgba(255, 204, 0, 0.55);">
                <!--<livewire:ingredients-select
                    name="ingredients_id"
                    placeholder="Odaberi kategoriju" // optional
                />-->
                <?php echo Form::open(['route' => 'hladnjak.store', 'method' => 'POST']); ?>

                    <div class = "form-group" style="width:350px">
                        <?php echo e(Form::label('category', 'Kategorija')); ?>&nbsp;&nbsp;
                        <!--<?php echo e(Form::text('food_name', '', ['class' => 'form-control', 'placeholder'=> 'Namjernica'])); ?>-->
                        <?php echo e(Form::select('category',[
                            'brašno' => 'Brašno',
                            'grickalice' => 'Grickalice',
                            'jaja' => 'Jaja',
                            'kiseliš' => 'Kiseliš',
                            'kruh' => 'Kruh',
                            'masti, ulja i ocat' => 'Masti, ulja i ocat',
                            'meso' => 'Meso',
                            'mliječni proizvodi' => 'Mliječni proizvodi',
                            'namazi' => 'Namazi',
                            'orašasti plodovi' => 'Orašasti plodovi',
                            'pića' => 'Pića',
                            'povrće' => 'Povrće',
                            'riba' => 'Riba',
                            'riža' => 'Riža',
                            'slatko' => 'Slatko',
                            'suhomesnati proizvodi' => 'Suhomesnati proizvodi',
                            'tjestenina' => 'Tjestenina',
                            'umaci' => 'Umaci',
                            'voće' => 'Voće',
                            'začini' => 'Začini',
                            'žitarice' => 'Žitarice',
                            'ostalo' => 'Ostalo',], '', ['name' =>'category', 'id'=>'category','class' => 'selectpicker form-control', 'placeholder'=> 'Kategorija', 'size'=>'1' , 'style' => 'border-radius:25px; border: 2px solid black;']
                        )); ?>

                    </div>

                    <div class = "form-group">
                        <?php echo e(Form::label('food_name', 'Namirnica')); ?><br/>
                        <select name ='food_name', id='food_name',class = 'selectpicker form-control', placeholder='Namjernica', size="1", style = 'border-radius:25px; border: 2px solid black;'>
                                <?php
                                    $cat = null;
                                ?>
                                <option value = "" disable selected hidden> Odaberi namirnicu</option>
                                <?php $__currentLoopData = $ing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($in['category'] != $cat): ?>
                                        <?php if($cat !== null): ?>
                                            </optgroup>
                                        <?php endif; ?>
                                        <?php ($cat = $in['category']); ?>
                                        <optgroup label = "<?php echo e($in->category); ?>">
                                    <?php endif; ?>
                                    <option value = "<?php echo e($in->food_name); ?>"><?php echo e($in->food_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </optgroup>
                        </select>
                    </div>
                    <div class ="form-group">
                        <?php echo e(Form::label('quantity', 'Količina')); ?>

                        <?php echo e(Form::number('quantity', '', ['class' => 'form-control', 'placeholder'=> 'Količina', 'step' => '0.01', 'style' => 'border-radius:25px; border: 2px solid black;'])); ?>

                        <?php echo e(Form::select('measurement_unit',[
                            'kg' => 'kg',
                            'g' => 'g',
                            'L' => 'L',
                            'mL' => 'mL',
                            'kom' => 'kom'
                            ],'', ['id'=>'measurement_unit','class' => 'selectpicker form-control', 'placeholder'=> 'Mjerna jedinica', 'style' => 'border-radius:25px; border: 2px solid black;', 'size' => '1'])); ?>

                    </div>
                    <?php echo e(Form::submit('Spremi', ['class' => 'btn btn-primary btn-rounded', 'style' => 'background-color:black; border-color:black; color:white; font-family:"Open Sans"; font-weight:bold; width:150px; font-size:20px;'])); ?>

                <?php echo Form::close(); ?>

            </div>
            <div style="text-align:center; margin-top: 30px">
                <a href="/hladnjak" class="btn btn-primary btn-rounded" style = 'background-color:rgba(255, 204, 0, 0.55) ;border-color:black;  color:black; font-family:"Open Sans"; font-weight:bold; text-align:center;  font-size:20px' > Natrag </a>
            </div>
        </div>
    </div>


    <script>
        document.getElementById('category').addEventListener('click', onClickHandler);
        document.getElementById('category').addEventListener('mousedown', onMouseDownHandler);
        document.getElementById('food_name').addEventListener('click', onClickHandler);
        document.getElementById('food_name').addEventListener('mousedown', onMouseDownHandler);
        document.getElementById('measurement_unit').addEventListener('click', onClickHandler);
        document.getElementById('measurement_unit').addEventListener('mousedown', onMouseDownHandler);
        

        function onMouseDownHandler(e){
            var el = e.currentTarget;
            
            if(el.hasAttribute('size') && el.getAttribute('size') == '1'){
                e.preventDefault();    
            }
        }
        function onClickHandler(e) {
            var el = e.currentTarget; 

            if (el.getAttribute('size') == '1') {
                el.setAttribute('size', '4');
            }
            else {
                el.setAttribute('size', '1');
            }
        
        }
    </script>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH /home/vagrant/Projects_Laravel/Zavrsni2/resources/views/proba/hladnjak_create.blade.php ENDPATH**/ ?>