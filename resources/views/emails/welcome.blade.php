@component('mail::message')
    # Bienvenue!

    Nous vous remercions d'avoir choisi Syndik pour gérer votre/vos résidences.
    Veuillez trouver ci-dessous votre login et mot de passe que nous vous conseillons de garder en sécurité.
    N'oubliez pas de nous contacter via l'adresse suivante contact@syndic.com pour toute suggéstion ou amélioration à
    ajouter dans syndik.ma Nous vous répondrons c'est sûr ;)

    login: {{ $value = Session::get('email') }};
    Mot de Passe: {{ $value = Session::get('mdp') }};


    Merci,
    {{ config('app.name') }}
@endcomponent
