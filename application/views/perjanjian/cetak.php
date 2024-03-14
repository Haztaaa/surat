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
            z-index: -2;
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

<body onload="window.print()">
    <center>
        <div style="margin:10px; border: 10px solid grey; width:700px; box-sizing:inherit; ">
            <div><img src="<?= base_url() ?>assets/images/wedding.jpg" alt="" style="margin-bottom:-660px; height:300px; width:200px; text-align:center;">
                <table width="625">

                    <tr>
                        <td><img src="<?= base_url() ?>assets/images/logo1.png" width="90" height="90"></td>
                        <td>
                            <center>
                                <font size="3" style="font-family: Arial, Helvetica, sans-serif;">S A K R A M E N N I K A H</font><br>
                                <font size="4" style="font-family: Arial, Helvetica, sans-serif;color:blue; text-decoration: underline; text-decoration-skip-ink: none;  text-underline-offset: 2px;"><b>SURAT PERJANJIAN NIKAH KATOLIK</b></font><br>
                                <font size="2" style="font-family: Arial, Helvetica, sans-serif;">NO.: LM. 167 / MRPR-Manembo-nembo / X / 2022</font><br>

                            </center>
                        </td>
                        <td><img src="<?= base_url() ?>assets/images/logo1.png" width="90" height="90"></td>
                    </tr>

                    <table width="625">
                        <tr>

                            <td>
                                <div style=" border: 15px solid black;border-width: thin; height: 67px; width:30px; margin-left:80px; margin-right:200px; padding:50px;"></div>
                            </td>
                            <td>
                                <div style=" border: 15px solid black;border-width: thin; height: 67px; width:30px; margin-left:-220px; margin-right:20px; padding:50px;"></div>
                            </td>
                        </tr>
                    </table>
                </table>
                <table width="625">
                    <tr>
                        <td>
                            <p style="margin-bottom:-28px; margin-top:-8px; margin-left:100px; font-family: Arial, Helvetica, sans-serif; "><b>Mempelai Pria :</b></p>
                        </td>
                        <td>
                            <p style="margin-bottom:-28px; margin-top:-8px; margin-left:118px; font-family: Arial, Helvetica, sans-serif; "><b>Mempelai Wanita :</b></p>
                        </td>
                    </tr>
                </table>
                <br>
                <table width="625">
                    <tr>
                        <td>
                            <p style="font-family: Arial, Helvetica, sans-serif; font-size:12px; margin-top:-15px; margin-bottom:0px;">Di hadapan Imam dan para saksi, <br> saya.
                            </p>
                        </td>
                        <td>
                            <p style="font-family: Arial, Helvetica, sans-serif; font-size:12px; margin-top:-15px; margin-bottom:0px;">Di hadapan Imam dan para saksi, <br> saya.
                            </p>
                        </td>
                    </tr>
                </table>
                <table width="625">
                    <tr>

                        <td width="111">
                            <font size="3" style="font-family: Arial, Helvetica, sans-serif; color:blue; margin-left:0px; "><b><?= $data['nama_laki'] ?></b></font>
                        </td>
                        <td width="113">
                            <font size="3" style="font-family: Arial, Helvetica, sans-serif; color:blue; "><b><?= $data['nama_perempuan'] ?></b></font>
                        </td>
                    </tr>




                </table>
                <table width="625">
                    <tr>
                        <td>
                            <p style="font-family: Arial, Helvetica, sans-serif; font-size:12px; margin-top:-15px; margin-bottom:0px;">Menyatakan dengan tulus ikhlas, <br> bahwa.
                            </p>
                        </td>
                        <td>
                            <p style="font-family: Arial, Helvetica, sans-serif; font-size:12px; margin-top:-15px; margin-bottom:0px;">Menyatakan dengan tulus ikhlas, <br> bahwa.
                            </p>
                        </td>
                    </tr>
                </table>
                <table width="625">
                    <tr>

                        <td width="111">
                            <font size="3" style="font-family: Arial, Helvetica, sans-serif; color:blue; margin-left:0px; "><b><?= $data['nama_perempuan'] ?></b></font>
                        </td>

                        <td width="113">
                            <font size="3" style="font-family: Arial, Helvetica, sans-serif; color:blue; margin-right:23px; "><b><?= $data['nama_laki'] ?></b></font>
                        </td>
                    </tr>
                </table>
                <table width="625">
                    <tr>
                        <td width="312">
                            <p style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  margin-top:-12px; margin-bottom:0px; line-height: 1.5;" align="justify">yang hadir disini, <br> Mulai sekarang ini menjadi isteri saya.
                                Saya <br> berjanji setia kepadanya dalam untung dan malang, dan saya mau mencintai dan menghormatinya seumur hidup. <br> Demikianlah janji saya
                                demi Allah dan Injil suci ini.
                            </p>
                        </td>
                        <td width="111"></td>
                        <td width="288">
                            <p style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  margin-top:-15px; margin-left:-62px; margin-right:10px; line-height: 1.5;" align="justify">yang hadir disini, <br> Mulai sekarang ini menjadi isteri saya.
                                Saya <br> berjanji setia kepadanya dalam untung dan malang, dan saya mau mencintai dan menghormatinya seumur hidup. <br> Demikianlah janji saya
                                demi Allah dan Injil suci <br> ini.
                            </p>
                        </td>
                    </tr>
                </table>
                <br>
                <table width="625">
                    <tr>
                        <td>
                            <p style="font-family: Arial, Helvetica, sans-serif; font-size:13px; text-align:center;"><b> Iman Peneguh Nikah</b></p>
                        </td>
                    </tr>
                </table>
                <table width="625">
                    <tr>
                        <td>
                            <p style="font-family: Arial, Helvetica, sans-serif; font-size:13px;text-align:center; margin-top:-20px;">Atas nama Gereja Allah dan di hadapan para saksi dan hadirin sekalian, <br> saya menegaskan bahwa
                                perkawinan yang telah diresmikan ini <br> adalah perkawinan kristen yang sah. Semoga sakramen ini menjadi bagi saudara <br> sumber kekuatan dan kebahagiaan.
                            </p>
                            <p style="font-family: Arial, Helvetica, sans-serif; font-size:13px; text-align:center; margin-top:-10px;"><b>"Yang dipersatukan Allah janganlah diceraikan manusia" <br>( Mrk 10 : 9 )</b></p>
                        </td>
                    </tr>
                </table>
                <br>
                <table width="625">
                    <tr>
                        <td>
                            <p style="font-family: Arial, Helvetica, sans-serif; font-size:13px; margin-left:50px; margin-top:-10px;">Diteguhkan di :<b> <?= $data['diteguhkan'] ?> </b></p>
                        </td>
                    </tr>
                </table>
                <table width="625">
                    <tr>
                        <td>
                            <p style="font-family: Arial, Helvetica, sans-serif; font-size:13px; margin-left:50px; margin-top:-10px;">Pada tanggal :<b> <?= $data['tanggal'] ?> </b></p>
                        </td>
                    </tr>
                </table>
                <br>
                </table>
                <table>

                    <tr>
                        <td align="center">
                            <p style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  margin-top:-10px; margin-left:-200px;"><b> Peneguh Nikah</b><br><br><br><br><br>
                            <p style="font-family: Arial, Helvetica, sans-serif;color:blue; text-decoration: underline; text-decoration-skip-ink: none;  text-underline-offset: 2px; margin-left:-180px;"><?= $data['peneguh'] ?></p></b></p>
                            <p style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  margin-top:-10px; margin-left:-180px;"><b>P a s t o r</b> </p>
                        </td>
                        <td style="text-align: center;">
                            <p style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  margin-top:-25px; margin-left:20px;"><b>S u a m i</b> <br><br><br><br><br>
                            <p style="font-family: Arial, Helvetica, sans-serif;color:blue; text-decoration: underline; text-decoration-skip-ink: none;  text-underline-offset: 2px; margin-left:20px;"><?= $data['nama_laki'] ?></p></b></p>
                        </td>
                        <td style="text-align: center;">
                            <p style="font-family: Arial, Helvetica, sans-serif; font-size:13px;   margin-top:-25px; margin-right:-220px;"><b>I s t e r i</b> <br><br><br><br><br>
                            <p style="font-family: Arial, Helvetica, sans-serif;color:blue; text-decoration: underline; text-decoration-skip-ink: none;  text-underline-offset: 2px; margin-right:-220px;"><?= $data['nama_perempuan'] ?></p></b></p>
                        </td>
                    </tr>

                </table>

                <table>

                    <tr>

                        <td style="text-align: center;">
                            <p style="font-family: Arial, Helvetica, sans-serif; font-size:13px;  margin-top:-25px; margin-left:20px;"><b>Saksi 1 :</b> <br><br><br><br><br><br>

                        </td>
                        <td style="text-align: center;">
                            <p style="font-family: Arial, Helvetica, sans-serif; font-size:13px;   margin-top:-25px; margin-right:-220px;"><b>Saksi 2 :</b> <br><br><br><br><br><br>

                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </center>
</body>

</html>