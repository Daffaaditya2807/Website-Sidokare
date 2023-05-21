<div class="container">
    <form action="{{ route('keluhan.export', $ppid->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- HTML Codes by Quackit.com -->
<!DOCTYPE html>
<title>EXPORT FORM PPID</title>
<body>
    <center>
        <table>
            <tr>
                <td>
                    <center>
                        <font size="5"> PEMERINTAH DESA SIDOKARE </font><br>
                        <font size="4"> KECAMATAN REJOSO </font><br>
                        <font size="3"> KABUPATEN NGANJUK, JAWA TIMUR </font><br>
                        <font size="2"> Jl. Diponegoro, Kode Pos: 64453, Telp/Fax 0358331154, Sidokare, Kec. Rejoso, Kabupaten Nganjuk, Jawa Timur  </font>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="6"><hr></td>
            </tr>
            <tr><td><center>
                <font size="4">FORMULIR PENGAJUAN KELUHAN</font>
                </center></tr></td>
            <table>
                <tr>
                    <td>.</td>
                </tr>
                <tr>
                    <td>Judul Laporan</td>
                    <td width="541">: {{ $ppid->judul_laporan }}</td>
                </tr>
                <tr>
                    <td>Isi Laporan</td>
                    <td width="541">: {{ $ppid->isi_laporan }}</td>
                </tr>
                <tr>
                    <td>Asal Pelapor</td>
                    <td width="541">: {{ $ppid->asal_pelapor  }}</td>
                </tr>
                <tr>
                    <td>Lokasi Kejadian</td>
                    <td width="541">: {{ $ppid->lokasi_kejadian  }}</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td width="541">: {{ $ppid->tanggal_kejadian  }}</td>
                </tr>
                <tr>
                    <td>RT/RW</td>
                    <td width="541">: {{ $ppid->RT }}/{{ $ppid->RW }}</td>
                </tr>
            </table><br>
            <table >
                <tr>
                    <td>
                        <font size="3">Dengan ini bermaksud untuk mengajukan keluhan, dengan harapan agar laporan mengenai {{ $ppid->judul_laporan }}, Dapat diperbaiki sehingga
                        dapat meningkatkan kinerja dari pemerintah desa Sidokare.</font>
                    </td>
                </tr>
            </table>
        </table>
    </center>
</body>
            <script type="text/javascript">window.print();</script>
        </body>
        </html>