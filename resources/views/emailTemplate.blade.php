<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mailer</title>
    <style>
        .btn{
            border-radius: 50%;
            background-color: #24529f;
            color: white;
        }
    </style>
</head>
<body>
    <main>
        <div style="padding: 0px; background-color:  #fff; border: 1px solid #24529f; margin: 10px;">
            <header>
                <div style="background-color: #f26f24; height: 90px; border-radius:0px 0px 130px 0px;">
                    <div style="background-color: #24529f; padding: 20px; height: 50px; width: 70%; border-radius:0px 0px 130px 0px; z-index: 10;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3cfHEnzBcBIkhXOMcNIQmQgcc4BycgAMkAE_ZekRAOFYoWFQEtOQlX2p3lTCy_WUxHCE&usqp=CAU" alt="ora_img" name="" width="85px" height="45px"></div>
                </div>
            </header>
            <div style="padding:20px;">
                <div>
                    <p> Dear {{$data['name']}},</p>
                    <p>{{$data['message']}}</p>
                    <ul style="list-style-type: none; padding-left: 0px; margin-top: 50px;">
                        <li style="margin-left: 0px;">Thanks,</li>
                        <li style="margin-left: 0px;">Support Team,</li>
                        <li style="margin-left: 0px;">Test Pvt. Ltd</li>
                    </ul>
                </div>
                <hr>
                <div>
                    <a href="https://orafinance.in"><img src="https://orafinance.s3.ap-south-1.amazonaws.com/loan/Group+15.png" alt="" name="" width="100%"></a>
                </div>
                <footer>
                    <table style="width: 100%; text-align: left; word-wrap: break-word; word-break:normal;">
                        <tr style="vertical-align: top;">
                            <th>Phone</th>
                            <td>:</td>
                            <td>+91-828 282 0110</td>

                        </tr>
                        <tr style="vertical-align: top;">
                            <th>Email</th>
                            <td>:</td>
                            <td>care@test.in</td>
                        </tr>
                        <tr style="vertical-align: top;">
                            <th>CIN</th>
                            <td>:</td>
                            <td>U65929DL2021PTC384921</td>
                        </tr>
                        <tr style="vertical-align: top;">
                            <th>Add</th>
                            <td>:</td>
                            <td>D-8, 1st Floor, Room No- 1, Sector-2, Noida, Uttar Pradesh, 201301
                            </td>
                        </tr>
                    </table>
                    <div style="margin-top: 40px;">For more details <a href="{{url('/')}}">click here </a> .</div>
                </footer>
            </div>
        </div>
    </main>
</body>
</html>