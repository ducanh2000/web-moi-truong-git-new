<div class="content">
            <div class=" customer-info">
    <h6>Customer Information</h6>
</div>

<form id="form-info" action="{{route('postinfo')}}" method="post">
    @csrf
    <div class="form-group">
        <label class="lang " required key="ten-cty" for=""><strong>Company's name <span style="color:red;">*</span></strong></label>
        <input type="text" class="form-control" id="exampleInput1" name="company" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label class="lang" required key="ten-duan" for=""><strong>Name of project <span style="color:red;">*</span></strong></label>
        <input type="text" name="project" class="form-control" id="exampleInput2">
    </div>
    <div class="form-group">
        <label class="lang" required key="dia-chi" for=""><strong>Address <span style="color:red;">*</span></strong></label>
        <input type="text" name="address" class="form-control" id="exampleInput3">
    </div>
    <div class="form-group">
        <label class="lang" required key="sodienthoai" for=""><strong>Phone number <span style="color:red;">*</span></strong></label>
        <input type="text" name="phone" class="form-control" id="exampleInput4">
    </div>
    <div class="form-group">
        <label class="lang" required key="duan" for=""><strong>Content Project <span style="color:red;">*</span></strong></label>
        <textarea name="content" cols="32" rows="3" class="form-control"></textarea>
    </div>
    <div class="btn-send-info">
        <button type="submit" class="btn btn-primary">Send information</button>
    </div>

</form> <!-- hết form-info -->
</div>
</div>

