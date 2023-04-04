<div>
    <?php if(count($content) > 0): ?>
        <table class="table text-center">
            <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div style="display:block">
                    <tr> 
                        <td style="text-aling:center; vertical-align:middle;">
                            <div style=" background-color:rgba(255, 255, 204, 0.9); border-radius:25px; border: 2px dashed black;">
                                <h1 style="font-size:30px; font-weight:900; font-family:'Ribeye Marrow'"><a href="/hladnjak/<?php echo e($item[0]); ?>"><?php echo e($item[1]); ?>: <?php echo e($item[3]); ?><?php echo e($item[4]); ?></a></h1><br/>
                            <div>
                        </td>
                        
                    <tr>
                
                </div>   
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <?php else: ?>
        <p style="text-align:center; font-size:30px; font-weight:bold; font-family:'Ribeye Marrow' ">Trenutno nemate niti jednu namirnicu u svojem virtualnom hladnjaku.</p>
    <?php endif; ?>
</div>
<?php /**PATH /home/vagrant/Projects_Laravel/Zavrsni2/resources/views/livewire/hladnjak-live.blade.php ENDPATH**/ ?>