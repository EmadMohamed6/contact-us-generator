@component('mail::message')
    # Contact Request
    Name : {{ $name }}
    Phone : {{ $phone }}
    Email : {{ $email }}
    Message : {{ $message }}

    {{--    @component('mail::button', ['url' => $url])--}}
    {{--        View Order--}}
    {{--    @endcomponent--}}

    Thanks,
    {{ config('app.name') }}
@endcomponent
