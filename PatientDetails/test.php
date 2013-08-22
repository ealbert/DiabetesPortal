<html>
<head>
    <script src="../Scripts/jquery-1.10.2.min.js"></script>
</head>
<body>
<p>Pre-Ajax call</p>
<img src="hbac1_chart.php?getImage"/>
<br/>
<p>Post-Ajax call</p>
<a href="#" onclick="getImage()">Click here to call retrieve the image using AJAX</a>
<br/>
<div id="chart_holder"></div>

<script type="text/javascript">
    function getImage() {
        //var parameters = "txt="+$('myText').val();
        var response = $.ajax({
            type: "POST",
            url:  "hbac1_chart.php",
            //data: parameters,
            dataType: "text",
            success: function(imageData) {
                $('#chart_holder').html("<img src='data:image/png;base64," + imageData + "' />");
            }
        });
    }
</script>
</body>
</html>