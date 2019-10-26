<?php

namespace App\Http\Middleware\Patient;

use App\Models\PatientTransfusion;
use App\Models\Position;
use App\Models\Blast\Category;

use Illuminate\Support\Facades\Hash;
use Closure;
use Validator;
use Illuminate\Support\Facades\Storage;
use App\Http\Middleware\BaseMiddleware;

class UpdateTransfusion extends BaseMiddleware
{
    private function Initiate($request)
    {
        $this->Model->PatientTransfusion = PatientTransfusion::where('id', $this->Id)->first();

        if ($this->Model->PatientTransfusion) {
            !$this->_Request->input('b30m_td') || $this->Model->PatientTransfusion->b30m_td = $this->_Request->input('b30m_td');
            !$this->_Request->input('b30m_nadi') || $this->Model->PatientTransfusion->b30m_nadi = $this->_Request->input('b30m_nadi');
            !$this->_Request->input('b30m_suhu') || $this->Model->PatientTransfusion->b30m_suhu = $this->_Request->input('b30m_suhu');
            !$this->_Request->input('b30m_respirasi') || $this->Model->PatientTransfusion->b30m_respirasi = $this->_Request->input('b30m_respirasi');
            !$this->_Request->input('b30m_jml_cairan_masuk') || $this->Model->PatientTransfusion->b30m_jml_cairan_masuk = $this->_Request->input('b30m_jml_cairan_masuk');
            !$this->_Request->input('b30m_jml_cairan_keluar') || $this->Model->PatientTransfusion->b30m_jml_cairan_keluar = $this->_Request->input('b30m_jml_cairan_keluar');
            !$this->_Request->input('b30m_ada_reaksi') || $this->Model->PatientTransfusion->b30m_ada_reaksi = $this->_Request->input('b30m_ada_reaksi');
            !$this->_Request->input('b30m_tidak_ada_reaksi') || $this->Model->PatientTransfusion->b30m_tidak_ada_reaksi = $this->_Request->input('b30m_tidak_ada_reaksi');
            !$this->_Request->input('b30m_tanda_tangan') || $this->Model->PatientTransfusion->b30m_tanda_tangan = $this->_Request->input('b30m_tanda_tangan');
            !$this->_Request->input('td') || $this->Model->PatientTransfusion->td = $this->_Request->input('td');
            !$this->_Request->input('nadi') || $this->Model->PatientTransfusion->nadi = $this->_Request->input('nadi');
            !$this->_Request->input('suhu') || $this->Model->PatientTransfusion->suhu = $this->_Request->input('suhu');
            !$this->_Request->input('respirasi') || $this->Model->PatientTransfusion->respirasi = $this->_Request->input('respirasi');
            !$this->_Request->input('jml_cairan_masuk') || $this->Model->PatientTransfusion->jml_cairan_masuk = $this->_Request->input('jml_cairan_masuk');
            !$this->_Request->input('jml_cairan_keluar') || $this->Model->PatientTransfusion->jml_cairan_keluar = $this->_Request->input('jml_cairan_keluar');
            !$this->_Request->input('ada_reaksi') || $this->Model->PatientTransfusion->ada_reaksi = $this->_Request->input('ada_reaksi');
            !$this->_Request->input('tidak_ada_reaksi') || $this->Model->PatientTransfusion->tidak_ada_reaksi = $this->_Request->input('tidak_ada_reaksi');
            !$this->_Request->input('tanda_tangan') || $this->Model->PatientTransfusion->tanda_tangan = $this->_Request->input('tanda_tangan');
            !$this->_Request->input('a15m_td') || $this->Model->PatientTransfusion->a15m_td = $this->_Request->input('a15m_td');
            !$this->_Request->input('a15m_nadi') || $this->Model->PatientTransfusion->a15m_nadi = $this->_Request->input('a15m_nadi');
            !$this->_Request->input('a15m_suhu') || $this->Model->PatientTransfusion->a15m_suhu = $this->_Request->input('a15m_suhu');
            !$this->_Request->input('a15m_respirasi') || $this->Model->PatientTransfusion->a15m_respirasi = $this->_Request->input('a15m_respirasi');
            !$this->_Request->input('a15m_jml_cairan_masuk') || $this->Model->PatientTransfusion->a15m_jml_cairan_masuk = $this->_Request->input('a15m_jml_cairan_masuk');
            !$this->_Request->input('a15m_jml_cairan_keluar') || $this->Model->PatientTransfusion->a15m_jml_cairan_keluar = $this->_Request->input('a15m_jml_cairan_keluar');
            !$this->_Request->input('a15m_ada_reaksi') || $this->Model->PatientTransfusion->a15m_ada_reaksi = $this->_Request->input('a15m_ada_reaksi');
            !$this->_Request->input('a15m_tidak_ada_reaksi') || $this->Model->PatientTransfusion->a15m_tidak_ada_reaksi = $this->_Request->input('a15m_tidak_ada_reaksi');
            !$this->_Request->input('a15m_tanda_tangan') || $this->Model->PatientTransfusion->a15m_tanda_tangan = $this->_Request->input('a15m_tanda_tangan');
            !$this->_Request->input('a1h_td') || $this->Model->PatientTransfusion->a1h_td = $this->_Request->input('a1h_td');
            !$this->_Request->input('a1h_nadi') || $this->Model->PatientTransfusion->a1h_nadi = $this->_Request->input('a1h_nadi');
            !$this->_Request->input('a1h_suhu') || $this->Model->PatientTransfusion->a1h_suhu = $this->_Request->input('a1h_suhu');
            !$this->_Request->input('a1h_respirasi') || $this->Model->PatientTransfusion->a1h_respirasi = $this->_Request->input('a1h_respirasi');
            !$this->_Request->input('a1h_jml_cairan_masuk') || $this->Model->PatientTransfusion->a1h_jml_cairan_masuk = $this->_Request->input('a1h_jml_cairan_masuk');
            !$this->_Request->input('a1h_jml_cairan_keluar') || $this->Model->PatientTransfusion->a1h_jml_cairan_keluar = $this->_Request->input('a1h_jml_cairan_keluar');
            !$this->_Request->input('a1h_ada_reaksi') || $this->Model->PatientTransfusion->a1h_ada_reaksi = $this->_Request->input('a1h_ada_reaksi');
            !$this->_Request->input('a1h_tidak_ada_reaksi') || $this->Model->PatientTransfusion->a1h_tidak_ada_reaksi = $this->_Request->input('a1h_tidak_ada_reaksi');
            !$this->_Request->input('a1h_tanda_tangan') || $this->Model->PatientTransfusion->a1h_tanda_tangan = $this->_Request->input('a1h_tanda_tangan');
            !$this->_Request->input('a2h_td') || $this->Model->PatientTransfusion->a2h_td = $this->_Request->input('a2h_td');
            !$this->_Request->input('a2h_nadi') || $this->Model->PatientTransfusion->a2h_nadi = $this->_Request->input('a2h_nadi');
            !$this->_Request->input('a2h_suhu') || $this->Model->PatientTransfusion->a2h_suhu = $this->_Request->input('a2h_suhu');
            !$this->_Request->input('a2h_respirasi') || $this->Model->PatientTransfusion->a2h_respirasi = $this->_Request->input('a2h_respirasi');
            !$this->_Request->input('a2h_jml_cairan_masuk') || $this->Model->PatientTransfusion->a2h_jml_cairan_masuk = $this->_Request->input('a2h_jml_cairan_masuk');
            !$this->_Request->input('a2h_jml_cairan_keluar') || $this->Model->PatientTransfusion->a2h_jml_cairan_keluar = $this->_Request->input('a2h_jml_cairan_keluar');
            !$this->_Request->input('a2h_ada_reaksi') || $this->Model->PatientTransfusion->a2h_ada_reaksi = $this->_Request->input('a2h_ada_reaksi');
            !$this->_Request->input('a2h_tidak_ada_reaksi') || $this->Model->PatientTransfusion->a2h_tidak_ada_reaksi = $this->_Request->input('a2h_tidak_ada_reaksi');
            !$this->_Request->input('a2h_tanda_tangan') || $this->Model->PatientTransfusion->a2h_tanda_tangan = $this->_Request->input('a2h_tanda_tangan');
            !$this->_Request->input('a3h_td') || $this->Model->PatientTransfusion->a3h_td = $this->_Request->input('a3h_td');
            !$this->_Request->input('a3h_nadi') || $this->Model->PatientTransfusion->a3h_nadi = $this->_Request->input('a3h_nadi');
            !$this->_Request->input('a3h_suhu') || $this->Model->PatientTransfusion->a3h_suhu = $this->_Request->input('a3h_suhu');
            !$this->_Request->input('a3h_respirasi') || $this->Model->PatientTransfusion->a3h_respirasi = $this->_Request->input('a3h_respirasi');
            !$this->_Request->input('a3h_jml_cairan_masuk') || $this->Model->PatientTransfusion->a3h_jml_cairan_masuk = $this->_Request->input('a3h_jml_cairan_masuk');
            !$this->_Request->input('a3h_jml_cairan_keluar') || $this->Model->PatientTransfusion->a3h_jml_cairan_keluar = $this->_Request->input('a3h_jml_cairan_keluar');
            !$this->_Request->input('a3h_ada_reaksi') || $this->Model->PatientTransfusion->a3h_ada_reaksi = $this->_Request->input('a3h_ada_reaksi');
            !$this->_Request->input('a3h_tidak_ada_reaksi') || $this->Model->PatientTransfusion->a3h_tidak_ada_reaksi = $this->_Request->input('a3h_tidak_ada_reaksi');
            !$this->_Request->input('a3h_tanda_tangan') || $this->Model->PatientTransfusion->a3h_tanda_tangan = $this->_Request->input('a3h_tanda_tangan');
            !$this->_Request->input('a4h_tgl_pemberian') || $this->Model->PatientTransfusion->a4h_tgl_pemberian = $this->_Request->input('a4h_tgl_pemberian');
            !$this->_Request->input('a4h_jam_pemberian') || $this->Model->PatientTransfusion->a4h_jam_pemberian = $this->_Request->input('a4h_jam_pemberian');
            !$this->_Request->input('a4h_td') || $this->Model->PatientTransfusion->a4h_td = $this->_Request->input('a4h_td');
            !$this->_Request->input('a4h_nadi') || $this->Model->PatientTransfusion->a4h_nadi = $this->_Request->input('a4h_nadi');
            !$this->_Request->input('a4h_suhu') || $this->Model->PatientTransfusion->a4h_suhu = $this->_Request->input('a4h_suhu');
            !$this->_Request->input('a4h_respirasi') || $this->Model->PatientTransfusion->a4h_respirasi = $this->_Request->input('a4h_respirasi');
            !$this->_Request->input('a4h_jml_cairan_masuk') || $this->Model->PatientTransfusion->a4h_jml_cairan_masuk = $this->_Request->input('a4h_jml_cairan_masuk');
            !$this->_Request->input('a4h_jml_cairan_keluar') || $this->Model->PatientTransfusion->a4h_jml_cairan_keluar = $this->_Request->input('a4h_jml_cairan_keluar');
            !$this->_Request->input('a4h_ada_reaksi') || $this->Model->PatientTransfusion->a4h_ada_reaksi = $this->_Request->input('a4h_ada_reaksi');
            !$this->_Request->input('a4h_tidak_ada_reaksi') || $this->Model->PatientTransfusion->a4h_tidak_ada_reaksi = $this->_Request->input('a4h_tidak_ada_reaksi');
            !$this->_Request->input('a4h_tanda_tangan') || $this->Model->PatientTransfusion->a4h_tanda_tangan = $this->_Request->input('a4h_tanda_tangan');
            !$this->_Request->input('d_tgl_pemberian') || $this->Model->PatientTransfusion->d_tgl_pemberian = $this->_Request->input('d_tgl_pemberian');
            !$this->_Request->input('d_jam_pemberian') || $this->Model->PatientTransfusion->d_jam_pemberian = $this->_Request->input('d_jam_pemberian');
            !$this->_Request->input('d_td') || $this->Model->PatientTransfusion->d_td = $this->_Request->input('d_td');
            !$this->_Request->input('d_nadi') || $this->Model->PatientTransfusion->d_nadi = $this->_Request->input('d_nadi');
            !$this->_Request->input('d_suhu') || $this->Model->PatientTransfusion->d_suhu = $this->_Request->input('d_suhu');
            !$this->_Request->input('d_respirasi') || $this->Model->PatientTransfusion->d_respirasi = $this->_Request->input('d_respirasi');
            !$this->_Request->input('d_jml_cairan_masuk') || $this->Model->PatientTransfusion->d_jml_cairan_masuk = $this->_Request->input('d_jml_cairan_masuk');
            !$this->_Request->input('d_jml_cairan_keluar') || $this->Model->PatientTransfusion->d_jml_cairan_keluar = $this->_Request->input('d_jml_cairan_keluar');
            !$this->_Request->input('d_ada_reaksi') || $this->Model->PatientTransfusion->d_ada_reaksi = $this->_Request->input('d_ada_reaksi');
            !$this->_Request->input('d_tidak_ada_reaksi') || $this->Model->PatientTransfusion->d_tidak_ada_reaksi = $this->_Request->input('d_tidak_ada_reaksi');
            !$this->_Request->input('d_tanda_tangan') || $this->Model->PatientTransfusion->d_tanda_tangan = $this->_Request->input('d_tanda_tangan');
            !$this->_Request->input('pt4_tgl_pemberian') || $this->Model->PatientTransfusion->pt4_tgl_pemberian = $this->_Request->input('pt4_tgl_pemberian');
            !$this->_Request->input('pt4_jam_pemberian') || $this->Model->PatientTransfusion->pt4_jam_pemberian = $this->_Request->input('pt4_jam_pemberian');
            !$this->_Request->input('pt4_td') || $this->Model->PatientTransfusion->pt4_td = $this->_Request->input('pt4_td');
            !$this->_Request->input('pt4_nadi') || $this->Model->PatientTransfusion->pt4_nadi = $this->_Request->input('pt4_nadi');
            !$this->_Request->input('pt4_suhu') || $this->Model->PatientTransfusion->pt4_suhu = $this->_Request->input('pt4_suhu');
            !$this->_Request->input('pt4_respirasi') || $this->Model->PatientTransfusion->pt4_respirasi = $this->_Request->input('pt4_respirasi');
            !$this->_Request->input('pt4_jml_cairan_masuk') || $this->Model->PatientTransfusion->pt4_jml_cairan_masuk = $this->_Request->input('pt4_jml_cairan_masuk');
            !$this->_Request->input('pt4_jml_cairan_keluar') || $this->Model->PatientTransfusion->pt4_jml_cairan_keluar = $this->_Request->input('pt4_jml_cairan_keluar');
            !$this->_Request->input('pt4_ada_reaksi') || $this->Model->PatientTransfusion->pt4_ada_reaksi = $this->_Request->input('pt4_ada_reaksi');
            !$this->_Request->input('pt4_tidak_ada_reaksi') || $this->Model->PatientTransfusion->pt4_tidak_ada_reaksi = $this->_Request->input('pt4_tidak_ada_reaksi');
            !$this->_Request->input('pt4_tanda_tangan') || $this->Model->PatientTransfusion->pt4_tanda_tangan = $this->_Request->input('pt4_tanda_tangan');

            !$this->_Request->input('dokter') || $this->Model->PatientTransfusion->dokter = $this->_Request->input('dokter');
            !$this->_Request->input('ruang') || $this->Model->PatientTransfusion->ruang = $this->_Request->input('ruang');
            !$this->_Request->input('diagnosis') || $this->Model->PatientTransfusion->diagnosis = $this->_Request->input('diagnosis');
            !$this->_Request->input('colf') || $this->Model->PatientTransfusion->colf = $this->_Request->input('colf');
            !$this->_Request->input('no_batch') || $this->Model->PatientTransfusion->no_batch = $this->_Request->input('no_batch');


        }
    }

    private function Validation()
    {
        $validator = Validator::make($this->_Request->all(), [

        ]);
        if (!$this->Model->PatientTransfusion) {
            $this->Json::set('exception.code', 'NotFoundPatientTransfusion');
            $this->Json::set('exception.message', trans('validation.'.$this->Json::get('exception.code')));
            return false;
        }
        if ($validator->fails()) {
            $this->Json::set('errors', $validator->errors());
            return false;
        }

        return true;
    }

    public function handle($request, Closure $next)
    {
        $this->Initiate($request);
        if ($this->Validation()) {
            $this->Payload->put('Model', $this->Model);
            $this->_Request->merge(['Payload' => $this->Payload]);
            return $next($this->_Request);
        } else {
            return response()->json($this->Json::get(), $this->HttpCode);
        }
    }
}
