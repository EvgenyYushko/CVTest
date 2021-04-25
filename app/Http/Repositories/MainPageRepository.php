<?php


namespace App\Http\Repositories;


use App\Http\Models\Profile;
use App\Http\Repositories\Contracts\MainPageRepositoryInterface;

class MainPageRepository implements MainPageRepositoryInterface
{
    private $dataForFirstPage =[];

    public function getDataForFirstPage():array {
        $this->getProfile();
        return $this->dataForFirstPage;
    }

//    private function getSkills():void{
//        $this=>$this->dataForFirstPage['skills']= Skil
//    }

    private function getProfile(){
         $this->dataForFirstPage['profile'] = Profile::where('slug', config('app.slug'))->first();
//        dd($this->dataForFirstPage['profile']);
    }


}