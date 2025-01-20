<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="Web Developer" />
        <x-forms.input label="Salary" name="salary" placeholder="$50,000 USD" />
        <x-forms.input label="Location" name="location" placeholder="Winston-Salem" />

        <x-forms.select label="Schedule" name="schedule">
            <option value="Full Time">Full Time</option>
            <option value="Part Time">Part Time</option>
            <option value="Contract">Contract</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://acme.com" />
        <x-forms.checkbox label="Featured (costs extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="HTML, CSS, JavaScript" />
        <x-forms.button>publish</x-forms.button>
    </x-forms.form>
</x-layout>
