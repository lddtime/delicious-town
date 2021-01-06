<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Ingredient;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Layout\Column;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;
use Dcat\Admin\Widgets\Box;
use Dcat\Admin\Widgets\Form as WidgetForm;

class IngredientController extends AdminController
{
    public function index(Content $content)
    {
        return $content
            ->title($this->title())
            ->description(trans('admin.list'))
            ->row(function (Row $row) {
                $row->column(7, $this->grid());

                $row->column(5, function (Column $column) {
                    $form = new WidgetForm();
                    $form->action(admin_url('ingredients'));

                    $form->text('name', trans('ingredient.fields.name'))->required();
                    $form->number('level', trans('ingredient.fields.level'))->default(1)->min(1)->max(5);

                    $form->hidden('_token')->default(csrf_token());

                    $column->append(Box::make(trans('admin.new'), $form));
                });
            });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Ingredient(), function (Grid $grid) {
            $grid->id->width('50px')->sortable();
            $grid->name;
            $grid->level;
            $grid->created_at;
            $grid->updated_at->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });

            // $grid->disableViewButton();

            $grid->column('name')->editable();
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
        return Show::make($id, new Ingredient(), function (Show $show) {
            $show->id;
            $show->id;
            $show->name;
            $show->level;
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
        return Form::make(new Ingredient(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->number('level')->default(1)->min(1)->max(5);

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
