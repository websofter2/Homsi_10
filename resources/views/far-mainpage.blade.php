@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content= "IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>  	

	<link rel="icon" href="{{ asset('icons/FAR-icon.ico') }}" type="image/x-icon">  
    <link rel="stylesheet" href="{{ asset('mmm.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap.css') }}">
</head>
<body>
	<div class="container">
        <div class="mmm">
            <h1>جمهورية مصر العربية</h1>
            <h2>وزارة الزراعة وإستصلاح الأراضى</h2>
            <h3>العلاقات الزراعية الخارجية</h3>
        </div>
        <img src="{{ asset('images/Far-Logo.png') }}" alt="Far Logo" class="logo">
		<!-- <hr> -->
        <form>
			<input type="text" placeholder="إسم المستخدم">
			<input type="password" placeholder="كلمة المرور">
			<input type="submit" value="تسجيل الدخول">
			
		</form>
	</div>
    <script src="{{ asset('bootstrap.js') }}"></script>    
</body>
</html>

@endsection  