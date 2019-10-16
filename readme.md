<p class="h1">Workshop: Flipboard</p>
<hr>
<p>Vamos desenvolver uma rede social que irá exibir artigos (posts) publicados por journals/Magazines.</p>
<br>

<p class="h3"><b>Requisitos Funcionais:</b></p>
<br>
<ul class="list-group">
	<li class="list-group-item"><span class="badge badge-success">Feito</span> O usuário poderá criar o seu cadastro</li>
	<li class="list-group-item"><span class="badge badge-success">Feito</span> O usuário poderá fazer login no sistema para poder navegar</li>
	<li class="list-group-item"><span class="badge badge-warning">Não Feito</span> Cada journal poderá publicar vários posts <span class="badge badge-primary">Exercício 5</span></li>
	<li class="list-group-item"><span class="badge badge-success">Feito</span> O usuário poderá visualizar a lista de jornals</li>
	<li class="list-group-item"><span class="badge badge-success">Feito</span> O usuário poderá visualizar os detalhes de um Journal específico</li>
	<li class="list-group-item"><span class="badge badge-success">Feito</span> O usuário poderá seguir os journals para receber os posts na sua timeline.</li>
	<li class="list-group-item"><span class="badge badge-success">Feito</span> O usuário poderá ver a lista de posts publicados por um journal específico</li>
	<li class="list-group-item"><span class="badge badge-warning">Não Feito</span> O usuário poderá ver a lista de posts publicados por data <span class="badge badge-primary">Exercício 1</span></li>
	<li class="list-group-item"><span class="badge badge-warning">Não Feito</span> O usuário poderá visualizar os detalhes de um Post específico  <span class="badge badge-primary">Exercício 2</span></li>
	<li class="list-group-item"><span class="badge badge-warning">Não Feito</span> O usuário poderá curtir os posts. <span class="badge badge-primary">Exercício 4</span></li>
	<li class="list-group-item"><span class="badge badge-success">Feito</span> O usuário poderá visualizar em sua timeline os posts não lidos dos journals que ele segue</li>
	<li class="list-group-item"><span class="badge badge-success">Feito</span> O usuário poderá visualizar em sua timeline posts sugeridos pelo sistema</li>
	<li class="list-group-item"><span class="badge badge-success">Feito</span> O usuário poderá visualizar em sua timeline os posts lidos</li>
	<li class="list-group-item"><span class="badge badge-warning">Não Feito</span> O usuário poderá visualizar a lista de usuários cadastrados <span class="badge badge-primary">Exercício 3</span></li>
	<li class="list-group-item"><span class="badge badge-success">Feito</span> O usuário poderá visualizar o perfil de outros usuários e ver quais interações foram realizadas pelo usuário, por exemplo, quais jornals o usuário segue, que posts ele visualizou e que posts ele curtiu</li>
	<li class="list-group-item">Desafio: Criar uma página com estatísticas:
		<ul class='list-group'>
			<li class="list-group-item"><span class="badge badge-warning">Não Feito</span> post com mais curtidas; <span class="badge badge-primary">Exercício 6</span></li>
			<li class="list-group-item"><span class="badge badge-warning">Não Feito</span> post com mais visualizações;</li>
			<li class="list-group-item"><span class="badge badge-warning">Não Feito</span> journal com mais seguidores;</li> 
			<li class="list-group-item"><span class="badge badge-warning">Não Feito</span> usuário que mais visualizaram posts;</li> 
			<li class="list-group-item"><span class="badge badge-warning">Não Feito</span> usuário que mais seguem journals;</li> 
			<li class="list-group-item"><span class="badge badge-warning">Não Feito</span> usuário com mais deram curtidas</li>
		</ul> 
</ul>
<br>

<p class="h3"><b>Lista de Tarefas:</b></p>
<br>
<ul class='group-list'>
	<li class="list-group-item">Fazer download do projeto base do GitHub</li>	
	<li class="list-group-item">Configurar o .env</li>
	<li class="list-group-item">Configurar o config/database.php</li>
	<li class="list-group-item">Habilitar o pacote de autenticação make:Auth</li>
	<li class="list-group-item">Habilitar o vue para melhorar o front dos cadastros</li>
	<li class="list-group-item">Criar o migration Journal</li>
	<li class="list-group-item">Criar o migration Posts</li>
	<li class="list-group-item">Criar o migration Follow</li>
	<li class="list-group-item">Criar o migration Likes</li>
	<li class="list-group-item">Criar o migration Visualized</li>
	<li class="list-group-item">Criar o factory Journal</li>
	<li class="list-group-item">Criar o seed Journal</li>
	<li class="list-group-item">Criar o factory Post</li>
	<li class="list-group-item">Criar o seed Post</li>
	<li class="list-group-item">Configurar o DatabaseSeeder.php</li>
	<li class="list-group-item">Executar o comando de criação de banco e inserção de registros no Banco de Dados</li>
	<li class="list-group-item">Criar o model Journal e configurar as relações</li>
	<li class="list-group-item">Criar o model Posts e configurar as relações</li>
	<li class="list-group-item">Criar o model Follow e configurar as relações</li>
	<li class="list-group-item">Criar o model user e configurar as relações</li>
	<li class="list-group-item">Criar as rotas</li>
	<li class="list-group-item">Criar o controller JournalController</li>
	<li class="list-group-item">Criar o controller PostController</li>
	<li class="list-group-item">Criar o controller UserController</li>
	<li class="list-group-item">Criar a view journal/list.blade.php</li>
	<li class="list-group-item">Criar a view journal/show.blade.php</li>
	<li class="list-group-item">Criar a view post/list.blade.php</li>
	<li class="list-group-item">Criar a view post/show.blade.php</li>
	<li class="list-group-item">Criar a view timeline/show.blade.php</li>
	<li class="list-group-item">Criar a view user/show.blade.php</li>
	<li class="list-group-item">Criar a view user/list.blade.php</li>
	<li class="list-group-item">Instalar o bootstrap</li>
	<li class="list-group-item">Configurar o layout "esqueleto" das páginas</li>
	<li class="list-group-item">Configurar a view para usar o layout "esqueleto"</li>
	<br>
</ul>
<br>

<p class="h3"><b>Outras Informações:</b></p>
<br>

<p class="h4">Comandos Banco de Dados:</p>
<p>
<p>php artisan make:migration create_journals_table --create</p>
<p>php artisan make:model Journal --migration</p>
<p>php artisan make:factory Journal --model=Journal</p>
<p>php artisan make:seed JournalTableSeeder</p>
<p>php artisan migrate</p>
<p>php artisan migrate:fresh</p>
<p>php artisan migrate:fresh --seed</p>
<br>

<p class="h4">Comandos Controller:</p>
<p>
<p>php artisan make:controller JournalController</p>
<p>php artisan make:controller JournalController --resource</p>
<p>php artisan make:controller JournalController --resource --model=Journal</p>
<br>

<p class="h4">Comandos Auth (Laravel > 6):</p>
<p>
<p>composer require laravel/ui --dev</p>
<p>php artisan ui vue --auth</p>
<p>npm install && npm run dev</p>
<br>

<p class="h4">Comandos Bootstrap (Laravel > 6):</p>
<p>
<p>composer require laravel/ui --dev</p>
<p>php artisan ui bootstrap</p>
<p>npm install && npm run dev</p>
<br>

<p class="h4">Rotas:</p>
<p>
<p>/home</p>
<p>/journals</p>
<p>/journal/{journal}</p>
<p>/seguir/revista/{journal}/usuario/{user}</p>
<p>/naoseguir/revista/{journal}/usuario/{user}</p>
<p>/posts</p>
<p>/post/{post}</p>
<p>/users</p>
<p>/user/{user}</p>
<p>/curtir/post/{post}/usuario/{user}</p>
<p>/descurtir/post/{post}/usuario/{user}</p>
<p>/visualizado/post/{post}/usuario/{user}</p>
</p>
<br>
<br>
<br>