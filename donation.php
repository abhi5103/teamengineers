<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
</head>
<style>
    .sub{
        border: 2px solid black;
    width: 89px;
    padding: 5px;
    margin: 18px;
    margin-left: 4px;
    border-radius: 8px;

    }
            .btn {
            padding: 6px 7px;
            border: 2px solid white;
            background-color: #80af81;
            color: white;
            margin: 5px;
            font-size: 1.5rem;
            border-radius: 10px;
            cursor: pointer;
        }
    .donate{
        margin-left: 370px;
        border: 2px solid cadetblue;
        width: 500px;
    }
    h2{
        margin-left: 161px;
    }
</style>
<body style="background-color:#b6c2c0;">

    <form method="post" action="//submit.form" onSubmit="return validateForm();">
        <div style="max-width: 400px;">
        </div>
        <div style="padding-bottom: 18px;font-size : 40px;margin-left: 390px;">UTTARAKHAND TOURISM</div>
        <div class="donate">
            <h2 class="dona">__Donation Form__</h2>
            <div style="display: flex; padding-bottom: 18px;max-width : 550px;">
                <div style=" margin-left: 0; margin-right: 1%; width: 49%; font-size:22px ">
                    <font color:"blue">
                    </font>First name<br />
                    <input type="text" id="data_2" name="data_2" style="max-width: 100%;" class="form-control" />
                </div>
                <div style=" margin-left: 1%; margin-right: 0; width: 49%; font-size:22px">Last name<br />
                    <input type="text" id="data_3" name="data_3" style="max-width: 100%;" class="form-control" />
                </div>
            </div>
            <div style="padding-bottom: 28px; font-size:22px">Email<br />
                <input type="text" id="data_4" name="data_4" style="max-width : 550px;" class="form-control" />
            </div>
            <div style="padding-bottom: 18px; font-size:22px">Donation Amount<span style="color: red;"> *</span><br />
                <span><input type="radio" id="data_5_0" name="data_5" value="Rs 50" /> Rs 50</span><br />
                <span><input type="radio" id="data_5_1" name="data_5" value="Rs 100" /> Rs 100</span><br />
                <span><input type="radio" id="data_5_2" name="data_5" value="Rs 250" /> Rs 250</span><br />
                <span><input type="radio" id="data_5_3" name="data_5" value="Rs 500" /> Rs 500</span><br />
            </div>
            <div style="padding-bottom: 18px; font-size:22px">Full Address<br />
                <textarea id="data_6" false name="data_6" style="max-width : 550px;" rows="3" class="form-control"></textarea>
            </div>
            <div style="padding-bottom: 18px; font-size:22px">Enter debit card details <br />
                <input type="text" id="data_4" name="data_4" style="max-width : 550px;" class="form-control" />
                <!-- <a href="../hack1/home.php" class="btn btn-primary">Submit</a> -->

                <div class="sub"><a href="../hack1/home.php">Submit</a></div>
                <div>
                    <!-- <div style="float:right"><a href="https://www.100forms.com" id="lnk100" title="form to email">form to email</a></div> -->
                    <script src="https://www.100forms.com/js/FORMKEY:A7NH8QELSEQG/SEND:my@email.com" type="text/javascript"></script>
                </div>
            </div>
    </form>

    <script type="text/javascript">
        function validateForm() {
            if (!validateEmail(document.getElementById('data_4').value.trim())) {
                alert('Email must be a valid email address!');
                return false;
            }
            if (!document.getElementById('data_5_0').checked && !document.getElementById('data_5_1').checked && !document.getElementById('data_5_2').checked && !document.getElementById('data_5_3').checked) {
                alert('Donation amount is required!');
                return false;
            }
            return true;
        }

        function isEmpty(str) {
            return (str.length === 0 || !str.trim());
        }

        function validateEmail(email) {
            var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
            return isEmpty(email) || re.test(email);
        }
    </script>
</body>

</html>