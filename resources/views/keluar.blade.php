

<html>
    <head>
        <title>Instascan</title>
        <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script> <link href="css/styles.css" rel="stylesheet" />
        
    </head>
    <body>
        <center><h3>Scan QR-Code ID card Anda</h3>
        <video id="preview" width="100%"></video>
        <form method="POST" action="{{ url('/keluar') }}" class="input-group d-none" id="formQr">
            @csrf
            <input type="text" class="form-control" name="code" id="formQrData" autofocus>
            <button type="button" class="btn btn-primary" data-toggle="modal" name="klik" onclick="startQrCamera()">
                <i class="fa fa-qrcode"></i>
            </button>
        </form><br><br>
        <a class="btn btn-danger" href="/">Kembali ke menu</a></center>


        <script type="text/javascript">
        let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
        scanner.addListener('scan', function (content) {
            let inputForm = document.getElementById('formQrData');
                let qrForm = document.getElementById('formQr');
                inputForm.value = content;
                qrForm.submit();
        });
        Instascan.Camera.getCameras().then(function (cameras) {
            if (cameras.length > 0) {
            scanner.start(cameras[0]);
            } else {
            console.error('No cameras found.');
            }
        }).catch(function (e) {
            console.error(e);
        });
        </script>
    </body>
</html>

