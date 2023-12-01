    <style>
        @media screen {
    html{box-sizing:border-box}*,*:before,*:after{box-sizing:inherit}html{overflow-x:hidden}html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}
    html,body{font-family:Arial, sans-serif;font-size:15px;line-height:1.5;background-color: #efeff3;color: #333;}
    #body{background: #fff;width: 21cm;min-height: 29.7cm;margin: 30px auto;box-shadow: 0 1px 3px rgba(0,0,0, 0.12), 0 1px 2px rgba(0,0,0, 0.24);}
    #body >.content > .card{padding: 30px;}
    .kartu{border: 1px solid #666;padding: 0px;border-radius:1px; height: 8cm; width: 5.48cm;}
    .float-left {
        transform: rotate(15deg) scale(1) ;
        -webkit-transform: rotate(15deg) scale(1) ;
        -moz-transform: rotate(15deg) scale(1) ;
        -o-transform: rotate(15deg) scale(1) ;
        -ms-transform: rotate(15deg) scale(1) ;
        height: 2.5%;
        width: 51.5%;
        float: left;
        margin-top: -15px;
        background: #1E90FF;
    }
    .float-right {
        transform: rotate(165deg) scale(1) ;
        -webkit-transform: rotate(165deg) scale(1) ;
        -moz-transform: rotate(165deg) scale(1) ;
        -o-transform: rotate(165deg) scale(1) ;
        -ms-transform: rotate(165deg) scale(1) ;
        height: 2.5%;
        width: 51.5%;
        float: right;
        margin-top: -15px;
        background: #1E90FF;
    }
    .line-footer{
        background: #1E90FF;
        height: 3%;
        margin-bottom: 73%;
    }
    .visible-print{
    padding: 15.5px;
}
    
    .row:before,.row:after{content: "";display: table;clear: both;}.row > .col{float:left;}.row > .col.col1{width:8.33333%}.row > .col.col2{width:15.9999%}.row > .col.col3{width:24.99999%}.row > .col.col4{width:33.33333%}.row> .col.col5{width:41.66666%}.row > .col.col6{width:49.99999%}.row > .col.col7{width:58.33333%}.row > .col.col8{width:66.66666%}.row > .col.col9{width:74.99999%}.row > .ol.col10{width:83.33333%}.row > .col.col11{width:91.66666%}.row > .col.col12{width:99.99999%}
    .kartu > .kartu-header{padding:5px 1px;background-color: #fff;}
    .kartu > .kartu-header.row > .col > img{height: 40px}
    .kartu > .kartu-header.row > .col > img.qrcode{height: 48px;float:right;}
    .kartu > .kartu-header.row > .col {padding:4px;color: #333}
    .kartu > .kartu-header.row > .col.no-padding{padding:0;}
    .kartu > .kartu-header.row > .col.col8{text-align: center;line-height: 1.25;font-size: 10px;font-weight: normal;padding: 11px 2px}
    .kartu > .kartu-body{text-align:center;padding:4px 2px;background-color: #fff;}
    .kartu > .kartu-body > table{font-size: 10px;line-height: 1.7}
    .kartu > .kartu-body > .jadwal{padding: 6px 4px 1px 4px;font-size: 10px}
    .kartu > .kartu-body > .jadwal > .foto-kiri{width: 75px;}
    .kartu > .kartu-body > .jadwal > .jadwal-kanan{width: calc(100% - 75px);padding-left: 15px}
    .kartu > .kartu-body > .jadwal > .col > .foto-siswa{width: 100%}
    .kartu > .kartu-footer{padding: 1px}
    .table{border:solid 1px #666;font-size: 10px;}
      table.table {width: 100%!important;border-collapse: collapse;line-height: 1.3;}
      table.table th {background: #ccc;}
      table.table th{border: solid 1px #666;padding: 4px;  }
      table.table td{border: solid 1px #666;padding: 4px 0px 4px 5px;  }
      table.table td.center{text-align: center;padding: 4px 0px;}
      table.table tr:nth-child(odd) .odd,table.table tr:nth-child(even) .even { opacity: 0;}
    }
    
    
    @media print{
	.noprint {
    display: none;
  }
body{margin:0}

    div{
        page-break-inside: avoid;
    }
body{-webkit-print-color-adjust: exact;}
@page { margin: 10px 0; }  
#body{background: #fff;font-family:Arial, sans-serif;}
#body > .content > .card{padding: 30px;}
.kartu{border: 1px solid #666;padding: 0px;border-radius:1px;height: 8cm; width: 5.48cm;}
.float-left{transform: rotate(15deg) scale(1) ;
    -webkit-transform: rotate(15deg) scale(1) ;
    -moz-transform: rotate(15deg) scale(1) ;
    -o-transform: rotate(15deg) scale(1) ;
    -ms-transform: rotate(15deg) scale(1) ; 
    width: 51%; height: 2.5%; float: left; margin-top: -15px;
    background: #1E90FF;}
.float-right{transform: rotate(165deg) scale(1) ;
    -webkit-transform: rotate(165deg) scale(1) ;
    -moz-transform: rotate(165deg) scale(1) ;
    -o-transform: rotate(165deg) scale(1) ;
    -ms-transform: rotate(165deg) scale(1) ;
    width: 51%; height: 2.5%; float: right; margin-top: -15px;
    background: #1E90FF;}
.line-footer{background: #1E90FF; height: 3%; margin-top: 5%;}
.visible-print{
    padding: 19.5px;
}

.row:before,.row:after{content: "";display: table;clear: both;}.row > .col{float:left;}.row > .col.col1{width:8.33333%}.row > .col.col2{width:15.9999%}.row > .col.col3{width:24.99999%}.row > .col.col4{width:33.33333%}.row> .col.col5{width:41.66666%}.row > .col.col6{width:49.99999%}.row > .col.col7{width:58.33333%}.row > .col.col8{width:66.66666%}.row > .col.col9{width:74.99999%}.row > .ol.col10{width:83.33333%}.row > .col.col11{width:91.66666%}.row > .col.col12{width:99.99999%}
.kartu > .kartu-header{padding:5px 1px;background-color: #fff;}
.kartu > .kartu-header.row > .col > img{height: 40px; margin-top: -15px;}
.kartu > .kartu-header.row > .col > img.qrcode{height: 48px;float:right;}
.kartu > .kartu-header.row > .col {padding:4px;color: #333}
.kartu > .kartu-header.row > .col.no-padding{padding:0;}
.kartu > .kartu-header.row > .col.col8{text-align: center;line-height: 1.25;font-size: 10px;font-weight: normal;padding: 11px 2px;width:64%}
.kartu > .kartu-body{text-align: center;padding:4px 2px;background-color: #fff;margin-top: 7px}
.kartu > .kartu-body > table{font-size: 10px;line-height: 1.7}
.kartu > .kartu-body > .jadwal{padding: 6px 4px 1px 4px;font-size: 10px}
.kartu > .kartu-body > .jadwal > .foto-kiri{width: 75px;}
.kartu > .kartu-body > .jadwal > .jadwal-kanan{width: calc(100% - 95px);padding-left: 15px}
.kartu > .kartu-body > .jadwal > .col > .foto-siswa{width: 100%}
.kartu > .kartu-footer{padding: 1px}
.table{border:solid 1px #666;font-size: 10px;}
  table.table {width: 100%!important;border-collapse: collapse;line-height: 1.3;}
  table.table th {background: #ccc;}
  table.table th{border: solid 1px #666;padding: 4px;  }
  table.table td{border: solid 1px #666;padding: 4px 0px 4px 5px;}
  table.table td.center{text-align: center;padding: 4px 0px;}
  table.table tr:nth-child(odd) .odd,table.table tr:nth-child(even) .even { opacity: 0;}
}
    
    </style>
<div id="body" class="row">

@foreach ($siswas as $siswa)
<div class="content col col4">
<div class="card">
  <div class="kartu">
    <div class="kartu-header row">
      <div class="col col2">

      </div>
      <div class="col col8">
        <img src="image/logo_gemboz.png" alt="logo">
        <b>KARTU ABSENSI</b><br/>
        <b>TAHUN 2023</b><br/>
      </div>
      <!-- <div class="col col2 no-padding">
      
      </div> -->
    </div>
    <div class="float-left"></div>
    <div class="float-right"></div>
    <div class="kartu-body">
        <tr>
          <td>{{ $siswa->nama_siswa }}</td>
        </tr>
        <br>
        <tr>
          <td>SMK NEGERI 3 METRO</td>
        </tr>
        <br>
        <div class="visible-print text-center">
        {!! QrCode::size(110)->generate($siswa->kode_siswa); !!}
        </div>
    </div>
    <div class="line-footer"></div>
  </div>
</div>
</div>

@endforeach

</div>