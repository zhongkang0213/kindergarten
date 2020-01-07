<?php

namespace App\Admin\Controllers\Meal;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Admin\Models\Meal\Food as MealFood;
use App\Admin\Models\Meal\FoodTags as MealFoodTags;
use App\Admin\Models\Meal\FoodSubTags as MealFoodSubTags;

class FoodController extends AdminController
{
    protected $title = '食材';

    // group 1 基本 2 膳食营养 3 维生素 4 矿物质
    protected $fieldMap = [
        ['field' => 'id', 'name' => 'ID', 'group' => 1, 'unit' => 0],
        ['field' => 'name', 'name' => '名称', 'group' => 1, 'unit' => 0],
        ['field' => 'pinyin', 'name' => '拼音', 'group' => 1, 'unit' => 0],
        ['field' => 'edible', 'name' => '可食部', 'group' => 2, 'unit' => 0],
        ['field' => 'water', 'name' => '水分', 'group' => 2, 'unit' => 3],
        ['field' => 'energy_kcal', 'name' => '能量', 'group' => 2, 'unit' => 4],
        ['field' => 'energy_kj', 'name' => '能量', 'group' => 2, 'unit' => 6],
        ['field' => 'protein', 'name' => '蛋白质', 'group' => 2, 'unit' => 3],
        ['field' => 'fatty', 'name' => '脂肪', 'group' => 2, 'unit' => 3],
        ['field' => 'fatty_acid', 'name' => '脂肪酸', 'group' => 2, 'unit' => 0],
        ['field' => 'sfa', 'name' => '饱和', 'group' => 2, 'unit' => 0],
        ['field' => 'mufa', 'name' => '单不饱和', 'group' => 2, 'unit' => 0],
        ['field' => 'pufa', 'name' => '多不饱和', 'group' => 2, 'unit' => 0],
        ['field' => 'cho', 'name' => '碳水化合物', 'group' => 2, 'unit' => 3],
        ['field' => 'dietary_fiber', 'name' => '膳食纤维', 'group' => 2, 'unit' => 3],
        ['field' => 'cholesterol', 'name' => '胆固醇', 'group' => 2, 'unit' => 2],
        ['field' => 'ash', 'name' => '灰分', 'group' => 2, 'unit' => 3],
        ['field' => 'vitamin_a', 'name' => '维生素A', 'group' => 3, 'unit' => 1],
        ['field' => 'carotene', 'name' => '胡萝卜素', 'group' => 3, 'unit' => 1],
        ['field' => 'retinol', 'name' => '视黄醇', 'group' => 3, 'unit' => 1],
        ['field' => 'thiamin', 'name' => '硫胺素', 'group' => 3, 'unit' => 2],
        ['field' => 'riboflavin', 'name' => '核黄素', 'group' => 3, 'unit' => 2],
        ['field' => 'niacin', 'name' => '尼克酸', 'group' => 3, 'unit' => 2],
        ['field' => 'vitamin_c', 'name' => '维生素C', 'group' => 3, 'unit' => 2],
        ['field' => 'vitamin_e', 'name' => '维生素E', 'group' => 3, 'unit' => 2],
        ['field' => 'vitamin_ea', 'name' => '维生素EA', 'group' => 3, 'unit' => 2],
        ['field' => 'vitamin_ebc', 'name' => '维生素EBC', 'group' => 3, 'unit' => 2],
        ['field' => 'vitamin_ed', 'name' => '维生素ED', 'group' => 3, 'unit' => 2],
        ['field' => 'ca', 'name' => '钙', 'group' => 4, 'unit' => 2],
        ['field' => 'p', 'name' => '磷', 'group' => 4, 'unit' => 2],
        ['field' => 'k', 'name' => '钾', 'group' => 4, 'unit' => 2],
        ['field' => 'na', 'name' => '钠', 'group' => 4, 'unit' => 2],
        ['field' => 'mg', 'name' => '镁', 'group' => 4, 'unit' => 2],
        ['field' => 'fe', 'name' => '铁', 'group' => 4, 'unit' => 2],
        ['field' => 'zn', 'name' => '锌', 'group' => 4, 'unit' => 2],
        ['field' => 'se', 'name' => '硒', 'group' => 4, 'unit' => 2],
        ['field' => 'cu', 'name' => '铜', 'group' => 4, 'unit' => 2],
        ['field' => 'mn', 'name' => '锰', 'group' => 4, 'unit' => 2],
        ['field' => 'folicacid', 'name' => '叶酸', 'group' => 3, 'unit' => 1],
        ['field' => 'iodine', 'name' => '碘', 'group' => 4, 'unit' => 2],
        ['field' => 'origin', 'name' => '产地', 'group' => 1, 'unit' => 0],
        ['field' => 'flag', 'name' => '标记', 'group' => 1, 'unit' => 0],
    ];

    // unit 0 无 1 微克 2 毫克 3 克 4 千卡 5 卡 6 千焦
    protected $unitMap = [
        0 => '',
        1 => '(微克)',
        2 => '(毫克)',
        3 => '(克)',
        4 => '(千卡)',
        5 => '(卡)',
        6 => '(千焦)',
    ];

    protected function unit($id)
    {
        return $this->unitMap[$id];
    }

    protected function detail($id)
    {
        $show = new Show(MealFood::findOrFail($id));

        $show->panel()
             ->tools(function ($tools) {
                 $tools->disableEdit();
                 //$tools->disableList();
                 $tools->disableDelete();
             });;
        
        foreach ($this->fieldMap as $v) {
            $show->field($v['field'], __("{$v['name']}").$this->unit($v['unit']));
        }
        
        return $show;
    }

    protected function grid()
    {
        $grid = new Grid(new MealFood);
        $grid->column('id', __('ID'))->sortable();

        $show = ['name', 'pinyin', 'edible', 'water', 'energy_kcal', 'vitamin_a'];
        foreach ($this->fieldMap as $v) {
            if (in_array($v['field'], $show)) {
                $grid->column($v['field'], __("{$v['name']}"));
            }
        }

        $grid->filter(function($filter){
            // 去掉默认的id过滤器
            $filter->disableIdFilter();

            // 在这里添加字段过滤器
            $filter->like('name', '名称');

            $filter->equal('code', '类别')->select(
                MealFoodTags::all()->pluck('name', 'code')
            )->load('subcode','/admin/api/food_sub_tags/search');

            $filter->equal('subcode', '分类')->select(function($id) {
                return MealFoodSubTags::where('code', $id)->get()->pluck('name', 'code');
            });
        });

        $grid->actions(function ($actions) {
            $actions->disableDelete();
            $actions->disableEdit();
            //$actions->disableView();
        });

        $grid->disableCreateButton();
        $grid->disableRowSelector();
        $grid->disableColumnSelector();
        //$grid->disableTools();
        $grid->disableExport();


        return $grid;
    }

    protected function form()
    {
        $form = new Form(new MealFood);

        $form->tab('基本信息', function($form) {
            $form->text('name', __('名称'));
            $form->select('tag_id', __('食材标签'))->options(function() {
                $tags = MealFoodTags::all()->pluck('name', 'id');
                return $tags;
            });
            $form->text('pinyin', __('拼音'));
            $form->text('origin', __('产地'));
        })->tab('营养成分', function($form) {
            $form->decimal('nutrient.energy_kcal', __('能量Kcal'));
            $form->decimal('nutrient.fatty', __('脂肪'));
            $form->decimal('nutrient.dietary_fiber', __('膳食纤维'));
            $form->decimal('nutrient.carotene', __('胡萝卜素'));
            $form->decimal('nutrient.vitamin_c', __('维生素C'));
        });
            

        return $form;
    }
}
