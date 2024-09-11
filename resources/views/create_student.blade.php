<h1>Create User Form</h1>

<form action="store" method="post">
   
    <label for="name">Name:</label><br>
    <input type="text" name="name">
    <br><br>

    <label for="age">Age</label><br>
    <input type="text" name="age">
    <br><br>

    <label for="phone">Phone</label><br>
    <input type="text" name="phone">
    <br><br>

    <input type="hidden" name="_token" value="<?php echo csrf_token()?>">

    <input type="submit" value="Create User">
</form>