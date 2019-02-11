<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
function gg()
{

    var da = $("#data").val();
    if(da === ''){
  		$("#result").html('Jangan kosongin aku!');
  		return false;
    }
    var d = {
        "data": da,
        "mod" : "m",
        "replacement" : ' ',
    }

    $.ajax({
        type: 'post',
        url: 'api.php',
        data: d,
        dataType: 'json',
        success: function (res) {
            var str = JSON.stringify(res);
            var obj = JSON.parse(str);
            if(obj['result'] === null){
            	$('#result').html('Error Hmm');
            	return false;
            }

            $('#result').html(obj['pcre']);
        }
    });
 return false;
}
</script>
<style type="text/css">
	.login-container{
    margin-top: 5%;
    margin-bottom: 5%;
}
.login-form-1{
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-1 h3{
    text-align: center;
    color: #333;
}
.login-form-2{
    padding: 5%;
    background: #0062cc;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 h3{
    text-align: center;
    color: #fff;
}
.login-container form{
    padding: 10%;
}
.btnSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    border: none;
    cursor: pointer;
}
.login-form-1 .btnSubmit{
    font-weight: 600;
    color: #fff;
    background-color: #0062cc;
}
.login-form-2 .btnSubmit{
    font-weight: 600;
    color: #0062cc;
    background-color: #fff;
}
.login-form-2 .ForgetPwd{
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}
.login-form-1 .ForgetPwd{
    color: #0062cc;
    font-weight: 600;
    text-decoration: none;
}

</style>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Replace Spesial Karakter!</h3>
                    <form method="POST" onsubmit="return gg();" autocomplete="off">
                        <div class="form-group">
                            <textarea name="data" id="data" class="form-control">Ini@gak#boleh!</textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Replace"/>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Your Result Goes Here</h3>
                    <form>
                        <div class="form-group">
                            <textarea name="result" id="result" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>

