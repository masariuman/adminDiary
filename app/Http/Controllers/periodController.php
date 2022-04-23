<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use App\Models\Period;

class periodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // jumlah data dalam 1 page
        $pagination = 5 ;
        // kita load data periode yang hanya aktif dan langsung di pagination
        $data['period'] = Period::where('active',1)->paginate($pagination);
        //disini kita memasukkan angka hitungan untuk membuat nomor yang aka n ditampilkan pada tabel nantinya. contoh pada halaman 1 diakhiri dengan nomor 5, dan halaman 2 akan di mulai dari nomor 6.
        $count = $data['period']->CurrentPage() * $pagination - ($pagination - 1);
        // bisa dilihat data diatas, bahwa yang diambil itu currentpage atau page yang sedang aktif sekarang, misalnya, sekarang page yg aktif itu page 2, maka page 2 itu akan di kalikan dengan $pagination yang mana hal itu adalah integer 5, maka 2x5 = 10. dan dikurangi dengan $pagination-1 yang mana disini hasilnya 4, jadi 10-4 = 6. maka padaha halaman 2 akan dimulai dari nomor 6

        //tidak lupa kita masukkan variabel nomor ke setiap array data yang kita dapatkan
        foreach ($data['period'] as $items) {
            $items['nomor'] = $count;
            //setelah memasukkan nomor tidak lupa kita jumlahkan 1, jadi untuk array berikutnya akan menjadi nomor 7 misalnya
            $count++;
        }

        //kita kembalikan hasil data yang kita dapatkan dalam bentuk json
        return response()->json([
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
