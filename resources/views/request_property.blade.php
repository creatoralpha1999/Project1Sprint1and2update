@extends('layout')
@section('main_content')
<div class="container-fluid">
    <form action="{{url('/request-property')}}" method="post">
        <h1><u>Purchase/Lease Form for {{$property->title}}</u></h1>
        <p>Please fill in this form to initiate a purchase/lease a selected property from the list.</p>
        <hr>
        <input type="hidden" name="property_id" value="{{$property->id}}">
        <input type="hidden" name="owner_id" value="{{$property->user_id}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <label for="fname"><b> Name: </b></label>
        <input type="text" placeholder="Enter  Name: " name="name" id="FName" required>

        <br>
        <label for="email"><b>Email: </b></label>
        <input type="text" placeholder="Enter Email: " name="email" id="email" required>
        <br>
        <br>
        <label for="Contact"><b>Mobile: </b></label>
        <input type="contact" placeholder="Contact: " name="mobile" id="contact" required>
        <br>
        <br>
        <label for="address"><b>Current Address: </b></label>
        <input type="text" placeholder=" Enter Street " name="address" id="address" required>


        <br>
        <label for="date"><b>Please pick a date for appointment/inspection of property:</b></label>
        <input type="date" placeholder="mm/dd/yy" id="appdate" name="date" required>
        <br>
        <br>
        <label>
            <p><b>Additional Information: </b></p>
        </label>
        <textarea class="addinfo" name="additional_info" cols="50" rows="10"
            placeholder="Provide information on your interest in the property." id="addinfo"></textarea>
        <hr>
        <label>
            <br>
            <br>
            <input required type="checkbox" id="agreement" name="agreement" value="yes">
            <label for="Agreement"> I agree to follow all the terms and conditions under FS Sales and Property
                Management
                for property lease/purchase/sale.</label><br>
            <br>

            <hr>
            <button type="submit" class="registerbtn"><b>Submit</b></button>
    </form>
</div>
@endsection
