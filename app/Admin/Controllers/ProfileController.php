<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Profile;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class ProfileController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Profile(), function (Grid $grid) {
            $grid->id->sortable();
            $grid->user_id;
            $grid->level;
            $grid->experience;
            $grid->gold;
            $grid->ingots;
            $grid->health;
            $grid->gold_recipes;
            $grid->ranking;
            $grid->status;
            $grid->cupboards;
            $grid->warehouses;
            $grid->locks;
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
        return Show::make($id, new Profile(), function (Show $show) {
            $show->id;
            $show->user_id;
            $show->level;
            $show->experience;
            $show->gold;
            $show->ingots;
            $show->health;
            $show->gold_recipes;
            $show->ranking;
            $show->status;
            $show->cupboards;
            $show->warehouses;
            $show->locks;
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
        return Form::make(new Profile(), function (Form $form) {
            $form->display('id');
            $form->text('user_id');
            $form->text('level');
            $form->text('experience');
            $form->text('gold');
            $form->text('ingots');
            $form->text('health');
            $form->text('gold_recipes');
            $form->text('ranking');
            $form->text('status');
            $form->text('cupboards');
            $form->text('warehouses');
            $form->text('locks');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
