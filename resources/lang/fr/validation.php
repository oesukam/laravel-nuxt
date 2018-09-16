<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'             => 'Le champ :attribute doit être accepté.',
    'active_url'           => "Le champ :attribute n'est pas une URL valide.",
    'after'                => 'Le champ :attribute doit être une date postérieure au :date.',
    'alpha'                => 'Le champ :attribute doit seulement contenir des lettres.',
    'alpha_dash'           => 'Le champ :attribute doit seulement contenir des lettres, des chiffres et des tirets.',
    'alpha_num'            => 'Le champ :attribute doit seulement contenir des chiffres et des lettres.',
    'array'                => 'Le champ :attribute doit être un tableau.',
    'before'               => 'Le champ :attribute doit être une date antérieure au :date.',
    'between'              => [
        'numeric' => 'La valeur de :attribute doit être comprise entre :min et :max.',
        'file'    => 'La taille du fichier de :attribute doit être comprise entre :min et :max kilo-octets.',
        'string'  => 'Le texte :attribute doit contenir entre :min et :max caractères.',
        'array'   => 'Le tableau :attribute doit contenir entre :min et :max éléments.',
    ],
    'boolean'              => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed'            => 'Le champ de confirmation :attribute ne correspond pas.',
    'date'                 => "Le champ :attribute n'est pas une date valide.",
    'date_format'          => 'Le champ :attribute ne correspond pas au format :format.',
    'different'            => 'Les champs :attribute et :other doivent être différents.',
    'digits'               => 'Le champ :attribute doit contenir :digits chiffres.',
    'digits_between'       => 'Le champ :attribute doit contenir entre :min et :max chiffres.',
    'dimensions'           => "La taille de l'image :attribute n'est pas conforme.",
    'distinct'             => 'Le champ :attribute a une valeur dupliquée.',
    'email'                => 'Le champ :attribute doit être une adresse e-mail valide.',
    'exists'               => 'Le champ :attribute sélectionné est invalide.',
    'not_exists'           => ':attribute n\'existe pas.',
    'file'                 => 'Le champ :attribute doit être un fichier.',
    'filled'               => 'Le champ :attribute est obligatoire.',
    'image'                => 'Le champ :attribute doit être une image.',
    'in'                   => 'Le champ :attribute est invalide.',
    'in_array'             => 'Le champ :attribute n\'existe pas dans :other.',
    'integer'              => 'Le champ :attribute doit être un entier.',
    'ip'                   => 'Le champ :attribute doit être une adresse IP valide.',
    'json'                 => 'Le champ :attribute doit être un document JSON valide.',
    'max'                  => [
        'numeric' => 'La valeur de :attribute ne peut être supérieure à :max.',
        'file'    => 'La taille du fichier de :attribute ne peut pas dépasser :max kilo-octets.',
        'string'  => 'Le texte de :attribute ne peut contenir plus de :max caractères.',
        'array'   => 'Le tableau :attribute ne peut contenir plus de :max éléments.',
    ],
    'mimes'                => 'Le champ :attribute doit être un fichier de type : :values.',
    'mimetypes'            => 'Le champ :attribute doit être un fichier de type : :values.',
    'min'                  => [
        'numeric' => 'La valeur de :attribute doit être supérieure à :min.',
        'file'    => 'La taille du fichier de :attribute doit être supérieure à :min kilo-octets.',
        'string'  => 'Le texte :attribute doit contenir au moins :min caractères.',
        'array'   => 'Le tableau :attribute doit contenir au moins :min éléments.',
    ],
    'not_in'               => "Le champ :attribute sélectionné n'est pas valide.",
    'numeric'              => 'Le champ :attribute doit contenir un nombre.',
    'present'              => 'Le champ :attribute doit être présent.',
    'regex'                => 'Le format du champ :attribute est invalide.',
    'required'             => 'Le champ :attribute est obligatoire.',
    'required_if'          => 'Le champ :attribute est obligatoire quand la valeur de :other est :value.',
    'required_unless'      => 'Le champ :attribute est obligatoire sauf si :other est :values.',
    'required_with'        => 'Le champ :attribute est obligatoire quand :values est présent.',
    'required_with_all'    => 'Le champ :attribute est obligatoire quand :values est présent.',
    'required_without'     => "Le champ :attribute est obligatoire quand :values n'est pas présent.",
    'required_without_all' => "Le champ :attribute est requis quand aucun de :values n'est présent.",
    'same'                 => 'Les champs :attribute et :other doivent être identiques.',
    'size'                 => [
        'numeric' => 'La valeur de :attribute doit être :size.',
        'file'    => 'La taille du fichier de :attribute doit être de :size kilo-octets.',
        'string'  => 'Le texte de :attribute doit contenir :size caractères.',
        'array'   => 'Le tableau :attribute doit contenir :size éléments.',
    ],
    'string'               => 'Le champ :attribute doit être une chaîne de caractères.',
    'timezone'             => 'Le champ :attribute doit être un fuseau horaire valide.',
    'unique'               => 'La valeur du champ :attribute est déjà utilisée.',
    'uploaded'             => "Le fichier du champ :attribute n'a pu être téléchargé.",
    'url'                  => "Le format de l'URL de :attribute n'est pas valide.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes'           => [
        'publication'  => 'Publication',
        'publications'  => 'Publications',
        'article'  => 'Article',
        'articles'  => 'Articles',
        'passport'  => 'Passeport',
        'passportNo' => 'No. du Passeport',
        'passportExperation' => 'Expiration du Passeport', 
        'passportFrontPage'     => 'Page d\'accueil du Passeport', 
        'passportPhoto'         => 'Photo Passeport', 
        'name'                  => 'Nom',
        'names'                 => 'Noms',
        'username'              => 'Pseudo',
        'firstName'             => 'Prénom',
        'middleName'            => 'Postnom',
        'lastName'              => 'Nom',
        'familyName'            => 'Nom de famille',
        'givenName'             => 'Prénom',
        'chineseName'       => 'Non Chinois',
        'birthDate'         => 'Date de Naissance',
        'birthPlace'        => 'Lieu de Naissance',
        'birthCountry'      => 'Pays de Naissance',
        'maritalStatus'     => 'Etat Civil',
        'fatherFamilyName'  => 'Nom de famille du Père',
        'fatherGivenName'   => 'Prénom du Père',
        'fatherAge'         => 'Age du Père',
        'fatherOccupation'  => 'Occupation du Père',
        'motherFamilyName'  => 'Nom de famille de la Mère',
        'motherGivenName'   => 'Prénom de la Mère',
        'motherAge'         => 'Age de la Mère',
        'spouseFamilyName'  => 'Nom de famille de l\'Epoux(se)',
        'spouseGivenName'   => 'Prénom de l\'Epoux(se)',
        'spouseAge'         => 'Age de l\'Epoux(se)',
        'motherOccupation'  => 'Occupation de la Mère',    
        'email'                 => 'Email',
        'password'              => 'Mot de passe',
        'oldPpassword'          => 'Ancien mot de passe',
        'newPassword'           => 'Nouveau mot de passe',
        'passwordConfirmation'  => 'Confirmation du mot de passe',
        'confirmationCode'      => 'Code de Confirmation',        
        'university'            => 'Université',
        'city'                  => 'Ville',
        'cityEn'                => 'Ville en Anglais',
        'cityCn'                => 'Ville en Chinois',
        'province'              => 'Province',
        'provinceEn'            => 'Province en Anglais',
        'provinceCn'            => 'Province en Chinois',
        'country'               => 'Pays',
        'originCountry'         => 'Pays d\'Origin',
        'mailingAddress'        => 'Adresse',
        'permanentHomeAddress'  => 'Adresse du domicile fixe',
        'phone'                 => 'Téléphone',
        'mobile'                => 'Portable',
        'age'                   => 'Age',
        'sex'                   => 'Sexe',
        'gender'                => 'Sexe',
        'male'                  => 'Masculin',
        'female'                => 'Féminin',
        'day'                   => 'Jour',
        'month'                 => 'Mois',
        'year'                  => 'Année',
        'hour'                  => 'Heure',
        'minute'                => 'Minute',
        'second'                => 'Seconde',
        'title'                 => 'Titre',
        'content'               => 'Contenu',
        'titleFR'               => 'Titre en Francais',
        'titleEN'               => 'Titre en Anglais',
        'description'           => 'Description',
        'descriptionEN'         => 'Description en Anglais',
        'descriptionFR'         => 'description en Francais',
        'shortDescription'      => 'Brève Description',
        'excerpt'               => 'Extrait',
        'date'                  => 'Date',
        'time'                  => 'Heure',
        'available'             => 'Disponible',
        'size'                  => 'Taille',
        'captcha'               => 'Security check',
        'category'               => 'Catégorie',
        'languageName'         => 'Nom de la langue',
        'ar'    => 'Arabe',
        'en'    => 'Anglais',
        'cn'    => 'Chinois',
        'es'    => 'Espagnol',
        'fr'    => 'Français',
        'ru'    => 'Russe',
        'subject'             => 'Sujet',
        'message'             => 'Message',
        'fileName' => 'Nom du Fichier',
        'documentName' => 'Nom du document',
        'hskLevel' => 'Niveau HSK',
        'hskScore' => 'HSK Score',
        'englishLevel' => 'Niveau d\'Anglais',
        'studyField'    => 'Domaine d\'études',
        'studyProgram'  =>  'Programme d\'Etude',
        'studyDegree'   => 'Degré d\'Etude',
        'studyPlan' => 'Plan d\'Edtude',
        'cv'    => 'CV',
        'certificate' => 'Certificat ou Diplôme',
        'transcript' => 'Relevé de Notes',
        'transcript1' => 'Relevé de Notes',
        'transcript2' => 'Relevé de Notes',
        'recommendationLetter' => 'Lettre de recommendation',
        'recommendationLetter1' => 'Lettre de recommendation',
        'recommendationLetter2' => 'Lettre de recommendation',
        'acceptanceLetter' => 'Lettre d\'acceptance',
        'physicalExamination' => 'Examin Physique',
        'applicationNumber' => 'Numéro d\'Inscription',          
        
        
    ],

];
