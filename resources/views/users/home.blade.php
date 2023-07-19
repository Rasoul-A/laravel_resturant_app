@extends('layouts.users_home')
@section('content')
<section class="top-header">
    <nav>
        <div class="dropdown">
            <a href="#">Categories</a>
            <div class="dropdown-content">
                <a href="#">Main-course</a> {{-- insert a for loop blade structure--}}
                <a href="#">Drinks</a>
            </div>
        </div>
        <a href="#">Order status</a>
        <a href="#">Register</a>
        <a href="#">About us</a>
    </nav>
</section>
<section class="content">

</section>
@endsection
