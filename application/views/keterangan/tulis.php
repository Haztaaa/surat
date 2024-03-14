<!DOCTYPE html>
<html>

<head>
    <title>contoh surat pengunguman</title>
    <style type="text/css">
        @page {
            size: A4;
            margin: 0;
        }

        @media print {

            html,
            body {
                width: 210mm;
                height: 297mm;
            }

            /* ... the rest of the rules ... */
        }

        table {
            border-style: double;
            border-width: 3px;
            border-color: white;
        }

        table tr .text2 {
            text-align: right;
            font-size: 13px;
        }

        table tr .text {
            text-align: center;
            font-size: 13px;
        }

        table tr td {
            font-size: 13px;
        }
    </style>
</head>

<body>
    <center>
        <table width="625">
            <tr>

                <td>
                    <center>

                        <font size="5"><b>MATRIMONIUM CONTRACTI</b></font><br>

                        <font size="2">K e u s k u p a n M a n a d o</font>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2">

                </td>
            </tr>
            <table width="625">
                <tr>
                    <td>
                        <div style="font-size:13px;  text-align: center;margin-left:220px;">
                            Liber Matrimonium.:</div><br>
                        <div style="font-size:12px;  margin-top:-18px; margin-left:363px;"><i>Buku Perkawinan</i></div>
                        <div style="font-size:13px;  margin-top:-26px; margin-left:471px;"><?= $data['buku_perkawinan'] ?></div>

                    </td>
                </tr>
            </table>
        </table>
        <table width="625">
            <tr>
                <td>
                    <p style="font-size:15px; text-decoration: underline; text-decoration-skip-ink: none;  text-underline-offset: 2px;">Anno</p>
                    <p style="margin-top:-15px;">Die</p>
                </td>
                <td>
                    <p><?= $data_tahun ?></p>
                </td>
                <td>
                    <p style="font-size:15px; text-decoration: underline; text-decoration-skip-ink: none;  text-underline-offset: 2px;">die</p>
                    <p style="margin-top:-15px;">tanggal</p>
                </td>
                <td>
                    <p> <?= $hari ?> <?= $data_bulan ?></p>
                </td>
                <td>
                    <p style="font-size:15px; text-decoration: underline; text-decoration-skip-ink: none;  text-underline-offset: 2px;">in ecclesia/sacello</p>
                    <p style="margin-top:-15px;">di gereja/kapel</p>
                </td>
                <td>
                    <p style="margin-left:-50px;"><?= $data['gereja'] ?></p>
                </td>
            </tr>
        </table>
        <table width="625">
            <tr>
                <td>
                    <p style="font-size:15px; text-decoration: underline; text-decoration-skip-ink: none;  text-underline-offset: 2px;">loci</p>
                    <p style="margin-top:-15px;">tempat</p>
                </td>
                <td>
                    <p><?= $data['tempat'] ?></p>
                </td>
                <td>
                    <p style="font-size:15px; text-decoration: underline; text-decoration-skip-ink: none;  text-underline-offset: 2px;">coram me infrascripto</p>
                    <p style="margin-top:-15px;">dihadapan saya yang namanya tertulis di bawah ini</p>
                </td>

            </tr>
        </table>

        <table width="625">
            <tr>
                <td>
                    <p style="font-size:15px; text-decoration: underline; text-decoration-skip-ink: none;  text-underline-offset: 2px;">matrimonium rite inierunt ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎‎ ‎ ‎:</p>
                    <p style="margin-top:-15px;">telah melangsungkan perkawinan</p>
                    <p style="margin-top:-45px; margin-left:225px; font-size:15px;"><?= $data['nama_pria'] ?></p>
                </td>
            </tr>
        </table>
        <table width="625">
            <tr>
                <td>
                    <p style="font-size:15px; text-decoration: underline; text-decoration-skip-ink: none;  text-underline-offset: 2px;">Filius c. p. s ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎:</p>
                    <p style="margin-top:-15px;">Anak laki-laki dari orang tua</p>
                    <p style="margin-top:-45px; margin-left:225px; font-size:15px;"><?= $data['ayah_pria'] ?> et <?= $data['ibu_pria'] ?></p>
                </td>
            </tr>
        </table>
        <table width="625">
            <tr>
                <td>
                    <p style="font-size:15px; text-decoration: underline; text-decoration-skip-ink: none;  text-underline-offset: 2px; margin-left: 50px;">et </p>
                    <p style="margin-top:-15px; margin-left: 50px;">dan</p>
                    <p style="margin-top:-45px; margin-left:209px;">:</p>
                    <p style="margin-top:-28px; margin-left:225px; font-size:15px;"><?= $data['nama_wanita'] ?></p>
                </td>
            </tr>
        </table>
        <table width="625">
            <tr>
                <td>
                    <p style="font-size:15px; text-decoration: underline; text-decoration-skip-ink: none;  text-underline-offset: 2px;">Filia c. p. s ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ :</p>
                    <p style="margin-top:-15px;">Anak perempuan dari orang tua</p>
                    <p style="margin-top:-45px; margin-left:225px; font-size:15px;"><?= $data['ayah_wanita'] ?> et <?= $data['ibu_wanita'] ?></p>
                </td>
            </tr>
        </table>
        <table width="625">
            <tr>
                <td>
                    <p style="font-size:15px; text-decoration: underline; text-decoration-skip-ink: none;  text-underline-offset: 2px;">Dispensati super impedimentis et/vel cum applicatione privilegii fidei</p>
                    <p style="margin-top:-15px;">Setelah memperoleh dispensasi atas halangan nikah dan/atau dengan menggunakan privilegi iman</p>
                </td>
            </tr>
        </table>

        <table width="625">
            <tr>
                <td>
                    <p style="font-size:15px; text-decoration: underline; text-decoration-skip-ink: none;  text-underline-offset: 2px;">Testes stunt: </p>
                    <p style="margin-top:-15px;">Saksii - saksi</p>
                    <p style="margin-top:-45px; margin-left:105px; font-size:15px;">1.<?= $data['saksi'] ?></p>
                    <!--   <p style="margin-top:-5px; margin-left:105px; font-size:15px;">2. Tes</p>-->
                </td>
            </tr>
        </table>

        <table width="625">
            <tr>
                <td>
                    <p style="font-size:15px; text-decoration: underline; text-decoration-skip-ink: none;  text-underline-offset: 2px; margin-top:-5px; margin-left:325px;">Test qualif :</p>
                    <p style="margin-top:-15px; margin-left:325px;">Saksi resmi</p>
                    <p style="margin-top:-45px; margin-left:105px; font-size:15px; margin-left:410px;"><?= $data['saksi_resmi'] ?></p>
                </td>
            </tr>
        </table>
        <table width="625">
            <tr>
                <td align="center">
                    <p style="font-size:15px; text-decoration: underline; text-decoration-skip-ink: none;  text-underline-offset: 2px;">Sui originale</p>
                    <p style="margin-top:-15px;">Sesuai aslinya</p>
                </td>
            </tr>
        </table>
        <table width="625">
            <tr align="center">
                <td>
                    <p style="font-size:15px; text-decoration: underline; text-decoration-skip-ink: none;  text-underline-offset: 2px;">Ex datum</p>
                    <p style="margin-top:-15px;">Diberikan di</p>
                </td>
                <td>
                    <p><?= $data['diberikan'] ?></p>
                </td>
                <td>
                    <p style="font-size:15px; text-decoration: underline; text-decoration-skip-ink: none;  text-underline-offset: 2px;">Die</p>
                    <p style="margin-top:-15px;">tanggal</p>
                </td>
                <td>
                    <p><?= $hari_diberikan ?> <?= $bulan_diberikan ?></p>
                </td>
                <td>
                    <p style="font-size:15px; text-decoration: underline; text-decoration-skip-ink: none;  text-underline-offset: 2px;">Die</p>
                    <p style="margin-top:-15px;">tahun</p>
                </td>
                <td>
                    <p><?= $tahun_diberikan ?></p>
                </td>
            </tr>
        </table>
        <table width="625">
            <tr>

                <td width=""><br><br><br><br></td>
                <td class="" align="center">
                    <div style=" text-decoration: underline; text-decoration-skip-ink: none; text-underline-offset: 2px;">Quod Attestor</div>

                    <div><i>yang menyalin</i></div><br><br><br><br><br><br><br>
                    <div style="font-size:15px;"><?= $data['saksi_resmi'] ?></div>

                    <div>Pastor Paroki</div>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>