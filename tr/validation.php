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

    'accepted' => ':attribute kabul edilmelidir.',
    'accepted_if' => ':other :value olduğunda :attribute kabul edilmelidir.',
    'active_url' => ':attribute geçerli bir URL değil(URL\'nin başında https:// olmasına dikkat ediniz).',
    'after' => ':attribute :date tarihinden sonra olmalıdır.',
    'after_or_equal' => ':attribute :date tarihinden sonra veya aynı tarih olmalıdır.',
    'alpha' => ':attribute sadece harflerden oluşmalıdır.',
    'alpha_dash' => ':attribute sadece harfler, rakamlar ve kısa çizgilerden oluşmalıdır.',
    'alpha_num' => ':attribute sadece harfler ve rakamlar içermelidir.',
    'array' => ':attribute dizi olmalıdır.',
    'ascii' => ':attribute ASCII karakterlerinden oluşmalıdır.',
    'before' => ':attribute :date tarihinden önce olmalıdır.',
    'before_or_equal' => ':attribute :date tarihinden önce veya aynı tarih olmalıdır.',
    'between' => [
        'array' => ':attribute :min - :max arasında olmalıdır.',
        'file' => ':attribute :min - :max kilobayt arasında olmalıdır.',
        'numeric' => ':attribute :min - :max arasında olmalıdır.',
        'string' => ':attribute :min - :max karakter arasında olmalıdır.',
    ],
    'boolean' => ':attribute alanı doğru veya yanlış olmalıdır.',
    'confirmed' => ':attribute tekrarı eşleşmiyor.',
    'current_password' => 'Mevcut parola doğru değil.',
    'date' => ':attribute geçerli bir tarih değil.',
    'date_equals' => ':attribute :date tarihine eşit olmalıdır.',
    'date_format' => ':attribute :format biçiminde olmalıdır.',
    'decimal' => ':attribute :places basamaklı olmalıdır.',
    'declined' => ':attribute reddedilmelidir.',
    'declined_if' => ':other :value olduğunda :attribute reddedilmelidir.',
    'different' => ':attribute ve :other farklı olmalıdır.',
    'digits' => ':attribute :digits basamaklı olmalıdır.',
    'digits_between' => ':attribute :min - :max basamaklı olmalıdır.',
    'dimensions' => ':attribute geçersiz görsel boyutlarına sahip.',
    'distinct' => ':attribute alanı yinelenen bir değere sahip.',
    'doesnt_end_with' => ':attribute şunlardan biriyle bitmemelidir: :values',
    'doesnt_start_with' => ':attribute şunlardan biriyle başlamamalıdır: :values',
    'email' => ':attribute geçerli bir e-posta adresi olmalıdır.',
    'ends_with' => ':attribute şunlardan biriyle bitmelidir: :values',
    'enum' => ':attribute geçersiz bir değere sahip.',
    'exists' => 'Seçili :attribute geçersiz.',
    'file' => ':attribute bir dosya olmalıdır.',
    'filled' => ':attribute alanı dolu olmalıdır.',
    'gt' => [
        'array' => ':attribute en az :value öğeye sahip olmalıdır.',
        'file' => ':attribute en az :value kilobayt olmalıdır.',
        'numeric' => ':attribute en az :value olmalıdır.',
        'string' => ':attribute en az :value karakterden oluşmalıdır.',
    ],
    'gte' => [
        'array' => ':attribute en az :value öğeye sahip olmalıdır.',
        'file' => ':attribute en az :value kilobayt olmalıdır.',
        'numeric' => ':attribute en az :value olmalıdır.',
        'string' => ':attribute en az :value karakterden oluşmalıdır.',
    ],
    'image' => ':attribute bir resim olmalıdır.',
    'in' => 'Seçili :attribute geçersiz.',
    'in_array' => ':attribute alanı :other içinde mevcut değil.',
    'integer' => ':attribute bir tamsayı olmalıdır.',
    'ip' => ':attribute geçerli bir IP adresi olmalıdır.',
    'ipv4' => ':attribute geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ':attribute geçerli bir IPv6 adresi olmalıdır.',
    'json' => ':attribute geçerli bir JSON dizesi olmalıdır.',
    'lowercase' => ':attribute küçük harflerden oluşmalıdır.',
    'lt' => [
        'array' => ':attribute :value değerinden daha az öğeye sahip olmalıdır.',
        'file' => ':attribute en fazla :value kilobayt olmalıdır.',
        'numeric' => ':attribute :value değerinden daha küçük olmalıdır.',
        'string' => ':attribute :value karakterden daha kısa olmalıdır.',
    ],
    'lte' => [
        'array' => ':attribute en fazla :value öğeye sahip olmalıdır.',
        'file' => ':attribute en fazla :value kilobayt olmalıdır.',
        'numeric' => ':attribute en fazla :value olmalıdır.',
        'string' => ':attribute en fazla :value karakterden oluşmalıdır.',
    ],
    'mac_address' => ':attribute geçerli bir MAC adresi olmalıdır.',
    'max' => [
        'array' => ':attribute en fazla :max öğeye sahip olmalıdır.',
        'file' => ':attribute en fazla :max kilobayt olmalıdır.',
        'numeric' => ':attribute en fazla :max olmalıdır.',
        'string' => ':attribute en fazla :max karakterden oluşmalıdır.',
    ],
    'max_digits' => ':attribute en fazla :max basamaklı olmalıdır.',
    'mimes' => ':attribute şu dosya türlerinden biri olmalıdır: :values.',
    'mimetypes' => ':attribute şu dosya türlerinden biri olmalıdır: :values.',
    'min' => [
        'array' => ':attribute en az :min öğeye sahip olmalıdır.',
        'file' => ':attribute en az :min kilobayt olmalıdır.',
        'numeric' => ':attribute en az :min olmalıdır.',
        'string' => ':attribute en az :min karakterden oluşmalıdır.',
    ],
    'min_digits' => ':attribute en az :min basamaklı olmalıdır.',
    'multiple_of' => ':attribute :value değerinin katı olmalıdır.',
    'not_in' => 'Seçili :attribute geçersiz.',
    'not_regex' => ':attribute biçimi geçersiz.',
    'numeric' => ':attribute bir sayı olmalıdır.',
    'password' => [
        'letters' => ':attribute en az bir harf içermelidir.',
        'mixed' => ':attribute en az bir harf ve bir sayı içermelidir.',
        'numbers' => ':attribute en az bir rakam içermelidir.',
        'symbols' => ':attribute en az bir sembol içermelidir.',
        'uncompromised' => 'Verilen :attribute bir veri sızıntısında görülmüştür. :attribute güvenli bir parola olmalıdır.',
    ],
    'present' => ':attribute alanı mevcut olmalıdır.',
    'prohibited' => ':attribute alanı yasaktır.',
    'prohibited_if' => ':attribute alanı :other :value olduğunda yasaktır.',
    'prohibited_unless' => ':attribute alanı :other :values içinde değilse yasaktır.',
    'prohibits' => ':attribute alanı :other alanıyla birlikte kullanılamaz.',
    'regex' => ':attribute biçimi geçersiz.',
    'required' => ':attribute alanı gereklidir.',
    'required_array_keys' => ':attribute alanı :values değerlerinden birini içermelidir.',
    'required_if' => ':attribute alanı :other :value olduğunda gereklidir.',
    'required_if_accepted' => ':attribute alanı :other kabul edildiğinde gereklidir.',
    'required_unless' => ':attribute alanı :other :values içinde değilse gereklidir.',
    'required_with' => ':attribute alanı :values mevcut olduğunda gereklidir.',
    'required_with_all' => ':attribute alanı :values mevcut olduğunda gereklidir.',
    'required_without' => ':attribute alanı :values mevcut olmadığında gereklidir.',
    'required_without_all' => ':attribute alanı :values mevcut olmadığında gereklidir.',
    'same' => ':attribute ve :other eşleşmelidir.',
    'size' => [
        'array' => ':attribute :size öğeye sahip olmalıdır.',
        'file' => ':attribute :size kilobayt olmalıdır.',
        'numeric' => ':attribute :size olmalıdır.',
        'string' => ':attribute :size karakterden oluşmalıdır.',
    ],
    'starts_with' => ':attribute şunlardan biriyle başlamalıdır: :values.',
    'string' => ':attribute bir dize olmalıdır.',
    'timezone' => ':attribute geçerli bir saat dilimi olmalıdır.',
    'unique' => ':attribute daha önceden kayıt edilmiş.',
    'uploaded' => ':attribute yüklenemedi.',
    'uppercase' => ':attribute büyük harflerden oluşmalıdır.',
    'url' => ':attribute biçimi geçersiz.',
    'ulid' => ':attribute geçerli bir ULID olmalıdır.',
    'uuid' => ':attribute geçerli bir UUID olmalıdır.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
