<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum 8</title>
    <!-- CSS BOOSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8" style="margin-top:30px;">
                <form method="POST" action="{{ route('P9/bayar') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-user-o"></i>
                                    </div>
                                </div>
                                <input id="nama" name="nama" placeholder="Masukan nama anda" type="text" class="form-control" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl" class="col-4 col-form-label">Tanggal Pemeriksaan</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-calendar-times-o"></i>
                                    </div>                                                                                         
                                </div>
                                <input id="tgl" name="tgl" placeholder="Masukan tanggal pemeriksaan anda" type="date" class="form-control" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="usia" class="col-4 col-form-label">Usia</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-calendar-times-o"></i>
                                    </div>
                                </div>
                                <input id="usia" name="usia" placeholder="Usia anda" type="number" class="form-control" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Jenis Kelamin</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L" required="required">
                                <label for="jk_0" class="custom-control-label">Laki - laki</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P" required="required">
                                <label for="jk_1" class="custom-control-label">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary" value="daftar">Submit</button>
                        </div>
                    </div>
                </form>
                <!-- Form Berakhir Disini -->
            </div>

</body>
</html>