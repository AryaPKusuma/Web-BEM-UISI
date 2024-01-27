<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CabinetsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CabinetsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CabinetsCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Cabinets::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/cabinets');
        CRUD::setEntityNameStrings('cabinets', 'cabinets');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('status');
        CRUD::column('name');
        CRUD::column('period_start')->type('date');

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
            'name' => 'required|min:2',
            'logo' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);

        CRUD::field('name')->type('text');

        CRUD::field('logo')
        ->type('upload')
        ->withFiles([
            'disk' => 'public', // the disk where file will be stored
            'path' => 'logo', // the path inside the disk where file will be stored
            'fileNamer' => \Backpack\CRUD\app\Library\Uploaders\Support\FileNameGenerator::class,
        ]);

        CRUD::field('vision')->type('summernote');
        CRUD::field('mission')->type('summernote');
        CRUD::field('period_start')->type('date');
        CRUD::field('period_end')->type('date');
        $this->crud->addField([
            'name' => 'status',
            'label' => 'Status',
            'type' => 'select_from_array',
            'options' => ['active' => 'active', 'inactive' => 'inactive'],
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

    protected function setupDeleteOperation()
    {
        CRUD::field('logo')->type('upload')->withFiles();
    }

}
