<?php

namespace App\Http\Controllers;
use App\Http\Repositories\Contracts\MainPageRepositoryInterface;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\View\View;
class PortfolioController extends Controller
{
    public $mainPageRepository;
    public function __construct(MainPageRepositoryInterface $mainPageRepository)
    {
        $this->mainPageRepository=$mainPageRepository;
    }
    public function index():View
    {
        $data=$this->mainPageRepository->getDataForFirstPage();
        return view('sections.main')->with(compact('data'));
    }
}