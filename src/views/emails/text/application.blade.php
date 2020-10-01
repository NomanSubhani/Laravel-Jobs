Hello {{ Config::get('laravel-jobs::mail.to.name') }}

We've received a new job application through the website, anyone who is interested ,here are the details:

Name:   {{ $name }}

Email:  {{ $email }}

Covering letter:

{{ nl2br($letter) }}
