{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-dropdown title="Media" icon="la la-group">
    <x-backpack::menu-dropdown-item title="News" icon="la la-question" :link="backpack_url('berita')" />
    <x-backpack::menu-dropdown-item title="Dokumen" icon="la la-question" :link="backpack_url('documents')" />
</x-backpack::menu-dropdown>

<x-backpack::menu-item title="Anggota" icon="la la-question" :link="backpack_url('members')" />
<x-backpack::menu-item title="Jabatan" icon="la la-question" :link="backpack_url('positions')" />
<x-backpack::menu-item title="Kabinet" icon="la la-question" :link="backpack_url('cabinets')" />
<x-backpack::menu-item title="Instansi" icon="la la-question" :link="backpack_url('ministries')" />
<x-backpack::menu-item title="Program Kerja" icon="la la-question" :link="backpack_url('work-programs')" />


<x-backpack::menu-dropdown title="Authentication" icon="la la-group">
    <x-backpack::menu-dropdown-item title="Admin" icon="la la-question" :link="backpack_url('user')" />
</x-backpack::menu-dropdown>
