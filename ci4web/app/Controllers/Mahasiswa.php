<?php
namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    // LIST + SEARCH
    public function index()
    {
        $m = new MahasiswaModel();
        $q = trim($this->request->getGet('q') ?? '');

        if ($q !== '') {
            $rows = $m->like('nama', $q)->orderBy('nim','ASC')->findAll();
        } else {
            $rows = $m->orderBy('nim','ASC')->findAll();
        }
        return view('mahasiswa/index', ['rows'=>$rows, 'q'=>$q]);
    }

    // DETAIL
    public function detail($nim)
    {
        $row = (new MahasiswaModel())->find($nim);
        if (!$row) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("NIM $nim tidak ditemukan");
        }
        return view('mahasiswa/detail', ['row'=>$row]);
    }

    // FORM TAMBAH
    public function create()
    {
        return view('mahasiswa/form', [
            'mode' => 'create',
            'row'  => ['nim'=>'', 'nama'=>'', 'umur'=>'']
        ]);
    }

    // SIMPAN TAMBAH
    public function store()
    {
        (new MahasiswaModel())->insert([
            'nim'  => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'umur' => (int) $this->request->getPost('umur'),
        ]);
        return redirect()->to('/mahasiswa');
    }

    // FORM EDIT
    public function edit($nim)
    {
        $row = (new MahasiswaModel())->find($nim);
        if (!$row) return redirect()->to('/mahasiswa');
        return view('mahasiswa/form', ['mode'=>'edit', 'row'=>$row]);
    }

    // SIMPAN EDIT
    public function update($nim)
    {
        (new MahasiswaModel())->update($nim, [
            'nama' => $this->request->getPost('nama'),
            'umur' => (int) $this->request->getPost('umur'),
        ]);
        return redirect()->to('/mahasiswa');
    }

    // HAPUS (sederhana)
    public function delete($nim)
    {
        (new MahasiswaModel())->delete($nim);
        return redirect()->to('/mahasiswa');
    }
}
