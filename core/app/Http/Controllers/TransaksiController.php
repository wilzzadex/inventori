<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Barang_masuk;
use App\Models\History_barang_masuk;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function indexIn()
    {
        return view('backend.pages.transaksi.in.in');
    }

    public function addIn()
    {

        $barang = Barang::orderBy('kode_barang','ASC')->get();
        $data_barang = Barang_masuk::where('created_by',1)->where('is_save',0)->orderBy('id','ASC')->get();
        $data['barang_masuk'] = $data_barang;
        $data['barang'] = $barang;
        return view('backend.pages.transaksi.in.add',$data);
    }

    public function store_in_temp(Request $request)
    {
        $input1 = str_replace('Rp','',$request->harga);
        $input2 = str_replace('.','',$input1);
        $harga = str_replace(' ','',$input2);

        $cek = Barang_masuk::where(['created_by' => 1, 'kode_barang' => $request->kode_barang, 'is_save' => 0])->count();
        if($cek > 0){
            return response()->json('ada');
        }else{
            $barang_masuk = new Barang_masuk();
            $barang_masuk->kode_barang_masuk = null;
            $barang_masuk->kode_barang = $request->kode_barang;
            $barang_masuk->kg_in = $request->jumlah;
            $barang_masuk->harga_in = $harga;
            $barang_masuk->is_save = 0;
            $barang_masuk->created_by = 1;
            $barang_masuk->save();

            $data_barang = Barang_masuk::where('created_by',1)->where('is_save',0)->orderBy('id','ASC')->get();
            $data['barang'] = $data_barang;
            return view('backend.pages.transaksi.in.part_table_preview',$data);
        }
       
        
    }

    public function inDestroy(Request $request)
    {
        $hapus = Barang_masuk::findOrFail($request->id)->delete();
        $data_barang = Barang_masuk::where('created_by',1)->where('is_save',0)->orderBy('id','ASC')->get();
        $data['barang'] = $data_barang;
        return view('backend.pages.transaksi.in.part_table_preview',$data);
    }

    public function inEdit(Request $request)
    {
       
        $barang_masuk = Barang_masuk::findOrFail($request->id);
        return response()->json($barang_masuk);
    }

    public function inUpdate(Request $request)
    {
        $input1 = str_replace('Rp','',$request->harga);
        $input2 = str_replace('.','',$input1);
        $harga = str_replace(' ','',$input2);
        
        $cek = Barang_masuk::where(['created_by' => 1, 'kode_barang' => $request->kode_barang, 'is_save' => 0])->where('id','!=',$request->id)->count();
        if($cek > 0){
            return response()->json('ada');
        }else{
            $barang_masuk = Barang_masuk::find($request->id);
            $barang_masuk->kode_barang_masuk = null;
            $barang_masuk->kode_barang = $request->kode_barang;
            $barang_masuk->kg_in = $request->jumlah;
            $barang_masuk->harga_in = $harga;
            $barang_masuk->is_save = 0;
            $barang_masuk->created_by = 1;
            $barang_masuk->save();

            $data_barang = Barang_masuk::where('created_by',1)->where('is_save',0)->orderBy('id','ASC')->get();
            $data['barang'] = $data_barang;
            return view('backend.pages.transaksi.in.part_table_preview',$data);
        }
        // dd($cek);
    }
}
