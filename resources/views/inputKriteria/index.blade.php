@extends('dashboard.layout')
@section('title', 'Input Kriteria')
@section('content')
    <h1 class="text-3xl font-bold">Input Kriteria</h1>
    <form method="POST" action="">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-white font-bold mb-2">Name</label>
            <input type="text" name="name" id="name"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-white font-bold mb-2">Description</label>
            <textarea name="description" id="description"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"></textarea>
        </div>
        <button class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600">Submit</button>
    </form>

    <div class="mt-4">
        <h2 class="text-2xl font-bold">List Kriteria</h2>
        {{-- @if (count($criteria) > 0) --}}
        <table class="mt-4 w-full border-collapse ">
            <thead>
                <tr>
                    <th class="border p-2 text-white">Name</th>
                    <th class="border p-2 text-white">Description</th>
                    <th class="border p-2 text-white">Action</th>
                </tr>
            </thead>
            <tbody class="text-white">
                {{-- @foreach ($criteria as $criteria) --}}
                <tr>
                    {{-- <td class="border p-2">{{ $criteria->name }}</td>
                    <td class="border p-2">{{ $criteria->description }}</td>
                    <td class="border p-2">
                        <a href="{{ route('admin.criteria.edit', $criteria->id) }}"><i class="fas fa-pencil-alt"></i></a>
                        <a href="{{ route('admin.criteria.destroy', $criteria->id) }}"><i class="fas fa-trash-alt"></i></a>
                    </td> --}}

                    <td class="border p-2">A1</td>
                    <td class="border p-2">Prestasi</td>
                    <td class="border p-2">
                        <a href="#"><i class="fas fa-pencil-alt rounded-sm bg">Edit</i></a>
                        <a href="#"><i class="fas fa-trash-alt">Delete</i></a>
                    </td>
                </tr>
                <tr>
                    <td class="border p-2">A1</td>
                    <td class="border p-2">Prestasi</td>
                    <td class="border p-2">
                        <a href="#"><i class="fas fa-pencil-alt rounded-sm bg">Edit</i></a>
                        <a href="#"><i class="fas fa-trash-alt">Delete</i></a>
                    </td>
                <tr>
                    <td class="border p-2">A1</td>
                    <td class="border p-2">Prestasi</td>
                    <td class="border p-2">
                        <a href="#"><i class="fas fa-pencil-alt rounded-sm bg">Edit</i></a>
                        <a href="#"><i class="fas fa-trash-alt">Delete</i></a>
                    </td>
                <tr>
                    <td class="border p-2">A1</td>
                    <td class="border p-2">Prestasi</td>
                    <td class="border p-2">
                        <a href="#"><i class="fas fa-pencil-alt rounded-sm bg">Edit</i></a>
                        <a href="#"><i class="fas fa-trash-alt">Delete</i></a>
                    </td>
                <tr>
                    <td class="border p-2">A1</td>
                    <td class="border p-2">Prestasi</td>
                    <td class="border p-2">
                        <a href="#"><i class="fas fa-pencil-alt rounded-sm bg">Edit</i></a>
                        <a href="#"><i class="fas fa-trash-alt">Delete</i></a>
                    </td>
                <tr>
                    <td class="border p-2">A1</td>
                    <td class="border p-2">Prestasi</td>
                    <td class="border p-2">
                        <a href="#"><i class="fas fa-pencil-alt rounded-sm bg">Edit</i></a>
                        <a href="#"><i class="fas fa-trash-alt">Delete</i></a>
                    </td>
                <tr>
                    <td class="border p-2">A1</td>
                    <td class="border p-2">Prestasi</td>
                    <td class="border p-2">
                        <a href="#"><i class="fas fa-pencil-alt rounded-sm bg">Edit</i></a>
                        <a href="#"><i class="fas fa-trash-alt">Delete</i></a>
                    </td>
                <tr>
                    <td class="border p-2">A1</td>
                    <td class="border p-2">Prestasi</td>
                    <td class="border p-2">
                        <a href="#"><i class="fas fa-pencil-alt rounded-sm bg">Edit</i></a>
                        <a href="#"><i class="fas fa-trash-alt">Delete</i></a>
                    </td>
                <tr>
                    <td class="border p-2">A1</td>
                    <td class="border p-2">Prestasi</td>
                    <td class="border p-2">
                        <a href="#"><i class="fas fa-pencil-alt rounded-sm bg">Edit</i></a>
                        <a href="#"><i class="fas fa-trash-alt">Delete</i></a>
                    </td>
                <tr>
                    <td class="border p-2">A1</td>
                    <td class="border p-2">Prestasi</td>
                    <td class="border p-2">
                        <a href="#"><i class="fas fa-pencil-alt rounded-sm bg">Edit</i></a>
                        <a href="#"><i class="fas fa-trash-alt">Delete</i></a>
                    </td>
                <tr>
                    <td class="border p-2">A1</td>
                    <td class="border p-2">Prestasi</td>
                    <td class="border p-2">
                        <a href="#"><i class="fas fa-pencil-alt rounded-sm bg">Edit</i></a>
                        <a href="#"><i class="fas fa-trash-alt">Delete</i></a>
                    </td>
                <tr>
                    <td class="border p-2">A1</td>
                    <td class="border p-2">Prestasi</td>
                    <td class="border p-2">
                        <a href="#"><i class="fas fa-pencil-alt rounded-sm bg">Edit</i></a>
                        <a href="#"><i class="fas fa-trash-alt">Delete</i></a>
                    </td>
                <tr>
                    <td class="border p-2">A1</td>
                    <td class="border p-2">Prestasi</td>
                    <td class="border p-2">
                        <a href="#"><i class="fas fa-pencil-alt rounded-sm bg">Edit</i></a>
                        <a href="#"><i class="fas fa-trash-alt">Delete</i></a>
                    </td>
                <tr>
                    <td class="border p-2">A1</td>
                    <td class="border p-2">Prestasi</td>
                    <td class="border p-2">
                        <a href="#"><i class="fas fa-pencil-alt rounded-sm bg">Edit</i></a>
                        <a href="#"><i class="fas fa-trash-alt">Delete</i></a>
                    </td>
                <tr>
                    <td class="border p-2">A1</td>
                    <td class="border p-2">Prestasi</td>
                    <td class="border p-2">
                        <a href="#"><i class="fas fa-pencil-alt rounded-sm bg">Edit</i></a>
                        <a href="#"><i class="fas fa-trash-alt">Delete</i></a>
                    </td>
                <tr>
                    <td class="border p-2">A1</td>
                    <td class="border p-2">Prestasi</td>
                    <td class="border p-2">
                        <a href="#"><i class="fas fa-pencil-alt rounded-sm bg">Edit</i></a>
                        <a href="#"><i class="fas fa-trash-alt">Delete</i></a>
                    </td>
                <tr>
                    <td class="border p-2">A1</td>
                    <td class="border p-2">Prestasi</td>
                    <td class="border p-2">
                        <a href="#"><i class="fas fa-pencil-alt rounded-sm bg">Edit</i></a>
                        <a href="#"><i class="fas fa-trash-alt">Delete</i></a>
                    </td>
                <tr>
                    <td class="border p-2">A1</td>
                    <td class="border p-2">Prestasi</td>
                    <td class="border p-2">
                        <a href="#"><i class="fas fa-pencil-alt rounded-sm bg">Edit</i></a>
                        <a href="#"><i class="fas fa-trash-alt">Delete</i></a>
                    </td>
                <tr>
                    <td class="border p-2">A1</td>
                    <td class="border p-2">Prestasi</td>
                    <td class="border p-2">
                        <a href="#"><i class="fas fa-pencil-alt rounded-sm bg">Edit</i></a>
                        <a href="#"><i class="fas fa-trash-alt">Delete</i></a>
                    </td>
                <tr>
                    <td class="border p-2">A1</td>
                    <td class="border p-2">Prestasi</td>
                    <td class="border p-2">
                        <a href="#"><i class="fas fa-pencil-alt rounded-sm bg">Edit</i></a>
                        <a href="#"><i class="fas fa-trash-alt">Delete</i></a>
                    </td>
                <tr>
                    <td class="border p-2">A1</td>
                    <td class="border p-2">Prestasi</td>
                    <td class="border p-2">
                        <a href="#"><i class="fas fa-pencil-alt rounded-sm bg">Edit</i></a>
                        <a href="#"><i class="fas fa-trash-alt">Delete</i></a>
                    </td>
                <tr>
                    <td class="border p-2">A1</td>
                    <td class="border p-2">Prestasi</td>
                    <td class="border p-2">
                        <a href="#"><i class="fas fa-pencil-alt rounded-sm bg">Edit</i></a>
                        <a href="#"><i class="fas fa-trash-alt">Delete</i></a>
                    </td>
                <tr>
                    <td class="border p-2">A1</td>
                    <td class="border p-2">Prestasi</td>
                    <td class="border p-2">
                        <a href="#"><i class="fas fa-pencil-alt rounded-sm bg">Edit</i></a>
                        <a href="#"><i class="fas fa-trash-alt">Delete</i></a>
                    </td>
                </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>
@endsection
