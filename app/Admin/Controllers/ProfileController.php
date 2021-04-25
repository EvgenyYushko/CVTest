<?php


namespace App\Admin\Controllers;


use App\Http\Models\Profile;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;

class ProfileController extends AdminController
{

    protected  $title = 'Данные профиля';

    protected function grid(){
        $grid = new Grid(new Profile());

        $grid->column('id', __('ID'))->sortable();
        $grid->column('name', __('ID'))->sortable();
        $grid->column('surname', __('ID'))->sortable();
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    protected function form()
    {
        $form = new Form(new Profile);
        $form->display('id', __('ID'));
        $form->text('name', __('Имя'));
        $form->text('surname', __('Фамилия'));
        $form->text('slug', __('slug'));
        $form->date('birthday', __('День рождения'));
        $form->text('study_place', __('Образование  '));
        $form->image('avatar', __('аватар'));
        $form->display('created_at', __('Created At'));
        $form->display('updated_at', __('Updated At'));
        return $form;
    }
}