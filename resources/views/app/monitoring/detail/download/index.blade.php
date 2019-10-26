<div class="container-fluid container-fixed-lg">
    <div class="card card-default m-t-20">
        <div class="card-body">
            <div>
                <table border="0" cellspacing="0">
                    <tr>
                        <td width=220px>
                            <img src="http://monita.loc/assets/img/jateng.png" alt="logo" data-src="/assets/img/jateng.png" data-src-retina="/assets/img/jateng.png" width="90" height="90">
                        </td>
                        <td width=600px>
                            <table style="text-align:center">
                                <tr>
                                    <td style="font-weight:bold">PEMERINTAH PROVINSI JAWA TENGAH</td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold">RUMAH SAKIT UMUM DAERAH Dr. MOEWARDI</td>
                                </tr>
                                <tr>
                                    <td>Jalan Kolonel Sutarto No. 132 Surakarta Kodepos 57216 Telepon (0271)634634</td>
                                </tr>
                                <tr>
                                    <td>Faximile (0271) 637412, Email : rsmoewardi@jatengprov.go.id</td>
                                </tr>
                                <tr>
                                    <td>Website : rsmoewardi.jatengprov.go.id</td>
                                </tr>
                            </table>
                        </td>
                        <td width=190px style="font-weight:bold;text-align:right;vertical-align: top;">RM. 3.19.3.3</td>
                    </tr>
                </table>

            </div>
            <div>
                <table border="1" cellpadding="5" cellspacing="0">
                    <tr>
                        <td style="text-align: center;background-color:black;color:white;width:1010px">MONITORING TRANSFUSI</td>
                    </tr>
                    <tr>
                        <td>
                            <table border="0" cellspacing="0">
                                <tr>
                                    <td>
                                        <table border="0" cellspacing="0">
                                            <tr>
                                                <td colspan="2" style="width:600px;text-align:center;font-weight:bold">Label Pasien</td>
                                            </tr>
                                            <tr>
                                                <td style="padding-left:100px">Nama Pasien</td>
                                                <td>: {{ $data['name'] }}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding-left:100px">Tgl. Lahir / Jenis Kel.</td>
                                                <td>: {{ $data['tgl_lahir'] }} / {{ $data['jenis_kelamin'] }}</td>

                                            </tr>
                                            <tr>
                                                <td style="padding-left:100px">No. Rm</td>
                                                <td>: {{ $data['no_rm']}}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding-left:100px">Alamat</td>
                                                <td>: {{ $data['alamat']}}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="text-align:center;font-weight:bold"><i>(Harap diisi atau menempelkan stiker bila ada)</i></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <table>
                                            <table border="0" cellspacing="0">
                                                <tr>
                                                    <td>Dokter</td>
                                                    <td> : </td>
                                                    <td>{{ $data['patient_transfusions'][0]->dokter }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Diagnosis</td>
                                                    <td> : </td>
                                                    <td>{{ $data['patient_transfusions'][0]->diagnosis }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Ruang</td>
                                                    <td> : </td>
                                                    <td>{{ $data['patient_transfusions'][0]->ruang }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Colf Ke</td>
                                                    <td> : </td>
                                                    <td>{{ $data['patient_transfusions'][0]->colf }}</td>
                                                </tr>
                                                <tr>
                                                    <td>No. Batch</td>
                                                    <td> : </td>
                                                    <td>{{ $data['patient_transfusions'][0]->no_batch }}</td>
                                                </tr>
                                            </table>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table border="1" cellpadding="5" cellspacing="0">
                    <tr>
                        <td rowspan="2">Saat Monitoring</td>
                        <td rowspan="1" colspan="2">Waktu Pemberian</td>
                        <td rowspan="2">Tekanan<br> darah</td>
                        <td rowspan="2">Nadi</td>
                        <td rowspan="2">Suhu</td>
                        <td rowspan="2">Respirasi</td>
                        <td rowspan="2">Jumlah Cairan<br> Masuk</td>
                        <td rowspan="2">Jumlah Cairan<br> Keluar</td>
                        <td rowspan="1" colspan="2">Reaksi Transfusi</td>
                        <td rowspan="2">Tanda Tangan<br>Petugas</td>
                    </tr>
                    <tr>
                        <td style="width:100px">Tgl</td>
                        <td>Jam</td>
                        <td>Ada</td>
                        <td>tidak</td>
                    </tr>
                    <tr>
                        <td>30 menit pre Transfusi</td>
                        <td>{{ $data['patient_transfusions'][0]->b30m_tgl_pemberian }}</td>
                        <td>{{ $data['patient_transfusions'][0]->b30m_jam_pemberian }}</td>
                        <td>{{ $data['patient_transfusions'][0]->b30m_td }}</td>
                        <td>{{ $data['patient_transfusions'][0]->b30m_nadi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->b30m_suhu }}</td>
                        <td>{{ $data['patient_transfusions'][0]->b30m_respirasi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->b30m_jml_cairan_masuk }}</td>
                        <td>{{ $data['patient_transfusions'][0]->b30m_jml_cairan_keluar }}</td>
                        <td>{{ $data['patient_transfusions'][0]->b30m_ada_reaksi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->b30m_tidak_ada_reaksi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->b30m_tanda_tangan }}</td>

                    </tr>
                    <tr>
                        <td>Saat Transfusi Mulai</td>
                        <td>{{ $data['patient_transfusions'][0]->tgl_pemberian }}</td>
                        <td>{{ $data['patient_transfusions'][0]->jam_pemberian }}</td>
                        <td>{{ $data['patient_transfusions'][0]->td }}</td>
                        <td>{{ $data['patient_transfusions'][0]->nadi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->suhu }}</td>
                        <td>{{ $data['patient_transfusions'][0]->respirasi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->jml_cairan_masuk }}</td>
                        <td>{{ $data['patient_transfusions'][0]->jml_cairan_keluar }}</td>
                        <td>{{ $data['patient_transfusions'][0]->ada_reaksi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->tidak_ada_reaksi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->tanda_tangan }}</td>

                    </tr>
                    <tr>
                        <td>15 menit pertama Transfusi</td>
                        <td>{{ $data['patient_transfusions'][0]->a15m_tgl_pemberian }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a15m_jam_pemberian }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a15m_td }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a15m_nadi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a15m_suhu }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a15m_respirasi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a15m_jml_cairan_masuk }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a15m_jml_cairan_keluar }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a15m_ada_reaksi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a15m_tidak_ada_reaksi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a15m_tanda_tangan }}</td>

                    </tr>
                    <tr>
                        <td>1 Jam pertama Transfusi</td>
                        <td>{{ $data['patient_transfusions'][0]->a1h_tgl_pemberian }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a1h_jam_pemberian }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a1h_td }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a1h_nadi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a1h_suhu }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a1h_respirasi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a1h_jml_cairan_masuk }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a1h_jml_cairan_keluar }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a1h_ada_reaksi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a1h_tidak_ada_reaksi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a1h_tanda_tangan }}</td>

                    </tr>
                    <tr>
                        <td>1 Jam kedua Transfusi</td>
                        <td>{{ $data['patient_transfusions'][0]->a2h_tgl_pemberian }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a2h_jam_pemberian }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a2h_td }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a2h_nadi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a2h_suhu }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a2h_respirasi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a2h_jml_cairan_masuk }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a2h_jml_cairan_keluar }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a2h_ada_reaksi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a2h_tidak_ada_reaksi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a2h_tanda_tangan }}</td>

                    </tr>
                    <tr>
                        <td>1 jam ketiga Transfusi</td>
                        <td>{{ $data['patient_transfusions'][0]->a3h_tgl_pemberian }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a3h_jam_pemberian }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a3h_td }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a3h_nadi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a3h_suhu }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a3h_respirasi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a3h_jml_cairan_masuk }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a3h_jml_cairan_keluar }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a3h_ada_reaksi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a3h_tidak_ada_reaksi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a3h_tanda_tangan }}</td>

                    </tr>
                    <tr>
                        <td>1 jam keempat Transfusi</td>
                        <td>{{ $data['patient_transfusions'][0]->a4h_tgl_pemberian }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a4h_jam_pemberian }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a4h_td }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a4h_nadi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a4h_suhu }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a4h_respirasi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a4h_jml_cairan_masuk }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a4h_jml_cairan_keluar }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a4h_ada_reaksi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a4h_tidak_ada_reaksi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->a4h_tanda_tangan }}</td>

                    </tr>
                    <tr>
                        <td>saat Transfusi selesai</td>
                        <td>{{ $data['patient_transfusions'][0]->d_tgl_pemberian }}</td>
                        <td>{{ $data['patient_transfusions'][0]->d_jam_pemberian }}</td>
                        <td>{{ $data['patient_transfusions'][0]->d_td }}</td>
                        <td>{{ $data['patient_transfusions'][0]->d_nadi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->d_suhu }}</td>
                        <td>{{ $data['patient_transfusions'][0]->d_respirasi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->d_jml_cairan_masuk }}</td>
                        <td>{{ $data['patient_transfusions'][0]->d_jml_cairan_keluar }}</td>
                        <td>{{ $data['patient_transfusions'][0]->d_ada_reaksi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->d_tidak_ada_reaksi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->d_tanda_tangan }}</td>

                    </tr>
                    <tr>
                        <td>4 jam post Transfusi selesai</td>
                        <td>{{ $data['patient_transfusions'][0]->pt4_tgl_pemberian }}</td>
                        <td>{{ $data['patient_transfusions'][0]->pt4_jam_pemberian }}</td>
                        <td>{{ $data['patient_transfusions'][0]->pt4_td }}</td>
                        <td>{{ $data['patient_transfusions'][0]->pt4_nadi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->pt4_suhu }}</td>
                        <td>{{ $data['patient_transfusions'][0]->pt4_respirasi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->pt4_jml_cairan_masuk }}</td>
                        <td>{{ $data['patient_transfusions'][0]->pt4_jml_cairan_keluar }}</td>
                        <td>{{ $data['patient_transfusions'][0]->pt4_ada_reaksi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->pt4_tidak_ada_reaksi }}</td>
                        <td>{{ $data['patient_transfusions'][0]->pt4_tanda_tangan }}</td>

                    </tr>
                </table>
            </div>
        </div>
        <div>
            <br>
            <b>Kode RM : 2014 10 3 57 01 Rev. 1</b>
        </div>
    </div>
</div>
