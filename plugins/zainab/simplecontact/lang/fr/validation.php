<?php return [
        'custom' => [
            'name' => [
                'required' => 'Votre nom est requis!',
            ],
            'email' => [
                'required' => 'Votre adresse courriel est requise!',
                'email' => 'SVP, ajoutez une adresse courriel valide!'
            ],
            'subject' => [
                'required' => 'SVP, ajoutez un sujet à votre message!',
            ],
            'message' => [
                'required' => 'Aucun contenu dans votre message. Avez-vous une question?',
            ],
            'reCAPTCHA' => [
                'required' => 'Wow! Êtes-vous vraiment un être humain? Remplisez à nouveau le Captcha SVP.'
            ]
        ]
    ];