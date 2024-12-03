<div class="container mx-auto p-4 relative">
    <h1 class="text-4xl font-bold mb-4 text-white text-center">Trials (Patch 7.0 - 7.1)</h1>
    <button onclick="toggleInProgress()" class="mb-4 px-4 py-2 bg-gray-500 text-xl text-white rounded-lg">Toggle In Progress</button>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-xl text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xl text-gray-200 uppercase dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3"></th>
                    <th scope="col" class="px-6 py-3">Title</th>
                    <th scope="col" class="px-6 py-3">Item Level</th>
                    <th scope="col" class="px-6 py-3">Difficulty</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <img src="{{ asset('images/trial.png') }}" alt="Thumbnail" class="h-6 w-6">
                    </th>
                    <td class="px-6 py-4 relative">
                        <span class="hover-title">Worqor Lar Dor</span>
                        <img src="{{ asset('images/ex1.png') }}" alt="Hover Image" class="hover-image absolute left-0 bottom-full mb-2 object-cover rounded-lg shadow-lg z-50">
                    </td>
                    <td class="px-6 py-4">100</td>
                    <td class="px-6 py-4">Normal</td>
                    <td class="px-6 py-4">Passed</td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <img src="{{ asset('images/trial.png') }}" alt="Thumbnail" class="h-6 w-6">
                    </th>
                    <td class="px-6 py-4 relative">
                        <span class="hover-title">Everkeep</span>
                        <img src="{{ asset('images/ex2.png') }}" alt="Hover Image" class="hover-image absolute left-0 bottom-full mb-2 object-cover rounded-lg shadow-lg z-50">
                    </td>
                    <td class="px-6 py-4">100</td>
                    <td class="px-6 py-4">Normal</td>
                    <td class="px-6 py-4">Passed</td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <img src="{{ asset('images/trial.png') }}" alt="Thumbnail" class="h-6 w-6">
                    </th>
                    <td class="px-6 py-4 relative">
                        <span class="hover-title">The Interphos</span>
                        <img src="{{ asset('images/ex3.png') }}" alt="Hover Image" class="hover-image absolute left-0 bottom-full mb-2 object-cover rounded-lg shadow-lg z-50">
                    </td>
                    <td class="px-6 py-4">100</td>
                    <td class="px-6 py-4">Normal</td>
                    <td class="px-6 py-4">Passed</td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <img src="{{ asset('images/trial.png') }}" alt="Thumbnail" class="h-6 w-6">
                    </th>
                    <td class="px-6 py-4 relative">
                        <span class="hover-title">Worqor Lar Dor</span>
                        <img src="{{ asset('images/ex1.png') }}" alt="Hover Image" class="hover-image absolute left-0 bottom-full mb-2 object-cover rounded-lg shadow-lg z-50">
                    </td>
                    <td class="px-6 py-4">100</td>
                    <td class="px-6 py-4">Extreme</td>
                    <td class="px-6 py-4">Passed</td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 in-progress-row">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <img src="{{ asset('images/trial.png') }}" alt="Thumbnail" class="h-6 w-6">
                    </th>
                    <td class="px-6 py-4 relative">
                        <span class="hover-title">Everkeep</span>
                        <img src="{{ asset('images/ex2.png') }}" alt="Hover Image" class="hover-image absolute left-0 bottom-full mb-2 object-cover rounded-lg shadow-lg z-50">
                    </td>
                    <td class="px-6 py-4">100</td>
                    <td class="px-6 py-4">Extreme</td>
                    <td class="px-6 py-4">In Progress</td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 in-progress-row">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <img src="{{ asset('images/trial.png') }}" alt="Thumbnail" class="h-6 w-6">
                    </th>
                    <td class="px-6 py-4 relative">
                        <span class="hover-title">The Interphos</span>
                        <img src="{{ asset('images/ex3.png') }}" alt="Hover Image" class="hover-image absolute left-0 bottom-full mb-2 object-cover rounded-lg shadow-lg z-50">
                    </td>
                    <td class="px-6 py-4">100</td>
                    <td class="px-6 py-4">Extreme</td>
                    <td class="px-6 py-4">In Progress</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
    function toggleInProgress() {
        const rows = document.querySelectorAll('.in-progress-row');
        rows.forEach(row => {
            row.classList.toggle('hidden');
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        const rows = document.querySelectorAll('tbody tr');

        rows.forEach((row, index) => {
            const hoverTitle = row.querySelector('.hover-title');
            const hoverImage = row.querySelector('.hover-image');

            if (index < 3) {
                hoverImage.classList.add('below');
            } else {
                hoverImage.classList.add('above');
            }

            hoverTitle.addEventListener('mouseover', function() {
                hoverImage.classList.add('show');
            });

            hoverTitle.addEventListener('mouseleave', function() {
                hoverImage.classList.remove('show');
            });
        });
    });

</script>