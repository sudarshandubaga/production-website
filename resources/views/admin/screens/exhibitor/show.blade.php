<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entry Pass | {{ $site->title }}</title>
    <script src="{{ asset('admin/assets/vendor/libs/jquery/jquery.js') }}"></script>

    <style>
        :root {
            --primary: #f90a07;
        }

        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #ccc;
            margin: 0;
        }

        img {
            height: 100vh;
        }

        /* .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 10px 0;
            font-size: 18px;
            margin-bottom: 0;

            white-space: nowrap;

            img {
                max-height: 50px;
            }
        }

        .entry-pass-container {
            max-width: 400px;
            margin: 30px auto;
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #ccc;
            text-align: center;
            background: #fff;

            header {
        border-top: 5px solid var(--primary);
        text-align: center;
        font-weight: bold;
        text-transform: uppercase;

        h3 {
            font-size: 16px;
            margin: 0px;
            background-color: var(--primary);
            padding: 20px 0;
            color: white;
        }
        }

        main {
            padding: 30px 10px;
            display: flex;
            flex-direction: column;
            gap: 20px;

            .qrcode {
                width: 128px;
                height: 128px;
            }
        }
        }

        th,
        td {
            text-align: left;
        }

        .text-center {
            text-align: center;
        }

        button {
            background: var(--primary);
            padding: 5px 15px;
            border-radius: 5px;
            border: 0;
            color: #fff;
            cursor: pointer;
        }

        */
    </style>
</head>

<body>
    {{-- <div id="pass-body">
        <div class="entry-pass-container">
            <header>
                <div class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="{{ $site->title }}">
                    <div>
                        <div>
                            The Rajasthan Property
                        </div>
                        <div>Expo</div>
                    </div>
                    <img src="{{ asset('images/the_media_house_logo.png') }}" alt="">
                </div>
                <h3>
                    Exhibitor
                </h3>
            </header>
            <main>
                <div id="qr-code">
                    {!! QrCode::size(256)->generate(
                        "Name: {$exhibitor->name}   \nCompany Name: {$exhibitor->company_name}   \nPhone: {$exhibitor->phone}   \nEmail: {$exhibitor->email}",
                    ) !!}
                </div>
                <div>
                    <table style="width: 100%;">
                        <tr>
                            <th>Name</th>
                            <td>{{ $exhibitor->name ?: '-' }}</td>
                        </tr>
                        <tr>
                            <th>Company Name</th>
                            <td>{{ $exhibitor->company_name ?: '-' }}</td>
                        </tr>
                        <tr>
                            <th>Contact No.</th>
                            <td>{{ $exhibitor->phone ?: '-' }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $exhibitor->email ?: '-' }}</td>
                        </tr>
                    </table>
                </div>
            </main>
        </div>
    </div>
    <div class="text-center">
        <button>Download</button>
    </div> --}}

    <a href="{{ asset("images/exhibitor/{$exhibitor->id}/entry-pass.jpg") }}" download class="text-center"
        style="display: block; text-align: center;">
        <img src="{{ asset("images/exhibitor/{$exhibitor->id}/entry-pass.jpg") }}" alt="">
    </a>
</body>
{{-- 
<script src="{{ asset('admin/assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/canvas2image@1.0.5/canvas2image.min.js"></script>
<script>
    function saveScreenshot(canvas) {
        const fileName = "image";
        const link = document.createElement("a");
        link.download = fileName + ".png";
        console.log(canvas);
        canvas.toBlob(function(blob) {
            console.log(blob);
            link.href = URL.createObjectURL(blob);
            link.click();
        });
    }

    let qrSvg = document.querySelector("#qr-code svg"); // Select the QR code SVG
    if (qrSvg) {
        let svgData = new XMLSerializer().serializeToString(qrSvg);
        let svgBlob = new Blob([svgData], {
            type: "image/svg+xml;charset=utf-8"
        });
        let url = URL.createObjectURL(svgBlob);

        let img = new Image();
        img.src = url;
        document.querySelector("#qr-code").appendChild(img);
        qrSvg.remove();
    } else {
        console.error("QR code SVG element not found.");
    }

    $(function() {

        $(document).on("click", "button", function(e) {
            e.preventDefault();

            html2canvas(document.getElementById('pass-body'), {
                allowTaint: true,
                useCORS: true
            }).then(
                saveScreenshot
            );
        });
    });
</script> --}}

</html>
