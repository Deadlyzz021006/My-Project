<?php

// app/Services/MyModelService.php

namespace App\Services;

use App\Repositories\MyModelRepository;

class MyModelService
{
    protected $myModelRepository;

    public function __construct(MyModelRepository $myModelRepository)
    {
        $this->myModelRepository = $myModelRepository;
    }

    public function getAllMyModels()
    {
        return $this->myModelRepository->getAll();
    }

    public function getMyModelById($id)
    {
        return $this->myModelRepository->getById($id);
    }

    // Tambahkan method lain sesuai kebutuhan Anda
}
