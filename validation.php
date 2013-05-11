<?php

return array(

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

	"accepted"        => "O(a) :attribute precisa ser aceito.",
	"active_url"      => "O(a) :attribute não é uma URL válida.",
	"after"           => "O(a) :attribute precisa ser uma data posterioar a :date.",
	"alpha"           => "O(a) :attribute só pode conter letras.",
	"alpha_dash"      => "O(a) :attribute só pode conter letras, números e traços.",
	"alpha_num"       => "O(a) :attribute só pode conter letras e números.",
	"before"          => "O(a) :attribute precisa ser anterior a :date.",
	"between"         => array(
		"numeric" => "O(a) :attribute precisa estar entre :min - :max.",
		"file"    => "O(a) :attribute precisa ter entre :min - :max kilobytes.",
		"string"  => "O(a) :attribute precisar ter entre :min - :max characteres.",
	),
	"confirmed"       => "O(a) confirmação de :attribute não confere.",
	"date"            => "O(a) :attribute não é uma data válida.",
	"date_format"     => "O(a) :attribute não está no formato :format.",
	"different"       => "O(a) :attribute e :other precisam ser diferentes.",
	"digits"          => "O(a) :attribute precisa ter :digits dígitos.",
	"digits_between"  => "O(a) :attribute precisa ter entre :min e :max dígitos.",
	"email"           => "O(a) formato :attribute é inválido(a).",
	"exists"          => "O(a) :attribute selecionado(a) é inválido(a).",
	"image"           => "O(a) :attribute precisa ser uma imagem.",
	"in"              => "O(a) :attribute selecionado(a) é inválido(a).",
	"not_in"          => "O(a) :attribute selecionado(a) é inválido(a).",
	"integer"         => "O(a) :attribute precisa ser um inteiro.",
	"ip"              => "O(a) :attribute precisa ser um endereço IP.",
	"max"             => array(
		"numeric"     => "O(a) :attribute não pode ser maior que :max.",
		"file"        => "O(a) :attribute não ter mais que :max kilobytes.",
		"string"      => "O(a) :attribute não ter mais que :max characteres.",
	),
	"mimes"           => "O(a) :attribute precisa ser um arquivo do tipo: :values.",
	"min"             => array(
		"numeric"     => "O(a) :attribute precisa ter pelo menos :min.",
		"file"        => "O(a) :attribute precisa ter no mínimo :min kilobytes.",
		"string"      => "O(a) :attribute precisa ter no mínimo :min characteres.",
	),
	"not_in"           => "O(a) :attribute selecionado(a) é inválido(a).",
	"numeric"         => "O(a) :attribute precisa ser um número.",
	"regex"           => "O(a) formato :attribute é inválido(a).",
	"required"        => "O(a) campo :attribute é necessário.",
	"required_with"   => "O(a) campo :attribute é necessário quando :values está presente.",
	"same"            => ":attribute e :other precisam ser iguais.",
	"size"            => array(
		"numeric"    => "O(a) :attribute precisa ter tamanho :size.",
		"file"       => "O(a) :attribute precisa ter :size kilobytes.",
		"string"     => "O(a) :attribute precisa ter :size characters.",
	),
	"unique"          => "O(a) :attribute já foi utilizado.",
	"url"             => "O(a) formato :attribute é inválido(a).",

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

	'custom' => array(),

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

	'attributes' => array(
		'name' => 'nome',
		'birth_day' => 'dia do nascimento',
		'birth_month' => 'mês do nascimento',
		'birth_year' => 'ano do nascimento',
		'state' => 'estado',
		'city' => 'cidade',
		'password' => 'senha',
		'first_name' => 'primeiro nome',
		'middle_name' => 'nome do meio',
		'contact' => 'contato',
		'last_name' => 'último nome',
		'address_street' => 'rua (endereço)',
		'address_number' => 'número (endereço)',
		'address_additional_info' => 'complemento (endereço)',
		'address_state_id' => 'estado (endereço)',
		'address_city_id' => 'cidade',
		'address_zip_code_id' => 'CEP',
		'created_at' => '"criado em"',
		'updated_at' => '"atualizado em"',
		'admission_date' => '"data de admissão"',
	),

);
