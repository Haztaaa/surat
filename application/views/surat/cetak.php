<!DOCTYPE html>
<html>

<head>
    <link href="https://www.dafontfree.net/embed/dGVtcHVzLXNhbnMtaXRjLXJlZ3VsYXImZGF0YS80MC90LzEwMjk0My9URU1QU0lUQy5UVEY" rel="stylesheet" type="text/css" />
    <link href="https://www.dafontfree.net/embed/bmstbW9ub3R5cGUtY29yc2l2YS1pdGFsaWMmZGF0YS80Mi9uLzk0MTMzL05LX01vbm8udHRm" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/style.css">

    <title>Surat Permandian</title>

</head>

<body onload="PrintDiv()">


    <div id="divToPrint">
        <center>
            <table width="625" style="margin-bottom:-5px;">
                <tr>
                    <td width="777">
                        <div style="text-align:left; margin-right:15px;">
                            <font size="1" style="font-family: Arial, Helvetica, sans-serif;"><b>Keuskupan Manado</b></font><br>
                            <font size="1" style="font-family: Arial, Helvetica, sans-serif;  "><b>Indonesia</b></font><br>

                            <div style="width: 40%; height: 20px; border-bottom: 1px solid black; margin-left:-0px; margin-top:-15px; text-align:center; z-index:1000; position:relative;">
                            </div>
                            <font size="1"><i style="font-family: Monotype, sans-serif;">Diocesis de Manado</i></font><br>
                            <font size="1"><i style="font-family: Monotype, sans-serif;">Indonesia</i></font>
                        </div>
                    </td>

                    <td width="-11111">
                        <div style="margin-right:8em; margin-right:-11px;">
                            <img src="<?= base_url() ?>assets/images/logo1.png" width="90" height="90">
                        </div>
                    </td>
                    <td width="888">
                        <div style="text-align:right;">
                            <font size="1" style="font-family: Arial, Helvetica, sans-serif; "><b>GEREJA ST. MARIA RATU PARA RASUL</b></font><br>
                            <font size="1" style="font-family: Arial, Helvetica, sans-serif;"><b>PAROKI MANEMBO-NEMBO</b></font><br>
                            <font size="1">Jl. Efraim Lengkong Kec. Matuari</font><br>
                            <font size="1">Manembo-nembo - Sulawesi Utara</font><br>
                            <font size="1"><i>"ST. MARY QUEEN OF APOSTLES" PARISH</i></font><br>
                            <font size="1"><i>MANEMBO-NEMBO, Indonesia</i></font>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="margin-bottom:-5px;">
                        <div style="text-align:center;">
                            <font size="6">SuratPermandian</font><br>
                            <font style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;"><i>EXTRACUM E REGISTIRO BAPTISMALI</i></font><br>
                            <font size="1" style="font-family: Arial, Helvetica, sans-serif; font-size: 10px;"><b>CERTIFICATE OF BAPTISM</b></font><br>
                        </div>
                    </td>
                </tr>

            </table>
            <table style="border: 1px solid black;  border-collapse: collapse; width: 40%; ">
                <tr style="background-color:#8EAADB; ">
                    <th style="border: 1px solid black;">Buku / <i style="font-family: Monotype, sans-serif;">Reg</i></th>
                    <th style="border: 1px solid black;">Hal / <i style="font-family: Monotype, sans-serif;">Fol</i></th>
                    <th style="border: 1px solid black;">No / <i style="font-family: Monotype, sans-serif;">Num</i></th>
                </tr>
                <tr style="border: 1px solid black;background-color: #D9D9D9;">
                    <td style="border: 1px solid black; text-align:center;">1</td>
                    <td style="border: 1px solid black; text-align:center;">1</td>
                    <td style="border: 1px solid black; text-align:center;">000</td>
                </tr>

            </table>
            <br> <br>
            <table width="625" style="margin-top:-2px;">
                <tr class="text2">
                    <td style="font-family: Arial, Helvetica, sans-serif; margin-bottom:-25px;"><b>Tanggal</b> <br><i style="font-family: Monotype, sans-serif;"> Die / Anno </i><br> Date/Month/Year</td>
                    <td width="523">
                        <div>
                            <p style="margin-bottom:-15px; margin-top:-15px; margin-left:25px; font-family: Arial, Helvetica, sans-serif; "><b><?= $data['tgl_lahir'] ?></b></p>

                            <div style="width: 92%; height: 20px; border-bottom: 1px solid black; text-align: center">


                                <span style="font-size: 15px; margin-top:5px; margin-left:-1px; background-color: #FFFFFF; padding: 12px; ">
                                    Di ‎ ‎ ‎
                                    <span style=" display: block; font-size: 15px;"><i style="font-family: Monotype, sans-serif;"> In</i> <br> At <br> ‎</span>
                                </span>

                            </div>
                            <p style="text-align:center; margin-top:-18px; margin-left:200px"><?= $data['tmpt_lahir'] ?></p>
                            <p style="text-align:right; margin-top:-28px;">Lahir</p>
                            <p style="text-align:right; margin-top:-15px; font-family: Monotype, sans-serif;"><i>At Nata</i></p>
                            <p style="text-align:right; margin-top:-15px;">Birth</p>
                    </td>
                </tr>
                <tr>
                    <td style=" font-family: Arial, Helvetica, sans-serif; margin-top:5em;"><b>Tanggal</b> <br><i style="font-family: Monotype, sans-serif;"> Die / Anno </i> <br> Date/Month/Year
                    </td>
                    <td width="523">
                        <div>
                            <p style="margin-bottom:-15px; margin-top:-1px; margin-left:25px; font-family: Arial, Helvetica, sans-serif; "><b><?= $data['tgl_permandian'] ?></b></p>

                            <div style="width: 89%; height: 20px; border-bottom: 1px solid black; text-align: center">

                                <span style="font-size: 15px; margin-top:0; margin-left:-1px; background-color: #FFFFFF; padding: 12px; ">
                                    Di ‎ ‎ ‎
                                    <span style=" display: block; font-size: 15px;"><i style="font-family: Monotype, sans-serif;">In</i><br> At <br> ‎</span>
                                </span>
                            </div>
                            <p style="text-align:center; margin-top:-18px; margin-left:160px"><?= $data['tmpt_permandian'] ?></p>
                            <p style="text-align:right; margin-top:-28px;">Dipermandikan</p>
                            <p style="text-align:right; margin-top:-15px; font-family: Monotype, sans-serif;">Baptizata</p>
                            <p style="text-align:right; margin-top:-15px;">Baptized</p>
                    </td>
                </tr>
            </table>
            <br>
            <table width="625" style="margin-top:-5px;">
                <tr>
                    <td style="text-align: center;">
                        <font size="5" style="font-family:Comic Sans MS, Comic Sans, cursive"><?= $data['nama_anak'] ?></font>
                    </td>
                </tr>
            </table>
            <br>
            <table width="625" style="margin-top:-7px;">
                <tr>
                    <td style="font-family: Arial, Helvetica, sans-serif; "><b>Anak</b> <br><i style="font-family: Monotype, sans-serif;"> Filius / a </i><br> Child of</td>
                    <td width="523">

                        <p style="margin-bottom:27px;  margin-left:30px; font-family: Arial, Helvetica, sans-serif; "><b><?= $data['jenis_kelamin'] ?> Dari</b></p>
                        <p style="margin-top:-43px;  margin-left:200px; font-family: Arial, Helvetica, sans-serif; "><b> Ayah</b> <br><i style="font-family: Monotype, sans-serif;">Cujus Pater </i><br><i>Father</i></p>
                        <div style="width: 45%; height: 20px; border-bottom: 1px solid black; margin-left:265px; margin-top:-65px;">
                        </div>
                        <p style="text-align:center; margin-top:-18px; margin-left:200px"><?= $data['nama_ayah'] ?></p>
                        <p style="text-align:right; margin-top:-28px;font-family: Arial, Helvetica, sans-serif;"><b>dan</b></p>
                        <p style="text-align:right; margin-top:-15px;">et</p>
                        <p style="text-align:right; margin-top:-15px;"><i>and</i></p>

                        <div style="margin-bottom:-40px;">
                            <p style="margin-top:-4px;  margin-left:200px; font-family: Arial, Helvetica, sans-serif; "><b> Ibu</b> <br><i style="font-family: Monotype, sans-serif;">Cujus Mater </i><br><i>Mother</i></p>
                            <div style="width: 45%; height: 20px; border-bottom: 1px solid black; margin-left:265px; margin-top:-65px;">
                            </div>
                            <p style="text-align:center; margin-top:-18px; margin-left:200px"><?= $data['nama_ibu'] ?></p>
                            <p style="text-align:right; margin-top:-28px;font-family: Arial, Helvetica, sans-serif;"><b>‎</b></p>
                            <p style="text-align:right; margin-top:-15px;">‎</p>
                            <p style="text-align:right; margin-top:-15px;"><i>‎</i></p>
                        </div>
                    </td>

                </tr>
            </table>
            <br><br>
            <table width="625" style="margin-top:-7px;">
                <tr>
                    <td style="font-family: Arial, Helvetica, sans-serif; "><b>Wali Baptis</b> <br><i style="font-family: Monotype, sans-serif;">Susc / Test </i><br> Sponsor</td>

                    <td width="222">
                        <div style="width: 212%; height: 20px; border-bottom: 1px solid black; margin-left:-258px; margin-top:-26px; text-align:center;">


                        </div>
                        <p style="text-align:left; margin-top:-18px; margin-left:-250px;"><?= $data['wali_baptis'] ?></p>
                    </td>
                </tr>

            </table>
            <table width="625" style="margin-top:-8px;">
                <tr>
                    <td style="font-family: Arial, Helvetica, sans-serif; "><b>Diterima Oleh</b> <br> <i style="font-family: Monotype, sans-serif;"> Acceptavit </i><br>Accepted by</td>
                    <td width="222">
                        <div style="width: 212%; height: 20px; border-bottom: 1px solid black; margin-left:-258px; margin-top:-26px; text-align:center;">


                        </div>
                        <p style="text-align:left; margin-top:-18px; margin-left:-250px;"><?= $data['diterima_oleh'] ?>h</p>
                    </td>
                </tr>

            </table>
            <table width="625" style="margin-top: -2px;">
                <tr>
                    <td style="font-family: Arial, Helvetica, sans-serif; "><b>Tempat/Tgl. SakramenPenguatan -</b> <br><i style="font-family: Monotype, sans-serif;">Ecclesiae/ DieAniConfirmat</i><br> Place/Date Of Sacr. Confirmation </td>
                    <td width="">



                        <div style="width: 112%; height: 20px; border-bottom: 1px solid black; margin-left:-46px; margin-top:-30px; text-align:center;">
                            <span style="font-size: 15px; margin-top:0; margin-left:-1px; background-color: #FFFFFF; padding: 20px; ">
                                <p style="text-align:center; margin-left:-2px; margin-top:-10px;font-family: Arial, Helvetica, sans-serif; font-size:10px;"><b>Di -</b></p>
                                <p style="text-align:center; margin-left:-5px; margin-top:-8px; font-size:10px; font-family: Monotype, sans-serif;">In</p>
                                <p style="text-align:center; margin-left:-5px; margin-top:-8px; font-size:10px;"><i>At</i></p>
                                <p>‎ ‎</p>
                            </span>

                        </div>
                        <p style="text-align:center; margin-top:-18px; margin-left:200px"><?= $data['tmpt_sakramen'] ?></p>

                        <p style="text-align:center; margin-top:-28px; margin-left:-255px"><?= $data['tgl_sakramen'] ?></p>

                    </td>
                </tr>

            </table>

            <table width="625" style="margin-top:-2px;">
                <tr>
                    <td style="font-family: Arial, Helvetica, sans-serif; "><b>Menikah Dengan</b> <br><i style="font-family: Monotype, sans-serif;">Matrimoniojunct. Cum </i><br> Married to</td>
                    <td width="210">
                        <div style="width: 218%; height: 20px; border-bottom: 1px solid black; margin-left:-258px; margin-top:-26px; text-align:center; z-index:1000; position:relative;">

                        </div>
                        <p style="text-align:left; margin-top:-18px; margin-left:-250px;"><?= $data['menikah_dengan'] ?></p>
                    </td>
                </tr>

            </table>
            <table width="625" style="margin-top:-2px;">
                <tr>
                    <td style="font-family: Arial, Helvetica, sans-serif; "><b>Tanggal/Tempat</b> <br><i style="font-family: Monotype, sans-serif;">Anno/Die </i><br>Date/Place of Married</td>
                    <td width="">



                        <div style="width: 110%; height: 20px; border-bottom: 1px solid black; margin-left:-46px; margin-top:-30px; text-align:center; z-index:1000; position:relative;">
                            <span style="font-size: 15px; margin-top:0; margin-left:-1px; background-color: #FFFFFF; padding: 20px; ">
                                <p style="text-align:center; margin-left:-2px; margin-top:-10px;font-family: Arial, Helvetica, sans-serif; font-size:10px;"><b>Di -</b></p>

                                <p style="text-align:center; margin-left:-5px; margin-top:-8px; font-size:10px; font-family: Monotype, sans-serif;">In</p>
                                <p style="text-align:center; margin-left:-5px; margin-top:-8px; font-size:10px;"><i>At</i></p>
                                <p>‎ ‎ ‎</p>
                            </span>

                        </div>
                        <p style="text-align:center; margin-top:-18px; margin-left:200px"><?= $data['tmpt_menikah'] ?></p>

                        <p style="text-align:center; margin-top:-28px; margin-left:-255px"><?= $data['tgl_menikah'] ?></p>

                    </td>
                </tr>

            </table>
            <table width="625" style="margin-top:-7px;">
                <tr>
                    <td width="374"><br><br><br><br></td>
                    <td class="" align="center">Sesuai Denggan Aslinya<br>
                        <div style="text-decoration: overline underline; text-decoration-skip-ink: none;  text-underline-offset: 2px; font-family: Monotype, sans-serif;">Concodat cum originali, quod attestatur </div>
                        <div><i>According to the original entry</i></div><br><br><br>
                        <div style="text-decoration: underline; text-decoration-skip-ink: none;  text-underline-offset: 2px;"><?= $pengguna['nama'] ?></div>
                        <div><?= $pengguna['jabatan'] ?> Paroki</div>
                    </td>
                </tr>
            </table>
            <br>
            <table style="margin-top:-6px;">
                <tr>
                    <?php date_default_timezone_set('Asia/Makassar'); ?>
                    <td width="480" style="font-size: 13px;">
                        TanggalCetak: <?php echo date("d-m-Y H:i:s"); ?>
                    </td>

                    <td style="font-size: 13px;">No. Register Keluar: <?php $var = $this->db->query("SELECT * FROM regist")->num_rows();
                                                                        echo $var  ?> </td>
                </tr>
            </table>
        </center>
    </div>
    <script type="text/javascript">
        function PrintDiv() {

            var divToPrint = document.getElementById('divToPrint');

            var popupWin = window.open('', '_blank', 'width=auto,height=auto');

            popupWin.document.open();
            popupWin.document.write(
                '<html>  <link rel="stylesheet" href="<?= base_url() ?>assets/style.css">  <body onload = "window.print()" > ' + divToPrint.innerHTML + '</html > '
            );
            popupWin.document.close();
        }
    </script>
</body>

</html>