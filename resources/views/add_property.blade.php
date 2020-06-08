@extends('layout')
@section('main_content')
<div>
    <br>
    <div class="containers">
        <form action="{{route('property.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <h1><u>Property Registration Form</u></h1>
            <p>Please fill in this form to list a property on lease/sales.</p>
            <hr>
            <label class="control-label" for="Nameforproperty"><b>Property Title: </b></label>
            <input class="form-control" type="text" placeholder="Property Title" name="title" id="proptitle" required>
            <br>
            <br>
            <label for="Address"><b>Address: </b></label>
            <input type="text" placeholder="Enter Address" name="address" id="address" required>
            <br>
            <br>
            <label for="price"><b>Price: </b></label>
            <input type="text" placeholder="Price" name="Price" id="Price" required>
            <br>
            <br>
            <input type="radio" id="Rent" name="type" value="rent">
            <label for="rent"> List for renting</label><br>
            <input type="radio" id="Sale" name="type" value="sale">
            <label for="sale"> List for sale</label><br>
            <br>
            <label>
                <p><b>Description: </b></p>
            </label>
            <textarea class="description" name="description" cols="50" rows="10"
                placeholder="Provide information about the property." id="description"></textarea>
            <br>
            <br>
            <label for="choosingimage"><b>Select images to upload:</b></label>
            <input type="file" name="image" id="fileToUpload">
            <br>
            <br>
            <input type="submit" value="Upload Image" name="submit">

            <hr>

            <input type="checkbox" id="agreement" name="agreement" value="yes">
            <label for="Agreement"> I agree to follow all the terms and conditions under FS Sales and Property
                Management
                for
                property lease/purchase/sale.</label><br>
            <br>
            <button type="submit" class="registerbtn"><b>Submit</b></button>
        </form>
    </div>
</div>
@endsection
