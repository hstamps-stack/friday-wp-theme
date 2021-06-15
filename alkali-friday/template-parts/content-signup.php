<?php

/*
    Template Name: Sign Up
*/

get_header();

?>


<div class="card w-50 border border-2 border border-dark mx-auto mt-5 rounded">
    <div class="card-body">
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary text-center">Submit</button>
    </form>
    </div>

</div>
    
<div class="text-center bg-dark text-white  p-5 footer">
    <?php
    get_footer()

    ?>

</div>
