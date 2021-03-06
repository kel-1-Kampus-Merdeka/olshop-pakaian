<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Product / {{ $product->name }} / Gallery / Upload Photos
        </h2>
    </x-slot>

    @include('sweetalert::alert')

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
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            </p>
                        </div>
                    </div>
                @endif
                <div class="mb-8 flex justify-end">
                        <a href="{{ route('dashboard.products.gallery.index', $product->id) }}"
                            class="bg-indigo-700 hover:bg-blue-500 text-white font-bold py-2  px-4 rounded shadow-lg">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i> back
                            </a>
                </div>
                <form action="{{ route('dashboard.products.gallery.store', $product->id) }}" method="POST"
                    class="w-full" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-wrap -mx-3  mb-6">
                        <div class="w-full px-3">
                            <label
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Name</label>
                            {{-- files di dapat dari validari request --}}
                            <input type="file" name="files[]"
                                class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-y-gray-500"
                                placeholder="Upload Photos" multiple accept="image/*">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <button type="submit"
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                                <i class="fa fa-floppy-o" aria-hidden="true"></i> Save Photo gallery
                            </button>
                        </div>
                    </div>


                </form>

            </div>
        </div>
    </div>

</x-app-layout>
