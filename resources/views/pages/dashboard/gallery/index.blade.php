<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Product / {{ $product->name }} / Gallery
        </h2>
    </x-slot>

    <x-slot name="script" >
        <script>
            // AJAX Datatables
            var datatable = $('#crudTable').DataTable({
                ajax: {
                    url: '{!! url()->current() !!}'
                },
                columns: [{
                        data: 'id',
                        name: 'id',
                        width: '5%',

                    },
                    {
                        data: 'url',
                        name: 'url',
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        width: '25%'
                    }

                ]
            })
        </script>
    </x-slot>

    @include('sweetalert::alert')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10 flex justify-between">
                <a href="{{ route('dashboard.products.gallery.create', $product->id) }}"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                    <i class="fa fa-plus" aria-hidden="true"></i> Upload Photos
                </a>
                <a href="{{ route('dashboard.products.index') }}"
                    class="bg-indigo-700 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded shadow-lg">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i> back
                </a>
            </div>
            <div class="shadow overflow-hidden sm-rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <table id="crudTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Photo</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
