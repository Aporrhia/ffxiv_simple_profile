<style>
    tbody {
    margin: 0;
    padding: 0;
}

table {
    border-spacing: 0;
}

.overflow-x-auto {
    padding: 0;
    overflow: hidden;
}

</style>

<div class="container mx-auto p-4 relative">
    <h1 class="text-4xl font-bold mb-4 text-white text-center">Duties (Patch 7.0 - 7.1)</h1>
    <button onclick="toggleInProgress()" class="mb-4 px-4 py-2 bg-gray-500 text-xl text-white rounded-lg">Toggle In Progress</button>
    <div class="overflow-x-auto relative sm:rounded-lg">
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
            <tbody id="table-body">
                @foreach ($duties as $duty)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 {{ $duty->status === 'In Progress' ? 'in-progress-row' : '' }}">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <img src="{{ asset($duty->thumbnail) }}" alt="Thumbnail" class="h-6 w-6">
                        </th>
                        <td class="px-6 py-4 relative">
                            <span class="hover-title">{{ $duty->title }}</span>
                            <img src="{{ asset($duty->hover_image) }}" alt="Hover Image" class="hover-image absolute left-0 bottom-full mb-2 object-cover rounded-lg shadow-lg z-50">
                        </td>
                        <td class="px-6 py-4">{{ $duty->item_level }}</td>
                        <td class="px-6 py-4">{{ $duty->difficulty }}</td>
                        <td class="px-6 py-4">{{ $duty->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div id="pagination" class="flex justify-center mt-4">
            <button onclick="prevPage()" class="px-4 py-2 bg-gray-500 text-white rounded-lg mx-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </button>
            <span id="page-info" class="text-white text-xl"></span>
            <button onclick="nextPage()" class="px-4 py-2 bg-gray-500 text-white rounded-lg mx-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>
    </div>
</div>

<script>
    const rowsPerPage = 3;
    let currentPage = 1;

    let showInProgress = true;

function toggleInProgress() {
    showInProgress = !showInProgress;

    const rows = document.querySelectorAll('#table-body tr');

    rows.forEach((row) => {
        if (row.classList.contains('in-progress-row')) {
            row.dataset.visible = showInProgress ? 'true' : 'false';
        }
    });

    paginateTable();
}

function paginateTable() {
    const rows = document.querySelectorAll('#table-body tr');
    const totalRows = Array.from(rows).filter(row => row.dataset.visible !== 'false'); // Only count visible rows
    const totalPages = Math.ceil(totalRows.length / rowsPerPage);

    let rowIndex = 0; // Index of visible rows
    rows.forEach((row) => {
        if (row.dataset.visible === 'false') {
            row.style.display = 'none'; // Keep hidden rows hidden
        } else {
            // Paginate only visible rows
            row.style.display =
                rowIndex >= (currentPage - 1) * rowsPerPage && rowIndex < currentPage * rowsPerPage
                    ? ''
                    : 'none';
            rowIndex++;
        }
    });

    // Update pagination controls
    document.getElementById('page-info').textContent = `Page ${currentPage} of ${totalPages}`;
    document.querySelector('button[onclick="prevPage()"').disabled = currentPage === 1;
    document.querySelector('button[onclick="nextPage()"').disabled = currentPage === totalPages;
}

function prevPage() {
    if (currentPage > 1) {
        currentPage--;
        paginateTable();
    }
}

function nextPage() {
    const rows = document.querySelectorAll('#table-body tr');
    const totalRows = Array.from(rows).filter(row => row.dataset.visible !== 'false');
    const totalPages = Math.ceil(totalRows.length / rowsPerPage);

    if (currentPage < totalPages) {
        currentPage++;
        paginateTable();
    }
}

document.addEventListener('DOMContentLoaded', function () {
    const rows = document.querySelectorAll('#table-body tr');

    rows.forEach((row) => {
        row.dataset.visible = 'true';
    });

    paginateTable();

    rows.forEach((row) => {
        const hoverTitle = row.querySelector('.hover-title');
        const hoverImage = row.querySelector('.hover-image');

        hoverTitle.addEventListener('mouseover', function () {
            const rowRect = row.getBoundingClientRect();
            const imageRect = hoverImage.getBoundingClientRect();
            const containerRect = document.querySelector('.container').getBoundingClientRect();

            if (rowRect.bottom + imageRect.height > containerRect.bottom) {
                hoverImage.style.top = 'auto';
                hoverImage.style.bottom = '100%';
                hoverImage.style.marginBottom = '0.5rem';
            } else {
                hoverImage.style.top = '100%';
                hoverImage.style.bottom = 'auto';
                hoverImage.style.marginTop = '0.5rem';
            }

            hoverImage.classList.add('show');
        });

        hoverTitle.addEventListener('mouseleave', function () {
            hoverImage.classList.remove('show');
        });
    });
});
</script>
