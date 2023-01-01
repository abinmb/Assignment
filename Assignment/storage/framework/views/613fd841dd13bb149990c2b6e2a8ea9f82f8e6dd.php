


<table id="customers" border="2">     
    <tr>     
        <th><label for="">bagmoid</label></th>     
        <th><label for="">name</label></th>     
        <th><label for="">age</label></th>     
        <th><label for="">country</label></th>     
    </tr> 
    <tr> 
        <td><?php echo e($ide->bagmoid); ?></td> 
        <td><?php echo e($ide->name); ?></td> 
        <td><?php echo e($ide->age); ?></td> 
        <td><?php echo e($ide->country); ?></td>     
        <form method="post" action="/<?php echo e($ide->id); ?>">         
            <?php echo csrf_field(); ?>         
            <?php echo method_field("DELETE"); ?>         
            <td><button onclick="return confirm('are you sure??')" class="btn">delete</button> </td>     
        </form>     
    </tr>     
    <tr>     
        <a class="a1" href="/">view all</a>     
    </tr> 
</table><?php /**PATH E:\Assignment\Assignment\resources\views/show.blade.php ENDPATH**/ ?>