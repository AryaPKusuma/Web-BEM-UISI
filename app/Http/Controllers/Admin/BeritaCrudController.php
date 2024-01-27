<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BeritaRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class BeritaCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class BeritaCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Berita::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/berita');
        CRUD::setEntityNameStrings('berita', 'beritas');
        // $this->crud->denyAccess('delete'); // Disable delete
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
        CRUD::setFromDb();
        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
        // CRUD::addColumn([
        //     'name' => 'judul', // Nama kolom dari tabel berita
        //     'label' => 'Judul', // Label yang ditampilkan di tampilan
        //     'type' => 'text',
        //     // Properti 'delete' digunakan untuk menyembunyikan tombol "Delete"
        //     'delete' => false,
        // ]);
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
            'judul' => 'required|min:10',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'isi' => 'required|min:40',
        ]);

        CRUD::field('judul')->type('text');

        CRUD::field('gambar')
        ->type('upload')
        ->withFiles([
            'disk' => 'public', // the disk where file will be stored
            'path' => 'uploads', // the path inside the disk where file will be stored
            'fileNamer' => \Backpack\CRUD\app\Library\Uploaders\Support\FileNameGenerator::class,
        ]);

        CRUD::field('isi')->type('summernote');
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
        CRUD::field('gambar')->type('upload')->withFiles();

        // Alternatively, if you are not doing much more than defining fields in your create operation:
        // $this->setupCreateOperation();
    }

    protected function setupShowOperation()
    {
        CRUD::setFromDb(); // set fields from db columns.
    }
}
