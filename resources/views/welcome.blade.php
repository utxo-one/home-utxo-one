<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-black">
        <div class="container mx-auto h-screen justify-center items-center">
            <div class="align-middle">
                <h1 class="text-5xl md:text-7xl lg:text-9xl text-orange-500 font-semibold text-center font-mono pt-5">utxo.one</h1>
                <p class="text-sm md:text-lg lg:text-xl text-gray-100 text-center font-mono"">Bitcoin / Privacy / Sovereignty </p>

                <div class="flex flex-col lg:flex-row lg:space-x-10 mt-10 items-center justify-center">

                    <div class="mb-10">
                        <div class="max-w-sm rounded-sm border border-gray-600 bg-gray-800 shadow-lg">
                          <div class="text-right p-4">
                            <span class="text-xs text-gray-500 tracking-widest uppercase">source code</span>
                          </div>
                      
                          <div class="flex items-center relative mb-10">
                            <div class="border-t border-gray-200 z-20 w-full"></div>
                      
                            <div class="rounded-full bg-orange-500 z-30 p-2 inline-block absolute mx-8">
                              <img src="/svg/gitlab.svg" alt="GitLab" class="w-9 h-9">
                            </div>
                          </div>
                          <div class="px-8 pb-4">
                            <h4 class="text-gray-500 text-sm font-light">Source Code Hosting</h4>
                            <h2 class="text-orange-500 text-xl font-bold font-mono">Private Gitlab</h2>
                            <p class="text-gray-100 text-xs">
                              Enjoy censorship resistant source code hosting that isn't scraped by AI or censored by government. Available to anyone and made for bitcoiners.
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="mb-10">
                        <div class="max-w-sm rounded-sm border border-gray-600 bg-gray-800 shadow-lg">
                          <div class="text-right p-4">
                            <span class="text-xs text-gray-500 tracking-widest uppercase">source code</span>
                          </div>
                      
                          <div class="flex items-center relative mb-10">
                            <div class="border-t border-gray-200 z-20 w-full"></div>
                      
                            <div class="rounded-full bg-orange-500 z-30 p-2 inline-block absolute mx-8">
                              <img src="/svg/anon.svg" alt="GitLab" class="w-9 h-9">
                            </div>
                          </div>
                          <div class="px-8 pb-4">
                            <h4 class="text-gray-500 text-sm font-light">Free Online Report</h4>
                            <h2 class="text-orange-500 text-xl font-bold font-mono">Privacy Checkup</h2>
                            <p class="text-gray-100 text-xs">
                              Fill out our short questionaire to find out how well you protect your privacy. Get instant recommendations on how you can improve your privacy.
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="mb-10">
                        <div class="max-w-sm rounded-sm border border-gray-600 bg-gray-800 shadow-lg">
                          <div class="text-right p-4">
                            <span class="text-xs text-gray-500 tracking-widest uppercase">source code</span>
                          </div>
                      
                          <div class="flex items-center relative mb-10">
                            <div class="border-t border-gray-200 z-20 w-full"></div>
                      
                            <div class="rounded-full bg-orange-500 z-30 p-2 inline-block absolute mx-8">
                              <img src="/svg/bolt.svg" alt="GitLab" class="w-9 h-9">
                            </div>
                          </div>
                          <div class="px-8 pb-4">
                            <h4 class="text-gray-500 text-sm font-light">The Lightning Network</h4>
                            <h2 class="text-orange-500 text-xl font-bold font-mono">Inbound Liquidity</h2>
                            <p class="text-gray-100 text-xs">
                              Need to accept lightning payments at your business? Maybe you need to increase liquidity to your routing node? Buy an inbound channel from us instantly.
                            </p>
                          </div>
                        </div>
                      </div>


                </div>

                <div class="flex flex-col lg:flex-row lg:space-x-10 items-center justify-center">

                    <div class="mb-10">
                        <div class="max-w-sm rounded-sm border border-gray-600 bg-gray-800 shadow-lg">
                          <div class="text-right p-4">
                            <span class="text-xs text-gray-500 tracking-widest uppercase">source code</span>
                          </div>
                      
                          <div class="flex items-center relative mb-10">
                            <div class="border-t border-gray-200 z-20 w-full"></div>
                      
                            <div class="rounded-full bg-orange-500 z-30 p-2 inline-block absolute mx-8">
                              <img src="/svg/server.svg" alt="GitLab" class="w-9 h-9">
                            </div>
                          </div>
                          <div class="px-8 pb-4">
                            <h4 class="text-gray-500 text-sm font-light">Own your own data</h4>
                            <h2 class="text-orange-500 text-xl font-bold font-mono">Sovereign Data</h2>
                            <p class="text-gray-100 text-xs">
                              Stop using Google Drive and Dropbox to store your data. Validate your own own Bitcoin transactions. We'll help you setup your own private data lab.
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="mb-10">
                        <div class="max-w-sm rounded-sm border border-gray-600 bg-gray-800 shadow-lg">
                          <div class="text-right p-4">
                            <span class="text-xs text-gray-500 tracking-widest uppercase">source code</span>
                          </div>
                      
                          <div class="flex items-center relative mb-10">
                            <div class="border-t border-gray-200 z-20 w-full"></div>
                      
                            <div class="rounded-full bg-orange-500 z-30 p-2 inline-block absolute mx-8">
                              <img src="/svg/bitcoin.svg" alt="GitLab" class="w-9 h-9">
                            </div>
                          </div>
                          <div class="px-8 pb-4">
                            <h4 class="text-gray-500 text-sm font-light">Free Online Report</h4>
                            <h2 class="text-orange-500 text-xl font-bold font-mono">BTCPayServer Setup</h2>
                            <p class="text-gray-100 text-xs">
                              Want to accept bitcoin payments at your business but can't figure out how to setup BTCPayServer? We'll set everything up and train you on how to use it.
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="mb-10">
                        <div class="max-w-sm rounded-sm border border-gray-600 bg-gray-800 shadow-lg">
                          <div class="text-right p-4">
                            <span class="text-xs text-gray-500 tracking-widest uppercase">source code</span>
                          </div>
                      
                          <div class="flex items-center relative mb-10">
                            <div class="border-t border-gray-200 z-20 w-full"></div>
                      
                            <div class="rounded-full bg-orange-500 z-30 p-2 inline-block absolute mx-8">
                              <img src="/svg/key.svg" alt="GitLab" class="w-9 h-9">
                            </div>
                          </div>
                          <div class="px-8 pb-4">
                            <h4 class="text-gray-500 text-sm font-light">Neutral 3rd party</h4>
                            <h2 class="text-orange-500 text-xl font-bold font-mono">Multisig Custodian</h2>
                            <p class="text-gray-100 text-xs">
                              If you want to setup multisig, or if two parties would like a neutral, independent third party to hold additional keys in a multisig wallet, we can help.
                            </p>
                          </div>
                        </div>
                      </div>
                </div>

                <p class="text-gray-400 text-center font-mono text-md pb-5">
                    utxo.one does not use trackers or collect any personal information.
                </p>
                <p class="text-gray-400 text-center text-sm pb-5 text-orange-500">
                    ⚡ Donate
                </p>
            </div>
        </div>
    </body>
</html>