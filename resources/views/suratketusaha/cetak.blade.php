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
            margin-left:240px;
            margin-top:-3px;
            width:233px
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

         .sembilan p {
            font-size: 17px;
            margin-left: 20px;
            text-align: justify;
            width: 639px;
         }
         .sembilan{
             margin-top: -20px;
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
                <td width="535">
                    <center>
                        <font size="3"><b>SURAT KETERANGAN USAHA</b></font><br>
                        <hr class="hrsatu">
                    </center>
                </td>
            </tr>
        </table>
        @php
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII") 
        @endphp
        <table class="nosurat">
            <tr>
                <td width="537">
                    <center>
                        <font size="2">Nomor :{{$suratusaha->no_surat}}/SKU/TB/BP/{{$bulanRomawi[date('n')]}}/{{date('Y',strtotime($suratusaha->created_at))}}</Nomor></font>
                    </center>
                </td>
            </tr>
        </table>
        
        <table class="empat">
            <tr>
                <td><P style="text-align: justify; width:639px;"> &#160; &#160; &#160; &#160;  &#160; &#160; &#160;Yang Bertanda   Tangan di bawah ini Kepala Desa Tompobulu Kecamatan 
                    Bulupoddo Kabupaten Sinjai. menerangkan dengan sebenarnya bahwa :</P></td>
            </tr>
        </table>
        <table  class="lima">
            <tr>
                <td> Nama</td>
            <td>:  {{$suratusaha->nama}}</td>
            </tr>
            <tr>
                <td>Tempat, Tgl.Lahir</td>
                <td> : {{$suratusaha->tempat_lahir}} / {{date('d-m-Y',strtotime($suratusaha->tgl_lahir))}}  </td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td> : {{$suratusaha->pekerjaan}}</td>
            </tr>
            <tr>
                <td>Jenis Usaha</td>
                <td> : {{$suratusaha->jenis_usaha}}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td> : {{$suratusaha->agama}}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td> : {{$suratusaha->jenis_kelamin}}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td> : {{$suratusaha->alamat}}</td>
            </tr>
        </table>
        <table class="empat">
            <tr>
                <td><P  style="text-align: justify; width:639px;">&#160; &#160; &#160; &#160;  &#160; &#160; &#160;Adalah orang pribumi yang berdomisili tetap di Dusun {{$suratusaha->alamat}}, Desa Tompobulu Kec. Bulupoddo Kab. Sinjai dan 
                    betul mempunyai usaha yang dapat di percaya dan layak untuk diberikan Fasilitas.<br> 
                    </P></td>
            </tr>
        </table>
        <table class="sembilan">
            <tr>
                <td><P style="">&#160; &#160; &#160; &#160;  &#160; &#160; &#160;Demikian surat Keterangan Usaha ini diberikan kepada yang 
                    bersangkutan untuk dipergunakan Sebagaimana mestinya. Dan keterangan yang diberikan tidak sesuai fakta dilapangan maka
                    saya bersedia di proses sesuai dengan aturan yang berlaku.<br> 
                    </P></td>
            </tr>
        </table>
        <table class="enam">
            <tr>
                <td> <p>Tompobulu, {{\Carbon\Carbon::parse($suratusaha['created_at'])->isoFormat('D-MMMM-Y')}}</p></td>
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

