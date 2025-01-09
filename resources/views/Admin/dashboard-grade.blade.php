<x-dashboard-layout>
    <x-slot:title>{{$title}}</x-slot:title>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">No.</th>
                    <th scope="col" class="px-6 py-3">Kelas</th>
                    <th scope="col" class="px-6 py-3">Jurusan</th>
                    <th scope="col" class="px-6 py-3">Siswa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dashboard_grades as $grade)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $grade->id }}
                    </th>
                    <td class="px-6 py-4">{{ $grade->nama }}</td>
                    <td class="px-6 py-4">{{ $grade->department->nama }}</td>
                    <td class="px-6 py-4">
                        @foreach ($grade->students as $student)
                            <ul>
                                <li>{{ $student->nama }}</li>
                            </ul>
                        @endforeach
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-dashboard-layout>
