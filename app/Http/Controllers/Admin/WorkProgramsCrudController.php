<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\WorkProgramsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class WorkProgramsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class WorkProgramsCrudController extends CrudController
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
        CRUD::setModel(\App\Models\WorkPrograms::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/work-programs');
        CRUD::setEntityNameStrings('work programs', 'work programs');

    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // CRUD::setFromDb(); // set columns from db columns.
        CRUD::column('name')->type('text');
        CRUD::column('description')->type('text');
        $this->crud->column([
            'label'                  => 'Kementrian',
            'type'                   => 'select_grouped',
            'name'                   => 'ministry_id',
            'entity'                 => 'ministry',
            'attribute'              => 'name',
            'group_by'               => 'cabinet',
            'group_by_attribute'     => 'name',
            'group_by_relationship_back' => 'ministry',
        ]);
        $this->crud->column([
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
            'name' => 'required|min:2',
            'description' => 'required|min:2',
        ]);
        // CRUD::setFromDb(); // set fields from db columns.

        CRUD::field('name')->type('text');
        CRUD::field('description')->type('textarea');
        $this->crud->addField([
            'label'                  => 'Pilih instansi Berdasarkan Kabinet',
            'type'                   => 'select_grouped',
            'name'                   => 'ministry_id',
            'entity'                 => 'ministry',
            'attribute'              => 'name',
            'group_by'               => 'cabinet',
            'group_by_attribute'     => 'name',
            'group_by_relationship_back' => 'ministry', // Nama relasi dari tabel kabinet ke tabel members
        ]);
        $this->crud->addField([
            'name' => 'cabinet_id',
            'label' => 'Cabinet',
            'type' => 'select',
            'entity' => 'cabinet', // Sesuaikan dengan nama entity model positions
            'attribute' => 'name',  // Nama kolom yang akan ditampilkan di dropdown
            'model' => 'App\Models\Cabinets', // Namespace lengkap untuk model positions
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

    protected function setupShowOperation()
    {
        CRUD::column('name')->type('text');
        CRUD::column('description')->type('text');
        $this->crud->column([
            'label'                  => 'Kementrian',
            'type'                   => 'select_grouped',
            'name'                   => 'ministry_id',
            'entity'                 => 'ministry',
            'attribute'              => 'name',
            'group_by'               => 'cabinet',
            'group_by_attribute'     => 'name',
            'group_by_relationship_back' => 'ministry', // Nama relasi dari tabel kabinet ke tabel members
        ]);
        CRUD::column('created_at')->type('date');
        CRUD::column('updated_at')->type('date');
    }
}
