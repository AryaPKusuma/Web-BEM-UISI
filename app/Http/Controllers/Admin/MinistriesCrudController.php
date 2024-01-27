<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MinistriesRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class MinistriesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MinistriesCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Ministries::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/ministries');
        CRUD::setEntityNameStrings('ministries', 'ministries');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'label' => 'Name',
            'type' => 'text',
            'name' => 'name',
        ]);

        $this->crud->addColumn([
            'label' => 'Description',
            'type' => 'text',
            'name' => 'description',
        ]);

        $this->crud->addColumn([
            'name' => 'cabinet_id',
            'label' => 'Cabinet',
            'type' => 'select',
            'entity' => 'cabinet',
            'attribute' => 'name',
            'model' => 'App\Models\Cabinets',
        ]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation([
            'name' => 'required|min:1|max:255',
            'description' => 'required|min:10',
        ]);
        CRUD::field('name')->type('text');
        CRUD::field('description')->type('textarea');

        $this->crud->addField([
            'name' => 'cabinet_id',
            'label' => 'Cabinet',
            'type' => 'select',
            'entity' => 'cabinet',
            'attribute' => 'name',
            'model' => 'App\Models\Cabinets',
        ]);
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    public function setupShowOperation()
    {
        $this->crud->addColumn([
            'label' => 'Name',
            'type' => 'text',
            'name' => 'name',
        ]);

        $this->crud->addColumn([
            'label' => 'Description',
            'type' => 'text',
            'name' => 'description',
        ]);

        $this->crud->addColumn([
            'name' => 'cabinet_id',
            'label' => 'Cabinet',
            'type' => 'select',
            'entity' => 'cabinet',
            'attribute' => 'name',
            'model' => 'App\Models\Cabinets',
        ]);

        $this->crud->addColumn([
            'label' => 'Created at',
            'type' => 'timestamp',
            'name' => 'created_at',
        ]);

        $this->crud->addColumn([
            'label' => 'Edited at',
            'type' => 'timestamp',
            'name' => 'edited_at',
        ]);
    }
}
