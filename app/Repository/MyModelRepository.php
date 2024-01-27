<?php
namespace App\Repositories;

use App\Models\MyModel;

class MyModelRepository
{
    public function getAll()
    {
        return MyModel::all();
    }

    public function getById($id)
    {
        return MyModel::find($id);
    }

    // Tambahkan method lain sesuai kebutuhan Anda
}
