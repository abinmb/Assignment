

<table border="2"> 
    <form method="post" action="/">     
        @csrf     
        <div class="form-group" >         
            <label for="">bagmoid</label>         
            <input type="text" name="bagmoid"class="bagmoid"><br><br>         
            <label for="">name</label>         
            <input type="text" name="name" class="name"><br><br>         
            <label for="">age</label>         
            <input type="text" name="age"class="age"><br><br>         
            <label for="">country:</label>
            <select name="country" id="country">
                <option value="india">india</option>
                <option value="argentina">argentina</option>
                <option value="portugal">portugal</option>
                <option value="africa">africa</option>
            </select>
        </div>     
        <div class="form-group" >         
            <button class="btn btn-primary ">save</button>     
        </div> 
    </form> 
</table> 