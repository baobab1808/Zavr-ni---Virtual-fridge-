<div>
    <?php if(count($content) > 0): ?>
        <table class="table text-center">   
            <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div style="display:block">
                                <tr > 
                                    <!--<td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>-->  
                                    <td style="text-aling:center; vertical-align:middle;">
                                        <div style=" background-color:rgba(255, 255, 204, 0.9); border-radius:25px; border: 2px dashed black;">
                                            <h1 style="font-size:30px; font-weight:bold; font-family:'Ribeye Marrow'"><a href="/proba/<?php echo e($item[0]); ?>"><?php echo e($item[1]); ?></a></h1><br/>
                                            <h6 style="font-size: 20px; font-family: Open Sans"><b>Porcije: <?php echo e($item[7]); ?></b></h6><br/>
                                            <?php if($item[6] == 'min'): ?>
                                                <h6 style="font-size: 20px; font-family: Open Sans">Vrijeme: <?php echo e((int)$item[5]); ?><?php echo e($item[6]); ?></h6><br/>
                                            <?php else: ?>
                                                <h6 style="font-size: 20px; font-family: Open Sans">Vrijeme: <?php echo e($item[5]); ?><?php echo e($item[6]); ?></h6><br/>
                                            <?php endif; ?>
                                            <small><b>Recept napisao: <i><?php echo e($item[3]); ?></i></b></small>
                                        <div>
                                    </td>
                                    <td style="margine-left:50%; background-color:rgba(255, 204, 0, 0.45)">                                     
                                        <a href="/proba/<?php echo e($item[0]); ?>"><img style="width:100%; height:auto; max-width:50vw" src="/storage/cover_images/<?php echo e($item[4]); ?>" style="float:right"></a>     
                                    </td>
                                    <!--<td>&emsp;&emsp;&emsp;&emsp;&emsp;</td>-->

                                <tr>
                            
                        </div>   
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <?php else: ?>
        <p>Trenutno nemaš napisane recepte.</p>
    <?php endif; ?>
</div><?php /**PATH /home/vagrant/Projects_Laravel/Zavrsni2/resources/views/livewire/proba-live.blade.php ENDPATH**/ ?>