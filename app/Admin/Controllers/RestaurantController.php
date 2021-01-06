<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Restaurant;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class RestaurantController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Restaurant(), function (Grid $grid) {
            $grid->id->sortable();
            $grid->name;
            $grid->level;
            $grid->is_branch;
            $grid->oil;
            $grid->oil_capacity;
            $grid->facilities;
            $grid->tables;
            $grid->cockroaches;
            $grid->created_at;
            $grid->updated_at->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Restaurant(), function (Show $show) {
            $show->id;
            $show->name;
            $show->level;
            $show->is_branch;
            $show->oil;
            $show->oil_capacity;
            $show->facilities;
            $show->tables;
            $show->cockroaches;
            $show->created_at;
            $show->updated_at;
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Restaurant(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('level');
            $form->text('is_branch');
            $form->text('oil');
            $form->text('oil_capacity');
            $form->text('facilities');
            $form->text('tables');
            $form->text('cockroaches');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
