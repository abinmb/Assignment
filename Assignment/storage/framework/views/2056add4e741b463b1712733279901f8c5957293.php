


<table border="2"> 
    <form method="post" action="/<?php echo e($ide->id); ?>">     
        <?php echo csrf_field(); ?>     
        <?php echo method_field("PUT"); ?>     
        <div class="form-group" > 
            <label for="">bagmoid</label>         
            <input type="text" name="bagmoid" value="<?php echo e($ide->bagmoid); ?>" class="bagmoid"><br><br>         
            <label for="">name</label>         
            <input type="text" name="name" value="<?php echo e($ide->name); ?>" class="name"><br><br>         
            <label for="">age</label>         
            <input type="text" name="age" value="<?php echo e($ide->age); ?>" class="age"><br><br>         
            <label for="">country</label>        
            <input type="text" name="c1" value="<?php echo e($ide->country); ?>" class="c1">
            <select name="country" id="country">
                <option value="india">india</option>
                <option value="argentina">argentina</option>
                <option value="portugal">portugal</option>
                <option value="africa">africa</option>
            </select>             
            <div class="form-group" >         
                <button class="btn btn-primary">save</button>     
            </div>
            </form> 
    </table>  <?php /**PATH E:\Assignment\Assignment\resources\views/edit.blade.php ENDPATH**/ ?>