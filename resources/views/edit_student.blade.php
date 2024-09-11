
<h3>Edit Student Form</h3>

<form action="{{url('update/'.$student->id)}}" method="post">

    <label for="name">Name</label><br>
    <input type="text" name="name" value="{{$student->name}}"><br>

    <label for="age">Age</label><br>
    <input type="text" name="age" value="{{$student->age}}"><br>

    <label for="phone">Phone</label><br>
    <input type="text" name="phone" value="{{$student->phone}}"><br>

    <input type="submit" value="update Student"> 


    @csrf


</form>