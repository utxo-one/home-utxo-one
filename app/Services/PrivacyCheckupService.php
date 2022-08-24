<?php

namespace App\Services;

use App\Http\Requests\PrivacyCheckupRequest;

class PrivacyCheckupService 
{
    public function generateReport(PrivacyCheckupRequest $request): array
    {
        $score = 
            $request->input('email') + 
            $request->input('vpn') + 
            $request->input('data') + 
            $request->input('bitcoin') + 
            $request->input('accounts') + 
            $request->input('computer') + 
            $request->input('amazon') + 
            $request->input('social') + 
            $request->input('search');

        /**
         * Email Assessment
         */
        switch ($request->input('email')) {
            case 0:
                $emailRating = 'You are being spied on';
                $emailMessage = 'Every single email that you send and receive is being read by Google, Microsoft and others. 
                    Even after you delete your emails, they are saved on the cloud in backups. 
                    Big Tech is known to cooperate with the NSA and other organizations to violate your privacy. 
                    If you want to protect your privacy, you should not use gmail or other big tech providers.';
                break;

            case 1:
                $emailRating = 'A Solid Approach';
                $emailMessage = 'ProtonMail and Tutanota are solid choices for private email. They use a secure encryption 
                    protocol and are free to use. They are also easy to use and have a great user experience. However, they do comply
                    with law enforcement and have leaked client IP addresses in the past. For best results, use their service in combination with Tor or a VPN.';
                break;

            case 2:
                $emailRating = 'The Ideal Choice';
                $emailMessage = 'Using a private email server is the only way to ensure nobody has access to your email, provided you have the proper security in place. 
                If you require extremely high degrees of privacy (Think corrupt politicans, like Hilary Clinton) then you will want a private email server. You can always wipe it with a cloth ;)';
                break;

            case 3:
                $emailRating = 'The Ultimate Privacy';
                $emailMessage = 'If an email is generated, there is always a non-zero chance that it can be intercepted or read by the wrong party, no matter how well you protect your privacy. If you need to hide from the NSA, do not use email.';
                break;
                
        }

        /**
         * VPN Assessment
         */
        switch ($request->input('vpn')) {
            case 0:
                $vpnRating = 'Everything you do is tracked';
                $vpnMessage = 'The vast majority of ISPs log everything you do, and often comply with law enforcement and intelligence agencies. It is imperative that you use a VPN at a minimum to protect your privacy.';
                break;

            case 1:
                $vpnRating = 'Not ideal';
                $vpnMessage = 'Using a VPN only for private matters creates a unique pattern of behavior and can be prone to human error. It is a better idea to keep your VPN on at all times.';
                break;

            case 2:
                $vpnRating = 'Best Choice';
                $vpnMessage = 'You are well protected with a VPN, assuming you\'ve chosen the right provider. 
                    Remember that all you\'ve done is transfer trust from your ISP to your VPN provider, so ensure they are in seperate jurisdictions, and purchase it anonymously with bitcoin and a fake email address.';
                break;

            case 3:
                $vpnRating = 'Can\'t hide what doesn\'t exist';
                $vpnMessage = 'You are either hiding from the NSA or 95 years old. Either way, you aren\'t leaving any data footprints so no need to worry about any VPNs!';
                break;
                
        }

        return [
            'totalScore' => $score,

            'emailRating' => $emailRating,
            'emailMessage' => $emailMessage,

            'vpnRating' => $vpnRating,
            'vpnMessage' => $vpnMessage,
        ];
    }
}