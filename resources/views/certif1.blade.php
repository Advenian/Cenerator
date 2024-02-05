<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @page {
            margin: 0;
            size: 2000px 1414px;
            /* height: 1414px;
            width: 2000px; */
        }

        body {
            padding: 0;
            margin: 0;
        }

        .certificate-image {
            width: 100%;
            /* height: 1414px;
            width: 2000px;
            margin: auto;
            display: block */
        }

        .certificate-title {
            font-size: 150px;
            /* background-color: red; */
            padding: 100px
        }

        .certificate-subtitle {
            font-size: 100px;
            padding: 0
        }

        .certificate-sub-subtitle {
            font-size: 55px;
            padding: 0;
            /* padding-top: 100px; */
        }

        .certificate-name {
            font-size: 180px;
        }

        .certificate-text {
            font-size: 40px;
        }

        .certificate-subtext {
            font-size: 30px;
        }

        .certificate-border {
            margin: auto;
            border: 0px solid black;
            width: 60%;
            text-align: center;
        }

        .signature-image {
            width: 80%;
            object-fit: cover;
            height: auto;
        }
    </style>
</head>

<body>
    <div style="width: 100%; position: absolute;margin: 0">
        <img src="{{ asset('assets/1.jpg') }}" class="certificate-image" alt="">

    </div>
    <div style="position: relative; padding: 0;padding-top: 50px; text-align: center;">
        <span class="certificate-title">CERTIFICATE</span><br>
        <span class="certificate-subtitle">of Completion</span><br><br><br>
        <span class="certificate-sub-subtitle">This certificate is awarded to:</span><br>
        <span class="certificate-name">Khairul Akmal</span>
        <hr style="width: 40%">
        <span class="certificate-text">for successfully completing the course of Graphic Design Essentials
        </span><br>
        <span class="certificate-text">Awarded December 15th, 2025
        </span><br>
        <br><br><br><br><br>
        <table class="certificate-border">
            <tr>
                <td><img class="signature-image" src="{{ asset('assets/signaturerandom.png') }}" alt=""></td>
                <td rowspan="4" style="font-size: 75px">X</td>
                <td><img class="signature-image" src="{{ asset('assets/signaturerandom.png') }}" alt=""></td>
            </tr>
            <tr>
                <td>
                    <hr style="width: 40%">
                </td>
                <td>
                    <hr style="width: 40%">
                </td>
            </tr>
            <tr>
                <td class="certificate-text">Dipta</td>
                <td class="certificate-text">Athar</td>
            </tr>
            <tr>
                <td class="certificate-subtext">CEO of Yanto</td>
                <td class="certificate-subtext">Trainer at Yanto</td>
            </tr>
        </table>
    </div>
</body>

</html>
