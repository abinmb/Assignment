<table border="5">     <tr>         
    <th>bagmoid</th>         
    <th>name</th>         
    <th>age</th>
    <th>country</th>     
</tr>     
<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
<tr>         
    <td><?php echo e($data->bagmoid); ?></td>         
    <td><?php echo e($data->name); ?></td>         
    <td><?php echo e($data->age); ?></td> 
    <td><?php echo e($data->country); ?></td>     
    <td><a class="a1" href="/<?php echo e($data->id); ?>/show">show</a></td>     
    <td><a class="a1" href="/<?php echo e($data->id); ?>/edit">edit</a></td>
</tr>     
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</table>
<a class="a1" href="/create">Add </a> <?php /**PATH E:\Assignment\Assignment\resources\views/index.blade.php ENDPATH**/ ?>