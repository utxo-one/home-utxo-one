<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>utxo.one ~ bitcoin | privacy | sovereignty</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black">
    <div class="container mx-auto h-screen justify-center items-center">
        <div class="align-middle">
            <h1 class="text-5xl md:text-7xl lg:text-9xl text-orange-500 font-semibold text-center font-mono pt-5">
                utxo.one</h1>
            <p class="text-sm md:text-lg lg:text-xl text-gray-100 text-center font-mono mb-10">Bitcoin / Privacy /
                Sovereignty </p>

            <div class="bg-gray-900 px-4 lg:px-10">
                <h2 class="text-3xl lg:text-5xl font-mono text-gray-400 text-center pt-8">Privacy Checkup</h2>
                <p class="text-sm text-center text-gray-500 font-mono pb-8 pt-1"">We don't store your responses in any databases. <span class="text-orange-500 underline">Verify</span></p>

                @if ($errors->any())
                    <div class="bg-red-200 border border-red-500 text-red-500 p-5 mb-3">
                        Please answer the missed questions highlighted in red.
                    </div>
                @endif

                <form action="{{ route('privacy-checkup.index') }}" class="action" method="POST">
                    @csrf
                    @method('POST')

                    @if ($errors->has('email'))
                        <div class="border border-red-500">
                    @else
                        <div>
                    @endif
                    <p class="text-orange-200 text-2xl lg:text-4xl pb-4">
                        1. What e-mail provider do you use?
                    </p>
                    <div class="pb-2 pl-10">
                        <label>
                            <input type="radio" name="email" value="0" @if(old('email') == 0) checked @endif>
                            <span class="text-gray-100 text-md lg:text-lg">Gmail/Outlook/Other Big Tech</span>
                        </label>
                    </div>
                    <div class="pb-2 pl-10">
                        <label>
                            <input type="radio" name="email" value="1" @if(old('email') == 1) checked @endif>
                            <span class="text-gray-100 text-md lg:text-lg">Proton/Tutanota/Other Privacy</span>
                        </label>
                    </div>
                    <div class="pb-2 pl-10">
                        <label>
                            <input type="radio" name="email" value="2" @if(old('email') == 2) checked @endif>
                            <span class="text-gray-100 text-md lg:text-lg">Self Hosted</span>
                        </label>
                    </div>
                    <div class="pb-2 pl-10">
                        <label>
                            <input type="radio" name="email" value="3" @if(old('email') == 3) checked @endif>
                            <span class="text-gray-100 text-md lg:text-lg">I do not use email</span>
                        </label>
                    </div>
            </div>
            <div class="p-3">

            </div>
            @if ($errors->has('vpn'))
            <div class="border border-red-500">
        @else
            <div>
        @endif
                <p class="text-orange-200 text-2xl lg:text-4xl pb-4">
                    2. Describe how you use VPNs, if at all.
                </p>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="vpn" value="2" @if(old('vpn') == 2) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">I use a VPN at all times on all
                            devices.</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="vpn" value="1" @if(old('vpn') == 1) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">I use VPNs when I want extra
                            privacy</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="vpn" value="0" @if(old('vpn') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">I do not use a VPN</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="vpn" value="3" @if(old('vpn') == 3) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">I have no devices</span>
                    </label>
                </div>
            </div>
            <div class="p-3">

            </div>
            @if ($errors->has('data'))
            <div class="border border-red-500">
        @else
            <div>
        @endif
                <p class="text-orange-200 text-2xl lg:text-4xl pb-4">
                    3. How do you store your most private data/images/videos?
                </p>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="data" value="0" @if(old('data') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">cloud storage (google drive/onedrive
                            etc)</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="data" value="1" @if(old('data') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">local PC/hard drive/phone</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="data" value="2" @if(old('data') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">on paper, CD, other offline media in a
                            safe</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="data" value="3" @if(old('data') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">I store no data and remember only what I
                            need</span>
                    </label>
                </div>
            </div>
            <div class="p-3">

            </div>
            @if ($errors->has('bitcoin'))
            <div class="border border-red-500">
        @else
            <div>
        @endif
                <p class="text-orange-200 text-2xl lg:text-4xl pb-4">
                    4. Describe your bitcoin stack.
                </p>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="bitcoin" value="0" @if(old('bitcoin') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">My stack is KYC'd and I never use
                            mixers</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="bitcoin" value="1" @if(old('bitcoin') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">My stack is non-KYC</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="bitcoin" value="2" @if(old('bitcoin') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">My stack is mixed</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="bitcoin" value="3" @if(old('bitcoin') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">I do not use bitcoin</span>
                    </label>
                </div>
            </div>
            <div class="p-3">

            </div>
            @if ($errors->has('accounts'))
            <div class="border border-red-500">
        @else
            <div>
        @endif
                <p class="text-orange-200 text-2xl lg:text-4xl pb-4">
                    5. Describe your email, password and login situation.
                </p>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="accounts" value="0" @if(old('accounts') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">I use the same email and password for
                            everything</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="accounts" value="1" @if(old('accounts') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">I use the same email, but different
                            passwords</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="accounts" value="2" @if(old('accounts') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">I use different emails and passwords for
                            every account</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="accounts" value="3" @if(old('accounts') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">I do not have any online accounts</span>
                    </label>
                </div>
            </div>
            <div class="p-3">

            </div>
            @if ($errors->has('mobile'))
            <div class="border border-red-500">
        @else
            <div>
        @endif
                <p class="text-orange-200 text-2xl lg:text-4xl pb-4">
                    6. What mobile phone operating system do you use?
                </p>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="mobile" value="0" @if(old('mobile') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">Android</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="mobile" value="1" @if(old('mobile') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">iOS</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="mobile" value="2" @if(old('mobile') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">Privacy OS (Calyx, Graphene)</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="mobile" value="3" @if(old('mobile') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">I do not use a mobile phone.</span>
                    </label>
                </div>
            </div>
            <div class="p-3">

            </div>
            @if ($errors->has('computer'))
            <div class="border border-red-500">
        @else
            <div>
        @endif
                <p class="text-orange-200 text-2xl lg:text-4xl pb-4">
                    7. What computer operating system do you use?
                </p>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="computer" value="0" @if(old('computer') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">Windows</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="computer" value="1" @if(old('computer') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">MacOS</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="computer" value="2" @if(old('computer') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">Linux</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="computer" value="3" @if(old('computer') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">I do not use a computer.</span>
                    </label>
                </div>
            </div>
            <div class="p-3">

            </div>
            @if ($errors->has('amazon'))
            <div class="border border-red-500">
        @else
            <div>
        @endif
                <p class="text-orange-200 text-2xl lg:text-4xl pb-4">
                    8. Describe your Amazon shopping habits.
                </p>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="amazon" value="0" @if(old('amazon') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">Use real name, address, credit
                            card</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="amazon" value="1" @if(old('amazon') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">Use fake name, but real credit card and
                            address</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="amazon" value="2" @if(old('amazon') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">Use fake name, gift cards and pickup
                            locations</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="amazon" value="3" @if(old('amazon') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">I do not shop on Amazon</span>
                    </label>
                </div>
            </div>
            <div class="p-3">

            </div>
            @if ($errors->has('social'))
            <div class="border border-red-500">
        @else
            <div>
        @endif
                <p class="text-orange-200 text-2xl lg:text-4xl pb-4">
                    9. Describe your social media usage.
                </p>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="social" value="0" @if(old('social') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">Use my real name on multiple
                            platforms</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="social" value="1" @if(old('social') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">Use my real name but only friends can
                            see me</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="social" value="2" @if(old('social') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">Use fake name not connected to my real
                            identity</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="social" value="3" @if(old('social') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">I do not use social media</span>
                    </label>
                </div>
            </div>
            <div class="p-3">

            </div>
            @if ($errors->has('search'))
            <div class="border border-red-500">
        @else
            <div>
        @endif
                <p class="text-orange-200 text-2xl lg:text-4xl pb-4">
                    10. Describe your internet search habits
                </p>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="search" value="0" @if(old('search') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">Google for everything</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="search" value="1" @if(old('search') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">Google for most things, privacy searches
                            for sensitive searches</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="search" value="2" @if(old('search') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">I only use privacy searches</span>
                    </label>
                </div>
                <div class="pb-2 pl-10">
                    <label>
                        <input type="radio" name="search" value="3" @if(old('search') == 0) checked @endif>
                        <span class="text-gray-100 text-md lg:text-lg">I never perform any internet
                            searches</span>
                    </label>
                </div>
                <div class="text-center">
                    <input type="submit" value="Rate My Privacy"
                        class="bg-orange-500 text-white font-2xl px-4 py-2 mt-2 mb-2 rounded shadow-md ">
                </div>

            </div>
            </form>

        </div>

        <p class="text-gray-400 text-center font-mono text-md pb-5 pt-5">
            utxo.one does not use trackers or collect any personal information.
        </p>
        <p class="text-gray-400 text-center text-sm pb-5">
            ⚡ Donate
        </p>
    </div>
    </div>
</body>

</html>
