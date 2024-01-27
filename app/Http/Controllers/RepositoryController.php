<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MyModelService;

class RepositoryController extends Controller
{
    protected $myModelService;

    public function __construct(MyModelService $myModelService)
    {
        $this->myModelService = $myModelService;
    }

    public function index()
    {
        $myModels = $this->myModelService->getAllMyModels();
        // Lakukan sesuatu dengan data yang didapatkan

        return view('my_model.index', compact('myModels'));
    }

    public function show($id)
    {
        $myModel = $this->myModelService->getMyModelById($id);
        // Lakukan sesuatu dengan data yang didapatkan

        return view('my_model.show', compact('myModel'));
    }
}
