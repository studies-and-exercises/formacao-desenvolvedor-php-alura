dd(guest_class($request));

 php artisan make:migration create_users_table --create=users
 
 
 Como verificar se a variavel foi declarada e diferente de NULA.
 isset() irá verificar se a variável está definida, ou seja
 
 if(isset($variavelnome);
 
 isset() irá verificar se a variável está definida, ou seja,

https://stackoverflow.com/questions/12375833/isset-vs-empty-vs-is-null/45389115

# Operadores PHP

!=

https://www.w3schools.com/php/php_operators.asp

// Verificar se a variavel que esta vindo do request é NULA e se || os dois são verdadeiros tipo_contratacao e pessoa PF e diferente de pessoa Juridica.
 
 if (is_null($request->tipo_contratacao) || ($request->tipo_contratacao != 'PF' && $request->tipo_contratacao != 'PJ')) 
Retorna verdadeiro se $ x não for igual a $ y

&&

$x && $y

Verdadeiro se $ x e $ y forem verdadeiros

!
	!$x
Verdadeiro se $ x não for verdadeiro

if (is_null($request->termo_de_uso) || !$request->termo_de_uso) {

 
 
 
 
 
