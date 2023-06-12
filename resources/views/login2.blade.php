@include('parts/header')

<script>
    function steps(elem)
    {
        var tip = elem.getAttribute('tip');
        var x = elem.position.getX
        alert();
    }
</script>
        <div class="container main-wrapper bg-grey">
            <div class="content-wrapper"><br><br><br>
                What Service do you require?
            </div>
            <div class="form-wrapper bg-white disp-flex content-justify-center">
                <hr width="95%" color="silver" style="position: relative">

                <div style="position:absolute;" class="steps">
                    <div style=" width: 15px; height: 15px; border-radius: 50%; background-color:green;" tip="Details" onclick="steps(this)"></div>
                    <div style="width: 15px; height: 15px; border-radius: 50%; background-color:silver;"></div>
                    <div style="width: 15px; height: 15px; border-radius: 50%; background-color:silver;"></div>
                </div>
            </div>    
            <div class="form-wrapper bg-white">
                <div class="action-tip">
                    Services required?
                </div>
                <div class="flex-row">
                    <span style="color:red">*</span> Service:
                    <input type="checkbox" class="checkbox" name="service_type" value="land"> Land<br>
                    <input type="checkbox" class="checkbox" name="service_type" value="building"> Building<br>
                    <input type="checkbox" class="checkbox" name="service_type" value="shop"> Shop<br>
                </div>
                <div class="flex-row">
                Location:
                <select class="select" name="country">
                    <option>select state</option>
                    <option>Lagos</option>
                    <option>Abuja</option>
                    <option>Plateau</option>
                    <option>Nasarawa</option>
                </select>
                </div>
                <div class="flex-row">
                <input type="button" class="button" value="Submit Request">

        </div>
    </body>

</html>
