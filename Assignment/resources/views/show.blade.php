


<table id="customers" border="2">     
    <tr>     
        <th><label for="">bagmoid</label></th>     
        <th><label for="">name</label></th>     
        <th><label for="">age</label></th>     
        <th><label for="">country</label></th>     
    </tr> 
    <tr> 
        <td>{{$ide->bagmoid}}</td> 
        <td>{{$ide->name}}</td> 
        <td>{{$ide->age}}</td> 
        <td>{{$ide->country}}</td>     
        <form method="post" action="/{{$ide->id}}">         
            @csrf         
            @method("DELETE")         
            <td><button onclick="return confirm('are you sure??')" class="btn">delete</button> </td>     
        </form>     
    </tr>     
    <tr>     
        <a class="a1" href="/">view all</a>     
    </tr> 
</table>