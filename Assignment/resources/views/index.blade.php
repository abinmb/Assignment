<table border="5">     <tr>         
    <th>bagmoid</th>         
    <th>name</th>         
    <th>age</th>
    <th>country</th>     
</tr>     
@foreach($datas as $data)     
<tr>         
    <td>{{$data->bagmoid}}</td>         
    <td>{{$data->name}}</td>         
    <td>{{$data->age}}</td> 
    <td>{{$data->country}}</td>     
    <td><a class="a1" href="/{{$data->id}}/show">show</a></td>     
    <td><a class="a1" href="/{{$data->id}}/edit">edit</a></td>
</tr>     
@endforeach 
</table>
<a class="a1" href="/create">Add </a> 