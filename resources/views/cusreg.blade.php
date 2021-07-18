<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
    <style>
        .background
         {
            background-color: white;
            background-repeat: no-repeat;
            background-size: 100%;

        } 
        
    </style>
</head>
<body style="background-color:#ffe6ff;">
 <br><div class="container">
<div class="row"><br><center>
        <div class="col col-12 col-sm 6 col-md 6 col-lg 6 col-xl 12 col-xxl 12">
        
		<form action="/customerread" method="post">
   		 {{csrf_field() }}
			@if(count($errors)>0)
            <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}} </li>
            @endforeach
            </ul>
            </div>
            @endif
            @if(Session::get('fail'))
            <div class="alert alert-danger">
            {{Session::get('fail')}}
            </div>
            @endif
			<div class="container">
			<div class="row">
			<div class="col col-12 col-sm 6 col-md 6 col-lg 6 col-xl 12 col-xxl 12">
				<table class="table">
				<h1><p style="font-family:Segoe Print;color:#ff0084"><b>FILL ME IN</b></p></h1><br><hr><br>
				
				<tr>
                <td><p style="color:#ff0084">First name</td>
				<td><input type="text" name="fname"
						placeholder="First name" /></td>
				</tr>
				<tr>
                <td><p style="color:#ff0084">Last name</td>
				<td><input type="text" name="lname"
						placeholder="Last name" /></td>
				</tr>
					<tr>
					<td><p style="color:#ff0084">House name</td>
					<td><input type="text" name="hname"
						placeholder="House name" /></td>
				</tr>
				<tr>
					<td><p style="color:#ff0084">Place</td>
					<td><input type="text" name="place"
						placeholder="Place" /></td>
				</tr>
				<tr>
					<td><p style="color:#ff0084">Land Mark</td>
					<td><input type="text" name="lmark"
						placeholder="Land Mark" /></td>
				</tr>
				<tr>
					<td><p style="color:#ff0084">Phone number</td>
					<td><input type="text" name="phno"
						placeholder="Phone number" /></td>
				</tr>
				<tr>
					<td><p style="color:#ff0084">Username</td>
					<td><input type="text" name="uname"
						placeholder="Username" />
				</td>
				</tr>
				<tr>
					<td><p style="color:#ff0084">Password</td>
					<td><input type="password" name="password"
						placeholder="Password"/></td>
				</tr>	
				<tr>
					<td></td>
					<td><button class="btn-success">
			Submit</button>&nbsp&nbsp&nbsp<button class="btn-primary"><a href="/login">
			Cancel</a></button></td>
				</tr>
			</div>
			
				</table>
			</div>
			</div>
			</div>
			</form>
			
		</div></center>

        </div>
		
			  

		
		
</div>
 </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>  
</body>
</html>