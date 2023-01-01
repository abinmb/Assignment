


<table border="2"> 
    <form method="post" action="/{{$ide->id}}">     
        @csrf     
        @method("PUT")     
        <div class="form-group" > 
            <label for="">bagmoid</label>         
            <input type="text" name="bagmoid" value="{{$ide->bagmoid}}" class="bagmoid"><br><br>         
            <label for="">name</label>         
            <input type="text" name="name" value="{{$ide->name}}" class="name"><br><br>         
            <label for="">age</label>         
            <input type="text" name="age" value="{{$ide->age}}" class="age"><br><br>         
            <label for="">country</label>        
            <input type="text" name="c1" value="{{$ide->country}}" class="c1">
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
    </table>  