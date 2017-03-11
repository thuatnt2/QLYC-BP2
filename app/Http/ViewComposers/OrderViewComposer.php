<?php
namespace App\Http\ViewComposers;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Illuminate\View\View;
use App\Contracts\Repositories\UnitRepositoryInterface as IUnit;
use App\Contracts\Repositories\CategoryRepositoryInterface as ICategory;
use App\Contracts\Repositories\KindRepositoryInterface as IKind;
use App\Contracts\Repositories\PurposeRepositoryInterface as IPurpose;
use App\Contracts\Repositories\UserRepositoryInterface as IUser;

class OrderViewComposer 
{

    protected $users;
    protected $units;
    protected $kinds;
    protected $categories;
    protected $purposes;

    function __construct(IUser $users, IUnit $units, IKind $kinds, ICategory $categories, IPurpose $purposes) {
        $this->units = $units;
        $this->kinds = $kinds;
        $this->categories = $categories;
        $this->users = $users;
        $this->purposes = $purposes;
    }
    
    public function compose(View $view) {
        
        $unitPolices = $this->units->findByField('block', 'CS', ['id', 'symbol']);
        $unitSecurites = $this->units->findByField('block', 'AN', ['id', 'symbol']);
        $categories = $this->formatData($this->categories->all(['id', 'symbol']));
        $kinds = $this->formatData($this->kinds->all(['id', 'symbol']));
        $users = $this->formatData($this->users->all(['id', 'fullname as symbol']));
        $purposes = $this->formatData($this->purposes->all(['id', 'symbol']));
        
        $view->with(compact('categories', 'kinds', 'purposes', 'users', 'unitPolices', 'unitSecurites'));
    }
    
    public function formatData($items) {
        
        $output = [];
        foreach ($items as $item) {
            $output[$item->id] = $item->symbol;
        }
        
        return $output;

    }
}