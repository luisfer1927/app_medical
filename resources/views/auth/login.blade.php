@extends('layouts.app')

@section('title', 'Login')

@section('content')

   
 <div class="text-center mt-5 position-absolute top-50 start-50 translate-middle border bg-white shadow-lg rounded-4" style="width: 420px">
    <form action="" style="max-width:300px;margin:auto;" method="POST">
        @csrf
        <img  class="mt-4 mb-4" src="https://svgsilh.com/svg/30591.svg" height="92" alt="">
        <h1>Please sign in</h1>

        <label class="sr-only" for="emailAddress"></label>
        <input type="email" id="emailAddress" name="email" class="form-control mb-3" placeholder="Email" require autofocus >
        <label for="password" class="sr-only"></label>
        <input type="password" id="password" name="password" placeholder="Password" class="form-control">

        @error('message')
          <p>
            * Error
        </p>  
        @enderror
        
        <div class="checkbox mt-3">
            <label>
                <input type="checkbox" value="remenber-me"> Remenber me
            </label>
        </div>
        <div class="mt-3 d-grid gap-2 col-6 mx-auto mb-3">
           <button type=submit" class="btn btn-lg btn-success">Sign In</button> 
        </div>
        
    </form>

 </div>     

@endsection