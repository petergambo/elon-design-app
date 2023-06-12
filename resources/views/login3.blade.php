@include('parts/header')

<script>
    function steps(elem)
    {
        var tip = elem.getAttribute('tip');
        var x = elem.position.getX
        alert();
    }
</script>

<script>
    function select_option(elem){
        if(elem.style.backgroundColor == "azure")
        {
            elem.style.backgroundColor = "black";
            elem.style.color = "white";
            elem.style.boxShadow = "2px 2px 4px 1px silver"
        }
        else{
            elem.style.backgroundColor = "azure";
            elem.style.color = "grey";
            elem.style.boxShadow = "none"
        }

    }
</script>
        <div class="container main-wrapper bg-grey">
        <div class="header flex-row">
            <div class="link ">
                <ul>
                    <li>Home</li>
                    <li>About Us</li>
                    <li>Contact Us</li>
                </ul>
            </div>
            <div class="date">
                12th May, 2023
            </div>
            </div>
            <div class="content-wrapper"><br><br>
            
            <br>
            What Service do you require?
            </div>
            <div class="form-wrapper bg-white disp-flex content-justify-center">
                <hr width="95%" color="silver" style="position: relative">

                <div style="position:absolute;" class="steps">
                    <div class="step-dot" tip="Details" onclick="steps(this)"></div>
                    <div class="step-dot"></div>
                    <div class="step-dot-incomplete"></div>
                    <div class="step-dot-incomplete"></div>
                    <div class="step-dot-incomplete"></div>
                </div>
            </div>    
            <div class="form-wrapper bg-white">
            2/5
                <div class="action-tip">
                Services & Location
                </div>
                <div class="flex-row">
                    <span style="color:red">*</span> Service:
                    <!-- <input type="checkbox" class="checkbox" name="service_type" value="land"> Land<br>
                    <input type="checkbox" class="checkbox" name="service_type" value="building"> Building<br>
                    <input type="checkbox" class="checkbox" name="service_type" value="shop"> Shop<br> -->
                    <div class="form-click-option" id="service_type" onclick="select_option(this)">Land</div>
                    <div class="form-click-option" id="service_type" onclick="select_option(this)">Building</div>
                    <div class="form-click-option" id="service_type" onclick="select_option(this)">Shops</div>
                    <div class="form-click-option" id="service_type" onclick="select_option(this)">Apartment</div>
                    <div class="form-click-option" id="service_type" onclick="select_option(this)">Office Complex</div>
                    <div class="form-click-option" id="service_type" onclick="select_option(this)">School</div>
                    <div class="form-click-option" id="service_type" onclick="select_option(this)">Event Centers</div>
                    <div class="form-more-option" id="service_type">more...</div>
                </div>
<br><br><br>

                <div class="flex-row">
                Location:
                </div>

                <div class="flex-row">
                <span style="color:red;">Popular</span>
                <div class="form-click-option" id="service_type">Lagos</div>
                <div class="form-click-option" id="service_type">Abuja</div>
                <div class="form-click-option" id="service_type">Port Harcourt</div>
                <div class="form-click-option" id="service_type">Kano</div>
                </div>

                <div class="flex-row">
                <input type="text" class="text" placeholder="Type location...">
                </div>

                <input type="button" class="button-active" value="Next">

                <input type="button" class="button-inactive" value="Previous">
            </div>
        </div>
    </body>

</html>
