<html>
<body>
<h2>page Contacts</h2></br>
<h3>{{$nume_pagina}}</h3></br>
<a href="{{ url('/')}}"><h3>Home</h3></a> </br>

<form action="{{ url('/save-contacts')}}" method="POST">
@csrf
<input type="text" name="email"></br></br>
<input type="text" name="phone"></br></br>
<button type="submit">Save</button>

</form>



</body>
</html>
