<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Product &raquo; {{ $item->name }} &raquo; Edit
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                @if ($errors->any())
                    <div class="mb-5" role="alert">
                        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                            There's something wrong!
                        </div>
                        <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            <p>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li> {{ $error }}</li>
                                    @endforeach
                                </ul>
                            </p>
                        </div>
                    </div>
                @endif
                <form action="{{ route('dashboard.product.update', $item->id ) }}" class="w-full" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    {{-- Name --}}
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Name</label>
                            <input type="text" value="{{ old('name') ?? $item->name }}" name="name" placeholder="Product Name" class="block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:border-gray-500" >
                        </div>
                    </div>
                    {{-- Desk --}}
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Description</label>
                            <textarea name="deskripsi" class="block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:border-gray-500" >
                                {!! old('deskripsi') ?? $item->deskripsi !!}
                            </textarea>
                        </div>
                    </div>
                    {{-- Price --}}
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Price</label>
                            <input type="number" value="{{ old('price') ?? $item->price }}" name="price" placeholder="price" class="block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:border-gray-500" >
                        </div>
                    </div>
                    {{-- Button --}}
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <button type="submit" class="btn btn-success rounded shadow">
                                Update Product
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'deskripsi' );
    </script>
</x-app-layout>