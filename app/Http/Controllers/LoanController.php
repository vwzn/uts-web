<?php

namespace App\Http\Controllers;

use App\Models\User;
Use App\Models\Loan;
Use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Validation\Rule;
class LoanController extends Controller
{
    public function dataPeminjaman() {
        $loans = Loan::all();
        $cars = Car::all();
        $data = [
            'loans' => $loans,
            'cars' => $cars
        ];
        return view('peminjaman.index', $data);
    }
    public function buatPeminjaman() {
        $loans = Loan::all();
        $cars = Car::all();
        $data = [
            'loans' => $loans,
            'cars' => $cars
        ];
        return view('peminjaman.buat', $data);
    }
    public function tambahData()
    {
        $loans = Loan::all();
        $cars = Car::all();
        $data = [
            'loans' => $loans,
            'cars' => $cars
        ];
        return view('peminjaman.create', $data);

    }
    public function store(Request $request)
    {
        $request->validate([
            "notransaksi" => ['required'],
            "tgl_pinjam" => ['required', 'date'],
            "tgl_pengembalian" => ['required', 'date'],
            "peminjam" => ['required'],
            "status" => ['required', Rule::in(['masih di pinjam', 'sudah di kembalikan'])],
            "petugas" => ['required'],
            "noKtp" => ['required'],
            "car_id" => ['required', 'exists:cars,id']  // Aturan validasi untuk car_id
        ]);

        $loanData = $request->all();
        $loanData['car_id'] = $request->car_id; // Mengambil car_id dari input
    
        Loan::create($loanData);
        return redirect()->to('/loan');
    }
    public function edit($id)
    {
        $loans = Loan::find($id);
        $data = [
            'loans' => $loans
        ];
        return view('peminjaman.edit', $data);
    }
    public function update(Request $request, $id)
    {
        $loan = Loan::find($id);
        $loan->update($request->all());
        return redirect()->to('/loan');
    }
    public function deleteData($id)
    {
        $loans = Loan::find($id);
        $loans->delete();
        return redirect()->to('/loan');
    }
}
