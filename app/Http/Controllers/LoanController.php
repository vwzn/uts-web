<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Loan;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Validation\Rule;

class LoanController extends Controller
{
    public function dataPeminjaman()
    {
        $loans = Loan::all();
        $cars = Car::all();
        $data = [
            'loans' => $loans,
            'cars' => $cars
        ];
        return view('peminjaman.index', $data);
    }
    public function buatPeminjaman()
    {
        $loans = Loan::all();
        $cars = Car::all();
        $data = [
            'loans' => $loans,
            'cars' => $cars
        ];
        return view('peminjaman.buat', $data);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "notransaksi" => ['required'],
            "tgl_pinjam" => ['required', 'date'],
            "tgl_pengembalian" => ['required', 'date', 'after:tgl_pinjam'], //validate tglpengembalian > tglpinjam
            "peminjam" => ['required'],
            "status" => ['required'],
            "petugas" => ['required'],
            "noKtp" => ['required'],
            "car_id" => ['required', 'exists:cars,id']
        ]);
        $loanData = $request->all();
        $loanData['car_id'] = $request->car_id; // Mengambil car_id dari input

        // Kurangi stok mobil yang dipinjam
        $car = Car::find($validatedData['car_id']);
        if ($car) {
            $car->stok--;
            $car->save();
        }

        // Simpan data peminjaman
        Loan::create($loanData);
        return redirect('/loan')->with('success', 'Peminjaman berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $loans = Loan::find($id);
        $cars = Car::find($id);
        $data = [
            'loans' => $loans,
            'cars' => $cars,
        ];
        return view('peminjaman.edit', $data);
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'notransaksi' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_pengembalian' => ['required', 'date', 'after:tgl_pinjam'],
            'peminjam' => 'required',
            'status' => 'required',
            'petugas' => 'required',
            'noKtp' => 'required',
            'car_id' => 'required',
        ]);

        // Dapatkan data peminjaman berdasarkan ID
        $loan = Loan::find($id);

        if ($loan) {
            // Periksa jika ID mobil berubah
            if ($loan->car_id != $validatedData['car_id']) {
                // Mengembalikan stok mobil sebelumnya
                $previousCar = Car::find($loan->car_id);
                if ($previousCar) {
                    $previousCar->stok++;
                    $previousCar->save();
                }

                // Mengurangi stok mobil baru
                $newCar = Car::find($validatedData['car_id']);
                if ($newCar) {
                    $newCar->stok--;
                    $newCar->save();
                }
            }

            // Update data peminjaman
            $loan->notransaksi = $validatedData['notransaksi'];
            $loan->tgl_pinjam = $validatedData['tgl_pinjam'];
            $loan->tgl_pengembalian = $validatedData['tgl_pengembalian'];
            $loan->peminjam = $validatedData['peminjam'];
            $loan->status = $validatedData['status'];
            $loan->petugas = $validatedData['petugas'];
            $loan->noKtp = $validatedData['noKtp'];
            $loan->car_id = $validatedData['car_id'];

            // Tambahkan logika pengembalian sebenarnya
            if ($request->has('tgl_pengembalian_sebenarnya')) {
                $loan->tgl_pengembalian_sebenarnya = $request->tgl_pengembalian_sebenarnya;
            }

            $loan->save();

            return redirect('/loan')->with('success', 'Peminjaman berhasil diperbarui.');
        }

        return redirect('/loan')->with('error', 'Peminjaman tidak ditemukan.');
    }

    public function deleteData($id)
    {
        $loans = Loan::find($id);
        $cars = Car::find($id);
        $loans->delete();
        return redirect()->to('/loan');
    }
    public function search(Request $request)
    {
        $search = $request->input('search');

        $loans = Loan::query()
            ->where('notransaksi', 'LIKE', "%{$search}%")
            ->orWhere('tgl_pinjam', 'LIKE', "%{$search}%")
            ->orWhere('tgl_pengembalian', 'LIKE', "%{$search}%")
            ->orWhere('peminjam', 'LIKE', "%{$search}%")
            ->orWhere('status', 'LIKE', "%{$search}%")
            ->orWhere('petugas', 'LIKE', "%{$search}%")
            ->orWhere('noKtp', 'LIKE', "%{$search}%")
            ->orWhere('car_id', 'LIKE', "%{$search}%")
            ->get();

        $cars = Car::all();

        return view('peminjaman.index', compact('loans','cars'));
    }
}
