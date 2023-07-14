<table border="1" width="500px">
    <tr>
        <td>Name</td>
        <td>Roll</td>
        <td>Class</td>
        
    </tr>
    @forelse ($data as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->roll}}</td>
            <td>{{$item->class}}</td>
            
        </tr>
    @empty
        
    @endforelse
</table>