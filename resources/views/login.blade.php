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
                You are almost there!
            </div>
            <div class="form-wrapper bg-white disp-flex content-justify-center">
                <hr width="95%" color="silver" style="position: relative">

                <div style="position:absolute;" class="steps">
                    <div style=" width: 15px; height: 15px; border-radius: 50%; background-color:green;" tip="Details" onclick="steps(this)"></div>
                    <div style="width: 15px; height: 15px; border-radius: 50%; background-color:green;"></div>
                    <div style="width: 15px; height: 15px; border-radius: 50%; background-color:silver;"></div>
                </div>
            </div>    
            <div class="form-wrapper bg-white">
                <div class="action-tip">
                    How can we reach you?
                </div>
                <span style="color:red">*</span> Email:
                <input type="text" class="text" placeholder="Email"><br>
                Phone (Optional):
                <input type="number" class="text" placeholder="Phone number">
                <input type="button" class="button" value="Submit Request">
            </div>
        </div>
    </body>

</html>
