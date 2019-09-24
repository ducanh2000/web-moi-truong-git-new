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

<div class="adv">
    <img src="images/adv.jpg" alt="" class="img-fluid">

    <div class="img-text">
        Interest rate for environmental protection projects in 2014 is 3.6% per year
        <br><br>
        Supproting interest rate post - investment for environmental protection projects in 2014 is 2.4% per year
    </div>
</div> <!-- hết adv -->

<div class="services">
    <div class="title-services">
        <h6>Customer Information</h6>
    </div>
    <ul class="form-inner">
        <li>
            <img src="images/sv1.png" alt="">
            <span>Soft Loan </span>
        </li>
        <li> <img src="images/sv2.png" alt="">
            <span>Interest rate support</span>
        </li>
        <li> <img src="images/sv3.png" alt="">
            <span>Funding and co-funding</span>
        </li>
        <li> <img src="images/sv4.png" alt="">
            <span>Clean Development Mechanism</span>
        </li>
        <li> <img src="images/sv5.png" alt="">
            <span>Price subsidies for environment protection products</span>
        </li>
        <li> <img src="images/sv6.png" alt="">
            <span>Deposits for environmental restoration in mineral exploitation</span>
        </li>
        <li> <img src="images/sv7.png" alt="">
            <span>ODA and entrusted loans</span>
        </li>
        <li> <img src="images/sv8.png" alt="">
            <span>Other Activities</span>
        </li>
    </ul>

</div> <!-- hết services -->

<div class="meeting-online">
    <img src="images/adv2.jpg" alt="">
    <div class="sub-text">MEETING ONLINE</div>
</div>

<div class="adv2">
    <img src="images/dubao.jpg" alt="" class="img-fluid">
</div>

<div class="link">
    <div class="title-link">
        <h6>Link Exchange</h6>
    </div>
    <form action="" id="form-link">
        <br>
        <select class="form-control">
            <option value="Ministry, Industry, Local">Ministry, Industry, Local</option>
            <option value="Ministry, Industry, Local 2">Ministry, Industry, Local 2</option>
            <option value="Ministry, Industry, Local 3">Ministry, Industry, Local 3</option>
        </select>

        <select class="form-control">
            <option value="Career units">Career units</option>
            <option value="Career units 2">Career units 2</option>
            <option value="Career units 3">Career units 3</option>
        </select>
        <br>
    </form>
</div> <!-- hết link -->

<div class="access-time">
    <div class="title-link">
        <h6>statistical access</h6>
    </div>
    <div class="number">
        <div class="num1">
            Online <br>
            <span>65</span>
        </div>
        <div class="num2">
            Access times <br>
            <span>2044189</span>
        </div>
        <div style="clear: both;"></div>
    </div>

</div><!--  hết access-time -->
</div>



<!-- <footer style="background: green;text-align: center;color:white;margin-top: 20px;">
     <h1>FOOTER</h1>
    </footer>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">   	
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"> 
    </script>
  </body>
</html>
 -->
