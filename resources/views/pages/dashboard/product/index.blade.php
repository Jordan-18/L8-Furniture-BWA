<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>

    <x-slot name="script">
        <script>
            // ajax datatable
            var datatable = $("#crudTable").DataTable({
                ajax: {
                    url:'{!! url()->current() !!}'
                },
                columns: [
                    {data: 'id', name:'id', width: '5%'},
                    {data: 'name', name:'name'},
                    {data: 'price', name:'price'},
                    {
                        data: 'action', 
                        name:'action', 
                        orderable: false,
                        searchable: false,
                        width:'25%' 
                    },
                ]
            })
        </script>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10">
                <a href="{{ route('dashboard.product.create')}}" class="btn btn-success rounded shadow">
                    + Create Product
                </a>
            </div>
            <div class="shadow overflow-hidden sm-rounded-md mt-3">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <table id="crudTable">
                        <thead>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
