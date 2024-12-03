<div class="overflow-hidden w-full max-w-6xl">
    <h1 class="text-4xl font-bold mb-4 text-white text-center">Job List</h1>
    <div class="max-w-lg mx-auto mt-8 p-6 bg-gray-800 bg-opacity-50 text-gray-200 rounded-lg shadow-lg">
        <div class="mb-6">
            <select id="job-selector" class="w-full p-3 bg-gray-700 text-gray-200 border border-gray-600 rounded-lg focus:ring focus:ring-blue-500">
                <option value="" disabled selected>Select a Job</option>
                <option value="Paladin">Paladin</option>
                <option value="Warrior">Warrior</option>
                <option value="Dark Knight">Dark Knight</option>
                <option value="Gunbreaker">Gunbreaker</option>
                <option value="White Mage">White Mage</option>
                <option value="Scholar">Scholar</option>
                <option value="Astrologian">Astrologian</option>
                <option value="Sage">Sage</option>
                <option value="Black Mage">Black Mage</option>
                <option value="Pictomancer">Pictomancer</option>
                <option value="Summoner">Summoner</option>
                <option value="Red Mage">Red Mage</option>
                <option value="Dragoon">Dragoon</option>
                <option value="Ninja">Ninja</option>
                <option value="Viper">Viper</option>
                <option value="Samurai">Samurai</option>
                <option value="Reaper">Reaper</option>
                <option value="Monk">Monk</option>
                <option value="Bard">Bard</option>
                <option value="Machinist">Machinist</option>
                <option value="Dancer">Dancer</option>
            </select>
        </div>

        <div class="mt-6 p-6 bg-gray-700 rounded-lg flex flex-col items-center">
            <img id="job-portrait" src="{{ asset('images/jobs/no-portait.png') }}" alt="Job Portrait" class="object-cover rounded-lg shadow-lg mb-4">
            <p id="job-level" class="text-xl font-semibold mb-2"></p>
            <p id="job-role" class="text-xl font-semibold mb-2"></p>
            <p id="job-gearScore" class="text-xl font-semibold"></p>
        </div>
    </div>
</div>


<script>
    const jobs = {
        'Paladin': { level: 92, role: 'Tank', gearScore: 604, portrait: '{{ asset('images/jobs/paladin.png') }}' },
        'Warrior': { level: 1, role: 'Tank', gearScore: '--', portrait: '{{ asset('images/jobs/no-portait.png') }}' },
        'Dark Knight': { level: 30, role: 'Tank', gearScore: 26, portrait: '{{ asset('images/jobs/dark-knight.png') }}' },
        'Gunbreaker': { level: '--', role: 'Tank', gearScore: '--', portrait: '{{ asset('images/jobs/no-portait.png') }}' },
        'White Mage': { level: 90, role: 'Healer', gearScore: 595, portrait: '{{ asset('images/jobs/white-mage.png') }}' },
        'Scholar': { level: '--', role: 'Healer', gearScore: '--', portrait: '{{ asset('images/jobs/no-portait.png') }}' },
        'Astrologian': { level: 96, role: 'Healer', gearScore: 640, portrait: '{{ asset('images/jobs/astrologian.png') }}' },
        'Sage': { level: 90, role: 'Healer', gearScore: 583, portrait: '{{ asset('images/jobs/sage.png') }}' },
        'Black Mage': { level: 100, role: 'DPS', gearScore: 711, portrait: '{{ asset('images/jobs/black-mage.png') }}' },
        'Pictomancer': { level: 100, role: 'DPS', gearScore: 711, portrait: '{{ asset('images/jobs/pictomancer.png') }}' },
        'Summoner': { level: 90, role: 'DPS', gearScore: 600, portrait: '{{ asset('images/jobs/summoner.png') }}' },
        'Red Mage': { level: 94, role: 'DPS', gearScore: 605, portrait: '{{ asset('images/jobs/red-mage.png') }}' },
        'Dragoon': { level: 56, role: 'DPS', gearScore: 90, portrait: '{{ asset('images/jobs/dragoon.png') }}' },
        'Ninja': { level: 100, role: 'DPS', gearScore: 694, portrait: '{{ asset('images/jobs/ninja.png') }}' },
        'Viper': { level: 100, role: 'DPS', gearScore: 709, portrait: '{{ asset('images/jobs/viper.png') }}' },
        'Samurai': { level: 100, role: 'DPS', gearScore: 715, portrait: '{{ asset('images/jobs/samurai.png') }}' },
        'Reaper': { level: 100, role: 'DPS', gearScore: 668, portrait: '{{ asset('images/jobs/reaper.png') }}' },
        'Monk': { level: 100, role: 'DPS', gearScore: 714, portrait: '{{ asset('images/jobs/monk.png') }}' },
        'Bard': { level: 100, role: 'DPS', gearScore: 608, portrait: '{{ asset('images/jobs/bard.png') }}' },
        'Machinist': { level: 45, role: 'DPS', gearScore: 605, portrait: '{{ asset('images/jobs/machinist.png') }}' },
        'Dancer': { level: 100, role: 'DPS', gearScore: 610, portrait: '{{ asset('images/jobs/dancer.png') }}' },
    };

    document.getElementById('job-selector').addEventListener('change', (event) => {
        const selectedJob = jobs[event.target.value];
        document.getElementById('job-level').textContent = `Level: ${selectedJob.level}`;
        document.getElementById('job-role').textContent = `Role: ${selectedJob.role}`;
        document.getElementById('job-gearScore').textContent = `Gear Score: ${selectedJob.gearScore}`;
        document.getElementById('job-portrait').src = selectedJob.portrait;

        const portraitElement = document.getElementById('job-portrait');
        portraitElement.classList.add('opacity-0');
        setTimeout(() => {
            portraitElement.src = selectedJob.portrait;
            portraitElement.classList.remove('opacity-0');
            portraitElement.classList.add('opacity-100');
        }, 300);

    });

</script>
