<div>
    <?php if(count($content) > 0): ?>
            
        <select name="kategorija" id="kategorija" class="selectpicker form-control" wire:model="kategorija" style = 'border-radius:25px; border: 2px solid black;' size="1">
            <option value="---">Sve kategorije</option>
            <option value="desert">Desert</option>
            <option value="doručak">Doručak</option>
            <option value="juha">Juha</option>
            <option value="kiseliš">Kiseliš</option>
            <option value="kruh">Kruh</option>
            <option value="meso">Meso</option>
            <option value="na žlicu">Na žlicu</option>
            <option value="namazi">Namazi</option>
            <option value="ostalo">Ostalo</option>
            <option value="pekarski proizvodi">Pekarski proizvodi</option>
            <option value="pizza">Pizza</option>
            <option value="pića">Pića</option>
            <option value="prilog">Prilog</option>
            <option value="riba">Riba</option>
            <option value="rižoto">Rižoto</option>
            <option value="roštilj">Roštilj</option>
            <option value="salata">Salata</option>
            <option value="tjestenina">Tjestenina</option>
            <option value="umaci">Umaci</option>
            <option value="užina">Užina</option>
            <option value="vegetarijansko">Vegetarijansko</option>
        </select>
        
        <select name="vrijeme" id="vrijeme" class="selectpicker form-control" wire:model="vrijeme" style = 'border-radius:25px; border: 2px solid black;' size="1">
            <option value="---">Svi vremenski intervali</option>
            <option value="20">Do 20min</option>
            <option value="1">Do sat vremena</option>
            <option value="2">Do dva sata</option>
            <option value="3">Preko dva sata</option>
        </select>
        <table class="table text-center">   
            <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(($item[2] == $kategorija || $kategorija == "---") && $vrijeme == "---"): ?>
                        <div style="display:block">
                                <tr> 
                                    <td style="text-aling:center; vertical-align:middle; ">
                                        <div style=" background-color:rgba(255, 255, 204, 0.9); border-radius:25px; border: 2px dashed black;">
                                            <h1 style="font-size:30px; font-weight:bold; font-family:'Ribeye Marrow'"><a href="/proba/<?php echo e($item[0]); ?>"><?php echo e($item[1]); ?></a></h1><br/>
                                            <h6 style ="font-size: 20px; font-family: Open Sans">Porcije: <?php echo e($item[7]); ?></h6><br/>
                                            <?php if($item[6] == 'min'): ?>
                                                <h6 style="font-size: 20px; font-family: Open Sans">Vrijeme: <?php echo e((int)$item[5]); ?><?php echo e($item[6]); ?></h6><br/>
                                            <?php else: ?>
                                                <h6 style="font-size: 20px; font-family: Open Sans">Vrijeme: <?php echo e($item[5]); ?><?php echo e($item[6]); ?></h6><br/>
                                            <?php endif; ?>
                                            <small><b>Recept napisao: <i><?php echo e($item[3]); ?></i></b></small>
                                        <div>
                                    </td>
                                    <td style="margine-left:50%; background-color:rgba(255, 204, 0, 0.45)">                                     
                                        <a href="/proba/<?php echo e($item[0]); ?>"><img style="width:100%; height:auto; max-width:50vw" src="/storage/cover_images/<?php echo e($item[4]); ?>" style="float:right;"></a>     
                                    </td>

                                <tr>
                            
                        </div>   
                    <?php elseif(($item[2] == $kategorija || $kategorija == "---") && $vrijeme == 20 && $item[6] == "min" && $item[5] <= 20): ?>
                        <div style="display:block">
                            <tr> 
                                <td style="text-aling:center; vertical-align:middle; ">
                                    <div style=" background-color:rgba(255, 255, 204, 0.9); border-radius:25px; border: 2px dashed black;">
                                        <h1 style="font-size:30px; font-weight:bold; font-family:'Ribeye Marrow'"><a href="/proba/<?php echo e($item[0]); ?>"><?php echo e($item[1]); ?></a></h1><br/>
                                        <h6 style ="font-size: 20px; font-family: Open Sans">Porcije: <?php echo e($item[7]); ?></h6><br/>
                                        <?php if($item[6] == 'min'): ?>
                                            <h6 style="font-size: 20px; font-family: Open Sans">Vrijeme: <?php echo e((int)$item[5]); ?><?php echo e($item[6]); ?></h6><br/>
                                        <?php else: ?>
                                            <h6 style="font-size: 20px; font-family: Open Sans">Vrijeme: <?php echo e($item[5]); ?><?php echo e($item[6]); ?></h6><br/>
                                        <?php endif; ?>
                                        <small><b>Recept napisao: <i><?php echo e($item[3]); ?></i></b></small>
                                    <div>
                                </td>
                                <td style="margine-left:50%; background-color:rgba(255, 204, 0, 0.45)">                                     
                                    <a href="/proba/<?php echo e($item[0]); ?>"><img style="width:100%; height:auto; max-width:50vw" src="/storage/cover_images/<?php echo e($item[4]); ?>" style="float:right;"></a>     
                                </td>

                            <tr>
                                
                        </div>  
                    <?php elseif(($item[2] == $kategorija || $kategorija == "---") && $vrijeme == 1 && ($item[6] == "min" || $item[6] == "h") && $item[5] > 20): ?>
                        <div style="display:block">
                            <tr> 
                                <td style="text-aling:center; vertical-align:middle; ">
                                    <div style=" background-color:rgba(255, 255, 204, 0.9); border-radius:25px; border: 2px dashed black;">
                                        <h1 style="font-size:30px; font-weight:bold; font-family:'Ribeye Marrow'"><a href="/proba/<?php echo e($item[0]); ?>"><?php echo e($item[1]); ?></a></h1><br/>
                                        <h6 style ="font-size: 20px; font-family: Open Sans">Porcije: <?php echo e($item[7]); ?></h6><br/>
                                        <?php if($item[6] == 'min'): ?>
                                            <h6 style="font-size: 20px; font-family: Open Sans">Vrijeme: <?php echo e((int)$item[5]); ?><?php echo e($item[6]); ?></h6><br/>
                                        <?php else: ?>
                                            <h6 style="font-size: 20px; font-family: Open Sans">Vrijeme: <?php echo e($item[5]); ?><?php echo e($item[6]); ?></h6><br/>
                                        <?php endif; ?>
                                        <small><b>Recept napisao: <i><?php echo e($item[3]); ?></i></b></small>
                                    <div>
                                </td>
                                <td style="margine-left:50%; background-color:rgba(255, 204, 0, 0.45)">                                     
                                    <a href="/proba/<?php echo e($item[0]); ?>"><img style="width:100%; height:auto; max-width:50vw" src="/storage/cover_images/<?php echo e($item[4]); ?>" style="float:right;"></a>     
                                </td>
                            <tr>
                        </div> 
                    <?php elseif(($item[2] == $kategorija || $kategorija == "---") && $vrijeme == 2 && $item[6] == "h" && ($item[5] >=1 && $item[5] <= 2)): ?>
                        <div style="display:block">
                            <tr> 
                                <td style="text-aling:center; vertical-align:middle; ">
                                    <div style=" background-color:rgba(255, 255, 204, 0.9); border-radius:25px; border: 2px dashed black;">
                                        <h1 style="font-size:30px; font-weight:bold; font-family:'Ribeye Marrow'"><a href="/proba/<?php echo e($item[0]); ?>"><?php echo e($item[1]); ?></a></h1><br/>
                                        <h6 style ="font-size: 20px; font-family: Open Sans">Porcije: <?php echo e($item[7]); ?></h6><br/>
                                        <?php if($item[6] == 'min'): ?>
                                            <h6 style="font-size: 20px; font-family: Open Sans">Vrijeme: <?php echo e((int)$item[5]); ?><?php echo e($item[6]); ?></h6><br/>
                                        <?php else: ?>
                                            <h6 style="font-size: 20px; font-family: Open Sans">Vrijeme: <?php echo e($item[5]); ?><?php echo e($item[6]); ?></h6><br/>
                                        <?php endif; ?>
                                        <small><b>Recept napisao: <i><?php echo e($item[3]); ?></i></b></small>
                                    <div>
                                </td>
                                <td style="margine-left:50%; background-color:rgba(255, 204, 0, 0.45)">                                     
                                    <a href="/proba/<?php echo e($item[0]); ?>"><img style="width:100%; height:auto; max-width:50vw" src="/storage/cover_images/<?php echo e($item[4]); ?>" style="float:right;"></a>     
                                </td>
                            <tr>
                        </div> 
                    <?php elseif(($item[2] == $kategorija || $kategorija == "---") && $vrijeme == 3 && $item[6] == "h" && $item[5] <= 20): ?>
                        <div style="display:block">
                            <tr> 
                                <td style="text-aling:center; vertical-align:middle; ">
                                    <div style=" background-color:rgba(255, 255, 204, 0.9); border-radius:25px; border: 2px dashed black;">
                                        <h1 style="font-size:30px; font-weight:bold; font-family:'Ribeye Marrow'"><a href="/proba/<?php echo e($item[0]); ?>"><?php echo e($item[1]); ?></a></h1><br/>
                                        <h6 style ="font-size: 20px; font-family: Open Sans">Porcije: <?php echo e($item[7]); ?></h6><br/>
                                        <?php if($item[6] == 'min'): ?>
                                            <h6 style="font-size: 20px; font-family: Open Sans">Vrijeme: <?php echo e((int)$item[5]); ?><?php echo e($item[6]); ?></h6><br/>
                                        <?php else: ?>
                                            <h6 style="font-size: 20px; font-family: Open Sans">Vrijeme: <?php echo e($item[5]); ?><?php echo e($item[6]); ?></h6><br/>
                                        <?php endif; ?>
                                        <small><b>Recept napisao: <i><?php echo e($item[3]); ?></i></b></small>
                                    <div>
                                </td>
                                <td style="margine-left:50%; background-color:rgba(255, 204, 0, 0.45)">                                     
                                    <a href="/proba/<?php echo e($item[0]); ?>"><img style="width:100%; height:auto; max-width:50vw" src="/storage/cover_images/<?php echo e($item[4]); ?>" style="float:right;"></a>     
                                </td>
                            <tr>
                        </div> 
                    
                    <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <?php else: ?>
        <p style="text-align:center; font-size:30px; font-weight:bold; font-family:'Ribeye Marrow' ">Trenutno nemate ponuđenih recepta. Popunite svoj virtualni hladnjak s još namirnica kako bi se oni pojavili</p>
    <?php endif; ?>

    <script>
        document.getElementById('kategorija').addEventListener('click', onClickHandler);
        document.getElementById('kategorija').addEventListener('mousedown', onMouseDownHandler);
        document.getElementById('vrijeme').addEventListener('click', onClickHandler);
        document.getElementById('vrijeme').addEventListener('mousedown', onMouseDownHandler);
        

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
</div>
<?php /**PATH /home/vagrant/Projects_Laravel/Zavrsni2/resources/views/livewire/dashboard-live.blade.php ENDPATH**/ ?>