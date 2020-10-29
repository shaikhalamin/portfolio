<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Invoice</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        * {
            box-sizing: border-box;
        }

        /* Create two equal columns that floats next to each other */
        .column {
            float: left;
            width: 30%;
            padding: 10px;
            height: 300px;
            /* Should be removed. Only for demonstration */
        }

        .column2 {
            float: left;
            width: 70%;
            padding: 10px;
            height: 300px;
            /* Should be removed. Only for demonstration */
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .page-break {
            page-break-after: always;
        }

        .bg-grey {
            background: #F3F3F3;
        }

        .text-right {
            text-align: right;
        }

        .w-full {
            width: 100%;
        }

        .small-width {
            width: 15%;
        }

        .invoice {
            background: white;
            border: 1px solid #CCC;
            font-size: 14px;
            padding: 48px;
            margin: 10px 0;
        }
    </style>
</head>

<body class="">

    {{-- <div class="container container-smaller">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="invoice">
                    <div class="row">
                        <div class="col-sm-6">
                            <h4>From:</h4>
                            <address>
                                <strong>Company Inc.</strong><br>
                                123 Company Ave. <br>
                                Toronto, Ontario - L2R 4U6<br>
                                P: (416) 123 - 4567 <br>
                                E: company@company.com
                            </address>
                        </div>

                        <div class="col-sm-6 text-right">
                            <img src="https://res.cloudinary.com/dqzxpn5db/image/upload/v1537151698/website/logo.png" alt="logo">
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-sm-7">
                            <h4>To:</h4>
                            <address>
                                <strong>Andre Madarang</strong><br>
                                <span>123 Cool St.</span><br>
                                <span>andre@andre.com</span>
                            </address>
                        </div>

                        <div class="col-sm-5 text-right">
                            <table class="w-full">
                                <tbody>
                                    <tr>
                                        <th>Invoice Num:</th>
                                        <td>56</td>
                                    </tr>
                                    <tr>
                                        <th> Invoice Date: </th>
                                        <td>Jun 24, 2019</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div style="margin-bottom: 0px">&nbsp;</div>

                            <table class="w-full">
                                <tbody>
                                    <tr class="well" style="padding: 5px">
                                        <th style="padding: 5px">
                                            <div> Balance Due (CAD) </div>
                                        </th>
                                        <td style="padding: 5px"><strong> $499 </strong></td>
                                    </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table invoice-table">
                            <thead style="background: #F5F5F5;">
                                <tr>
                                    <th>Item List</th>
                                    <th></th>
                                    <th class="text-right">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <strong>Service</strong>
                                        <p>Description here. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita perferendis doloribus, quaerat molestias est eum, adipisci dolorem nulla rerum voluptatibus.</p>
                                    </td>
                                    <td></td>
                                    <td class="text-right">$600</td>
                                </tr>

                                <tr>
                                    <td>
                                        <strong>Service</strong>
                                        <p>Description here. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita perferendis doloribus, quaerat molestias est eum, adipisci dolorem nulla rerum voluptatibus.</p>
                                    </td>
                                    <td></td>
                                    <td class="text-right">$600</td>
                                </tr>

                            </tbody>
                        </table>
                    </div><!-- /table-responsive -->

                    <table class="table invoice-total">
                        <tbody>
                            <tr>
                                <td class="text-right"><strong>Balance Due :</strong></td>
                                <td class="text-right small-width">$600</td>
                            </tr>
                        </tbody>
                    </table>

                    <hr>

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="invbody-terms">
                                Thank you for your business. <br>
                                <br>
                                <h4>Payment Terms and Methods</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque neque velit tenetur pariatur perspiciatis dignissimos corporis laborum doloribus, inventore.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container">
        <div class="row">
            <div class="column">
                <img width="200" height="200" src="https://res.cloudinary.com/dqzxpn5db/image/upload/v1537151698/website/logo.png" alt="logo">
            </div>
            <div class="column2">
                <h3>Shaikh Al Amin</h3>
                <h5>Senior Software Engineer</h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, aut itaque? Unde, vero fugit numquam, aspernatur debitis quisquam possimus sequi optio similique inventore rerum voluptas ex officia quod atque adipisci.
                </p>
            </div>
        </div>
    </div>

</body>

</html>