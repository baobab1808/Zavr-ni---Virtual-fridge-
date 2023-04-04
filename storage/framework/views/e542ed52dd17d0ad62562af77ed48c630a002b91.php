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
            Novi recept
        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12" style="display:flex; justify-content:center; text-align:center; background-color:rgba(255, 255, 204, 0.9)">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
            <div class=" overflow-hidden shadow-xl sm:rounded-lg" style="border-radius:25px;background-color:rgba(255, 204, 0, 0.55)">
                <!--<livewire:ingredients-select
                    name="ingredients_id"
                    placeholder="Odaberi kategoriju" // optional
                />-->
            
                <?php echo Form::open(['id'=>'form','route' => 'proba.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

                <table style="display:flex; justify-content:center; margin-top:40px; text-align:center;">
                    <tr>
                        <td>
                            <div class = "form-group">
                                <?php echo e(Form::label('title', 'Naslov')); ?><br/>
                               
                                <?php echo e(Form::text('title', '', ['placeholder' => 'Naslov', 
                                    'style' => 'border-radius:25px; border: 2px solid black;'])); ?> <br/><br/>
                                <?php echo e(Form::label('rec_category', 'Kategorija')); ?>

                                <?php echo e(Form::select('rec_category',[
                                    'desert' => 'Desert',
                                    'doručak' => 'Doručak',
                                    'juha' => 'Juha',
                                    'kiseliš' => 'Kiseliš',
                                    'kruh' => 'Kruh',
                                    'meso' => 'Meso',
                                    'na žlicu' => 'Na žlicu',
                                    'namazi' => 'Namazi',
                                    'ostalo' => 'Ostalo',
                                    'pekarski proizvodi' => 'Pekarski proizvodi',
                                    'pizza' => 'Pizza',
                                    'pića' => 'Pića',
                                    'prilog' => 'Prilog',
                                    'riba' => 'Riba',
                                    'rižoto' => 'Rižoto',
                                    'roštilj' => 'Roštilj',
                                    'salata' => 'Salata',
                                    'tjestenina' => 'Tjestenina',
                                    'umaci' => 'Umaci',
                                    'užina' => 'Užina',
                                    'vegetarijansko' => 'Vegetarijansko',], '', ['name' =>'rec_category', 'id'=>'rec_category','class' => 'selectpicker form-control', 'placeholder'=> 'Kategorija' , 'size'=>'1' , 'style' => 'border-radius:25px; border: 2px solid black;']
                                )); ?>

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class ="form-group">
                                <?php echo e(Form::label('time', 'Vrijeme')); ?>

                                <?php echo e(Form::number('time', '', ['class' => 'form-control', 'placeholder'=> 'Vrijeme', 'step' => '0.1', 'style' => 'border-radius:25px; border: 2px solid black;'])); ?>

                                <?php echo e(Form::select('measurement',[
                                    'min' => 'min',
                                    'h' => 'h',
                                    ],'', ['class' => 'selectpicker form-control', 'placeholder'=> 'Mjerna jedinica' , 'style' => 'border-radius:25px; border: 2px solid black;'])); ?>

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class ="form-group">
                                <?php echo e(Form::label('servings', 'Porcija')); ?>  
                                <?php echo e(Form::number('servings', '', ['class' => 'form-control', 'placeholder'=> 'Porcija', 'step' => '1' , 'style' => 'border-radius:25px; border: 2px solid black;'])); ?>

                            </div>
                        </td>
                    </tr>
                </table>
                    <div style="text-align:center">
                        <?php echo e(Form::label('food_name', 'Namirnice')); ?>

                    </div>
                    <div class = "form-group" for="ingredients" style="display:flex; justify-content:center;">
                        <!--<?php echo e(Form::label('food_name', 'Namirnice')); ?><br/><br/>-->

                        <table name="food_name" id="food_name" style="display:flex; justify-content:center">
                            <?php
                                $cat = null;
                            ?>
                                <?php $__currentLoopData = $in; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                        <?php if($i->category != $cat): ?>
                                            <?php if($cat !== null): ?>
                                                </optgroup>
                                            <?php endif; ?>
                                            <?php ($cat = $i->category); ?>
                                            <h2 style="font-size:25px; text-transform:capitalize;"><optgroup label = "<?php echo e($i->category); ?>:"></h2>
                                        <?php endif; ?>
                                        </td>
                                        <td>
                                            <input id= "food_name[]" name="food_name[]" data-id="<?php echo e($i->id); ?>" type="checkbox" value="<?php echo e($i->food_name); ?>" class="ingredient-enable" style = 'border-radius:25px; border: 2px solid black;'>
                                        </td>
                                        <td >
                                            <h3 style="font-size:17px; font-family:'Open Sans'"><b><?php echo e($i->food_name); ?></b> &nbsp</h3>
                                        </td>
                                        <td id="hide" >
                                            <input name="quantity[]" id="quantity[]" data-id="<?php echo e($i->id); ?>" name="quantity" type="number"  class="ingredient-amount dorm-control" placeholder="Količina" step="0.01" style = 'border-radius:25px; border: 2px solid black;'>
                                	    </td>
                                        <td>
                                            <?php echo e(Form::select('measurement_unit',[
                                                '---' => '---',
                                                'kg' => 'kg',
                                                'g' => 'g',
                                                'L' => 'L',
                                                'mL' => 'mL',
                                                'kom' => 'kom'
                                                ],'---', ['id'=>'measurement_unit[]', 'name'=>'measurement_unit[]' ,'data-id'=> $i->id,'class' => 'ingredient-amount form-control' ,'placeholder'=> 'Mjerna jedinica' , 'style' => 'border-radius:25px; border: 2px solid black;'])); ?>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                        
                            </optgroup>
                        </table>
                    </div>

                    <div class ="form-group">
                        <?php echo e(Form::label('instructions', 'Upute')); ?><br/>
                        <?php echo e(Form::textarea('instructions', '', ['id'=>'editor1','class' => 'form-control', 'placeholder'=> 'Upute' ])); ?>

                    </div>
                    <div class ="form-group" style="float:left">
                        <?php echo e(Form::file('cover_image', ['style' => 'font-family:"Open Sans"; font-weight:bold; width:250px; font-size:20px'])); ?>

                    </div><br/><br/>
                    <br/>
                    <?php echo e(Form::submit('Spremi', ['class' => 'btn btn-primary btn-rounded', 'style' => 'background-color:black; border-color:black; color:white; font-family:"Open Sans"; font-weight:bold; width:250px; font-size:20px;'])); ?>

                <?php echo Form::close(); ?>

            </div>
            <div style="text-align:center; margin-top: 30px">
                <a href="/proba" class="btn btn-primary btn-rounded" style = 'background-color:rgba(255, 204, 0, 0.55) ;border-color:black;  color:black; font-family:"Open Sans"; font-weight:bold; text-align:center;  font-size:20px' > Natrag </a>
            </div>
        </div>

    </div>
    
    <script>
        document.getElementById('rec_category').addEventListener('click', onClickHandler);
        document.getElementById('rec_category').addEventListener('mousedown', onMouseDownHandler);
        

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
<?php endif; ?>

<?php /**PATH /home/vagrant/Projects_Laravel/Zavrsni2/resources/views/proba/proba_create.blade.php ENDPATH**/ ?>