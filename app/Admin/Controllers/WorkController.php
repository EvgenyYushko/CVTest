<?php


namespace App\Admin\Controllers;


use App\Models\Work;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class WorkController extends AdminController
{

    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Компании';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Work());

        $grid->column('id', __('ID'))->sortable();
        $grid->column('name', __('Назнание'))->sortable();
        $grid->column('website', __('сайт'))->sortable();
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed   $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Work::findOrFail($id));

        $show->field('id', __('ID'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Work);

        $form->display('id', __('ID'));
        $form->text('name', __('Название'));
        $form->text('desc', __('Краткое описание'));
        $form->text('full_text', __('Полное описание'));
        $form->text('website', __('сайт'));
        $form->image('image', __('логотип'));
        $form->display('created_at', __('Created At'));
        $form->display('updated_at', __('Updated At'));

        return $form;
    }

}
