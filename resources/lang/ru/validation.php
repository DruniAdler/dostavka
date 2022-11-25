<?php 

return [
    'accepted' => ':attribute не подтвержден',
    'active_url' => ':attribute неверный URL.',
    'after' => ':attribute должна быть датой :date.',
    'after_or_equal' => ':attribute должен быть датой после или равной :date.',
    'alpha' => ':attribute может содержать только буквы.',
    'alpha_dash' => ':attribute может содержать только буквы, цифры, дефисы и символы подчеркивания.',
    'alpha_num' => ':attribute может содержать только буквы и цифры.',
    'array' => ':attribute атрибут должен быть массивом.',
    'before' => ':attribute должна быть дата до :date.',
    'before_or_equal' => ':attribute должен быть датой до или равной :date.',
    'between' => [
        'numeric' => ':attribute должно быть между :min и :max.',
        'file' => ':attribute должно быть между :min и :max килобайтами.',
        'string' => ':attribute должно быть от :min до :max символов.',
        'array' => ':attribute должно быть от :min до :max элементов.',
    ],
    'boolean' => ':attribute поле должно быть истинным или ложным.',
    'confirmed' => ':attribute подтверждение не совпадает.',
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'собственное сообщение',
        ],
    ],
    'date' => ':attribute неправильная дата.',
    'date_equals' => ':attribute должна быть дата, равная :date.',
    'date_format' => ':attribute не соответствует формату :format.',
    'different' => ':attribute и :other должны отличаться.',
    'digits' => ':attribute должно быть :digits цифрами.',
    'digits_between' => ':attribute  должно быть между :min и :max цифрами.',
    'dimensions' => ':attribute имеет недопустимые размеры изображения.',
    'distinct' => ':attribute поле имеет повторяющееся значение.',
    'email' => ':attribute не корректный e-mail адрес.',
    'exists' => 'Выбранное значение :attribute неправильное',
    'file' => ':attribute должно быть файлом.',
    'filled' => ':attribute поле должно иметь значение.',
    'gt' => [
        'numeric' => ':attribute должно быть больше чем :value.',
        'file' => ':attribute должно быть больше чем :value Кб.',
        'string' => ':attribute  должно быть больше, чем :value символов.',
        'array' => ':attribute должно быть больше чем :value предметов.',
    ],
    'gte' => [
        'numeric' => ':attribute должно быть больше или равно :value',
        'file' => ':attribute должно быть больше или равно :value Кб.',
        'string' => ':attribute должно быть больше или равно :value символов.',
        'array' => ':attribute должно быть  :value елемента или больше',
    ],
    'image' => 'The :attribute доложно быть изображением.',
    'in' => 'Выбранный :attribute неправильный',
    'in_array' => ':attribute поле не существует в :other.',
    'integer' => ':attribute должно быть целым числом.',
    'ip' => ':attribute должен быть действующий IP-адрес.',
    'ipv4' => ':attribute  должен быть действительным адресом IPv4.',
    'ipv6' => ':attribute должен быть действительным IPv6-адресом.',
    'json' => ':attribute должна быть допустимой строкой JSON.',
    'lt' => [
        'numeric' => ':attribute должно быть меньше :value.',
        'file' => ':attribute должно быть меньше чем  :value Кб.',
        'string' => ':attribute должно быть меньше :value символов.',
        'array' => ':attribute должно быть меньше чем :value предметов.',
    ],
    'lte' => [
        'numeric' => ':attribute должно быть меньше или равно :value.',
        'file' => ':attribute должно быть меньше или равно :value Кб.',
        'string' => ':attribute должно быть меньше или равно :value символов',
        'array' => ':attribute не должно быть больше :value элементов.',
    ],
    'max' => [
        'numeric' => ':attribute не может быть больше :max.',
        'file' => ':attribute не может быть больше :max Кб.',
        'string' => ':attribute не может быть больше :max символов.',
        'array' => ':attribute  не может быть больше :max элементов.',
    ],
    'mimes' => ':attribute должен быть файлом типа: :values.',
    'mimetypes' => ':attribute должен быть файлом типа: :values.',
    'min' => [
        'numeric' => ':attribute должно быть не менее :min.',
        'file' => ':attribute должно быть не менее :min Кб.',
        'string' => ':attribute должно быть не менее :min символов.',
        'array' => ':attribute  должно быть минимум: мин предметов.',
    ],
    'not_in' => 'Выбранный :attribute неверный.',
    'not_regex' => ':attribute неверный формат.',
    'numeric' => ':attribute должно быть числом.',
    'present' => ':attribute поле должно присутствовать.',
    'regex' => ':attribute неправильный формат.',
    'required' => ':attribute поле, обязательное для заполнения.',
    'required_if' => ':attribute поле является обязательным, когда :other равно :value.',
    'required_unless' => ':attribute поле является обязательным, если :other не входит в :values.',
    'required_with' => ':attribute поле является обязательным, если присутствует :values.',
    'required_with_all' => ':attribute поле является обязательным, когда присутствуюет :values.',
    'required_without' => ':attribute поле является обязательным когда отсутствует :values.',
    'required_without_all' => ':attribute поле является обязательным, если нет ни одного из :values.',
    'same' => ':attribute и :other должно совпадать.',
    'size' => [
        'numeric' => ':attribute должно быть :size.',
        'file' => ':attribute должно быть :size Кб.',
        'string' => ':attribute должно быть :size символов.',
        'array' => ':attribute должен содержать :size элемент(а/ов).',
    ],
    'starts_with' => ':attribute должен начинаться с одного из следующих: :values',
    'string' => ':attribute  должен быть строкой.',
    'timezone' => ':attribute должна быть действующая зона.',
    'unique' => ':attribute уже занят.',
    'uploaded' => ':attribute не удалось загрузить.',
    'url' => ':attribute формат невалидный.',
    'uuid' => ':attribute должен быть валидный UUID.',
];