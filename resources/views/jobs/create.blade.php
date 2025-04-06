<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input name="title" label="Job Title" placeholder="CEO" required />
        <x-forms.input name="salary" label="Salary" placeholder="$90,000 USD" required />
        <x-forms.input name="location" label="Location" placeholder="Remote" required />

        <x-forms.select label="Schedule" name="schedule" required>
            <option>Full Time</option>
            <option>Part Time</option>
            <option>Contract</option>
            <option>Temporary</option>
            <option>Internship</option>
            <option>Freelance</option>
            <option>Seasonal</option>
            <option>On Call</option>
        </x-forms.select>

        <x-forms.input name="url" label="URL" placeholder="https://acme.com/jobs/ceo-wanted" required />
        <x-forms.checkbox name="featured" label="Feature (Costs Extra)" />

        <x-forms.divider />

        <x-forms.input name="tags" label="Tags (comma separated)" placeholder="remote, laravel, blade" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>