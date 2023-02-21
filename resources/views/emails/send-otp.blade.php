<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
    <div style="margin:50px auto;width:70%;padding:20px 0">
        <div style="border-bottom:1px solid #eee">
            <a href="{{ route('home') }}">

            </a>
        </div>
        <p style="font-size:1.1em">Verification OTP</p>
        <p>Please use the OTP below to sign in.</p>

        <h2
            style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">
            {{ $otp }}
        </h2>
        <p style="padding-top: 2rem;">If you didn’t request this, you can ignore this email.</p>
    </div>
</div>
