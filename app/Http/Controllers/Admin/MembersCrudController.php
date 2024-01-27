<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MembersRequest;
use App\Models\Ministries;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class MembersCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MembersCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Members::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/members');
        CRUD::setEntityNameStrings('members', 'members');


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
            'label' => 'Nama',
            'type' => 'text',
            'name' => 'name',
        ]);

        $this->crud->addColumn([
            'label' => 'Photo',
            'type' => 'text',
            'name' => 'photo',
        ]);

        $this->crud->addColumn([
            'label' => 'Position',
            'type' => 'select',
            'name' => 'position_id',
            'entity' => 'position',
            'attribute' => 'name',
            'model' => 'App\Models\Position',
        ]);

        $this->crud->addColumn([
            'name' => 'ministry_id',
            'label' => 'Minitstry',
            'type' => 'select',
            'entity' => 'ministry',
            'attribute' => 'name',
            'model' => 'App\Models\Ministries',
        ]);

        $this->crud->addColumn([
            'name' => 'cabinet_id',
            'label' => 'cabinet',
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
            'name' => 'required|min:3',
            'photo' => 'required|file|mimes:jpeg,png,jpg,webp,JPG|max:1024|dimensions:min_width=100,min_height=100,max_width=2644,max_height=1763',
            'position_id' => 'required',
        ]);


        CRUD::field('name')->type('text');
        CRUD::field('photo')
        ->type('upload')
        ->withFiles([
            'disk' => 'public',
            'path' => 'photo',
            'fileNamer' => \Backpack\CRUD\app\Library\Uploaders\Support\FileNameGenerator::class,
        ]);

        $this->crud->addField([
            'name' => 'position_id',
            'label' => 'Position',
            'type' => 'select',
            'entity' => 'position',
            'attribute' => 'name',
            'model' => 'App\Models\Positions',
        ]);

        $this->crud->addField([
            'label'                  => 'Pilih instansi GroupedBy Kabinet',
            'type'                   => 'select_grouped',
            'name'                   => 'ministry_id',
            'entity'                 => 'ministry',
            'attribute'              => 'name',
            'group_by'               => 'cabinet',
            'group_by_attribute'     => 'name',
            'group_by_relationship_back' => 'ministry',
        ]);

        $this->crud->addField([
            'name' => 'cabinet_id',
            'label' => 'cabinet',
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
            'label' => 'Photo',
            'type' => 'text',
            'name' => 'photo',
        ]);

        $this->crud->addColumn([
            'label' => 'Position',
            'type' => 'select',
            'name' => 'position_id',
            'entity' => 'position',
            'attribute' => 'name',
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
