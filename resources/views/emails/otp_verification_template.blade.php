<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>OTP to create your TravelMazi account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin:0; padding:10px 0 0 0;" bgcolor="#F8F8F8">
<table align="center" cellpadding="0" cellspacing="0" width="95%%">
    <tr>
        <td align="center">
            <table align="center"  cellpadding="0" cellspacing="0" width="600"
                   style="border-collapse: separate;  box-shadow: 1px 0 1px 1px #B8B8B8;"
                   bgcolor="#FFFFFF">
                 <tr>
                    <td align="center" style="padding: 20px 5px 0">
                        <a href="" target="_blank">
                            <img src="{{asset('public/web/img/mazi.png')}}" alt="logo.png" style="max-width:100%;">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#ffffff" style="padding: 20px 20px;">
                        <table cellpadding="0" cellspacing="0" width="100%%">
                            <tr>
                                <td style="padding: 0px 0; font-family: Avenir, sans-serif; font-size: 14px;">
                                   <p>Dear User,</p>

									<p><b>OTP is <?php echo $email_otp; ?> to create your TravelMazi account. Please do not share it with anyone.</b></p>

                                    <p>If you did not attempt the request, please contact our customer care immediately.</p>

                                    <p>Thank you for choosing us as your primary travel partner.</p>
                                    <p>Best Regards,</p>
                                    <p>TravelMazi</p>
									
									
								</td>
                            </tr>
							
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<style>
.footer-text a{
	color: #fff;
	text-decoration: none;
}
</style>
</body>
</html>