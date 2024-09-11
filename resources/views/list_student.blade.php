<h3>Student List</h3>

<style>
    table,th,td
    {
        border:1px solid black;
        border-collapse:collapse;
    }


</style>

<table>

        <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Phone</th>
                <th>Edit</th>
                <th>Delete</th>
    	</thead>


        <tbody>
                
                @foreach($students as $student)
                <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->age}}</td>
                <td><a href="edit/{{$student->id}}">Edit</a></td>
                <td><a href="delete/{{$student->id}}">Delete</a></td>
                </tr>
                @endforeach
                
        </tbody>

</table>