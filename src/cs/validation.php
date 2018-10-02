<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Musíte souhlasit s :attribute.',
    'active_url'           => ':attribute není platná URL.',
    'after'                => ':attribute musí být datum po :date.',
    'after_or_equal'       => ':attribute musí být datum :date nebo pozdější.',
    'alpha'                => ':attribute může obsahovat pouze písmena.',
    'alpha_dash'           => ':attribute může obsahovat pouze písmena, číslice a podtržítka.',
    'alpha_num'            => ':attribute může obsahovat pouze písmena a číslice.',
    'array'                => ':attribute musí být pole.',
    'before'               => ':attribute musí být datum před :date.',
    'before_or_equal'      => ':attribute musí být datum :date nebo dřívější.',
    'between'              => [
        'numeric' => ':attribute musí být mezi :min a :max.',
        'file'    => ':attribute musí mít mezi :min a :max kilobajty.',
        'string'  => ':attribute must mít mezi :min a :max znaky.',
        'array'   => ':attribute must mít mezi :min a :max prvky.',
    ],
    'boolean'              => ':attribute musí být ano/ne.',
    'confirmed'            => ':attribute potvrzení se neshoduje.',
    'date'                 => ':attribute není platné datum.',
    'date_format'          => ':attribute neodpovídá formátu :format.',
    'different'            => ':attribute a :other musí být rozdílné.',
    'digits'               => ':attribute musí mít :digits číslic.',
    'digits_between'       => ':attribute musí mít :min až :max číslic.',
    'dimensions'           => ':attribute má neplatné rozměry obrázku.',
    'distinct'             => ':attribute má duplicitní hodnoty.',
    'email'                => ':attribute musí být platná e-mailová adresa.',
    'exists'               => 'vybraný :attribute je neplatný.',
    'file'                 => ':attribute musí být soubor.',
    'filled'               => 'pole :attribute musí mít hodnotu.',
    'gt'                   => [
        'numeric' => ':attribute musí být více než :value.',
        'file'    => ':attribute musí být větší než :value kilobajtů.',
        'string'  => ':attribute must mít více než :value znaků.',
        'array'   => ':attribute must mít více než :value prvků.',
    ],
    'gte'                  => [
        'numeric' => ':attribute musí být nejméně :value.',
        'file'    => ':attribute must musí mít nejméně :value kilobajtů.',
        'string'  => ':attribute must mít nejméně :value znaků.',
        'array'   => ':attribute must mít nejméně :value prvků.',
    ],
    'image'                => ':attribute musí být obrázek.',
    'in'                   => 'Vybraný :attribute je neplatný.',
    'in_array'             => 'Pole :attribute neexistuje v :other.',
    'integer'              => ':attribute musí být celé číslo.',
    'ip'                   => ':attribute musí být platná IP adresa.',
    'ipv4'                 => ':attribute musí být platná IPv4 adresa.',
    'ipv6'                 => ':attribute musí být platná IPv6 adresa.',
    'json'                 => ':attribute must být platný JSON řetězec.',
    'lt'                   => [
        'numeric' => ':attribute musí být méně než :value.',
        'file'    => ':attribute musí být menší než :value kilobajtů.',
        'string'  => ':attribute musí mít méně než :value znaků.',
        'array'   => ':attribute must mít méně než :value prvků.',
    ],
    'lte'                  => [
        'numeric' => ':attribute musí být nejvýše :value.',
        'file'    => ':attribute musí mít nejvýše :value kilobajtů.',
        'string'  => ':attribute musí mít nejvýše :value znaků.',
        'array'   => ':attribute musí nemůže mít více než :value prvků.',
    ],
    'max'                  => [
        'numeric' => ':attribute nemůže být větší než :max.',
        'file'    => ':attribute nemůže mít více než :max kilobajtů.',
        'string'  => ':attribute nemůže mít více než :max znaků.',
        'array'   => ':attribute nemůže mít více než :max prvků.',
    ],
    'mimes'                => ':attribute musí být soubor typu: :values.',
    'mimetypes'            => ':attribute musí být soubor typu: :values.',
    'min'                  => [
        'numeric' => ':attribute musí být nejméně :min.',
        'file'    => ':attribute musí mít nejméně :min kilobajtů.',
        'string'  => ':attribute musí mít nejméně :min znaků.',
        'array'   => ':attribute musí mít nejméně :min prvků.',
    ],
    'not_in'               => 'Vybraný :attribute je neplatný.',
    'not_regex'            => ':attribute má neplatný formát.',
    'numeric'              => ':attribute musí být číslo.',
    'present'              => 'Prvek :attribute musí být přítomen.',
    'recaptcha'            => 'Recaptcha je neplatná',
    'regex'                => ':attribute má neplatný formát.',
    'required'             => ':attribute je vyžadovaný.',
    'required_if'          => ':attribute je vyžadovaný pokud :other je :value.',
    'required_unless'      => ':attribute je vyžadovaný pokud není :other jeden z :values.',
    'required_with'        => ':attribute je vyžadovaný pokud je zadáno :values.',
    'required_with_all'    => ':attribute je vyžadovaný pokud je zadáno :values.',
    'required_without'     => ':attribute je vyžadovaný pokud není zadáno :values.',
    'required_without_all' => ':attribute je vyžadovaný pokud není zadáno nic z :values.',
    'same'                 => ':attribute a :other se musí shodovat.',
    'size'                 => [
        'numeric' => ':attribute musí být :size.',
        'file'    => ':attribute must mít :size kilobajtů.',
        'string'  => ':attribute must mít :size znaků.',
        'array'   => ':attribute must obsahovat :size prvků.',
    ],
    'string'               => ':attribute musí být textový řetězec.',
    'timezone'             => ':attribute musí být platná časová zóna.',
    'unique'               => ':attribute už bylo použito.',
    'uploaded'             => ':attribute nebylo možno nahrát.',
    'url'                  => ':attribute je neplatná URL.',

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

    'custom' => [
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

    'attributes' => [
        'displayname'           => 'zobrazované jméno',
        'email'                 => 'e-mail',
        'firstname'             => 'jméno',
        'lastname'              => 'příjmení',
        'name'                  => 'jméno a přijmení',
        'password'              => 'heslo',
        'passwordrepeat'        => 'potvrzení hesla',
        'profilepicture'        => 'profilový obrázek'
    ],

];
