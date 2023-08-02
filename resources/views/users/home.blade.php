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
<div class="item-card">
    <h3 class="name">Balh blah</h3>
    <p class="ingredients">Lorem ipsum dolor sit amet consectet</p>
    <span class="price">233100</span>
    <div class="is_available"></div>
    <div class="controls">
        {{-- <button class="order btn btn-blue">Order
        </button> --}}
        <div class="order_form">
            <form method="POST" onsubmit="ajaxpost();return false" id="order_form1">
                @csrf
                <label for="count">Count: </label>
                <input type="number" min="1" max="20" id="count" name="count"><br>
                {{-- <label for="note">Detials: </label>
                <textarea>Customer notes...></textarea><br> --}}
                <label for="take-out">Take-out: </label>
                <input type="radio" name="hand-out" id="take-out" value="take-out">
                <label for="in-place">In-place: </label>
                <input type="radio" name="hand-out" id="in-place" value="in-place"><br>
                <input type="hidden" name="item-id" value="order_form1">
                <input type="submit" class="btn btn-green" value="Add to cart">
                <span class="order_status_indicator" id="order_form1_status_indicator"></span>
            </form>
            <button class="btn btn-red" onclick="ajaxremove('order_form1')">Remove from cart</button>
        </div>
        <button class="btn btn-yellow">Comments</button>
    </div>
</div>
<script>
    function ajaxpost () {
      // (A) GET FORM DATA
    //   console.log(event.target.id);
    let id =event.target.id;
      var data = new FormData(document.getElementById(id));

      // (B) AJAX
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "{{route('home.add_to_cart')}}");
      xhr.onload = function () {
        // do something when server responds
        console.log(this.responseText);
        if(this.status ==400)
        {
            alert(this.responseText);
        }
        else if(this.status ==200)
        {
            document.getElementById(id.concat("_status_indicator")).innerHTML = "&#9989;";

        }

      };
      xhr.send(data);

      // (C) PREVENT HTML FORM SUBMIT
      return false;
    }
    function ajaxremove(item_id)
    {
        var xhr = new XMLHttpRequest();
      xhr.open("DELETE", "{{route('home.delete_from_cart')}}?item-id="+item_id);
      console.log(document.querySelector('meta[name="csrf-token"]').content);
      xhr.setRequestHeader("X-CSRF-TOKEN", document.querySelector('meta[name="csrf-token"]').content);

      xhr.onload = function () {
        // do something when server responds
        console.log(this.responseText);
        if(this.status ==400 || this.status==404)
        {
            alert(this.responseText);
        }
        else if(this.status ==200)
        {
            document.getElementById(item_id.concat("_status_indicator")).innerHTML = "&#10060;";

        }

      };
      xhr.send();
    }
    </script>
</section>
@endsection
