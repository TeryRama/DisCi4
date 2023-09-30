<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://unpkg.com/@jarstone/dselect/dist/css/dselect.css"> -->
</head>

<body style="font-family: 'Montserrat', sans-serif; padding:10px;">
    <form method="GET" action="<?= base_url('/backend/unduh-laporan') ?>">
        <div class="mt-2">
            <label>Pasar</label>
            <select class="form-select" id="pasar" name="pasar" required>
                <option value="">Pilih pasar</option>
                <?php
                foreach ($pasar as $row) {
                ?>
                    <option value="<?= encrypt_url($row->pasar_id) ?>"><?= $row->pasar_nama ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group mt-2">
            <label>Jenis Laporan</label>
            <select class="form-select " id="jenis" name="jenis" required>
                <option value="">Pilih jenis laporan</option>
                <option value="tanggal">Berdasarkan Tanggal</option>
                <option value="bulan">Berdasarkan Bulan</option>
                <option value="range">Berdasarkan Range Tanggal</option>
            </select>
        </div>

        <div id="tanggal-single" class="mt-2">
            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control">
            </div>
        </div>

        <div id="tanggal-range" class="mt-2 row">
            <div class="col-6 form-group">
                <label>Tanggal Awal</label>
                <input type="date" name="tanggalawal" id="tanggalawal" class="form-control">
            </div>
            <div class="col-6 form-group">
                <label>Tanggal Akhir</label>
                <input type="date" name="tanggalakhir" id="tanggalakhir" class="form-control">
            </div>
        </div>
        <div id="bulan-tahun" class="mt-2 row">
            <?php
            $bulan = date('m');
            $tahun = date('Y');
            ?>
            <div class="col-6 form-group">
                <label>Bulan</label>
                <select class="form-select" data-dselect-search="true" id="bulan" name="bulan">
                    <option value="01" <?php if ($bulan == '01') {
                                            echo "selected";
                                        } ?>>Januari</option>
                    <option value="02" <?php if ($bulan == '02') {
                                            echo "selected";
                                        } ?>>Februari</option>
                    <option value="03" <?php if ($bulan == '03') {
                                            echo "selected";
                                        } ?>>Maret</option>
                    <option value="04" <?php if ($bulan == '04') {
                                            echo "selected";
                                        } ?>>April</option>
                    <option value="05" <?php if ($bulan == '05') {
                                            echo "selected";
                                        } ?>>Mei</option>
                    <option value="06" <?php if ($bulan == '06') {
                                            echo "selected";
                                        } ?>>Juni</option>
                    <option value="07" <?php if ($bulan == '07') {
                                            echo "selected";
                                        } ?>>Juli</option>
                    <option value="08" <?php if ($bulan == '08') {
                                            echo "selected";
                                        } ?>>Agustus</option>
                    <option value="09" <?php if ($bulan == '09') {
                                            echo "selected";
                                        } ?>>September</option>
                    <option value="10" <?php if ($bulan == '10') {
                                            echo "selected";
                                        } ?>>Oktober</option>
                    <option value="11" <?php if ($bulan == '11') {
                                            echo "selected";
                                        } ?>>November</option>
                    <option value="12" <?php if ($bulan == '12') {
                                            echo "selected";
                                        } ?>>Desember</option>
                </select>
            </div>
            <div class="col-6 form-group">
                <label>Tahun</label>
                <select class="form-select" data-dselect-search="true" id="tahun" name="tahun">
                    <?php
                    for ($i = $tahun; $i > $tahun - 20; $i--) {
                    ?>
                        <option value="<?= $i ?>" <?php if ($i == $tahun) {
                                                        echo "selected";
                                                    } ?>><?= $i ?></option>
                    <?php
                    }
                    ?>

                </select>
            </div>
        </div>
        <input type="submit" name="btnsubmit" id="btnsubmit" class="btn text-light mt-4" value="Unduh" style="width: 100%; background-color:#21bcc0">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="https://unpkg.com/@jarstone/dselect/dist/js/dselect.js"></script> -->
    <script>
        // dselect(document.querySelector('#pasar'));
        // dselect(document.querySelector('#jenis'));
        // dselect(document.querySelector('#bulan'));
        $("#tanggal-single").hide();
        $("#tanggal-range").hide();
        $("#bulan-tahun").hide();
        $('#jenis').on('change', function() {
            if (this.value == 'bulan') {
                $("#tanggal-single").hide();
                $("#tanggal-range").hide();
                $("#bulan-tahun").show();
                $("#bulan").prop('required', true);
                $("#tahun").prop('required', true);
                $("#tanggal").prop('required', false);
                $("#tanggalawal").prop('required', false);
                $("#tanggalakhir").prop('required', false);
            } else if (this.value == 'tanggal') {
                $("#tanggal-single").show();
                $("#tanggal-range").hide();
                $("#bulan-tahun").hide();
                $("#bulan").prop('required', false);
                $("#tahun").prop('required', false);
                $("#tanggal").prop('required', true);
                $("#tanggalawal").prop('required', false);
                $("#tanggalakhir").prop('required', false);
            } else if (this.value == 'range') {
                $("#tanggal-single").hide();
                $("#tanggal-range").show();
                $("#bulan-tahun").hide();
                $("#bulan").prop('required', false);
                $("#tahun").prop('required', false);
                $("#tanggal").prop('required', false);
                $("#tanggalakhir").prop('required', true);
                $("#tanggalawal").prop('required', true);

            } else {
                $("#tanggal-single").hide();
                $("#tanggal-range").hide();
                $("#bulan-tahun").hide();

            }
        });

        $('#tanggalakhir').change(function() {
            var date2 = new Date($(this).val());
            var date1 = new Date($('#tanggalawal').val());
            if (date1 > date2) {
                document.getElementById("btnsubmit").disabled = true;
                // $('#tanggalakhir').after('<p class="validationMessage" style="color:red; font-size:12px";>Tidak valid</p>')
                $('#tanggalakhir').attr('class', 'form-control is-invalid');
            } else {
                document.getElementById("btnsubmit").disabled = false;
                $('#tanggalakhir').attr('class', 'form-control');
            }
        });
        $('#tanggalawal').change(function() {
            var date1 = new Date($(this).val());
            var date2 = new Date($('#tanggalakhir').val());
            if (date1 > date2) {
                $('#tanggalawal').attr('class', 'form-control is-invalid');
                document.getElementById("btnsubmit").disabled = true;
            } else {
                $('#tanggalawal').attr('class', 'form-control');
                document.getElementById("btnsubmit").disabled = false;
            }
        });
    </script>
</body>

</html>