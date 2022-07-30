@component('mail::message')

{{-- <p>Hello {{ $data['account-name'] }}</p>
<p>Your account has been created successfully.</p>
<p>Please use the following password when you login next time.</p>
<p><b>{{ $data['account-password'] }}</b></p>
<p>Thank you for your coperation</p>
<p>Regards, </p>
 --}}

<p>こんにちは {{ $data['account-name'] }},</p>
<p>あなたのアカウントは正常に作成されました。</p>
<p>次回ログイン時には以下のパスワードをご利用ください。</p>
<p><b>{{ $data['account-password'] }}</b></p>
<p>ご協力ありがとうございました。</p>
<p>宜しくお願いします, </p>
<p>{{ config('app.name') }}</p>

@endcomponent