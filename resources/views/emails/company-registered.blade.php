@component('mail::message')
# A new company was registered

Company Details:

Name: {{ $company->name }} <br>
Email: {{ $company->email }} <br>
Website: {{ $company->website }}<br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
