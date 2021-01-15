<!DOCTYPE html>
<head>
    <title>Cetak Surat </title>
    <style>
        table tr td {
            font-size: 13px;
        }

        table tr .text {
            text-align: right;
            font-size: 13px;
        }

        table tr .text2 {
            text-align: center;

        }

        .satu{
            margin-left: 50px;
        }
        hr{
            width: 650px; 
            margin-top:-1px;
        }

        .dua{
            margin-left:20px;
        }

        .dua hr{
           border-top: 4px double black;
        }

        img{
            margin-left: -30px;
        }

        .hrsatu{
            margin-left:199px;
            margin-top:-3px;
            width:314px
        }

        .tiga{
            margin-top:10px;
        }
        .nosurat{
            margin-top:-12px;
        }

        .empat p {
            font-size: 17px;
            margin-left: 20px;
        }

        .lima{
            margin-left: 80px;
        }

        .lima tr td {
            font-size: 17px;
            padding-right: 30px;
            padding-top:15px;
        }
         P{
             font-size: 16px;
             font-family: Arial;
         }

         .enam{
             margin-top: 5px;
             margin-left: 450px;
         }

         .tujuh{
            margin-left: 450px;
            margin-top: -30px;
         }

         .namadesa{
             margin-left: 20px;
             margin-top:50px;
         }
         .delapan hr{
             width: 115px;
             margin-left: 470px;
             margin-top:-23px;
         }
    </style>
</head>

<body>
    <center>
        <table class="satu">
            <tr >
                <td><img src="{{ public_path('surat/logo.png') }}" style="width: 100px; height: 100px"></td>
                <td>
                    <center >
                        <font size="5"><b>PEMERINTAH KABUPATEN SINJAI</b></font><br>
                        <font size="5"> <b>KECAMATAN BULUPODDO </b></font><br>
                        <font size="5"><b>DESA TOMPOBULU </b></font><br>
                    </center>
                </td>
            </tr>
        </table>
        <table class="dua">
            <tr>
                <td colspan="2" >
                    <hr>
                </td>
            </tr>
        </table>
        <table class="tiga">
            <tr>
                <td width="538">
                    <center>
                        <font size="3"><b>SURAT KETERANGAN KURANG MAMPU </b></font><br>
                        <hr class="hrsatu">
                    </center>
                </td>
            </tr>
        </table>
        <table class="nosurat">
            <tr>
                <td width="537">
                    <center>
                        <font size="2">Nomor : {{$suratkm->no_surat}}-KM/TB/BP/{{date('Y',strtotime($suratkm->created_at))}}</Nomor></font>
                    </center>
                </td>
            </tr>
        </table>
        
        <table class="empat">
            <tr>
                <td><P> &#160; &#160; &#160; &#160;  &#160; &#160; &#160;Yang Bertanda   Tangan di bawah ini Kepala Desa Tompobulu Kecamatan 
                    Bulupoddo <br> <br> Kabupaten Sinjai. menerangkan dengan sesungguhnya bahwa :</P></td>
            </tr>
        </table>
        <table  class="lima">
            <tr>
                <td> Nama</td>
            <td>:  {{$suratkm->nama}}</td>
            </tr>
            <tr>
                <td>Tempat/Tgl.Lahir</td>
                <td> : {{$suratkm->tempat_lahir}} / {{date('d-m-Y',strtotime($suratkm->tgl_lahir))}}  </td>
            </tr>
            <tr>
                <td>Nik</td>
                <td> : {{$suratkm->nik}}</td>
            </tr>
            <tr>
                <td>KK</td>
                <td> : {{$suratkm->kk}}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td> : {{$suratkm->pekerjaan}}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td> : {{$suratkm->alamat}}</td>
            </tr>
            <tr>
                <td style="padding-top:50px;" >Anak dari &#160; &#160; : </td>
            </tr>
            <tr>
                <td> - Ayah</td>
                <td> : {{$suratkm->nama_ayah}}</td>
            </tr>
            <tr>
                <td> - Ibu</td>
                <td> : {{$suratkm->nama_ibu}}</td>
            </tr>
        </table>
        <table class="empat">
            <tr>
                <td><P> Bahwa bersangkutan tersebut adalah benar dari keluarga kurang mampu. <br> <br>
                    &#160; &#160; &#160; &#160;  &#160; &#160; &#160;Demikian surat keterangan ini diberikan kepada yang bersangkutan untuk di pergunakan <br> <br>
                    sebagaimana mestinya
                    </P></td>
            </tr>
        </table>

        <table class="enam">
            <tr>
                <td> <p>Tompobulu, {{\Carbon\Carbon::parse($suratkm['created_at'])->isoFormat('D-MMMM-Y')}}</p></td>
            </tr>
        </table>
        <table  class="tujuh">
            <tr>
                <td> <p> Kepala Desa Tompobulu</P>  <br>  <P class="namadesa"> <b>(MAHMUDDIN) </b></p></td>
            </tr>
        </table> 

        <table class="delapan">
            <tr>
                <td><hr></td>
            </tr>
        </table>
    </center>
</body>

</html>

